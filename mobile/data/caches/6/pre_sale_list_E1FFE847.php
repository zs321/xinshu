<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:79:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/pre_sale_list.dwt";i:1;s:79:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/exchange_tree.dwt";i:2;s:85:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/page_footer.lbi";}s:7:"expires";i:1532056727;s:8:"maketime";i:1532054927;}<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>预售活动_杏树商城</title>
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
    <h1> 杏树认购 </h1>
  </header>
  <div id="ground" style="min-width:320px;min-height:420px;width:100%;height:auto;background-image:url('themes/huazhuangpin/images/ground.png'); background-size: 100% 100%;">
</div>
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
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.more.js"></script> 
<script type="text/javascript" src="themes/huazhuangpin/js/ectouch.js"></script> 
</body>
</html>
<script language="javascript">
var ss;
window.onload=function()
{
var h=document.documentElement.clientHeight;//可见区域高度
var header_h = $("#header").height();
var footer_h = $(".global-nav").height();
ss=document.getElementById('ground');
ss.style.height= (parseInt(h) - parseInt(header_h) - parseInt(footer_h)) +"px";
console.log(parseInt(h) - parseInt(header_h) - parseInt(footer_h));
console.log(footer_h);
}
$(function(){
    $('#ground').on('click',function(){
        $.ajax({
            url:'',
            type:'post',
            data:{},
            success:function(){
            },
            error:function(){
                alert('Error code:500 server error');
            }
        })
    })
})
</script>