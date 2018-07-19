<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_oauth`;");
E_C("CREATE TABLE `ecs_weixin_oauth` (
  `oid` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_oauth` values('1','手机版网站首页','http://www.0769web.net/mobile/','4135','1');");
E_D("replace into `ecs_weixin_oauth` values('14','分销中心','http://www.0769web.net/mobile/distribute.php','4655','1');");

require("../../inc/footer.php");
?>