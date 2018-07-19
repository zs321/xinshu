<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ectouch_css']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/TouchSlide.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/ectouch.js"></script>
</head>
<body style="background:#fff">
<div id="page">
  <header id="header" >
    <div class="header_l"> <a class="ico_02" href="#menu"> 菜单栏 </a> </div>
    <h1>红包优惠券</h1>
    <div class="header_r"> <a class="ico_01" href="flow.php"> 购物车 </a> </div>
  </header>
</div>



<div class="blank2"></div>
	<div class="BonusList">
		<?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');$this->_foreach['bonus'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bonus']['total'] > 0):
    foreach ($_from AS $this->_var['bonus']):
        $this->_foreach['bonus']['iteration']++;
?>
		<?php if ($this->_var['bonus']['type_id']): ?>
		<dl>
			<dt>
				<div class="jine"><?php echo $this->_var['bonus']['type_money']; ?></div>
				<a href="bonus.php?act=getBonus&type_id=<?php echo $this->_var['bonus']['type_id']; ?>" class="getBonus">点击领取</a>
			</dt>
			<dd>
				<div class="tiaojian">订单满<font class="j"><?php echo $this->_var['bonus']['min_goods_amount']; ?></font>可用</div>
				<div class="time"><font class="tt"><?php echo $this->_var['bonus']['use_start_date']; ?></font>到<font class="tt"><?php echo $this->_var['bonus']['use_end_date']; ?></font>使用</div>
			</dd>
			<div class="blank1"></div>
		</dl>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		<div class="blank2"></div> 
	</div>
<div class="blank2"></div>



<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<nav id="menu" style="display:None">
  <ul>
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
    <li> <a href="<?php echo $this->_var['cat']['url']; ?>"> <?php echo htmlspecialchars($this->_var['cat']['name']); ?> </a>
      <ul>
        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
        <li> <a href="<?php echo $this->_var['child']['url']; ?>"> <?php echo htmlspecialchars($this->_var['child']['name']); ?> </a>
          <ul>
            <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
            <li> <a href="<?php echo $this->_var['childer']['url']; ?>"> <?php echo htmlspecialchars($this->_var['childer']['name']); ?> </a> </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</nav>

<div id="main-search" class="main-search">
	<div class="hd"> <span class="ico_08 close"> 关闭 </span> </div>
	<div class="bd">
		  <div class="search_box">
			<form action="search.php" method="post" id="searchForm" name="searchForm">
			  <div class="content">
				<input class="text" type="search" name="keywords" id="keywordBox" autofocus />
				<button class="ico_07" type="submit" value="搜 索" onclick="return check('keywordBox')"></button>
			  </div>
			</form>
		  </div>
	</div>
</div>


<script type="text/javascript">
window.onload = function(){
  $('#menu').css('display','');
}
$(function() {
	$('nav#menu').mmenu();
	$('#get_search_box').click(function(){
		$(".mm-page").children('div').hide();
		$("#main-search").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
		//$('#keywordBox').focus();
	})
	$("#main-search .close").click(function(){
		$(".mm-page").children('div').show();
		$("#main-search").hide();
	})
});
</script>
</body>
</html>
