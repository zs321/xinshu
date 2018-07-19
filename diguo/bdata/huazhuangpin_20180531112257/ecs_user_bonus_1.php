<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_bonus`;");
E_C("CREATE TABLE `ecs_user_bonus` (
  `bonus_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bonus_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_sn` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `used_time` int(10) unsigned NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `emailed` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`bonus_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_bonus` values('4','2','0','249','0','0','0');");
E_D("replace into `ecs_user_bonus` values('21','10','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('20','8','0','249','0','0','0');");
E_D("replace into `ecs_user_bonus` values('19','7','0','249','0','0','0');");
E_D("replace into `ecs_user_bonus` values('18','7','0','249','0','0','0');");
E_D("replace into `ecs_user_bonus` values('22','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('23','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('24','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('25','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('26','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('27','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('28','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('29','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('30','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('31','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('32','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('33','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('34','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('35','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('36','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('37','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('38','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('39','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('40','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('41','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('42','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('43','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('44','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('45','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('46','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('47','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('48','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('49','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('50','5','0','245','0','0','0');");
E_D("replace into `ecs_user_bonus` values('51','2','0','254','0','0','0');");
E_D("replace into `ecs_user_bonus` values('52','2','0','255','0','0','0');");
E_D("replace into `ecs_user_bonus` values('53','2','0','256','0','0','0');");

require("../../inc/footer.php");
?>