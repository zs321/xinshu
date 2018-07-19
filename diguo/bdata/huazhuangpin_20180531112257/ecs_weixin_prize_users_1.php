<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_prize_users`;");
E_C("CREATE TABLE `ecs_weixin_prize_users` (
  `id` int(7) unsigned NOT NULL AUTO_INCREMENT,
  `wxid` char(28) NOT NULL DEFAULT '',
  `fun` varchar(10) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `prize_id` int(5) DEFAULT NULL,
  `prize_name` varchar(64) DEFAULT NULL,
  `prize_sn` varchar(35) NOT NULL,
  `register` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `yn` varchar(3) NOT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prize_id` (`prize_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_prize_users` values('1','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','egg','^O^','1','很遗憾，您没有中奖','d040760dfdfafcce57332d80a571d071','0','1','no','1495032108');");
E_D("replace into `ecs_weixin_prize_users` values('2','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','dzp','^O^','2','ipad','5a91ab43079d4f181370ef1d6cf391ef','0','1','no','1495032125');");
E_D("replace into `ecs_weixin_prize_users` values('3','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','(^_-)','2','ipad','c46c353f5a39e6681f88ae126c69a85b','0','1','no','1495089033');");
E_D("replace into `ecs_weixin_prize_users` values('4','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','(^_-)','2','ipad','ccb462080f06917f8e0c1d6dc3fd9b9f','0','1','no','1495089039');");
E_D("replace into `ecs_weixin_prize_users` values('5','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','(^_-)','2','ipad','a419d4837e7f5bd9aca27cff43911e6b','0','1','no','1495089048');");
E_D("replace into `ecs_weixin_prize_users` values('6','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','(^_-)','2','ipad','42629a349a36399edc1a7b57fb00340d','0','1','no','1495089054');");
E_D("replace into `ecs_weixin_prize_users` values('7','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','(^_-)','2','ipad','f271c7c87f8b36c6e3830e4ad807479b','0','1','no','1495089058');");
E_D("replace into `ecs_weixin_prize_users` values('8','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','(^_-)','2','ipad','eb9f39905b08a9d5a365224ca3b03cdd','0','1','no','1495089064');");
E_D("replace into `ecs_weixin_prize_users` values('9','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','(^_-)','2','ipad','fe24efa9a673b1417278fc43bb7efb63','0','1','no','1495089069');");
E_D("replace into `ecs_weixin_prize_users` values('10','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','(^_-)','2','ipad','48d94ffc1f60f47c75d73a697cc4a5fc','0','1','no','1495089073');");
E_D("replace into `ecs_weixin_prize_users` values('11','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','(^_-)','2','ipad','72b6ae21e79debdfc663997a7195a4f0','0','1','no','1495089078');");
E_D("replace into `ecs_weixin_prize_users` values('12','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','(^_-)','2','ipad','ceb4185473fe960b56a7b00792a62ecf','0','1','no','1495089083');");
E_D("replace into `ecs_weixin_prize_users` values('13','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','dzp','^O^','2','ipad','ea56f165ef0877bdc42ee0af3177c886','0','1','no','1495352742');");

require("../../inc/footer.php");
?>