
<div class="slidebar">
    <ul class="slide_item">

        <li class="item">
            <div class="root_node">会员中心</div>
            <ul>
                <li>
		    <a class="<?php if ($this->_var['action'] == 'default'): ?>on<?php endif; ?>" href="user.php">我的个人中心</a>
                    <a class="<?php if ($this->_var['action'] == 'profile'): ?>on<?php endif; ?>" href="user.php?act=profile"><?php echo $this->_var['lang']['label_profile']; ?></a>
		    <a class="<?php if ($this->_var['action'] == 'collection_list'): ?>on<?php endif; ?>" href="user.php?act=collection_list"><?php echo $this->_var['lang']['label_collection']; ?></a>
		    <a class="<?php if ($this->_var['action'] == 'message_list'): ?>on<?php endif; ?>" href="user.php?act=message_list"><?php echo $this->_var['lang']['label_message']; ?></a>
		    <?php if ($this->_var['affiliate']['on'] == 1): ?><a class="<?php if ($this->_var['action'] == 'affiliate'): ?>on<?php endif; ?>" href="user.php?act=affiliate"><?php echo $this->_var['lang']['label_affiliate']; ?></a><?php endif; ?>
		    <a class="<?php if ($this->_var['action'] == 'comment_list'): ?>on<?php endif; ?>" href="user.php?act=comment_list"><?php echo $this->_var['lang']['label_comment']; ?></a>
                     
                </li>
            </ul>
        </li>
        <li class="item">
            <div class="root_node">订单中心</div>
            <ul>
                <li>
		    <a class="<?php if ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?>on<?php endif; ?>" href="user.php?act=order_list"><?php echo $this->_var['lang']['label_order']; ?></a>
		    <a class="<?php if ($this->_var['action'] == 'address_list'): ?>on<?php endif; ?>" href="user.php?act=address_list"><?php echo $this->_var['lang']['label_address']; ?></a>
		    <a class="<?php if ($this->_var['action'] == 'booking_list'): ?>on<?php endif; ?>" href="user.php?act=booking_list"><?php echo $this->_var['lang']['label_booking']; ?></a>
		    <a class="<?php if ($this->_var['action'] == 'back_list' || $this->_var['action'] == 'back_order_detail'): ?>on<?php endif; ?>" href="user.php?act=back_list">售后管理</a>
                </li>
            </ul>
        </li>
        <li class="item">
            <div class="root_node">账户中心</div>
            <ul>
                <li>
		    <a class="<?php if ($this->_var['action'] == 'bonus' || $this->_var['action'] == 'order_detail'): ?>on<?php endif; ?>" href="user.php?act=bonus"><?php echo $this->_var['lang']['label_bonus']; ?></a>
		    <a class="<?php if ($this->_var['action'] == 'track_packages'): ?>on<?php endif; ?>" href="user.php?act=track_packages"><?php echo $this->_var['lang']['label_track_packages']; ?></a>
		    <a class="<?php if ($this->_var['action'] == 'account_log'): ?>on<?php endif; ?>" href="user.php?act=account_log"><?php echo $this->_var['lang']['label_user_surplus']; ?></a>
		    <a class="<?php if ($this->_var['action'] == 'user_card'): ?>on<?php endif; ?>" href="user.php?act=user_card">会员卡</a>
		    <a href="user.php?act=logout">安全退出</a>
                </li>
            </ul>
        </li>
    </ul>
</div>



