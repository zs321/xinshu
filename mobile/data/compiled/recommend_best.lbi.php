
<?php if ($this->_var['best_goods']): ?>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="search.php?intro=best">
        精品推荐<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
        <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_75850800_1531987913');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_75850800_1531987913']):
        $this->_foreach['goods']['iteration']++;
?>
        <div class="goodsItem flex_in">
            <a href="<?php echo $this->_var['goods_0_75850800_1531987913']['url']; ?>">
                <img src="/<?php echo $this->_var['goods_0_75850800_1531987913']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_75850800_1531987913']['name']); ?>" />
            </a>
            <div class="goods_center">
				<?php if ($this->_var['goods_0_75850800_1531987913']['promote_price'] != ""): ?> 
				<span class="price_s"> <?php echo $this->_var['goods_0_75850800_1531987913']['promote_price']; ?> <a href="javascript:;" onclick="categoryaddToCart2(<?php echo $this->_var['goods_0_75850800_1531987913']['id']; ?>)" class="catbuybtn"></a></span> 
				<?php else: ?> 
				<span class="price_s"> <?php echo $this->_var['goods_0_75850800_1531987913']['shop_price']; ?> <a href="javascript:;" onclick="categoryaddToCart2(<?php echo $this->_var['goods_0_75850800_1531987913']['id']; ?>)" class="catbuybtn"></a></span> 
				<?php endif; ?>
				<p class="goods_tit"><?php echo sub_str(htmlspecialchars($this->_var['goods_0_75850800_1531987913']['name']),12); ?></p>
            </div>
        </div>
         <?php if ($this->_foreach['goods']['iteration'] % 2 == 0): ?></div><div class="flex flex-f-row"><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</section>
<?php endif; ?>
