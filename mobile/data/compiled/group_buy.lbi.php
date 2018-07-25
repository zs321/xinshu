<?php if ($this->_var['group_buy_goods']): ?>
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
                <?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_86653000_1532489882');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_86653000_1532489882']):
        $this->_foreach['hot_goods']['iteration']++;
?>
                <li><div class="groupimg"><a href="<?php echo $this->_var['goods_0_86653000_1532489882']['url']; ?>"><img src="/<?php echo $this->_var['goods_0_86653000_1532489882']['thumb']; ?>" /></a></div>
		<div class="grouptit"><?php echo sub_str(htmlspecialchars($this->_var['goods_0_86653000_1532489882']['goods_name']),12); ?></div>
		<div class="groupprice"><span class="last_price"><?php echo $this->_var['goods_0_86653000_1532489882']['last_price']; ?></span><span class="zhekou"><?php echo $this->_var['goods_0_86653000_1532489882']['zhekou']; ?>折</span></div>
                </li>
                <?php if ($this->_foreach['hot_goods']['iteration'] % 2 == 0 && $this->_foreach['hot_goods']['iteration'] != $this->_foreach['hot_goods']['total']): ?></ul><ul><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>


</div>
<?php endif; ?>