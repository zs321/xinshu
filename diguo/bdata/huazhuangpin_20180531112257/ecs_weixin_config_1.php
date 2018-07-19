<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_config`;");
E_C("CREATE TABLE `ecs_weixin_config` (
  `id` int(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `appid` char(18) NOT NULL,
  `appsecret` char(32) NOT NULL,
  `access_token` text NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_config` values('1','0769web','111','222','W651mbE9SOzrIxO5mw2HoyzveqtP23luDOojfryPn187AsMlk8TiaukKYl3lBpmTySnpoII0YphrHQ7crGOAC7HPXpu6aojbZtIXiBLpgg0JjFsQqr55N6_qpK9u67gANALfAGABOZ','1497249347');");

require("../../inc/footer.php");
?>