<div class="sort cle">
  <div class="bd">
    <form method="GET" name="listform">
      <a title="上架" href="exchange.php?<?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?><?php echo $this->_var['key']; ?>=<?php echo $this->_var['item']; ?>&<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#list" <?php if ($this->_var['pager']['search']['sort'] == 'goods_id'): ?>class="curr"<?php endif; ?>><span class="<?php if ($this->_var['pager']['search']['sort'] == 'goods_id'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">上架</span></a> <a title="价格" href="exchange.php?display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=exchange_integral&order=<?php if ($this->_var['pager']['sort'] == 'exchange_integral' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['search']['sort'] == 'exchange_integral'): ?>class="curr"<?php endif; ?>><span class="<?php if ($this->_var['pager']['search']['sort'] == 'exchange_integral'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">积分</span></a> <a title="更新" href="exchange.php?<?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?><?php echo $this->_var['key']; ?>=<?php echo $this->_var['item']; ?>&<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#list" <?php if ($this->_var['pager']['search']['sort'] == 'last_update'): ?>class="curr"<?php endif; ?>rel="nofollow"><span class="<?php if ($this->_var['pager']['search']['sort'] == 'last_update'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">更新</span></a>
    </form>
  </div>
</div>
<div class="w">
<div class="act-list">
    <form name="compareForm" method="post">
      <ul class="clearfix">
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?> 
        <?php if ($this->_var['goods']['goods_id']): ?>
        <li <?php if ($this->_foreach['goods']['iteration'] % 4 == 1): ?>class="first"<?php endif; ?>>
            <div class="img">
                <a href='<?php echo $this->_var['goods']['url']; ?>' target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"><img data-original="<?php echo $this->_var['goods']['goods_thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" width="200" height="200" class="loading" alt='<?php echo htmlspecialchars($this->_var['goods']['name']); ?>' /></a>
                <p class="absBg"></p>
                <p class="absFg"><a href='<?php echo $this->_var['goods']['url']; ?>' target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></p>
            </div>
            <div class="info">
                <div class="price"><strong class="red arial"><?php echo $this->_var['goods']['exchange_integral']; ?></strong><span class="red jifen">积分</span></div>
                <div class="discount"><span class="f16 yahei"><a href='<?php echo $this->_var['goods']['url']; ?>' target="_blank">立即兑换</a></span></div>
            </div>
        </li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php if ($this->_var['pager']['page'] != $this->_var['pager']['page_count']): ?>
        <li> <a id="nextpage" class="nextpage" href="<?php echo $this->_var['pager']['page_next']; ?>"><i></i></a> </li>
        <?php endif; ?>        
      </ul>
    </form>
  </div>
</div>
<div class="blank5"></div>
