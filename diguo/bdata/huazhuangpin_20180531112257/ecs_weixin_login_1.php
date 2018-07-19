<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_login`;");
E_C("CREATE TABLE `ecs_weixin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createtime` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `value` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `value` (`value`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_login` values('1','1456452117','0','gQED8ToAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0gwem0xQURsclBMVlpFVEdGR0xmAAIE/LHPVgMEWAIAAA==','171.214.151.132','521176357');");
E_D("replace into `ecs_weixin_login` values('2','1456452436','0','gQF57zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1lVekEybnZsbnZMbmJ6cmNNbUxmAAIEPLPPVgMEWAIAAA==','101.226.33.224','524366417');");
E_D("replace into `ecs_weixin_login` values('3','1456452785','0','gQGR8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzdVeVl3S1Rsd3ZLN0pyYkNhbUxmAAIEmbTPVgMEWAIAAA==','171.214.151.132','527859525');");
E_D("replace into `ecs_weixin_login` values('4','1456453424','0','gQH17zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1FVeVFXX1hsdmZMRVVCb3VZbUxmAAIEGLfPVgMEWAIAAA==','171.214.151.132','534245031');");

require("../../inc/footer.php");
?>