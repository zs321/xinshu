<?php
define('IN_ECS', true);

require (dirname(__FILE__) . '/includes/init.php');

$smarty->assign('cfg',          $_CFG);

if((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

/* ------------------------------------------------------ */
// -- act 操作项的初始化
/* ------------------------------------------------------ */
if(empty($_REQUEST['act']))
{
    $_REQUEST['act'] = 'tree';
}else{
    $_REQUEST['act'] = 'tree_change';
}

$function_name = 'action_' . $_REQUEST['act'];

if(! function_exists($function_name))
{

    $function_name = 'action_tree';
}

call_user_func($function_name);

return;

/* ------------------------------------------------------ */
// -- 杏树认购 --> ajax兑换杏树
/* ------------------------------------------------------ */
function action_tree_change ()
{
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];
    $user_id = $_SESSION['user_id'];
    $lang = $GLOBALS['_LANG'];
    $sql = "SELECT user_id,tree_num " . "FROM " . $ecs->table('users'). "WHERE user_id = ".$user_id;   //获取用户信息
    $user_info = $db->getRow($sql);
    if($user_info['tree_num'] <= 0){
        json('201',$lang['ps_tree_num_empty']);
    }
    $tree_data = array('user_id'=>$user_id,'exchange_time'=>date('Y-m-d H:i:s'));
    //点击土地生成兑换一颗
    $add_tree_res = $db->autoExecute($ecs->table('user_tree'),$tree_data , 'INSERT');
    if(!$add_tree_res) json(500,'数据异常，请稍后再试');
    //用户获取树资格减一
    $reduce_sql = 'UPDATE ecs_users SET `tree_num` = `tree_num` -1,`trees`+1 WHERE user_id = '.$user_id;
    $reduce_res = $db->query($reduce_sql);
    if($reduce_res === false) json('501','数据异常，请稍后再试');
    $user_info = $db->getRow($sql);
    $trees_sql = 'select count(*) as trees from ecs_user_tree where user_id = '.$user_id;
    $trees = $db->getRow($trees_sql)['trees'];

    $data = array(
        'user_id' => $user_id,
        'tree_num'=> $user_info['tree_num'], //用户可获取杏树的资格
        'trees' =>$trees   //用户已经拥有的杏树数量
    );
    $fp = fopen('aa.txt','w+');
    fwrite($fp,var_export($lang['ps_tree_num_empty'],true));
    fclose($fp);
    json(200,'恭喜您成功兑换~',$data);

}



function action_tree ()
{
    $smarty = $GLOBALS['smarty'];
    /* 模板赋值 */
    assign_template();
    $db = $GLOBALS['db'];
    $lang = $GLOBALS['_LANG'];
    $ecs = $GLOBALS['ecs'];
    $user_id = $_SESSION['user_id'];

    //判断是否登录
    if($user_id <= 0)
    {
        show_message($lang['ps_error_login'], '', '', 'error');
    }


    $sql = "SELECT user_id,tree_num " . "FROM " . $ecs->table('users'). "WHERE user_id = ".$user_id;   //获取用户信息
    $user_info = $db->getRow($sql);
    $trees_sql = 'select  count(*) as trees  from ecs_user_tree where user_id = '.$user_id;
    $trees = $db->getRow($trees_sql)['trees'];


    $smarty->assign('page_title', "杏树认购"); // 页面标题
    $smarty->assign('ur_here', "首页 > 杏树认购"); // 当前位置
    $smarty->assign('categories', get_categories_tree()); // 分类树
    $smarty->assign('helps', get_shop_help()); // 网店帮助
    $smarty->assign('top_goods', get_top10()); // 销售排行
    $smarty->assign('promotion_info', get_promotion_info());
    $smarty->assign('tree_num',$user_info['tree_num']);
    $smarty->assign('trees',$trees);
    $smarty->display('pre_sale_list.dwt');

}


function json($code = '',$content = '',$data = ''){
    $arr = ['code'=>$code,'content'=>$content,'data'=>$data];
    echo json_encode($arr);
    exit;
}


?>