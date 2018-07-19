<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('1','109','images/201707/goods_img/109_P_1501039689290.jpg','','images/201707/thumb_img/109_thumb_P_1501039689274.jpg','images/201707/source_img/109_P_1501039689105.jpg');");
E_D("replace into `ecs_goods_gallery` values('2','108','images/201707/goods_img/108_P_1501039757250.jpg','','images/201707/thumb_img/108_thumb_P_1501039757788.jpg','images/201707/source_img/108_P_1501039757478.jpg');");
E_D("replace into `ecs_goods_gallery` values('3','111','images/201707/goods_img/111_P_1501039824551.jpg','','images/201707/thumb_img/111_thumb_P_1501039824018.jpg','images/201707/source_img/111_P_1501039824614.jpg');");
E_D("replace into `ecs_goods_gallery` values('4','110','images/201707/goods_img/110_P_1501039865927.jpg','','images/201707/thumb_img/110_thumb_P_1501039865985.jpg','images/201707/source_img/110_P_1501039865443.jpg');");
E_D("replace into `ecs_goods_gallery` values('5','102','images/201707/goods_img/102_P_1501039957731.jpg','','images/201707/thumb_img/102_thumb_P_1501039957804.jpg','images/201707/source_img/102_P_1501039957394.jpg');");
E_D("replace into `ecs_goods_gallery` values('6','102','images/201707/goods_img/102_P_1501039957391.jpg','','images/201707/thumb_img/102_thumb_P_1501039957511.jpg','images/201707/source_img/102_P_1501039957434.jpg');");
E_D("replace into `ecs_goods_gallery` values('7','102','images/201707/goods_img/102_P_1501039958744.jpg','','images/201707/thumb_img/102_thumb_P_1501039958082.jpg','images/201707/source_img/102_P_1501039958583.jpg');");
E_D("replace into `ecs_goods_gallery` values('8','102','images/201707/goods_img/102_P_1501039958705.jpg','','images/201707/thumb_img/102_thumb_P_1501039958770.jpg','images/201707/source_img/102_P_1501039958506.jpg');");
E_D("replace into `ecs_goods_gallery` values('9','102','images/201707/goods_img/102_P_1501039958057.jpg','','images/201707/thumb_img/102_thumb_P_1501039958111.jpg','images/201707/source_img/102_P_1501039958078.jpg');");
E_D("replace into `ecs_goods_gallery` values('10','107','images/201707/goods_img/107_P_1501040013817.jpg','','images/201707/thumb_img/107_thumb_P_1501040013782.jpg','images/201707/source_img/107_P_1501040013107.jpg');");
E_D("replace into `ecs_goods_gallery` values('11','106','images/201707/goods_img/106_P_1501040100314.jpg','','images/201707/thumb_img/106_thumb_P_1501040100216.jpg','images/201707/source_img/106_P_1501040100393.jpg');");
E_D("replace into `ecs_goods_gallery` values('12','105','images/201707/goods_img/105_P_1501040158493.jpg','','images/201707/thumb_img/105_thumb_P_1501040158469.jpg','images/201707/source_img/105_P_1501040158165.jpg');");
E_D("replace into `ecs_goods_gallery` values('13','104','images/201707/goods_img/104_P_1501040255338.png','','images/201707/thumb_img/104_thumb_P_1501040255276.jpg','images/201707/source_img/104_P_1501040255950.png');");
E_D("replace into `ecs_goods_gallery` values('14','103','images/201707/goods_img/103_P_1501040372299.jpg','','images/201707/thumb_img/103_thumb_P_1501040372195.jpg','images/201707/source_img/103_P_1501040372320.jpg');");
E_D("replace into `ecs_goods_gallery` values('15','101','images/201707/goods_img/101_P_1501040633829.jpg','','images/201707/thumb_img/101_thumb_P_1501040633141.jpg','images/201707/source_img/101_P_1501040633542.jpg');");
E_D("replace into `ecs_goods_gallery` values('16','100','images/201707/goods_img/100_P_1501041127660.jpg','','images/201707/thumb_img/100_thumb_P_1501041127468.jpg','images/201707/source_img/100_P_1501041127185.jpg');");
E_D("replace into `ecs_goods_gallery` values('17','99','images/201707/goods_img/99_P_1501041243542.jpg','','images/201707/thumb_img/99_thumb_P_1501041243514.jpg','images/201707/source_img/99_P_1501041243806.jpg');");
E_D("replace into `ecs_goods_gallery` values('18','99','images/201707/goods_img/99_P_1501041243808.jpg','','images/201707/thumb_img/99_thumb_P_1501041243642.jpg','images/201707/source_img/99_P_1501041243242.jpg');");
E_D("replace into `ecs_goods_gallery` values('19','98','images/201707/goods_img/98_P_1501041350504.jpg','','images/201707/thumb_img/98_thumb_P_1501041350717.jpg','images/201707/source_img/98_P_1501041350386.jpg');");
E_D("replace into `ecs_goods_gallery` values('20','97','images/201707/goods_img/97_P_1501041423955.jpg','','images/201707/thumb_img/97_thumb_P_1501041423278.jpg','images/201707/source_img/97_P_1501041423217.jpg');");
E_D("replace into `ecs_goods_gallery` values('21','96','images/201707/goods_img/96_P_1501041507970.png','','images/201707/thumb_img/96_thumb_P_1501041507272.jpg','images/201707/source_img/96_P_1501041507020.png');");
E_D("replace into `ecs_goods_gallery` values('22','95','images/201707/goods_img/95_P_1501041584043.jpg','','images/201707/thumb_img/95_thumb_P_1501041584603.jpg','images/201707/source_img/95_P_1501041584148.jpg');");
E_D("replace into `ecs_goods_gallery` values('23','94','images/201707/goods_img/94_P_1501041682761.jpg','','images/201707/thumb_img/94_thumb_P_1501041682455.jpg','images/201707/source_img/94_P_1501041682996.jpg');");
E_D("replace into `ecs_goods_gallery` values('24','93','images/201707/goods_img/93_P_1501041778220.jpg','','images/201707/thumb_img/93_thumb_P_1501041778133.jpg','images/201707/source_img/93_P_1501041778211.jpg');");
E_D("replace into `ecs_goods_gallery` values('25','92','images/201707/goods_img/92_P_1501041850524.jpg','','images/201707/thumb_img/92_thumb_P_1501041850423.jpg','images/201707/source_img/92_P_1501041850499.jpg');");
E_D("replace into `ecs_goods_gallery` values('26','91','images/201707/goods_img/91_P_1501042072996.jpg','','images/201707/thumb_img/91_thumb_P_1501042072621.jpg','images/201707/source_img/91_P_1501042072082.jpg');");
E_D("replace into `ecs_goods_gallery` values('27','90','images/201707/goods_img/90_P_1501042151032.jpg','','images/201707/thumb_img/90_thumb_P_1501042151261.jpg','images/201707/source_img/90_P_1501042151640.jpg');");
E_D("replace into `ecs_goods_gallery` values('28','89','images/201707/goods_img/89_P_1501042215820.jpg','','images/201707/thumb_img/89_thumb_P_1501042215390.jpg','images/201707/source_img/89_P_1501042215169.jpg');");
E_D("replace into `ecs_goods_gallery` values('29','88','images/201707/goods_img/88_P_1501042304098.jpg','','images/201707/thumb_img/88_thumb_P_1501042304533.jpg','images/201707/source_img/88_P_1501042304198.jpg');");
E_D("replace into `ecs_goods_gallery` values('30','87','images/201707/goods_img/87_P_1501042442222.jpg','','images/201707/thumb_img/87_thumb_P_1501042442530.jpg','images/201707/source_img/87_P_1501042442883.jpg');");
E_D("replace into `ecs_goods_gallery` values('31','86','images/201707/goods_img/86_P_1501042542100.jpg','','images/201707/thumb_img/86_thumb_P_1501042542407.jpg','images/201707/source_img/86_P_1501042542417.jpg');");
E_D("replace into `ecs_goods_gallery` values('32','85','images/201707/goods_img/85_P_1501042643327.png','','images/201707/thumb_img/85_thumb_P_1501042643542.jpg','images/201707/source_img/85_P_1501042643841.png');");
E_D("replace into `ecs_goods_gallery` values('33','84','images/201707/goods_img/84_P_1501042714765.jpg','','images/201707/thumb_img/84_thumb_P_1501042714723.jpg','images/201707/source_img/84_P_1501042714901.jpg');");
E_D("replace into `ecs_goods_gallery` values('34','83','images/201707/goods_img/83_P_1501042779787.jpg','','images/201707/thumb_img/83_thumb_P_1501042779751.jpg','images/201707/source_img/83_P_1501042779147.jpg');");
E_D("replace into `ecs_goods_gallery` values('35','82','images/201707/goods_img/82_P_1501042957797.jpg','','images/201707/thumb_img/82_thumb_P_1501042957035.jpg','images/201707/source_img/82_P_1501042957406.jpg');");
E_D("replace into `ecs_goods_gallery` values('36','81','images/201707/goods_img/81_P_1501043048595.png','','images/201707/thumb_img/81_thumb_P_1501043048544.jpg','images/201707/source_img/81_P_1501043048414.png');");
E_D("replace into `ecs_goods_gallery` values('37','80','images/201707/goods_img/80_P_1501043131029.jpg','','images/201707/thumb_img/80_thumb_P_1501043131778.jpg','images/201707/source_img/80_P_1501043131426.jpg');");
E_D("replace into `ecs_goods_gallery` values('38','79','images/201707/goods_img/79_P_1501043300234.jpg','','images/201707/thumb_img/79_thumb_P_1501043300506.jpg','images/201707/source_img/79_P_1501043300818.jpg');");
E_D("replace into `ecs_goods_gallery` values('39','78','images/201707/goods_img/78_P_1501043450901.png','','images/201707/thumb_img/78_thumb_P_1501043450189.jpg','images/201707/source_img/78_P_1501043450864.png');");
E_D("replace into `ecs_goods_gallery` values('40','77','images/201707/goods_img/77_P_1501044273248.png','','images/201707/thumb_img/77_thumb_P_1501044273371.jpg','images/201707/source_img/77_P_1501044273567.png');");
E_D("replace into `ecs_goods_gallery` values('41','77','images/201707/goods_img/77_P_1501044938599.jpg','','images/201707/thumb_img/77_thumb_P_1501044938363.jpg','images/201707/source_img/77_P_1501044938892.jpg');");
E_D("replace into `ecs_goods_gallery` values('42','76','images/201707/goods_img/76_P_1501044995339.jpg','','images/201707/thumb_img/76_thumb_P_1501044995686.jpg','images/201707/source_img/76_P_1501044995053.jpg');");
E_D("replace into `ecs_goods_gallery` values('43','75','images/201707/goods_img/75_P_1501045059860.jpg','','images/201707/thumb_img/75_thumb_P_1501045059526.jpg','images/201707/source_img/75_P_1501045059596.jpg');");
E_D("replace into `ecs_goods_gallery` values('44','74','images/201707/goods_img/74_P_1501045197247.jpg','','images/201707/thumb_img/74_thumb_P_1501045197625.jpg','images/201707/source_img/74_P_1501045197775.jpg');");
E_D("replace into `ecs_goods_gallery` values('45','73','images/201707/goods_img/73_P_1501045272998.jpg','','images/201707/thumb_img/73_thumb_P_1501045273027.jpg','images/201707/source_img/73_P_1501045272156.jpg');");
E_D("replace into `ecs_goods_gallery` values('46','72','images/201707/goods_img/72_P_1501045342518.jpg','','images/201707/thumb_img/72_thumb_P_1501045342056.jpg','images/201707/source_img/72_P_1501045342858.jpg');");
E_D("replace into `ecs_goods_gallery` values('47','71','images/201707/goods_img/71_P_1501045494944.jpg','','images/201707/thumb_img/71_thumb_P_1501045494224.jpg','images/201707/source_img/71_P_1501045494502.jpg');");
E_D("replace into `ecs_goods_gallery` values('48','70','images/201707/goods_img/70_P_1501045585675.jpg','','images/201707/thumb_img/70_thumb_P_1501045585629.jpg','images/201707/source_img/70_P_1501045585668.jpg');");
E_D("replace into `ecs_goods_gallery` values('49','70','images/201707/goods_img/70_P_1501045585538.jpg','','images/201707/thumb_img/70_thumb_P_1501045585391.jpg','images/201707/source_img/70_P_1501045585023.jpg');");
E_D("replace into `ecs_goods_gallery` values('50','69','images/201707/goods_img/69_P_1501045668189.jpg','','images/201707/thumb_img/69_thumb_P_1501045668583.jpg','images/201707/source_img/69_P_1501045668005.jpg');");
E_D("replace into `ecs_goods_gallery` values('51','68','images/201707/goods_img/68_P_1501045726217.jpg','','images/201707/thumb_img/68_thumb_P_1501045726826.jpg','images/201707/source_img/68_P_1501045726223.jpg');");
E_D("replace into `ecs_goods_gallery` values('52','67','images/201707/goods_img/67_P_1501045783834.jpg','','images/201707/thumb_img/67_thumb_P_1501045783664.jpg','images/201707/source_img/67_P_1501045783024.jpg');");
E_D("replace into `ecs_goods_gallery` values('53','66','images/201707/goods_img/66_P_1501045859173.jpg','','images/201707/thumb_img/66_thumb_P_1501045859213.jpg','images/201707/source_img/66_P_1501045859686.jpg');");
E_D("replace into `ecs_goods_gallery` values('54','65','images/201707/goods_img/65_P_1501045918047.jpg','','images/201707/thumb_img/65_thumb_P_1501045918105.jpg','images/201707/source_img/65_P_1501045918758.jpg');");
E_D("replace into `ecs_goods_gallery` values('55','64','images/201707/goods_img/64_P_1501045976360.jpg','','images/201707/thumb_img/64_thumb_P_1501045976622.jpg','images/201707/source_img/64_P_1501045976131.jpg');");
E_D("replace into `ecs_goods_gallery` values('56','63','images/201707/goods_img/63_P_1501046029152.jpg','','images/201707/thumb_img/63_thumb_P_1501046029103.jpg','images/201707/source_img/63_P_1501046029625.jpg');");
E_D("replace into `ecs_goods_gallery` values('57','62','images/201707/goods_img/62_P_1501046084482.jpg','','images/201707/thumb_img/62_thumb_P_1501046084680.jpg','images/201707/source_img/62_P_1501046084865.jpg');");
E_D("replace into `ecs_goods_gallery` values('75','113','','','','');");
E_D("replace into `ecs_goods_gallery` values('70','111','images/201802/goods_img/111_P_1519648457319.jpg','','images/201802/thumb_img/111_thumb_P_1519648457741.jpg','images/201802/source_img/111_P_1519648457181.jpg');");
E_D("replace into `ecs_goods_gallery` values('71','111','images/201802/goods_img/111_P_1519648457254.jpg','','images/201802/thumb_img/111_thumb_P_1519648457699.jpg','images/201802/source_img/111_P_1519648457052.jpg');");
E_D("replace into `ecs_goods_gallery` values('72','111','images/201802/goods_img/111_P_1519648458242.jpg','','images/201802/thumb_img/111_thumb_P_1519648458246.jpg','images/201802/source_img/111_P_1519648458760.jpg');");
E_D("replace into `ecs_goods_gallery` values('73','111','images/201802/goods_img/111_P_1519648458501.jpg','','images/201802/thumb_img/111_thumb_P_1519648458745.jpg','images/201802/source_img/111_P_1519648458606.jpg');");

require("../../inc/footer.php");
?>