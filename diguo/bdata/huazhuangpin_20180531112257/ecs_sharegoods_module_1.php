<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sharegoods_module`;");
E_C("CREATE TABLE `ecs_sharegoods_module` (
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
  `not_sale` smallint(6) DEFAULT '0',
  `only_img` smallint(6) DEFAULT '0',
  `not_brand` smallint(6) DEFAULT '0',
  `only_tbk` smallint(6) DEFAULT '0',
  `cookietemp` text,
  `cookiereal` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sharegoods_module` values('1','taobao','http://item.taobao.com,http://item.tmall.com','','1','淘宝','AFC76A66CF4F434ED080D245C30CF1E71C22959C','','','','','','','a:6:{s:7:\"app_key\";N;s:10:\"app_secret\";N;s:6:\"tk_pid\";N;s:11:\"session_key\";s:56:\"ph25o8t37azp4fv6uf2180s96ao91567h764621yy07bz8s2pl69b40b\";s:7:\"fun_key\";s:5:\"CDBPL\";s:10:\"expires_in\";i:1454111790;}','a:15:{s:7:\"app_key\";s:8:\"23162971\";s:10:\"app_secret\";s:32:\"6943c8a2ca6639113afe40214bc31f11\";s:6:\"tk_pid\";N;s:8:\"almmname\";s:56:\"ph25o8t37azp4fv6uf2180s96ao91567h764621yy07bz8s2pl69b40b\";s:8:\"almmpass\";N;s:3:\"pid\";N;s:12:\"price_change\";s:0:\"\";s:13:\"price_change1\";s:0:\"\";s:8:\"not_sale\";i:0;s:9:\"not_brand\";i:0;s:8:\"only_img\";i:0;s:8:\"only_tbk\";i:0;s:8:\"is_order\";i:0;s:8:\"ms_appid\";s:40:\"AFC76A66CF4F434ED080D245C30CF1E71C22959C\";s:8:\"code_tdj\";s:0:\"\";}','0','0','0','0','','');");
E_D("replace into `ecs_sharegoods_module` values('2','','','','0','','','','','','','','','','','0','0','0','0','','cq=ccp%3D0; pnm_cku822=194WsMPac%2FFS4KgNn94nvw9Wm70ODBULv%2B84c4%3D%7CWUCLjKgS85yqt3r9qWuiz5I%3D%7CWMEKRlUWBOubLbGe2VXQh6W58JaFNpRPKxONwtEyQA%3D%3D%7CX0YLbX78NVpj%2F7G5jS%2F6i7ik6w3epEUqE4nHgIQu54i%2BpKotafN2zw%3D%3D%7CXkdILogCr8jk%2FfCWhRm7Zgicl8efm11iQG93%7CXUeMwOR%2Bw5SnO7XTtzX0o5CLxSKRE8apmQ8C5KDadxYgvHAWEmipwp%2Bw%7CXMYK7F8liOvH3hMUpzXkiaU%2FJw%3D%3D; cna=paZeC/NUf3YCAaskCEqp21Ga; cookie2=b993ce5f2d0c097cef2d41bbc25812f7; t=31ef908bd8090c4df9634b0d23af0982; uc1=cookie15=URm48syIIVrSKA%3D%3D&existShop=true; unb=360698917; _nk_=%5Cu7279%5Cu7F51%5Cu4FE1%5Cu606F%5Cu79D1%5Cu6280; _l_g_=Ug%3D%3D; tracknick=%5Cu7279%5Cu7F51%5Cu4FE1%5Cu606F%5Cu79D1%5Cu6280; cookie1=AH%2F90atbNCdmT7tc147f89qRHrsSQ7OWNJKHvpZWF%2BQ%3D; cookie17=UNaHdcKIR4oE; login=true; _tb_token_=vCbQssPZgEbx');");
E_D("replace into `ecs_sharegoods_module` values('3','','','','0','','','','','','','','','','','0','0','0','0','','cna=l+pgC/cDdWcCAWVF+/5q+UVs; miid=3317872020099775032; __utma=6906807.434603219.1390489590.1390489590.1390489590.1; __utmz=6906807.1390489590.1.1.utmcsr=fuwu.taobao.com|utmccn=(referral)|utmcmd=referral|utmcct=/ser/detail.htm; x=e%3D1%26p%3D*%26s%3D0%26c%3D0%26f%3D0%26g%3D0%26t%3D0%26__ll%3D-1%26_ato%3D0; lzstat_uv=24182050841715729711|2581762@3201199@2945730@2948565@2798379@2043323@3045821@2805963@2738597@878758@2208862@3027305@3284827@2581759@2581747@2938535@2938538@2879138@3010391; ali_ab=60.186.203.48.1390489531936.4; l=asd890241::1397182032328::11; v=0; uc3=nk2=AmJam4TqFyWJ&id2=W8ncTY3m5dw%3D&vt3=F8dATHtpuP76kDFmmBg%3D&lg2=V32FPkk%2Fw0dUvg%3D%3D; existShop=MTM5NzYxMTM1NA%3D%3D; lgc=asd890241; tracknick=asd890241; sg=10d; cookie2=6b8940c7741e940084cc149db11f8b7c; mt=cp=0&np=&ci=1_1&cyk=0_0; cookie1=B0EwsR%2FpnjjSjqpUTsxO8woKrOXzJMXtv9vP4SUJA5I%3D; unb=80893640; t=43525df761cffb84c1297592f666dd75; publishItemObj=Ng%3D%3D; _cc_=UIHiLt3xSw%3D%3D; tg=0; _l_g_=Ug%3D%3D; _nk_=asd890241; cookie17=W8ncTY3m5dw%3D; pnm_cku822=117fCJmZk4PGRVHHxtNZngkZ3k%2BaC52PmgTKQ%3D%3D%7CfyJ6Zyd9OGcmY3YkZHYibx4%3D%7CfiB4D15%2BZH9geTp%2FJyN8PDJtLBMbCF4lHw%3D%3D%7CeSRiYjNhIHA3dWI0c2A4eGwmfz16PnhrNHJlMH1kJnc8bS1hfzoT%7CeCVoaEATTRBWFx1IEBRReHZYZg%3D%3D%7CeyR8C0obRRhYABdDABNTFAFGEU8XUxMFTgMVSREMSxxeG1MWCTMa%7CeiJmeiV2KHMvangudmM6eXk%2BAA%3D%3D; _tb_token_=3ee5e3b8e7690; uc1=lltime=1397569800&cookie14=UoLVYuvN1ebuMw%3D%3D&existShop=true&cookie16=Vq8l%2BKCLySLZMFWHxqs8fwqnEw%3D%3D&cym=1&cookie21=URm48syIZJTgtchfymSXVA%3D%3D&tag=3&cookie15=VFC%2FuZ9ayeYq2g%3D%3D');");
E_D("replace into `ecs_sharegoods_module` values('4','','','','0','','','','','','','','','','','0','0','0','0','','_tb_token_=7aVYtGxC3ruw;cookie2=873385d42027db2518c6d24f2157d594;t=e9806785fb4e8ac160095e89e1beddaa;cookie2=873385d42027db2518c6d24f2157d594;t=e9806785fb4e8ac160095e89e1beddaa;cookie2=93f308d5d24521f38278b09c937a417a;t=16bdd72f72882bb9b8fe686207c32e41;cookie2=93f308d5d24521f38278b09c937a417a;t=16bdd72f72882bb9b8fe686207c32e41;cookie2=343bbe28c9d470eb8159f053d328f653;t=d542fad5116a4ea54117e2865c1ac184;cookie2=343bbe28c9d470eb8159f053d328f653;t=d542fad5116a4ea54117e2865c1ac184');");

require("../../inc/footer.php");
?>