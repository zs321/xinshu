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
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.json.js"></script> 
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/transport_jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.countdown-2.5.3.min.js"></script> 
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
    <h1> 杏树认购 </h1>
  </header>
  <?php echo $this->fetch('exchange_tree.dwt'); ?>
</div>


<?php echo $this->fetch('library/page_footer.lbi'); ?> </div>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.more.js"></script> 
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/ectouch.js"></script> 
</body>
</html>

<script language="javascript">
var ss;
window.onload=function()
{
var h=document.documentElement.clientHeight;//可见区域高度
var header_h = $("#header").height();
var footer_h = $(".global-nav").height();

ss=document.getElementById('ground');
ss.style.height= (parseInt(h) - parseInt(header_h) - parseInt(footer_h)) +"px";
console.log(parseInt(h) - parseInt(header_h) - parseInt(footer_h));
console.log(footer_h);


}

   function ajaxChange(){
        Ajax.call('pre_sale.php', 'act=tree_change', changeResponse, 'GET', 'JSON');
   }

   function changeResponse(data){
         console.log(data);
   }

</script>