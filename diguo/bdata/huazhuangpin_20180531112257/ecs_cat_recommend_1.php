<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cat_recommend`;");
E_C("CREATE TABLE `ecs_cat_recommend` (
  `cat_id` smallint(5) NOT NULL,
  `recommend_type` tinyint(1) NOT NULL,
  PRIMARY KEY (`cat_id`,`recommend_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cat_recommend` values('7','1');");
E_D("replace into `ecs_cat_recommend` values('7','2');");
E_D("replace into `ecs_cat_recommend` values('7','3');");
E_D("replace into `ecs_cat_recommend` values('8','1');");
E_D("replace into `ecs_cat_recommend` values('8','2');");
E_D("replace into `ecs_cat_recommend` values('8','3');");
E_D("replace into `ecs_cat_recommend` values('9','1');");
E_D("replace into `ecs_cat_recommend` values('9','2');");
E_D("replace into `ecs_cat_recommend` values('9','3');");
E_D("replace into `ecs_cat_recommend` values('10','1');");
E_D("replace into `ecs_cat_recommend` values('10','2');");
E_D("replace into `ecs_cat_recommend` values('10','3');");
E_D("replace into `ecs_cat_recommend` values('11','1');");
E_D("replace into `ecs_cat_recommend` values('11','2');");
E_D("replace into `ecs_cat_recommend` values('11','3');");
E_D("replace into `ecs_cat_recommend` values('12','1');");
E_D("replace into `ecs_cat_recommend` values('12','2');");
E_D("replace into `ecs_cat_recommend` values('12','3');");
E_D("replace into `ecs_cat_recommend` values('13','1');");
E_D("replace into `ecs_cat_recommend` values('13','2');");
E_D("replace into `ecs_cat_recommend` values('13','3');");
E_D("replace into `ecs_cat_recommend` values('14','1');");
E_D("replace into `ecs_cat_recommend` values('14','2');");
E_D("replace into `ecs_cat_recommend` values('14','3');");
E_D("replace into `ecs_cat_recommend` values('15','1');");
E_D("replace into `ecs_cat_recommend` values('15','2');");
E_D("replace into `ecs_cat_recommend` values('15','3');");
E_D("replace into `ecs_cat_recommend` values('16','1');");
E_D("replace into `ecs_cat_recommend` values('16','2');");
E_D("replace into `ecs_cat_recommend` values('16','3');");
E_D("replace into `ecs_cat_recommend` values('17','1');");
E_D("replace into `ecs_cat_recommend` values('17','2');");
E_D("replace into `ecs_cat_recommend` values('17','3');");
E_D("replace into `ecs_cat_recommend` values('18','1');");
E_D("replace into `ecs_cat_recommend` values('18','2');");
E_D("replace into `ecs_cat_recommend` values('18','3');");
E_D("replace into `ecs_cat_recommend` values('19','1');");
E_D("replace into `ecs_cat_recommend` values('19','2');");
E_D("replace into `ecs_cat_recommend` values('19','3');");
E_D("replace into `ecs_cat_recommend` values('20','1');");
E_D("replace into `ecs_cat_recommend` values('20','2');");
E_D("replace into `ecs_cat_recommend` values('20','3');");
E_D("replace into `ecs_cat_recommend` values('21','1');");
E_D("replace into `ecs_cat_recommend` values('21','2');");
E_D("replace into `ecs_cat_recommend` values('21','3');");
E_D("replace into `ecs_cat_recommend` values('22','1');");
E_D("replace into `ecs_cat_recommend` values('22','2');");
E_D("replace into `ecs_cat_recommend` values('22','3');");
E_D("replace into `ecs_cat_recommend` values('23','1');");
E_D("replace into `ecs_cat_recommend` values('23','2');");
E_D("replace into `ecs_cat_recommend` values('23','3');");
E_D("replace into `ecs_cat_recommend` values('24','1');");
E_D("replace into `ecs_cat_recommend` values('24','2');");
E_D("replace into `ecs_cat_recommend` values('24','3');");
E_D("replace into `ecs_cat_recommend` values('25','1');");
E_D("replace into `ecs_cat_recommend` values('25','2');");
E_D("replace into `ecs_cat_recommend` values('25','3');");
E_D("replace into `ecs_cat_recommend` values('26','1');");
E_D("replace into `ecs_cat_recommend` values('26','2');");
E_D("replace into `ecs_cat_recommend` values('26','3');");
E_D("replace into `ecs_cat_recommend` values('27','1');");
E_D("replace into `ecs_cat_recommend` values('27','2');");
E_D("replace into `ecs_cat_recommend` values('27','3');");
E_D("replace into `ecs_cat_recommend` values('28','1');");
E_D("replace into `ecs_cat_recommend` values('28','2');");
E_D("replace into `ecs_cat_recommend` values('28','3');");
E_D("replace into `ecs_cat_recommend` values('29','1');");
E_D("replace into `ecs_cat_recommend` values('29','2');");
E_D("replace into `ecs_cat_recommend` values('29','3');");
E_D("replace into `ecs_cat_recommend` values('30','1');");
E_D("replace into `ecs_cat_recommend` values('30','2');");
E_D("replace into `ecs_cat_recommend` values('30','3');");
E_D("replace into `ecs_cat_recommend` values('31','1');");
E_D("replace into `ecs_cat_recommend` values('31','2');");
E_D("replace into `ecs_cat_recommend` values('31','3');");
E_D("replace into `ecs_cat_recommend` values('32','1');");
E_D("replace into `ecs_cat_recommend` values('32','2');");
E_D("replace into `ecs_cat_recommend` values('32','3');");
E_D("replace into `ecs_cat_recommend` values('33','1');");
E_D("replace into `ecs_cat_recommend` values('33','2');");
E_D("replace into `ecs_cat_recommend` values('33','3');");
E_D("replace into `ecs_cat_recommend` values('34','1');");
E_D("replace into `ecs_cat_recommend` values('34','2');");
E_D("replace into `ecs_cat_recommend` values('34','3');");
E_D("replace into `ecs_cat_recommend` values('35','1');");
E_D("replace into `ecs_cat_recommend` values('35','2');");
E_D("replace into `ecs_cat_recommend` values('35','3');");
E_D("replace into `ecs_cat_recommend` values('36','1');");
E_D("replace into `ecs_cat_recommend` values('36','2');");
E_D("replace into `ecs_cat_recommend` values('36','3');");
E_D("replace into `ecs_cat_recommend` values('37','1');");
E_D("replace into `ecs_cat_recommend` values('37','2');");
E_D("replace into `ecs_cat_recommend` values('37','3');");
E_D("replace into `ecs_cat_recommend` values('38','1');");
E_D("replace into `ecs_cat_recommend` values('38','2');");
E_D("replace into `ecs_cat_recommend` values('38','3');");
E_D("replace into `ecs_cat_recommend` values('39','1');");
E_D("replace into `ecs_cat_recommend` values('39','2');");
E_D("replace into `ecs_cat_recommend` values('39','3');");
E_D("replace into `ecs_cat_recommend` values('40','1');");
E_D("replace into `ecs_cat_recommend` values('40','2');");
E_D("replace into `ecs_cat_recommend` values('40','3');");
E_D("replace into `ecs_cat_recommend` values('41','1');");
E_D("replace into `ecs_cat_recommend` values('41','2');");
E_D("replace into `ecs_cat_recommend` values('41','3');");
E_D("replace into `ecs_cat_recommend` values('42','1');");
E_D("replace into `ecs_cat_recommend` values('42','2');");
E_D("replace into `ecs_cat_recommend` values('42','3');");
E_D("replace into `ecs_cat_recommend` values('43','1');");
E_D("replace into `ecs_cat_recommend` values('43','2');");
E_D("replace into `ecs_cat_recommend` values('43','3');");
E_D("replace into `ecs_cat_recommend` values('44','1');");
E_D("replace into `ecs_cat_recommend` values('44','2');");
E_D("replace into `ecs_cat_recommend` values('44','3');");
E_D("replace into `ecs_cat_recommend` values('45','1');");
E_D("replace into `ecs_cat_recommend` values('45','2');");
E_D("replace into `ecs_cat_recommend` values('45','3');");
E_D("replace into `ecs_cat_recommend` values('46','1');");
E_D("replace into `ecs_cat_recommend` values('46','2');");
E_D("replace into `ecs_cat_recommend` values('46','3');");
E_D("replace into `ecs_cat_recommend` values('47','1');");
E_D("replace into `ecs_cat_recommend` values('47','2');");
E_D("replace into `ecs_cat_recommend` values('47','3');");
E_D("replace into `ecs_cat_recommend` values('355','1');");
E_D("replace into `ecs_cat_recommend` values('355','2');");
E_D("replace into `ecs_cat_recommend` values('355','3');");
E_D("replace into `ecs_cat_recommend` values('356','1');");
E_D("replace into `ecs_cat_recommend` values('356','2');");
E_D("replace into `ecs_cat_recommend` values('356','3');");
E_D("replace into `ecs_cat_recommend` values('357','1');");
E_D("replace into `ecs_cat_recommend` values('357','2');");
E_D("replace into `ecs_cat_recommend` values('357','3');");
E_D("replace into `ecs_cat_recommend` values('358','1');");
E_D("replace into `ecs_cat_recommend` values('358','2');");
E_D("replace into `ecs_cat_recommend` values('358','3');");
E_D("replace into `ecs_cat_recommend` values('359','1');");
E_D("replace into `ecs_cat_recommend` values('359','2');");
E_D("replace into `ecs_cat_recommend` values('359','3');");
E_D("replace into `ecs_cat_recommend` values('360','1');");
E_D("replace into `ecs_cat_recommend` values('360','2');");
E_D("replace into `ecs_cat_recommend` values('360','3');");
E_D("replace into `ecs_cat_recommend` values('382','1');");
E_D("replace into `ecs_cat_recommend` values('382','2');");
E_D("replace into `ecs_cat_recommend` values('382','3');");
E_D("replace into `ecs_cat_recommend` values('383','1');");
E_D("replace into `ecs_cat_recommend` values('383','2');");
E_D("replace into `ecs_cat_recommend` values('383','3');");
E_D("replace into `ecs_cat_recommend` values('384','1');");
E_D("replace into `ecs_cat_recommend` values('384','2');");
E_D("replace into `ecs_cat_recommend` values('384','3');");
E_D("replace into `ecs_cat_recommend` values('385','1');");
E_D("replace into `ecs_cat_recommend` values('385','2');");
E_D("replace into `ecs_cat_recommend` values('385','3');");
E_D("replace into `ecs_cat_recommend` values('386','1');");
E_D("replace into `ecs_cat_recommend` values('386','2');");
E_D("replace into `ecs_cat_recommend` values('386','3');");
E_D("replace into `ecs_cat_recommend` values('387','1');");
E_D("replace into `ecs_cat_recommend` values('387','2');");
E_D("replace into `ecs_cat_recommend` values('387','3');");
E_D("replace into `ecs_cat_recommend` values('388','1');");
E_D("replace into `ecs_cat_recommend` values('388','2');");
E_D("replace into `ecs_cat_recommend` values('388','3');");
E_D("replace into `ecs_cat_recommend` values('389','1');");
E_D("replace into `ecs_cat_recommend` values('389','2');");
E_D("replace into `ecs_cat_recommend` values('389','3');");
E_D("replace into `ecs_cat_recommend` values('390','1');");
E_D("replace into `ecs_cat_recommend` values('390','2');");
E_D("replace into `ecs_cat_recommend` values('390','3');");
E_D("replace into `ecs_cat_recommend` values('391','1');");
E_D("replace into `ecs_cat_recommend` values('391','2');");
E_D("replace into `ecs_cat_recommend` values('391','3');");
E_D("replace into `ecs_cat_recommend` values('392','1');");
E_D("replace into `ecs_cat_recommend` values('392','2');");
E_D("replace into `ecs_cat_recommend` values('392','3');");
E_D("replace into `ecs_cat_recommend` values('393','1');");
E_D("replace into `ecs_cat_recommend` values('393','2');");
E_D("replace into `ecs_cat_recommend` values('393','3');");
E_D("replace into `ecs_cat_recommend` values('394','1');");
E_D("replace into `ecs_cat_recommend` values('394','2');");
E_D("replace into `ecs_cat_recommend` values('394','3');");
E_D("replace into `ecs_cat_recommend` values('395','1');");
E_D("replace into `ecs_cat_recommend` values('395','2');");
E_D("replace into `ecs_cat_recommend` values('395','3');");
E_D("replace into `ecs_cat_recommend` values('396','1');");
E_D("replace into `ecs_cat_recommend` values('396','2');");
E_D("replace into `ecs_cat_recommend` values('396','3');");
E_D("replace into `ecs_cat_recommend` values('397','1');");
E_D("replace into `ecs_cat_recommend` values('397','2');");
E_D("replace into `ecs_cat_recommend` values('397','3');");
E_D("replace into `ecs_cat_recommend` values('398','1');");
E_D("replace into `ecs_cat_recommend` values('398','2');");
E_D("replace into `ecs_cat_recommend` values('398','3');");
E_D("replace into `ecs_cat_recommend` values('399','1');");
E_D("replace into `ecs_cat_recommend` values('399','2');");
E_D("replace into `ecs_cat_recommend` values('399','3');");
E_D("replace into `ecs_cat_recommend` values('400','1');");
E_D("replace into `ecs_cat_recommend` values('400','2');");
E_D("replace into `ecs_cat_recommend` values('400','3');");
E_D("replace into `ecs_cat_recommend` values('401','1');");
E_D("replace into `ecs_cat_recommend` values('401','2');");
E_D("replace into `ecs_cat_recommend` values('401','3');");
E_D("replace into `ecs_cat_recommend` values('402','1');");
E_D("replace into `ecs_cat_recommend` values('402','2');");
E_D("replace into `ecs_cat_recommend` values('402','3');");
E_D("replace into `ecs_cat_recommend` values('403','1');");
E_D("replace into `ecs_cat_recommend` values('403','2');");
E_D("replace into `ecs_cat_recommend` values('403','3');");
E_D("replace into `ecs_cat_recommend` values('404','1');");
E_D("replace into `ecs_cat_recommend` values('404','2');");
E_D("replace into `ecs_cat_recommend` values('404','3');");
E_D("replace into `ecs_cat_recommend` values('405','1');");
E_D("replace into `ecs_cat_recommend` values('405','2');");
E_D("replace into `ecs_cat_recommend` values('405','3');");
E_D("replace into `ecs_cat_recommend` values('406','1');");
E_D("replace into `ecs_cat_recommend` values('406','2');");
E_D("replace into `ecs_cat_recommend` values('406','3');");
E_D("replace into `ecs_cat_recommend` values('407','1');");
E_D("replace into `ecs_cat_recommend` values('407','2');");
E_D("replace into `ecs_cat_recommend` values('407','3');");
E_D("replace into `ecs_cat_recommend` values('408','1');");
E_D("replace into `ecs_cat_recommend` values('408','2');");
E_D("replace into `ecs_cat_recommend` values('408','3');");
E_D("replace into `ecs_cat_recommend` values('409','1');");
E_D("replace into `ecs_cat_recommend` values('409','2');");
E_D("replace into `ecs_cat_recommend` values('409','3');");
E_D("replace into `ecs_cat_recommend` values('410','1');");
E_D("replace into `ecs_cat_recommend` values('410','2');");
E_D("replace into `ecs_cat_recommend` values('410','3');");
E_D("replace into `ecs_cat_recommend` values('411','1');");
E_D("replace into `ecs_cat_recommend` values('411','2');");
E_D("replace into `ecs_cat_recommend` values('411','3');");
E_D("replace into `ecs_cat_recommend` values('412','1');");
E_D("replace into `ecs_cat_recommend` values('412','2');");
E_D("replace into `ecs_cat_recommend` values('412','3');");
E_D("replace into `ecs_cat_recommend` values('413','1');");
E_D("replace into `ecs_cat_recommend` values('413','2');");
E_D("replace into `ecs_cat_recommend` values('413','3');");
E_D("replace into `ecs_cat_recommend` values('414','1');");
E_D("replace into `ecs_cat_recommend` values('414','2');");
E_D("replace into `ecs_cat_recommend` values('414','3');");
E_D("replace into `ecs_cat_recommend` values('415','1');");
E_D("replace into `ecs_cat_recommend` values('415','2');");
E_D("replace into `ecs_cat_recommend` values('415','3');");
E_D("replace into `ecs_cat_recommend` values('416','1');");
E_D("replace into `ecs_cat_recommend` values('416','2');");
E_D("replace into `ecs_cat_recommend` values('416','3');");
E_D("replace into `ecs_cat_recommend` values('417','1');");
E_D("replace into `ecs_cat_recommend` values('417','2');");
E_D("replace into `ecs_cat_recommend` values('417','3');");

require("../../inc/footer.php");
?>