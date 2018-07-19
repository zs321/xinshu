<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  `attr_sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  `hex_color` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('17','102','2','温水卸妆','0','0','','','','');");
E_D("replace into `ecs_goods_attr` values('18','102','4','SPF30以下','0','0','','','','');");
E_D("replace into `ecs_goods_attr` values('24','111','1','25g x 5盒','','0','','','','');");
E_D("replace into `ecs_goods_attr` values('25','110','1','90ml','','0','images/201802/thumb_img/110_thumb_G_1519583162136.jpg','images/201802/goods_img/110_G_1519583162677.jpg','images/201802/source_img/110_G_1519583162367.jpg','');");
E_D("replace into `ecs_goods_attr` values('19','102','3','射频','0','0','','','','');");
E_D("replace into `ecs_goods_attr` values('20','102','5','PA++ 或以下','0','0','','','','');");
E_D("replace into `ecs_goods_attr` values('21','102','6','日本制造','0','0','','','','');");
E_D("replace into `ecs_goods_attr` values('22','102','1','180ml','0','1','images/201707/thumb_img/102_thumb_G_1500955233472.jpg','images/201707/goods_img/102_G_1500955233926.jpg','images/201707/source_img/102_G_1500955233937.jpg','');");
E_D("replace into `ecs_goods_attr` values('23','102','1','360ml','120','2','images/201707/thumb_img/102_thumb_G_1500955241712.jpg','images/201707/goods_img/102_G_1500955241348.jpg','images/201707/source_img/102_G_1500955241721.jpg','');");
E_D("replace into `ecs_goods_attr` values('26','110','1','180ml','100','0','images/201802/thumb_img/110_thumb_G_1519583170660.jpg','images/201802/goods_img/110_G_1519583170587.jpg','images/201802/source_img/110_G_1519583170743.jpg','');");
E_D("replace into `ecs_goods_attr` values('27','110','8','黄色','','0','images/201802/thumb_img/110_thumb_G_1519583181747.jpg','images/201802/goods_img/110_G_1519583181505.jpg','images/201802/source_img/110_G_1519583181684.jpg','');");
E_D("replace into `ecs_goods_attr` values('28','110','8','蓝色','10','0','images/201802/thumb_img/110_thumb_G_1519583191158.jpg','images/201802/goods_img/110_G_1519583191060.jpg','images/201802/source_img/110_G_1519583191134.jpg','');");
E_D("replace into `ecs_goods_attr` values('29','111','8','白','','0','images/201802/thumb_img/111_thumb_G_1519584510980.jpg','images/201802/goods_img/111_G_1519584510218.jpg','images/201802/source_img/111_G_1519584510245.jpg','');");
E_D("replace into `ecs_goods_attr` values('30','111','8','绿','','0','images/201802/thumb_img/111_thumb_G_1519584524698.jpg','images/201802/goods_img/111_G_1519584524391.jpg','images/201802/source_img/111_G_1519584524710.jpg','33FFEB');");
E_D("replace into `ecs_goods_attr` values('31','111','8','蓝','','0','images/201802/thumb_img/111_thumb_G_1519584542118.jpg','images/201802/goods_img/111_G_1519584542674.jpg','images/201802/source_img/111_G_1519584542467.jpg','ED4DFF');");

require("../../inc/footer.php");
?>