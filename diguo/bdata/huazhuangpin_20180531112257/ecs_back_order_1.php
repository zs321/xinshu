<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_order`;");
E_C("CREATE TABLE `ecs_back_order` (
  `back_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `return_time` int(10) unsigned DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  `refund_type` tinyint(1) NOT NULL DEFAULT '0',
  `refund_desc` varchar(255) NOT NULL,
  `refund_money_1` decimal(10,2) NOT NULL DEFAULT '0.00',
  `refund_money_2` decimal(10,2) NOT NULL DEFAULT '0.00',
  `back_reason` varchar(255) NOT NULL DEFAULT '',
  `goods_id` int(10) unsigned NOT NULL,
  `goods_name` varchar(255) NOT NULL DEFAULT '',
  `status_back` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:审核通过,1:收到寄回商品,2:换回商品已寄出,3:完成退货/返修,4:退款(无需退货),5:审核中,6:申请被拒绝,7:管理员取消,8:用户自己取消',
  `status_refund` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:未退款,1:已退款',
  `imgs` text NOT NULL,
  `back_pay` tinyint(1) NOT NULL DEFAULT '0',
  `back_type` varchar(1) NOT NULL DEFAULT '0',
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`back_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_order` values('5','','2017070392755','214',NULL,'1499211028','0',NULL,'245',NULL,'测试','测试测试测试测试','1','6','79','715',NULL,NULL,'',NULL,'13800138000',NULL,'',NULL,'0.00','15.00','0','0','0','0','0','1','','17.64','17.64','','18','江西脐橙','3','1','','2','4','0');");
E_D("replace into `ecs_back_order` values('6','','2017070392755','214',NULL,'1499211406','0',NULL,'245',NULL,'测试','测试测试测试测试','1','6','79','715',NULL,NULL,'',NULL,'13800138000',NULL,'',NULL,'0.00','15.00','0','0','0','0','0','1','','10.73','10.73','','19','福建蜜柚','4','1','','1','4','0');");
E_D("replace into `ecs_back_order` values('4','','2017070338759','213',NULL,'1499210813','0',NULL,'245',NULL,'测试','测试测试测试测试','1','6','79','715',NULL,NULL,'',NULL,'13800138000',NULL,'哈哈哈',NULL,'0.00','15.00','0','0','0','0','0','2','','17.64','17.64','不要了','18','江西脐橙','3','1','/www/demo/ecshop/ecshop0691shengxian/images/upload/image/20170705/20170705072643_28550.jpg','1','4','0');");

require("../../inc/footer.php");
?>