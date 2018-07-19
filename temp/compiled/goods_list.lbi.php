<div class="sort">
  <div class="bd">
    <form method="GET" name="listform">
      <a title="销量" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume_base&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume_base' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'sales_volume_base'): ?>class="curr"<?php endif; ?> rel="nofollow"><span class="<?php if ($this->_var['pager']['sort'] == 'sales_volume_base'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">销量</span></a> <a title="价格" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>class="curr"<?php endif; ?> rel="nofollow"><span class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">价格</span></a> <a title="上架时间" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>class="curr"<?php endif; ?>rel="nofollow"><span class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">上架时间</span></a>
      <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
      <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
      <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
      <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
      <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
      <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
      <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
      <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
      <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
    </form>
  </div>
</div>
<div class="productlist">
  <ul class="cle">
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?> 
    <?php if ($this->_var['goods']['goods_id']): ?>
    <li id="li_<?php echo $this->_var['goods']['goods_id']; ?>"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="productitem"> <span class="productimg"> <img width="150" height="150" title="<?php echo $this->_var['goods']['goods_name']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" data-original="<?php echo $this->_var['goods']['goods_thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading pic_img_<?php echo $this->_var['goods']['goods_id']; ?>" style="display: block;"> </span> <span class="nalaprice xszk">
      <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?> <?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?> 
      
      <font class="xiaoliang">已售出<span class="sales"><?php echo $this->_var['goods']['sales_volume_base']; ?></span></font> </span> <span class="productname"><?php echo $this->_var['goods']['goods_name']; ?></span> </a>
      <div class="glmask"><div class="addCart" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);">加入购物车</div></div>
      </li>
    <?php endif; ?>
    <?php endforeach; else: ?>
    <div style="text-align:center;padding-top:30px;"><img src="themes/huazhuangpin/images/searchnull.jpg" alt=""></div>
    <div style="text-align:center;font-size: 22px !important;padding-top:30px;">暂无记录……</div>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </form>
    <?php if ($this->_var['pager']['page'] != $this->_var['pager']['page_count']): ?>
    <li> <a id="nextpage" class="nextpage" href="<?php echo $this->_var['pager']['page_next']; ?>"><i></i></a> </li>
    <?php endif; ?>
  </ul>
  <br clear="all">
</div>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>