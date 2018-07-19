<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ectouch_css']; ?>" rel="stylesheet" type="text/css" />

 
<style>
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
 
<script type="text/javascript" src="js/magiczoom_plus.js" ></script>
<script type="text/javascript" src="js/common1.js">
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js')); ?>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.json.js"></script>
<script type="text/javascript">
function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}
</script>
<script language="javascript">
function shows_number(result)
{
     if(result.product_number !=undefined){
         document.getElementById('shows_number').innerHTML = result.product_number+'<?php if ($this->_var['goods']['measure_unit']): ?><?php echo $this->_var['goods']['measure_unit']; ?><?php else: ?>件<?php endif; ?>';
     }else{
         document.getElementById('shows_number').innerHTML = '无库存';
     }
}
//默认就显示第一个属性库存
function changeKucun()
{
var frm=document.forms['ECS_FORMBUY'];
spec_arr = getSelectedAttributes(frm);
    if(spec_arr==''){
	 var shows_kucun_number = document.getElementById('shows_number');
	 if (shows_kucun_number)
	 {
	   shows_kucun_number.innerHTML = '<?php echo $this->_var['goods']['goods_number']; ?><?php if ($this->_var['goods']['measure_unit']): ?><?php echo $this->_var['goods']['measure_unit']; ?><?php else: ?>件<?php endif; ?>';
	 }
    }else{
         Ajax.call('goods.php?act=get_products_info', 'id=' + spec_arr+ '&goods_id=' + goods_id, shows_number, 'GET', 'JSON');
    }
}
</script>
</head>
<body>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
  <h1> 商品详情 </h1>

</header>
 
<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/TouchSlide.js"></script>

<section class="goods_slider">

  <div id="slideBox" class="slideBox">
    <div class="scroller"> 
      <!--<div><a href="javascript:showPic()"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"  alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></div>-->
      <ul>
        <?php if ($this->_var['pictures']): ?> 
        <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
              <li><a href="javascript:showPic()"><img style="width:100%;height:auto;" src="<?php if ($this->_var['picture']['http']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['site_url']; ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" /></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
	      <li><a href="javascript:showPic()"><img alt="" src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['goods_img']; ?>"/></a></li>
        <?php endif; ?>
      </ul>
    </div>
    <div class="icons">
      <ul>
        <i class="current"></i> 
        <?php if ($this->_var['pictures']): ?> 
        <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
        <i class="current"></i> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?>
      </ul>
    </div>
  </div>
  <a class="<?php if ($this->_var['is_collect'] == 1): ?>collect1<?php else: ?>collect<?php endif; ?>" id="collect_box" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" style="display: inline;"><?php echo $this->_var['record_count']; ?></a>
</section>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#slideBox",
	titCell:".icons ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".scroller ul", 
	effect:"leftLoop", 
	autoPage:true,//自动分页
	autoPlay:true //自动播放wq
});

function showPic(){
	var data = document.getElementById("slideBox").className;
	var reCat = /ui-gallery/;
	//str1.indexOf(str2);
	if( reCat.test(data) ){
		document.getElementById("slideBox").className = 'slideBox';
	}else{
		document.getElementById("slideBox").className = 'slideBox ui-gallery';
		//document.getElementById("slideBox").style.position = 'fixed';
	}
}
</script> 
 

<section class="goodsInfo_title">
  <div class="blank1"></div>
  <ul>
    <li>
   <?php if ($this->_var['user_prices']): ?>
	<b class="price" ><?php echo $this->_var['user_prices']['price']; ?></b>
   <?php else: ?>
      <?php if ($this->_var['goods']['is_sale'] && $this->_var['goods']['sale_end_time']): ?>
	<b class="price"><?php echo $this->_var['goods']['sale_price_formated']; ?></b>
      <?php elseif ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
	<b class="price"><?php echo $this->_var['goods']['promote_price']; ?></b>
      <?php else: ?>
	<b class="price"><?php echo $this->_var['goods']['shop_price_formated']; ?></b>
      <?php endif; ?> 
   <?php endif; ?>
    <?php if ($this->_var['cfg']['show_marketprice']): ?><del><?php echo $this->_var['goods']['market_price']; ?></del><?php endif; ?>
    <p class="xiaoliang">已售出 <span class="sales"><?php echo $this->_var['sales_count']; ?></span> </p>
    </li>
  </ul>
  <div class="blank1"></div>
  <h1> <?php echo $this->_var['goods']['goods_style_name']; ?> </h1>
  <div class="blank1"></div>
    <div class="brief">
    <?php echo $this->_var['goods']['goods_brief']; ?> 
  </div>
  <div class="blank1"></div>
</section>
<div class="blank2"></div>
  
<?php if ($this->_var['goods']['is_sale'] && $this->_var['goods']['sale_end_time']): ?>
<section class="goodsInfo_time">
		<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.countdown-2.5.3.min.js"></script>
		  <ul>
		    <li><span class="time_title">限时秒杀</span> <span class="time"><time class="countdown" id="timedown"><font id="ps_labels_<?php echo $this->_var['goods']['goods_id']; ?>" over="false"></font><strong id="ps_cd_<?php echo $this->_var['goods']['goods_id']; ?>" class="c_price"><?php echo $this->_var['lang']['please_waiting']; ?></strong><font id="ps_labele_<?php echo $this->_var['goods']['goods_id']; ?>" over="false"></font></time></span> </li>
		  </ul>
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
				            	<?php if ($this->_var['goods']['sale_start_time'] > $this->_var['goods']['gmtime'] && $this->_var['goods']['sale_end_time'] > $this->_var['goods']['gmtime']): ?>
				   	           	var endDate = new Date(<?php echo $this->_var['goods']['sale_start_time']; ?>);
				   	           	var status = "0";
							$("#ps_labels_<?php echo $this->_var['goods']['goods_id']; ?>").html("还有");
							$("#ps_labele_<?php echo $this->_var['goods']['goods_id']; ?>").html("开始");
				            	<?php else: ?>
				   	           	var endDate = new Date(<?php echo $this->_var['goods']['sale_end_time']; ?>);
				   	           	var status = "1";
							$("#ps_labels_<?php echo $this->_var['goods']['goods_id']; ?>").html("还剩");
							$("#ps_labele_<?php echo $this->_var['goods']['goods_id']; ?>").html("结束");
				            	<?php endif; ?>
				            					   	           	//if(<?php echo $this->_var['goods']['goods_id']; ?> == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
							//alert(ts);
					   	           	$("#ps_cd_<?php echo $this->_var['goods']['goods_id']; ?>").html(ts.toString());
				   	    			//alert($("#ps_cd_<?php echo $this->_var['goods']['goods_id']; ?>").html());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中-&gt;秒杀中
				   	    				if(ts == "End"){
			Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_<?php echo $this->_var['goods']['goods_id']; ?>").html("");
					   	    				//$("#ps_label_<?php echo $this->_var['goods']['goods_id']; ?>").html("销售中");
					   	    				$("#zhuangtai<?php echo $this->_var['goods']['goods_id']; ?>").removeClass("weikaishi");
					   	    				$("#zhuangtai<?php echo $this->_var['goods']['goods_id']; ?>").addClass("jinxinzhong");
					   	    				$("#ps_labels_<?php echo $this->_var['goods']['goods_id']; ?>").attr("over", true);
					   	    				$("#ps_labele_<?php echo $this->_var['goods']['goods_id']; ?>").attr("over", true);
							$("#ps_labels_<?php echo $this->_var['goods']['goods_id']; ?>").html("还剩");
							$("#ps_labele_<?php echo $this->_var['goods']['goods_id']; ?>").html("结束");
					   	    				status = 1;
					   	    				endDate = new Date(<?php echo $this->_var['goods']['sale_end_time']; ?>);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//秒杀中-&gt;活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_<?php echo $this->_var['goods']['goods_id']; ?>").html("");
					   	    				$("#ps_labels_<?php echo $this->_var['goods']['goods_id']; ?>").html("活动已结束");
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				$("#nowbuy").html("活动已结束");
										$('#buy_btn').attr('href','javascript:void(0);');
					   	    				$("#ps_labele_<?php echo $this->_var['goods']['goods_id']; ?>").html("");
					   	    				$("#ps_labels_<?php echo $this->_var['goods']['goods_id']; ?>").attr("over", true);
					   	    				$("#ps_labele_<?php echo $this->_var['goods']['goods_id']; ?>").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
		</script>		
</section>
<div class="blank2"></div>
<?php elseif ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
<section class="goodsInfo_time">
  <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
  <ul>
    <li><span class="time_title">限时促销</span><span class="time"><time class="countdown" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></time></span> </li>
  </ul>
</section>
<div class="blank2"></div>
<?php endif; ?>

<?php if ($this->_var['volume_price_list'] || $this->_var['promotion']): ?>
<section class="goodsInfo_volume_price">
  <ul>
    <li class="goodsInfo_li_more"><span class="goodsInfo_li_title">商品购买优惠</span></li>
  </ul>
</section>
<section id="choose_good_volume_price" style="height:0; overflow:hidden;">
    <section class="good_volume_price">
        <h2>商品购买优惠活动</h2>
        <ul>
	<?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
            <li>
	        <i>惠</i>
                <p class="p_left">购买<?php echo $this->_var['price_list']['number']; ?><?php if ($this->_var['goods']['measure_unit']): ?><?php echo $this->_var['goods']['measure_unit']; ?><?php else: ?>件<?php endif; ?>&nbsp;&nbsp;优惠价：<?php echo $this->_var['price_list']['format_price']; ?>&nbsp;/&nbsp;<?php if ($this->_var['goods']['measure_unit']): ?><?php echo $this->_var['goods']['measure_unit']; ?><?php else: ?>件<?php endif; ?></p>
	    </li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <li>
                <i>惠</i>
                <p class="p_left"><?php echo $this->_var['item']['act_name']; ?></p>
	    </li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </section>
    <div class="goods_shut"><a href="javascript:void(0)" id="close_choose_good_volume_price" class="shut" style=" color:#FFF;font-size:18px;">确定</a></div>
</section>
<?php endif; ?>

<section class="goodsInfo_user_service">
  <ul>
    <li class="goodsInfo_li_more"><span class="goodsInfo_li_title">会员优惠</span></li>
  </ul>
</section>
<section id="choose_good_user" style="height:0; overflow:hidden;">
    <section class="good_user_service">
        <h2>会员享受优惠价格</h2>
        <ul>
	<?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
            <li>
                <p class="p_left"><?php echo $this->_var['rank_price']['rank_name']; ?>：<?php echo $this->_var['rank_price']['price']; ?></p>
	    </li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<?php if ($this->_var['cfg']['use_integral']): ?>
            <li>
                <p class="p_left"><?php echo $this->_var['lang']['goods_integral']; ?><?php echo $this->_var['goods']['integral']; ?><?php echo $this->_var['points_name']; ?></p>
	    </li>
	<?php endif; ?>
	<?php if ($this->_var['goods']['give_integral'] > 0): ?>
            <li>
                <p class="p_left"><?php echo $this->_var['lang']['goods_give_integral']; ?><?php echo $this->_var['goods']['give_integral']; ?><?php echo $this->_var['points_name']; ?></p>
	    </li>
	<?php endif; ?>
	<?php if ($this->_var['goods']['bonus_money']): ?>
            <li>
                <p class="p_left"><?php echo $this->_var['lang']['goods_bonus']; ?><?php echo $this->_var['goods']['bonus_money']; ?></p>
	    </li>
	<?php endif; ?>
        </ul>
    </section>
    <div class="goods_shut"><a href="javascript:void(0)" id="close_choose_good_user_service" class="shut" style=" color:#FFF;font-size:18px;">确定</a></div>
</section>

<section class="goodsInfo_canshu">
  <ul>
    <li class="goodsInfo_li_more"><span class="goodsInfo_li_title">商品参数</span></li>
  </ul>
</section>
<section id="choose_good_canshu" style="height:0; overflow:hidden;">
    <section class="good_canshu">
        <h2>商品详细参数</h2>
        <ul>
            <li>
                <p class="p_left">商品名称：</p><p class="p_right"><?php echo $this->_var['goods']['goods_style_name']; ?></p>
	    </li>
	    <?php if ($this->_var['goods']['goods_sn']): ?>
            <li>
                <p class="p_left">商品编号：</p><p class="p_right"><?php echo $this->_var['goods']['goods_sn']; ?></p>
	    </li>
	    <?php endif; ?>
	    <?php if ($this->_var['goods']['goods_brand']): ?>
            <li>
                <p class="p_left">商品品牌：</p><p class="p_right"><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></p>
	    </li>
	    <?php endif; ?>
	    <?php if ($this->_var['goods']['add_time']): ?>
            <li>
                <p class="p_left">上架时间：</p><p class="p_right"><?php echo $this->_var['goods']['add_time']; ?></p>
	    </li>
	    <?php endif; ?>
	    <?php if ($this->_var['goods']['goods_weight']): ?>
            <li>
                <p class="p_left">商品重量：</p><p class="p_right"><?php echo $this->_var['goods']['goods_weight']; ?></p>
	    </li>
	    <?php endif; ?>
	    <?php if ($this->_var['properties']): ?>
	      <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
	        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
		    <li>
			<p class="p_left"><?php echo htmlspecialchars($this->_var['property']['name']); ?>：</p><p class="p_right"><?php echo $this->_var['property']['value']; ?></p>
		    </li>
	        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	    <?php endif; ?>
        </ul>
    </section>
    <div class="goods_shut"><a href="javascript:void(0)" id="close_choose_canshu" class="shut" style=" color:#FFF;font-size:18px;">确定</a></div>
</section>





<div class="wrap">
  <section class="goodsBuy">
    <?php if ($this->_var['specification']): ?>
    <section class="goodsInfo_buyinfo" onclick="choose_attr(0)">
      <ul>
        <li class="goodsInfo_li_more"><span class="goodsInfo_li_title">请选择&nbsp;&nbsp;&nbsp;&nbsp;<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['spec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['spec']['iteration']++;
?><?php if ($this->_foreach['spec']['iteration'] > 1): ?> / <?php endif; ?><?php echo $this->_var['spec']['name']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></span></li>
      </ul>
    </section>
    <?php endif; ?>
    <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
	<section class="f_block" id="choose_attr" style="height:0; overflow:hidden;">
	<?php echo $this->fetch('library/goods_choose_attr.lbi'); ?>
	</section>
    </form>
  </section>
</div>

<script type="text/javascript">
//介绍 评价 咨询切换
var tab_now = 1;
function tab(id){
	document.getElementById('tabs' + tab_now).className = document.getElementById('tabs' + tab_now).className.replace('current', '');
	document.getElementById('tabs' + id).className = document.getElementById('tabs' + id).className.replace('', 'current');

	tab_now = id;
	if (id == 1) {
		document.getElementById('tab1').className = '';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 2) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = '';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 3) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = '';
	}
}
</script> 


<section class="s-detail">
  <header>
    <ul style="position: static;" id="detail_nav">
      <li id="tabs1" onClick="tab(1)" class="current"> 详情 </li>
      <li id="tabs2" onClick="tab(2)" class=""> 评价 <span class="review-count">(<?php echo $this->_var['goods']['comment_count']; ?>)</span> </li>
      <li id="tabs3" onClick="tab(3)" class=""> 热销 </li>
    </ul>
  </header>
  <div id="tab1" class="">
<div class="spxq_main">
<style>
.spxq_main table {
    width: 100%;
}
.spxq_main table td {
    border: 1px solid #e5e5e5;
    padding: 5px 10px;
    background-color: #fff;
}
.spxq_main table td.th {
    background-color: #f5f5f5;
    font-weight: bold;
    text-align: right;
    width: 70px;
}
.spxq_main table td strong {
    font-weight: 400;
}
.spxq_main table td div, .spxq_main table td span {
    display: block;
    margin-bottom: 4px;
}
</style>
</div>
    <div class="desc wrap">
      <div class="blank2"></div>
	  
	  <?php if ($this->_var['goods']['mobile_desc']): ?>
		<?php echo $this->_var['goods']['mobile_desc']; ?>
	  <?php else: ?>
		<?php echo $this->_var['goods']['goods_desc']; ?>
	  <?php endif; ?>
    </div>
  </div>
  <div id="tab2" class="hidden">
    <div class="wrap">
      <div class="blank2"></div>
      <?php echo $this->fetch('library/comments.lbi'); ?> </div>
  </div>
  <div id="tab3" class="hidden">
    <div class="wrap">
      <ul class="m-recommend ">
        <div class="blank2"></div>
        <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');$this->_foreach['related_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['related_goods']['total'] > 0):
    foreach ($_from AS $this->_var['releated_goods_data']):
        $this->_foreach['related_goods']['iteration']++;
?> 
        <li class="flex_in  "   <?php if (($this->_foreach['related_goods']['iteration'] - 1) % 2 == 1): ?> style="float:right" <?php endif; ?> > <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>">
        <div class="summary radius5"> <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt=""/>
          <div class="price"> 
            
            <?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?> 
            <?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?> 
            <?php else: ?> 
            <?php echo $this->_var['releated_goods_data']['shop_price']; ?> 
            <?php endif; ?> 
            
          </div>
        </div>
        <?php if ($this->_var['goods']['goods_comment']): ?>
        <div class="reviews"> 
          <?php $_from = $this->_var['goods']['goods_comment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['comment'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comment']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['comment']['iteration']++;
?> 
          <?php if ($this->_foreach['comment']['iteration'] < 4): ?>
          <blockquote> <span class="user"><?php if ($this->_var['comment']['username']): ?><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></span> <?php echo $this->_var['comment']['content']; ?> </blockquote>
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </div>
        <?php endif; ?> 
        </a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>
</section>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
 


<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;

onload = function(){
  changePrice();
  changeKucun();//这里是添加的
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>



<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>

  wx.config({
    debug: false,
    appId: '<?php echo $this->_var['signPackage']['appId']; ?>',
    timestamp: <?php echo $this->_var['signPackage']['timestamp']; ?>,
    nonceStr: '<?php echo $this->_var['signPackage']['nonceStr']; ?>',
    signature: '<?php echo $this->_var['signPackage']['signature']; ?>',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage' 
    ]
  });
 wx.ready(function () {
	//青蜂网络监听“分享给朋友”
    wx.onMenuShareAppMessage({
      title: '<?php echo $this->_var['goods']['goods_style_name']; ?>',
      desc: '<?php echo $this->_var['goods']['goods_style_name']; ?>',
      link: '<?php echo $this->_var['url']; ?>',
      imgUrl: '<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['goods_thumb']; ?>',
      trigger: function (res) {
		
		<?php if ($this->_var['url']): ?>
        alert('恭喜！分享可以获取提成哦！');
		<?php else: ?>
		alert('糟糕，需要分销商登录才能获得提成哦！');
		<?php endif; ?>
		
      },
      success: function (res) {
		<?php if ($this->_var['dourl']): ?>
        window.location.href="<?php echo $this->_var['dourl']; ?>&type=1"; 
		<?php endif; ?>
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
      title: '<?php echo $this->_var['goods']['goods_style_name']; ?>',
      desc: '<?php echo $this->_var['goods']['goods_style_name']; ?>',
      link: '<?php echo $this->_var['url']; ?>',
      imgUrl: '<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['goods_thumb']; ?>',
      trigger: function (res) {
			
        <?php if ($this->_var['url']): ?>
			alert('恭喜！分享可以获取提成哦！');
		<?php else: ?>
			alert('糟糕，需要分销商登录才能获得提成哦！');
		<?php endif; ?>
      },
      success: function (res) {
       	<?php if ($this->_var['dourl']): ?>
        window.location.href="<?php echo $this->_var['dourl']; ?>&type=2"; 
		<?php endif; ?>
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
<section class="page_mask" style="display: none;"></section>
<section class="mdetail_bottom">
    <section class="collect bdbox">
        <a href="index.php"><img src="themes/huazhuangpin/images/b2.png" width="50" height="50"></a>
    </section>
    <section class="cart bdbox">
        <a href="flow.php"><img src="themes/huazhuangpin/images/b1.png" width="50" height="50"></a>
    </section>
    <section class="actions bdbox clearfix">
        <a id="addcartButton" onclick="choose_attr(0)" class="btn-popupSKU-addcart j-openPopupSKU" href="javascript:;">加入购物车</a>
        <a id="buyButton" onclick="choose_attr(1)" class="btn-popupSKU-buynow j-openPopupSKU" href="javascript:;">立刻购买</a>
    </section>
</section>
<script>
function choose_attr(num){
	document.body.style.overflow='hidden';
	$("#choose_attr").animate({height:'80%'},[10000]);

		var total=0,h=$(window).height(),
        top =$('.f_title_attr').height()||0,
		bottom =$('#choose_attr .f_foot').height()||0,
        con = $('.f_content_attr');
		total = 0.8*h;
		con.height(total-top-bottom+'px');
	$(".page_mask").show();
        if(num == 0){
            var actionForm = document.getElementById('ECS_FORMBUY');  
            actionForm.action = "javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>),close_choose_attr()";
        }
        if(num == 1){
            var actionForm = document.getElementById('ECS_FORMBUY');  
            actionForm.action = "javascript:addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>),close_choose_attr()";
        }

}
function close_choose_attr(){	
document.body.style.overflow='';
	$(".page_mask").hide();	
	$('#choose_attr').animate({height:'0'},[10000]);
}
</script>

<?php if ($this->_var['qrcodeurl']): ?>
<script type="text/javascript">
function hiddenweixin(){
	document.getElementById("weixin_gz").style.display='none';
}
</script>
<div style="position:relative;position:absolute;position:fixed;bottom:0px;display:block;" id="weixin_gz" class="weixingz-con">
  <div class="weixin_gz">
    <div class="weixingz-logo">
    </div>
    <div class="alogo">
      <p class="client-name">
        关注公众号即送购物红包哦！
      </p>
      <p class="client-logon">
      </p>
    </div>
    <div class="open_now">
      <a href="<?php echo $this->_var['qrcodeurl']; ?>">
        <span class="open_btn">
          立即关注
        </span>
      </a>
    </div>
    <div class="close-btn-con close-btn">
      <span class="close-btn-icon" id="weixin_close" onclick="hiddenweixin();">
      </span>
    </div>
  </div>
</div>
<?php endif; ?>
<script type="text/javascript">
$('.goodsInfo_volume_price').click(function(){
	$("#choose_good_volume_price").animate({height:'80%'},[10000]);
	$(".page_mask").show();
});
$('#close_choose_good_volume_price').click(function(){
	$(".page_mask").hide();
	$('#choose_good_volume_price').animate({height:'0'},[10000]);
});

$('.goodsInfo_user_service').click(function(){
	$("#choose_good_user").animate({height:'80%'},[10000]);
	$(".page_mask").show();
});
$('#close_choose_good_user_service').click(function(){
	$(".page_mask").hide();
	$('#choose_good_user').animate({height:'0'},[10000]);
});

$('.goodsInfo_canshu').click(function(){
	$("#choose_good_canshu").animate({height:'80%'},[10000]);
	$(".page_mask").show();
});
$('#close_choose_canshu').click(function(){
	$(".page_mask").hide();
	$('#choose_good_canshu').animate({height:'0'},[10000]);
});
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'transportjq.js,utils.js')); ?>
</body>
</html>