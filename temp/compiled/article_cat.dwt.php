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
<link href="themes/huazhuangpin/article.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body class="article">
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div id="wrapper"> <?php echo $this->fetch('library/ur_here.lbi'); ?>
    <div class="cle">
        <div class="bdy wrap2 listxg liwrap">
            <div class="cg_left">
                <div class="article_container">
                    <ul>
		    <?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
                        <li>
                            <a href="<?php echo $this->_var['article']['url']; ?>" target="blank" class="img"><img alt="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" data-original="<?php echo $this->_var['article']['pic']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a>
                            <div class="right fr">
                                <div class="tit">
                                    <a class="titf" href="<?php echo $this->_var['article']['url']; ?>" target="_blank"><?php echo $this->_var['article']['short_title']; ?></a>
                                    <div class="time"><?php echo $this->_var['article']['add_time']; ?></div>
				</div>
                                <a class="info" href="<?php echo $this->_var['article']['url']; ?>" target="blank"><?php echo $this->_var['article']['description']; ?></a>
                                <a class="yd" href="<?php echo $this->_var['article']['url']; ?>" target="blank">阅读全文</a>
                            </div>
                        </li>
		    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                </div>
                <div class="pagelist mt15">
                    <?php echo $this->fetch('library/pages.lbi'); ?>
                </div>
            </div>
            <div class="cg_right">
		<?php echo $this->fetch('library/article_category_tree.lbi'); ?>
		<?php if ($this->_var['best_goods']): ?>
                <div class="right_two cztj">
                    <h2>超值推荐</h2>
		    <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                    <div class="qgou">
                        <div class="gw_cp">
                            <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['name']; ?>" class="cp_img">
                                <img alt="<?php echo $this->_var['goods']['name']; ?>" style="width:290px;height:290px;" data-original="<?php echo $this->_var['goods']['thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a>
                            <p class="jge">
                                <span>
                                    <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span>
                                <font class="yjia"><?php echo $this->_var['goods']['market_price']; ?></font></p>
                            <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['name']; ?>" class="cp_title"><?php echo $this->_var['goods']['short_style_name']; ?></a></div>
                    </div>
 		    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
		<?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
document.getElementById('cur_url').value = window.location.href;
</script>
</html>
