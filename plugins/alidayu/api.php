<?php
error_reporting(0); 
header("Content-type:text/html; charset=UTF-8");

/**
 *  发送
 *  mobile				短信接收号码。支持单个或多个手机号码，传入号码为11位手机号码，不能加0或+86。群发短信需传入多个号码，以英文逗号分隔，一次调用最多传入200个号码。示例：18600000000,13911111111,13322222222
 *  template_code       短信模板ID
 *  param				短信模板变量
 *  extend				公共回传参数
 *  @return  bool
 */
function alidayu_send ($mobile, $template_code ,$param=array(), $extend = '123456')
{
	include_once(ROOT_PATH ."plugins/alidayu/TopClient.php");
	include_once(ROOT_PATH ."plugins/alidayu/RequestCheckUtil.php");
	include_once(ROOT_PATH ."plugins/alidayu/ResultSet.php");
	include_once(ROOT_PATH ."plugins/alidayu/TopLogger.php");
	include_once(ROOT_PATH ."plugins/alidayu/AlibabaAliqinFcSmsNumSendRequest.php");
	$c = new TopClient;
	$c->appkey    = $GLOBALS['_CFG']['ecsdxt_user_name'];
	$c->secretKey = $GLOBALS['_CFG']['ecsdxt_pass_word'];
	$req = new AlibabaAliqinFcSmsNumSendRequest;
	$req->setExtend($extend);
	$req->setSmsType("normal");
	$req->setSmsFreeSignName($GLOBALS['_CFG']['ecsdxt_sign']);
	$req->setSmsParam(json_encode($param));
	$req->setRecNum($mobile);
	$req->setSmsTemplateCode($template_code);
	$resp = $c->execute($req);
	$resp= (array)$resp;
	$cc=(array)$resp['result'];
	return ($cc['err_code']=='0') ? true : $resp['msg'];
}


function diffStr($old,$news) 
{
	preg_match_all("/.*?\{.(.*?)\}/is", $old, $param_key);
	$alidayu_param = array_flip($param_key[1]);
	$old = str_replace('|',"\|",$old);
	$old = str_replace('/',"\/",$old);
	$old = str_replace('.',"\.",$old);
	$old = str_replace('[',"\[",$old);
	$old = str_replace(']',"\]",$old);
	$old = str_replace('?',"\?",$old);
	$old = str_replace('*',"\*",$old);
	$old = str_replace('+',"\+",$old);
	foreach($alidayu_param as $key=>$val) {
		$old = str_replace('{$'.$key.'}',"(.*?)",$old);
	}
	preg_match_all("/".$old."/is", $news, $param_val);

	$i=1;
	foreach($alidayu_param as $key=>$val) {
		$alidayu_param[$key] = $param_val[$i][0];
		$i++;
	}
	return $alidayu_param;
}


// INSERT INTO `ecs_shop_config` VALUES ('9100', '90', 'ecsdxt_sign', 'text', '', '', '短信签名', '0');
?>
