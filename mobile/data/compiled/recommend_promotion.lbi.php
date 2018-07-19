
<?php if ($this->_var['promotion_goods']): ?>
<div class="blank2"></div>
<section class="item_show_box1 box1 region" id="JS_limit_table">
    <h3>
      <a target="_top" href="search.php?intro=promotion">
        特价促销<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
        <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
        <div class="goodsItem flex_in">
            <a href="<?php echo $this->_var['goods']['url']; ?>">
                <img src="/<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
            </a>
            <div class="goods_center">
				<?php if ($this->_var['goods']['promote_price'] != ""): ?> 
				<span class="price_s"> <?php echo $this->_var['goods']['promote_price']; ?> <a href="javascript:;" onclick="categoryaddToCart2(<?php echo $this->_var['goods']['id']; ?>)" class="catbuybtn"></a></span> 
				<?php else: ?> 
				<span class="price_s"> <?php echo $this->_var['goods']['shop_price']; ?> <a href="javascript:;" onclick="categoryaddToCart2(<?php echo $this->_var['goods']['id']; ?>)" class="catbuybtn"></a></span> 
				<?php endif; ?>
				<p class="goods_tit"><?php echo sub_str(htmlspecialchars($this->_var['goods']['name']),12); ?></p>
            </div>
            <div class="timedjs">
	    <div class="JS_leaveTime" data-timeline="<?php echo $this->_var['goods']['promote_end_date']; ?>"><em>00</em>天<em>00</em>时<em>00</em>分<em>00</em>秒</div>
            </div>
        </div>
         <?php if ($this->_foreach['goods']['iteration'] % 2 == 0): ?></div><div class="flex flex-f-row"><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</section>
<?php endif; ?>
