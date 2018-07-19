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


if (defined('WEBSITE'))

{

	global $_LANG;

	$_LANG['help']['APP_KEY'] = '在微博开放平台创建应用审核通过后，在应用信息中查看App Key';
	$_LANG['help']['APP_SECRET'] = '在微博开放平台创建应用审核通过后，在应用信息中查看App Secret';
	$_LANG['help']['weibo_version'] = '勾选使用 Oauth2.0版本 验证方法 , 否则采用 1.0a 版本验证方案';
	$_LANG['APP_KEY'] = 'App Key';
	$_LANG['APP_SECRET'] = 'App Secret';
	$_LANG['weibo_version'] = '是否使用Oauth2.0版本';

	

	

	$i = isset($web) ? count($web) : 0;

	

	// 类名

	$web[$i]['name'] = '新浪微博登录';

	

	// 文件名，不包含后缀

	

	$web[$i]['type'] = 'weibo';
	
	$web[$i]['className'] = 'weibo';
	

	// 作者信息
	$web[$i]['author'] = '青蜂网络';
	
	// 网址
	$web[$i]['www'] = '<a href="http://www.0769web.net" target="_blank">www.0769web.net</a>';
	
	// 作者qq
	$web[$i]['qq'] = '782869779';
	

	// 申请网址

	$web[$i]['website'] = 'http://open.weibo.com';

	

	// 版本号
	$web[$i]['version'] = '3.0';
	
	// 更新日期
	$web[$i]['date']  = '2017-06-25';
	

	// 配置信息

	$web[$i]['config'] = array(

		array('type'=>'text' , 'name'=>'APP_KEY', 'value'=>''),

		array('type'=>'text' , 'name' => 'APP_SECRET' , 'value' => '')

	);

}





if (!defined('WEBSITE'))

{

	include_once(dirname(__FILE__).'/oath2.class.php');

	class website extends oath2

	{

		function website()

		{

			$this->app_key = APP_KEY;

			$this->app_secret = APP_SECRET;

			$this->tokenURL = 'https://api.weibo.com/oauth2/access_token';

			$this->authorizeURL = 'https://api.weibo.com/oauth2/authorize';

			$this->display = 'mobile';

			$this->userURL = 'https://api.weibo.com/2/users/show.json';

			$this->meth = 'POST';

		}

		function sign( &$p ){

			$this->meth = 'GET';

			$this->id_format($p['uid']);

		}

		

		function message($info)

		{

			$arr = array();

			$arr['user_id']  = $info['id'];

			$arr['name'] = empty($info['screen_name']) ? $info['name'] : $info['screen_name'];

			$arr['location'] = $info['location'];

			$arr['sex'] = $info['gender'] == 'm' ? 1 : 0;

			$arr['img']  = empty($info['avatar_large']) ? '' : $info['avatar_large'];

			$arr['lang'] = $info['lang'];

			$arr['info'] = $info;

			return $arr;

		}

		

		public function is_error($result) // 错误

		{

			$msg = json_decode($result , true);

			

			if(empty($msg['error_code']))

			{

				return $msg;

			}

			

			if(is_array($msg))

				$this->add_error($msg['error_code'] , $msg['error'], $msg['request'].' - '.(isset($msg['error_description']) ? $msg['error_description'] : '') . ' - ' .$str );

				

			return false;

		}

		function id_format(&$id) {

			if ( is_float($id) ) {

				$id = number_format($id, 0, '', '');

			} elseif ( is_string($id) ) {

				$id = trim($id);

			}

		}

	}

}

?>