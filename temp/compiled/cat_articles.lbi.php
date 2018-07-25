  <div class="title_list">
    <span class="tl_one"><?php echo htmlspecialchars($this->_var['articles_cat']['name']); ?></span>
    <a class="more" href="<?php echo $this->_var['articles_cat']['url']; ?>">查看更多&gt;</a></div>
  <div class="list2">
  <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');$this->_foreach['article_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_item']['total'] > 0):
    foreach ($_from AS $this->_var['article_item']):
        $this->_foreach['article_item']['iteration']++;
?>
    <div class="list_son"<?php if ($this->_foreach['article_item']['iteration'] % 4 == 0): ?> style="margin-right:0;"<?php endif; ?>>
      <div class="list_son_img">
        <a href="<?php echo $this->_var['article_item']['url']; ?>">
	  <img data-original="<?php echo $this->_var['article_item']['pic']; ?>" src="themes/huazhuangpin/images/spacer.gif" alt="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>" class="loading">
        </a>
      </div>
      <div class="list_son_desc">
        <p class="title"><?php echo $this->_var['article_item']['short_title']; ?></p>
        <p class="time"><?php echo $this->_var['article_item']['add_time']; ?></p>
        <p class="desc"><?php if ($this->_var['article_item']['description']): ?>[摘要]<?php echo sub_str($this->_var['article_item']['description'],40); ?><?php endif; ?></p></div>
    </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
