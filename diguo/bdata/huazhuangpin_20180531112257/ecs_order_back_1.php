<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_back`;");
E_C("CREATE TABLE `ecs_order_back` (
  `back_sn` varchar(255) DEFAULT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  `order_sn` varchar(255) DEFAULT NULL,
  `user_id` mediumint(8) DEFAULT NULL,
  `case` varchar(20) DEFAULT NULL,
  `shipping_name` varchar(125) DEFAULT NULL,
  `goods` varchar(500) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL,
  `liyou` varchar(255) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `add_time` varchar(255) DEFAULT NULL,
  `receve` varchar(500) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_back` values('159866892992','456456456','2015012939927','21','退货','12345648613','-YH00023845552111-测试供应商商品1--100.00-1件<br/>','100.00','123','456','2015-01-31 17:29:52','123','4');");
E_D("replace into `ecs_order_back` values('177187620498','456154514','2015013180475','21','退货','顺丰','-YH00023845552111-测试供应商商品1--100.00-3件<br/>','300.00','不满意','','2015-01-31 18:03:18','','4');");
E_D("replace into `ecs_order_back` values('185443027645','1111','2015020600085','17','退货','111','-SJ000261-YH测试商品--1.00-1件<br/>','1.00','111','111','2015-02-06 19:09:05','223223','4');");
E_D("replace into `ecs_order_back` values('42940538250','sad','2015020808615','17','退货','我','-SJ000261-YH测试商品--1.00-1件<br/>','1.00','11111','退款5毛','2015-02-08 23:39:10','','4');");
E_D("replace into `ecs_order_back` values('95370897010','QWEQ','2015021377157','17','退货','EQW','-SJ000261-YH测试商品--1.00-1件<br/>','1.00','1111','1111','2015-02-13 10:21:50','','4');");
E_D("replace into `ecs_order_back` values('98390906108','11','2015021413261','17','退货','11','-SJ000261-YH测试商品--1.00-1件<br/>','1.00','11','111','2015-02-15 11:21:48','','3');");
E_D("replace into `ecs_order_back` values('31925464313','22','2015021316128','17','退货','212','-SJ000261-YH测试商品--1.00-1件<br/>','1.00','111','','2015-02-15 11:28:33','','4');");
E_D("replace into `ecs_order_back` values('174726224480','123456789','2015013110998','21','退货','顺丰','-YH1222222-测试商品1323134--1000.00-1件<br/>','1000.00','123','','2015-03-03 16:26:20','','3');");
E_D("replace into `ecs_order_back` values('118752600932','123456','2015030369208','21','退货','顺丰','-YH00023845552111-测试供应商商品1--100.00-1件<br/>','100.00','111','','2015-03-03 16:28:52','111','4');");
E_D("replace into `ecs_order_back` values('176806274224','Q','2015030416746','17','退货','Q','-YH00023845552111-测试供应商商品1--100.00-1件<br/>','100.00','Q','WQ','2015-03-04 20:02:04','','3');");
E_D("replace into `ecs_order_back` values('11617744955','123456','2015012614756','21','退货','12345648613','-YH000241-111--0.00-1件<br/>','80.00','123','','2015-05-28 10:05:21','','3');");
E_D("replace into `ecs_order_back` values('109084835916','1111','2015021557560','17','退货','11','-SJ000261-YH测试商品-材质:11 \r\n规格:11 \r\n-1.00-1件<br/>-SJ000261-YH测试商品--1.00-1件<br/>','2.00','1111111','1111111111111','2015-04-01 15:25:16','','4');");
E_D("replace into `ecs_order_back` values('98256912120','123456','2015040372387','21','退货','123456','-SJ000273-黄CU五金冲压件--1.30-1件<br/>','1.30','123456','test','2015-05-14 20:38:40','ddd','4');");
E_D("replace into `ecs_order_back` values('162979438826','333','2015042804366','17','退货','3333','-SJ000598-智能温湿度记录仪，短信报警温湿度记录仪，声光报警温度记录仪【英华网】--4000.00-1件<br/>','900.00','333','','2015-06-02 15:34:22','','4');");
E_D("replace into `ecs_order_back` values('203777400264','11','2015062335827','17','退货','11','-SJ000599-【英华网建材网购】超大液晶智能温控器--100.00-1件<br/>','12.00','11','11','2015-06-23 22:26:20','','3');");

require("../../inc/footer.php");
?>