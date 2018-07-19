
<div class="f_title_attr">
<img  id="ECS_GOODS_ATTR_THUMB" src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['goods_thumb']; ?>" style=" float:left;">
<div class="f_title_arr_r">
<span>价格：<i id="ECS_GOODS_AMOUNT">0</i></span>
<?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?> 
   <?php if ($this->_var['goods']['goods_number'] == 0): ?> 
     <span>库存：<?php echo $this->_var['lang']['stock_up']; ?> </span>
   <?php else: ?> 
     <span>库存：<i id="shows_number">载入中···</i></span>
   <?php endif; ?> 
<?php endif; ?>
<span>销量：<i><?php echo $this->_var['sales_count']; ?></i></span>
<span id="ECS_GOODS_ATTR"></span>
</div>
<a class="c_close_attr" href="javascript:void(0)" onclick="close_choose_attr();"></a>
<div style="height:0px; line-height:0px; clear:both;"></div>
</div>
<div class="f_content_attr">
<ul class="navContent" style="display:block;"> 
               
              <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
		<li>
		<div class="title"><?php echo $this->_var['spec']['name']; ?></div>
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
		      <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['value']['img_url']; ?>" id="spec_img_<?php echo $this->_var['value']['id']; ?>" width="40" height="40" alt="<?php echo $this->_var['value']['label']; ?>">
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
               
              
<li>
        <div class="title1">数量</div>
        <div class="item1">
	   <span class="ui-number radius5" style="float:left;"> 
            <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
            <button type="button" class="decrease radius5" onclick="changenum(- 1)">-</button>
            <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="<?php echo $this->_var['goods']['goods_number']; ?>" type="text" />
            <button type="button" class="increase radius5" onclick="changenum(1)">+</button>
            <?php else: ?> 
            <?php echo $this->_var['goods']['goods_number']; ?> 
            <?php endif; ?> 
           </span>
      </div>
      
    </li>        
</ul>
</div>
<div class="f_foot">
<input type="submit"  border="0" class="add_gift_attr" value="提交" />
<div style=" height:30px"></div>
</div>

