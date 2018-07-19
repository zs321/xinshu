<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>商品分类</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ectouch_css']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.min.js"></script>
</head>

<body>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="index.php"> 返回 </a> </div>
  <div id="search_box" style="display:block;padding:0;margin:0 1rem 0 3.2rem">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input placeholder="请输入商品名称" name="keywords" type="text" id="keywordBox" />
        <button class="ico_07" type="submit" onclick="return check('keywordBox')"> </button>
      </form>
    </div>
    </div>
</header>

 
<div class="container">    
  <div class="category-box" style="background:#fff">
    <div class="category1" style="outline: none;" tabindex="5000" style="background:#fff">
      <ul class="clearfix" style="background:#fff">
       <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['name']['iteration']++;
?>
        <li <?php if (($this->_foreach['name']['iteration'] <= 1)): ?>class="cur"<?php endif; ?>><?php echo htmlspecialchars($this->_var['cat']['name']); ?></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    <div class="category2" style=" outline: none; overflow-y:scroll" tabindex="5001">
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['name']['iteration']++;
?>      
      <dl style="display: none;<?php if (($this->_foreach['name']['iteration'] <= 1)): ?>display: block;<?php endif; ?>"> 
        <a href="category.php?id=<?php echo $this->_var['cat']['id']; ?>" class="all" style=" color:#FFF">进入<?php echo htmlspecialchars($this->_var['cat']['name']); ?>频道&nbsp;></a>
        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>   
        <dt><a href="<?php echo $this->_var['child']['url']; ?>" ><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt> 
        <dd> 
        <div class="fenimg">
           <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['cat22'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat22']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['cat22']['iteration']++;
?> 
           <?php if ($this->_var['childer']['ico']): ?> 
        <div class="fen_img">     
        <a href="<?php echo $this->_var['childer']['url']; ?>"><span><img alt="" src="<?php echo $this->_var['childer']['ico']; ?>"></span><em><?php echo $this->_var['childer']['name']; ?></em></a> 
        </div>
        <?php else: ?>
        <div class="fen">
        <a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo $this->_var['childer']['name']; ?></a> 
        </div>  
<?php endif; ?>  
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
     
         </dd>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      </dl>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
  </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.nicescroll.min.js"></script> 
<script type="text/javascript">
$(function () {
    //滚动条

    //图片延迟加载
 //   $(".lazyload").scrollLoading({container: $(".category2")});
    //点击切换2 3级分类
    $(".category1").niceScroll({cursorwidth: 0,cursorborder:0});

    $('.category-box').height($(window).height());

    //点击切换2 3级分类
	var array=new Array();
	$('.category1 li').each(function(){ 
		array.push($(this).position().top-45);
	});
	
	$('.category1 li').click(function() {
		var index=$(this).index();
		$('.category1').delay(200).animate({scrollTop:array[index]},300);
		$(this).addClass('cur').siblings().removeClass();
		$('.category2 dl').eq(index).show().siblings().hide();
                $('.category2').scrollTop(0);
	});

});

/* 搜索验证 */
function check(Id){
	var strings = document.getElementById(Id).value;
	if(strings.replace(/(^\s*)|(\s*$)/g, "").length == 0){
		return false;
	}
	return true;
}
</script>
</body>
</html>