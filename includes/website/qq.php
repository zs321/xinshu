<?php 
//  第三方授权登录插件类，如有BUG请联系本人！！ 
/*===========================================================
*   author : 青蜂网络
*   官方网址 : www.0769web.net
*   QQ : 75283535
*   VERSION : 1.0v
*   DATE : 2016-2-23
*   尊重作者,保留版权信息
*   版权所有 青蜂网络
*   使用；不允许对程序代码以任何形式任何目的的再发布。
**/

if (defined('WEBSITE') || defined('GETINFO'))
{
	global $_LANG;
	$_LANG['help']['APP_KEY'] = '在QQ互联中创建网站应用后可以查看 APP ID';
	$_LANG['help']['APP_SECRET'] = '在QQ互联中创建网站应用后可以查看 APP Key';
	
	$_LANG['APP_KEY'] = 'APP ID';
	$_LANG['APP_SECRET'] = 'APP Key';
	
	$i = isset($web) ? count($web) : 0;
	// 类名
	$web[$i]['name'] = 'QQ快捷登录';
	// 文件名，不包含后缀
	$web[$i]['type'] = 'qq';
	
	$web[$i]['className'] = 'qq';
	
	// 作者信息
	$web[$i]['author'] = '青蜂网络';
	
	// 网址
	$web[$i]['www'] = '<a href="http://www.0769web.net" target="_blank">www.0769web.net</a>';
	
	// 作者qq
	$web[$i]['qq'] = '782869779';
	
	// 申请网址
	$web[$i]['website'] = 'http://connect.qq.com';
	
	// 版本号
	$web[$i]['version'] = '3.0';
	
	// 更新日期
	$web[$i]['date']  = '2017-06-28';
	
	// 配置信息
	$web[$i]['config'] = array(
		array('type'=>'text' , 'name'=>'APP_KEY', 'value'=>''),
		array('type'=>'text' , 'name' => 'APP_SECRET' , 'value' => ''),
	);
}


if (!defined('WEBSITE'))
{
	include_once(dirname(__FILE__).'/oath2.class.php');
	class website extends oath2
	{
		// 类赋值
		
		function website()
		{
			$this->app_key = APP_KEY;
			$this->app_secret = APP_SECRET;
			
			$this->scope = 'get_user_info';
			$this->authorizeURL = 'https://graph.qq.com/oauth2.0/authorize';
			$this->post_login = array();
			$this->meth = 'GET';
			$this->tokenURL = 'https://graph.qq.com/oauth2.0/token';
			$this->post_token = array();
			$this->graphURL = 'https://graph.qq.com/oauth2.0/me';
			
			$this->userURL = 'https://graph.qq.com/user/get_user_info';
			$this->post_msg = array(
				'client_id' => '',
				'client_secret'=>'',
				'oauth_consumer_key' => $this->app_key,
				'format'=>'json'
			);
		}
		
		function getGraph( $result )
		{
			if(!$this->is_error($result , false))
			{
				return false;
			}
			$params  = $token = array();
			parse_str($result, $params);
			$token = $params;
			
			$graph_url = $this->graphURL."?access_token=" . $params['access_token'];
			$user = $this->http($graph_url , 'GET');
			$user = $this->is_error($user);
			$token['openid'] = $user['openid'];
			unset($token['expires_in']);
			return $token;
		}
		
		function message($info)
		{
			if(!$info || !is_array($info))
			{
				return false;
			}
			
			$info['name'] = $info['nickname'];
			$info['sex'] = $info['gender'] == '男' ? '1' : '0';
			$info['user_id'] = $this->token['openid'];
			$info['img'] = $info['figureurl_2'];
			$info['rank_id'] = RANK_ID;
			return $info;
		}
		function is_error($response , $is_chuli = true)
		{
			if (strrpos($response, "callback") !== false)
			{
				$lpos = strpos($response, "(");
				$rpos = strrpos($response, ")");
				$response  = substr($response, $lpos + 1, $rpos - $lpos -1);
				$ret = json_decode($response , true);
				
				if($ret['ret'] || $ret['error'])
				{
					$this->add_error((isset($ret['ret']) ? $ret['ret'] : $ret['error']) , isset($ret['error_description']) ? $ret['error_description'] : '' , isset($ret['msg']) ? $ret['msg'] : '');
					return false;
				}
			}
			
			if($is_chuli)
			{
				$ret = json_decode($response , true);
				if($ret['ret'] || $ret['error'])
				{
					print_r($ret);
					$this->add_error((isset($ret['ret']) ? $ret['ret'] : $ret['error']) , isset($ret['error_description']) ? $ret['error_description'] : '' , isset($ret['msg']) ? $ret['msg'] : '');
					return false;
				}
				return $ret ? $ret : $response;
			}
			else
			{
				return true;
			}
		}
	}
}
?>