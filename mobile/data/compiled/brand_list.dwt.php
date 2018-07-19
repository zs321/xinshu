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
<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/modernizr.js"></script>
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
    <h1>品牌中心</h1>
  </header>
  <div class="waterfallCon">
    <div class="sideCon">
      <ul class="side grid effect-1" id="grid">
        
        <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_data');$this->_foreach['brand_list_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_list_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand_data']):
        $this->_foreach['brand_list_foreach']['iteration']++;
?> 
        <li> <a href="<?php echo $this->_var['brand_data']['url']; ?>"> <img brandid="<?php echo $this->_var['brand_data']['brand_id']; ?>" class="banner" dataimg="data/brandlogo/<?php echo $this->_var['brand_data']['brand_banner']; ?>" src="<?php echo $this->_var['site_url']; ?>/data/brandlogo/<?php echo $this->_var['brand_data']['brand_logo']; ?>" loaded="true" style="transition: all 360ms ease 0s; opacity: 1;">
          <p class="brand-name"> <?php echo $this->_var['brand_data']['brand_name']; ?> </p>

          </a> </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
        
    </div>
 
  </div>
  <div class="blank2"> </div>
  <?php echo $this->fetch('library/page_footer.lbi'); ?> </div>
<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/masonry.js"></script> 
<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/imagesloaded.js"></script> 
<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/classie.js"></script> 
<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/AnimOnScroll.js"></script> 
<script>
new AnimOnScroll( document.getElementById( 'grid' ), {
	minDuration : 0.4,
	maxDuration : 0.7,
	viewportFactor : 0.2
} );
</script>
</body>
</html>