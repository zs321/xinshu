<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_products`;");
E_C("CREATE TABLE `ecs_products` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  `is_check` int(1) unsigned NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_products` values('15','111','24|29','sp000111g_p62360','500','1');");
E_D("replace into `ecs_products` values('8','102','23','sp000102g_p49292','500','1');");
E_D("replace into `ecs_products` values('7','102','22','sp000102g_p38600','499','1');");
E_D("replace into `ecs_products` values('11','110','25|27','sp000110g_p74017','500','1');");
E_D("replace into `ecs_products` values('12','110','25|28','sp000110g_p18173','500','1');");
E_D("replace into `ecs_products` values('13','110','26|27','sp000110g_p71504','500','1');");
E_D("replace into `ecs_products` values('14','110','26|28','sp000110g_p99206','500','1');");
E_D("replace into `ecs_products` values('16','111','24|30','sp000111g_p59498','500','1');");
E_D("replace into `ecs_products` values('17','111','24|31','sp000111g_p61229','500','1');");

require("../../inc/footer.php");
?>