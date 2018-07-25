<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="baidu-site-verification" content="ZDhT9AzCSE" />
<meta name="360-site-verification" content="b3ec2eb637fb409d5e19c32e51f8f1f8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/huazhuangpin/index.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

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
<?php echo $this->smarty_insert_scripts(array('files'=>'easydialog.min.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
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
	
	<?php echo $this->fetch('library/index_ad.lbi'); ?> 
	 
    </div>
</div>

<script type="text/javascript">
   var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
   var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
   var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
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
				<?php echo $this->fetch('library/recommend_new.lbi'); ?>					
			 </dl> 
			<dl class="promenutag" style="display:none">
				<?php echo $this->fetch('library/recommend_best.lbi'); ?>	   
			 </dl> 
			<dl class="promenutag"  style="display:none">
				<?php echo $this->fetch('library/recommend_hot.lbi'); ?>	
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
		<?php if ($this->_var['promotion_goods']): ?>
		<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
					<li>
				
					<a href="<?php echo $this->_var['goods']['url']; ?>"><img alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" src="<?php echo $this->_var['goods']['thumb']; ?>"></a>
					<div title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="name">
						<font color="red"></font><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo sub_str($this->_var['goods']['name'],12); ?></a>					</div>
					<div class="timedjs">
						<div class="JS_leaveTime" data-timeline="<?php echo $this->_var['goods']['end_date']; ?>"><em>00</em>天<em>00</em>时<em>00</em>分<em>00</em>秒</div>
					</div>

					<p class="price">
						<b class="tahoma"><?php echo $this->_var['goods']['promote_price']; ?></b><s><?php echo $this->_var['goods']['market_price']; ?></s></p>
					<p class="tescol-btn">
						<a href="<?php echo $this->_var['goods']['url']; ?>"><span class="t-btn">马上抢<i class="r-arrow"></i></span></a><span class="t-num">已售 <span class="color_pink"><?php echo $this->_var['goods']['sales_volume_base']; ?></span> 件</span></p>
				</li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php endif; ?>
		</ul>
	</div>
</div>




<div class="w-main panel-wrapper">

<?php $this->assign('articles',$this->_var['articles_16']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_16']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

</div>
	

<?php echo $this->fetch('library/page_footer.lbi'); ?>
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

<script type="text/javascript">
	$(function(){
		$(".cn-laytit:gt(2)").hide();
		$(".cn-fruit:gt(2)").hide();
	})
	
</script>
