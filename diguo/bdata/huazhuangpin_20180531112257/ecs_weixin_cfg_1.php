<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_cfg`;");
E_C("CREATE TABLE `ecs_weixin_cfg` (
  `cfg_id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `cfg_name` varchar(64) NOT NULL DEFAULT '',
  `cfg_value` varchar(255) DEFAULT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`cfg_id`),
  UNIQUE KEY `cfg_name` (`cfg_name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_cfg` values('1','murl','mobile/','yes');");
E_D("replace into `ecs_weixin_cfg` values('2','baseurl','http://www.0769web.net/','yes');");
E_D("replace into `ecs_weixin_cfg` values('3','imgpath','local','yes');");
E_D("replace into `ecs_weixin_cfg` values('4','plustj','true','yes');");
E_D("replace into `ecs_weixin_cfg` values('5','userpwd','web','yes');");
E_D("replace into `ecs_weixin_cfg` values('8','oauth','true','yes');");
E_D("replace into `ecs_weixin_cfg` values('7','bd','web','yes');");
E_D("replace into `ecs_weixin_cfg` values('9','goods','false','yes');");
E_D("replace into `ecs_weixin_cfg` values('10','article','article.php?id=','yes');");
E_D("replace into `ecs_weixin_cfg` values('13','weixin_url','','yes');");

require("../../inc/footer.php");
?>