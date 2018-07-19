<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_package_goods`;");
E_C("CREATE TABLE `ecs_package_goods` (
  `package_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`package_id`,`goods_id`,`admin_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_package_goods` values('15','37','0','1','1');");
E_D("replace into `ecs_package_goods` values('15','38','0','1','1');");
E_D("replace into `ecs_package_goods` values('15','41','0','1','1');");
E_D("replace into `ecs_package_goods` values('15','44','0','1','1');");
E_D("replace into `ecs_package_goods` values('15','45','0','1','1');");
E_D("replace into `ecs_package_goods` values('15','43','0','1','1');");
E_D("replace into `ecs_package_goods` values('15','39','5','1','1');");

require("../../inc/footer.php");
?>