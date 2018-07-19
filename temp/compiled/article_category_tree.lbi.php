<?php if ($this->_var['article_categories']): ?>
                <div class="right_one">
                    <h2>文章分类</h2>
                    <ul>
		    <?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_95886900_1531907249');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_95886900_1531907249']):
?>
                        <li<?php if ($this->_var['cat_0_95886900_1531907249']['id'] == $this->_var['cat_id']): ?> class="on"<?php endif; ?>><a href="<?php echo $this->_var['cat_0_95886900_1531907249']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat_0_95886900_1531907249']['name']); ?></a></li>
 		    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   </ul>
                </div>
<?php endif; ?>