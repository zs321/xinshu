<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_exchange_goods`;");
E_C("CREATE TABLE `ecs_exchange_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `exchange_integral` int(10) unsigned NOT NULL DEFAULT '0',
  `is_exchange` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_exchange_goods` values('85','200','1','1');");
E_D("replace into `ecs_exchange_goods` values('87','280','1','1');");
E_D("replace into `ecs_exchange_goods` values('90','480','1','1');");
E_D("replace into `ecs_exchange_goods` values('91','350','1','1');");
E_D("replace into `ecs_exchange_goods` values('86','200','1','1');");
E_D("replace into `ecs_exchange_goods` values('84','150','1','0');");

require("../../inc/footer.php");
?>