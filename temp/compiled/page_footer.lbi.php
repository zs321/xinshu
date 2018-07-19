<div class="site-footer">

  <div class="">
  	<div class="footer-links-w">
		<div class="footer-links clearfix"> 
				  <?php $_from = get_shop_help(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
				  <dl class="col-links <?php if (($this->_foreach['no']['iteration'] <= 1)): ?>col-links-first<?php endif; ?>">
					<dt><?php echo $this->_var['help_cat']['cat_name']; ?></dt>
					<?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['foo']['iteration']++;
?>
				<?php if ($this->_foreach['foo']['iteration'] < 5): ?>
					<dd><a rel="nofollow" href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['short_title']; ?></a></dd>
				<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				  </dl>
				  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				  <dl class="col-links">
					<dt>微信关注我们</dt>
					  <?php $_from = get_advlist_position_name_pc(微信二维码,0,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_30949200_1531906184');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_30949200_1531906184']):
        $this->_foreach['index_image']['iteration']++;
?>
						<dd><img src="<?php echo $this->_var['ad_0_30949200_1531906184']['image']; ?>" width=85 height=85><br>微信扫一扫</dd>
					  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				   
					
				  </dl>
				  
				  <dl class="col-contact">
					<dd class="phone"><?php echo $this->_var['service_phone']; ?></dd>
					<?php if ($this->_var['service_email']): ?>
				  	<dd class="email"><?php echo $this->_var['service_email']; ?></dd>
				  <?php endif; ?>
					<?php if ($this->_var['shop_address']): ?>
				  	<dd class="address"><?php echo $this->_var['shop_address']; ?></dd>
				  <?php endif; ?>
					
				  </dl>
		</div>
	</div>
	
	

	
	
    <div class="footer-info clearfix" >
      <div class="info-text">
      <p>
      <?php echo $this->_var['copyright']; ?> <?php echo $this->_var['shop_postcode']; ?>

      <?php if ($this->_var['icp_number']): ?>
      <a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
      <?php endif; ?>
      <?php if ($this->_var['stats_code']): ?><?php echo $this->_var['stats_code']; ?><?php endif; ?>
      </p>
        <p class="nav_bottom">
        <?php if ($this->_var['navigator_list']['bottom']): ?>
      <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_30975700_1531906184');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_30975700_1531906184']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
      <a href="<?php echo $this->_var['nav_0_30975700_1531906184']['url']; ?>" <?php if ($this->_var['nav_0_30975700_1531906184']['opennew'] == 1): ?>target="_blank"<?php endif; ?> <?php if (($this->_foreach['nav_bottom_list']['iteration'] <= 1)): ?> class="noborder" <?php endif; ?>><?php echo $this->_var['nav_0_30975700_1531906184']['name']; ?></a>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
      </p>
      <?php if ($this->_var['txt_links']): ?> 
        <p>友情链接：
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['link']):
        $this->_foreach['name']['iteration']++;
?>
   <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </p>
        <?php endif; ?>
      <?php if ($this->_var['img_links']): ?> 
        <p class="img_links">
        <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
        <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" border=0></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </p>
        <?php endif; ?>
      </div>      
    </div>    
  </div>
  
  <div class="footer_service">
    <div class="container wrapper">
      <ul>
        <li class="s1">
          <b>精选大牌</b>
          <span>优质品牌 品质呈现</span></li>
        <li class="s2">
          <b>正品保证</b>
          <span>品牌授权 买得放心</span></li>
        <li class="s3">
          <b>闪电发货</b>
          <span>极速发货 快速到家</span></li>
        <li class="s4">
          <b>售后无忧</b>
          <span>无条件 退换货</span></li>
      </ul>
    </div>
  </div>
  
  
</div>
<?php echo $this->fetch('library/right_sidebar.lbi'); ?>
<script type="text/javascript">
$("img").lazyload({
	effect: "fadeIn",
	threshold: 100,
	failure_limit: 25,
	skip_invisible: false
});
</script>
