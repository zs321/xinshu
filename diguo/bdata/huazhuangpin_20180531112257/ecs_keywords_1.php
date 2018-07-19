<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2017-04-01','ecshop','北极','1');");
E_D("replace into `ecs_keywords` values('2017-04-04','ecshop','肉','2');");
E_D("replace into `ecs_keywords` values('2017-04-05','ecshop','法国进口拉菲传奇干红葡萄酒','1');");
E_D("replace into `ecs_keywords` values('2017-04-05','ecshop','750ml','1');");
E_D("replace into `ecs_keywords` values('2017-04-05','ecshop','华','1');");
E_D("replace into `ecs_keywords` values('2017-04-05','ecshop','谱','1');");
E_D("replace into `ecs_keywords` values('2017-04-20','ecshop','11111','4');");
E_D("replace into `ecs_keywords` values('2017-04-20','ecshop','菜','8');");
E_D("replace into `ecs_keywords` values('2017-04-24','ecshop','台湾青柠檬4粒','1');");
E_D("replace into `ecs_keywords` values('2017-04-24','ecshop','鲜柠檬青柠檬片','1');");
E_D("replace into `ecs_keywords` values('2017-05-16','ecshop','蔬菜','2');");
E_D("replace into `ecs_keywords` values('2017-05-16','ecshop','彩椒','1');");
E_D("replace into `ecs_keywords` values('2017-05-16','ecshop','牛奶','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','水果','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','苹果','2');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','肉','2');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','牛奶','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','鳕鱼','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','白虾','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','大米','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','猕猴桃','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','海外直采','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','榴莲','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','葡萄酒','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','BAIDU','www.huadezhao.com','3');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','问卷调查','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','广西','1');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','白菜','4');");
E_D("replace into `ecs_keywords` values('2017-05-17','ecshop','猪','2');");
E_D("replace into `ecs_keywords` values('2017-05-18','BAIDU','www.huadezhao.com','1');");
E_D("replace into `ecs_keywords` values('2017-05-18','ecshop','123','2');");
E_D("replace into `ecs_keywords` values('2017-05-18','ecshop','快易捷','3');");
E_D("replace into `ecs_keywords` values('2017-05-22','ecshop','小米辣','2');");
E_D("replace into `ecs_keywords` values('2017-05-22','ecshop','听湖','1');");
E_D("replace into `ecs_keywords` values('2017-05-28','ecshop','牛奶','3');");
E_D("replace into `ecs_keywords` values('2017-05-28','ecshop','鳕鱼','3');");
E_D("replace into `ecs_keywords` values('2017-05-28','ecshop','白虾','3');");
E_D("replace into `ecs_keywords` values('2017-05-28','ecshop','大米','3');");
E_D("replace into `ecs_keywords` values('2017-05-28','ecshop','猕猴桃','3');");
E_D("replace into `ecs_keywords` values('2017-05-28','ecshop','海外直采','3');");
E_D("replace into `ecs_keywords` values('2017-05-28','ecshop','榴莲','3');");
E_D("replace into `ecs_keywords` values('2017-05-31','ecshop','蜂蜜','2');");
E_D("replace into `ecs_keywords` values('2017-06-09','ecshop','大米↙','2');");
E_D("replace into `ecs_keywords` values('2017-06-09','ecshop','鸡','2');");
E_D("replace into `ecs_keywords` values('2017-06-11','ecshop','测试','2');");
E_D("replace into `ecs_keywords` values('2017-06-12','ecshop','测试','4');");
E_D("replace into `ecs_keywords` values('2017-06-12','ecshop','维摩','1');");
E_D("replace into `ecs_keywords` values('2017-07-03','ecshop','榴莲','2');");
E_D("replace into `ecs_keywords` values('2017-07-03','ecshop','大米','1');");
E_D("replace into `ecs_keywords` values('2017-07-03','ecshop','白虾','1');");
E_D("replace into `ecs_keywords` values('2017-07-03','ecshop','鳕鱼','1');");
E_D("replace into `ecs_keywords` values('2017-07-03','ecshop','海外直采','1');");
E_D("replace into `ecs_keywords` values('2017-07-05','ecshop','猪肉','1');");
E_D("replace into `ecs_keywords` values('2017-07-05','ecshop','肉','1');");
E_D("replace into `ecs_keywords` values('2017-07-29','ecshop','护肤','1');");
E_D("replace into `ecs_keywords` values('2017-07-29','ecshop','护','5');");
E_D("replace into `ecs_keywords` values('2018-03-07','ecshop','保湿面膜','1');");
E_D("replace into `ecs_keywords` values('2018-03-07','ecshop','洗面奶','1');");
E_D("replace into `ecs_keywords` values('2018-03-30','ecshop','面膜','1');");
E_D("replace into `ecs_keywords` values('2018-04-04','ecshop','洗面奶','1');");

require("../../inc/footer.php");
?>