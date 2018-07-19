<?php exit;?>a:3:{s:8:"template";a:4:{i:0;s:77:"D:/phpStudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/exchange_list.dwt";i:1;s:84:"D:/phpStudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/library/exchange_hot.lbi";i:2;s:85:"D:/phpStudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/library/exchange_list.lbi";i:3;s:83:"D:/phpStudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/library/page_footer.lbi";}s:7:"expires";i:1531993196;s:8:"maketime";i:1531991396;}<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>积分商城_杏树商城</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/huazhuangpin/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/huazhuangpin/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/huazhuangpin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/huazhuangpin/js/TouchSlide.js"></script>
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
    <h1> 积分商城 </h1>
    <div class="header_r header_search"> <a class="switchBtn switchBtn-album" href="javascript:void(0);"  onclick="changeCl(this)" style="opacity: 1;"> 切换 </a> </div>
  </header>
  
  
  <div class="blank2"> </div>
      <div class="blank2"> </div>
   <div class="filter" style="position:static; top:0px; width:100%;">
  <form method="GET" class="sort" name="listform">
    <ul class="filter-inner">
      <li class=""> <a href="exchange.php?category=0&display=grid&brand=&price_min=&price_max=&filter_attr=&page=1&sort=goods_id&order=DESC&keywords=#goods_list&">综合</a> </li>
      <li class="filter-cur"> <a href="exchange.php?category=0&display=grid&brand=&price_min=&price_max=&filter_attr=&page=1&sort=exchange_integral&order=DESC&keywords=#goods_list">积分<i class="f-ico-arrow-d"></i></a> </li>
      <li class=""> <a href="exchange.php?category=0&display=grid&brand=&price_min=&price_max=&filter_attr=&page=1&sort=last_update&order=DESC&keywords=#goods_list">时间</a></li>
      
    </ul>
    <input type="hidden" name="category" value="0" />
    <input type="hidden" name="display" value="grid" id="display" />
    <input type="hidden" name="brand" value="" />
    <input type="hidden" name="price_min" value="" />
    <input type="hidden" name="price_max" value="" />
    <input type="hidden" name="filter_attr" value="" />
    <input type="hidden" name="page" value="1" />
    <input type="hidden" name="sort" value="exchange_integral" />
    <input type="hidden" name="order" value="DESC" />
  </form>
</div>
<div class="srp album flex-f-row" id="J_ItemList" style="opacity:1;"> 
    <div class="product flex_in single_item">
      <div class="pro-inner"></div>
    </div>
    <a href="javascript:;" class="get_more"></a>
</div>   
   <div id="content" class="footer mr-t20">
  
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
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.more.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/ectouch.js"></script>
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'exchange.php?act=asynclist&category=0&brand=&price_min=&price_max=&filter_attr=&page=1&sort=exchange_integral&order=DESC', 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/huazhuangpin/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
</body>
</html>