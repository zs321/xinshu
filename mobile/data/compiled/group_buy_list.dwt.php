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
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
    <h1> 精品团购 </h1>
  </header>
  <div class="srp album flex-f-row" id="J_ItemList" style="opacity:1;">
    <div class="product flex_in single_item">
      <div class="pro-inner"></div>
    </div>
    <a href="javascript:;" class="get_more"></a> </div>
  <!--
    <div class="product flex_in single_item"style="width:48.9%">
      <div class="pro-inner">
        <div class="proImg-wrap"> <a href="<?php echo $this->_var['group_buy']['url']; ?>"><img alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['group_buy']['goods_thumb']; ?>"> </a> </div>
        <div class="proInfo-wrap">
          <div class="proTitle"> <a href="<?php echo $this->_var['group_buy']['url']; ?>"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></a> </div>
          <div class="proSKU"></div>
          <div class="proPrice"> <em><?php echo $this->_var['group_buy']['lowest_price']; ?></em> </div>
          <div class="proSales"><em>0</em>人已购买</div>
        </div>
      </div>
    </div>--> 
  
  <a href="javascript:;" class="get_more"></a> <?php echo $this->fetch('library/page_footer.lbi'); ?> </div>
</div>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.more.js"></script> 
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/ectouch.js"></script> 
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'group_buy.php?act=asynclist', 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
</body>
</html>