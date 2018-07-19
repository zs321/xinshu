<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_verifycode`;");
E_C("CREATE TABLE `ecs_verifycode` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `mobile` char(12) NOT NULL,
  `getip` char(15) NOT NULL,
  `verifycode` char(6) NOT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `reguid` mediumint(8) unsigned DEFAULT '0',
  `regdateline` int(10) unsigned DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_verifycode` values('56','13087462806','182.247.58.60','123456','1497202107','230','0','7');");
E_D("replace into `ecs_verifycode` values('55','13087462806','182.247.58.60','475736','1497202068','230','1497202107','2');");
E_D("replace into `ecs_verifycode` values('54','15912737357','116.248.62.57','593666','1497154426','0','0','3');");
E_D("replace into `ecs_verifycode` values('53','15912737357','116.248.62.57','767011','1497154018','0','0','1');");
E_D("replace into `ecs_verifycode` values('52','13769610228','116.248.62.57','577934','1497151689','0','0','3');");
E_D("replace into `ecs_verifycode` values('51','13769610228','116.248.62.57','716680','1497151644','0','0','1');");
E_D("replace into `ecs_verifycode` values('50','15912737357','116.248.62.57','925327','1497147154','208','1497147185','5');");
E_D("replace into `ecs_verifycode` values('57','18962535230','127.0.0.1','685406','1497231748','0','0','1');");
E_D("replace into `ecs_verifycode` values('58','18962535230','127.0.0.1','500369','1497231855','0','0','1');");
E_D("replace into `ecs_verifycode` values('59','18962535230','127.0.0.1','620422','1497232459','0','0','1');");
E_D("replace into `ecs_verifycode` values('60','18962535230','127.0.0.1','105630','1497479796','0','0','1');");
E_D("replace into `ecs_verifycode` values('61','18962535230','127.0.0.1','471337','1497648300','0','0','1');");
E_D("replace into `ecs_verifycode` values('62','18962535230','127.0.0.1','350405','1497648557','0','0','1');");
E_D("replace into `ecs_verifycode` values('63','18962535230','127.0.0.1','769726','1497657766','0','0','1');");
E_D("replace into `ecs_verifycode` values('64','18962535230','127.0.0.1','472601','1497820675','0','0','1');");
E_D("replace into `ecs_verifycode` values('65','15916852053','127.0.0.1','983218','1498792310','0','0','1');");
E_D("replace into `ecs_verifycode` values('66','15916852053','127.0.0.1','989562','1498797074','245','1498797143','2');");

require("../../inc/footer.php");
?>