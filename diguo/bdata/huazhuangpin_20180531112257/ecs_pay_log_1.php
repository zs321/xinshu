<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','161','22.44','0','1','0');");
E_D("replace into `ecs_pay_log` values('2','162','15.96','0','0','0');");
E_D("replace into `ecs_pay_log` values('3','163','17.16','0','0','0');");
E_D("replace into `ecs_pay_log` values('4','164','40.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('5','165','2.40','0','0','0');");
E_D("replace into `ecs_pay_log` values('6','166','1.20','0','0','0');");
E_D("replace into `ecs_pay_log` values('7','167','46.20','0','0','0');");
E_D("replace into `ecs_pay_log` values('8','168','2.46','0','1','0');");
E_D("replace into `ecs_pay_log` values('9','168','1.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('10','169','1.36','0','0','0');");
E_D("replace into `ecs_pay_log` values('11','170','1.36','0','0','0');");
E_D("replace into `ecs_pay_log` values('12','171','0.86','0','1','0');");
E_D("replace into `ecs_pay_log` values('13','172','7.20','0','0','0');");
E_D("replace into `ecs_pay_log` values('14','173','137.55','0','0','0');");
E_D("replace into `ecs_pay_log` values('15','174','2.00','0','1','0');");
E_D("replace into `ecs_pay_log` values('16','175','2.20','1','0','14');");
E_D("replace into `ecs_pay_log` values('17','176','17.20','0','0','0');");
E_D("replace into `ecs_pay_log` values('18','177','2.20','0','1','0');");
E_D("replace into `ecs_pay_log` values('19','178','1.40','0','1','0');");
E_D("replace into `ecs_pay_log` values('20','179','2.20','0','1','0');");
E_D("replace into `ecs_pay_log` values('21','180','154.83','0','1','0');");
E_D("replace into `ecs_pay_log` values('22','181','1.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('23','182','1.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('24','182','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('25','183','1.52','0','0','0');");
E_D("replace into `ecs_pay_log` values('26','184','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('27','185','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('28','186','40.49','0','0','0');");
E_D("replace into `ecs_pay_log` values('64','193','1.00','0','1','0');");
E_D("replace into `ecs_pay_log` values('63','192','0.50','0','1','0');");
E_D("replace into `ecs_pay_log` values('31','189','0.50','0','1','0');");
E_D("replace into `ecs_pay_log` values('32','190','5.50','0','1','0');");
E_D("replace into `ecs_pay_log` values('33','191','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('34','192','0.50','0','0','0');");
E_D("replace into `ecs_pay_log` values('35','193','0.50','0','1','0');");
E_D("replace into `ecs_pay_log` values('36','194','0.50','0','1','0');");
E_D("replace into `ecs_pay_log` values('37','195','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('38','196','65.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('39','168','2.20','0','0','0');");
E_D("replace into `ecs_pay_log` values('40','169','1.50','0','0','0');");
E_D("replace into `ecs_pay_log` values('41','170','1.50','0','0','0');");
E_D("replace into `ecs_pay_log` values('42','171','308.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('43','172','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('44','173','0.10','0','0','0');");
E_D("replace into `ecs_pay_log` values('45','174','0.24','0','1','0');");
E_D("replace into `ecs_pay_log` values('46','175','0.10','0','0','0');");
E_D("replace into `ecs_pay_log` values('47','176','1.28','0','0','0');");
E_D("replace into `ecs_pay_log` values('48','177','0.08','0','1','0');");
E_D("replace into `ecs_pay_log` values('49','178','0.10','0','0','0');");
E_D("replace into `ecs_pay_log` values('50','179','0.10','0','0','0');");
E_D("replace into `ecs_pay_log` values('51','180','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('52','181','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('53','182','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('54','183','0.20','0','0','0');");
E_D("replace into `ecs_pay_log` values('55','184','0.10','0','0','0');");
E_D("replace into `ecs_pay_log` values('56','185','0.30','0','1','0');");
E_D("replace into `ecs_pay_log` values('57','186','0.10','0','0','0');");
E_D("replace into `ecs_pay_log` values('62','191','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('61','190','0.10','0','0','0');");
E_D("replace into `ecs_pay_log` values('60','189','0.20','0','0','0');");
E_D("replace into `ecs_pay_log` values('65','194','1.50','0','0','0');");
E_D("replace into `ecs_pay_log` values('66','195','0.10','0','0','0');");
E_D("replace into `ecs_pay_log` values('67','196','1.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('68','197','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('69','198','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('70','199','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('71','200','39.30','0','1','0');");
E_D("replace into `ecs_pay_log` values('72','201','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('73','202','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('74','203','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('75','204','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('76','205','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('77','206','0.80','0','1','0');");
E_D("replace into `ecs_pay_log` values('78','207','39.30','0','1','0');");
E_D("replace into `ecs_pay_log` values('79','208','0.10','0','1','0');");
E_D("replace into `ecs_pay_log` values('80','204','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('81','209','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('82','210','148.50','0','1','0');");
E_D("replace into `ecs_pay_log` values('83','211','0.80','0','1','0');");
E_D("replace into `ecs_pay_log` values('84','212','183.00','0','1','0');");
E_D("replace into `ecs_pay_log` values('85','210','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('86','211','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('87','212','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('88','213','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('89','214','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('90','215','29.96','0','0','0');");
E_D("replace into `ecs_pay_log` values('91','216','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('92','217','10.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('93','218','186.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('94','219','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('95','220','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('96','221','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('97','222','237.60','0','0','0');");
E_D("replace into `ecs_pay_log` values('98','223','138.91','0','0','0');");
E_D("replace into `ecs_pay_log` values('99','224','39.90','0','0','0');");

require("../../inc/footer.php");
?>