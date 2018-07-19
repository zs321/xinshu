<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shipping`;");
E_C("CREATE TABLE `ecs_shipping` (
  `shipping_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_code` varchar(20) NOT NULL DEFAULT '',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `shipping_desc` varchar(255) NOT NULL DEFAULT '',
  `insure` varchar(10) NOT NULL DEFAULT '0',
  `support_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_print` text NOT NULL,
  `print_bg` varchar(255) DEFAULT NULL,
  `config_lable` text,
  `print_model` tinyint(1) DEFAULT '0',
  `shipping_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shipping_id`),
  KEY `shipping_code` (`shipping_code`,`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shipping` values('1','cac','上门取货','买家自己到商家指定地点取货','0','1','1','','','','2','0');");
E_D("replace into `ecs_shipping` values('2','fpd','运费到付','所购商品到达即付运费','0','0','1','','','','2','0');");
E_D("replace into `ecs_shipping` values('4','yto','圆通速递','上海圆通物流（速递）有限公司经过多年的网络快速发展，在中国速递行业中一直处于领先地位。为了能更好的发展国际快件市场，加快与国际市场的接轨，强化圆通的整体实力，圆通已在东南亚、欧美、中东、北美洲、非洲等许多城市运作国际快件业务','0','1','1','','/images/receipt/dly_yto.jpg','t_shop_province,网店-省份,132,24,279,105,b_shop_province||,||t_shop_name,网店-名称,268,29,142,133,b_shop_name||,||t_shop_address,网店-地址,346,40,67,199,b_shop_address||,||t_shop_city,网店-城市,64,35,223,163,b_shop_city||,||t_shop_district,网店-区/县,56,35,314,164,b_shop_district||,||t_pigeon,√-对号,21,21,143,263,b_pigeon||,||t_customer_name,收件人-姓名,89,25,488,121,b_customer_name||,||t_customer_tel,收件人-电话,136,21,656,110,b_customer_tel||,||t_customer_mobel,收件人-手机,137,21,655,132,b_customer_mobel||,||t_customer_province,收件人-省份,115,24,480,173,b_customer_province||,||t_customer_city,收件人-城市,60,27,609,172,b_customer_city||,||t_customer_district,收件人-区/县,58,28,696,173,b_customer_district||,||t_customer_post,收件人-邮编,93,21,701,240,b_customer_post||,||','2','0');");
E_D("replace into `ecs_shipping` values('5','ems','EMS 国内邮政特快专递','EMS 国内邮政特快专递描述内容','0','0','1','','/images/receipt/dly_ems.jpg','t_shop_name,网店-名称,236,32,182,161,b_shop_name||,||t_shop_tel,网店-联系电话,127,21,295,135,b_shop_tel||,||t_shop_address,网店-地址,296,68,124,190,b_shop_address||,||t_pigeon,√-对号,21,21,192,278,b_pigeon||,||t_customer_name,收件人-姓名,107,23,494,136,b_customer_name||,||t_customer_tel,收件人-电话,155,21,639,124,b_customer_tel||,||t_customer_mobel,收件人-手机,159,21,639,147,b_customer_mobel||,||t_customer_post,收件人-邮编,88,21,680,258,b_customer_post||,||t_year,年-当日日期,37,21,534,379,b_year||,||t_months,月-当日日期,29,21,592,379,b_months||,||t_day,日-当日日期,27,21,642,380,b_day||,||t_order_best_time,送货时间-订单,104,39,688,359,b_order_best_time||,||t_order_postscript,备注-订单,305,34,485,402,b_order_postscript||,||t_customer_address,收件人-详细地址,289,48,503,190,b_customer_address||,||','2','0');");
E_D("replace into `ecs_shipping` values('6','sto_express','申通快递','江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元','0','0','1','','/images/receipt/dly_sto_express.jpg','t_shop_address,网店-地址,235,48,131,152,b_shop_address||,||t_shop_name,网店-名称,237,26,131,200,b_shop_name||,||t_shop_tel,网店-联系电话,96,36,144,257,b_shop_tel||,||t_customer_post,收件人-邮编,86,23,578,268,b_customer_post||,||t_customer_address,收件人-详细地址,232,49,434,149,b_customer_address||,||t_customer_name,收件人-姓名,151,27,449,231,b_customer_name||,||t_customer_tel,收件人-电话,90,32,452,261,b_customer_tel||,||','2','0');");
E_D("replace into `ecs_shipping` values('8','ttkd','天天快递','天天快递的描述内容。','0','0','1','','/images/receipt/dly_ttkd.jpg','t_shop_address,网店-地址,235,48,131,152,b_shop_address||,||t_shop_name,网店-名称,237,26,131,200,b_shop_name||,||t_shop_tel,网店-联系电话,96,36,144,257,b_shop_tel||,||t_customer_post,收件人-邮编,86,23,578,268,b_customer_post||,||t_customer_address,收件人-详细地址,232,49,434,149,b_customer_address||,||t_customer_name,收件人-姓名,151,27,449,231,b_customer_name||,||t_customer_tel,收件人-电话,90,32,452,261,b_customer_tel||,||','2','0');");
E_D("replace into `ecs_shipping` values('12','flat','砚山县内快递','固定运费的配送方式内容','0','1','1','','','','2','0');");
E_D("replace into `ecs_shipping` values('13','sf_express','顺丰速运','江、浙、沪地区首重15元/KG，续重2元/KG，其余城市首重20元/KG','0','0','1','','/images/receipt/dly_sf_express.jpg','t_shop_name,网店-名称,150,29,112,137,b_shop_name||,||t_shop_address,网店-地址,268,55,105,168,b_shop_address||,||t_shop_tel,网店-联系电话,55,25,177,224,b_shop_tel||,||t_customer_name,收件人-姓名,78,23,299,265,b_customer_name||,||t_customer_address,收件人-详细地址,271,94,104,293,b_customer_address||,||','2','0');");
E_D("replace into `ecs_shipping` values('11','zto','中通速递','中通快递的相关说明。保价费按照申报价值的2％交纳，但是，保价费不低于100元，保价金额不得高于10000元，保价金额超过10000元的，超过的部分无效','2%','0','1','','/images/receipt/dly_zto.jpg','t_shop_province,网店-省份,116,30,296.55,117.2,b_shop_province||,||t_customer_province,收件人-省份,114,32,649.95,114.3,b_customer_province||,||t_shop_address,网店-地址,260,57,151.75,152.05,b_shop_address||,||t_shop_name,网店-名称,259,28,152.65,212.4,b_shop_name||,||t_shop_tel,网店-联系电话,131,37,138.65,246.5,b_shop_tel||,||t_customer_post,收件人-邮编,104,39,659.2,242.2,b_customer_post||,||t_customer_tel,收件人-电话,158,22,461.9,241.9,b_customer_tel||,||t_customer_mobel,收件人-手机,159,21,463.25,265.4,b_customer_mobel||,||t_customer_name,收件人-姓名,109,32,498.9,115.8,b_customer_name||,||t_customer_address,收件人-详细地址,264,58,499.6,150.1,b_customer_address||,||t_months,月-当日日期,35,23,135.85,392.8,b_months||,||t_day,日-当日日期,24,23,180.1,392.8,b_day||,||','2','0');");

require("../../inc/footer.php");
?>