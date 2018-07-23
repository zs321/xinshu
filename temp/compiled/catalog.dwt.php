<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $this->_var['page_title']; ?></title>

<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/huazhuangpin/common.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div id="wrapper">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="box common_main" style="margin-top:10px;">
     <div class="box_1" style="padding:20px;">
    <div class="boxCenterList RelaArticle clearfix">

<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
<div class="catalog-one">
	<h2><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h2>

						  <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['namechild'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['namechild']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['namechild']['iteration']++;
?>
						  <dl>
						<dt><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
							<dd class="cat_childer">
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
						  <div class="clear"></div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

     </div>
   </div>
 </div>
  <div class="blank5"></div>
</div>


<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
