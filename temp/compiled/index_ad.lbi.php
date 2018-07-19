    <ul class="slidepic">
        <?php $_from = get_flash_xml(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash']):
        $this->_foreach['myflash']['iteration']++;
?>
	  <li style="background-image: url(<?php echo $this->_var['flash']['src']; ?>);"> <a target="_blank" href="<?php echo $this->_var['flash']['url']; ?>" ></a> </li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <div class="num">
    	<ul>
        <?php $_from = get_flash_xml(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash']):
        $this->_foreach['myflash']['iteration']++;
?>
	  <li></li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
    </div>
