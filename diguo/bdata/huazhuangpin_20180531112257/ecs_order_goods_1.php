<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `is_back` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','210','15','特级库尔勒香梨（大果）','MDZ000015','0','1','19.04','10.00','','0','1','pre_sale','0','0','','0');");
E_D("replace into `ecs_order_goods` values('2','211','20','国产黑布林','MDZ000020','0','2','17.95','14.96','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('3','211','19','福建蜜柚','MDZ000019','0','1','12.87','10.73','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('4','211','18','江西脐橙','MDZ000018','0','3','21.16','17.64','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('5','212','20','国产黑布林','MDZ000020','0','1','17.95','14.96','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('6','212','19','福建蜜柚','MDZ000019','0','1','12.87','10.73','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('7','213','19','福建蜜柚','MDZ000019','0','1','12.87','10.73','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('8','213','18','江西脐橙','MDZ000018','0','1','21.16','17.64','','0','1','','0','0','','1');");
E_D("replace into `ecs_order_goods` values('9','214','19','福建蜜柚','MDZ000019','0','1','12.87','10.73','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('10','214','18','江西脐橙','MDZ000018','0','1','21.16','17.64','','0','1','','0','0','','1');");
E_D("replace into `ecs_order_goods` values('11','215','20','国产黑布林','MDZ000020','0','1','17.95','14.96','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('12','216','14','烟台红富士5斤礼盒装','MDZ000014','0','1','47.76','10.00','','0','1','pre_sale','0','0','','0');");
E_D("replace into `ecs_order_goods` values('13','217','14','烟台红富士5斤礼盒装','MDZ000014','0','1','47.76','10.00','','0','1','pre_sale','0','0','','0');");
E_D("replace into `ecs_order_goods` values('14','218','102','新鲜猪扒肉','MDZ000102','6','2','108.60','93.00','部位:小腿肉[5] \n规格:2000G[58] \n','0','1','','0','0','4,7','0');");
E_D("replace into `ecs_order_goods` values('15','219','85','劲牌中国劲酒礼盒500ML*2','MDZ000085','0','1','89.90','98.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('16','219','1','新鲜槟榔芋头','MDZ000000','0','3','15.00','12.50','','3','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('17','219','102','新鲜猪扒肉','MDZ000102','4','1','50.60','35.00','部位:小腿肉[5] \n规格:500G \n','1','1','','0','0','4,5','0');");
E_D("replace into `ecs_order_goods` values('18','220','102','新鲜猪扒肉','MDZ000102','1','1','45.60','30.00','部位:大腿肉 \n规格:500G \n','1','1','','0','0','3,5','0');");
E_D("replace into `ecs_order_goods` values('19','220','102','新鲜猪扒肉','MDZ000102','2','1','73.60','58.00','部位:大腿肉 \n规格:1000G[28] \n','1','1','','0','0','3,6','0');");
E_D("replace into `ecs_order_goods` values('20','221','102','BQ05 透净均衡卸妆液（升级版 水油分层） 全脸卸妆','MDZ000102','7','1','223.20','168.00','规格:180ml \n','1','1','','0','0','22','0');");
E_D("replace into `ecs_order_goods` values('21','221','111','BC01 净颜清爽蚕丝面膜(二代) 25g*5/盒','MDZ000111','9','2','117.60','98.00','规格:25g x 5盒 \n','2','1','','0','0','24','0');");
E_D("replace into `ecs_order_goods` values('22','221','110','AK01 焕活舒缓敷眼水 90ml 补水 舒缓 焕活双眼','MDZ000110','10','3','117.60','88.00','规格:90ml \n','3','1','','0','0','25','0');");
E_D("replace into `ecs_order_goods` values('23','221','109','男士控油爽肤洁面乳','MDZ000109','0','1','23.88','19.90','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('24','221','108','PBA 保湿精华水','MDZ000108','0','1','47.87','39.90','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('25','221','107','PBA 红石榴精华水','MDZ000107','0','1','47.87','39.90','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('26','221','101','韩伊橄榄Olive悦颜粉底 遮瑕膏 打底保湿 乳液霜','MDZ000101','0','3','81.60','68.00','','3','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('27','221','100','梦希蓝 红BB霜隔离裸妆40g 遮瑕打底','MDZ000100','0','3','81.60','68.00','','3','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('28','221','99','LANCOME兰蔻 薄纱粉底液SPF16 持久保湿遮瑕裸妆','MDZ000099','0','3','420.00','350.00','','3','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('29','221','98','玫琳凯CC霜 玫琳凯保湿隔离修颜霜25ml 防晒隔离霜','MDZ000098','0','3','156.00','130.00','','3','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('30','221','97','逆时针 美肌焕肤能量隔离霜40g','MDZ000097','0','3','177.60','148.00','','3','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('31','221','91','热卖小铺多功能化妆刷 牙刷型专业底妆刷 美妆工具','MDZ000091','0','1','54.00','45.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('32','221','90','泊泉雅彩妆化妆刷套装7件套腮红刷眼影刷眉粉刷初学者化妆者必备','MDZ000090','0','2','57.59','48.00','','2','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('33','221','89','惠普不伤发卷发棒 美发卷发神器 发廊家用卷发器 干湿两用','MDZ000089','0','2','57.59','48.00','','2','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('34','221','88','泊泉雅 化妆棉100片盒装 优质纯棉化妆工具','MDZ000088','0','1','33.60','28.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('35','221','87','CZ0901 立体持妆自动眉笔（棕咖色） 0.22g','MDZ000087','0','1','33.60','28.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('36','221','81','奕香 桂花百合白茶玫瑰女士香水45ml','MDZ000081','0','2','66.00','55.00','','2','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('37','221','80','菲水 深睡香水10ml 灵芝助眠喷雾','MDZ000080','0','2','238.79','199.00','','2','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('38','221','79','AnnaSui安娜苏紫境魔钥/永恒之爱/幻境绮缘 女士香水 30ml/50ml/75ml','MDZ000079','0','2','238.79','199.00','','2','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('39','221','77','Versace范思哲 蓝色牛仔男士香水75ml蓝可乐','MDZ000077','0','2','225.60','188.00','','2','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('40','221','76','Dior迪奥 淡香EDT 真我女士香水50ml/100ml','MDZ000076','0','2','705.60','588.00','','2','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('41','221','71','淘米水沐浴露 滋润嫩滑 爽滑补水400ml','MDZ000071','0','2','42.00','34.80','','2','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('42','221','62','莱蔻摩洛哥免洗护发精油60g 干枯毛躁卷发适用','MDZ000062','0','2','46.80','39.00','','2','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('43','221','66','泊泉雅 香体乳250ml 身体乳补水保湿控油','MDZ000066','0','1','54.00','45.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('44','222','102','BQ05 透净均衡卸妆液（升级版 水油分层） 全脸卸妆','MDZ000102','7','1','223.20','168.00','规格:180ml \n','0','1','','0','0','22','0');");
E_D("replace into `ecs_order_goods` values('45','222','71','淘米水沐浴露 滋润嫩滑 爽滑补水400ml','MDZ000071','0','2','42.00','34.80','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('46','223','62','莱蔻摩洛哥免洗护发精油60g 干枯毛躁卷发适用','MDZ000062','0','2','46.80','39.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('47','223','63','泊泉雅 香型香水沐浴露 300ml 滋润清爽','MDZ000063','0','1','58.80','49.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('48','224','108','PBA 保湿精华水','MDZ000108','0','1','47.87','39.90','','0','1','','0','0','','0');");

require("../../inc/footer.php");
?>