<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','玫琳凯 心语香水29ml 女士香水 花果香型','','5','75','0','玫琳凯 心语香水29ml 女士香水 花果香型','1499068800','1499328000','0','a:8:{s:10:\"sale_price\";d:0;s:15:\"retainage_start\";i:1499386140;s:13:\"retainage_end\";i:1499904540;s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:36;}}s:15:\"restrict_amount\";i:100;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:10;s:13:\"deliver_goods\";s:0:\"\";}');");
E_D("replace into `ecs_goods_activity` values('2','Loreal欧莱雅 透明质酸洗护套装（洗发水400ml+护发素200ml）无硅油洗发','','5','67','0','Loreal欧莱雅 透明质酸洗护套装（洗发水400ml+护发素200ml）无硅油洗发','1562140800','1594368000','0','a:8:{s:10:\"sale_price\";d:0;s:15:\"retainage_start\";i:1594426860;s:13:\"retainage_end\";i:1719966060;s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:30;}}s:15:\"restrict_amount\";i:100;s:13:\"gift_integral\";i:10;s:7:\"deposit\";d:10;s:13:\"deliver_goods\";s:0:\"\";}');");
E_D("replace into `ecs_goods_activity` values('3','泊泉雅 马油保湿润肤身体乳 250g 滋润舒缓肌肤','','5','64','0','泊泉雅 马油保湿润肤身体乳 250g 滋润舒缓肌肤','1499043600','1625644800','0','a:8:{s:10:\"sale_price\";d:0;s:15:\"retainage_start\";i:1625703780;s:13:\"retainage_end\";i:1783210980;s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:20;}}s:15:\"restrict_amount\";i:100;s:13:\"gift_integral\";i:10;s:7:\"deposit\";d:10;s:13:\"deliver_goods\";s:0:\"\";}');");
E_D("replace into `ecs_goods_activity` values('4','奕香 桂花百合白茶玫瑰女士香水45ml','','1','81','0','奕香 桂花百合白茶玫瑰女士香水45ml','1498896000','1688198400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:100;s:5:\"price\";d:20;}}s:15:\"restrict_amount\";i:1000;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:10;}');");
E_D("replace into `ecs_goods_activity` values('5','Burberry巴宝莉 红粉恋歌女士香水 30/50/100ml','','1','73','0','Burberry巴宝莉 红粉恋歌女士香水 30/50/100ml','1498809600','1751702400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:8;}}s:15:\"restrict_amount\";i:1000;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:5;}');");
E_D("replace into `ecs_goods_activity` values('6','泊泉雅 香体乳250ml 身体乳补水保湿控油','','1','66','0','泊泉雅 香体乳250ml 身体乳补水保湿控油','1498809600','2035353600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:20;}}s:15:\"restrict_amount\";i:1000;s:13:\"gift_integral\";i:10;s:7:\"deposit\";d:10;}');");
E_D("replace into `ecs_goods_activity` values('7','玫琳凯 旅情香水50ml 女士香水 持久淡香','','1','74','0','玫琳凯 旅情香水50ml 女士香水 持久淡香','1498809600','1751702400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:10;}}s:15:\"restrict_amount\";i:1000;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:10;}');");

require("../../inc/footer.php");
?>