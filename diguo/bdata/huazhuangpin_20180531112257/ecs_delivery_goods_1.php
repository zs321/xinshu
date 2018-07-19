<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('66','62','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('67','63','70','0','','黑羽乌鸡','','MDZ000070','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('65','61','69','0','','测试','','MDZ000069','1','','0','5','');");
E_D("replace into `ecs_delivery_goods` values('64','60','69','0','','测试','','MDZ000069','1','','0','3','');");
E_D("replace into `ecs_delivery_goods` values('63','59','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('61','57','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('62','58','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('59','55','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('60','56','70','0','','黑羽乌鸡','','MDZ000070','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('58','54','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('57','53','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('56','52','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('55','51','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('54','50','64','0','','【坤七】山楂粉','','MDZ000064','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('53','49','69','0','','测试','','MDZ000069','1','','0','3','');");
E_D("replace into `ecs_delivery_goods` values('52','48','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('51','47','64','0','','【坤七】山楂粉','','MDZ000064','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('50','46','69','0','','测试','','MDZ000069','1','','0','2','');");
E_D("replace into `ecs_delivery_goods` values('49','45','69','0','','测试','','MDZ000069','1','','0','10','');");
E_D("replace into `ecs_delivery_goods` values('48','44','69','0','','测试','','MDZ000069','1','','0','5','');");
E_D("replace into `ecs_delivery_goods` values('47','43','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('46','42','69','0','','测试','','MDZ000069','1','','0','5','');");
E_D("replace into `ecs_delivery_goods` values('45','41','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('44','40','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('43','39','69','0','','测试','','MDZ000069','1','','0','3','');");
E_D("replace into `ecs_delivery_goods` values('42','38','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('41','37','69','0','','测试','','MDZ000069','1','','0','3','');");
E_D("replace into `ecs_delivery_goods` values('40','36','69','0','','测试','','MDZ000069','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('68','64','85','0','','劲牌中国劲酒礼盒500ML*2','','MDZ000085','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('69','64','1','0','','新鲜槟榔芋头','','MDZ000000','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('70','64','102','4','sp000102g_p84240','新鲜猪扒肉','','MDZ000102','1',NULL,'0','1','部位:小腿肉[5] \n规格:500G \n');");
E_D("replace into `ecs_delivery_goods` values('71','65','102','1','sp000102g_p46724','新鲜猪扒肉','','MDZ000102','1',NULL,'0','1','部位:大腿肉 \n规格:500G \n');");
E_D("replace into `ecs_delivery_goods` values('72','65','102','2','sp000102g_p82663','新鲜猪扒肉','','MDZ000102','1',NULL,'0','1','部位:大腿肉 \n规格:1000G[28] \n');");
E_D("replace into `ecs_delivery_goods` values('73','66','102','7','sp000102g_p38600','BQ05 透净均衡卸妆液（升级版 水油分层） 全脸卸妆','Olay','MDZ000102','1',NULL,'0','1','规格:180ml \n');");
E_D("replace into `ecs_delivery_goods` values('74','66','111','9','sp000111g_p74231','BC01 净颜清爽蚕丝面膜(二代) 25g*5/盒','Olay','MDZ000111','1',NULL,'0','2','规格:25g x 5盒 \n');");
E_D("replace into `ecs_delivery_goods` values('75','66','110','10','sp000110g_p87508','AK01 焕活舒缓敷眼水 90ml 补水 舒缓 焕活双眼','薇姿','MDZ000110','1',NULL,'0','3','规格:90ml \n');");
E_D("replace into `ecs_delivery_goods` values('76','66','109','0','','男士控油爽肤洁面乳','菲斯小铺','MDZ000109','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('77','66','108','0','','PBA 保湿精华水','','MDZ000108','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('78','66','107','0','','PBA 红石榴精华水','维芙雅','MDZ000107','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('79','66','101','0','','韩伊橄榄Olive悦颜粉底 遮瑕膏 打底保湿 乳液霜','','MDZ000101','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('80','66','100','0','','梦希蓝 红BB霜隔离裸妆40g 遮瑕打底','自然堂','MDZ000100','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('81','66','99','0','','LANCOME兰蔻 薄纱粉底液SPF16 持久保湿遮瑕裸妆','','MDZ000099','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('82','66','98','0','','玫琳凯CC霜 玫琳凯保湿隔离修颜霜25ml 防晒隔离霜','玫琳凯','MDZ000098','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('83','66','97','0','','逆时针 美肌焕肤能量隔离霜40g','泉润','MDZ000097','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('84','66','91','0','','热卖小铺多功能化妆刷 牙刷型专业底妆刷 美妆工具','谜尚','MDZ000091','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('85','66','90','0','','泊泉雅彩妆化妆刷套装7件套腮红刷眼影刷眉粉刷初学者化妆者必备','兰蔻','MDZ000090','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('86','66','89','0','','惠普不伤发卷发棒 美发卷发神器 发廊家用卷发器 干湿两用','兰芝','MDZ000089','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('87','66','88','0','','泊泉雅 化妆棉100片盒装 优质纯棉化妆工具','韩后','MDZ000088','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('88','66','87','0','','CZ0901 立体持妆自动眉笔（棕咖色） 0.22g','丹姿','MDZ000087','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('89','66','81','0','','奕香 桂花百合白茶玫瑰女士香水45ml','泉润','MDZ000081','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('90','66','80','0','','菲水 深睡香水10ml 灵芝助眠喷雾','韩后','MDZ000080','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('91','66','79','0','','AnnaSui安娜苏紫境魔钥/永恒之爱/幻境绮缘 女士香水 30ml/50ml/75ml','美即','MDZ000079','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('92','66','77','0','','Versace范思哲 蓝色牛仔男士香水75ml蓝可乐','','MDZ000077','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('93','66','76','0','','Dior迪奥 淡香EDT 真我女士香水50ml/100ml','','MDZ000076','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('94','66','71','0','','淘米水沐浴露 滋润嫩滑 爽滑补水400ml','丹姿','MDZ000071','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('95','66','62','0','','莱蔻摩洛哥免洗护发精油60g 干枯毛躁卷发适用','','MDZ000062','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('96','66','66','0','','泊泉雅 香体乳250ml 身体乳补水保湿控油','','MDZ000066','1',NULL,'0','1','');");

require("../../inc/footer.php");
?>