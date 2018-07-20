<?php exit;?>a:3:{s:8:"template";a:10:{i:0;s:71:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/index.dwt";i:1;s:85:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/ad_position.lbi";i:2;s:86:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/new_articles.lbi";i:3;s:93:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/recommend_promotion.lbi";i:4;s:83:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/group_buy.lbi";i:5;s:88:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/recommend_best.lbi";i:6;s:87:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/recommend_new.lbi";i:7;s:87:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/recommend_hot.lbi";i:8;s:83:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/cat_goods.lbi";i:9;s:85:"D:/phpStudy/PHPTutorial/WWW/xinshu/mobile/themes/huazhuangpin/library/page_footer.lbi";}s:7:"expires";i:1532068107;s:8:"maketime";i:1532066307;}<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>杏树商城</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/huazhuangpin/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/huazhuangpin/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/huazhuangpin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/huazhuangpin/js/TouchSlide.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/ectouch.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.superslide.2.1.1.js"></script>
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
    var t = e * 1000 - (NowTime.getTime() + NowTime.getTimezoneOffset() * 60 *1000);
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
    return '<em>'+ d + '</em>天' + '<em>' + h + '</em>时<em>' + m + '</em>分<em>' + s + '</em>秒';
  }
  function _COMMON_UNIX_TIME() {
    limitCount.unixTime = 0;
    setInterval(limitCount, 1000);
  }
  _COMMON_UNIX_TIME();
</script>
 
<style>
*{outline:0;-webkit-tap-highlight-color:transparent;-webkit-box-sizing:border-box;box-sizing:border-box}
.user_top_goods {
height: 5rem;
overflow: hidden; 
background:#ffbf6b;
position:relative
}
.user_top_goods dt {
float: left;
margin: 0.8rem 0.8rem 0;
text-align: center;
position: relative;
width: 3.7rem;
height: 3.7rem;
border-radius: 3.7rem;
padding:0.15rem; background:#FFFFFF
}
.user_top_goods dt img {
width: 3.7rem;
height:3.7rem;
border-radius: 3.7rem;
}
.guanzhu {
background-color: #ffbf6b;
}
.guanzhu {
color: #fff;
border: 0;
height: 2.5rem;
line-height: 2.5rem;
width: 100%;
-webkit-box-flex: 1;
display: block;
-webkit-user-select: none;
font-size: 0.9rem;
}
#cover2 {
    background-color: #333333;
    display: none;
    left: 0;
    opacity: 0.8;
    position: absolute;
    top: 0;
    z-index: 1000;
}
#share_weixin, #share_qq {
    right: 10px;
    top: 2px;
    width: 260px;
}
#share_weixin, #share_qq, #share_qr {
    display: none;
    position: fixed;
    z-index: 3000;
}
#share_weixin img, #share_qq img {
    height: 165px;
    width: 260px;
}
		.button_3 {
    background-color: #EEEEEE;
    border: 1px solid #666666;
    color: #666666;
    font-size: 16px;
    line-height: 20px;
    padding: 10px 0;
    text-align: center;
}
#share_weixin button, #share_qq button {
    margin-top: 25px;
    width: 100%;
}
</style>
 
</head>
<body>
<div id="page">
  <header id="header" >
    <div class="header_l"> <a class="ico_02" href="#menu"> 菜单栏 </a> </div>
    <h1> 杏树商城 </h1>
    <div class="header_r"> <a class="ico_01" href="flow.php"> 购物车 </a> </div>
  </header>
</div>
 
<div id="focus" class="focus region">
  <div class="hd">
    <ul>
    </ul>
  </div>
  <div class="bd">
    
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"1";s:3:"num";s:1:"4";}554fcae493e564ee0dc75bdf2ebf94ca
  </div>
  <div id="get_search_box" class="transparent">
    <div class="header-wrap"> <a href="javascript:void(0);" class="header-inp"> <i class="icon"></i> <span class="search-input" id="keyword" placeholder=""></span> </a> </div>
  </div>
</div>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#focus",
	titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".bd ul", 
	effect:"leftLoop", 
	autoPlay:true,//自动播放
	autoPage:true //自动分页
});
</script>
<div id="content">
  
  <div class="region row row_category">
    <ul class="flex flex-f-row">
            <li class="flex_in"> <a href="cat_all.php" title="全部分类"> <div class="CarouselImg"><img src="data/item_pic/1443584338752549142.png" /></div> </a>
        <p> 全部分类 </p>
      </li>
                  <li class="flex_in"> <a href="pre_sale.php" title="杏树认购"> <div class="CarouselImg"><img src="data/item_pic/1448075935109557161.png" /></div> </a>
        <p> 杏树认购 </p>
      </li>
                  <li class="flex_in"> <a href="user.php" title="个人中心"> <div class="CarouselImg"><img src="data/item_pic/1443584373727011961.png" /></div> </a>
        <p> 个人中心 </p>
      </li>
                  <li class="flex_in"> <a href="distribute.php" title="分销中心"> <div class="CarouselImg"><img src="data/item_pic/1443586488909704319.png" /></div> </a>
        <p> 分销中心 </p>
      </li>
            </ul><ul class="flex flex-f-row">
                  <li class="flex_in"> <a href="ectouch.php?act=contact" title="联系我们"> <div class="CarouselImg"><img src="data/item_pic/1443586300343329180.png" /></div> </a>
        <p> 联系我们 </p>
      </li>
                  <li class="flex_in"> <a href="group_buy.php" title="精品团购"> <div class="CarouselImg"><img src="data/item_pic/1443585779204202237.png" /></div> </a>
        <p> 精品团购 </p>
      </li>
                  <li class="flex_in"> <a href="exchange.php" title="积分商城"> <div class="CarouselImg"><img src="data/item_pic/1443586061863736586.png" /></div> </a>
        <p> 积分商城 </p>
      </li>
                  <li class="flex_in"> <a href="pre_spike.php" title="限时秒杀"> <div class="CarouselImg"><img src="data/item_pic/1443584408064043342.png" /></div> </a>
        <p> 限时秒杀 </p>
      </li>
                </ul>
  </div>
  
<div class="hao-gd-body fixed-Width">
    <div class="component-typehao-img-con">
        <img class="component-typehao-img" src="themes/huazhuangpin/images/rd_w.png" height="40" width="auto">
    </div>
    <div class="rollTextMenus">
    <ul>
    	 <li><a href="article.php?id=146">杏福梅林</a></li>
    	 <li><a href="article.php?id=143">Gellé Frères（婕珞芙...</a></li>
    	 <li><a href="article.php?id=142">法国GELLÉ FRÈRES婕珞...</a></li>
    	 <li><a href="article.php?id=141">中国明星陈妍希、张慧雯助阵，百年...</a></li>
    	 <li><a href="article.php?id=140">婕珞芙携手陈妍希、张慧雯点亮巴黎...</a></li>
    	 <li><a href="article.php?id=139">法国GELLé FRèRES婕珞...</a></li>
    	 <li><a href="article.php?id=138">精油+面膜，保湿新玩法！</a></li>
    	 <li><a href="article.php?id=137">亚洲人气女星唐嫣出任法国婕珞芙中...</a></li>
        </ul>
    </div>
</div>
<script type="text/javascript">
  $(".hao-gd-body").slide({mainCell:".rollTextMenus ul" , effect:"top", autoPlay:true, vis:1 , autoPage:true});
</script>
  
  
<div class="blank2"></div>
<div class="mainCon">
  <dl class="wholeTime">
     <dt class="wholePoint surper clearfix">
        <span class="san fl">特色市场</span>
     </dt>
     <dd>
     <div class="superBan clearfix">
       <div class="featurBan1 fl">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"2";s:3:"num";s:1:"2";}554fcae493e564ee0dc75bdf2ebf94ca
       </div>
       <div class="featurBan2 fl">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"3";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
       </div>
     </div>        
     </dd>
  </dl>
</div>
<div class="blank2"></div>
<div class="mainCon">
  <dl class="wholeTime">
    <dt class="wholePoint surper clearfix">
      <span class="san fl">热门市场</span>
    </dt>
    <dd>
      <div class="superBan brandWallBan clearfix">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"4";s:3:"num";s:1:"9";}554fcae493e564ee0dc75bdf2ebf94ca
      </div>
    </dd>
  </dl>
</div>
<div class="blank2"></div>
<section class="item_show_box1 box1 region" id="JS_limit_table">
    <h3>
      <a target="_top" href="search.php?intro=promotion">
        特价促销<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=132&u=257">
                <img src="/images/201807/thumb_img/132_thumb_G_1531875210507.jpg" alt="杏仁果酱" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>8.80</span> <a href="javascript:;" onclick="categoryaddToCart2(132)" class="catbuybtn"></a></span> 
								<p class="goods_tit">杏仁果酱</p>
            </div>
            <div class="timedjs">
	    <div class="JS_leaveTime" data-timeline="1532937600"><em>00</em>天<em>00</em>时<em>00</em>分<em>00</em>秒</div>
            </div>
        </div>
                     </div>
</section>
<div class="blank2"></div>
<div class="item_show_box2 box1 region" style="overflow:hidden">
    <h3>
      <a target="_top" href="group_buy.php">
        精品团购<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div id="picScrol5" class="picScrol5">
        <div class="bd">
            <ul>
                                <li><div class="groupimg"><a href="group_buy.php?act=view&amp;id=8"><img src="/images/201807/thumb_img/127_thumb_G_1531873402178.jpg" /></a></div>
		<div class="grouptit">高硒杏饮品</div>
		<div class="groupprice"><span class="last_price">￥<span>4.00</span></span><span class="zhekou">7.4折</span></div>
                </li>
                                        </div>
    </div>
</div>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="search.php?intro=best">
        精品推荐<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=127&u=257">
                <img src="/images/201807/thumb_img/127_thumb_G_1531873402178.jpg" alt="高硒杏饮品" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>4.50</span> <a href="javascript:;" onclick="categoryaddToCart2(127)" class="catbuybtn"></a></span> 
								<p class="goods_tit">高硒杏饮品</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=128&u=257">
                <img src="/images/201807/thumb_img/128_thumb_G_1531873698307.jpg" alt="杏满园饮品" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>4.50</span> <a href="javascript:;" onclick="categoryaddToCart2(128)" class="catbuybtn"></a></span> 
								<p class="goods_tit">杏满园饮品</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=129&u=257">
                <img src="/images/201807/thumb_img/129_thumb_G_1531873754135.jpg" alt="杏仁果酒" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>10.00</span> <a href="javascript:;" onclick="categoryaddToCart2(129)" class="catbuybtn"></a></span> 
								<p class="goods_tit">杏仁果酒</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=130&u=257">
                <img src="/images/201807/thumb_img/130_thumb_G_1531873807209.jpg" alt="杏仁粉" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>8.80</span> <a href="javascript:;" onclick="categoryaddToCart2(130)" class="catbuybtn"></a></span> 
								<p class="goods_tit">杏仁粉</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="search.php?intro=new">
        新品上市<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=127&u=257">
                <img src="/images/201807/thumb_img/127_thumb_G_1531873402178.jpg" alt="高硒杏饮品" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>4.50</span> <a href="javascript:;" onclick="categoryaddToCart2(127)" class="catbuybtn"></a></span> 
								<p class="goods_tit">高硒杏饮品</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=128&u=257">
                <img src="/images/201807/thumb_img/128_thumb_G_1531873698307.jpg" alt="杏满园饮品" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>4.50</span> <a href="javascript:;" onclick="categoryaddToCart2(128)" class="catbuybtn"></a></span> 
								<p class="goods_tit">杏满园饮品</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=129&u=257">
                <img src="/images/201807/thumb_img/129_thumb_G_1531873754135.jpg" alt="杏仁果酒" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>10.00</span> <a href="javascript:;" onclick="categoryaddToCart2(129)" class="catbuybtn"></a></span> 
								<p class="goods_tit">杏仁果酒</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=130&u=257">
                <img src="/images/201807/thumb_img/130_thumb_G_1531873807209.jpg" alt="杏仁粉" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>8.80</span> <a href="javascript:;" onclick="categoryaddToCart2(130)" class="catbuybtn"></a></span> 
								<p class="goods_tit">杏仁粉</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="search.php?intro=hot">
        热卖商品<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=127&u=257">
                <img src="/images/201807/thumb_img/127_thumb_G_1531873402178.jpg" alt="高硒杏饮品" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>4.50</span> <a href="javascript:;" onclick="categoryaddToCart2(127)" class="catbuybtn"></a></span> 
								<p class="goods_tit">高硒杏饮品</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=128&u=257">
                <img src="/images/201807/thumb_img/128_thumb_G_1531873698307.jpg" alt="杏满园饮品" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>4.50</span> <a href="javascript:;" onclick="categoryaddToCart2(128)" class="catbuybtn"></a></span> 
								<p class="goods_tit">杏满园饮品</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=129&u=257">
                <img src="/images/201807/thumb_img/129_thumb_G_1531873754135.jpg" alt="杏仁果酒" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>10.00</span> <a href="javascript:;" onclick="categoryaddToCart2(129)" class="catbuybtn"></a></span> 
								<p class="goods_tit">杏仁果酒</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=130&u=257">
                <img src="/images/201807/thumb_img/130_thumb_G_1531873807209.jpg" alt="杏仁粉" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>8.80</span> <a href="javascript:;" onclick="categoryaddToCart2(130)" class="catbuybtn"></a></span> 
								<p class="goods_tit">杏仁粉</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
</section>
<!--<div style="display:none;">-->
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=1">
        <span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
        <div class="flex flex-f-row">
            </div>
    <div class="item_tags clearfix">
            </div>
</section>
<!--</div>-->
</div>
<div class="blank2"></div>
<div class="mainCon">
	<div class="bottom_ad">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:2:"11";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
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
            <a href="./" class="global-nav__nav-link global-nav__nav-link-cur">
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
</script> 
<nav id="menu">
  <ul>
        <li> <a href="category.php?id=491"> 饮料系列 </a>
      <ul>
              </ul>
    </li>
        <li> <a href="category.php?id=492"> 保健品类 </a>
      <ul>
              </ul>
    </li>
        <li> <a href="category.php?id=493"> 家用系列 </a>
      <ul>
              </ul>
    </li>
      </ul>
</nav>
<div id="main-search" class="main-search">
<div class="hd"> <span class="ico_08 close"> 关闭 </span> </div>
<div class="bd">
  <div class="search_box">
    <form action="search.php" method="post" id="searchForm" name="searchForm">
      <div class="content">
        <input class="text" type="search" name="keywords" id="keywordBox" autofocus />
        <button class="ico_07" type="submit" value="搜 索" onclick="return check('keywordBox')"></button>
      </div>
    </form>
  </div>
</div>
</div>
<script type="text/javascript">
$(function() {
	$('nav#menu').mmenu();
	$('#get_search_box').click(function(){
		$(".mm-page").children('div').hide();
		$("#main-search").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
		//$('#keywordBox').focus();
	})
	$("#main-search .close").click(function(){
		$(".mm-page").children('div').show();
		$("#main-search").hide();
	})
});
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
    debug: false,
    appId: '111',
    timestamp: 1532066311,
    nonceStr: '9dmw9lgipLvFQJg4',
    signature: '51311ba58822e5e9357b8a19a0814532de08b1e3',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage' 
    ]
  });
 wx.ready(function () {
	//青蜂网络监听“分享给朋友”
    wx.onMenuShareAppMessage({
      title: '杏树商城',
      desc: '杏树商城',
      link: 'http://www.test666.com/mobile/index.php?u=257',
      imgUrl: '/mobile/home.jpg',
      trigger: function (res) {
		
		        alert('恭喜！分享可以获取提成哦！');
				
      },
      success: function (res) {
		        window.location.href="http://www.test666.com/mobile/re_url.php?user_id=257&type=1"; 
		      },
      cancel: function (res) {
        alert('很遗憾，您已取消分享');
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
	//分享到朋友圈青蜂网络
    wx.onMenuShareTimeline({
      title: '杏树商城',
      link: 'http://www.test666.com/mobile/index.php?u=257',
      imgUrl: '/mobile/home.jpg',
      trigger: function (res) {
			
        			alert('恭喜！分享可以获取提成哦！');
		      },
      success: function (res) {
       	        window.location.href="http://www.test666.com/mobile/re_url.php?user_id=257&type=2"; 
		      },
      cancel: function (res) {
         alert('很遗憾，您已取消分享');
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
});
</script>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.json.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/function.js"></script>
<script type="text/javascript" src="themes/huazhuangpin/js/transport.js"></script>
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'category.php?act=asynclist&category=&brand=&price_min=&price_max=&filter_attr=&page=&sort=&order='})
});
</script>
<script type="text/javascript">
var select_spe = "请选择商品属性";
var btn_buy = "购买";
var is_cancel = "取消";
</script>
</body>
</html>