<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_account_log`;");
E_C("CREATE TABLE `ecs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=149 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_log` values('8','5','99999999.99','0.00','0','0','1448230508','111','2');");
E_D("replace into `ecs_account_log` values('9','5','-0.01','0.00','0','0','1448231164','支付订单 2015112391096','99');");
E_D("replace into `ecs_account_log` values('10','5','0.00','0.00','0','0','1448232942','订单 2015112356122 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('11','5','-0.01','0.00','0','0','1448234136','支付订单 2015112318877','99');");
E_D("replace into `ecs_account_log` values('12','5','0.00','0.00','0','0','1448242320','订单 2015112369856 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('13','5','0.00','0.00','0','0','1448247519','订单 2015112314657 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('14','5','0.00','0.00','0','0','1448250063','订单 2015112366532 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('15','5','-111111.00','0.00','0','0','1448408235','111','2');");
E_D("replace into `ecs_account_log` values('16','5','-1111111.00','0.00','0','0','1448408273','111','2');");
E_D("replace into `ecs_account_log` values('17','5','-99999999.99','0.00','0','0','1448408290','1111','2');");
E_D("replace into `ecs_account_log` values('18','5','11111111.00','0.00','0','0','1448408322','1111','2');");
E_D("replace into `ecs_account_log` values('19','5','99999999.99','0.00','0','0','1448408338','111','2');");
E_D("replace into `ecs_account_log` values('20','5','-99999999.00','0.00','0','0','1448408358','111','2');");
E_D("replace into `ecs_account_log` values('21','5','899.01','0.00','0','0','1448408391','111','2');");
E_D("replace into `ecs_account_log` values('22','5','0.00','0.00','0','0','1448409431','订单 2015112344712 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('23','5','0.00','0.00','0','0','1448409980','订单 2015112561257 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('76','0','0.00','0.00','5','5','1496968950','注册送积分','99');");
E_D("replace into `ecs_account_log` values('112','238','0.00','0.00','5','5','1497482215','注册送积分','99');");
E_D("replace into `ecs_account_log` values('119','245','0.00','0.00','5','5','1498797142','注册送积分','99');");
E_D("replace into `ecs_account_log` values('120','245','1000.00','0.00','0','0','1499053492','1000','2');");
E_D("replace into `ecs_account_log` values('121','245','-10.00','0.00','0','0','1499053528','支付订单 2017070306960','99');");
E_D("replace into `ecs_account_log` values('122','245','-111.38','0.00','0','0','1499057564','支付订单 2017070356693','99');");
E_D("replace into `ecs_account_log` values('123','245','-40.69','0.00','0','0','1499057635','支付订单 2017070327464','99');");
E_D("replace into `ecs_account_log` values('124','245','-43.37','0.00','0','0','1499057716','支付订单 2017070338759','99');");
E_D("replace into `ecs_account_log` values('125','245','-43.37','0.00','0','0','1499057770','支付订单 2017070392755','99');");
E_D("replace into `ecs_account_log` values('129','249','0.00','0.00','5','5','1499120738','注册送积分','99');");
E_D("replace into `ecs_account_log` values('131','251','0.00','0.00','5','5','1499128261','注册送积分','99');");
E_D("replace into `ecs_account_log` values('132','252','0.00','0.00','5','5','1499128292','注册送积分','99');");
E_D("replace into `ecs_account_log` values('133','245','-10.00','0.00','0','0','1499140019','支付订单 2017070404808','99');");
E_D("replace into `ecs_account_log` values('134','245','-10.00','0.00','0','0','1499140385','提现','1');");
E_D("replace into `ecs_account_log` values('135','245','17.64','0.00','0','0','1499211057','订单214退款','99');");
E_D("replace into `ecs_account_log` values('136','245','10.73','0.00','0','0','1499211628','订单2017070392755退款','99');");
E_D("replace into `ecs_account_log` values('137','245','-170.50','0.00','0','0','1499213926','支付订单 2017070516483','99');");
E_D("replace into `ecs_account_log` values('138','245','0.00','0.00','170','170','1499213951','订单 2017070516483 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('139','245','-103.00','0.00','0','0','1499213995','支付订单 2017070518460','99');");
E_D("replace into `ecs_account_log` values('140','245','0.00','0.00','88','88','1499214203','订单 2017070518460 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('141','245','100.00','0.00','100','100','1499386977','绑定会卡beebee000002充值等级积分:100,消费积分100','99');");
E_D("replace into `ecs_account_log` values('142','245','10000.00','0.00','0','0','1501207533','1','2');");
E_D("replace into `ecs_account_log` values('143','245','-5963.30','0.00','0','0','1501207556','支付订单 2017072894616','99');");
E_D("replace into `ecs_account_log` values('144','245','0.00','0.00','5963','5963','1501207757','订单 2017072894616 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('145','0','0.00','0.00','5','5','1519588782','注册送积分','99');");
E_D("replace into `ecs_account_log` values('146','254','0.00','0.00','5','5','1519841292','注册送积分','99');");
E_D("replace into `ecs_account_log` values('147','255','0.00','0.00','5','5','1527310436','注册送积分','99');");
E_D("replace into `ecs_account_log` values('148','256','0.00','0.00','5','5','1527458113','注册送积分','99');");

require("../../inc/footer.php");
?>