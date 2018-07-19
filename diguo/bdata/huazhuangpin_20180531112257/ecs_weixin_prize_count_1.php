<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_prize_count`;");
E_C("CREATE TABLE `ecs_weixin_prize_count` (
  `cid` int(7) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL,
  `wxid` char(28) NOT NULL,
  `num` int(5) NOT NULL,
  `count` int(5) unsigned NOT NULL,
  `lasttime` int(10) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_prize_count` values('1','1','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','1','1','1495032108','1495032108');");
E_D("replace into `ecs_weixin_prize_count` values('2','2','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','2','0','1495352742','1495032125');");
E_D("replace into `ecs_weixin_prize_count` values('3','2','oETdXwzjRqAP23gIAzH9N-mCrQG0','10','10','1495089083','1495089033');");

require("../../inc/footer.php");
?>