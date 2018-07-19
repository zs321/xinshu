<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_group_goods`;");
E_C("CREATE TABLE `ecs_group_goods` (
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`parent_id`,`goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_group_goods` values('102','103','20.05','1','0');");
E_D("replace into `ecs_group_goods` values('102','104','18.50','1','0');");
E_D("replace into `ecs_group_goods` values('102','105','2.00','1','0');");
E_D("replace into `ecs_group_goods` values('102','107','10.90','1','0');");
E_D("replace into `ecs_group_goods` values('102','108','70.90','1','0');");
E_D("replace into `ecs_group_goods` values('102','3','2.12','1','0');");
E_D("replace into `ecs_group_goods` values('108','102','36.00','1','0');");
E_D("replace into `ecs_group_goods` values('108','3','2.12','1','0');");
E_D("replace into `ecs_group_goods` values('108','66','89.90','1','0');");
E_D("replace into `ecs_group_goods` values('108','62','16.90','1','0');");

require("../../inc/footer.php");
?>