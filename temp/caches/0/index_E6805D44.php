<?php exit;?>a:3:{s:8:"template";a:10:{i:0;s:64:"D:/phpStudy/PHPTutorial/WWW/xinshu/themes/huazhuangpin/index.dwt";i:1;s:78:"D:/phpStudy/PHPTutorial/WWW/xinshu/themes/huazhuangpin/library/page_header.lbi";i:2;s:75:"D:/phpStudy/PHPTutorial/WWW/xinshu/themes/huazhuangpin/library/index_ad.lbi";i:3;s:80:"D:/phpStudy/PHPTutorial/WWW/xinshu/themes/huazhuangpin/library/recommend_new.lbi";i:4;s:81:"D:/phpStudy/PHPTutorial/WWW/xinshu/themes/huazhuangpin/library/recommend_best.lbi";i:5;s:80:"D:/phpStudy/PHPTutorial/WWW/xinshu/themes/huazhuangpin/library/recommend_hot.lbi";i:6;s:76:"D:/phpStudy/PHPTutorial/WWW/xinshu/themes/huazhuangpin/library/cat_goods.lbi";i:7;s:79:"D:/phpStudy/PHPTutorial/WWW/xinshu/themes/huazhuangpin/library/cat_articles.lbi";i:8;s:78:"D:/phpStudy/PHPTutorial/WWW/xinshu/themes/huazhuangpin/library/page_footer.lbi";i:9;s:80:"D:/phpStudy/PHPTutorial/WWW/xinshu/themes/huazhuangpin/library/right_sidebar.lbi";}s:7:"expires";i:1532051283;s:8:"maketime";i:1532049483;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="baidu-site-verification" content="ZDhT9AzCSE" />
<meta name="360-site-verification" content="b3ec2eb637fb409d5e19c32e51f8f1f8" />
<meta name="Keywords" content="杏福硒峪" />
<meta name="Description" content="杏福硒峪" />
<title>杏福硒峪</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link href="themes/huazhuangpin/style.css" rel="stylesheet" type="text/css" />
<link href="themes/huazhuangpin/index.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|杏福硒峪" href="feed.php" />
<script type="text/javascript" src="themes/huazhuangpin/js/common.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/index.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.min.js"></script>
<script type="text/javascript">
  function getLocalTime(nS) {
    return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/, ' ');
  }
  function limitCount() {
    var a = limitCount.doms = limitCount.doms || $("#JS_limit_table div.JS_leaveTime");
    a.each(function() {
      var c = $(this);
      var b = c[0]._timeline = c[0]._timeline || c.data("timeline");
      c.html(limitFormatTime(b - limitCount.unixTime));
    });
  }
  function limitFormatTime(e) {
    if (e < 0) {
      e = 0;
    }
    var NowTime = new Date();
    var t = e * 1000 + 28800000 - NowTime.getTime();
    /*var d=Math.floor(t/1000/60/60/24);
        t-=d*(1000*60*60*24);
        var h=Math.floor(t/1000/60/60);
        t-=h*60*60*1000;
        var m=Math.floor(t/1000/60);
        t-=m*60*1000;
        var s=Math.floor(t/1000);*/
    var d = Math.floor(t / 1000 / 60 / 60 / 24);
    if (d<10){
       d = '0' + d;
    }
    var h = Math.floor(t / 1000 / 60 / 60 % 24);
    if (h<10){
       h = '0' + h;
    }
    var m = Math.floor(t / 1000 / 60 % 60);
    if (m<10){
       m = '0' + m;
    }
    var s = Math.floor(t / 1000 % 60);
    if (s<10){
       s = '0' + s;
    }
    if (t < 0) {
    return "活动结束";
    }
    return '剩余：<em>'+ d + '</em>天' + '<em>' + h + '</em>时<em>' + m + '</em>分<em>' + s + '</em>秒';
  }
  function _COMMON_UNIX_TIME() {
    limitCount.unixTime = 0;
    setInterval(limitCount, 1000);
  }
  _COMMON_UNIX_TIME();
</script>
<script type="text/javascript" src="js/easydialog.min.js"></script></head>
<body>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.json.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery-lazyload.js" ></script>
<script type="text/javascript" src="themes/huazhuangpin/js/transport_jquery.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/utils.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/lizi_common.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/jquery-lazyload.js"></script><script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/jquery.SuperSlide.js"></script><script type="text/javascript" src="js/lizi_common.js"></script><script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?090f45997b7b0cf2271bce729f4c9349";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<div id="header" class="new_header">
  <div class="site-topbar">
	<div class="container">
    	<div class="topbar-nav">
        	Hi~欢迎来到杏福硒峪！
        </div>
	    <ul class="sn-quick-menu">
	      <li class="sn-mytaobao menu-item j_MyTaobao">
		<div class="sn-menu">
		  <a aria-haspopup="menu-2" tabindex="0" class="menu-hd" href="user.php" target="_top" rel="nofollow">我的信息<b></b></a>
		  <div id="menu-2" class="menu-bd">
		    <div class="menu-bd-panel" id="myTaobaoPanel">
		       <a href="user.php?act=order_list" target="_top" rel="nofollow">我的订单</a> 
		       <a href="user.php?act=address_list" target="_top" rel="nofollow">我的地址</a>
		       <a href="user.php?act=collection_list" target="_top" rel="nofollow">我的收藏</a>
		    </div>
		  </div>
		</div>
	      </li>
	    </ul>
        <div class="topbar-info J_userInfo" id="ECS_MEMBERZONE">
        	554fcae493e564ee0dc75bdf2ebf94camember_info_top|a:1:{s:4:"name";s:15:"member_info_top";}554fcae493e564ee0dc75bdf2ebf94ca        </div>
    </div>
  </div>
  <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
    <div class="logo-search">
        <a class="logodiv" href="./" title="杏福硒峪"><div class="c-logo"></div></a>
		<div class="c-slogan">
		</div>
		<div class="search-tab" >
            <div class="search-form">
	    <form action="search.php" method="get" id="searchForm" name="searchForm" onSubmit="return checkSearchForm()">
                <div class="so-input-box">
                	<input type="text" name="keywords" id="keyword" class="soinput" placeholder="请输入关键词" autocomplete="off" />
			<input type="hidden" value="k1" name="dataBi">
                </div>
		<input id="searchBtn" type="submit" class="sobtn sogoods" value="搜 索" />
		<div class="clear"></div>
	    </form>
            </div>
                        <div class="search-tags"><span>热搜榜：</span>
				<a href="search.php?keywords=%E4%BF%9D%E6%B9%BF%E9%9D%A2%E8%86%9C" rel="nofollow">保湿面膜</a>
				<a href="search.php?keywords=%E6%B4%97%E9%9D%A2%E5%A5%B6" rel="nofollow">洗面奶</a>
				<a href="search.php?keywords=%E8%A1%A5%E6%B0%B4" rel="nofollow">补水</a>
				<a href="search.php?keywords=%E9%A6%99%E6%B0%B4" rel="nofollow">香水</a>
				<a href="search.php?keywords=%E7%9C%BC%E9%9C%9C" rel="nofollow">眼霜</a>
				<a href="search.php?keywords=%E5%8F%A3%E7%BA%A2" rel="nofollow">口红</a>
				<a href="search.php?keywords=%E6%8A%A4%E8%82%A4%E5%A5%97%E8%A3%85" rel="nofollow">护肤套装</a>
				<a href="search.php?keywords=BB%E9%9C%9C" rel="nofollow">BB霜</a>
		            </div>
                        </div>
            <div class="topbar-cart" id="ECS_CARTINFO_TOP">
        	554fcae493e564ee0dc75bdf2ebf94cacart_info_top|a:1:{s:4:"name";s:13:"cart_info_top";}554fcae493e564ee0dc75bdf2ebf94ca            </div>
    </div>
    <div class="w-nav">
        <div class="t-nav">
        	<div class="nav-categorys j-allCate">
                <div class="catetit">
                    <h2><a href="javascript:;" rel="nofollow">商品分类<i class="c-icon"></i></a></h2>
                </div>
                <ul class="cate-item j-extendCate " >
                    													<li>
								<div class="cateone cate1">
									<a  style="background:url(themes/huazhuangpin/images/cat_ico.png) 10px 0 no-repeat" href="category.php?id=491">饮料系列<i class="iconfont">&#xe600;</i></a>
							<div class="childer_hide"> 
													</div>  
		
								</div>
										</li>	
					
			
						
			
		    													<li>
								<div class="cateone cate2">
									<a  style="background:url(themes/huazhuangpin/images/cat_ico.png) 10px 0 no-repeat" href="category.php?id=492">保健品类<i class="iconfont">&#xe600;</i></a>
							<div class="childer_hide"> 
													</div>  
		
								</div>
										</li>	
					
			
						
			
		    													<li>
								<div class="cateone cate3">
									<a  style="background:url(themes/huazhuangpin/images/cat_ico.png) 10px 0 no-repeat" href="category.php?id=493">家用系列<i class="iconfont">&#xe600;</i></a>
							<div class="childer_hide"> 
													</div>  
		
								</div>
										</li>	
					
			
						
			
		    										<li class="see_all_cat">
						<a href="catalog.php">查看所有分类</a>
					</li>
										
                    </ul>
            </div>
            <ul class="nav-items">
	            	<li>
	            		<a href="./"  class="cur" rel="nofollow">首页</a>
	            	</li>
			            	<li>
	            		<a href="brand.php"    rel="nofollow">品牌馆</a>
	            	</li>
			            	<li>
	            		<a href="group_buy.php"    rel="nofollow">团购活动</a>
	            	</li>
			            	<li>
	            		<a href="exchange.php"    rel="nofollow">积分兑换</a>
	            	</li>
			            	<li>
	            		<a href="pre_sale.php"    rel="nofollow">杏树认购</a>
	            	</li>
			            	<li>
	            		<a href="pre_spike.php"    rel="nofollow">限时秒杀</a>
	            	</li>
			            	<li>
	            		<a href="bonus.php"    rel="nofollow">红包优惠券</a>
	            	</li>
		            </ul>
        </div>    
    </div>
</div>
<script type="text/javascript" src="themes/huazhuangpin/js/lizi_index.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".j-hotTab").find("li:first").addClass('on');
	$(".index-promotion-up").click(function(){
		var num=$(this).parent().parent().find(".textgt").val();
		var num_p=parseInt(num);
		num_p=num_p+1;
		$(this).parent().parent().find(".textgt").val(num_p);
		});
});
</script>
<div class="index-banner">
    <div class="index-slide" id="index-slide">
	
	    <ul class="slidepic">
        	  <li style="background-image: url(data/afficheimg/20170723ncmtmc.jpg);"> <a target="_blank" href="pre_spike.php" ></a> </li>
		  <li style="background-image: url(data/afficheimg/20170723atjfhj.jpg);"> <a target="_blank" href="pre_spike.php" ></a> </li>
		  <li style="background-image: url(data/afficheimg/20170723ulcizx.jpg);"> <a target="_blank" href="pre_spike.php" ></a> </li>
		  <li style="background-image: url(data/afficheimg/20170723qbclmg.jpg);"> <a target="_blank" href="pre_spike.php" ></a> </li>
		  <li style="background-image: url(data/afficheimg/20170723zqqpbx.jpg);"> <a target="_blank" href="pre_spike.php" ></a> </li>
	    </ul>
    <div class="num">
    	<ul>
        	  <li></li>
		  <li></li>
		  <li></li>
		  <li></li>
		  <li></li>
		</ul>
    </div>
 
	 
    </div>
</div>
<script type="text/javascript">
   var btn_buy = "购买";
   var is_cancel = "取消";
   var select_spe = "请选择商品属性";
</script>
<div class="index_pro">
	<div id="promenu">
	
		<ul id="pronav">
			<div class="ico"></div>
			<li><a href="javascript:void(0)" class="selected">新品上市</a></li>
			<div class="arr"></div>
			<li><a href="javascript:void(0)" class="">精品推荐</a></li>
			<div class="arr"></div>
			<li><a href="javascript:void(0)" class="">热销商品</a></li>
		</ul>
	
		<div id="promenu_con">
			<dl class="promenutag" style="display:block">
				<div class="primeProductList">
  <ul class="prolist cls">
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=132"> <img alt="杏仁果酱" src="images/201807/thumb_img/132_thumb_G_1531875210507.jpg"></a> </div>
      <p class="tit"> <a title="杏仁果酱" target="_blank" href="goods.php?id=132">杏仁果酱</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥8.80</font></span>  
        <span class="market_price"><font>￥11.76</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=129"> <img alt="杏仁果酒" src="images/201807/thumb_img/129_thumb_G_1531873754135.jpg"></a> </div>
      <p class="tit"> <a title="杏仁果酒" target="_blank" href="goods.php?id=129">杏仁果酒</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥10.00</font></span>  
        <span class="market_price"><font>￥12.00</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=130"> <img alt="杏仁粉" src="images/201807/thumb_img/130_thumb_G_1531873807209.jpg"></a> </div>
      <p class="tit"> <a title="杏仁粉" target="_blank" href="goods.php?id=130">杏仁粉</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥8.80</font></span>  
        <span class="market_price"><font>￥10.56</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=131"> <img alt="杏仁醋" src="images/201807/thumb_img/131_thumb_G_1531873845056.jpg"></a> </div>
      <p class="tit"> <a title="杏仁醋" target="_blank" href="goods.php?id=131">杏仁醋</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥9.98</font></span>  
        <span class="market_price"><font>￥11.98</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=127"> <img alt="高硒杏饮品" src="images/201807/thumb_img/127_thumb_G_1531873402178.jpg"></a> </div>
      <p class="tit"> <a title="高硒杏饮品" target="_blank" href="goods.php?id=127">高硒杏饮品</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥4.50</font></span>  
        <span class="market_price"><font>￥5.40</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
  </ul>
</div>
					
			 </dl> 
			<dl class="promenutag" style="display:none">
				<div class="primeProductList">
  <ul class="prolist cls">
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=132"> <img alt="杏仁果酱" src="images/201807/thumb_img/132_thumb_G_1531875210507.jpg"></a> </div>
      <p class="tit"> <a title="杏仁果酱" target="_blank" href="goods.php?id=132">杏仁果酱</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥8.80</font></span>  
        <span class="market_price"><font>￥11.76</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=129"> <img alt="杏仁果酒" src="images/201807/thumb_img/129_thumb_G_1531873754135.jpg"></a> </div>
      <p class="tit"> <a title="杏仁果酒" target="_blank" href="goods.php?id=129">杏仁果酒</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥10.00</font></span>  
        <span class="market_price"><font>￥12.00</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=130"> <img alt="杏仁粉" src="images/201807/thumb_img/130_thumb_G_1531873807209.jpg"></a> </div>
      <p class="tit"> <a title="杏仁粉" target="_blank" href="goods.php?id=130">杏仁粉</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥8.80</font></span>  
        <span class="market_price"><font>￥10.56</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=131"> <img alt="杏仁醋" src="images/201807/thumb_img/131_thumb_G_1531873845056.jpg"></a> </div>
      <p class="tit"> <a title="杏仁醋" target="_blank" href="goods.php?id=131">杏仁醋</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥9.98</font></span>  
        <span class="market_price"><font>￥11.98</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=127"> <img alt="高硒杏饮品" src="images/201807/thumb_img/127_thumb_G_1531873402178.jpg"></a> </div>
      <p class="tit"> <a title="高硒杏饮品" target="_blank" href="goods.php?id=127">高硒杏饮品</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥4.50</font></span>  
        <span class="market_price"><font>￥5.40</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
  </ul>
</div>
	   
			 </dl> 
			<dl class="promenutag"  style="display:none">
				<div class="primeProductList">
  <ul class="prolist cls">
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=132"> <img alt="杏仁果酱" src="images/201807/thumb_img/132_thumb_G_1531875210507.jpg"></a> </div>
      <p class="tit"> <a title="杏仁果酱" target="_blank" href="goods.php?id=132">杏仁果酱</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥8.80</font></span>  
        <span class="market_price"><font>￥11.76</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=129"> <img alt="杏仁果酒" src="images/201807/thumb_img/129_thumb_G_1531873754135.jpg"></a> </div>
      <p class="tit"> <a title="杏仁果酒" target="_blank" href="goods.php?id=129">杏仁果酒</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥10.00</font></span>  
        <span class="market_price"><font>￥12.00</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=130"> <img alt="杏仁粉" src="images/201807/thumb_img/130_thumb_G_1531873807209.jpg"></a> </div>
      <p class="tit"> <a title="杏仁粉" target="_blank" href="goods.php?id=130">杏仁粉</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥8.80</font></span>  
        <span class="market_price"><font>￥10.56</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=131"> <img alt="杏仁醋" src="images/201807/thumb_img/131_thumb_G_1531873845056.jpg"></a> </div>
      <p class="tit"> <a title="杏仁醋" target="_blank" href="goods.php?id=131">杏仁醋</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥9.98</font></span>  
        <span class="market_price"><font>￥11.98</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
	
      <li>
      <div class="img"> <a target="_blank" href="goods.php?id=127"> <img alt="高硒杏饮品" src="images/201807/thumb_img/127_thumb_G_1531873402178.jpg"></a> </div>
      <p class="tit"> <a title="高硒杏饮品" target="_blank" href="goods.php?id=127">高硒杏饮品</a> </p>
      <p class="GoodsItem">
	  	<span class="shop_price"><font>￥4.50</font></span>  
        <span class="market_price"><font>￥5.40</font></span>
	  </p>
	  <p><span class="p-time">销量：0 件</span></p>
	  
	  
    </li>
  </ul>
</div>
	
			</dl> 
	</div>
	</div>
	<script>
	var tabs=function(){
		function tag(name,elem){
			return (elem||document).getElementsByTagName(name);
		}
		//获得相应ID的元素
		function id(name){
			return document.getElementById(name);
		}
		function first(elem){
			elem=elem.firstChild;
			return elem&&elem.nodeType==1? elem:next(elem);
		}
		function next(elem){
			do{
				elem=elem.nextSibling;  
			}while(
				elem&&elem.nodeType!=1  
			)
			return elem;
		}
		return {
			set:function(elemId,tabId){
				var elem=tag("li",id(elemId));
				var tabs=tag("dl",id(tabId));
				var listNum=elem.length;
				var tabNum=tabs.length;
				for(var i=0;i<listNum;i++){
						elem[i].onclick=(function(i){
							return function(){
								for(var j=0;j<tabNum;j++){
									if(i==j){
										tabs[j].style.display="block";
										//alert(elem[j].firstChild);
										elem[j].firstChild.className="selected";
									}
									else{
										tabs[j].style.display="none";
										elem[j].firstChild.className="";
									}
								}
							}
						})(i)
				}
			}
		}
	}();
	tabs.set("pronav","promenu_con");//执行
	</script>
</div>
<div id="div_Recommend" class="tescol">
	<div class="conTit small">
		<h2 class="bold">
		 <i class="iTit"></i><div class="tit color_pink">天天特卖</div></h2>
		<span class="subTit">每天上新，天天低价，限时抢购</span></div>
	<div class="tescolCon" id="JS_limit_table">
		<ul>
									<li>
				
					<a href="goods.php?id=132"><img alt="杏仁果酱" src="images/201807/thumb_img/132_thumb_G_1531875210507.jpg"></a>
					<div title="杏仁果酱" class="name">
						<font color="red"></font><a href="goods.php?id=132">杏仁果酱</a>					</div>
					<div class="timedjs">
						<div class="JS_leaveTime" data-timeline="1532937600"><em>00</em>天<em>00</em>时<em>00</em>分<em>00</em>秒</div>
					</div>
					<p class="price">
						<b class="tahoma"><font>￥8.80</font></b><s><font>￥11.76</font></s></p>
					<p class="tescol-btn">
						<a href="goods.php?id=132"><span class="t-btn">马上抢<i class="r-arrow"></i></span></a><span class="t-num">已售 <span class="color_pink"></span> 件</span></p>
				</li>
						</ul>
	</div>
</div>
<div class="series_list"> 
<div class="cn-laytit">
	<div class="title" style="background:url(data/cat_ico/) 0 center no-repeat; background-size:20px 20px">
		<h3 class="floor_h1"></h3>
	</div>
	
	<div class="link link1">
				<a title="" target="_blank" href="category.php?id=1">更多....</a>
	</div>
</div>
<div class="cn-fruit cn-fruit-1">
  <div class="banner">
        		<div class="ban">
		  <a href="affiche.php?ad_id=4&uri=" target="_blank"><img data-original="data/afficheimg/1498881963962388821.jpg" src="themes/huazhuangpin/images/spacer.gif" class="loading" height="460" width="360"></a>
		</div>
      </div>
  <div class="goods">
    <ul>
        </ul>
  </div>
  
  <div class="hot_goods">
  	<dl class="hot_sale">
		<dt>热门畅销</dt>
		<dd>
			<ul>
							</ul>
		</dd>
	</dl>
	<dl class="brands">
           
	</dl>
  
  </div>
  
        		<div class="cat_bottom_ad">
		  <a href="affiche.php?ad_id=29&uri=" target="_blank"><img data-original="data/afficheimg/1499061243666672507.jpg" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a>
		</div>
      
</div>
<div class="cn-laytit">
	<div class="title" style="background:url(data/cat_ico/) 0 center no-repeat; background-size:20px 20px">
		<h3 class="floor_h2"></h3>
	</div>
	
	<div class="link link2">
				<a title="" target="_blank" href="category.php?id=2">更多....</a>
	</div>
</div>
<div class="cn-fruit cn-fruit-2">
  <div class="banner">
        		<div class="ban">
		  <a href="affiche.php?ad_id=5&uri=" target="_blank"><img data-original="data/afficheimg/1498888235874412195.jpg" src="themes/huazhuangpin/images/spacer.gif" class="loading" height="460" width="360"></a>
		</div>
      </div>
  <div class="goods">
    <ul>
        </ul>
  </div>
  
  <div class="hot_goods">
  	<dl class="hot_sale">
		<dt>热门畅销</dt>
		<dd>
			<ul>
							</ul>
		</dd>
	</dl>
	<dl class="brands">
           
	</dl>
  
  </div>
  
        		<div class="cat_bottom_ad">
		  <a href="affiche.php?ad_id=30&uri=" target="_blank"><img data-original="data/afficheimg/1499061339072643854.jpg" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a>
		</div>
      
</div>
<div class="cn-laytit">
	<div class="title" style="background:url(data/cat_ico/) 0 center no-repeat; background-size:20px 20px">
		<h3 class="floor_h3"></h3>
	</div>
	
	<div class="link link3">
				<a title="" target="_blank" href="category.php?id=3">更多....</a>
	</div>
</div>
<div class="cn-fruit cn-fruit-3">
  <div class="banner">
        		<div class="ban">
		  <a href="affiche.php?ad_id=9&uri=" target="_blank"><img data-original="data/afficheimg/1491008645615387687.jpg" src="themes/huazhuangpin/images/spacer.gif" class="loading" height="460" width="360"></a>
		</div>
      </div>
  <div class="goods">
    <ul>
        </ul>
  </div>
  
  <div class="hot_goods">
  	<dl class="hot_sale">
		<dt>热门畅销</dt>
		<dd>
			<ul>
							</ul>
		</dd>
	</dl>
	<dl class="brands">
           
	</dl>
  
  </div>
  
        		<div class="cat_bottom_ad">
		  <a href="affiche.php?ad_id=31&uri=" target="_blank"><img data-original="data/afficheimg/1499061366466159762.jpg" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a>
		</div>
      
</div>
<div class="cn-laytit">
	<div class="title" style="background:url(data/cat_ico/) 0 center no-repeat; background-size:20px 20px">
		<h3 class="floor_h4"></h3>
	</div>
	
	<div class="link link4">
				<a title="" target="_blank" href="category.php?id=4">更多....</a>
	</div>
</div>
<div class="cn-fruit cn-fruit-4">
  <div class="banner">
        		<div class="ban">
		  <a href="affiche.php?ad_id=15&uri=" target="_blank"><img data-original="data/afficheimg/1498972223237950009.jpg" src="themes/huazhuangpin/images/spacer.gif" class="loading" height="460" width="360"></a>
		</div>
      </div>
  <div class="goods">
    <ul>
        </ul>
  </div>
  
  <div class="hot_goods">
  	<dl class="hot_sale">
		<dt>热门畅销</dt>
		<dd>
			<ul>
							</ul>
		</dd>
	</dl>
	<dl class="brands">
           
	</dl>
  
  </div>
  
        		<div class="cat_bottom_ad">
		  <a href="affiche.php?ad_id=32&uri=" target="_blank"><img data-original="data/afficheimg/1499061398834412808.jpg" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a>
		</div>
      
</div>
<div class="cn-laytit">
	<div class="title" style="background:url(data/cat_ico/) 0 center no-repeat; background-size:20px 20px">
		<h3 class="floor_h5"></h3>
	</div>
	
	<div class="link link5">
				<a title="" target="_blank" href="category.php?id=5">更多....</a>
	</div>
</div>
<div class="cn-fruit cn-fruit-5">
  <div class="banner">
        		<div class="ban">
		  <a href="affiche.php?ad_id=23&uri=" target="_blank"><img data-original="data/afficheimg/1498972830927255513.jpg" src="themes/huazhuangpin/images/spacer.gif" class="loading" height="460" width="360"></a>
		</div>
      </div>
  <div class="goods">
    <ul>
        </ul>
  </div>
  
  <div class="hot_goods">
  	<dl class="hot_sale">
		<dt>热门畅销</dt>
		<dd>
			<ul>
							</ul>
		</dd>
	</dl>
	<dl class="brands">
           
	</dl>
  
  </div>
  
        		<div class="cat_bottom_ad">
		  <a href="affiche.php?ad_id=33&uri=" target="_blank"><img data-original="data/afficheimg/1499061429628911664.jpg" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a>
		</div>
      
</div>
 
</div>
	
<div class="w-main panel-wrapper">
  <div class="title_list">
    <span class="tl_one">最新资讯</span>
    <a class="more" href="article_cat.php?id=16">查看更多&gt;</a></div>
  <div class="list2">
      <div class="list_son">
      <div class="list_son_img">
        <a href="article.php?id=146">
	  <img data-original="data/article/1531874953610745690.jpg" src="themes/huazhuangpin/images/spacer.gif" alt="杏福梅林" title="杏福梅林" class="loading">
        </a>
      </div>
      <div class="list_son_desc">
        <p class="title">杏福梅林</p>
        <p class="time">2018-07-18</p>
        <p class="desc">[摘要]杏福梅林</p></div>
    </div>
      <div class="list_son">
      <div class="list_son_img">
        <a href="article.php?id=143">
	  <img data-original="data/article/1491842962102738778.jpg" src="themes/huazhuangpin/images/spacer.gif" alt="Gellé Frères（婕珞芙）特邀参展2015巴黎国际美容博览会" title="Gellé Frères（婕珞芙）特邀参展2015巴黎国际美容博览会" class="loading">
        </a>
      </div>
      <div class="list_son_desc">
        <p class="title">Gellé Frères（婕珞芙）特邀参展2015巴黎国际美容博览会</p>
        <p class="time">2017-04-11</p>
        <p class="desc">[摘要]Gellé Frères（婕珞芙）特邀参展2015巴黎国际美容博览会</p></div>
    </div>
      <div class="list_son">
      <div class="list_son_img">
        <a href="article.php?id=142">
	  <img data-original="data/article/1491842903754131447.jpg" src="themes/huazhuangpin/images/spacer.gif" alt="法国GELLÉ FRÈRES婕珞芙“谜样重生”巴黎发布会" title="法国GELLÉ FRÈRES婕珞芙“谜样重生”巴黎发布会" class="loading">
        </a>
      </div>
      <div class="list_son_desc">
        <p class="title">法国GELLÉ FRÈRES婕珞芙“谜样重生”巴黎发布会</p>
        <p class="time">2017-04-11</p>
        <p class="desc">[摘要]法国GELLÉ FRÈRES婕珞芙“谜样重生”巴黎发布会</p></div>
    </div>
      <div class="list_son" style="margin-right:0;">
      <div class="list_son_img">
        <a href="article.php?id=141">
	  <img data-original="data/article/1491842847840276283.jpg" src="themes/huazhuangpin/images/spacer.gif" alt="中国明星陈妍希、张慧雯助阵，百年历史的美妆品牌" title="中国明星陈妍希、张慧雯助阵，百年历史的美妆品牌" class="loading">
        </a>
      </div>
      <div class="list_son_desc">
        <p class="title">中国明星陈妍希、张慧雯助阵，百年历史的美妆品牌</p>
        <p class="time">2017-04-11</p>
        <p class="desc">[摘要]中国明星陈妍希、张慧雯助阵，百年历史的美妆品牌</p></div>
    </div>
    </div>
</div>
	
<div class="site-footer">
  <div class="">
  	<div class="footer-links-w">
		<div class="footer-links clearfix"> 
				  				  <dl class="col-links col-links-first">
					<dt>新手上路 </dt>
														<dd><a rel="nofollow" href="article.php?id=9" target="_blank">售后流程</a></dd>
																		<dd><a rel="nofollow" href="article.php?id=10" target="_blank">购物流程</a></dd>
																		<dd><a rel="nofollow" href="article.php?id=11" target="_blank">订购方式</a></dd>
													  </dl>
				  				  <dl class="col-links ">
					<dt>配送方式 </dt>
														<dd><a rel="nofollow" href="article.php?id=15" target="_blank">货到付款区域</a></dd>
																		<dd><a rel="nofollow" href="article.php?id=16" target="_blank">配送支付查询</a></dd>
																		<dd><a rel="nofollow" href="article.php?id=17" target="_blank">支付方式说明</a></dd>
													  </dl>
				  				  <dl class="col-links ">
					<dt>购物指南</dt>
														<dd><a rel="nofollow" href="article.php?id=20" target="_blank">订购流程</a></dd>
																		<dd><a rel="nofollow" href="article.php?id=46" target="_blank">注册新会员</a></dd>
																		<dd><a rel="nofollow" href="article.php?id=68" target="_blank">联系客服</a></dd>
													  </dl>
				  				  <dl class="col-links ">
					<dt>售后服务</dt>
														<dd><a rel="nofollow" href="article.php?id=21" target="_blank">退换货原则</a></dd>
																		<dd><a rel="nofollow" href="article.php?id=22" target="_blank">售后服务保证</a></dd>
																		<dd><a rel="nofollow" href="article.php?id=42" target="_blank">换货流程</a></dd>
																		<dd><a rel="nofollow" href="article.php?id=73" target="_blank">退款说明</a></dd>
													  </dl>
				  				  <dl class="col-links ">
					<dt>关于我们 </dt>
														<dd><a rel="nofollow" href="article.php?id=26" target="_blank">投诉与建议</a></dd>
													  </dl>
				  				  <dl class="col-links">
					<dt>微信关注我们</dt>
					  						<dd><img src="data/afficheimg/1499034813928288732.jpg" width=85 height=85><br>微信扫一扫</dd>
					  				   
					
				  </dl>
				  
				  <dl class="col-contact">
					<dd class="phone">15916852053</dd>
									  	<dd class="email">kefu@0769web.net</dd>
				  									  	<dd class="address">河北省邯郸市</dd>
				  					
				  </dl>
		</div>
	</div>
	
	
	
	
    <div class="footer-info clearfix" >
      <div class="info-text">
      <p>
      &copy; 2012-2018 杏福硒峪 版权所有，并保留所有权利。 
            <a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备12061602号</a>
                  </p>
        <p class="nav_bottom">
                    <a href="article.php?id=1"   class="noborder" >免责条款</a>
               <a href="article.php?id=2"  >隐私保护</a>
               <a href="article.php?id=3"  >咨询热点</a>
               <a href="article.php?id=4"  >联系我们</a>
               <a href="article.php?id=5"  >公司简介</a>
               <a href="wholesale.php"  >批发方案</a>
               <a href="myship.php"  >配送方式</a>
                     </p>
       
        <p>友情链接：
       <a href="http://www.test666.com" target="_blank" title="耿耿有付">耿耿有付</a>
            </p>
                    </div>      
    </div>    
  </div>
  
  <div class="footer_service">
    <div class="container wrapper">
      <ul>
        <li class="s1">
          <b>精选大牌</b>
          <span>优质品牌 品质呈现</span></li>
        <li class="s2">
          <b>正品保证</b>
          <span>品牌授权 买得放心</span></li>
        <li class="s3">
          <b>闪电发货</b>
          <span>极速发货 快速到家</span></li>
        <li class="s4">
          <b>售后无忧</b>
          <span>无条件 退换货</span></li>
      </ul>
    </div>
  </div>
  
  
</div>
<link href="themes/huazhuangpin/right_bar.css" rel="stylesheet" type="text/css" />
<div class="right-sidebar-con">
	<div class="right-sidebar-main">
        <div class="right-sidebar-panel">
            <div id="quick-links" class="quick-links">
            	<ul>
                    <li class="quick-area quick-login">
                        <a href="javascript:;" class="quick-links-a"><i class="setting"></i></a>
                        <div class="sidebar-user quick-sidebar">
                        	<i class="arrow-right"></i>
                            <div class="sidebar-user-info">
                            	                                <div class="user-have-login">
                                	<div class="user-pic">
                                        <div class="user-pic-mask"></div>
                                        <img src="themes/huazhuangpin/images/people.gif" />
                                    </div>
                                    <div class="user-info">
                                    	<p>用户名：useradmin</p>
                                    </div>
                                </div>
                                <p class="mt10">
                                	<a class="btn order-btn" href="user.php?act=order_list">订单中心</a>
									<a class="btn account-btn" href="user.php?act=account_detail">帐户中心</a>
                                </p>
                                                            </div>
                        </div>
                    </li>
                    <li class="sidebar-tabs">
                        <div class="cart-list quick-links-a" id="collectBox">
                            <i class="cart"></i>
                            <div class="span">购物车</div>
                            <span class="ECS_CARTINFO" id="ECS_CARTINFO">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</span>
                        </div>
                    </li>
                    <li class="sidebar-tabs">
                        <a href="javascript:void(0);" class="mpbtn_history quick-links-a"><i class="history"></i></a>
                        <div class="popup">
                            <font id="mpbtn_histroy">浏览历史</font>
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                    <li id="collectGoods">
                        <a href="user.php?act=collection_list" target="_blank" class="mpbtn_collect quick-links-a"><i class="collect"></i></a>
                        <div class="popup">
                            我的收藏
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                    <li id="collectGoods">
                        <a href="user.php?act=account_log" target="_blank" class="mpbtn_collect quick-links-a"><i class="account"></i></a>
                        <div class="popup">
                            我的资产
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="quick-toggle">
            	<ul>
                    <li class="quick-area">
                    	<a class="quick-links-a" href="javascript:;"><i class="customer-service"></i></a>
                        <div class="sidebar-service quick-sidebar">
                        	<i class="arrow-right"></i>
												<div class="customer-service">
				    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2897483365&site=qq&menu=yes" alt="点击这里给我发消息" title="点击这里给我发消息"><span class="icon-qq"></span>QQ客服</a>
				</div>
																				<div class="customer-service">
				    <a target="_blank" href="http://amos1.taobao.com/msg.ww?v=2&uid=%E6%9D%8F%E7%A6%8F%E6%A2%85%E6%9E%97&s=2" alt="点击这里给我发消息" title="点击这里给我发消息"><span class="icon-ww"></span>旺旺客服</a>
				</div>
								                        </div>
                    </li>
                    <li class="quick-area">
                    	<a class="quick-links-a" href="javascript:;"><i class="qr-code"></i></a>
                        <div class="sidebar-code quick-sidebar">
                        	<i class="arrow-right"></i>
		              <img src="data/afficheimg/1499034813928288732.jpg" width="130">
		  		
                        </div>
                    </li>
                    <li class="returnTop">
                        <a href="javascript:;" class="return_top quick-links-a"><i class="top"></i></a>
                        <div class="popup">
                        	返回顶部
                        	<i class="arrow-right"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="">
        	
            
        	
        	<div id="ECS_CARTINFO_content" class="ECS_CARTINFO right-sidebar-panels">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
        	
            
        	<div class="right-sidebar-panels">
				<h3 class="sidebar-panel-header">
                	<a href="javascript:;" class="title"><i></i><em class="title">我的足迹</em></a>
                    <span class="close-panel"></span>
                </h3>
          		<div class="sidebar-panel-main">
            		<div class="sidebar-panel-content">
              			<div class="history-panel">
              				<ul>
                				554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca                			</ul>
     		  			</div>
            		</div>
          		</div>
        	</div>
        	
        </div>
    </div>
</div>
<script type="text/javascript">	
$(window).scroll(function(){ 
	if($(this).scrollTop() > $(window).height() ){ 
		$('.returnTop').show();
	}else{ 
		$('.returnTop').hide();
	} 
}) 
$('.cart-panel-content').height($(window).height()-90);
$('.bonus-panel-content').height($(window).height()-40);
$(".returnTop").click(function(){
	$('body,html').animate({scrollTop:0},800);
	return false;
});
$('.quick-area').hover(function(){
	$(this).find('.quick-sidebar').toggle();
})
//移动图标出现文字
$(".right-sidebar-panel li").mouseenter(function(){
	$(this).children(".popup").stop().animate({left:-92,queue:true});
	$(this).children(".popup").css("visibility","visible");
	$(this).children(".ibar_login_box").css("display","block");
});
$(".right-sidebar-panel li").mouseleave(function(){
	$(this).children(".popup").css("visibility","hidden");
	$(this).children(".popup").stop().animate({left:-121,queue:true});
	$(this).children(".ibar_login_box").css("display","none");
});
//点击购物车、用户信息以及浏览历史事件
$('.sidebar-tabs').click(function(){
	if($('.right-sidebar-main').hasClass('right-sidebar-main-open')&&$(this).hasClass('current')){
		$('.right-sidebar-main').removeClass('right-sidebar-main-open');
		$(this).removeClass('current');
		$('.right-sidebar-panels').eq($(this).index()-1).removeClass('animate-in').addClass('animate-out').css('z-index',1);
		$('.cart-panel-content').height($(window).height()-90);
	}else{
		$(this).addClass('current').siblings('.sidebar-tabs').removeClass('current');
		$('.right-sidebar-main').addClass('right-sidebar-main-open');
		$('.right-sidebar-panels').eq($(this).index()-1).addClass('animate-in').removeClass('animate-out').css('z-index',2).siblings('.right-sidebar-panels').removeClass('animate-in').addClass('animate-out').css('z-index',1);
		$('.cart-panel-content').height($(window).height()-90);
	}
});
$(".right-sidebar-panels").on('click', '.close-panel', function () {
	$('.sidebar-tabs').removeClass('current');
	$('.right-sidebar-main').removeClass('right-sidebar-main-open');
	$('.right-sidebar-panels').removeClass('animate-out');
});
$(document).click(function(e){ 
	var target = $(e.target); 
	if(target.closest('.right-sidebar-con').length == 0){ 
		$('.right-sidebar-main').removeClass('right-sidebar-main-open');
		$('.sidebar-tabs').removeClass('current');
		$('.right-sidebar-panels').removeClass('animate-in').addClass('animate-out').css('z-index',1);
	} 
}) 
$('.pop-login').css('top',($(window).height()-$('.pop-login').height())/2);
$('.pop-close').click(function(){
	$('.pop-main,.pop-mask').hide();
	$('form[name="formLogin"]').find('.msg-wrap').css('visibility','hidden');
	$('.pop-login .item,.pop-login .item-detail').removeClass('item-error');
	$('.pop-login .text').val('');
})
$('.pop-login .item .text').focus(function(){
	$(this).addClass('')	
})
</script><script type="text/javascript">
$("img").lazyload({
	effect: "fadeIn",
	threshold: 100,
	failure_limit: 25,
	skip_invisible: false
});
</script>
<div class="add_ok" id="cart_show">
    <div class="tip">
        <i class="iconfont"></i>商品已成功加入购物车
    </div>
    <div class="go">
        <a href="javascript:easyDialog.close();" class="back">&lt;&lt;继续购物</a>
        <a href="flow.php" class="btn">去结算</a>
    </div>
</div>
</body>
</html>
