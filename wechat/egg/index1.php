<?php
define('IN_ECS', true);
require(dirname(__FILE__) . '/../../includes/init.php');
session_start();
if (strpos($_SERVER["HTTP_USER_AGENT"], "MicroMessenger")) 
{
	$scene_id = $_GET['scene_id'];
	if(empty($scene_id)) 
	{
		exit('非法链接');
	}
}
else 
{
	exit('请从微信进入');
}

$qr_path = $db->getOne("SELECT `qr_path` FROM ". $GLOBALS['ecs']->table('weixin_qr') ." WHERE `scene_id`='$scene_id'");

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>微信分销，推广就能赚钱，赶紧扫码加入吧！</title>
</head>
<body style="background:url(code.png) no-repeat #6DDCD3; background-size: 100% " >

	<div class="grid">
		<div style="text-align:center; padding-top:20px;"><a id="f"><img  src="<?php echo $qr_path;?>" /> </a></div>
	</div>

	
</body>
</html>
