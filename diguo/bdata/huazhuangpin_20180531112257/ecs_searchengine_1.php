<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2015-12-16','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2016-03-14','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-03-15','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-03-17','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-05-16','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2016-05-17','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2016-05-18','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2016-05-19','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-05-20','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2016-05-21','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2016-05-22','GOOGLE','11');");
E_D("replace into `ecs_searchengine` values('2016-05-23','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-05-24','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-05-25','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2016-05-26','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-05-27','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2016-05-28','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-05-29','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-05-30','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2016-05-31','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2016-06-01','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-06-02','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-06-03','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-06-04','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-06-05','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-06-06','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-06-07','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2016-06-08','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2016-06-09','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2016-06-10','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2016-06-11','GOOGLE','11');");
E_D("replace into `ecs_searchengine` values('2016-06-12','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2016-06-13','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2016-06-14','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-06-15','GOOGLE','11');");
E_D("replace into `ecs_searchengine` values('2016-06-16','GOOGLE','19');");
E_D("replace into `ecs_searchengine` values('2016-06-17','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2016-06-18','GOOGLE','11');");
E_D("replace into `ecs_searchengine` values('2016-06-19','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2016-06-20','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2016-07-28','GOOGLE','300');");
E_D("replace into `ecs_searchengine` values('2016-07-31','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-08-03','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-08-06','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-08-08','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2016-08-09','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2017-05-18','GOOGLE','25');");
E_D("replace into `ecs_searchengine` values('2017-05-19','GOOGLE','39');");
E_D("replace into `ecs_searchengine` values('2017-05-20','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2017-05-21','GOOGLE','23');");
E_D("replace into `ecs_searchengine` values('2017-05-22','GOOGLE','23');");
E_D("replace into `ecs_searchengine` values('2017-05-23','GOOGLE','22');");
E_D("replace into `ecs_searchengine` values('2017-05-24','GOOGLE','32');");
E_D("replace into `ecs_searchengine` values('2017-05-25','GOOGLE','25');");
E_D("replace into `ecs_searchengine` values('2017-05-26','GOOGLE','25');");
E_D("replace into `ecs_searchengine` values('2017-05-27','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2017-05-27','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2017-05-28','GOOGLE','20');");
E_D("replace into `ecs_searchengine` values('2017-05-29','GOOGLE','19');");
E_D("replace into `ecs_searchengine` values('2017-05-31','GOOGLE','19');");
E_D("replace into `ecs_searchengine` values('2017-06-01','GOOGLE','57');");
E_D("replace into `ecs_searchengine` values('2017-06-02','GOOGLE','84');");
E_D("replace into `ecs_searchengine` values('2017-06-03','GOOGLE','121');");
E_D("replace into `ecs_searchengine` values('2017-06-04','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2017-06-09','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2017-06-10','GOOGLE','19');");
E_D("replace into `ecs_searchengine` values('2017-06-11','GOOGLE','14');");
E_D("replace into `ecs_searchengine` values('2017-06-12','GOOGLE','28');");
E_D("replace into `ecs_searchengine` values('2018-03-02','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2018-03-03','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2018-03-04','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2018-03-05','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2018-03-06','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2018-03-10','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2018-03-11','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2018-03-13','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2018-03-14','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2018-03-15','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2018-03-16','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2018-03-17','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2018-03-18','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2018-04-04','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2018-04-11','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2018-05-02','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2018-05-10','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2018-05-22','GOOGLE','1');");

require("../../inc/footer.php");
?>