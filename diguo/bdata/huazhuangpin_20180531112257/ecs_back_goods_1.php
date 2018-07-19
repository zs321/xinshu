<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_goods`;");
E_C("CREATE TABLE `ecs_back_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `back_id` mediumint(8) unsigned DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  `back_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL,
  `back_goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `back_goods_number` smallint(5) unsigned NOT NULL,
  `status_back` tinyint(1) NOT NULL DEFAULT '0',
  `status_refund` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `back_id` (`back_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_goods` values('5','5','18','0',NULL,'江西脐橙',NULL,'MDZ000018','0','0','','4','0','17.64','1','3','1');");
E_D("replace into `ecs_back_goods` values('4','4','18','0',NULL,'江西脐橙',NULL,'MDZ000018','0','0','','4','0','17.64','1','3','1');");
E_D("replace into `ecs_back_goods` values('6','6','19','0',NULL,'福建蜜柚',NULL,'MDZ000019','0','0','','4','0','10.73','1','4','1');");

require("../../inc/footer.php");
?>