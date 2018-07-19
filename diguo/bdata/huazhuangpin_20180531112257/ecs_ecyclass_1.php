<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecyclass`;");
E_C("CREATE TABLE `ecs_ecyclass` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(150) NOT NULL DEFAULT '',
  `brand_logo` varchar(255) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `porduct_id` int(11) unsigned NOT NULL DEFAULT '0',
  `pclassid` tinyint(6) unsigned NOT NULL DEFAULT '1',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecyclass` values('1','右边广告图1','1334622457242569288.jpg','','http://www.zuimoban.com','1','39','3','1');");
E_D("replace into `ecs_ecyclass` values('2','右边广告图2','1334622533637372469.jpg','','http://www.zuimoban.com','2','39','3','1');");
E_D("replace into `ecs_ecyclass` values('3','右边广告图3','1334622585413994644.jpg','','http://','3','39','3','1');");
E_D("replace into `ecs_ecyclass` values('4','右边广告图4','1334622599215149074.jpg','','http://','4','39','3','1');");
E_D("replace into `ecs_ecyclass` values('5','封面幻灯片1','1334624223553276059.jpg','','http://','1','39','2','1');");
E_D("replace into `ecs_ecyclass` values('6','封面幻灯片2','1334624249185653898.jpg','','http://','2','39','2','1');");
E_D("replace into `ecs_ecyclass` values('7','封面幻灯片3','1334624274567822190.jpg','','http://','3','39','2','1');");
E_D("replace into `ecs_ecyclass` values('8','封面幻灯片4','1334624426753260216.jpg','','http://','4','39','2','1');");
E_D("replace into `ecs_ecyclass` values('9','封面幻灯片5','1334624438273374968.jpg','','http://','5','39','2','1');");
E_D("replace into `ecs_ecyclass` values('10','封面幻灯片6','1334624454628687755.jpg','','http://','6','39','2','1');");
E_D("replace into `ecs_ecyclass` values('11','封面幻灯片7','1334624592180263981.jpg','','http://','7','39','2','1');");
E_D("replace into `ecs_ecyclass` values('12','封面幻灯片8','1334624579159365200.jpg','','http://','8','39','2','1');");
E_D("replace into `ecs_ecyclass` values('13','封面幻灯片9','1334624637517085700.jpg','','http://','9','39','2','1');");
E_D("replace into `ecs_ecyclass` values('14','封面幻灯片10','1334624648014058874.jpg','','http://','10','39','2','1');");
E_D("replace into `ecs_ecyclass` values('15','封面页左侧图1','1334624706876566247.jpg','','http://','1','39','4','1');");
E_D("replace into `ecs_ecyclass` values('16','封面页左侧图2','1334624721394541238.jpg','','http://','2','39','4','1');");
E_D("replace into `ecs_ecyclass` values('17','封面页左侧图3','1334624745002766294.jpg','','http://','3','39','4','1');");
E_D("replace into `ecs_ecyclass` values('18','8折！长虹电视400台限量团购！','','','http://','6','39','6','1');");
E_D("replace into `ecs_ecyclass` values('19','黑色星期五，疯抢价格只在每周五','','','http://','5','39','6','1');");
E_D("replace into `ecs_ecyclass` values('20','猜价格赢彩电-TCL电视万人团购','','','http://','4','39','6','1');");
E_D("replace into `ecs_ecyclass` values('21','·同方荣耀十五年 好评晒单赢免单','','','http://','3','39','6','1');");
E_D("replace into `ecs_ecyclass` values('22','买汽车用品，上京东','','','http://','2','39','6','1');");
E_D("replace into `ecs_ecyclass` values('23','熊猫彩电送京券活动发放京券公示','','','http://','1','39','6','1');");
E_D("replace into `ecs_ecyclass` values('24','运动鞋类图片','1334629371678749510.jpg','','http://','1','61','1','1');");
E_D("replace into `ecs_ecyclass` values('25','运动服类图片','1334629401764850019.jpg','','http://','1','62','1','1');");
E_D("replace into `ecs_ecyclass` values('26','配件/包袋分类图片','1334629829576288543.jpg','','http://','1','63','1','1');");
E_D("replace into `ecs_ecyclass` values('27','户外用品分类图片','1334629850583053521.jpg','','http://','1','112','1','1');");

require("../../inc/footer.php");
?>