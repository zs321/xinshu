<?php if ($this->_var['best_goods']): ?>
<div class="primeProductList">
  <ul class="prolist cls">
<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_50200000_1532066171');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_50200000_1532066171']):
?>	
      <li>
      <div class="img"> <a target="_blank" href="<?php echo $this->_var['goods_0_50200000_1532066171']['url']; ?>"> <img alt="<?php echo htmlspecialchars($this->_var['goods_0_50200000_1532066171']['name']); ?>" src="<?php echo $this->_var['goods_0_50200000_1532066171']['thumb']; ?>"></a> </div>
      <p class="tit"> <a title="<?php echo htmlspecialchars($this->_var['goods_0_50200000_1532066171']['name']); ?>" target="_blank" href="<?php echo $this->_var['goods_0_50200000_1532066171']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods_0_50200000_1532066171']['name']); ?></a> </p>
      <p class="GoodsItem">
	  	<?php if ($this->_var['goods_0_50200000_1532066171']['promote_price'] != ""): ?><span class="shop_price"><?php echo $this->_var['goods_0_50200000_1532066171']['promote_price']; ?></span><?php else: ?><span class="shop_price"><?php echo $this->_var['goods_0_50200000_1532066171']['shop_price']; ?></span><?php endif; ?>  
        <span class="market_price"><?php echo $this->_var['goods_0_50200000_1532066171']['market_price']; ?></span>
	  </p>
	  <p><span class="p-time">销量：<?php echo $this->_var['goods_0_50200000_1532066171']['sales_volume_base']; ?> 件</span></p>

	  
	  
    </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</div>
<?php endif; ?>