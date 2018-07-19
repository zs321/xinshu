<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_auto_manage`;");
E_C("CREATE TABLE `ecs_auto_manage` (
  `item_id` mediumint(8) NOT NULL,
  `type` varchar(10) NOT NULL,
  `starttime` int(10) NOT NULL,
  `endtime` int(10) NOT NULL,
  PRIMARY KEY (`item_id`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_auto_manage` values('1','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('2','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('3','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('4','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('5','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('6','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('7','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('8','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('9','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('10','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('11','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('12','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('13','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('14','goods','1495008000','0');");
E_D("replace into `ecs_auto_manage` values('15','goods','1495008000','0');");

require("../../inc/footer.php");
?>