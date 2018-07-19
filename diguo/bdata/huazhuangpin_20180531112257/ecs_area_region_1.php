<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_area_region`;");
E_C("CREATE TABLE `ecs_area_region` (
  `shipping_area_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shipping_area_id`,`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_area_region` values('1','1');");
E_D("replace into `ecs_area_region` values('2','1');");
E_D("replace into `ecs_area_region` values('4','1');");
E_D("replace into `ecs_area_region` values('5','1');");
E_D("replace into `ecs_area_region` values('7','3199');");
E_D("replace into `ecs_area_region` values('8','3');");
E_D("replace into `ecs_area_region` values('8','4');");
E_D("replace into `ecs_area_region` values('8','6');");
E_D("replace into `ecs_area_region` values('8','7');");
E_D("replace into `ecs_area_region` values('8','8');");
E_D("replace into `ecs_area_region` values('8','10');");
E_D("replace into `ecs_area_region` values('8','11');");
E_D("replace into `ecs_area_region` values('8','13');");
E_D("replace into `ecs_area_region` values('8','14');");
E_D("replace into `ecs_area_region` values('8','16');");
E_D("replace into `ecs_area_region` values('8','17');");
E_D("replace into `ecs_area_region` values('8','22');");
E_D("replace into `ecs_area_region` values('8','23');");
E_D("replace into `ecs_area_region` values('8','24');");
E_D("replace into `ecs_area_region` values('8','25');");
E_D("replace into `ecs_area_region` values('8','26');");
E_D("replace into `ecs_area_region` values('8','27');");
E_D("replace into `ecs_area_region` values('8','30');");
E_D("replace into `ecs_area_region` values('8','31');");
E_D("replace into `ecs_area_region` values('8','32');");
E_D("replace into `ecs_area_region` values('8','52');");

require("../../inc/footer.php");
?>