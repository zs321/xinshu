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
<div id="wrapper"> 
<?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="cle">
    <div class="con yh overf">
        <div class="conl lf overf">
            <div class="wz overf">
                <h1><?php echo htmlspecialchars($this->_var['article']['title']); ?></h1>
                <div class="sjy overf">时间: <?php echo $this->_var['article']['add_time']; ?>
                    <font>来源：<?php echo htmlspecialchars($this->_var['article']['author']); ?></font></div>
                <div class="contentat"><?php echo $this->_var['article']['content']; ?></div>
                <div class="tagright">
                    <div class="bdsharebuttonbox bdshare-button-style0-32" data-bd-bind="1491396451648">
                        <a href="#" class="bds_more" data-cmd="more"></a>
                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                        <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    </div>
                    <script>window._bd_share_config = {
                            "common": {
                                "bdSnsKey": {},
                                "bdText": "",
                                "bdMini": "2",
                                "bdMiniList": false,
                                "bdPic": "",
                                "bdStyle": "0",
                                "bdSize": "32"
                            },
                            "share": {},
                            "image": {
                                "viewList": ["qzone", "tsina", "tqq", "renren", "weixin"],
                                "viewText": "分享到：",
                                "viewSize": "32"
                            },
                            "selectShare": {
                                "bdContainerClass": null,
                                "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]
                            }
                        };
                        with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
                    <font>分享到：</font></div>
            </div>
            <div class="bqk overf">
                <div class="bql lf overf">
                    <div class="wxlb overf">
                        <?php if ($this->_var['next_article']): ?>
			<p>上一篇:<a href="<?php echo $this->_var['next_article']['url']; ?>" title="<?php echo $this->_var['next_article']['title']; ?>"><?php echo $this->_var['next_article']['title']; ?></a></p>
			<?php else: ?>
                        <p>上一篇: 没有了</p>
			<?php endif; ?>
                        <?php if ($this->_var['prev_article']): ?>
			<p>下一篇:<a href="<?php echo $this->_var['prev_article']['url']; ?>" title="<?php echo $this->_var['prev_article']['title']; ?>"><?php echo $this->_var['prev_article']['title']; ?></a></p>
			<?php else: ?>
                        <p>下一篇: 没有了</p>
			<?php endif; ?>
                    </div>
                </div>
            </div>
	    <?php if ($this->_var['hot_goods']): ?>
	    <div class="cxh jpzs overf">
                <h3>热销商品</h3>
                <div style="width:110%; height:auto; overflow:hidden;">
		<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                    <a class="mka lf overf" href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['name']; ?>">
                        <img data-original="<?php echo $this->_var['goods']['thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading" alt="<?php echo $this->_var['goods']['name']; ?>">
                        <h4 class="jg overf">
                            <span><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span>
                            <em><?php echo $this->_var['goods']['market_price']; ?></em></h4>
                        <p><?php echo $this->_var['goods']['short_style_name']; ?></p>
                    </a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
            </div>
	    <?php endif; ?>
	    <?php if ($this->_var['promotion_goods']): ?>
            <div class="cxh jpzs overf">
                <h3>特价促销</h3>
                <div style="width:110%; height:auto; overflow:hidden;">
		<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                    <a class="mka lf overf" href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['name']; ?>">
                        <img data-original="<?php echo $this->_var['goods']['thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading" alt="<?php echo $this->_var['goods']['name']; ?>">
                        <h4 class="jg overf">
                            <span><?php echo $this->_var['goods']['promote_price']; ?></span>
                            <em><?php echo $this->_var['goods']['market_price']; ?></em></h4>
                        <p><?php echo $this->_var['goods']['short_style_name']; ?></p>
                    </a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
            </div>
	    <?php endif; ?>
        </div>
        <div class="conr rt overf">
	<?php echo $this->fetch('library/article_category_tree.lbi'); ?>
            <?php if ($this->_var['new_articles']): ?>
	    <div class="zjpd overf">
                <div class="zjpd yd overf">
                    <h1>最新资讯</h1>
                    <div class="ula overf">
		    <?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_0_95411400_1531907249');$this->_foreach['article'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article']['total'] > 0):
    foreach ($_from AS $this->_var['article_0_95411400_1531907249']):
        $this->_foreach['article']['iteration']++;
?>
                        <a class="overf" href="<?php echo $this->_var['article_0_95411400_1531907249']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['article_0_95411400_1531907249']['title']); ?>">
                            <span class="<?php if ($this->_foreach['article']['iteration'] < 4): ?>qs <?php endif; ?>lf"><?php echo $this->_foreach['article']['iteration']; ?></span>
                            <div class="wz overf">
                                <em><?php echo sub_str($this->_var['article_0_95411400_1531907249']['short_title'],30); ?></em>
                            </div>
                        </a>
		    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
	    </div>
            <?php endif; ?>
	    <?php if ($this->_var['related_goods']): ?>
                <div class="zjpd yd overf cztj">
                    <h1>大家都在看</h1>
		    <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
                    <div class="qgou">
                        <div class="gw_cp">
                            <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" target="_blank" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" class="cp_img">
                                <img style="width:290px;height:290;" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" data-original="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading"></a>
                            <p class="jge">
                                <span><?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?><?php else: ?><?php echo $this->_var['releated_goods_data']['shop_price']; ?><?php endif; ?></span>
                                <font class="yjia"><?php echo $this->_var['releated_goods_data']['market_price']; ?></font></p>
                            <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" target="_blank" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" class="cp_title"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a></div>
                    </div>
		    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
	    <?php endif; ?>
            </div>
        </div>
    </div>
  </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
