<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:72:"D:/phpstudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/category.dwt";i:1;s:82:"D:/phpstudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/library/goods_list.lbi";i:2;s:83:"D:/phpstudy/PHPTutorial/WWW/shop/mobile/themes/huazhuangpin/library/page_footer.lbi";}s:7:"expires";i:1531901478;s:8:"maketime";i:1531899678;}<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>杏仁油_家用系列_杏树商城</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/huazhuangpin/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/huazhuangpin/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/huazhuangpin/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.btn_num{font-size:20px; display:inline-block; border:1px solid #b3b3b3; width:25px; height:23px; line-height:23px; text-align:center; float:left; background:#F3F3F3}
.proInfo-wrap a {color: #000000;text-decoration: none;font-family: "微软雅黑";}
.proInfo-wrap input{text-align:center;border: 1px solid #b3b3b3;height:23px; float:left; margin:0px 2px}
</style>
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
    <div id="search_box" style="display:block;padding:0;margin:0 3.2rem">
      <div class="search_box" >
        <form method="post" action="search.php" name="searchForm" id="searchForm_id">
          <input placeholder="请输入商品名称" name="keywords" type="text" id="keywordBox" />
          <button class="ico_07" type="submit" onclick="return check('keywordBox')"> </button>
        </form>
      </div>
    </div>
    <div class="header_r header_search"> <a class="switchBtn switchBtn-list" href="javascript:void(0);"  onclick="changeCl(this)" style="opacity: 1;"> 切换 </a> </div>
  </header>
  <div class="categoryleve clearfix">
									<a  class="current" href="category.php?id=502">杏仁油</a>
							<a  href="category.php?id=500">杏仁干果</a>
							<a  href="category.php?id=498">杏仁醋</a>
							<a  href="category.php?id=497">杏子果酱</a>
							<a  href="category.php?id=495">杏仁食用油</a>
					</div>
<div class="filter" style="position:static; top:0px; width:100%;">
  <form method="GET" class="sort" name="listform">
    <ul class="filter-inner">
      <li class="filter-cur"> <a href="category.php?category=502&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=sales_volume_base&order=ASC#goods_list">销量 <span> <i class="f-ico-triangle-mt "></i> <i class="f-ico-triangle-mb f-ico-triangle-slctd"></i> </span> </a> </li>
      <li class=""> <a href="category.php?category=502&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=DESC#goods_list">综合</a> </li>
      <li class=""> <a href="category.php?category=502&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=click_count&order=DESC#goods_list">人气<i class="f-ico-arrow-d"></i></a> </li>
      <li class=""> <a href="category.php?category=502&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list">价格 <span> <i class="f-ico-triangle-mt "></i> <i class="f-ico-triangle-mb "></i> </span> </a> </li>
      <li class="filter-navBtn"><a href="javascript:;" class="j_filterBtn disabled" onclick="mtShowMenu()">筛选</a></li>
    </ul>
    <input type="hidden" name="category" value="502" />
    <input type="hidden" name="display" value="grid" id="display" />
    <input type="hidden" name="brand" value="0" />
    <input type="hidden" name="price_min" value="0" />
    <input type="hidden" name="price_max" value="0" />
    <input type="hidden" name="filter_attr" value="0" />
    <input type="hidden" name="page" value="1" />
    <input type="hidden" name="sort" value="sales_volume_base" />
    <input type="hidden" name="order" value="DESC" />
  </form>
</div>
<form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <div class="srp list flex-f-row" id="J_ItemList" style="opacity:1;"> 
    <div class="product flex_in single_item">
      <div class="pro-inner"></div>
    </div>
    <a href="javascript:;" class="get_more">点击加载更多</a>
  </div>
  </form>
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
            <a href="cat_all.php" class="global-nav__nav-link global-nav__nav-link-cur">
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
</script></div>
<div id="nav" class="nav" style="right:-275px;">
  <form class="hold-height" action="category.php">
    <div class="attrExtra">
      <input type="hidden" name="category" value="502"/>
      <button class="attrExtra-submit" type="submit">确定</button>
      <button class="attrExtra-cancel" type="button"  onclick="mtShowMenu()">取消</button>
    </div>
    <div class="attrs attr-fix" style="overflow: auto;height: 100%"> 
       
       
       
    </div>
  </form>
</div>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.json.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.more.cat.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/ectouch.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/function.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/transport.js"></script>
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'category.php?act=asynclist&category=502&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=sales_volume_base&order=DESC'})
});
</script>
<script type="text/javascript">
var select_spe = "请选择商品属性";
var btn_buy = "购买";
var is_cancel = "取消";
</script>
</body>
</html>