<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_point_record`;");
E_C("CREATE TABLE `ecs_weixin_point_record` (
  `pr_id` int(7) NOT NULL AUTO_INCREMENT,
  `wxid` char(28) NOT NULL,
  `point_name` varchar(64) NOT NULL,
  `num` int(5) NOT NULL,
  `lasttime` int(10) NOT NULL,
  `datelinie` int(10) NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_point_record` values('1','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','dzp','0','1497176306','1495013633');");
E_D("replace into `ecs_weixin_point_record` values('2','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','bd','1','1497176306','1495013746');");
E_D("replace into `ecs_weixin_point_record` values('3','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','news','0','1497176306','1495013907');");
E_D("replace into `ecs_weixin_point_record` values('4','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','hot','0','1497176306','1495014364');");
E_D("replace into `ecs_weixin_point_record` values('5','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','g_point','0','1497176306','1495014991');");
E_D("replace into `ecs_weixin_point_record` values('6','oETdXw_FXKqAiB_bWDc7eSD7-sAo','g_point','1','1495016006','1495016006');");
E_D("replace into `ecs_weixin_point_record` values('7','oETdXw_FXKqAiB_bWDc7eSD7-sAo','news','2','1495016064','1495016011');");
E_D("replace into `ecs_weixin_point_record` values('8','oETdXw_FXKqAiB_bWDc7eSD7-sAo','best','1','1495016016','1495016016');");
E_D("replace into `ecs_weixin_point_record` values('9','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','zjd','0','1497176306','1495016356');");
E_D("replace into `ecs_weixin_point_record` values('10','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','qiandao','0','1497176306','1495016365');");
E_D("replace into `ecs_weixin_point_record` values('11','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','best','0','1497176306','1495016378');");
E_D("replace into `ecs_weixin_point_record` values('12','oETdXw37dPH5gjuguRfhV7a7dpX0','news','1','1497243273','1495024632');");
E_D("replace into `ecs_weixin_point_record` values('13','oETdXw37dPH5gjuguRfhV7a7dpX0','dzp','0','1497233826','1495025173');");
E_D("replace into `ecs_weixin_point_record` values('14','oETdXw37dPH5gjuguRfhV7a7dpX0','zjd','0','1497233826','1495025182');");
E_D("replace into `ecs_weixin_point_record` values('15','oETdXw37dPH5gjuguRfhV7a7dpX0','qiandao','0','1497233826','1495025189');");
E_D("replace into `ecs_weixin_point_record` values('16','oETdXw_PCT5XnZrh0_Mzh73EQi6Q','ddcx','0','1497176306','1495028153');");
E_D("replace into `ecs_weixin_point_record` values('17','oETdXw6gFbaYwkInjNhNoqP8iJzs','news','2','1495028739','1495028713');");
E_D("replace into `ecs_weixin_point_record` values('18','oETdXw6gFbaYwkInjNhNoqP8iJzs','best','1','1495028743','1495028743');");
E_D("replace into `ecs_weixin_point_record` values('19','oETdXw6gFbaYwkInjNhNoqP8iJzs','hot','1','1495028761','1495028761');");
E_D("replace into `ecs_weixin_point_record` values('20','oETdXw37dPH5gjuguRfhV7a7dpX0','bd','1','1497233826','1495037463');");
E_D("replace into `ecs_weixin_point_record` values('21','oETdXw-9Ev4_1tjKw6gsHVI9IYzc','bd','1','1495037966','1495037966');");
E_D("replace into `ecs_weixin_point_record` values('22','oETdXw37dPH5gjuguRfhV7a7dpX0','ddcx','0','1497233826','1495081297');");
E_D("replace into `ecs_weixin_point_record` values('23','oETdXwzjRqAP23gIAzH9N-mCrQG0','bd','1','1496482763','1495088889');");
E_D("replace into `ecs_weixin_point_record` values('24','oETdXwzjRqAP23gIAzH9N-mCrQG0','qiandao','0','1496482763','1495088962');");
E_D("replace into `ecs_weixin_point_record` values('25','oETdXwzjRqAP23gIAzH9N-mCrQG0','dzp','0','1496482763','1495089023');");
E_D("replace into `ecs_weixin_point_record` values('26','oETdXwzjRqAP23gIAzH9N-mCrQG0','zjd','0','1496482763','1495089103');");
E_D("replace into `ecs_weixin_point_record` values('27','oETdXw0zdrHYMlNE785YliKwdLaM','hot','1','1495106900','1495106900');");
E_D("replace into `ecs_weixin_point_record` values('28','oETdXw0zdrHYMlNE785YliKwdLaM','best','1','1495107005','1495107005');");
E_D("replace into `ecs_weixin_point_record` values('29','oETdXwzQpLlUi_F9eywemDB8JWgQ','news','2','1497069476','1495203575');");
E_D("replace into `ecs_weixin_point_record` values('30','oETdXwzQpLlUi_F9eywemDB8JWgQ','hot','1','1497069533','1495421890');");
E_D("replace into `ecs_weixin_point_record` values('31','oETdXw7nXsEUpzabH-6yWt_E_Rv4','news','2','1495437637','1495437499');");
E_D("replace into `ecs_weixin_point_record` values('32','oETdXwzpSj9nYUkej7rY62bYDhoE','bd','1','1495521971','1495521971');");
E_D("replace into `ecs_weixin_point_record` values('33','oETdXwzpSj9nYUkej7rY62bYDhoE','best','1','1495521991','1495521991');");
E_D("replace into `ecs_weixin_point_record` values('34','oETdXw-SjIxI3XYIg1iYVRCEgE8k','news','1','1495685113','1495685113');");
E_D("replace into `ecs_weixin_point_record` values('35','oETdXw-SjIxI3XYIg1iYVRCEgE8k','hot','1','1495685135','1495685135');");
E_D("replace into `ecs_weixin_point_record` values('36','oETdXwxGm158DkDiB9i_bVNWEBmQ','hot','1','1496277975','1496277975');");
E_D("replace into `ecs_weixin_point_record` values('37','oETdXwwPTtkzIvpnYMq9NYLhLpr0','hot','1','1496404245','1496404245');");
E_D("replace into `ecs_weixin_point_record` values('38','oETdXw2KJ15p-tN9KpoibCcSrwCU','best','1','1496460050','1496460050');");
E_D("replace into `ecs_weixin_point_record` values('39','oETdXw2KJ15p-tN9KpoibCcSrwCU','hot','1','1496460171','1496460171');");
E_D("replace into `ecs_weixin_point_record` values('40','oETdXw2KJ15p-tN9KpoibCcSrwCU','news','1','1496460178','1496460178');");
E_D("replace into `ecs_weixin_point_record` values('41','oETdXw2KJ15p-tN9KpoibCcSrwCU','bd','1','1496460218','1496460218');");
E_D("replace into `ecs_weixin_point_record` values('42','oETdXw2KJ15p-tN9KpoibCcSrwCU','zjd','1','1496460227','1496460227');");
E_D("replace into `ecs_weixin_point_record` values('43','oETdXw0Y8iK4Boq5Ch92B5VFJ5VI','news','2','1496482082','1496481063');");
E_D("replace into `ecs_weixin_point_record` values('44','oETdXw0Y8iK4Boq5Ch92B5VFJ5VI','best','1','1496482093','1496482093');");
E_D("replace into `ecs_weixin_point_record` values('45','oETdXw0Y8iK4Boq5Ch92B5VFJ5VI','hot','1','1496482099','1496482099');");
E_D("replace into `ecs_weixin_point_record` values('46','oETdXw_NT3uZ0_QdNZ7dIBIcJnfU','hot','1','1497089405','1497089405');");
E_D("replace into `ecs_weixin_point_record` values('47','oETdXw1p0QYGHUZVP-0PuTL1ezYo','news','1','1497191097','1497089751');");
E_D("replace into `ecs_weixin_point_record` values('48','oETdXw1p0QYGHUZVP-0PuTL1ezYo','best','0','1497191097','1497089797');");
E_D("replace into `ecs_weixin_point_record` values('49','oETdXw8MjT7cWGBr9ExQuD_gMX_k','news','1','1497099387','1497099387');");
E_D("replace into `ecs_weixin_point_record` values('50','oETdXw8MjT7cWGBr9ExQuD_gMX_k','hot','1','1497099405','1497099405');");
E_D("replace into `ecs_weixin_point_record` values('51','oETdXw8MjT7cWGBr9ExQuD_gMX_k','best','1','1497099412','1497099412');");
E_D("replace into `ecs_weixin_point_record` values('52','oETdXw-DnsgghSMsBnQ9D3uw5kQw','bd','1','1497104580','1497104580');");
E_D("replace into `ecs_weixin_point_record` values('53','oETdXw-DnsgghSMsBnQ9D3uw5kQw','news','1','1497104889','1497104889');");
E_D("replace into `ecs_weixin_point_record` values('54','oETdXw-DnsgghSMsBnQ9D3uw5kQw','share_fpoint','1','1497105033','1497105033');");
E_D("replace into `ecs_weixin_point_record` values('55','oETdXw5wuNoLonn8vVIYdSXnBWYU','news','1','1497184735','1497184735');");
E_D("replace into `ecs_weixin_point_record` values('56','oETdXw5wuNoLonn8vVIYdSXnBWYU','hot','1','1497185243','1497185243');");
E_D("replace into `ecs_weixin_point_record` values('57','oETdXw1p0QYGHUZVP-0PuTL1ezYo','hot','0','1497191097','1497191095');");
E_D("replace into `ecs_weixin_point_record` values('58','oETdXw37dPH5gjuguRfhV7a7dpX0','share_fpoint','1','1497247741','1497247741');");
E_D("replace into `ecs_weixin_point_record` values('59','oETdXwwVlQPk9LiBfZZuaVFtZNTI','news','1','1497248286','1497248286');");
E_D("replace into `ecs_weixin_point_record` values('60','oETdXw2Je_lqsJCNWajsSQ5r1HRY','news','1','1497248785','1497248785');");
E_D("replace into `ecs_weixin_point_record` values('61','oETdXw5wuNoLonn8vVIYdSXnBWYU','share_fpoint','1','1497249530','1497249530');");

require("../../inc/footer.php");
?>