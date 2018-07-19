<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad_position`;");
E_C("CREATE TABLE `ecs_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(60) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad_position` values('1','首页1F分类商品左侧广告','360','460','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('4','首页2F分类商品左侧广告','360','460','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('7','首页3F分类商品左侧广告','360','460','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('10','首页4F分类商品左侧广告','360','460','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('17','首页5F分类商品左侧广告','360','460','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('34','全网优选广告','294','150','','{foreach from=\$ads item=ad}\r\n<li>{\$ad}</li>\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('20','微信二维码','512','512','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('27','首页1F分类商品底部广告','1200','120','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('28','首页2F分类商品底部广告','1200','120','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('29','首页3F分类商品底部广告','1200','120','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('30','首页4F分类商品底部广告','1200','120','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('31','首页5F分类商品底部广告','1200','120','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('33','优惠券页面广告','1200','200','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('35','首页头部','960','100','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");

require("../../inc/footer.php");
?>