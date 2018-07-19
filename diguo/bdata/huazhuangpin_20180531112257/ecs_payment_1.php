<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_payment`;");
E_C("CREATE TABLE `ecs_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pay_code` varchar(20) NOT NULL DEFAULT '',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `pay_fee` varchar(10) NOT NULL DEFAULT '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_payment` values('1','alipay','支付宝','0','支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br/>支付宝收款接口：在线即可开通。<br/><a href=\"https://b.alipay.com/signing/productSet.htm?navKey=all\" target=\"_blank\"><font color=\"red\">立即在线申请</font></a>','0','a:3:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:15:\"pay@0769web.net\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}}','1','0','1');");
E_D("replace into `ecs_payment` values('2','balance','余额支付','0','使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。','0','a:0:{}','1','0','1');");
E_D("replace into `ecs_payment` values('3','bank','银行汇款/转帐','0','银行名称\r\n收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。\r\n注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。','0','a:0:{}','0','0','0');");
E_D("replace into `ecs_payment` values('4','cod','货到付款','0','开通城市：×××\r\n货到付款区域：×××','0','a:0:{}','0','1','0');");
E_D("replace into `ecs_payment` values('5','wx_new_qrcode','微信扫描支付2','0','本支付适用于新版本手机微信扫二维码支付','0','a:5:{i:0;a:3:{s:4:\"name\";s:5:\"appid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:18:\"wx32d963f0f9cc0a9e\";}i:1;a:3:{s:4:\"name\";s:5:\"mchid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:10:\"1243315202\";}i:2;a:3:{s:4:\"name\";s:3:\"key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"URcakeVIPcake400yWeiEZeqojUYNI80\";}i:3;a:3:{s:4:\"name\";s:9:\"appsecret\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"93da9f1f5fccf1045ecc79358557f7c9\";}i:4;a:3:{s:4:\"name\";s:4:\"logs\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:1:\"0\";}}','0','0','1');");
E_D("replace into `ecs_payment` values('6','wxnative','微信扫码支付','0','微信扫码支付，是基于PC端提供的微信支付服务功能。用户通过扫描二维码调起微信支付模块完成支付。','0','a:4:{i:0;a:3:{s:4:\"name\";s:14:\"wxnative_appid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:1;a:3:{s:4:\"name\";s:18:\"wxnative_appsecret\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:2;a:3:{s:4:\"name\";s:14:\"wxnative_mchid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:3;a:3:{s:4:\"name\";s:12:\"wxnative_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}}','1','0','1');");
E_D("replace into `ecs_payment` values('7','unionpay','银联在线','0','中国银联','0','a:11:{i:0;a:3:{s:4:\"name\";s:12:\"unionpay_evn\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:1:\"0\";}i:1;a:3:{s:4:\"name\";s:19:\"unionpay_account_pm\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:15:\"777290058117684\";}i:2;a:3:{s:4:\"name\";s:25:\"unionpay_sign_cert_pwd_pm\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:6:\"000000\";}i:3;a:3:{s:4:\"name\";s:26:\"unionpay_sign_cert_path_pm\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:26:\"PM_700000000000001_acp.pfx\";}i:4;a:3:{s:4:\"name\";s:28:\"unionpay_verify_cert_path_pm\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:19:\"verify_sign_acp.cer\";}i:5;a:3:{s:4:\"name\";s:29:\"unionpay_encrypt_cert_path_pm\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:11:\"encrypt.cer\";}i:6;a:3:{s:4:\"name\";s:16:\"unionpay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:7;a:3:{s:4:\"name\";s:22:\"unionpay_sign_cert_pwd\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:8;a:3:{s:4:\"name\";s:23:\"unionpay_sign_cert_path\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:9;a:3:{s:4:\"name\";s:25:\"unionpay_verify_cert_path\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:10;a:3:{s:4:\"name\";s:26:\"unionpay_encrypt_cert_path\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}}','1','0','1');");

require("../../inc/footer.php");
?>