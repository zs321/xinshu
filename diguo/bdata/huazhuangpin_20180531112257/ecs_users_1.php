<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users`;");
E_C("CREATE TABLE `ecs_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `aite_id` text NOT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  `wxid` char(28) NOT NULL,
  `wxch_bd` char(2) NOT NULL,
  `nicheng` varchar(255) DEFAULT NULL,
  `password_xkfla` varchar(40) NOT NULL,
  `headimg` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM AUTO_INCREMENT=257 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users` values('245','','782869779@qq.com','测试用户','4bb5a4d9a7fc8511f1993b559ca1485f','','','0','1957-01-01','4622.76','0.00','6326','6326','1','1498797142','1501302158','0000-00-00 00:00:00','127.0.0.1','923','0','0','1276','0','0','0','','','','','','15916852053','0','0.00','','','','','','','data/headimg/201707/1499224865693677366.jpg');");
E_D("replace into `ecs_users` values('249','','7828697792@qq.com','测试用户2','3f9d589a1cd64f47186bac85d662f5b6','','','0','0000-00-00','0.00','0.00','5','5','0','1499120738','1499204412','0000-00-00 00:00:00','127.0.0.1','24','0','0','6364','0','0','0','','','','','','13800138002','0','0.00',NULL,NULL,'','',NULL,'','');");
E_D("replace into `ecs_users` values('251','','','测试用户3','dcc62e31c8030d9488969c5da73d2f16','','','0','0000-00-00','0.00','0.00','5','5','0','1499128261','1499128261','0000-00-00 00:00:00','127.0.0.1','1','0','0',NULL,'0','0','0','','','','','','13800138003','0','0.00',NULL,NULL,'','',NULL,'','');");
E_D("replace into `ecs_users` values('252','','','测试用户4','dcc62e31c8030d9488969c5da73d2f16','','','0','0000-00-00','0.00','0.00','5','5','0','1499128292','1499128292','0000-00-00 00:00:00','127.0.0.1','1','0','0',NULL,'0','0','0','','','','','','13800138004','0','0.00',NULL,NULL,'','',NULL,'','');");
E_D("replace into `ecs_users` values('253','','admin@qq.com','123456','a4370397f809730cd1739e763987828b','','','0','1958-01-01','0.00','0.00','0','0','2','1519588782','1519589259','0000-00-00 00:00:00','61.143.62.148','69','2','0','3101','0','0','0','','','','','','','0','0.00',NULL,NULL,'','',NULL,'','');");
E_D("replace into `ecs_users` values('254','','','123123','4297f44b13955235245b2497399d7a93','','','0','0000-00-00','0.00','0.00','5','5','0','1519841292','1519841292','0000-00-00 00:00:00','180.212.37.194','1','0','0',NULL,'0','0','0','','','','','','123123','0','0.00',NULL,NULL,'','',NULL,'','');");
E_D("replace into `ecs_users` values('255','','','12333','5428fa1e7879c53a14ab1df77b6c43ae','','','0','0000-00-00','0.00','0.00','5','5','0','1527310436','1527310675','0000-00-00 00:00:00','112.96.115.23','21','0','0','8029','0','0','0','','','','','','186206200215','0','0.00',NULL,NULL,'','',NULL,'','');");
E_D("replace into `ecs_users` values('256','','','莫有样在真','25f9e794323b453885f5181f1b624d0b','','','0','0000-00-00','0.00','0.00','5','5','0','1527458113','1527458113','0000-00-00 00:00:00','101.206.167.248','1','0','0',NULL,'0','0','0','','','','','','4555699999','0','0.00',NULL,NULL,'','',NULL,'','');");

require("../../inc/footer.php");
?>