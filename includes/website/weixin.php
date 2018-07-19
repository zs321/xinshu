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
	$_LANG['help']['APP_KEY'] = '微信开放平台中创建网站应用审核通过后获取的AppID';
	$_LANG['help']['APP_SECRET'] = '微信开放平台中创建网站应用审核通过后获取的AppSecret';
	
	$_LANG['APP_KEY'] = 'AppID';
	$_LANG['APP_SECRET'] = 'AppSecret';
	
	$i = isset($web) ? count($web) : 0;
	// 类名
	$web[$i]['name'] = '微信扫码登录';
	
	// 文件名，不包含后缀
	
	$web[$i]['type'] = 'weixin';
	
	$web[$i]['className'] = 'weixin';
	
	// 作者信息
	$web[$i]['author'] = '青蜂网络';
	
	// 网址
	$web[$i]['www'] = '<a href="http://www.0769web.net" target="_blank">www.0769web.net</a>';
	
	// 作者qq
	$web[$i]['qq'] = '782869779';
	
	// 申请网址
	$web[$i]['website'] = 'http://open.weixin.qq.com';
	
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
	include 'oath2.class.php';
	class website extends oath2
	{
		var $token;
		var $error_msg;
		var $parameter = array();
		
		function __construct(){
			$this->website();
		}
		
		function website()
		{
            $state = md5(time()+rand(0,9999));
            $_SESSION['weixin_state'] = $state;
            
            $this->authorizeURL = 'https://open.weixin.qq.com/connect/qrconnect';
            $this->app_key = APP_KEY;
            $this->app_secret = APP_SECRET;
			$this->parameter = array(
                'response_type' => 'code',
                'scope' => 'snsapi_login',
                'state' => $state,
			);
		}
		
		function login($redirect_uri='')
		{
            $url = $this->authorizeURL.'?';
            $url .= 'appid='.$this->app_key;
            if(!empty($redirect_uri))
            {
                $this->parameter['redirect_uri'] = $redirect_uri;
            }
            $url .= '&'.http_build_query($this->parameter);
            return $url;
		}
		
		function getAccessToken()
		{
            $code = empty($_REQUEST['code'])?'':$_REQUEST['code'];
            $url = sprintf('https://api.weixin.qq.com/sns/oauth2/access_token?appid=%s&secret=%s&code=%s&grant_type=authorization_code',$this->app_key,$this->app_secret,$code);
            $result = $this->http($url);
            $result_arr = json_decode($result,true);
            $token = $result_arr['access_token'];
            $refresh = $result_arr['refresh_token'];
            $openid = $result_arr['openid'];
            $_SESSION['openid'] = $openid;
            return $token;
		}
		
		function setAccessToken($token)
		{
			$this->token = $token;
			return true;
		}
        
        function getMessage()
		{
            $url = sprintf('https://api.weixin.qq.com/sns/userinfo?access_token=%s&openid=%s',$this->token,$_SESSION['openid']);
            $result = $this->http($url);
            $result_arr = json_decode($result,true);
			$ret = array();
			$ret['name'] = $result_arr['nickname'];
			$ret['sex'] = $result_arr['sex'];
			$ret['user_id'] = $result_arr['openid'];
			$ret['img'] = $result_arr['headimgurl'];
			
			return $ret;
		}
         function get_error()
        {
            return '未知错误';
        }
	}
}