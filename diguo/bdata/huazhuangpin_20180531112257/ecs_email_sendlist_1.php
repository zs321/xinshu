<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_email_sendlist`;");
E_C("CREATE TABLE `ecs_email_sendlist` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `template_id` mediumint(8) NOT NULL,
  `email_content` text NOT NULL,
  `error` tinyint(1) NOT NULL DEFAULT '0',
  `pri` tinyint(10) NOT NULL,
  `last_send` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_email_sendlist` values('1','7828697792@qq.com','6','','0','1','1499150239');");
E_D("replace into `ecs_email_sendlist` values('2','7828697792@qq.com','6','','0','1','1499150253');");
E_D("replace into `ecs_email_sendlist` values('3','7828697792@qq.com','6','','0','1','1499150256');");
E_D("replace into `ecs_email_sendlist` values('4','7828697792@qq.com','6','','0','1','1499150446');");
E_D("replace into `ecs_email_sendlist` values('5','7828697792@qq.com','6','','0','1','1499150807');");
E_D("replace into `ecs_email_sendlist` values('6','7828697792@qq.com','6','','0','1','1499150818');");
E_D("replace into `ecs_email_sendlist` values('7','7828697792@qq.com','6','','0','1','1499151003');");
E_D("replace into `ecs_email_sendlist` values('8','7828697792@qq.com','6','','0','1','1499154154');");
E_D("replace into `ecs_email_sendlist` values('9','7828697792@qq.com','6','','0','1','1499155212');");

require("../../inc/footer.php");
?>