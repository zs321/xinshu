<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_account`;");
E_C("CREATE TABLE `ecs_user_account` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_user` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `paid_time` int(10) NOT NULL DEFAULT '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL DEFAULT '0',
  `payment` varchar(90) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_account` values('1','245','admin','-10.00','1499140264','1499140385','111','真实姓名:【黎铭生】开户行:【115645545455】银行账户:【农业银行】手机:【13800138000】留言:【111】','1','','1');");
E_D("replace into `ecs_user_account` values('2','245','','-10.00','1499231197','0','','真实姓名:【黎铭生】开户行:【支付宝】银行账户:【15916852053】手机:【15916852053】留言:【尽快】','1','','0');");
E_D("replace into `ecs_user_account` values('3','245','','-10.00','1499231771','0','','真实姓名:【黎铭生】开户行:【微信】银行账户:【dglimingsheng】手机:【15916852053】留言:【哈哈哈】','1','','0');");

require("../../inc/footer.php");
?>