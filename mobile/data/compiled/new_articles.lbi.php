<div class="hao-gd-body fixed-Width">
    <div class="component-typehao-img-con">
        <img class="component-typehao-img" src="themes/huazhuangpin/images/rd_w.png" height="40" width="auto">
    </div>
    <div class="rollTextMenus">
    <ul>
    <?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
	 <li><a href="<?php echo $this->_var['article']['url']; ?>"><?php echo $this->_var['article']['short_title']; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    </div>
</div>
<script type="text/javascript">
  $(".hao-gd-body").slide({mainCell:".rollTextMenus ul" , effect:"top", autoPlay:true, vis:1 , autoPage:true});
</script>
