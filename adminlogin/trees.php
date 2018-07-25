<?php

/**
 * ECSHOP 会员管理程序
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: users.php 17217 2011-01-19 06:29:08Z liubo $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

/*------------------------------------------------------ */
//-- 用户帐号列表
/*------------------------------------------------------ */

if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('users_manage');
    $smarty->assign('ur_here',$_LANG['user_trees']);
    $user_id = $_GET['id'];
    if(empty($user_id)){
        $lnk[] = array('text' => $_LANG['go_back'], 'href'=>'tree.php?act=list');
        sys_msg(sprintf($_LANG['server_error']), 0, $lnk);
    }

    $user_list = user_trees_list($user_id);

    $smarty->assign('user_id',$user_id);
    $smarty->assign('user_list',    $user_list['user_list']);
    $smarty->assign('filter',       $user_list['filter']);
    $smarty->assign('record_count', $user_list['record_count']);
    $smarty->assign('page_count',   $user_list['page_count']);
    $smarty->assign('full_page',    1);
    $smarty->assign('sort_user_tree_id', '<img src="images/sort_desc.gif">');

    assign_query_info();
    $smarty->display('user_trees_list.htm');
}




/*------------------------------------------------------ */
//-- ajax返回用户杏树列表
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $user_list = user_trees_list();
    $smarty->assign('user_id',$user_id);
    $smarty->assign('user_list',    $user_list['user_list']);
    $smarty->assign('filter',       $user_list['filter']);
    $smarty->assign('record_count', $user_list['record_count']);
    $smarty->assign('page_count',   $user_list['page_count']);

    $sort_flag  = sort_flag($user_list['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('user_trees_list.htm'), '', array('filter' => $user_list['filter'], 'page_count' => $user_list['page_count']));
}









/*------------------------------------------------------ */
//-- 批量删除用户杏树
/*------------------------- ----------------------------- */

elseif ($_REQUEST['act'] == 'batch_remove')
{
    /* 检查权限 */
    admin_priv('users_drop');
    if (isset($_POST['checkboxes']))
    {
        $sql = "DELETE FROM ecs_user_tree WHERE user_tree_id ".db_create_in($_POST['checkboxes']);
        $res = $db->query($sql);
        admin_log('杏树', 'batch_remove', 'trees');

        $lnk[] = array('text' => $_LANG['go_back'], 'href'=>'trees.php?act=list&id='.$_POST['user_id']);
        sys_msg(sprintf($_LANG['batch_remove_success'], $count), 0, $lnk);
    }
    else
    {
        $lnk[] = array('text' => $_LANG['go_back'], 'href'=>'trees.php?act=list&id='.$_POST['user_id']);
        sys_msg($_LANG['no_select_user'], 0, $lnk);
    }
}





/*------------------------------------------------------ */
//-- 删除杏树
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'remove')
{
    /* 检查权限 */
//    admin_priv('users_drop');
    $id = intval($_GET['id']);   //杏树id
    $user_id = intval($_GET['user_id']);

//    DELETE FROM 表名称 WHERE 列名称 = 值
    $sql = 'DELETE FROM ecs_user_tree WHERE user_tree_id='.$id;
    $GLOBALS['db']->query($sql);
    /* 记录管理员操作 */
    admin_log('杏树', 'remove', 'trees');
    /* 提示信息 */
    $lnk[] = array('text' => $_LANG['go_back'], 'href'=>'trees.php?act=list&id='.$user_id);
    sys_msg(sprintf($_LANG['remove_success']), 0, $lnk);

}





/**
 *  返回用户拥有的杏树列表数据
 *
 * @access  public
 * @param $user_id
 *
 * @return void
 */
function user_trees_list($user_id = '')
{
    $result = get_filter();

    if ($result === false)
    {

         $filter['user_id'] = $_REQUEST['user_id'] == '' ? $user_id : $_REQUEST['user_id'];

        /* 过滤条件 */
        $filter['keywords'] = empty($_REQUEST['keywords']) ? '' : trim($_REQUEST['keywords']);

        if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)
        {
            $filter['keywords'] = json_str_iconv($filter['keywords']);
        }


        $filter['sort_by']    = empty($_REQUEST['sort_by'])    ? 'user_tree_id' : trim($_REQUEST['sort_by']);
        $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC'     : trim($_REQUEST['sort_order']);

        $ex_where = ' WHERE user_id = '.$filter['user_id'];
        if ($filter['keywords'])
        {
            $ex_where .= " AND user_tree_id LIKE '%" . mysql_like_quote($filter['keywords']) ."%'";
        }

        $filter['record_count'] = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('user_tree') . $ex_where);

        /* 分页大小 */
        $filter = page_and_size($filter);
        $sql = "SELECT user_id,user_tree_id,exchange_time".
            " FROM " . $GLOBALS['ecs']->table('user_tree') . $ex_where .
            " ORDER by " . $filter['sort_by'] . ' ' . $filter['sort_order'] .
            " LIMIT " . $filter['start'] . ',' . $filter['page_size'];

        $filter['keywords'] = stripslashes($filter['keywords']);
        set_filter($filter, $sql);
    }
    else
    {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }

    $user_list = $GLOBALS['db']->getAll($sql);

    $arr = array('user_list' => $user_list, 'filter' => $filter,
        'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
    return $arr;
}


function keep_array($content){
    $fp = fopen('aa.txt','w+');
    fwrite($fp,var_export($content,true));
    fclose($fp);
}

?>