<?php

/**
 * ECSHOP EC青蜂网络二次开发函数库
 * ============================================================================
 * * 版权所有 2005-2020 青蜂网络，并保留所有权利。
 * 网站地址: http://www.0769web.net；
 * ----------------------------------------------------------------------------
 * ============================================================================
 * $Id: lib_bee.php 1.0 2015-10-30 $
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}
 
/**
* 根据广告位获得广告列表
*/
function get_advlist($position,$num)
{
		$arr = array( );
		$sql = "select ap.ad_width,ap.ad_height,ad.ad_id,ad.ad_name,ad.ad_code,ad.ad_link,ad.ad_id from ".$GLOBALS['ecs']->table( "ad_position" )." as ap left join ".$GLOBALS['ecs']->table( "ad" )." as ad on ad.position_id = ap.position_id where ap.position_name ='".$position.("' and ad.enabled=1 limit ".$num );
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $idx => $row )
		{
				$arr[$row['ad_id']]['name'] = $row['ad_name'];
				$arr[$row['ad_id']]['url'] = "affiche.php?ad_id=".$row['ad_id']."&uri=".$row['ad_link'];
				$arr[$row['ad_id']]['image'] = "data/afficheimg/".$row['ad_code'];
				$arr[$row['ad_id']]['content'] = "<a href='".$arr[$row['ad_id']]['url']."'><img src='data/afficheimg/".$row['ad_code']."' width='".$row['ad_width']."' height='".$row['ad_height']."' /></a>";
				$arr[$row['ad_id']]['width'] = $row['ad_width'];
				$arr[$row['ad_id']]['height'] = $row['ad_height'];
		}
		return $arr;
}

/**
* 获得某个分类下的品牌列表
*
* @access  public
* @param   int     $cat
* @return  array
*/
function get_cat_brands($cat = 0, $app = 'brand' ,$limnum=0,$sort='tag DESC, b.sort_order ASC')
{
    global $page_libs;
    $template = basename(PHP_SELF);
    $template = substr($template, 0, strrpos($template, '.'));
    include_once(ROOT_PATH . ADMIN_PATH . '/includes/lib_template.php');
    static $static_page_libs = null;
    if ($static_page_libs == null)
    {
            $static_page_libs = $page_libs;
    }

    $children = ($cat > 0) ? ' AND ' . get_children($cat) : '';

    $sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, b.brand_desc, COUNT(*) AS goods_num, IF(b.brand_logo > '', '1', '0') AS tag ".
            "FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ".
                $GLOBALS['ecs']->table('goods') . " AS g ".
            "WHERE g.brand_id = b.brand_id $children AND is_show = 1 " .
            " AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".
            "GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY $sort";
	
	if($limnum>0)
	{
		$num=$limnum;
		$sql .= " LIMIT $num ";
	}
	else
	{
      if (isset($static_page_libs[$template]['/library/brands.lbi']))
      {
        $num = get_library_number("brands");
        $sql .= " LIMIT $num ";
      }
	}
	
    $row = $GLOBALS['db']->getAll($sql);

    foreach ($row AS $key => $val)
    {
        $row[$key]['url'] = build_uri($app, array('cid' => $cat, 'bid' => $val['brand_id']), $val['brand_name']);
        $row[$key]['brand_desc'] = htmlspecialchars($val['brand_desc'],ENT_QUOTES);
    }

    return $row;
}

/**
* 获得首页主广告
*/
function get_flash_xml()
{
    $flashdb = array();
    if (file_exists(ROOT_PATH . DATA_DIR . '/flash_data.xml'))
    {

        // 兼容v2.7.0及以前版本
        if (!preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"\ssort="([^"]*)"\scolor="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER))
        {
            preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"\scolor="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER);
        }

        if (!empty($t))
        {
            foreach ($t as $key => $val)
            {
                $val[5] = isset($val[5]) ? $val[5] : 0;
                $flashdb[] = array('src'=>$val[1],'url'=>$val[2],'text'=>$val[3],'sort'=>$val[4],'color'=>$val[5]);
            }
        }
    }
    return $flashdb;
}

/**
 * 调用购物车信息
 *
 * @access  public
 * @return  string
 */
function insert_cart_info_mb5()
{
 	$sql_where = $_SESSION['user_id']>0 ? "c.user_id='". $_SESSION['user_id'] ."' " : "c.session_id = '" . SESS_ID . "' AND c.user_id=0 ";//青蜂网络购物车选择性结算注释
   $sql = 'SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount' .
           //' FROM ' . $GLOBALS['ecs']->table('cart') .//青蜂网络购物车选择性结算注释
		   ' FROM ' . $GLOBALS['ecs']->table('cart') ." AS c ".//青蜂网络购物车选择性结算注释
		   " WHERE $sql_where AND rec_type = '" . CART_GENERAL_GOODS . "'";//青蜂网络购物车选择性结算注释
    $row = $GLOBALS['db']->GetRow($sql);

    if ($row)
    {
        $number = intval($row['number']);
        $amount = floatval($row['amount']);
    }
    else
    {
        $number = 0;
        $amount = 0;
    }
	
	$sql = 'SELECT c.rec_id,c.goods_id,c.goods_price,c.goods_number,c.goods_name,c.goods_attr,g.goods_thumb ' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') . ' AS c '.
		   " LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g ON c.goods_id = g.goods_id " .
           //" WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'";//青蜂网络购物车选择性结算注释
		   " WHERE $sql_where AND rec_type = '" . CART_GENERAL_GOODS . "'";//青蜂网络购物车选择性结算注释
    $res = $GLOBALS['db']->GetAll($sql);
	
	foreach($res as $idx => $row)
	{
		$goods[$idx]['url']          = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);	
		$goods[$idx]['id']           = $row['goods_id'];
		$goods[$idx]['rec_id']           = $row['rec_id'];
		$goods[$idx]['name']         = $row['goods_name'];
		$goods[$idx]['goods_number']         = $row['goods_number'];
		$goods[$idx]['goods_attr']         = $row['goods_attr'];
		$goods[$idx]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                               sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
		$goods[$idx]['shop_price']   = $row['goods_price'];
		$goods[$idx]['thumb']        = get_image_path($row['goods_id'], $row['goods_thumb'], true);
	}
	
	$need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;
	$GLOBALS['smarty']->assign('number', $number);
	$GLOBALS['smarty']->assign('amount', $amount);
	$GLOBALS['smarty']->assign('cart_list', $goods);

    $val = $GLOBALS['smarty']->fetch('library/cart_info.lbi');  
    $GLOBALS['smarty']->caching = $need_cache;
	return $val;
}

/* 代码增加_start  By   www.0769web.net */
function  is_exist_prod($first_arr, $one, $prod_exist_arr)
{
	if (empty($prod_exist_arr))
	{
		return 0;
	}
	$first_arr[]=$one;

	$all_valid =0;
	foreach($prod_exist_arr AS $item_exist)
	{		
		$first_exist=1;
		foreach($first_arr AS $first)
		{			
			if (!strstr($item_exist, '|'. $first .'|'))
			{
				$first_exist=0;
				break;
			}
		}
		if($first_exist)
		{
			$all_valid=1;
			break;
		}
	}
	return $all_valid;
}

 /**
 * 获得指定分类下的子分类
 *
 * @access  public
 * @param   integer     $cat_id     分类编号
 * @return  array
 */
 function get_children_tree($cat_id)
 {
     if ($cat_id >0 )
    {
        $sql = 'SELECT count(*) FROM ' . $GLOBALS['ecs']->table('category') . " WHERE parent_id = '$cat_id'";
        if ($GLOBALS['db']->getOne($sql))
        {
            // 获取当前分类名及其子类
            $sql = 'SELECT a.cat_id, a.cat_name, a.sort_order AS parent_order, a.cat_id, b.is_show, ' .
                    'b.cat_id AS child_id, b.cat_name AS child_name, b.sort_order AS child_order ' .
                'FROM ' . $GLOBALS['ecs']->table('category') . ' AS a ' .
                'LEFT JOIN ' . $GLOBALS['ecs']->table('category') . ' AS b ON b.parent_id = a.cat_id ' .
                "WHERE a.cat_id = '$cat_id' and b.is_show = 1 ORDER BY b.sort_order ASC, b.cat_id ASC";
        }        
        else
        {
            $sql = 'SELECT parent_id FROM ' . $GLOBALS['ecs']->table('category') . " WHERE cat_id = '$cat_id'";
            $parent_id = $GLOBALS['db']->getOne($sql);
            if ($parent_id > 0)
            {
                //获取当前分类、兄弟及其父类
                $sql = 'SELECT a.cat_id, a.cat_name, b.is_show, b.cat_id AS child_id, b.cat_name AS child_name, b.sort_order ' .
                    'FROM ' . $GLOBALS['ecs']->table('category') . ' AS a ' .
                    'LEFT JOIN ' . $GLOBALS['ecs']->table('category') . ' AS b ON b.parent_id = a.cat_id ' .
                    "WHERE b.parent_id = '$parent_id' and b.is_show = 1 ORDER BY b.sort_order ASC, b.cat_id ASC";
            }
            else
            {
                //获取当前分类
                $sql = 'SELECT a.cat_id, a.cat_name FROM '
                        . $GLOBALS['ecs']->table('category') . ' AS a ' .
                        "WHERE a.cat_id = '$cat_id'";
            }
        }
        
        
        $res = $GLOBALS['db']->getAll($sql);

    $cat_arr = array();
    foreach ($res AS $row)
    {
        $cat_arr[$row['cat_id']]['id']   = $row['cat_id'];
        $cat_arr[$row['cat_id']]['name'] = $row['cat_name'];
        $cat_arr[$row['cat_id']]['url']  = build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);

        if ($row['child_id'] != NULL)
        {
            $cat_arr[$row['cat_id']]['children'][$row['child_id']]['id']   = $row['child_id'];
            $cat_arr[$row['cat_id']]['children'][$row['child_id']]['name'] = $row['child_name'];
            $cat_arr[$row['cat_id']]['children'][$row['child_id']]['url']  = build_uri('category', array('cid' => $row['child_id']), $row['child_name']);
        }
    }

    return $cat_arr;
    }    
}

function get_cat_top3($cat_id)
{
    $cats = get_children($cat_id);
    $where = !empty($cats) ? "AND ($cats OR " . get_extension_goods($cats) . ") " : '';

    /* 排行统计的时间 */
    switch ($GLOBALS['_CFG']['top10_time'])
    {
        case 1: // 一年
            $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 365 * 86400) . "'";
        break;
        case 2: // 半年
            $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 180 * 86400) . "'";
        break;
        case 3: // 三个月
            $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 90 * 86400) . "'";
        break;
        case 4: // 一个月
            $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 30 * 86400) . "'";
        break;
        default:
            $top10_time = '';
    }

    $sql = 'SELECT g.goods_id, g.goods_name, g.shop_price, g.goods_thumb, SUM(og.goods_number) as goods_number ' .
           'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g, ' .
                $GLOBALS['ecs']->table('order_info') . ' AS o, ' .
                $GLOBALS['ecs']->table('order_goods') . ' AS og ' .
           "WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 $where " ;
    //判断是否启用库存，库存数量是否大于0
    if ($GLOBALS['_CFG']['use_storage'] == 1)
    {
        $sql .= " AND g.goods_number > 0 ";
    }
    $sql .= ' AND og.order_id = o.order_id AND og.goods_id = g.goods_id ' .
           "AND (o.pay_status = '" . PS_PAYED . "' OR o.pay_status = '" . PS_PAYING . "') " .
           'GROUP BY g.goods_id ORDER BY goods_number DESC, g.goods_id DESC LIMIT 3';
    $row = $GLOBALS['db']->getAll($sql);
    foreach ($row AS $key => $val)
    {
        $row[$key]['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                    sub_str($val['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $val['goods_name'];
        $row[$key]['url']        = build_uri('goods', array('gid' => $val['goods_id']), $val['goods_name']);
        $row[$key]['thumb'] = get_image_path($val['goods_id'], $val['goods_thumb'],true);
        $row[$key]['price'] = price_format($val['shop_price']);
    }

    return $row;
}

/**
 * ecshop 实现其他页面(商品详情页、商品分类页、团购页、优惠活动页、积分商城)
 * 判断如果是智能手机访问的话 跳转到ECTouch1.0手机版对应页面 方法
 *
 * @access  public
 */
function pc_to_mobile()
{
    //判断是否是手机访问
    $is_mobile = false;
    $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
    $uachar = "/(nokia|sony|ericsson|mot|samsung|sgh|lg|philips|panasonic|alcatel|lenovo|cldc|midp|mobile)/i";
  
    if(($ua == '' || preg_match($uachar, $ua))&& !strpos(strtolower($_SERVER['REQUEST_URI']),'wap'))
    {
        $is_mobile = true;
    }

	$phpself = $_SERVER["REQUEST_URI"];
  
    if($is_mobile && !strstr($phpself,'wechat') && !strstr($phpself,'erweima_user.php')){
        /*
         * 如果你绑定了手机版域名 http://www.abc.com/mobile 为 http://m.abc.com
         * 那么 $mobile_www = http://m.abc.com
         */
        $mobile_www = $GLOBALS['ecs']->url().'mobile';
		$mobile_url = $mobile_www.$phpself;

		ecs_header("Location: $mobile_url");
        exit;  
    }
}

function get_child_cats( $tree_id = 0, $num = 0 )
{
		$three_arr = array( );
		$sql = "SELECT count(*) FROM ".$GLOBALS['ecs']->table( "category" ).( " WHERE parent_id = '".$tree_id."' AND is_show = 1 " );
		if ( 0 < $num )
		{
				$where = " limit ".$num;
		}
		if ( $GLOBALS['db']->getOne( $sql ) || $tree_id == 0 )
		{
				$child_sql = "SELECT cat_id, cat_name, parent_id, is_show FROM ".$GLOBALS['ecs']->table( "category" ).( "WHERE parent_id = '".$tree_id."' AND is_show = 1 ORDER BY sort_order ASC, cat_id ASC {$where}" );
				$res = $GLOBALS['db']->getAll( $child_sql );
				foreach ( $res as $row )
				{
						if ( $row['is_show'] )
						{
								$three_arr[$row['cat_id']]['id'] = $row['cat_id'];
								$three_arr[$row['cat_id']]['name'] = $row['cat_name'];
								$three_arr[$row['cat_id']]['url'] = build_uri( "category", array(
										"cid" => $row['cat_id']
								), $row['cat_name'] );
						}
				}
		}
		return $three_arr;
}

function get_user_backorders ($user_id, $num = 10, $start = 0)
{
	/* 取得订单列表 */
	$arr = array();
	
	$sql = "SELECT bo.*, g.goods_name " . " FROM " . $GLOBALS['ecs']->table('back_order') . " AS bo left join " . $GLOBALS['ecs']->table('goods') . " AS g " . " on bo.goods_id=g.goods_id  " . " WHERE user_id = '$user_id' ORDER BY add_time DESC";
	$res = $GLOBALS['db']->SelectLimit($sql, $num, $start);
	
	while($row = $GLOBALS['db']->fetchRow($res))
	{
		
		$row['order_time'] = local_date($GLOBALS['_CFG']['time_format'], $row['add_time']);
		$row['refund_money_1'] = price_format($row['refund_money_1'], false);
		
		$row['goods_url'] = build_uri('goods', array(
			'gid' => $row['goods_id']
		), $row['goods_name']);
		$row['status_back_1'] = $row['status_back'];
		$row['status_back'] = $GLOBALS['_LANG']['bos'][(($row['back_type'] == 4 && $row['status_back'] != 8) ? $row['back_type'] : $row['status_back'])] . ' - ' . $GLOBALS['_LANG']['bps'][$row['status_refund']];
		
		$arr[] = $row;
	}
	
	return $arr;
}

/**
 * 调用会员信息
 *
 * @access  public
 * @return  string
 */
function insert_member_info_top()
{
    $need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;

    if ($_SESSION['user_id'] > 0)
    {
        $GLOBALS['smarty']->assign('user_info', get_user_info());
    }
    else
    {
        if (!empty($_COOKIE['ECS']['username']))
        {
            $GLOBALS['smarty']->assign('ecs_username', stripslashes($_COOKIE['ECS']['username']));
        }
        $captcha = intval($GLOBALS['_CFG']['captcha']);
        if (($captcha & CAPTCHA_LOGIN) && (!($captcha & CAPTCHA_LOGIN_FAIL) || (($captcha & CAPTCHA_LOGIN_FAIL) && $_SESSION['login_fail'] > 2)) && gd_version() > 0)
        {
            $GLOBALS['smarty']->assign('enabled_captcha', 1);
            $GLOBALS['smarty']->assign('rand', mt_rand());
        }
    }
    $output = $GLOBALS['smarty']->fetch('library/member_info_top.lbi');

    $GLOBALS['smarty']->caching = $need_cache;

    return $output;
}

/**
 * 调用购物车信息
 *
 * @access  public
 * @return  string
 */
function insert_cart_info_top()
{
	$sql_where = $_SESSION['user_id']>0 ? "c.user_id='". $_SESSION['user_id'] ."' " : "c.session_id = '" . SESS_ID . "' AND c.user_id=0 ";//青蜂网络购物车选择性结算注释
	$sql_where1 = $_SESSION['user_id']>0 ? "user_id='". $_SESSION['user_id'] ."' " : "session_id = '" . SESS_ID . "' AND user_id=0 ";//青蜂网络购物车选择性结算注释
    $sql = 'SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') .
           " WHERE $sql_where1 AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $row = $GLOBALS['db']->GetRow($sql);

    if ($row)
    {
        $number = intval($row['number']);
        $amount = price_format(floatval($row['amount']));
    }
    else
    {
        $number = 0;
        $amount = 0;
    }
	
	$sql = 'SELECT c.rec_id,c.goods_id,c.goods_price,c.goods_number,c.goods_name,c.goods_attr,g.goods_thumb ' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') . ' AS c '.
		   " LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g ON c.goods_id = g.goods_id " .
           " WHERE $sql_where AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $res = $GLOBALS['db']->GetAll($sql);
	
	foreach($res as $idx => $row)
	{
		$goods[$idx]['url']          = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);	
		$goods[$idx]['id']           = $row['goods_id'];
		$goods[$idx]['rec_id']           = $row['rec_id'];
		$goods[$idx]['name']         = $row['goods_name'];
		$goods[$idx]['goods_number']         = $row['goods_number'];
		$goods[$idx]['goods_attr']         = $row['goods_attr'];
		$goods[$idx]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                               sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
		$goods[$idx]['shop_price']   = price_format($row['goods_price']);
		$goods[$idx]['goods_thumb']        = get_image_path($row['goods_id'], $row['goods_thumb'], true);
	}
	
	$need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;
	$GLOBALS['smarty']->assign('number', $number);
	$GLOBALS['smarty']->assign('amount', $amount);
	$GLOBALS['smarty']->assign('cart_list', $goods);

    $val = $GLOBALS['smarty']->fetch('library/cart_info_top.lbi');  
    $GLOBALS['smarty']->caching = $need_cache;
	return $val;
}

function getcontent($url){
    if(function_exists("file_get_contents")){
        $file_contents = file_get_contents($url);
    }else{
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);    
    }
    return $file_contents;
}

function get_brands1($cat = 0, $app = 'brand')
{
    $children = ($cat > 0) ? ' AND ' . get_children($cat) : '';

    $sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, b.brand_desc, COUNT(*) AS goods_num, IF(b.brand_logo > '', '1', '0') AS tag ".
            "FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ".
                $GLOBALS['ecs']->table('goods') . " AS g ".
            "WHERE g.brand_id = b.brand_id $children AND is_show = 1 " .
            " AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".
            "GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY tag DESC, b.sort_order ASC";
    $row = $GLOBALS['db']->getAll($sql);

    foreach ($row AS $key => $val)
    {
        $row[$key]['url'] = build_uri($app, array('cid' => $cat, 'bid' => $val['brand_id']), $val['brand_name']);
        $row[$key]['brand_desc'] = htmlspecialchars($val['brand_desc'],ENT_QUOTES);
    }

    return $row;
}

/**
 * 获得指定分类下的推荐商品
 *
 * @access  public
 * @param   string      $type       推荐类型，可以是 best, new, hot, promote
 * @param   string      $cats       分类的ID
 * @return  array
 */
function get_cat_recommend_goods($type = '', $cats = '')
{
    $brand_where = ($brand > 0) ? " AND g.brand_id = '$brand'" : '';

    $sql =  'SELECT g.goods_id, g.goods_name, g.goods_name_style, g.market_price, g.shop_price AS org_price, g.promote_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, ".
                'promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, goods_img ' .
            'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
            "LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                    "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ".
            'WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ';

    switch ($type)
    {
        case 'best':
            $sql .= ' AND is_best = 1';
            break;
        case 'new':
            $sql .= ' AND is_new = 1';
            break;
        case 'hot':
            $sql .= ' AND is_hot = 1';
            break;
        case 'promote':
            $time = gmtime();
            $sql .= " AND is_promote = 1 AND promote_start_date <= '$time' AND promote_end_date >= '$time'";
            break;
    }

    if (!empty($cats))
    {
    $cats = get_children($cats);
        $sql .= " AND (" . $cats . " OR " . get_extension_goods($cats) .")";
    }

    $sql .= ' ORDER BY g.sort_order, g.last_update DESC';
    $res = $GLOBALS['db']->selectLimit($sql, 4);

    $idx = 0;
    $goods = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        if ($row['promote_price'] > 0)
        {
            $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
            $goods[$idx]['promote_price'] = $promote_price > 0 ? price_format($promote_price) : '';
        }
        else
        {
            $goods[$idx]['promote_price'] = '';
        }

        $goods[$idx]['id']           = $row['goods_id'];
        $goods[$idx]['name']         = $row['goods_name'];
        $goods[$idx]['brief']        = $row['goods_brief'];
        $goods[$idx]['brand_name']   = $row['brand_name'];
        $goods[$idx]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                       sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
        $goods[$idx]['market_price'] = price_format($row['market_price']);
        $goods[$idx]['shop_price']   = price_format($row['shop_price']);
        $goods[$idx]['thumb']        = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $goods[$idx]['goods_img']    = get_image_path($row['goods_id'], $row['goods_img']);
        $goods[$idx]['url']          = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);

        $goods[$idx]['short_style_name'] = add_style($goods[$idx]['short_name'], $row['goods_name_style']);
        $idx++;
    }

    return $goods;
}

function get_index_cat_brands( $cat, $num = 0, $app = "category" )
{
		$where = "";
		if ( $num != 0 )
		{
				$where = " limit ".$num;
		}
		$children = 0 < $cat ? " AND ".get_children( $cat ) : "";
		$sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, COUNT(g.goods_id) AS goods_num, IF(b.brand_logo > '', '1', '0') AS tag FROM ".$GLOBALS['ecs']->table( "brand" )."AS b, ".$GLOBALS['ecs']->table( "goods" )." AS g ".( "WHERE g.brand_id = b.brand_id ".$children." " )."GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY tag DESC, b.sort_order ASC ".$where;
		$row = $GLOBALS['db']->getAll( $sql );
		foreach ( $row as $key => $val )
		{
				$row[$key]['id'] = $val['brand_id'];
				$row[$key]['name'] = $val['brand_name'];
				$row[$key]['logo'] = $val['brand_logo'];
				$row[$key]['url'] = build_uri( $app, array(
						"cid" => $cat,
						"bid" => $val['brand_id']
				), $val['brand_name'] );
		}
		return $row;
}

/**
* 获得最新评论
*/
function get_comment_diy($type=0, $count=8,$cat=0)
{
        if($cat!=0)
		{
			$children=' and '.get_children($cat);
		}
	
		$arr = array();
		$sql = "select c.*, g.goods_id, g.goods_thumb, g.goods_name,g.shop_price,g.market_price from ".$GLOBALS['ecs']->table( "comment" )." AS c JOIN ".$GLOBALS['ecs']->table( "goods" )." AS g ON c.id_value = g.goods_id where c.comment_type = ".$type." and c.status=1 $children order by c.add_time desc limit ".$count;
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $idx => $row )
		{
				$arr[$idx]['id_value'] = $row['id_value'];
				$arr[$idx]['content'] = $row['content'];
				$arr[$idx]['comment_rank'] = $row['comment_rank'];
				$arr[$idx]['time'] = local_date( "Y-m-d", $row['add_time'] );
				$arr[$idx]['goods_id'] = $row['goods_id'];
				$arr[$idx]['goods_name'] = $row['goods_name'];
				$arr[$idx]['goods_thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$arr[$idx]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
				$arr[$idx]['user_name'] = substr($row['user_name'], 0, 2);
				$arr[$idx]['user_name'] .= '***'.substr($row['user_name'], -1);
				
                $arr[$idx]['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($arr[$idx]['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $arr[$idx]['goods_name'];
				$arr[$idx]['shop_price'] = price_format($row['shop_price']);
				$arr[$idx]['market_price'] = price_format($row['market_price']);
				$arr[$idx]['comment_rank2'] = $row['comment_rank']/5*100;
				
		}
		return $arr;
}

?>