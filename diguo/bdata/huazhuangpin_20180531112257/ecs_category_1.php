<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `is_top_style` int(3) unsigned NOT NULL DEFAULT '0',
  `is_top_show` int(3) unsigned NOT NULL DEFAULT '0',
  `cat_ico` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=490 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('1','护肤用品','','','0','1','','','0','','1','0','1,2,3,4,5,6,7','0','0','1500951734678436020.png');");
E_D("replace into `ecs_category` values('2','彩妆用品','','','0','2','','','0','','1','0','','0','0','1500951746296755272.png');");
E_D("replace into `ecs_category` values('3','美容工具','','','0','3','','','0','','1','0','','0','0','1500951775544930816.png');");
E_D("replace into `ecs_category` values('4','香水香氛','','','0','4','','','0','','1','0','2','0','0','1500951785484044144.png');");
E_D("replace into `ecs_category` values('5','个人护理','','','0','5','','','0','','1','0','','0','0','1500951796031070131.png');");
E_D("replace into `ecs_category` values('489','孕妇食品','','','484','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('488','孕妇护肤','','','484','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('487','婴儿食品','','','484','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('486','婴儿护肤','','','484','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('485','婴儿沐浴','','','484','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('484','孕婴护理','','','0','6','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('483','足部护理','','','415','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('482','足膜','','','415','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('481','护足霜','','','415','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('480','护手霜','','','415','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('479','沐浴套装','','','413','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('478','身体护理套装','','','413','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('477','脱毛膏','','','413','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('476','身体乳','','','413','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('475','沐浴露','','','413','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('474','美体仪','','','416','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('473','美体瘦身','','','416','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('472','口腔护理套装','','','414','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('471','牙线','','','414','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('470','漱口水','','','414','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('469','牙刷','','','414','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('468','牙膏','','','414','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('467','发蜡','','','412','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('466','定型喷雾','','','412','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('465','定型啫喱','','','412','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('464','发膜','','','412','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('463','护发素','','','412','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('461','指甲护理','','','398','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('460','卸甲水','','','398','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('459','指甲油','','','398','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('458','眼唇卸妆','','','397','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('457','卸妆乳','','','397','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('456','卸妆油','','','397','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('455','卸妆水','','','397','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('454','口红','','','396','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('453','唇蜜','','','396','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('452','唇彩','','','396','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('451','眉粉','','','395','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('450','眉笔','','','395','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('449','眼影','','','395','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('448','眼线液','','','395','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('447','眼线笔','','','395','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('446','睫毛膏','','','395','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('445','妆前乳','','','394','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('444','蜜粉散粉','','','394','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('443','腮红','','','394','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('442','粉饼','','','394','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('441','粉底液','','','394','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('440','CC霜','','','394','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('439','BB霜','','','394','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('438','喷雾','','','392','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('437','精华','','','392','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('436','爽肤水','','','392','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('435','乳液','','','392','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('434','面霜','','','392','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('433','眼部护理套装','','','393','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('432','眼部精华','','','393','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('431','眼膜','','','393','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('430','眼霜','','','393','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('429','洁面皂','','','391','50','','','0','','1','0','','0','0','1501301653720450181.png');");
E_D("replace into `ecs_category` values('428','洁面膏','','','391','50','','','0','','1','0','','0','0','1501301637096189956.png');");
E_D("replace into `ecs_category` values('427','洁面乳','','','391','50','','','0','','1','0','','0','0','1501301609548020227.png');");
E_D("replace into `ecs_category` values('426','隔离乳','','','389','50','','','0','','1','0','','0','0','1501301594549430877.png');");
E_D("replace into `ecs_category` values('425','防晒喷雾','','','389','50','','','0','','1','0','','0','0','1501301581984609430.png');");
E_D("replace into `ecs_category` values('424','防晒乳','','','389','50','','','0','','1','0','','0','0','1501301571464740843.png');");
E_D("replace into `ecs_category` values('423','撕拉式面膜','','','388','50','','','0','','1','0','','0','0','1501301555101578249.png');");
E_D("replace into `ecs_category` values('422','泡泡面膜','','','388','50','','','0','','1','0','','0','0','1501301534508503154.png');");
E_D("replace into `ecs_category` values('421','水洗面膜','','','388','50','','','0','','1','0','','0','0','1501301522152657656.png');");
E_D("replace into `ecs_category` values('420','免洗面膜','','','388','50','','','0','','1','0','','0','0','1501295830234618595.png');");
E_D("replace into `ecs_category` values('419','面贴膜','','','388','50','','','0','','1','0','','0','0','1501295763020521858.png');");
E_D("replace into `ecs_category` values('418','面膜粉','','','388','50','','','0','','1','0','','0','0','1501295725777849486.png');");
E_D("replace into `ecs_category` values('417','胸部护理','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('416','美体瘦身','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('415','手足护理','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('414','口腔护理','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('413','身体护理','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('412','头发护理','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('411','走珠香水','','','4','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('410','香氛精油','','','4','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('409','淡香水','','','4','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('408','男士香水','','','4','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('407','女士香水','','','4','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('406','香水套装','','','4','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('405','化妆工具','','','3','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('404','洁面工具','','','3','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('403','美甲工具','','','3','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('402','美发工具','','','3','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('401','美妆工具','','','3','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('462','洗发水','','','412','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('399','彩妆套装','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('398','美甲','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('397','卸妆','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('396','唇妆','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('395','眼妆','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('394','底妆','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('393','眼部护理','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('392','面部护肤','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('388','面膜','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('389','防晒隔离','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('390','护肤套装','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('391','洁面','','','1','50','','','0','','1','0','','0','0','');");

require("../../inc/footer.php");
?>