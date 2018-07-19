<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_info`;");
E_C("CREATE TABLE `ecs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `postscript` varchar(255) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) NOT NULL DEFAULT '0',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `pay_id` tinyint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `how_oos` varchar(120) NOT NULL DEFAULT '',
  `how_surplus` varchar(120) NOT NULL DEFAULT '',
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_message` varchar(255) NOT NULL DEFAULT '',
  `inv_payee` varchar(120) NOT NULL DEFAULT '',
  `inv_content` varchar(120) NOT NULL DEFAULT '',
  `goods_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `integral_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pack_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(255) NOT NULL DEFAULT '',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `extension_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `to_buyer` varchar(255) NOT NULL DEFAULT '',
  `pay_note` varchar(255) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `discount` decimal(10,2) NOT NULL,
  `fencheng` varchar(255) DEFAULT NULL,
  `shipping_time_end` int(10) DEFAULT '0',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=225 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_info` values('209','2017061232016','0','3','0','0','','0','0','0','0','','','','','','','','','0','','0','','','','','','','','','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.00','0','管理员添加','1497213355','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','','0');");
E_D("replace into `ecs_order_info` values('210','2017070306960','245','1','0','2','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','2','余额支付','等待所有商品备齐后再发','','','','','','','10.00','15.00','0.00','0.00','0.00','0.00','0.00','10.00','0','0.00','0.00','0.00','0','pc站','1499053528','1499053528','1499053528','0','0','0','0','','pre_sale','3','','','0','','0.00','0','0','0.00','10','0');");
E_D("replace into `ecs_order_info` values('211','2017070356693','245','1','0','2','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','2','余额支付','等待所有商品备齐后再发','','','','','东莞青蜂网络信息技术有限公司','购物清单','93.57','15.00','0.00','0.00','0.00','0.00','0.00','111.38','0','0.00','0.00','0.00','0','pc站','1499057564','1499057564','1499057564','0','0','0','0','','','0','','','0','增值税专用发票(一般纳税人)','2.81','0','0','0.00','93.57','0');");
E_D("replace into `ecs_order_info` values('212','2017070327464','245','1','0','2','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','2','余额支付','等待所有商品备齐后再发','','','','','','','25.69','15.00','0.00','0.00','0.00','0.00','0.00','40.69','0','0.00','0.00','0.00','0','pc站','1499057635','1499057635','1499057635','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','25.69','0');");
E_D("replace into `ecs_order_info` values('213','2017070338759','245','2','0','2','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','2','余额支付','等待所有商品备齐后再发','','','','','','','28.37','15.00','0.00','0.00','0.00','0.00','0.00','43.37','0','0.00','0.00','0.00','0','pc站','1499057716','1499057716','1499057716','0','0','0','0','','','0','用户对订单内的部分或全部商品申请退款并取消订单','','0','','0.00','0','0','0.00','28.37','0');");
E_D("replace into `ecs_order_info` values('214','2017070392755','245','2','0','2','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','2','余额支付','等待所有商品备齐后再发','','','','','','','28.37','15.00','0.00','0.00','0.00','0.00','0.00','43.37','0','0.00','0.00','0.00','0','pc站','1499057770','1499057770','1499057770','0','0','0','0','','','0','用户对订单内的部分或全部商品申请退款并取消订单','','0','','0.00','0','0','0.00','28.37','0');");
E_D("replace into `ecs_order_info` values('215','2017070317007','245','0','0','0','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','1','支付宝','等待所有商品备齐后再发','','','','','','','14.96','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','29.96','0','pc站','1499057843','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','14.96','0');");
E_D("replace into `ecs_order_info` values('216','2017070404808','245','1','0','2','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','8','余额支付','等待所有商品备齐后再发','','','','','','','10.00','15.00','0.00','0.00','0.00','0.00','0.00','10.00','0','0.00','0.00','0.00','0','wap站','1499140019','1499140019','1499140019','0','0','0','0','','pre_sale','1','','','0','','0.00','0','0','0.00','0','0');");
E_D("replace into `ecs_order_info` values('217','2017070436451','245','0','0','0','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','4','支付宝','等待所有商品备齐后再发','','','','','','','10.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','10.00','0','wap站','1499140030','0','0','0','0','0','0','','pre_sale','1','','','0','','0.00','0','0','0.00','0','0');");
E_D("replace into `ecs_order_info` values('218','2017070491296','245','0','0','0','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','4','支付宝','等待所有商品备齐后再发','','','','','','','186.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','186.00','0','wap站','1499141191','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0');");
E_D("replace into `ecs_order_info` values('219','2017070516483','245','5','1','2','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','2','余额支付','等待所有商品备齐后再发','','','','','','','170.50','0.00','0.00','0.00','0.00','0.00','0.00','170.50','0','0.00','0.00','0.00','0','pc站','1499213926','1499213926','1499213926','1499213951','0','0','0','1111111111111','','0','','','0','','0.00','0','0','0.00','170.5','0');");
E_D("replace into `ecs_order_info` values('220','2017070518460','245','5','1','2','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','2','余额支付','等待所有商品备齐后再发','','','','','','','88.00','15.00','0.00','0.00','0.00','0.00','0.00','103.00','0','0.00','0.00','0.00','0','pc站','1499213995','1499213995','1499213995','1499214203','0','0','0','33333333','','0','','','0','','0.00','0','0','0.00','88','0');");
E_D("replace into `ecs_order_info` values('221','2017072894616','245','5','1','2','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','2','余额支付','等待所有商品备齐后再发','','','','','','','5963.30','0.00','0.00','0.00','0.00','0.00','0.00','5963.30','0','0.00','0.00','0.00','0','pc站','1501207556','1501207556','1501207556','1501207757','0','0','0','236364912462','','0','','','0','','0.00','0','0','0.00','5963.3','0');");
E_D("replace into `ecs_order_info` values('222','2017072974978','245','0','0','0','测试','1','6','79','715','测试测试测试测试','','','13800138000','7828697792@qq.com','','','','13','顺丰速运','4','支付宝','等待所有商品备齐后再发','','','','','','','237.60','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','237.60','0','wap站','1501297543','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0');");
E_D("replace into `ecs_order_info` values('223','2018022606756','253','0','0','0','453453','1','4','56','550','453453','','','13256487596','','','','','13','顺丰速运','6','微信扫码支付','等待所有商品备齐后再发','','礼盒包装','','','','购物清单','127.00','0.00','0.00','0.00','10.00','0.00','0.00','0.00','0','0.00','0.00','138.91','0','pc站','1519588985','0','0','0','1','0','0','','','0','','','0','增值税普通发票(小规模纳税人)','1.91','0','0','0.00','127','0');");
E_D("replace into `ecs_order_info` values('224','2018050931876','0','0','0','0','大家来咯了131111111','1','3','37','411','可考虑考虑','','','13111111111','','','','','1','上门取货','4','支付宝','等待所有商品备齐后再发','','','','','','','39.90','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','39.90','0','wap站','1525831017','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0');");

require("../../inc/footer.php");
?>