<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
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
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('4','1','0','首页1F分类商品左侧广告','','1498881963962388821.jpg','1474012800','2075562061','','','','8','1');");
E_D("replace into `ecs_ad` values('5','4','0','首页2F分类商品左侧广告','','1498888235874412195.jpg','1474012800','2075562061','','','','7','1');");
E_D("replace into `ecs_ad` values('9','7','0','首页3F分类商品左侧广告','','1491008645615387687.jpg','1474012800','2075562061','','','','7','1');");
E_D("replace into `ecs_ad` values('15','10','0','首页4F分类商品左侧广告','','1498972223237950009.jpg','1474012800','2075562061','','','','2','1');");
E_D("replace into `ecs_ad` values('23','17','0','首页5F分类商品左侧广告','','1498972830927255513.jpg','1498896000','2075562061','','','','3','1');");
E_D("replace into `ecs_ad` values('37','34','0','全网优选广告2','','qwyx02.jpg','1474012800','2075562061','','','','10','1');");
E_D("replace into `ecs_ad` values('36','34','0','全网优选广告1','','qwyx01.jpg','1474012800','2075562061','','','','12','1');");
E_D("replace into `ecs_ad` values('28','20','0','微信二维码','','1499034813928288732.jpg','1498982400','2075562061','','','','0','1');");
E_D("replace into `ecs_ad` values('29','27','0','首页1F分类商品底部广告','','1499061243666672507.jpg','1498982400','2075562061','','','','2','1');");
E_D("replace into `ecs_ad` values('30','28','0','首页2F分类商品底部广告','','1499061339072643854.jpg','1498982400','2075562061','','','','2','1');");
E_D("replace into `ecs_ad` values('31','29','0','首页3F分类商品底部广告','','1499061366466159762.jpg','1498982400','2075562061','','','','2','1');");
E_D("replace into `ecs_ad` values('32','30','0','首页4F分类商品底部广告','','1499061398834412808.jpg','1498982400','2075562061','','','','2','1');");
E_D("replace into `ecs_ad` values('33','31','0','首页5F分类商品底部广告','','1499061429628911664.jpg','1498982400','2075562061','','','','2','1');");
E_D("replace into `ecs_ad` values('38','34','0','全网优选广告3','','qwyx03.jpg','1474012800','2075562061','','','','12','1');");
E_D("replace into `ecs_ad` values('35','33','0','优惠券页面广告','','1499123298695218583.jpg','1499068800','2075562061','','','','0','1');");
E_D("replace into `ecs_ad` values('39','34','0','全网优选广告4','','qwyx04.jpg','1474012800','2075562061','','','','11','1');");
E_D("replace into `ecs_ad` values('40','34','0','全网优选广告5','','qwyx05.jpg','1474012800','2075562061','','','','13','1');");
E_D("replace into `ecs_ad` values('41','34','0','全网优选广告6','','qwyx06.jpg','1474012800','2075562061','','','','11','1');");
E_D("replace into `ecs_ad` values('42','34','0','全网优选广告7','','qwyx07.jpg','1474012800','2075562061','','','','11','1');");
E_D("replace into `ecs_ad` values('43','34','0','全网优选广告8','','qwyx08.jpg','1474012800','2075562061','','','','11','1');");

require("../../inc/footer.php");
?>