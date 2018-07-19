<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute`;");
E_C("CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_linked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_attribute` values('1','1','规格','0','1','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('2','1','功效','1','0','胶原增生\r\n抗痘去印\r\n美白祛斑\r\n提亮肤色\r\n深层保湿\r\n深层清洁\r\n温水卸妆\r\n防水','0','0','1','0');");
E_D("replace into `ecs_attribute` values('3','1','原理','1','0','正负离子\r\n射频','0','0','1','0');");
E_D("replace into `ecs_attribute` values('4','1','防晒度数SPF','1','0','SPF30以下\r\nSPF30或以上','0','0','1','0');");
E_D("replace into `ecs_attribute` values('5','1','日本防晒度数PA','1','0','PA++ 或以下\r\nPA+++或以上','0','0','0','0');");
E_D("replace into `ecs_attribute` values('6','1','标签','1','0','澳洲制造\r\n德国制造\r\n瑞士制造\r\n意大利制造\r\n英国制造\r\n美国制造\r\n法国制造\r\n日本制造\r\n国货精品\r\n香港制造','0','0','0','0');");
E_D("replace into `ecs_attribute` values('8','1','颜色','0','1','','0','0','0','0');");

require("../../inc/footer.php");
?>