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
<<<<<<< HEAD
                <?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_03160100_1532325278');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_03160100_1532325278']):
        $this->_foreach['hot_goods']['iteration']++;
?>
                <li><div class="groupimg"><a href="<?php echo $this->_var['goods_0_03160100_1532325278']['url']; ?>"><img src="/<?php echo $this->_var['goods_0_03160100_1532325278']['thumb']; ?>" /></a></div>
		<div class="grouptit"><?php echo sub_str(htmlspecialchars($this->_var['goods_0_03160100_1532325278']['goods_name']),12); ?></div>
		<div class="groupprice"><span class="last_price"><?php echo $this->_var['goods_0_03160100_1532325278']['last_price']; ?></span><span class="zhekou"><?php echo $this->_var['goods_0_03160100_1532325278']['zhekou']; ?>折</span></div>
=======
                <?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_93400000_1532332418');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_93400000_1532332418']):
        $this->_foreach['hot_goods']['iteration']++;
?>
                <li><div class="groupimg"><a href="<?php echo $this->_var['goods_0_93400000_1532332418']['url']; ?>"><img src="/<?php echo $this->_var['goods_0_93400000_1532332418']['thumb']; ?>" /></a></div>
		<div class="grouptit"><?php echo sub_str(htmlspecialchars($this->_var['goods_0_93400000_1532332418']['goods_name']),12); ?></div>
		<div class="groupprice"><span class="last_price"><?php echo $this->_var['goods_0_93400000_1532332418']['last_price']; ?></span><span class="zhekou"><?php echo $this->_var['goods_0_93400000_1532332418']['zhekou']; ?>折</span></div>
>>>>>>> 472b4ff2cff822e85fb8c64bfaf7828e2cd2a2a8
                </li>
                <?php if ($this->_foreach['hot_goods']['iteration'] % 2 == 0 && $this->_foreach['hot_goods']['iteration'] != $this->_foreach['hot_goods']['total']): ?></ul><ul><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>


</div>
<?php endif; ?>