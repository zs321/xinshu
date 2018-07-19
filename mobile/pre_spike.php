<?php

/**
 * ECSHOP 秒杀商品前台文件
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: group_buy.php 17217 2011-01-19 06:29:08Z liubo $
 */

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

/*------------------------------------------------------ */
//-- act 操作项的初始化
/*------------------------------------------------------ */
if (empty($_REQUEST['act']))
{
    $_REQUEST['act'] = 'list';
}

/*------------------------------------------------------ */
//-- 秒杀商品 --> 秒杀活动商品列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 取得秒杀活动总数 */
    $count = pre_spike_count();
    if ($count > 0)
    {
        /* 取得每页记录数 */
        $size = 8;

        /* 计算总页数 */
        $page_count = ceil($count / $size);

        /* 取得当前页 */
        $page = isset($_REQUEST['page']) && intval($_REQUEST['page']) > 0 ? intval($_REQUEST['page']) : 1;
        $page = $page > $page_count ? $page_count : $page;

        /* 缓存id：语言 - 每页记录数 - 当前页 */
        $cache_id = $_CFG['lang'] . '-' . $size . '-' . $page;
        $cache_id = sprintf('%X', crc32($cache_id));
    }
    else
    {
        /* 缓存id：语言 */
        $cache_id = $_CFG['lang'];
        $cache_id = sprintf('%X', crc32($cache_id));
    }

    /* 如果没有缓存，生成缓存 */
    if (!$smarty->is_cached('pre_spike_list.dwt', $cache_id))
    {
        if ($count > 0)
        {
            /* 取得当前页的活动 */
            $ps_list = pre_spike_list($size, $page);
            $smarty->assign('ps_list',  $ps_list);

            /* 设置分页链接 */
            $pager = get_pager('pre_spike.php', array('act' => 'list'), $count, $page, $size);
            $smarty->assign('pager', $pager);
        }

        /* 模板赋值 */
        $smarty->assign('cfg', $_CFG);
        assign_template();
        $position = assign_ur_here();
        $smarty->assign('page_title', $position['title']);    // 页面标题
        $smarty->assign('ur_here',    $position['ur_here']);  // 当前位置
        $smarty->assign('categories', get_categories_tree()); // 分类树

        assign_dynamic('pre_spike_list');
    }

    /* 显示模板 */
    $smarty->display('pre_spike_list.dwt', $cache_id);
}

/* 取得秒杀活动总数 */
function pre_spike_count()
{
    $now = gmtime();
    $sql = "SELECT COUNT(*) " .
            "FROM " . $GLOBALS['ecs']->table('goods') .
            "WHERE is_sale = 1 ";

    return $GLOBALS['db']->getOne($sql);
}

/**
 * 取得某页的所有秒杀活动
 * @param   int     $size   每页记录数
 * @param   int     $page   当前页
 * @return  array
 */
function pre_spike_list($size, $page)
{
    /* 取得秒杀活动 */
    $ps_list = array();
    $now = gmtime();
    $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('goods') . " WHERE is_sale = 1 ORDER BY sale_end_date DESC";
    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page - 1) * $size);
    while ($group_buy = $GLOBALS['db']->fetchRow($res))
    {

		/* 秒杀时间倒计时 */
        $time = gmtime();
        if ($time >= $group_buy['sale_start_date'] && $time <= $group_buy['sale_end_date'])
        {
             $group_buy['gmt_end_time']  = local_date('Y, m-1, d, H, i, s',$group_buy['sale_end_date']);
             $group_buy['status']  = 1;//代表秒杀进行中
        }
        elseif($time < $group_buy['sale_start_date'] && $time < $group_buy['sale_end_date'])
        {
             $group_buy['gmt_end_time']  = local_date('Y, m-1, d, H, i, s',$group_buy['sale_end_date']);
             $group_buy['status']  = 0;//代表秒杀未开始
        }else{
            $group_buy['gmt_end_time'] = 0;
             $group_buy['status']  = null;
		}
        $group_buy['gmtime']  = local_date('Y, m-1, d, H, i, s',$time);
        $group_buy['gmt_start_time']  = local_date('Y, m-1, d, H, i, s',$group_buy['sale_start_date']);

		// 本地时间，用于倒计时显示，符合JS格式
		$group_buy['local_end_date'] = local_date('Y, m-1, d, H, i, s', $group_buy['sale_end_date']);
		$group_buy['local_start_date'] = local_date('Y, m-1, d, H, i, s', $group_buy['sale_start_date']);
		
		$group_buy['sales_counts'] = get_sales_counts($group_buy['goods_id']);         // 销量

        /* 处理图片 */
        if (empty($group_buy['goods_thumb']))
        {
            $group_buy['goods_thumb'] = get_image_path($group_buy['goods_id'], $group_buy['goods_thumb'], true);
        }
        /* 处理链接 */
        $group_buy['url'] = build_uri('goods', array('gid'=>$group_buy['goods_id']), $group_buy['goods_name']);
        /* 加入数组 */
        $ps_list[] = $group_buy;
    }

    return $ps_list;
}


?>