<?php

/**
 * 红包独立页 红包独立页 会员直接领取红包红包插件
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

/* 获得当前页码 */
$page = isset($_REQUEST['page']) && intval($_REQUEST['page']) > 0 ? intval($_REQUEST['page']) : 1;
$size = 20;
$action = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'default';
if ($action == 'getBonus')
{
    $type_id  = isset($_REQUEST['type_id']) ? trim($_REQUEST['type_id']) : 0;
    if (empty($_SESSION['user_id']))
    {
        show_message("您还没登陆,请登陆后再来领取红包!", "去登陆", 'user.php', 'error');
    }
	$user_bonus_max = $db->getOne("SELECT user_bonus_max FROM " . $ecs->table('bonus_type') . " WHERE type_id = $type_id");
    $user_id = $_SESSION['user_id'];
    //检查是否领取过
    $sql = "select count(*) from " . $ecs->table('user_bonus'). " where bonus_type_id='$type_id' and user_id=$user_id";
    $count = $db->getOne($sql);
    if ($count>=$user_bonus_max)
    {
        show_message("您已经领取过该红包,不能重复领取!", "返回看看能不能领取其他红包！", 'bonus.php', 'error');
    }
    $sql = 'SELECT user_id, email, user_name FROM ' . $ecs->table('users')." where user_id='$user_id'";
    $user_info = $db->getRow($sql);
    $bonus_type = bonus_type_info($type_id);
    $today = local_date($_CFG['date_format']);
    $smarty->assign('user_name', $user_info['user_name']);
    $smarty->assign('shop_name', $GLOBALS['_CFG']['shop_name']);
    $smarty->assign('send_date', $today);
    $smarty->assign('count', 1);
    $smarty->assign('money', price_format($bonus_type['type_money']));
    $content = $smarty->fetch('str:' . $tpl['template_content']);
        /* 向会员红包表录入数据 */
        $sql = "INSERT INTO " . $ecs->table('user_bonus') .
                "(bonus_type_id, bonus_sn, user_id, used_time, order_id)" .
                "VALUES ('$type_id', 0, '$user_info[user_id]', 0, 0)";
        $db->query($sql);
    ecs_header("Location:./bonus.php?act=success&type_id=$type_id\n");
    exit;
}
if ($action == 'success')
{
    assign_template('a', $catlist);
    $type_id  = isset($_REQUEST['type_id']) ? trim($_REQUEST['type_id']) : 0;
    $sql = "select type_id,type_name from " . $ecs->table('bonus_type'). " where type_id=$type_id";
    $type_info = $db->getRow($sql);
    $smarty->assign('type_info', $type_info);
    $position = assign_ur_here(0, '领取红包');
    $smarty->assign('page_title', $position['title']); // 页面标题
    $smarty->assign('ur_here', $position['ur_here']); // 当前位置
    $smarty->assign('helps', get_shop_help()); // 网店帮助
    assign_dynamic('bonus');
    $smarty->display('bonus_success.dwt', $cache_id);
}
elseif($action=='default')
{
    /* 获得页面的缓存ID */
    $cache_id = sprintf('%X', crc32($page . '-' . $_CFG['lang']));
    if (!$smarty->is_cached('comment-list.dwt', $cache_id))
    {
        /* 如果页面没有被缓存则重新获得页面的内容 */
        assign_template('a');
        $position = assign_ur_here(0, "红包列表");
        $smarty->assign('page_title', $position['title']); // 页面标题
        $smarty->assign('ur_here', $position['ur_here']); // 当前位置
        $smarty->assign('helps', get_shop_help()); // 网店帮助
        $smarty->assign('keywords', '红包列表 '.htmlspecialchars($_CFG['shop_keywords']));
        $smarty->assign('description', '红包列表 '.htmlspecialchars($_CFG['shop_desc']));
        $count = get_bonus_count();
        $max_page = ($count> 0) ? ceil($count / $size) : 1;
        if ($page > $max_page)
        {
            $page = $max_page;
        }
        $bonus_list = get_bonus_list($size, $page);
        $smarty->assign('bonus_list', $bonus_list);
        $pager = get_pager('user.php', array('act' => $action), $record_count, $page, 8);
        $smarty->assign('pager', $pager);
        $smarty->assign('categories', get_categories_tree(0)); // 分类树
    }
    $smarty->display('bonus_type.dwt', $cache_id);
}

function get_bonus_list($size, $page)
{
    $cur_date = gmtime();
    $where = " where 1 and send_start_date <= $cur_date and send_end_date >= $cur_date and send_type=4";
    $sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('bonus_type') . " as bt $where ORDER BY type_money asc";
    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page-1) * $size);
    $arr = array();
    $ids = '';
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
		$arr[$row['type_id']]['type_id']          = $row['type_id'];
		$arr[$row['type_id']]['type_money']          = $row['type_money'];
		$arr[$row['type_id']]['use_start_date']          = local_date('Y-m-d', $row['use_start_date']);
		$arr[$row['type_id']]['use_end_date']          = local_date('Y-m-d', $row['use_end_date']);
		$arr[$row['type_id']]['min_goods_amount']          = $row['min_goods_amount'];
		$arr[$row['type_id']]['type_name']          = $row['type_name'];
    }
    return $arr;
}

function get_bonus_count($children, $comment_rank = 0)
{
    $cur_date = gmtime();
    $where = " where 1 and send_start_date <= $cur_date and send_end_date >= $cur_date and send_type=4";
    $count = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('bonus_type')." as b $where ");
    return $count;
	
}

function bonus_type_info($bonus_type_id)
{
    $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('bonus_type') . " WHERE type_id = '$bonus_type_id'";
    return $GLOBALS['db']->getRow($sql);
}

function add_to_maillist($username, $email, $subject, $content, $is_html)
{
    $time = time();
    $content = addslashes($content);
    $template_id = $GLOBALS['db']->getOne("SELECT template_id FROM " . $GLOBALS['ecs']->table('mail_templates') . " WHERE template_code = 'send_bonus'");
    $sql = "INSERT INTO " . $GLOBALS['ecs']->table('email_sendlist') . " (email, template_id, email_content, pri, last_send) VALUES ('$email', $template_id, '$content', 1, '$time')";
    $GLOBALS['db']->query($sql);
    return true;
}

?>