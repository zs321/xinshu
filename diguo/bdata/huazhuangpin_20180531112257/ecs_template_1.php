<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values('index','全网优选广告区域','/library/ad_position.lbi','0','34','8','4','huazhuangpin','');");
E_D("replace into `ecs_template` values('article','','/library/recommend_best.lbi','0','0','4','0','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','3','4','6','1','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','4','5','6','1','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','首页图片文章列表','/library/cat_articles.lbi','0','16','4','3','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','2','3','6','1','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','0','1','6','1','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','1','2','6','1','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','24','0','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','5','0','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','5','0','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','6','0','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_hot.lbi','0','0','5','0','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','5','0','huazhuangpin','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_best.lbi','0','0','5','0','huazhuangpin','');");
E_D("replace into `ecs_template` values('article','','/library/recommend_hot.lbi','0','0','4','0','huazhuangpin','');");
E_D("replace into `ecs_template` values('article','','/library/recommend_promotion.lbi','0','0','4','0','huazhuangpin','');");

require("../../inc/footer.php");
?>