<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_bonus_type`;");
E_C("CREATE TABLE `ecs_bonus_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) NOT NULL DEFAULT '',
  `type_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `send_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `min_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `max_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `send_start_date` int(11) NOT NULL DEFAULT '0',
  `send_end_date` int(11) NOT NULL DEFAULT '0',
  `use_start_date` int(11) NOT NULL DEFAULT '0',
  `use_end_date` int(11) NOT NULL DEFAULT '0',
  `min_goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `user_bonus_max` int(10) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_bonus_type` values('2','新用户注册红包','5.00','5','0.00','0.00','1499068800','1501747200','1498809600','1944633600','100.00','0');");
E_D("replace into `ecs_bonus_type` values('3','指定用户红包','20.00','0','0.00','0.00','1499068800','1501747200','1498809600','1851235200','200.00','0');");
E_D("replace into `ecs_bonus_type` values('4','商品红包','10.00','1','0.00','0.00','1498809600','1911974400','1499068800','2101276800','100.00','0');");
E_D("replace into `ecs_bonus_type` values('5','订单红包','20.00','2','200.00','0.00','1498809600','1911974400','1499068800','2070259200','200.00','0');");
E_D("replace into `ecs_bonus_type` values('6','线下红包','20.00','3','0.00','0.00','1499068800','1501747200','1498809600','2069827200','200.00','0');");
E_D("replace into `ecs_bonus_type` values('7','10元线上优惠券','10.00','4','0.00','0.00','1498809600','1914307200','1498896000','2101276800','100.00','2');");
E_D("replace into `ecs_bonus_type` values('8','20元线上优惠券','20.00','4','0.00','0.00','1498809600','1911974400','1498896000','1974873600','200.00','1');");
E_D("replace into `ecs_bonus_type` values('9','50元线上优惠券','50.00','4','0.00','0.00','1498809600','1911974400','1498896000','2069740800','500.00','1');");
E_D("replace into `ecs_bonus_type` values('10','100元线上优惠券','100.00','4','0.00','0.00','1498809600','1944460800','1498809600','2069827200','1000.00','1');");

require("../../inc/footer.php");
?>