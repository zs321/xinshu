<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_brand`;");
E_C("CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `brand_banner` varchar(80) NOT NULL COMMENT '商品品牌banner',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_brand` values('1','Olay','01.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('2','雅诗兰黛','02.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('3','自然堂','03.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('4','百雀羚','04.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('5','美肤宝','05.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('6','欧诗漫','06.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('7','迪奥','07.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('8','玫琳凯','08.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('9','雅漾','09.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('10','菲斯小铺','10.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('11','薇姿','11.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('12','自然堂','001.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('13','百雀羚','002.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('14','丹姿','003.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('15','泉润','004.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('16','卡姿兰','005.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('17','欧诗漫','006.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('18','兰蔻','007.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('19','丸美','008.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('20','雅格丽白','009.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('21','维芙雅','010.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('22','可滋泉','011.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('23','温碧泉','012.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('24','韩后','013.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('25','美即','014.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('26','兰芝','015.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('27','谜尚','016.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('28','梦妆','017.png','','http://','50','1','');");
E_D("replace into `ecs_brand` values('29','卡尔文克莱恩（CK）','','','','50','1','');");
E_D("replace into `ecs_brand` values('30','汤米·希尔费格（Tommy hilfiger）','','','','50','1','');");

require("../../inc/footer.php");
?>