<?php
// 账号绑定 qq124861234

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
require(ROOT_PATH . 'include/lib_weixintong.php');

/* 载入语言文件 */
require_once(ROOT_PATH . 'lang/' .$_CFG['lang']. '/user.php');

$user_id = $_SESSION['user_id'];
$action  = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'default';

$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
$smarty->assign('affiliate', $affiliate);

$back_act='';
$smarty->assign('_CFG', $_CFG);//附加系统配置

// 不需要登录的操作或自己验证是否登录（如ajax处理）的act
$not_login_arr =
array( 'oath_login', 'oath_register');

/* 显示页面的action列表 */
$ui_arr = array('oath_login', 'accountbind');

/* 未登录处理 */
if (empty($_SESSION['user_id']))
{
    if (!in_array($action, $not_login_arr))
    {
        if (in_array($action, $ui_arr))
        {
            /* 如果需要登录,并是显示页面的操作，记录当前操作，用于登录后跳转到相应操作
            if ($action == 'login')
            {
                if (isset($_REQUEST['back_act']))
                {
                    $back_act = trim($_REQUEST['back_act']);
                }
            }
            else
            {}*/
            if (!empty($_SERVER['QUERY_STRING']))
            {
                $back_act = 'user.php?' . strip_tags($_SERVER['QUERY_STRING']);
            }
            $action = 'login';
        }
        else
        {
            //未登录提交数据。非正常途径提交数据！
            die($_LANG['require_login']);
        }
    }
}
/* 如果是显示页面，对页面进行相应赋值 */
if (in_array($action, $ui_arr))
{
    assign_template();
    $position = assign_ur_here(0, $_LANG['user_center']);
    $smarty->assign('page_title', $position['title']); // 页面标题
    $smarty->assign('ur_here',    $position['ur_here']);
    $sql = "SELECT value FROM " . $ecs->table('shop_config') . " WHERE id = 419";
    $row = $db->getRow($sql);
    $car_off = $row['value'];
    $smarty->assign('car_off',       $car_off);
    /* 是否显示积分兑换 */
    if (!empty($_CFG['points_rule']) && unserialize($_CFG['points_rule']))
    {
        $smarty->assign('show_transform_points',     1);
    }
    $smarty->assign('helps',      get_shop_help());        // 网店帮助
    $smarty->assign('data_dir',   DATA_DIR);   // 数据目录
    $smarty->assign('action',     $action);
    $smarty->assign('lang',       $_LANG);
}


//  
if($action == 'accountbind')
{
	$auth_list = array();
	if (file_exists(ROOT_PATH . 'include/website/config/qq_config.php')) {
		$auth_list['qq'] = array('name'=>'QQ','img'=>'sns_qq.png');
	}
	if (file_exists(ROOT_PATH . 'include/website/config/weixin_config.php')) {
		$auth_list['weixin'] = array('name'=>'微信','img'=>'sns_wechat.png');
	}
	if (file_exists(ROOT_PATH . 'include/website/config/alipay_config.php')) {
		$auth_list['alipay'] = array('name'=>'支付宝','img'=>'sns_alipay.png');
	}
	if (file_exists(ROOT_PATH . 'include/website/config/weibo_config.php')) {
		$auth_list['weibo'] = array('name'=>'微博','img'=>'sns_weibo.png');
	}

    $users_auth_list = $db->getAll('SELECT identity_type FROM ' . $ecs->table('users_auth') . " WHERE user_id = $user_id and type=2");
	
	foreach($users_auth_list as $key=>$val) {
		$auth_list[$val['identity_type']]['bing'] = 1;
	}
	$smarty->assign('is_wechat_browser', is_wechat_browser());
    $smarty->assign('auth_list', $auth_list);
	$smarty->display('accountbind_do.dwt');
}

elseif ($action == 'del_oath')
{
	if( isset($_REQUEST['type']) ) {
		$type  = trim($_REQUEST['type']);
	}
	else {
		echo("参数错误！");
	}

	$db->query("DELETE FROM " . $ecs->table('users_auth') . " WHERE user_id='".$user_id."' and identity_type='".$type."' and type=2");

	echo("解除绑定成功！" );
}


//  处理第三方登录接口
elseif($action == 'oath_login')
{
	$type = empty($_REQUEST['type']) ?  '' : $_REQUEST['type'];
   
	if( $type=='weixin') {
		include_once(ROOT_PATH . 'include/website/cls_http.php');

		$code = $_REQUEST['code'];
		if(empty($code))
		{
			show_message('scope参数错误或没有scope权限' , '首页',$ecs->url() , 'error');
		}

		if(file_exists(ROOT_PATH . 'include/website/config/weixin_config.php'))
		{
		  include_once(ROOT_PATH . 'include/website/config/weixin_config.php');
		}
		else
		{
		  show_message('插件没有安装或者注册' , '首页',$ecs->url() , 'error');
		}

		$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".WX_AKEY."&secret=".WX_SKEY."&code=$code&grant_type=authorization_code";

		$http = new cls_http();
		$result = $http->httpRequest($url, 'GET');

				

		$token = json_decode($result , true);
		$url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$token['access_token']."&openid=".$token['openid']."";

		$info = $http->httpRequest($url, 'GET');
		$info = json_decode($info , true);

		if(empty($info['openid']))
		{
		  show_message('scope参数错误或没有scope权限' , '首页',$ecs->url() , 'error');
		}

		$info['user_id'] = $info['openid'];
		$info['name'] = $info['nickname'];
	}
	else {
		include_once(ROOT_PATH . 'include/website/jntoo.php');
		$c = &website($type);
		if($c)
		{
			$access = $c->getAccessToken();
			if(!$access)
			{
				show_message( $c->get_error() , '首页', $ecs->url() , 'error');
			}
			$c->setAccessToken($access);
			$info = $c->getMessage();

			if(!$info)
			{
				show_message($c->get_error() , '首页' , $ecs->url() , 'error' , false);
			}
			if(!$info['user_id']){
				show_message($c->get_error() , '首页' , $ecs->url() , 'error' , false);
			}
		}
	}

	if($info['user_id'])
	{
		$info['info_user_id'] = $type . '_' . $info['user_id'];
		$info['name'] = str_replace('\'', '', $info['name']);

		$count = get_users_auth($info['info_user_id']);

		// 有数据---直接登录
		if ($count) {
			if ($info['name'] != $count['user_name']) {
				if ($user->check_user($info['name'])) {
					$info['name'] = $info['name'] . '_' . $type . (rand() * 1000);
				}
				$sql = 'UPDATE ' . $ecs->table('users_auth') . ' SET user_name = \'' . $info['name'] . '\' WHERE identifier = \'' . $info['info_user_id'] . '\'';
				$db->query($sql);
			}
			$user_name = get_user_name($count['user_id']);
			$user->set_session($user_name);
			$user->set_cookie($user_name);
			update_user_info();
			recalculate_price();
			ecs_header('Location: ' . $ecs->url());
		}
	}

	assign_template();
	$position = assign_ur_here(0, $lANG['bind_login']);
	$smarty->assign('page_title', $position['title']);
	$smarty->assign('helps', get_shop_help());
	$smarty->assign('data_dir', DATA_DIR);


	$smarty->assign('login_ret', $login_ret);
	$smarty->assign('type', $type);
	$smarty->assign('info', $info);
	$smarty->assign('access', $access);
	$info['type'] = $type;
	$info['access_token'] = $access['access_token'];
	$oath_info = serialize($info);
	$_SESSION[$type . 'oath'] = $oath_info;

	$users_auth = get_users_auth($info['info_user_id']);

	if ($users_auth) {
		$user_id = $users_auth['user_id'];
		$jump = 'old_user';
	}

	if ($_CFG['sms_signin']) {
		$sms_security_code = $_SESSION['sms_security_code'] = rand(1000, 9999);
		$smarty->assign('sms_security_code', $sms_security_code);
		$smarty->assign('enabled_sms_signin', 1);
	}
	$smarty->assign('ztime', $_CFG['ecsdxt_smsgap']);
	$smarty->assign('sms_register', $_CFG['sms_signin']);

	if (!empty($user_id)) {
		$Loaction = 'accountbind.php?act=oath_register&bind_type=1' . '&info_user_id=' . $info['info_user_id'] . '&user_id=' . $info['user_id'] . '&name=' . $info['name'] . '&sex=' . $info['sex'] . '&rank_id=' . $info['rank_id'] . '&img=' . $info['img'] . '&token=' . $access['access_token'] . '&type=' . $type . '&sess_user=' . $user_id . '&jump=' . $jump;
		ecs_header('Location: ' . $Loaction . "\n");
	}

    /* 取出注册扩展字段 */
    $sql = 'SELECT * FROM ' . $ecs->table('reg_fields') . ' WHERE type < 2 AND display = 1 ORDER BY dis_order, id';
    $extend_info_list = $db->getAll($sql);
    $smarty->assign('extend_info_list', $extend_info_list);


	$smarty->display('accountbind.dwt');
}


else if ($action == 'oath_register') {
	$bind_type = (isset($_REQUEST['bind_type']) ? intval($_REQUEST['bind_type']) : 1);
	$username = (isset($_REQUEST['username']) ? compile_str($_REQUEST['username']) : '');
	$password = (isset($_REQUEST['password']) ? compile_str($_REQUEST['password']) : '');
	$mobile_phone = (isset($_REQUEST['mobile_phone']) ? trim($_REQUEST['mobile_phone']) : '');
	$captcha_value = (isset($_REQUEST['captcha']) ? trim($_REQUEST['captcha']) : '');
	$type = (!isset($_REQUEST['type']) ? $oath_info['type'] : $_REQUEST['type']);
	$_SESSION[$type . 'oath'] = isset($_SESSION[$type . 'oath']) && !empty($_SESSION[$type . 'oath']) ? $_SESSION[$type . 'oath'] : $oath_info;
	$oath_info = unserialize($_SESSION[$type . 'oath']);

	$info_user_id = (!isset($_REQUEST['info_user_id']) ? $oath_info['info_user_id'] : $_REQUEST['info_user_id']);
	$user_id = (!isset($_REQUEST['user_id']) ? $oath_info['user_id'] : $_REQUEST['user_id']);
	$name = (!isset($_REQUEST['name']) ? $oath_info['name'] : $_REQUEST['name']);
	$sex = (!isset($_REQUEST['sex']) ? $oath_info['sex'] : $_REQUEST['sex']);
	$rank_id = (!isset($_REQUEST['rank_id']) ? $oath_info['rank_id'] : $_REQUEST['rank_id']);
	$img = (isset($oath_info['figureurl_qq_2']) && !empty($oath_info['figureurl_qq_2']) ? $oath_info['figureurl_qq_2'] : $oath_info['img']);
	$token = (!isset($_REQUEST['token']) ? $oath_info['access_token'] : $_REQUEST['token']);
	
	$sess_user = (isset($_REQUEST['sess_user']) ? trim($_REQUEST['sess_user']) : 0);

	$other = array('identity_type' => $type, 'credential' => $token, 'verified' => 1);

	if ($bind_type == 1) {

		// 增加绑定
		if (!empty($sess_user)) {
			$other['user_id'] = $sess_user;
			$other['user_name'] = $name;
			$other['identifier'] = $info_user_id;
			$other['add_time'] = gmtime();
			$other['type'] = 2;
			$db->autoExecute($ecs->table('users_auth'), $other, 'INSERT');
			$sql = 'UPDATE ' . $ecs->table('users') . ' SET aite_id = \'' . $info_user_id . '\' WHERE user_id = \'' . $sess_user . '\'';
			$db->query($sql);
		}
		// 绑定账号
		else{
			$sql = 'SELECT user_id, user_name,headimg FROM ' . $GLOBALS['ecs']->table('users') . ' WHERE user_name = \'' . $username . '\' or  email = \'' . $username . '\' or mobile_phone = \'' . $username . '\'  LIMIT 1';
			$user_info = $db->getRow($sql);

			if ($user->login($user_info['user_name'], $password, NULL, 0)) {
				$other['user_id'] = $user_info['user_id'];
				$other['user_name'] = $name;
				$other['identifier'] = $info_user_id;
				$other['add_time'] = gmtime();
				$other['type'] = 2;
				$db->autoExecute($ecs->table('users_auth'), $other, 'INSERT');

				if( !$user_info['headimg'] ) {
					$sql = 'UPDATE ' . $ecs->table('users') . ' SET aite_id = \'' . $info_user_id . '\', headimg = \'' . $img . '\' WHERE user_name = \'' . $username . '\'';
				}
				else {
					$sql = 'UPDATE ' . $ecs->table('users') . ' SET aite_id = \'' . $info_user_id . '\' WHERE user_name = \'' . $username . '\'';
				}
				$db->query($sql);
			}
			else {
				show_message("账号或者密码错误");
			}
		}
	}
	// 注册绑定
	else if ($bind_type == 2) {
		if ($user->check_user($username)) {
			$username = $username . '_' . $type . rand(10000, 99999);
		}
		require_once(ROOT_PATH . 'include/lib_sms.php');
		require_once(ROOT_PATH . 'lang/' .$_CFG['lang']. '/sms.php');
	
        $other1['mobile_phone'] = isset($_POST['mobile']) ? $_POST['mobile'] : '';
			/* 提交的手机号是否正确 */
		if(!ismobile($other1['mobile_phone'])) {
			show_message($_LANG['invalid_mobile_phone']);
		}

		if ($_CFG['ecsdxt_mobile_reg'] == '1')
		{
			$verifycode = isset($_POST['extend_field']) ? trim($_POST['extend_field']) : '';//验证码
			/* 提交的验证码不能为空 */
			if(empty($verifycode)) {
				show_message($_LANG['verifycode_empty']);
			}

			/* 提交的手机号是否已经注册帐号 */
			$sql = "SELECT COUNT(user_id) FROM " . $ecs->table('users') . " WHERE mobile_phone = '".$other1['mobile_phone']."'";

			if ($db->getOne($sql) > 0)
			{
				show_message($_LANG['mobile_phone_registered']);
			}

			/* 验证手机号验证码和IP */
			$sql = "SELECT COUNT(id) FROM " . $ecs->table('verifycode') ." WHERE mobile='".$other1['mobile_phone']."' AND verifycode='$verifycode' AND getip='" . real_ip() . "' AND status=1 AND dateline>'" . gmtime() ."'-86400";//验证码一天内有效
			if ($db->getOne($sql) == 0)
			{
				show_message($_LANG['verifycode_mobile_phone_notmatch']);
			}
		}

		include_once(ROOT_PATH . 'include/lib_passport.php');

		if (register($username, $password, $username."@mail.com", $other1) !== false)
        {
			if ($_CFG['ecsdxt_customer_registed'] == '1')
			{

				$smarty->assign('shop_name',	$_CFG['shop_name']);
				$smarty->assign('user_name',	$username);
				$smarty->assign('user_pwd',		$password);

				$content = $smarty->fetch('str:' . $_CFG['ecsdxt_customer_registed_value']);
				
				/* 发送注册成功短信提醒 */
				$ret = sendsms($other1['mobile_phone'], $content);
				
				if($ret === true)
				{
					//插入注册成功短信提醒数据记录
					$sql = "INSERT INTO " . $ecs->table('verifycode') . "(mobile, getip, verifycode, dateline, reguid, status) VALUES ('" . $other1['mobile_phone'] . "', '" . real_ip() . "', '$password', '" . gmtime() ."', $_SESSION[user_id], 7)";
					$db->query($sql);
				}
			}

			$sql = "UPDATE " . $ecs->table('verifycode') . " SET reguid=" . $_SESSION['user_id'] . ",regdateline='" . gmtime() ."',status=2 WHERE mobile='" . $other1['mobile_phone'] . "' AND verifycode='$verifycode' AND getip='" . real_ip() . "' AND status=1 AND dateline>'" . gmtime() ."'-86400";
			$db->query($sql);

	
			$other['user_id'] = $_SESSION['user_id'];
			$other['user_name'] = $name;
			$other['identifier'] = $info_user_id;
			$other['add_time'] = gmtime();
			$other['type'] = 2;
			$db->autoExecute($ecs->table('users_auth'), $other, 'INSERT');

			$user_pass = $user->compile_password(array('password' => $password));
			$user_other = array('user_name' => $username, 'password' => $user_pass, 'aite_id' => $info_user_id, 'nick_name' => $name, 'sex' => $sex, 'mobile_phone' => $mobile_phone, 'reg_time' => gmtime(), 'user_rank' => $rank_id, 'user_picture' => $img, 'is_validated' => 1);


			if( !$user_info['headimg'] ) {
				$sql = 'UPDATE ' . $ecs->table('users') . ' SET aite_id = \'' . $info_user_id . '\', headimg = \'' . $img . '\' WHERE user_name = \'' . $username . '\'';
			}
			else {
				$sql = 'UPDATE ' . $ecs->table('users') . ' SET aite_id = \'' . $info_user_id . '\' WHERE user_name = \'' . $username . '\'';
			}
			$db->query($sql);


            /*把新注册用户的扩展信息插入数据库*/
            $sql = 'SELECT id FROM ' . $ecs->table('reg_fields') . ' WHERE type = 0 AND display = 1 ORDER BY dis_order, id';   //读出所有自定义扩展字段的id
            $fields_arr = $db->getAll($sql);

            $extend_field_str = '';    //生成扩展字段的内容字符串
            foreach ($fields_arr AS $val)
            {
                $extend_field_index = 'extend_field' . $val['id'];
                if(!empty($_POST[$extend_field_index]))
                {
                    $temp_field_content = strlen($_POST[$extend_field_index]) > 100 ? mb_substr($_POST[$extend_field_index], 0, 99) : $_POST[$extend_field_index];
                    $extend_field_str .= " ('" . $_SESSION['user_id'] . "', '" . $val['id'] . "', '" . compile_str($temp_field_content) . "'),";
                }
            }
            $extend_field_str = substr($extend_field_str, 0, -1);

            if ($extend_field_str)      //插入注册扩展数据
            {
                $sql = 'INSERT INTO '. $ecs->table('reg_extend_info') . ' (`user_id`, `reg_field_id`, `content`) VALUES' . $extend_field_str;
                $db->query($sql);
            }

            /* 写入密码提示问题和答案 */
            if (!empty($passwd_answer) && !empty($sel_question))
            {
                $sql = 'UPDATE ' . $ecs->table('users') . " SET `passwd_question`='$sel_question', `passwd_answer`='$passwd_answer'  WHERE `user_id`='" . $_SESSION['user_id'] . "'";
                $db->query($sql);
            }
            /* 判断是否需要自动发送注册邮件 */
            if ($GLOBALS['_CFG']['member_email_validate'] && $GLOBALS['_CFG']['send_verify_email'])
            {
                send_regiter_hash($_SESSION['user_id']);
            }
            $ucdata = empty($user->ucdata)? "" : $user->ucdata;
            show_message(sprintf($_LANG['register_success'], $username . $ucdata), array($_LANG['back_up_page'], $_LANG['profile_lnk']), array($back_act, 'user.php'), 'info');
        }
        else
        {
            $err->show($_LANG['sign_up'], 'user.php?act=register');
        }
	}

	if (empty($sess_user) || ($_REQUEST['jump'] == 'old_user')) {
		$user->set_session($username);
		$user->set_cookie($username);
		update_user_info();
		recalculate_price();

		if( $_SESSION['back_act'] ) {
			ecs_header('Location: ' . $_SESSION['back_act']);
		}
		else {
			ecs_header('Location: ' . $ecs->url());
		}


	}
	else {
		ecs_header('Location: user.php');
	}
}

function get_users_auth($unionid)
{
	$sql = 'SELECT identifier AS aite_id, user_id, user_name FROM ' . $GLOBALS['ecs']->table('users_auth') . ' WHERE identifier = \'' . $unionid . '\' LIMIT 1';
	return $GLOBALS['db']->getRow($sql);
}

function get_user_name($user_id)
{
	$sql = 'SELECT user_name FROM ' . $GLOBALS['ecs']->table('users') . ' WHERE user_id = \'' . $user_id . '\' LIMIT 1';
	return $GLOBALS['db']->getOne($sql);
}


?>