<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users_auth`;");
E_C("CREATE TABLE `ecs_users_auth` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL,
  `identity_type` varchar(32) NOT NULL,
  `identifier` varchar(128) NOT NULL,
  `credential` varchar(128) NOT NULL,
  `verified` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0',
  `type` tinyint(1) DEFAULT '1' COMMENT '1=PC 或者 手机',
  PRIMARY KEY (`id`),
  KEY `identifier` (`identifier`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>