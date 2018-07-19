<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_ad`;");
E_C("CREATE TABLE `ecs_touch_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_ad` values('1','1','0','手机版首页Banner-1','','1449014580066418106.jpg','1396339200','2075562061','','','','47','1');");
E_D("replace into `ecs_touch_ad` values('2','1','0','手机版首页Banner-2','','1449014605524349143.jpg','1396339200','2075562061','','','','44','1');");
E_D("replace into `ecs_touch_ad` values('3','1','0','手机版首页Banner-3','','1449014633204150477.jpg','1444204800','2075562061','','','','3','1');");
E_D("replace into `ecs_touch_ad` values('4','1','0','手机版首页Banner-4','','1499215874670723479.jpg','1499155200','2075562061','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('5','2','0','特色市场左侧2张广告图-1','','1449016811692410208.jpg','1444291200','2075562061','','','','18','1');");
E_D("replace into `ecs_touch_ad` values('6','2','0','特色市场左侧2张广告图-2','','1449016839099893816.jpg','1444291200','2075562061','','','','28','1');");
E_D("replace into `ecs_touch_ad` values('7','3','0','特色市场右侧1张广告图','','1449016150489841497.jpg','1444291200','2075562061','','','','30','1');");
E_D("replace into `ecs_touch_ad` values('8','4','0','热门市场-1','','01.jpg','1444291200','2075562061','','','','30','1');");
E_D("replace into `ecs_touch_ad` values('9','4','0','热门市场-2','','02.jpg','1444291200','2075562061','','','','11','1');");
E_D("replace into `ecs_touch_ad` values('10','4','0','热门市场-3','','03.jpg','1444291200','2075562061','','','','10','1');");
E_D("replace into `ecs_touch_ad` values('11','4','0','热门市场-4','','04.jpg','1444291200','2075562061','','','','8','1');");
E_D("replace into `ecs_touch_ad` values('12','4','0','热门市场-5','','05.jpg','1444291200','2075562061','','','','16','1');");
E_D("replace into `ecs_touch_ad` values('13','4','0','热门市场-6','','06.jpg','1444291200','2075562061','','','','23','1');");
E_D("replace into `ecs_touch_ad` values('14','4','0','热门市场-7','','07.jpg','1444291200','2075562061','','','','8','1');");
E_D("replace into `ecs_touch_ad` values('15','4','0','热门市场-8','','08.jpg','1444291200','2075562061','','','','16','1');");
E_D("replace into `ecs_touch_ad` values('16','4','0','热门市场-9','','09.jpg','1444291200','2075562061','','','','23','1');");
E_D("replace into `ecs_touch_ad` values('17','5','0','护肤用品','category.php?id=1','11.jpg','1444291200','2075562061','','','','16','1');");
E_D("replace into `ecs_touch_ad` values('18','6','0','彩妆用品','category.php?id=2','12.jpg','1444291200','2075562061','','','','16','1');");
E_D("replace into `ecs_touch_ad` values('19','7','0','美容工具','category.php?id=3','13.jpg','1444291200','2075562061','','','','16','1');");
E_D("replace into `ecs_touch_ad` values('20','8','0','香水香氛','category.php?id=4','14.jpg','1444291200','2075562061','','','','16','1');");
E_D("replace into `ecs_touch_ad` values('21','9','0','个人护理','category.php?id=5','15.jpg','1444291200','2075562061','','','','16','1');");
E_D("replace into `ecs_touch_ad` values('22','11','0','优惠券领取广告','bonus.php','1499229946142525087.jpg','1499155200','2075562061','','','','2','1');");

require("../../inc/footer.php");
?>