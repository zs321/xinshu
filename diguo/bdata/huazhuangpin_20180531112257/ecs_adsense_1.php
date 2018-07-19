<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('5','本站','1');");
E_D("replace into `ecs_adsense` values('6','本站','2');");
E_D("replace into `ecs_adsense` values('9','本站','1');");
E_D("replace into `ecs_adsense` values('8','本站','1');");
E_D("replace into `ecs_adsense` values('16','本站','1');");
E_D("replace into `ecs_adsense` values('7','wap站','23');");
E_D("replace into `ecs_adsense` values('5','wap站','16');");
E_D("replace into `ecs_adsense` values('11','wap站','22');");
E_D("replace into `ecs_adsense` values('8','pc站','10');");
E_D("replace into `ecs_adsense` values('9','pc站','17');");
E_D("replace into `ecs_adsense` values('3','pc站','4');");
E_D("replace into `ecs_adsense` values('16','wap站','23');");
E_D("replace into `ecs_adsense` values('1','pc站','10');");
E_D("replace into `ecs_adsense` values('2','pc站','2');");
E_D("replace into `ecs_adsense` values('7','pc站','5');");
E_D("replace into `ecs_adsense` values('9','wap站','13');");
E_D("replace into `ecs_adsense` values('15','wap站','27');");
E_D("replace into `ecs_adsense` values('14','wap站','28');");
E_D("replace into `ecs_adsense` values('4','pc站','10');");
E_D("replace into `ecs_adsense` values('5','pc站','11');");
E_D("replace into `ecs_adsense` values('6','wap站','12');");
E_D("replace into `ecs_adsense` values('13','wap站','29');");
E_D("replace into `ecs_adsense` values('1','wap站','6');");
E_D("replace into `ecs_adsense` values('12','wap站','36');");
E_D("replace into `ecs_adsense` values('10','wap站','8');");
E_D("replace into `ecs_adsense` values('4','wap站','32');");
E_D("replace into `ecs_adsense` values('2','wap站','27');");
E_D("replace into `ecs_adsense` values('8','wap站','20');");
E_D("replace into `ecs_adsense` values('10','pc站','10');");
E_D("replace into `ecs_adsense` values('28','wap站','1');");
E_D("replace into `ecs_adsense` values('17','pc站','20');");
E_D("replace into `ecs_adsense` values('15','pc站','19');");
E_D("replace into `ecs_adsense` values('11','pc站','14');");
E_D("replace into `ecs_adsense` values('18','pc站','17');");
E_D("replace into `ecs_adsense` values('16','pc站','20');");
E_D("replace into `ecs_adsense` values('25','pc站','6');");
E_D("replace into `ecs_adsense` values('24','pc站','8');");
E_D("replace into `ecs_adsense` values('42','pc站','12');");
E_D("replace into `ecs_adsense` values('23','pc站','21');");
E_D("replace into `ecs_adsense` values('21','pc站','25');");
E_D("replace into `ecs_adsense` values('27','pc站','8');");
E_D("replace into `ecs_adsense` values('28','pc站','10');");
E_D("replace into `ecs_adsense` values('22','pc站','13');");
E_D("replace into `ecs_adsense` values('14','pc站','14');");
E_D("replace into `ecs_adsense` values('41','pc站','9');");
E_D("replace into `ecs_adsense` values('13','pc站','15');");
E_D("replace into `ecs_adsense` values('33','pc站','14');");
E_D("replace into `ecs_adsense` values('19','pc站','10');");
E_D("replace into `ecs_adsense` values('12','pc站','21');");
E_D("replace into `ecs_adsense` values('26','pc站','9');");
E_D("replace into `ecs_adsense` values('40','pc站','10');");
E_D("replace into `ecs_adsense` values('34','pc站','4');");
E_D("replace into `ecs_adsense` values('35','pc站','5');");
E_D("replace into `ecs_adsense` values('46','pc站','4');");
E_D("replace into `ecs_adsense` values('31','pc站','7');");
E_D("replace into `ecs_adsense` values('29','pc站','6');");
E_D("replace into `ecs_adsense` values('36','pc站','9');");
E_D("replace into `ecs_adsense` values('38','pc站','10');");
E_D("replace into `ecs_adsense` values('44','pc站','5');");
E_D("replace into `ecs_adsense` values('20','pc站','11');");
E_D("replace into `ecs_adsense` values('45','pc站','7');");
E_D("replace into `ecs_adsense` values('30','pc站','8');");
E_D("replace into `ecs_adsense` values('32','pc站','8');");
E_D("replace into `ecs_adsense` values('43','pc站','8');");
E_D("replace into `ecs_adsense` values('39','pc站','11');");
E_D("replace into `ecs_adsense` values('37','pc站','7');");
E_D("replace into `ecs_adsense` values('17','wap站','1');");
E_D("replace into `ecs_adsense` values('21','wap站','1');");
E_D("replace into `ecs_adsense` values('33','wap站','1');");
E_D("replace into `ecs_adsense` values('42','wap站','1');");
E_D("replace into `ecs_adsense` values('24','wap站','3');");
E_D("replace into `ecs_adsense` values('48','pc站','7');");
E_D("replace into `ecs_adsense` values('49','pc站','5');");
E_D("replace into `ecs_adsense` values('47','pc站','5');");
E_D("replace into `ecs_adsense` values('6','pc站','1');");
E_D("replace into `ecs_adsense` values('29','wap站','1');");

require("../../inc/footer.php");
?>