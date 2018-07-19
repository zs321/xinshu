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
<script type="text/javascript" src="js/magiczoom_plus.js" ></script>
<script type="text/javascript" src="js/common_pre_sale.js">
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js')); ?>
<script type="text/javascript" src="themes/huazhuangpin/js/jquery.json.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.countdown-2.5.3.min.js"></script> 
<script type="text/javascript">
// 筛选商品属性
jQuery(function($) {
	$("#info2").click(function(){
		$('.goodsBuy .fields_sale').slideToggle("fast");
	});
})

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
         document.getElementById('shows_number').innerHTML = '<?php echo $this->_var['goods']['goods_number']; ?><?php if ($this->_var['goods']['measure_unit']): ?><?php echo $this->_var['goods']['measure_unit']; ?><?php else: ?>件<?php endif; ?>';
    }else{
         Ajax.call('goods.php?act=get_products_info', 'id=' + spec_arr+ '&goods_id=' + goods_id, shows_number, 'GET', 'JSON');
    }
}
</script>
</head>

<body>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" onClick="javascript:history.go(-1);"> 返回 </a> </div>
  <h1> 预售活动详情 </h1>
  <div class="header_r header_search"> <a class="ico_15" href="ectouch.php?act=share&content=<?php echo $this->_var['goods']['goods_name']; ?>&pic=<?php echo $this->_var['goods']['original_img']; ?>"> 分享 </a> </div>
</header>

 
<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/TouchSlide.js"></script>
<section class="goods_slider">
  <div class="blank2"></div>
  <div id="slideBox" class="slideBox">
    <div class="scroller"> 
      <!--<div><a href="javascript:showPic()"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"  alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></div>-->
      <ul>
        <li><a href="javascript:showPic()"><img style="width:auto;height:20rem;" src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['original_img']; ?>"/></a></li>
        <?php if ($this->_var['pictures']): ?> 
        <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
        <?php if ($this->_foreach['no']['iteration'] > 1): ?>
        <li><a href="javascript:showPic()"><img style="width:100%;max-height:20rem;" src="<?php echo $this->_var['site_url']; ?><?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>"/></a></li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
  <div class="blank2"></div>
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
 

<section class="goodsInfo">
  <a class="collect" id="collect_box" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" style="display: inline;"><?php echo $this->_var['record_count']; ?></a>
  <div class="title">
    <h1> <?php echo $this->_var['goods']['goods_style_name']; ?> </h1>
  </div>
  <ul>
   <?php if ($this->_var['cfg']['show_goodssn']): ?>
    <li><?php echo $this->_var['lang']['goods_sn']; ?><b><?php echo $this->_var['goods']['goods_sn']; ?> </b></li>
    <?php endif; ?>
    <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
    <li><?php echo $this->_var['lang']['goods_brand']; ?><a class="price" href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></li>
    <?php endif; ?>
    <?php if ($this->_var['cfg']['show_goodsweight']): ?>
    <li><?php echo $this->_var['lang']['goods_weight']; ?><b><?php echo $this->_var['goods']['goods_weight']; ?></b></li>
    <?php endif; ?> 
    <?php if ($this->_var['cfg']['show_goodsweight']): ?>
    <li><?php echo $this->_var['lang']['exchange_integral']; ?><b class="price"><?php echo $this->_var['goods']['exchange_integral']; ?></b></li>
    <?php endif; ?> 
  </ul>

</section>

<div class="wrap">
  <section class="goodsBuy radius5">
    <label class="info" id="info1" for="goodsBuy-open">
    <div><font id="ps_cd_<?php echo $this->_var['goods']['goods_id']; ?>"></font><font id="ps_label_<?php echo $this->_var['goods']['goods_id']; ?>" over="false"><?php echo $this->_var['goods']['cur_status']; ?></font><i></i></div>
    <div class="selected"> </div>
    </label>
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
				            	<?php if ($this->_var['goods']['status'] == 0): ?>
				   	           	var endDate = new Date(<?php echo $this->_var['goods']['local_start_date']; ?>);
				            	<?php else: ?>
				   	           	var endDate = new Date(<?php echo $this->_var['goods']['local_end_date']; ?>);
				            	<?php endif; ?>
				   	           	//if(<?php echo $this->_var['goods']['goods_id']; ?> == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "<?php echo $this->_var['goods']['status']; ?>";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_<?php echo $this->_var['goods']['goods_id']; ?>").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
										window.location.reload();
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_<?php echo $this->_var['goods']['goods_id']; ?>").html("");
					   	    				$("#ps_label_<?php echo $this->_var['goods']['goods_id']; ?>").html("后结束");
					   	    				$("#ps_label_<?php echo $this->_var['goods']['goods_id']; ?>").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(<?php echo $this->_var['goods']['local_end_date']; ?>);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_<?php echo $this->_var['goods']['goods_id']; ?>").html("");
					   	    				$("#ps_label_<?php echo $this->_var['goods']['goods_id']; ?>").html("活动已结束");
					   	    				$("#ps_label_<?php echo $this->_var['goods']['goods_id']; ?>").attr("over", true);
					   	    				$("#buybuttom").html("活动已结束");
										$("#buybuttom").removeAttr("onclick");
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
    <form action="javascript:;" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      <div class="fields" style="display: block;">
        <ul class="ul1" style="height:auto;">
          <li>预售价：<font id="ECS_GOODS_AMOUNT" class="price"><?php echo $this->_var['goods']['formated_cur_price']; ?></font></li>
          <li>定金：<font class="price"><?php echo $this->_var['goods']['formated_deposit']; ?></font></li>
          <li>预定人数：<font class="price"><?php echo $this->_var['goods']['valid_order']; ?></font> 人</li>
          <li>累计销量：<font class="price"><?php echo $this->_var['goods']['sale_count']; ?></font></li>
        </ul>
        <ul class="ul2">
               
              <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
		<li>
		<h2><?php echo $this->_var['spec']['name']; ?>：</h2>
                <div class="items"> 
                   
                  <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
                  <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?> 
                  
                  <input type="hidden" name="spec_attr_type" value="<?php echo $this->_var['spec_key']; ?>">
                  <ul class="ys_xuan" id="xuan_<?php echo $this->_var['spec_key']; ?>">
                    <div class="catt" id="catt_<?php echo $this->_var['spec_key']; ?>"> 
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?> 
                      <a href="javascript:" <?php if ($this->_var['value']['disabled']): ?>class="wuxiao"<?php else: ?><?php if ($this->_var['value']['selected_key_mb5'] == '1'): ?>class="cattsel"<?php endif; ?><?php endif; ?> onclick="<?php if ($this->_var['value']['disabled']): ?><?php else: ?>show_attr_status(this,<?php echo $this->_var['goods']['goods_id']; ?><?php if ($this->_var['attr_id']): ?>,<?php echo $this->_var['attr_id']; ?><?php endif; ?>);<?php if ($this->_var['spec_key'] == $this->_var['attr_id']): ?>get_gallery_attr(<?php echo $this->_var['id']; ?>, <?php echo $this->_var['value']['id']; ?>);<?php endif; ?><?php endif; ?>" name="<?php echo $this->_var['value']['id']; ?>" id="xuan_a_<?php echo $this->_var['value']['id']; ?>">
		      <p <?php if ($this->_var['value']['thumb_url']): ?>class="padd"<?php elseif ($this->_var['value']['hex_color'] != ''): ?>style="background:#<?php echo $this->_var['value']['hex_color']; ?>; height:40px; width:40px"<?php else: ?>style="padding:6px 10px;"<?php endif; ?> title="<?php echo $this->_var['value']['label']; ?>">
		      <?php if ($this->_var['value']['thumb_url']): ?>
		      <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['value']['thumb_url']; ?>" width="40" height="40" alt="<?php echo $this->_var['value']['label']; ?>">
		      <?php elseif ($this->_var['value']['hex_color']): ?>
		      <?php else: ?>
                      <em><?php echo $this->_var['value']['label']; ?></em>
                      <?php endif; ?>
                      <i></i>
                      </p>
                      <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['value']['selected_key_mb5'] == '1'): ?>checked<?php endif; ?> />
                      </a> 
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </div>
                  </ul>
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                   
                  <?php else: ?>
                  <select name="spec_<?php echo $this->_var['spec_key']; ?>">
                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </select>
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                  <?php endif; ?> 
                  <?php else: ?> 
                  <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                  <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                    <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                    <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                  <br />
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                  <?php endif; ?> 
                </div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
               
              <script type="text/javascript">
var myString=new Array();

<?php $_from = $this->_var['prod_exist_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('pkey', 'prod');if (count($_from)):
    foreach ($_from AS $this->_var['pkey'] => $this->_var['prod']):
?>
myString[<?php echo $this->_var['pkey']; ?>]="<?php echo $this->_var['prod']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</script> 
               
              
        </ul>
        <ul class="quantity">
          <h2>数量：</h2>
          <div class="items"> 
	   <span class="ui-number radius5" style="float:left;"> 
            <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
            <button type="button" class="decrease radius5" onclick="changenum(- 1)">-</button>
            <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="<?php echo $this->_var['goods']['goods_number']; ?>" type="text" />
            <button type="button" class="increase radius5" onclick="changenum(1)">+</button>
            <?php else: ?> 
            <?php echo $this->_var['goods']['goods_number']; ?> 
            <?php endif; ?> 
           </span>
           <p style="float:left;heigth:2.3rem;line-height:2.3rem;margin-left:1rem;">
	      <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?> 
                    <?php if ($this->_var['goods']['goods_number'] == 0): ?> 
                    库存：
                    <?php echo $this->_var['lang']['stock_up']; ?> 
                    <?php else: ?> 
                    库存：
                    <font id="shows_number">载入中···</font>
                    <?php endif; ?> 
	      <?php endif; ?>
           </p>
	  </div>
        </ul>
      </div>
      <div class="option" > 
        <script type="text/javascript">
            function showDiv(){
            }
     </script>
       <input type="hidden" name="goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>" />
       <input type="hidden" id="pre_sale_id" name="pre_sale_id" value="<?php echo $this->_var['goods']['pre_sale_id']; ?>"/>
              <?php if ($this->_var['goods']['status'] == 0): ?>
             	<a id="buybuttom" href="javascript:;" class="btn buy radius5">活动尚未开始</a> 
              <?php elseif ($this->_var['goods']['status'] == 1 && $this->_var['goods']['deposit'] > 0 && $this->_var['goods']['status'] < 2): ?>
              <a id="buybuttom" href="javascript:;" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0, 1, 'pre_sale', '<?php echo $this->_var['goods']['pre_sale_id']; ?>')" class="btn buy radius5">立刻支付定金</a> 
              <?php elseif ($this->_var['goods']['status'] < 2): ?>
              <a id="buybuttom" href="javascript:;" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0, 1, 'pre_sale', '<?php echo $this->_var['goods']['pre_sale_id']; ?>')" name="on_addToCart" class="btn buy radius5">立刻付款</a>  
              <?php elseif ($this->_var['goods']['status'] >= 2): ?>
              <a id="buybuttom" href="javascript:" class="btn buy radius5">活动已结束</a>
              <?php endif; ?>
      </div>
    </form>
  </section>
</div>



<div class="wrap">
  <section class="goodsBuy radius5">
    <input id="goodsBuy-open-sale" type="checkbox">
    <label class="info" id="info2" for="goodsBuy-open-sale">
    <div>阶梯价格<i></i></div>
    <div class="selected"> </div>
    </label>
      <div class="fields_sale">
        <ul class="ul1">
	<?php $_from = $this->_var['goods']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['name']['iteration']++;
?>
          <li>满<?php echo $this->_var['item']['amount']; ?>人：<font class="<?php if ($this->_var['goods']['cur_price'] == $this->_var['item']['price']): ?>price<?php else: ?>price_no<?php endif; ?>"><?php echo $this->_var['item']['formated_price']; ?></font></li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
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
	}else if (id == 2) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = '';
	}
}
</script> 


<section class="s-detail">
  <header>
    <ul style="position: static;" id="detail_nav">
      <li id="tabs1" onClick="tab(1)" class="current"> 详情 </li>
      <li id="tabs2" onClick="tab(2)" class=""> 评价 <span class="review-count">(<?php echo $this->_var['goods']['comment_count']; ?>)</span> </li>
    </ul>
  </header>
  <div id="tab1" class="">
    <div class="desc wrap">
      <div class="blank2"></div>
      <?php echo $this->_var['goods']['goods_desc']; ?>
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
        <li class="flex_in  "   <?php if (($this->_foreach['related_goods']['iteration'] - 1) % 2 == 1): ?> style="float:right" <?php endif; ?> > <a href="<?php echo $this->_var['goods']['url']; ?>">
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
var goods_id = <?php echo $this->_var['id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['id']; ?>;
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
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty + '&pre_sale_id=<?php echo $this->_var['goods']['pre_sale_id']; ?>', changePriceResponse, 'GET', 'JSON');
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
<?php echo $this->smarty_insert_scripts(array('files'=>'transportjq.js,utils.js')); ?>
</body>
</html>