<?php exit;?>a:3:{s:8:"template";a:4:{i:0;s:80:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/pre_spike_list.dwt";i:1;s:88:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/pre_spike_list.lbi";i:2;s:79:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/pages.lbi";i:3;s:85:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/page_footer.lbi";}s:7:"expires";i:1532422154;s:8:"maketime";i:1532420354;}<!DOCTYPE html>
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
          <div class="proImg-wrap"> <a href="goods.php?id=132&u=257" style="display:block;font-size:0px;"> <img src="/images/201807/thumb_img/132_thumb_G_1531875210507.jpg" alt="杏仁果酱"> </a> </div>
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
            <div class="pagenav-text"> <span>1/1</span> <i></i> </div>
            <select name="page" class="pagenav-select" onchange="window.location.href=this.options[this.selectedIndex].value" >
                            
              <option value="pre_spike.php?act=list&page=1">1</option>
                                    </select>
          </div>
          <div class="p-next p-gray" > 
          	              <a class="no">下一页</a> 
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