<?php exit;?>a:3:{s:8:"template";a:4:{i:0;s:78:"D:/phpStudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/pre_spike_list.dwt";i:1;s:86:"D:/phpStudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/library/pre_spike_list.lbi";i:2;s:77:"D:/phpStudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/library/pages.lbi";i:3;s:83:"D:/phpStudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/library/page_footer.lbi";}s:7:"expires";i:1531993324;s:8:"maketime";i:1531991524;}<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>限时秒杀_杏树商城</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/huazhuangpin/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/huazhuangpin/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/huazhuangpin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.min.js"></script> 
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.json.js"></script> 
<script type="text/javascript" src="themes/huazhuangpin/js/transport_jquery.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.countdown-2.5.3.min.js"></script> 
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
    <h1> 限时秒杀 </h1>
  </header>
     	    <div id="J_ItemList" class="srp album flex-f-row" style="opacity:1;">
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="goods.php?id=78&u=257" style="display:block;font-size:0px;"> <img src="http://demo.0769web.net/ecshop/ecshop0541huazhuangpin/images/201707/thumb_img/78_thumb_G_1501043450216.jpg" alt="VERSACE范思哲 绅情香水云淡风清男士香水5ml 小样"> </a> </div>
          <div class="protime"><font id="ps_cd_78"></font><font id="ps_label_78" over="false"></font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2032, 07-1, 18, 14, 47, 00);
				            					   	           	//if(78 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "1";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_78").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_78").html("");
					   	    				$("#ps_label_78").html("后结束");
					   	    				$("#ps_label_78").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2032, 07-1, 18, 14, 47, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_78").html("");
					   	    				$("#ps_label_78").html("活动已结束");
					   	    				$("#ps_label_78").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="goods.php?id=78&u=257" >VERSACE范思哲 绅情香水云淡风清男士香水5ml 小样</a> </div>
            <div class="proPrice"> 
              <em>56.00</em> 
            </div>
            <div class="proSales"><em>16</em>人已购买</div>
          </div>
        </div>
      </div>
       
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="goods.php?id=93&u=257" style="display:block;font-size:0px;"> <img src="http://demo.0769web.net/ecshop/ecshop0541huazhuangpin/images/201707/thumb_img/93_thumb_G_1501041778223.jpg" alt="薇姿 理想焕白防晒隔离乳(清爽型)30ml SPF30/PA+++ 提亮肤色"> </a> </div>
          <div class="protime"><font id="ps_cd_93"></font><font id="ps_label_93" over="false"></font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2032, 07-1, 11, 14, 48, 00);
				            					   	           	//if(93 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "1";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_93").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_93").html("");
					   	    				$("#ps_label_93").html("后结束");
					   	    				$("#ps_label_93").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2032, 07-1, 11, 14, 48, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_93").html("");
					   	    				$("#ps_label_93").html("活动已结束");
					   	    				$("#ps_label_93").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="goods.php?id=93&u=257" >薇姿 理想焕白防晒隔离乳(清爽型)30ml SPF30/PA+++ 提亮肤色</a> </div>
            <div class="proPrice"> 
              <em>168.00</em> 
            </div>
            <div class="proSales"><em>1</em>人已购买</div>
          </div>
        </div>
      </div>
       
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="goods.php?id=75&u=257" style="display:block;font-size:0px;"> <img src="http://demo.0769web.net/ecshop/ecshop0541huazhuangpin/images/201707/thumb_img/75_thumb_G_1501045059963.jpg" alt="玫琳凯 心语香水29ml 女士香水 花果香型"> </a> </div>
          <div class="protime"><font id="ps_cd_75"></font><font id="ps_label_75" over="false"></font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2029, 07-1, 20, 14, 47, 00);
				            					   	           	//if(75 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "1";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_75").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_75").html("");
					   	    				$("#ps_label_75").html("后结束");
					   	    				$("#ps_label_75").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2029, 07-1, 20, 14, 47, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_75").html("");
					   	    				$("#ps_label_75").html("活动已结束");
					   	    				$("#ps_label_75").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="goods.php?id=75&u=257" >玫琳凯 心语香水29ml 女士香水 花果香型</a> </div>
            <div class="proPrice"> 
              <em>218.00</em> 
            </div>
            <div class="proSales"><em>2</em>人已购买</div>
          </div>
        </div>
      </div>
       
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="goods.php?id=4&u=257" style="display:block;font-size:0px;"> <img src="http://demo.0769web.net/ecshop/ecshop0541huazhuangpin/images/201707/thumb_img/4_thumb_G_1498959094209.jpg" alt="通菜（通心菜、空心菜、竹叶菜）"> </a> </div>
          <div class="protime"><font id="ps_cd_4"></font><font id="ps_label_4" over="false"></font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2027, 07-1, 04, 14, 45, 00);
				            					   	           	//if(4 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "1";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_4").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_4").html("");
					   	    				$("#ps_label_4").html("后结束");
					   	    				$("#ps_label_4").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2027, 07-1, 04, 14, 45, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_4").html("");
					   	    				$("#ps_label_4").html("活动已结束");
					   	    				$("#ps_label_4").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="goods.php?id=4&u=257" >通菜（通心菜、空心菜、竹叶菜）</a> </div>
            <div class="proPrice"> 
              <em>5.28</em> 
            </div>
            <div class="proSales"><em>5</em>人已购买</div>
          </div>
        </div>
      </div>
       
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="goods.php?id=102&u=257" style="display:block;font-size:0px;"> <img src="http://demo.0769web.net/ecshop/ecshop0541huazhuangpin/images/201707/thumb_img/102_thumb_G_1500954933462.jpg" alt="BQ05 透净均衡卸妆液（升级版 水油分层） 全脸卸妆"> </a> </div>
          <div class="protime"><font id="ps_cd_102"></font><font id="ps_label_102" over="false"></font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2023, 07-1, 09, 17, 37, 00);
				            					   	           	//if(102 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "1";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_102").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_102").html("");
					   	    				$("#ps_label_102").html("后结束");
					   	    				$("#ps_label_102").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2023, 07-1, 09, 17, 37, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_102").html("");
					   	    				$("#ps_label_102").html("活动已结束");
					   	    				$("#ps_label_102").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="goods.php?id=102&u=257" >BQ05 透净均衡卸妆液（升级版 水油分层） 全脸卸妆</a> </div>
            <div class="proPrice"> 
              <em>168.00</em> 
            </div>
            <div class="proSales"><em>102</em>人已购买</div>
          </div>
        </div>
      </div>
       
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="goods.php?id=96&u=257" style="display:block;font-size:0px;"> <img src="http://demo.0769web.net/ecshop/ecshop0541huazhuangpin/images/201707/thumb_img/96_thumb_G_1501041507077.jpg" alt="missha谜尚BB裸妆隔离妆前乳40ml"> </a> </div>
          <div class="protime"><font id="ps_cd_96"></font><font id="ps_label_96" over="false"></font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2023, 07-1, 02, 21, 16, 00);
				            					   	           	//if(96 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "1";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_96").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_96").html("");
					   	    				$("#ps_label_96").html("后结束");
					   	    				$("#ps_label_96").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2023, 07-1, 02, 21, 16, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_96").html("");
					   	    				$("#ps_label_96").html("活动已结束");
					   	    				$("#ps_label_96").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="goods.php?id=96&u=257" >missha谜尚BB裸妆隔离妆前乳40ml</a> </div>
            <div class="proPrice"> 
              <em>88.00</em> 
            </div>
            <div class="proSales"><em>5</em>人已购买</div>
          </div>
        </div>
      </div>
       
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="goods.php?id=110&u=257" style="display:block;font-size:0px;"> <img src="http://demo.0769web.net/ecshop/ecshop0541huazhuangpin/images/201707/thumb_img/110_thumb_G_1500958449862.jpg" alt="AK01 焕活舒缓敷眼水 90ml 补水 舒缓 焕活双眼"> </a> </div>
          <div class="protime"><font id="ps_cd_110"></font><font id="ps_label_110" over="false"></font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2023, 07-1, 02, 21, 15, 00);
				            					   	           	//if(110 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "1";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_110").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_110").html("");
					   	    				$("#ps_label_110").html("后结束");
					   	    				$("#ps_label_110").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2023, 07-1, 02, 21, 15, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_110").html("");
					   	    				$("#ps_label_110").html("活动已结束");
					   	    				$("#ps_label_110").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="goods.php?id=110&u=257" >AK01 焕活舒缓敷眼水 90ml 补水 舒缓 焕活双眼</a> </div>
            <div class="proPrice"> 
              <em>88.00</em> 
            </div>
            <div class="proSales"><em>43</em>人已购买</div>
          </div>
        </div>
      </div>
       
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="goods.php?id=132&u=257" style="display:block;font-size:0px;"> <img src="http://demo.0769web.net/ecshop/ecshop0541huazhuangpin/images/201807/thumb_img/132_thumb_G_1531875210507.jpg" alt="杏仁果酱"> </a> </div>
          <div class="protime"><font id="ps_cd_132"></font><font id="ps_label_132" over="false"></font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2018, 07-1, 31, 16, 53, 00);
				            					   	           	//if(132 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "1";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_132").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_132").html("");
					   	    				$("#ps_label_132").html("后结束");
					   	    				$("#ps_label_132").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2018, 07-1, 31, 16, 53, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_132").html("");
					   	    				$("#ps_label_132").html("活动已结束");
					   	    				$("#ps_label_132").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="goods.php?id=132&u=257" >杏仁果酱</a> </div>
            <div class="proPrice"> 
              <em>5.80</em> 
            </div>
            <div class="proSales"><em>0</em>人已购买</div>
          </div>
        </div>
      </div>
       
       
    </div>
    </div>
<section class="list-pagination">
    <div class="pagenav-wrapper" id="J_PageNavWrap" style="">
      <div class="pagenav-content">
        <div class="pagenav" id="J_PageNav" style="display:flex; text-align:center;">
          <div class="p-prev p-gray"> 
                             <a  class="no">首页</a> 
                        </div>
          <div class="p-prev p-gray"> 
                            <a class="no">上一页</a>   
                          </div>
          <div class="pagenav-cur">
            <div class="pagenav-text"> <span>1/2</span> <i></i> </div>
            <select name="page" class="pagenav-select" onchange="window.location.href=this.options[this.selectedIndex].value" >
                            
              <option value="pre_spike.php?act=list&page=1">1</option>
                
              <option value="pre_spike.php?act=list&page=2">2</option>
                                    </select>
          </div>
          <div class="p-next" > 
          	              <a  href="pre_spike.php?act=list&page=2" >下一页</a>
                        </div>
          <div class="p-end p-gray">
                      <a class="no">末页</a> 
                      </div>
        </div>
      </div>
    </div>
</section><div id="content" class="footer mr-t20">
  
    <p class="region">&copy; 2012-2018 杏树商城 版权所有，并保留所有权利。 </p>
    <p class="region"> 
     
    ICP备案证书号: <a href="http://www.miibeian.gov.cn/" target="_blank"> 粤ICP备12061602号 </a> 
    	</p>
<div style="height:5em"></div>
</div>
<div class="global-nav">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link ">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link ">
                <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i>
                <span class="global-nav__nav-tit">分类</span>
            </a>
        </div>
<!--        <div class="global-nav__nav-item">
            <a href="javascript:get_search_box();" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i>
                <span class="global-nav__nav-tit">搜索</span>
            </a>
        </div>-->
        <div class="global-nav__nav-item">
            <a href="flow.php?step=cart" class="global-nav__nav-link ">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">购物车</span>
                <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php" class="global-nav__nav-link ">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">会员中心</span>
            </a>
        </div>
    </div>
</div>
<div id="toTop" class="toTop">
  <img alt="" src="themes/huazhuangpin/images/scropTop.png">
</div>
<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}
	var offset = $("#toTop").offset();		
	var bottom = $("#toTop").css("bottom");		
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#toTop").fadeIn(800);
			
			if(isIe6)
			{			
				$("#toTop").css("position","absolute")	
				$("#toTop").css("bottom",bottom)
			}
		}
		else
		{
			$("#toTop").fadeOut(500);
		}
		
	});
	
	$("#toTop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
})
</script>
<script type="text/javascript" src="themes/huazhuangpin/js/zepto.min.js"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script> </div>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.more.js"></script> 
<script type="text/javascript" src="themes/huazhuangpin/js/ectouch.js"></script> 
</body>
</html>