<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_action`;");
E_C("CREATE TABLE `ecs_back_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `back_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `status_back` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status_refund` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `back_id` (`back_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_action` values('1','3','shenlong','5','1','退款成功','1494973454');");
E_D("replace into `ecs_back_action` values('2','3','shenlong','5','1','','1494973464');");
E_D("replace into `ecs_back_action` values('3','3','shenlong','3','1','','1494973513');");
E_D("replace into `ecs_back_action` values('4','4','admin','5','0','','1499210883');");
E_D("replace into `ecs_back_action` values('5','4','admin','4','1','1','1499210919');");
E_D("replace into `ecs_back_action` values('6','4','admin','3','1','','1499210929');");
E_D("replace into `ecs_back_action` values('7','5','admin','5','0','','1499211045');");
E_D("replace into `ecs_back_action` values('8','5','admin','4','1','111','1499211057');");
E_D("replace into `ecs_back_action` values('9','5','admin','3','1','','1499211061');");
E_D("replace into `ecs_back_action` values('10','6','admin','5','0','','1499211619');");
E_D("replace into `ecs_back_action` values('11','6','admin','4','1','1','1499211628');");

require("../../inc/footer.php");
?>