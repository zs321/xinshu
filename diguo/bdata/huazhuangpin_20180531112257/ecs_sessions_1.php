<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('a53d8dada1159b051c576442740eb65a','1527735549','0','0','122.4.93.138','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('ae7598a83bf33f5e450458d848cdcf1e','1527736253','0','1','122.4.93.138','0','0','0.00','0','a:5:{s:12:\"captcha_word\";s:16:\"ZWE3MjIzNzE5Nw==\";s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1527707453;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('eee7b9e9f95ebb1a0929af8dea537732','1527736564','0','0','192.168.1.16','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c12810432a0b7c9768eed84dd4f158ae','1527736897','0','1','192.168.1.16','0','0','0.00','0','a:5:{s:12:\"captcha_word\";s:16:\"ODQ0MDM5MjNlZQ==\";s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1527708044;s:12:\"suppliers_id\";s:1:\"0\";}');");

require("../../inc/footer.php");
?>