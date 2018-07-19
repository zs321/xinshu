<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/huazhuangpin/group.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<style>
body {
    background:#f5f5f5;
}
</style>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div id="wrapper">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'time.js')); ?>
<div class="temai_box">
  <div class="tgprc">
    <?php if ($this->_var['gb_list']): ?> 
    <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');if (count($_from)):
    foreach ($_from AS $this->_var['group_buy']):
?>
    <div class="qgitem_w"  data-sr="move 1rem, over 2s, enter top">
      <div class=qgitem><a href="<?php echo $this->_var['group_buy']['url']; ?>" class="pic"><img data-original="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading" border="0" alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" /> </a>
        <div class=pic_info>
          <div class="goods_name"><a href="<?php echo $this->_var['group_buy']['url']; ?>"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></a></div>
          <div class="group_buy_desc"><?php echo $this->_var['group_buy']['act_desc']; ?></div>
          <div class="sy_num"><em><i style="width:<?php if ($this->_var['group_buy']['sy_num'] == 0): ?>100<?php else: ?><?php echo $this->_var['group_buy']['sy_w']; ?><?php endif; ?>%"></i></em><span class="word_c"><?php if ($this->_var['group_buy']['sy_num'] == 0): ?>放心团购<?php else: ?>剩余<?php echo $this->_var['group_buy']['sy_num']; ?>件<?php endif; ?></span></div>
          <div class="fd30_time" dayh="1" endtime="<?php echo $this->_var['group_buy']['formated_end_date']; ?>" starttime="<?php echo $this->_var['group_buy']['formated_start_date']; ?>"></div>
          <div class=cle></div>
        </div>
        <div class="group_btn bg_c"><I><?php echo $this->_var['group_buy']['price_ladder']['0']['formated_price']; ?></I><del><?php echo $this->_var['group_buy']['market_price']; ?></del><a href="<?php echo $this->_var['group_buy']['url']; ?>" class="word_c groupbuy">立即团购</a></div>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php if ($this->_var['pager']['page'] != $this->_var['pager']['page_count']): ?>
      <li> <a id="nextpage" class="nextpage" style="height:365px;" href="<?php echo $this->_var['pager']['page_next']; ?>"><i></i></a> </li>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <?php echo $this->fetch('library/pages.lbi'); ?>
</div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
