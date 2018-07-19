<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.json.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery-lazyload.js" ></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/transport_jquery.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/utils.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/lizi_common.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jquery-lazyload.js,easydialog.min.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js,lizi_common.js')); ?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?090f45997b7b0cf2271bce729f4c9349";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<div id="header" class="new_header">
  <div class="site-topbar">
	<div class="container">
    	<div class="topbar-nav">
        	Hi~欢迎来到<?php echo $this->_var['shop_name']; ?>！
        </div>
	    <ul class="sn-quick-menu">
	      <li class="sn-mytaobao menu-item j_MyTaobao">
		<div class="sn-menu">
		  <a aria-haspopup="menu-2" tabindex="0" class="menu-hd" href="user.php" target="_top" rel="nofollow">我的信息<b></b></a>
		  <div id="menu-2" class="menu-bd">
		    <div class="menu-bd-panel" id="myTaobaoPanel">
		       <a href="user.php?act=order_list" target="_top" rel="nofollow">我的订单</a> 
		       <a href="user.php?act=address_list" target="_top" rel="nofollow">我的地址</a>
		       <a href="user.php?act=collection_list" target="_top" rel="nofollow">我的收藏</a>
		    </div>
		  </div>
		</div>
	      </li>
	    </ul>
        <div class="topbar-info J_userInfo" id="ECS_MEMBERZONE">
        	<?php 
$k = array (
  'name' => 'member_info_top',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
    </div>
  </div>
  <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
    <div class="logo-search">
        <a class="logodiv" href="./" title="<?php echo $this->_var['shop_name']; ?>"><div class="c-logo"></div></a>
		<div class="c-slogan">
		</div>
		<div class="search-tab" >
            <div class="search-form">
	    <form action="search.php" method="get" id="searchForm" name="searchForm" onSubmit="return checkSearchForm()">
                <div class="so-input-box">
                	<input type="text" name="keywords" id="keyword" class="soinput" placeholder="请输入关键词" autocomplete="off" />
			<input type="hidden" value="k1" name="dataBi">
                </div>
		<input id="searchBtn" type="submit" class="sobtn sogoods" value="搜 索" />
		<div class="clear"></div>
	    </form>
            </div>
            <?php if ($this->_var['searchkeywords']): ?>
            <div class="search-tags"><span>热搜榜：</span>
		<?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
		<a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" rel="nofollow"><?php echo $this->_var['val']; ?></a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
            <?php endif; ?>
            </div>
            <div class="topbar-cart" id="ECS_CARTINFO_TOP">
        	<?php 
$k = array (
  'name' => 'cart_info_top',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            </div>
    </div>
    <div class="w-nav">
        <div class="t-nav">
        	<div class="nav-categorys j-allCate">
                <div class="catetit">
                    <h2><a href="javascript:;" rel="nofollow">商品分类<i class="c-icon"></i></a></h2>
                </div>
                <ul class="cate-item j-extendCate <?php if ($this->_var['script_name'] != "index"): ?>dis-n<?php endif; ?>" <?php if ($this->_var['script_name'] != "index"): ?>style="height:auto;border-bottom:solid 2px #333"<?php endif; ?>>
                    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
			<?php if ($this->_var['script_name'] == "index"): ?>
					<?php if ($this->_foreach['foo']['iteration'] < 6): ?>
					<li>
								<div class="cateone cate<?php echo $this->_foreach['foo']['iteration']; ?>">
									<a  <?php if ($this->_var['cat']['cat_ico']): ?> style="background:url(data/cat_ico/<?php echo $this->_var['cat']['cat_ico']; ?>) 10px 0 no-repeat"<?php else: ?>style="background:url(themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/cat_ico.png) 10px 0 no-repeat"<?php endif; ?> href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?><i class="iconfont">&#xe600;</i></a>
							<div class="childer_hide"> 
							<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
						  <a href="<?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>     
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</div>  
		
								</div>
					<?php if ($this->_var['cat']['cat_id']): ?>
								<div class="catetwo">
					  <div class="topMap clearfix">
						<div class="subCat clearfix">
						  <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['namechild'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['namechild']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['namechild']['iteration']++;
?>
						  <dl>
						<dt><h3><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></h3></dt>
							<dd class="goods-class">
							  <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['childername'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childername']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['childername']['iteration']++;
?>
							<a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
							  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</dd>
						  </dl>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</div>
					  </div>
								</div>
					<?php endif; ?>
					</li>	
					<?php endif; ?>

			
			<?php else: ?>
			
					<li>
								<div class="cateone cate<?php echo $this->_foreach['foo']['iteration']; ?>">
									<a  <?php if ($this->_var['cat']['cat_ico']): ?> style="background:url(data/cat_ico/<?php echo $this->_var['cat']['cat_ico']; ?>) 10px 0 no-repeat"<?php else: ?>style="background:url(themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/cat_ico.png) 10px 0 no-repeat"<?php endif; ?> href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?><i class="iconfont">&#xe600;</i></a>
							<div class="childer_hide"> 
							<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
						  <a href="<?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>     
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</div>  
		
								</div>
					<?php if ($this->_var['cat']['cat_id']): ?>
								<div class="catetwo" <?php if ($this->_foreach['foo']['iteration'] > 5): ?>style=" margin-top:300px;"<?php endif; ?>>
					  <div class="topMap clearfix">
						<div class="subCat clearfix">
						  <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['namechild'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['namechild']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['namechild']['iteration']++;
?>
						  <dl>
						<dt><h3><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></h3></dt>
							<dd class="goods-class">
							  <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['childername'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childername']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['childername']['iteration']++;
?>
							<a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
							  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</dd>
						  </dl>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</div>
					  </div>
								</div>
					<?php endif; ?>
							</li>
					
			
			<?php endif; ?>
			

			
		    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					<?php if ($this->_var['script_name'] == "index"): ?>
					<li class="see_all_cat">
						<a href="catalog.php">查看所有分类</a>
					</li>
					<?php endif; ?>
					
                    </ul>
            </div>
            <ul class="nav-items">
	            	<li>
	            		<a href="./" <?php if ($this->_var['script_name'] == "index"): ?> class="cur"<?php endif; ?> rel="nofollow">首页</a>
	            	</li>
		<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
	            	<li>
	            		<a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>  <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?> rel="nofollow"><?php echo $this->_var['nav']['name']; ?></a>
	            	</li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>    
    </div>
</div>
