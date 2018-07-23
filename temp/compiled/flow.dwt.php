<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/huazhuangpin/cart.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
 <?php echo $this->smarty_insert_scripts(array('files'=>'lizi_flow.js')); ?> 
<?php if ($this->_var['step'] == "cart"): ?> 
 

<?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?> 
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<div id="main">
  <div class="top-next cle">
    <div class="fr"> <a href="./" class="graybtn">继续购物</a> <a href="javascript:void(0);" onclick="return selcart_submit();" class="btn" id="checkout-top">&nbsp;去结算&nbsp;</a> </div>
  </div>
  <div class="cart-box" id="cart-box">
    <div class="hd"> <span class="selcartgoods no2" id="itemsnum-top"><input type="checkbox" autocomplete="off" id="chkAll" name="chkAll" checked=true  onclick="return chkAll_onclick()"><label for="chkAll">全选</label></span> <span class="no4">单价</span> <span>数量</span> <span>小计</span> </div>
    <div class="goods-list">
      <ul>
      <form id="formCart1" name="formCart" method="post" action="flow.php">
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li class="cle hover" style="border-bottom-style: none;"> 
          
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
          
          <div class="selcartgoods"> <input type="checkbox" <?php if (! $this->_var['goods']['is_cansel']): ?> disabled <?php else: ?> checked=checked <?php endif; ?> autocomplete="off" name="sel_cartgoods[]" value="<?php echo $this->_var['goods']['rec_id']; ?>" id="sel_cartgoods_<?php echo $this->_var['goods']['rec_id']; ?>" onclick="select_cart_goods();"><label for="sel_cartgoods_<?php echo $this->_var['goods']['rec_id']; ?>"></label> </div>
          <div class="pic"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"> <img alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" data-original="<?php echo $this->_var['goods']['goods_thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a> </div>
          <div class="name"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?> 
            <?php if ($this->_var['show_goods_attribute'] == 1): ?> 
            <br><span style="color:#FF0000"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></span> 
            <?php endif; ?> 
            <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
            <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
            <?php endif; ?> 
            <?php if ($this->_var['goods']['is_gift'] > 0): ?> 
            <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
            <?php endif; ?></a>
            <p> </p>
          </div>
          
          <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
          <div class="selcartgoods"> <input type="checkbox" <?php if (! $this->_var['goods']['is_cansel']): ?> disabled <?php else: ?> checked=checked <?php endif; ?> autocomplete="off" name="sel_cartgoods[]" value="<?php echo $this->_var['goods']['rec_id']; ?>" id="sel_cartgoods_<?php echo $this->_var['goods']['rec_id']; ?>" onclick="select_cart_goods();"><label for="sel_cartgoods_<?php echo $this->_var['goods']['rec_id']; ?>"></label> </div>
          <div class="pic"> <img src="themes/huazhuangpin/images/czlb.png"></div>
          <div class="name"> <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
            <p>
            
            <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none"> 
              <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?> 
              <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
            </p>
          </div>
          <?php else: ?>
          <div class="selcartgoods"> <input type="checkbox" <?php if (! $this->_var['goods']['is_cansel']): ?> disabled <?php else: ?> checked=checked <?php endif; ?> autocomplete="off" name="sel_cartgoods[]" value="<?php echo $this->_var['goods']['rec_id']; ?>" id="sel_cartgoods_<?php echo $this->_var['goods']['rec_id']; ?>" onclick="select_cart_goods();"><label for="sel_cartgoods_<?php echo $this->_var['goods']['rec_id']; ?>"></label> </div>
          <div class="pic"> <img src="themes/huazhuangpin/images/yhcx.png"></div>
          <div class="name"><?php echo $this->_var['goods']['goods_name']; ?>
            <p></p>
          </div>
          <?php endif; ?>
          <div class="price-xj">
            <p><em><?php echo $this->_var['goods']['goods_price']; ?></em></p>
          </div>
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
          <div class="nums"> <span class="minus" title="减少1个数量" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,-1);" >-</span>
            <input type="text" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>"  onchange="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,0)">
            <span class="add" title="增加1个数量" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,+1);">+</span> </div>
          <?php else: ?> 
         <div class="nums" style="text-indent:35px; font-size:14px;"> <?php echo $this->_var['goods']['goods_number']; ?> </div>
          <?php endif; ?>
          <div class="price-xj"><span></span> <em id="total_items_<?php echo $this->_var['goods']['rec_id']; ?>"><?php echo $this->_var['goods']['subtotal']; ?></em> </div>
          <div class="del"> <a class="btn-del" href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>';">删除</a> </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<input type="hidden" name="step" id="actname" value="update_cart" />
      </form>
      </ul>
    </div>
    <script type="text/javascript" charset="utf-8">
	function chkAll_onclick(){
		var obj = document.getElementById('chkAll');
		var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
		for (var i=0;i<obj_cartgoods.length;i++){
            if(!obj_cartgoods[i].disabled){
                var e = obj_cartgoods[i];

                if (e.name != 'chkAll'){
                    e.checked = obj.checked;
                }
            }
		}
		select_cart_goods();
	}
	function select_cart_goods(){
	      var sel_goods = new Array();
	      var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
	      var j=0;
	      var c = true;
	      for (i=0;i<obj_cartgoods.length;i++){
			if(obj_cartgoods[i].checked == true){	
				sel_goods[j] = obj_cartgoods[i].value;
				j++;
			}else{
				c = false;
			}
	      }
	      document.getElementById('chkAll').checked = c;
	      Ajax.call('flow.php', 'act=selcart&sel_goods=' + sel_goods, selcartResponse, 'GET', 'JSON');
	}
	function selcartResponse(res){
	  if (res.err_msg.length > 0){
            alert(res.err_msg);
	  }else{
	     document.getElementById('selectedCount').innerHTML = res.total_number;
	     document.getElementById('totalSkuPrice').innerHTML = res.result;
	  }
	}
	function selcart_submit(){
	      var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
	      var formobj = document.getElementById('formCart1');
	      var j=0;
	      for (i=0;i<obj_cartgoods.length;i++){
			if(obj_cartgoods[i].checked == true){	
				j++;
			}
	      }
	      if (j>0){
		
			formobj.action='flow.php?step=checkout';
			document.getElementById('actname').value='checkout';
			formobj.submit();
			return true;
	      }else{	
			alert('您还没有选择商品哦！');	
			return false;
	     }
	}
    </script> 
    <div class="fd cle">
      <div class="fl">
        <p class="no1"> <a id="del-all" href="flow.php?step=clear">清空购物车</a> </p>
        <p><a class="graybtn" href="./">继续购物</a></p>
      </div>
      <div class="fr" id="price-total">
        <p><span id="selectedCount"><?php echo $this->_var['total']['total_number']; ?></span>件商品，总价：<span class="red"><strong id="totalSkuPrice"><?php echo $this->_var['total']['goods_price']; ?></strong></span></p>
        <p><a href="javascript:void(0);" onclick="return selcart_submit();" class="btn">去结算</a></p>
      </div>
    </div>
  </div>
</div>

<?php if ($_SESSION['user_id'] > 0): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?> 
<script type="text/javascript" charset="utf-8">
        function collect_to_flow(goodsId)
        {
          var goods        = new Object();
          var spec_arr     = new Array();
          var fittings_arr = new Array();
          var number       = 1;
          goods.spec     = spec_arr;
          goods.goods_id = goodsId;
          goods.number   = number;
          goods.parent   = 0;
          Ajax.call('flow.php?step=add_to_cart', 'goods=' + goods.toJSONString(), collect_to_flow_response, 'POST', 'JSON');
        }
        function collect_to_flow_response(result)
        {
          if (result.error > 0)
          {
            // 如果需要缺货登记，跳转
            if (result.error == 2)
            {
              if (confirm(result.message))
              {
                location.href = 'user.php?act=add_booking&id=' + result.goods_id;
              }
            }
            else if (result.error == 6)
            {
              openSpeDiv(result.message, result.goods_id);
            }
            else
            {
              alert(result.message);
            }
          }
          else
          {
            location.href = 'flow.php';
          }
        }
      </script>
</div>
<div class="blank"></div>
<?php endif; ?> 

<?php if ($this->_var['fittings_list']): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?> 
<script type="text/javascript" charset="utf-8">
  function fittings_to_flow(goodsId,parentId)
  {
    var goods        = new Object();
    var spec_arr     = new Array();
    var number       = 1;
    goods.spec     = spec_arr;
    goods.goods_id = goodsId;
    goods.number   = number;
    goods.parent   = parentId;
    Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), fittings_to_flow_response, 'POST', 'JSON');
  }
  function fittings_to_flow_response(result)
  {
    if (result.error > 0)
    {
      // 如果需要缺货登记，跳转
      if (result.error == 2)
      {
        if (confirm(result.message))
        {
          location.href = 'user.php?act=add_booking&id=' + result.goods_id;
        }
      }
      else if (result.error == 6)
      {
        openSpeDiv(result.message, result.goods_id, result.parent);
      }
      else
      {
        alert(result.message);
      }
    }
    else
    {
      location.href = 'flow.php';
    }
  }
  </script>
  <div class="page-btm" id="page-btm">

    


    
        <div class="cuxiao-box">
            <div class="hd">
                <h3><?php echo $this->_var['lang']['goods_fittings']; ?></h3>
            </div>
            <form action="flow.php" method="post">
            <div class="cuxiao-bd">
                
                    <ul class="cle" style="display: block;">
                        
                             <?php $_from = $this->_var['fittings_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fittings');if (count($_from)):
    foreach ($_from AS $this->_var['fittings']):
?>
                            <li>
                                <div class="bd">
                                    <p class="pic">
                                        <a href="<?php echo $this->_var['fittings']['url']; ?>" target="_blank">
                                            <img data-original="<?php echo $this->_var['fittings']['goods_thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading" alt="<?php echo htmlspecialchars($this->_var['fittings']['name']); ?>" style="display: inline;">
                                        </a>
                                    </p>
                                    <p class="price"><strong><?php echo $this->_var['fittings']['fittings_price']; ?></strong></p>
                                    <p class="name"><a href="<?php echo $this->_var['fittings']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['fittings']['short_name']); ?></a></p>
               
                                </div>

                                <div class="btn-bd">
                                    <a href="javascript:fittings_to_flow(<?php echo $this->_var['fittings']['goods_id']; ?>,<?php echo $this->_var['fittings']['parent_id']; ?>)" class="graybtn">放入购物车</a>
                                </div>
                            </li>
                        
                           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                        
                    </ul>
                
              
                
            </div>
            </form>
        </div>
    

</div>

<?php endif; ?> 

<?php endif; ?> 

<?php if ($this->_var['favourable_list']): ?>
<div class="flowBox cart_main2" style="margin:0 auto 50px auto;">
  <div class="hd">
    <h3><?php echo $this->_var['lang']['label_favourable']; ?></h3>
  </div>
  <?php $_from = $this->_var['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'favourable');if (count($_from)):
    foreach ($_from AS $this->_var['favourable']):
?>
  <form action="flow.php" method="post">
    <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#ccc" style="margin:0 auto;">
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_name']; ?></td>
        <td bgcolor="#ffffff"><strong><?php echo $this->_var['favourable']['act_name']; ?></strong></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_period']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['favourable']['start_time']; ?> --- <?php echo $this->_var['favourable']['end_time']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_range']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['lang']['far_ext'][$this->_var['favourable']['act_range']]; ?><br />
          <?php echo $this->_var['favourable']['act_range_desc']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_amount']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['favourable']['formated_min_amount']; ?> --- <?php echo $this->_var['favourable']['formated_max_amount']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_type']; ?></td>
        <td bgcolor="#ffffff"><span class="STYLE1"><?php echo $this->_var['favourable']['act_type_desc']; ?></span> 
          <?php if ($this->_var['favourable']['act_type'] == 0): ?> 
          <?php $_from = $this->_var['favourable']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gift');if (count($_from)):
    foreach ($_from AS $this->_var['gift']):
?><br />
          <input type="checkbox" value="<?php echo $this->_var['gift']['id']; ?>" name="gift[]" />
          <a href="goods.php?id=<?php echo $this->_var['gift']['id']; ?>" target="_blank" class="f6"><?php echo $this->_var['gift']['name']; ?></a> [<?php echo $this->_var['gift']['formated_price']; ?>] 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endif; ?></td>
      </tr>
      <?php if ($this->_var['favourable']['available']): ?>
            <tr>
              <td align="right" bgcolor="#ffffff">&nbsp;</td>
              <td align="center" bgcolor="#ffffff"><input type="submit" class="btn" alt="Add to cart"  border="0" style="font-size: 16px;
padding: 10px 20px 12px; height:auto; cursor:pointer; border:none;" value="加入购物车" /></td>
            </tr>
            <?php endif; ?>
    </table>
    <input type="hidden" name="act_id" value="<?php echo $this->_var['favourable']['act_id']; ?>" />
    <input type="hidden" name="step" value="add_favourable" />
  </form>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</div>

<?php endif; ?> 

<?php if ($this->_var['step'] == "consignee"): ?>
<div class="cle cart_main"> 
   
  <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?> 
  <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script>
  <div class="aui_outer"> 
     
    <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
    <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
      <?php echo $this->fetch('library/consignee.lbi'); ?>
    </form>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
  </div>
</div>
<?php endif; ?> 

<?php if ($this->_var['step'] == "checkout"): ?>
<div id="opendivbg" class="opendivbg" style="display:none;"></div>
<div class="cle cart_main">
  <div class="flowBox_cart">
    <div class="flowBox_in">
      <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
        </script>
    <div class="checkBox_jm clearfix" >
    <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
      <h6><span><?php echo $this->_var['lang']['consignee_info']; ?></span><div style="clear:both"></div></h6>
      <div class="address_jm" id="AddressList" > <?php echo $this->fetch('library/address_list.lbi'); ?> </div>
      <div id="popDiv" class="mydiv" style="display:none;">
        <div class="mydiv-r" onclick="javascript:closePopDiv()" ></div>
        <div id="PopAddressCon"></div>
      </div>
    </div>
        <div class="blank"></div>
        <div class="cartlist">
          <h6><span><?php echo $this->_var['lang']['goods_list']; ?></span><?php if ($this->_var['allow_edit_cart']): ?><a href="flow.php" class="f16">返回修改购物车</a><?php endif; ?></h6>
          <table class="table" cellspacing="0" cellpadding="0">
	   <tr>
	    <th class="title first"><?php echo $this->_var['lang']['goods_name']; ?></th>
	    <th width="150"><?php echo $this->_var['lang']['goods_attr']; ?></th>
	    <th width="150"><?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?><?php echo $this->_var['lang']['shop_prices']; ?><?php endif; ?></th>
	    <th width="150"><?php echo $this->_var['lang']['number']; ?></th>
	    <th class="last" width="150"><?php echo $this->_var['lang']['subtotal']; ?></th>
	    </tr>
            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
	    <tr>
		<td class="title first" style="text-align: left;"><div class="pro"> 
		    <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
		    <div class="img fl" >
		    <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><img src="themes/huazhuangpin/images/czlb.png" width="70" height="70" border=0 ></a> 
		    </div>
		    <p class="tit"> <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
		    
		    <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none;float:left;margin-top:10px;"> 
		      <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?> 
		      <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
		      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		    </div>
		    </p>
		    <?php else: ?> 
		    <div class="img fl" >
		    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6" title="<?php echo $this->_var['goods']['goods_name']; ?>"><img data-original="<?php echo $this->_var['goods']['goods_thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading" width="70" height="70" border=0 ></a> 
		    </div>
		    <p class="tit"><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" title="<?php echo $this->_var['goods']['goods_name']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></p>
		    <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
		    <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
		    <?php elseif ($this->_var['goods']['is_gift']): ?> 
		    <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
		    <?php endif; ?> 
		    <?php endif; ?> 
		    <?php if ($this->_var['goods']['is_shipping']): ?>(<span style="color:#FF0000"><?php echo $this->_var['lang']['free_goods']; ?></span>)<?php endif; ?> 
		  </div></td>
	       <td><span class="price priceA_gray"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></span></td>
		<td><span class="price priceA_gray"><?php echo $this->_var['goods']['formated_goods_price']; ?></span></td>
		<td width="100"><span class="oprate"> 
		  <?php echo $this->_var['goods']['goods_number']; ?> 
		  </span></td>
		<td><span class="price priceA_gray" id="total_items_<?php echo $this->_var['goods']['rec_id']; ?>"><?php echo $this->_var['goods']['formated_subtotal']; ?></span></td>
	    </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php if (! $this->_var['gb_deposit']): ?>
            <tr>
              <th colspan="10"><div class="sliceOrder tl"><?php if ($this->_var['discount'] > 0): ?><?php echo $this->_var['your_discount']; ?><br />
                
                <?php endif; ?> 
                <?php echo $this->_var['shopping_money']; ?><?php if ($this->_var['show_marketprice']): ?>，<?php echo $this->_var['market_price_desc']; ?><?php endif; ?></div></th>
            </tr>
            <?php endif; ?>
          </table>
        </div>
        <div class="blank"></div>
        <?php if ($this->_var['total']['real_goods_count'] != 0 && $this->_var['shipping_list']): ?>
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['shipping_method']; ?></span><div style="clear:both"></div></h6>
            <div class="section-body " style="background:#FFF;">
            	<ul class="item-list clearfix payment-list" id="shipping-list">
			<?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['shipping']):
        $this->_foreach['foo']['iteration']++;
?>
                	<li>
                    	<label class="checkout-item" for="shipping_<?php echo $this->_foreach['foo']['iteration']; ?>"><?php echo $this->_var['shipping']['shipping_name']; ?></label>
                    	<input type="radio" name="shipping" class="hide" id="shipping_<?php echo $this->_foreach['foo']['iteration']; ?>" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onclick="selectShipping(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/>
                        <div class="text">
                        	配送<?php echo $this->_var['lang']['fee']; ?>：<?php echo $this->_var['shipping']['format_shipping_fee']; ?><br>
                        	<?php echo $this->_var['lang']['free_money']; ?>：<?php echo $this->_var['shipping']['free_money']; ?><br>
                        	<?php echo $this->_var['lang']['insure_fee']; ?>：<?php if ($this->_var['shipping']['insure'] != 0): ?><?php echo $this->_var['shipping']['insure_formated']; ?><?php else: ?><?php echo $this->_var['lang']['not_support_insure']; ?><?php endif; ?>
                        </div>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		    <li class="need_insure"><label for="ECS_NEEDINSURE">
                  <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox"  onclick="selectInsure(this.checked)" value="1" <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?> <?php if ($this->_var['insure_disabled']): ?>disabled="true"<?php endif; ?>  />
                  <?php echo $this->_var['lang']['need_insure']; ?> </label></li>
                </ul>
            </div>
        </div>
        <div class="blank"></div>
        <?php else: ?>
        <input name = "shipping" type="radio" value = "-1" checked="checked"  style="display:none"/>
        <?php endif; ?> 
        <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['payment_method']; ?></span><div style="clear:both"></div></h6>
            <div class="section-body " style="background:#FFF;">
            	<ul class="item-list clearfix payment-list" id="payment-list">
                	<?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['payment']):
        $this->_foreach['foo']['iteration']++;
?> 
                	<li id="act_<?php echo $this->_foreach['foo']['iteration']; ?>">
                    	<label class="checkout-item" for="payment_<?php echo $this->_foreach['foo']['iteration']; ?>"><?php echo $this->_var['payment']['pay_name']; ?></label>
                    	<input type="radio" name="payment" class="hide" id="payment_<?php echo $this->_foreach['foo']['iteration']; ?>" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/>
                        <div class="text">
                        	<?php echo $this->_var['lang']['pay_fee']; ?>：<?php echo $this->_var['payment']['format_pay_fee']; ?>
                        </div>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
        <?php else: ?>
        <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
        <?php endif; ?>
        <div class="blank"></div>
        <?php if ($this->_var['pack_list']): ?>
  <div class="cartlist cartlist_cpt">
          <h6><span><?php echo $this->_var['lang']['goods_package']; ?></span><div style="clear:both"></div></h6>
    <table class="table table_r_b" cellspacing="0" cellpadding="0" id="packTable">
      <tr>
        <th width="5%" scope="col">&nbsp;</th>
        <th width="35%" scope="col"><?php echo $this->_var['lang']['name']; ?></th>
        <th width="22%" scope="col"><?php echo $this->_var['lang']['price']; ?></th>
        <th width="22%" scope="col"><?php echo $this->_var['lang']['free_money']; ?></th>
        <th scope="col"><?php echo $this->_var['lang']['img']; ?></th>
      </tr>
      <tr>
        <td><input type="radio" name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /></td>
        <td style="text-align: left;"><strong><?php echo $this->_var['lang']['no_pack']; ?></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');if (count($_from)):
    foreach ($_from AS $this->_var['pack']):
?>
      <tr>
        <td><input type="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /></td>
        <td style="text-align: left;"><strong><?php echo $this->_var['pack']['pack_name']; ?></strong></td>
        <td><?php echo $this->_var['pack']['format_pack_fee']; ?></td>
        <td><?php echo $this->_var['pack']['format_free_money']; ?></td>
        <td><?php if ($this->_var['pack']['pack_img']): ?> 
          <a href="data/packimg/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank"><?php echo $this->_var['lang']['view']; ?></a> 
          <?php else: ?> 
          <?php echo $this->_var['lang']['no']; ?> 
          <?php endif; ?></td>
      </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
  </div>
        <div class="blank"></div>
        <?php endif; ?> 
        
        <?php if ($this->_var['card_list']): ?>
  <div class="cartlist cartlist_cpt">
          <h6><span><?php echo $this->_var['lang']['goods_card']; ?></span><div style="clear:both"></div></h6>
    <table class="table table_r_b" cellspacing="0" cellpadding="0" id="cardTable">
      <tr>
        <th width="5%" scope="col">&nbsp;</th>
        <th width="35%" scope="col"><?php echo $this->_var['lang']['name']; ?></th>
        <th width="22%" scope="col"><?php echo $this->_var['lang']['price']; ?></th>
        <th width="22%" scope="col"><?php echo $this->_var['lang']['free_money']; ?></th>
        <th scope="col"><?php echo $this->_var['lang']['img']; ?></th>
      </tr>
      <tr>
        <td><input type="radio" name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" /></td>
        <td style="text-align: left;"><strong><?php echo $this->_var['lang']['no_card']; ?></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
      <tr>
        <td><input type="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this)"  /></td>
        <td style="text-align: left;"><strong><?php echo $this->_var['card']['card_name']; ?></strong></td>
        <td><?php echo $this->_var['card']['format_card_fee']; ?></td>
        <td><?php echo $this->_var['card']['format_free_money']; ?></td>
        <td><?php if ($this->_var['card']['card_img']): ?> 
          <a href="data/cardimg/<?php echo $this->_var['card']['card_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a> 
          <?php else: ?> 
          <?php echo $this->_var['lang']['no']; ?> 
          <?php endif; ?></td>
      </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <tr>
        <td></td>
        <td><strong><?php echo $this->_var['lang']['bless_note']; ?>:</strong></td>
        <td colspan="3"><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['card_message']); ?></textarea></td>
      </tr>
    </table>
  </div>
        <div class="blank"></div>
        <?php endif; ?>
        
  <div class="cartlist cartlist_cpt">
    <h6><span><?php echo $this->_var['lang']['other_info']; ?></span><div style="clear:both"></div></h6>
    <table class="table table_r_b" cellspacing="0" cellpadding="0">
      <?php if ($this->_var['allow_use_surplus']): ?>
      <tr>
        <td><strong><?php echo $this->_var['lang']['use_surplus']; ?>: </strong></td>
        <td style="text-align: left;"><input name="surplus" type="text" class="inputBg" id="ECS_SURPLUS" size="10" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" onblur="changeSurplus(this.value)" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> />
          <?php echo $this->_var['lang']['your_surplus']; ?><?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?> <span id="ECS_SURPLUS_NOTICE" class="notice"></span></td>
      </tr>
      <?php endif; ?> 
      <?php if ($this->_var['allow_use_integral']): ?>
      <tr>
        <td><strong><?php echo $this->_var['lang']['use_integral']; ?></strong></td>
        <td style="text-align: left;"><input name="integral" type="text" class="inputBg" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" size="10" />
          <?php echo $this->_var['lang']['can_use_integral']; ?>:<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo $this->_var['order_max_integral']; ?>  <?php echo $this->_var['points_name']; ?>. <span id="ECS_INTEGRAL_NOTICE" class="notice"></span></td>
      </tr>
      <?php endif; ?> 
      <?php if ($this->_var['allow_use_bonus']): ?>
      <tr>
        <td><strong><?php echo $this->_var['lang']['use_bonus']; ?>:</strong></td>
        <td style="text-align: left;"> <?php echo $this->_var['lang']['select_bonus']; ?>
          <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" class="inputBg">
            <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
            <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
            <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </select>
          <?php echo $this->_var['lang']['input_bonus_no']; ?>
          <input name="bonus_sn" type="text" class="inputBg" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" />
          <input name="validate_bonus" type="button" class="BonusButton" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" /></td>
      </tr>
      <?php endif; ?> 
      <?php if ($this->_var['inv_content_list']): ?>
      <tr>
        <td><strong><?php echo $this->_var['lang']['invoice']; ?>:</strong>
          <input name="need_inv" type="checkbox"   id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> /></td>
        <td style="text-align: left;"><?php if ($this->_var['inv_type_list']): ?> 
          <?php echo $this->_var['lang']['invoice_type']; ?>
          <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" class="inputBg">
            
								<?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?>
							
          </select>
          
          <?php endif; ?> 
          <?php echo $this->_var['lang']['invoice_title']; ?>
          <input name="inv_payee" type="text"  class="inputBg" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true"<?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onblur="changeNeedInv()" />
          <?php echo $this->_var['lang']['invoice_content']; ?>
          <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" class="inputBg">
            
								<?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>
							
          </select></td>
      </tr>
      <?php endif; ?>
      <tr>
        <td><strong><?php echo $this->_var['lang']['order_postscript']; ?>:</strong></td>
        <td style="text-align: left;"><textarea name="postscript" cols="80" rows="3" id="postscript" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea></td>
      </tr>
      <?php if ($this->_var['how_oos_list']): ?>
      <tr>
        <td><strong><?php echo $this->_var['lang']['booking_process']; ?>:</strong></td>
        <td style="text-align: left;"><?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');if (count($_from)):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
?>
          
          <label style="padding-right:20px;">
            <input name="how_oos" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> onclick="changeOOS(this)" />
            <?php echo $this->_var['how_oos_name']; ?> </label>
          
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
      </tr>
      <?php endif; ?>
    </table>
  </div>

	
	
        <div class="blank"></div>
  <div class="cartlist cartlist_cpt">
          <h6><span><?php echo $this->_var['lang']['fee_total']; ?></span><div style="clear:both"></div></h6>
    <div class="booklist_sub mb40"> <?php echo $this->fetch('library/order_total.lbi'); ?>
      <div style="margin:20px auto; text-align:center">
        <input type="submit" class="btn_booklist_sub" value="提交订单" />
        <input type="hidden" name="step" value="done" />
      </div>
    </div>
  </div>
      </form>
    </div>
  </div>
</div>
<?php if (! $this->_var['consignee_list']): ?>
<script>alert("请先设置收货地址！");</script>
<?php endif; ?>
<?php endif; ?> 


<?php if ($this->_var['step'] == 'payinfo'): ?>
<div class="cart_main">
    <div class="sub_main">
        <div class="top_intro">
            <div class="txt">
            	<h4><span class="green"><?php echo $this->_var['lang']['remember_order_number']; ?>：<?php echo $this->_var['order']['order_sn']; ?></span></h4>
                <h5><?php if ($this->_var['order']['shipping_name']): ?><?php echo $this->_var['lang']['select_shipping']; ?>：<font class="cc0001"><?php echo $this->_var['order']['shipping_name']; ?></font><?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['select_payment']; ?>：<font class="cc0001"><?php echo $this->_var['order']['pay_name']; ?></font></h5>
                <?php if ($this->_var['order']['order_amount'] > 0): ?>
                   <div class="price">应付总额：<i></i><span><?php echo $this->_var['total']['amount_formated']; ?></span></div>
                 <?php else: ?>
                   <div class="price">成功支付：<i></i><span><?php echo $this->_var['total']['money_paid_formated']; ?></span></div>
                <?php endif; ?>
		<?php if ($this->_var['pay_online']): ?><div style="padding-left:60px; margin-top:20px;width:262px;"><?php echo $this->_var['pay_online']; ?></div><?php endif; ?>
            </div>
        </div>
        
        <div class="payment">
        <?php if ($this->_var['pay_online']): ?>
        	<div class="payment_tit">其他支付方式</div>
            <div class="payment_con">
                <div class="bd">
                	<div class="bd_box">
                        <div class="pay_c">
                        	<ul>
                            	<?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['payment']):
        $this->_foreach['foo']['iteration']++;
?>
								<li<?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?> class="current"<?php endif; ?>><a href="flow.php?step=change_payment&pay_id=<?php echo $this->_var['payment']['pay_id']; ?>&ext_paycode=&order_id=<?php echo $this->_var['order']['order_id']; ?>"><img width="120" height="50" alt="" src="<?php echo $this->_var['payment']['pay_logo']; ?>"><i class="gou"></i><?php echo $this->_var['payment']['pay_name']; ?></a></li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="ordersucces">感谢您在本店购物！我们将尽快为您发货，请保持电话畅通，方便配送人员与您联系。</div>
        <?php endif; ?>
        </div>
	<div class="wcwxts">
		<p class="wxts1">温馨提示</p>
		<div class="wxtsny">
			<p><b style="color:#cc0001">如果遇到问题？</b>请拨打：<?php echo $this->_var['service_phone']; ?>，由客服协助您完成订单。</p>
		</div>
	</div>

    </div>
</div>
<?php endif; ?>
				

<?php if ($this->_var['step'] == "done"): ?> 

<div class="cle cart_main">
  <div class="flowBox" style="margin:30px auto 30px auto; border:none;">
   	<div class="flow_fastcg">
		<div class="xian">
			<p class="xian1"><span><?php echo $this->_var['lang']['remember_order_number']; ?>: <?php echo $this->_var['order']['order_sn']; ?></span></p>
			<p class="xian2"><?php echo $this->_var['lang']['select_shipping']; ?>: <font style="padding-right:30px;"><?php echo $this->_var['order']['shipping_name']; ?></font><?php echo $this->_var['lang']['select_payment']; ?>: <font  style="padding-right:30px;"><?php echo $this->_var['order']['pay_name']; ?></font><?php echo $this->_var['lang']['order_amount']; ?>: <font><b><?php echo $this->_var['total']['amount_formated']; ?></b></font></p>
			<?php if ($this->_var['pay_online']): ?> 
      		
			<div class="online1">
				<b>还差一步,请立即支付,(支付成功后,我们将在<span style="color:#cc0001;padding:0px 5px; font-size:16px;">24小时</span>内为您发货）</b>
				<br><br>
				<?php echo $this->_var['pay_online']; ?>
				<br><br>
			</div>
			<div class="wcwxts">
				<p class="wxts1">温馨提示</p>
				<div class="wxtsny">
					<p><b style="color:#cc0001">如果支付遇到问题？</b>请拨打：<?php echo $this->_var['service_phone']; ?>，由客服协助您完成支付。</p>
				</div>
			</div>
			<?php else: ?> 
			<div class="online1">
				<b>请保持电话畅通，方便快递公司与您联系，我们将在<span style="color:#cc0001;padding:0px 5px; font-size:16px;">24小时</span>内为您发货。</b>
				<br><br>
			</div>
			<div class="wcwxts">
				<p class="wxts1">温馨提示</p>
				<div class="wxtsny">
					<p><b style="color:#cc0001">如果遇到问题？</b>请拨打：<?php echo $this->_var['service_phone']; ?>，由客服协助您完成订单。</p>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
    <?php if ($this->_var['virtual_card']): ?>
    <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;"> 
      <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
      <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
      <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
      <ul style="list-style:none;padding:0;margin:0;clear:both">
        <?php if ($this->_var['card']['card_sn']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span> </li>
        <?php endif; ?> 
        <?php if ($this->_var['card']['card_password']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span> </li>
        <?php endif; ?> 
        <?php if ($this->_var['card']['end_date']): ?>
        <li style="float:left;"> <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?> </li>
        <?php endif; ?>
      </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <?php endif; ?>
    <p style="text-align:center; margin-bottom:20px;">您可以 <a href="index.html">返回首页</a> 或去 <a href="user.php">用户中心</a></p>
  </div>
</div>
<?php endif; ?> 
<?php if ($this->_var['step'] == "login"): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?> 
<script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		$(function(){
			$(".input_box").click(function(){
				$(this).find(".t_text").hide();	
				$(this).find("input").focus();
			})
			
			$(".input_box").focusin(function(){
				$(this).find(".t_text").hide();
			})
		
			$(".input_box").focusout(function(){
				if($(this).find("input").val() == "")
				{
					$(this).find(".t_text").show();
				}
			})	
		})

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        

        </script> 


<div class="cle cart_main">
  <table border=0 width=400 align=center>
  <tr><td align="center" valign="bottom" height=300>
  <input type="button" onclick="location.href='user.php?act=login'" value="登录会员中心" class="flow_btn">
  <input type="button" onclick="location.href='user.php?act=register'" value="还没有会员？立即注册" class="flow_btn">
  <?php if ($this->_var['anonymous_buy'] == 1): ?>
  <input type="button" onclick="location.href='flow.php?step=checkout&direct_shopping=1'" value="<?php echo $this->_var['lang']['direct_shopping']; ?>" class="flow_btn">
  <?php endif; ?>
  </td></tr>
  <tr><td height=10 ></td></tr>
  <tr><td align="left" valign="top" height=150 >
	  <?php if ($this->_var['qq_login'] || $this->_var['weibo_login'] || $this->_var['alipay_login'] || $this->_var['weixin_login']): ?>
	  <div class="other-form">
	    <div class="other-login-tit">使用第三方帐号登录</div>
	    <div class="other-login">
	      <?php if ($this->_var['qq_login']): ?><a class="qq" href="user.php?act=oath&type=qq"></a><?php endif; ?>
	      <?php if ($this->_var['weibo_login']): ?><a class="sina" href="user.php?act=oath&type=weibo"></a><?php endif; ?>
	      <?php if ($this->_var['alipay_login']): ?><a class="alipay" href="user.php?act=oath&type=alipay"></a><?php endif; ?>
	      <?php if ($this->_var['weixin_login']): ?><a class="weixin" href="user.php?act=oath&type=weixin"></a><?php endif; ?>
	    </div>
	  </div>
	  <?php endif; ?>
  </td></tr>
  </table>
</div>

 
<?php endif; ?> 
<div class="add_ok" id="cart_show">
    <div class="tip">
        商品已成功加入购物车
    </div>
    <div class="go">
        <a href="javascript:easyDialog.close();" class="back">&lt;&lt;继续购物</a>
        <a href="flow.php" class="btn">去结算</a>
    </div>
</div>
<script>
function addToCartResponse(result)
{
  if (result.error > 0)
  {
    // 如果需要缺货登记，跳转
    if (result.error == 2)
    {
      if (confirm(result.message))
      {
        location.href = 'user.php?act=add_booking&id=' + result.goods_id + '&spec=' + result.product_spec;
      }
    }
    // 没选规格，弹出属性选择框
    else if (result.error == 6)
    {
      openSpeDiv(result.message, result.goods_id, result.parent ,result.number);
    }
    else
    {
      alert(result.message);
    }
  }
  else
  {
    var cartInfo = document.getElementById('ECS_CARTINFO');
    var ECS_CARTINFO_TOP = document.getElementById('ECS_CARTINFO_TOP');
    var cart_url = 'flow.php?step=cart';
    if (cartInfo)
    {
      cartInfo.innerHTML = result.content;
    }
    if (ECS_CARTINFO_TOP)
    {
      ECS_CARTINFO_TOP.innerHTML = result.content_top;
	  $('.cart-panel-content').height($(window).height()-90);
    }

    location.href = cart_url;
  }
}
</script>

<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>
