<?php if ($this->_var['new_goods']): ?>
<div class="primeProductList">
  <ul class="prolist cls">
<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>	
      <li>
      <div class="img"> <a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"> <img alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" src="<?php echo $this->_var['goods']['thumb']; ?>"></a> </div>
      <p class="tit"> <a title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a> </p>
      <p class="GoodsItem">
	  	<?php if ($this->_var['goods']['promote_price'] != ""): ?><span class="shop_price"><?php echo $this->_var['goods']['promote_price']; ?></span><?php else: ?><span class="shop_price"><?php echo $this->_var['goods']['shop_price']; ?></span><?php endif; ?>  
        <span class="market_price"><?php echo $this->_var['goods']['market_price']; ?></span>
	  </p>
	  <p><span class="p-time">销量：<?php echo $this->_var['goods']['sales_volume_base']; ?> 件</span></p>

	  
	  
    </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</div>
<?php endif; ?>