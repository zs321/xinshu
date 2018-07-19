<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_almm_module`;");
E_C("CREATE TABLE `ecs_almm_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `localdomain` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ms_appid` varchar(60) DEFAULT NULL,
  `lang` varchar(10) DEFAULT NULL,
  `price_change` varchar(40) DEFAULT NULL,
  `price_change1` varchar(40) DEFAULT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT '',
  `content` text,
  `api_data` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_almm_module` values('1','taobao','http://item.taobao.com,http://item.tmall.com','','1','淘宝','','','*2','+0','./public/upload/business/taobao.gif','','a:5:{s:7:\"app_key\";s:8:\"21343056\";s:10:\"app_secret\";s:32:\"7e001b273247ccae8b8788cf7c5d16c2\";s:6:\"tk_pid\";s:8:\"30144816\";s:11:\"session_key\";s:56:\"445cea9k52495px0084409v8mjbx1583807y651fanv8tb3e9431416n\";s:10:\"expires_in\";i:1382610230;}','a:5:{s:7:\"app_key\";N;s:10:\"app_secret\";N;s:6:\"tk_pid\";N;s:11:\"session_key\";s:56:\"ph25o8t37azp4fv6uf2180s96ao91567h764621yy07bz8s2pl69b40b\";s:10:\"expires_in\";i:1445934510;}','a:5:{s:7:\"app_key\";s:7:\"1019341\";s:10:\"app_secret\";s:12:\"7khBu2BMvpCN\";s:6:\"tk_pid\";N;s:8:\"almmname\";N;s:8:\"almmpass\";s:0:\"\";}');");
E_D("replace into `ecs_almm_module` values('2','paipai','http://auction1.paipai.com','','1','拍拍','','','http://www.paipai.com','','./public/upload/business/paipai.gif','','拍拍应用用于获取拍拍商品、店铺信息，可到 http://pop.paipai.com/ 点击 申请成为合作伙伴 ','a:5:{s:3:\"uin\";s:0:\"\";s:10:\"appoauthid\";s:0:\"\";s:11:\"appoauthkey\";s:0:\"\";s:11:\"accesstoken\";s:0:\"\";s:6:\"userid\";s:0:\"\";}','100');");
E_D("replace into `ecs_almm_module` values('3','yiqifa','','','1','亿起发','','','http://www.yiqifa.com','','','','使用亿起发可通过接口获取当当、凡客、京东等近200个网站的商品数据（注：有少量商品可能无法获取到相关数据），访问 http://www.yiqifa.com/userRegEdit.do?regType=earner 注册成为网站主（注册时在推荐人处填写方维推荐，将有专门的客服人员进行维护），注册成功后进入 http://open.yiqifa.com 创建相关应用。(客服QQ：1153691793)','a:4:{s:7:\"app_key\";s:0:\"\";s:10:\"app_secret\";s:0:\"\";s:3:\"uid\";s:0:\"\";s:7:\"site_id\";s:0:\"\";}','100');");

require("../../inc/footer.php");
?>