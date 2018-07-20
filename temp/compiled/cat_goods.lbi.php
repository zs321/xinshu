<?php
$sortnum=$GLOBALS['smarty']->_var['sortnum'];
if($sortnum=='')
{
 $sortnum==0;
}
$sortnum=$sortnum+1;
$GLOBALS['smarty']->assign('sortnum',$sortnum);
$catid=$GLOBALS['smarty']->_var['goods_cat']['id'];
$catname=$GLOBALS['smarty']->_var['goods_cat']['name'];
?>
<div class="cn-laytit">
	<div class="title" style="background:url(data/cat_ico/<?php echo $this->_var['goods_cat']['cat_ico']; ?>) 0 center no-repeat; background-size:20px 20px">
		<h3 class="floor_h<?php echo $this->_var['sortnum']; ?>"><?php echo $this->_var['goods_cat']['name']; ?></h3>
	</div>
	
	<div class="link link<?php echo $this->_var['sortnum']; ?>">
		<?php $_from = get_child_tree($catid); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_tree');$this->_foreach['child_tree'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_tree']['total'] > 0):
    foreach ($_from AS $this->_var['child_tree']):
        $this->_foreach['child_tree']['iteration']++;
?>
			<?php if (($this->_foreach['child_tree']['iteration'] - 1) < 12): ?> 
				<a href="<?php echo $this->_var['child_tree']['url']; ?>" title="<?php echo $this->_var['child_tree']['name']; ?>" target="_blank" <?php if ($this->_var['child_tree']['is_show_hot'] == 1): ?>class="hot"<?php endif; ?>><?php echo $this->_var['child_tree']['name']; ?></a>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<a title="<?php echo $this->_var['goods_cat']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods_cat']['url']; ?>">更多....</a>
	</div>
</div>
<div class="cn-fruit cn-fruit-<?php echo $this->_var['sortnum']; ?>">

  <div class="banner">
    <?php
	$GLOBALS['smarty']->assign('index_image',get_advlist('首页'.$sortnum.'F分类商品左侧广告', 1));
    ?>
    <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
		<div class="ban">
		  <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank"><img data-original="<?php echo $this->_var['ad']['image']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading" height="460" width="360"></a>
		</div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
  <div class="goods">
    <ul>
    <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_50800000_1532066171');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_50800000_1532066171']):
        $this->_foreach['goods']['iteration']++;
?>
	
      <li id="li_<?php echo $this->_var['goods_0_50800000_1532066171']['id']; ?>"  <?php if (($this->_foreach['goods']['iteration'] - 1) < 3): ?>style="margin-bottom:10px;"<?php endif; ?>>
        <div class="item">
          <div class="img">
            <a href="<?php echo $this->_var['goods_0_50800000_1532066171']['url']; ?>">
              <img data-original="<?php echo $this->_var['goods_0_50800000_1532066171']['thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading pic_img_<?php echo $this->_var['goods_0_50800000_1532066171']['id']; ?>" height="150" width="150"></a>
          </div>
          <div class="tit">
            <a href="<?php echo $this->_var['goods_0_50800000_1532066171']['url']; ?>"><?php echo sub_str($this->_var['goods_0_50800000_1532066171']['name'],12); ?></a></div>
          <div class="btns">
            <div class="pri j_comPrice">
              <b class="j_sellPrice"><?php if ($this->_var['goods_0_50800000_1532066171']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_50800000_1532066171']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_50800000_1532066171']['shop_price']; ?><?php endif; ?></b></div>
			<a href="javascript:addToCart(<?php echo $this->_var['goods_0_50800000_1532066171']['id']; ?>)"><span class="t-btn">加入购物车<i class="r-arrow"></i></span></a>
			
			
			</div>
        </div>
      </li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
  
  <div class="hot_goods">
  	<dl class="hot_sale">
		<dt>热门畅销</dt>
		<dd>
			<ul>
				<?php $_from = $this->_var['goods_cat']['top_10']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'top_goods_0_50800000_1532066171');$this->_foreach['top_10'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_10']['total'] > 0):
    foreach ($_from AS $this->_var['top_goods_0_50800000_1532066171']):
        $this->_foreach['top_10']['iteration']++;
?>
					<li>
						<a class="thumb" href="<?php echo $this->_var['top_goods_0_50800000_1532066171']['url']; ?>" target="_blank"><img data-original="<?php echo $this->_var['top_goods_0_50800000_1532066171']['thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a>
						<p class="name"><a href="<?php echo $this->_var['top_goods_0_50800000_1532066171']['url']; ?>" target="_blank"><?php echo sub_str($this->_var['top_goods_0_50800000_1532066171']['short_name'],10); ?></a></p>
						<p class="txt"><?php if ($this->_var['top_goods_0_50800000_1532066171']['promote_price'] != ""): ?><?php echo $this->_var['top_goods_0_50800000_1532066171']['promote_price']; ?><?php else: ?><?php echo $this->_var['top_goods_0_50800000_1532066171']['shop_price']; ?><?php endif; ?></p>
					</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</dd>
	</dl>
	<dl class="brands">
        <?php $_from = get_cat_brands($catid,category,6); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'get_brands');$this->_foreach['get_brands'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_brands']['total'] > 0):
    foreach ($_from AS $this->_var['get_brands']):
        $this->_foreach['get_brands']['iteration']++;
?> 
		<?php if ($this->_var['get_brands']['brand_logo']): ?>
			<dd> <a href="<?php echo $this->_var['get_brands']['url']; ?>" title="<?php echo $this->_var['get_brands']['brand_name']; ?>" target="_blank"><img src="data/brandlogo/<?php echo $this->_var['get_brands']['brand_logo']; ?>"  alt="<?php echo $this->_var['get_brands']['brand_name']; ?>" style="display: inline;" /></a> </dd>
		<?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
	</dl>
  
  </div>
  
    <?php
	$GLOBALS['smarty']->assign('index_image',get_advlist('首页'.$sortnum.'F分类商品底部广告', 1));
    ?>
    <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
		<div class="cat_bottom_ad">
		  <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank"><img data-original="<?php echo $this->_var['ad']['image']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a>
		</div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
</div>


