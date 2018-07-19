<link href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/right_bar.css" rel="stylesheet" type="text/css" />
<div class="right-sidebar-con">
	<div class="right-sidebar-main">
        <div class="right-sidebar-panel">
            <div id="quick-links" class="quick-links">
            	<ul>
                    <li class="quick-area quick-login">
                        <a href="javascript:;" class="quick-links-a"><i class="setting"></i></a>
                        <div class="sidebar-user quick-sidebar">
                        	<i class="arrow-right"></i>
                            <div class="sidebar-user-info">
                            	<?php if (! $_SESSION['user_id'] > 0): ?>
                                <div class="user-pic">
                                	<div class="user-pic-mask"></div>
                                    <img src="themes/huazhuangpin/images/people.gif" />
                                </div>
                                <p>你好！请<a href="user.php" class="quick-login-a main-color">登录</a>|<a href="user.php?act=register" class="main-color">注册</a></p>
                                <?php else: ?>
                                <div class="user-have-login">
                                	<div class="user-pic">
                                        <div class="user-pic-mask"></div>
                                        <img src="themes/huazhuangpin/images/people.gif" />
                                    </div>
                                    <div class="user-info">
                                    	<p>用户名：<?php echo $_SESSION['user_name']; ?></p>
                                    </div>
                                </div>
                                <p class="mt10">
                                	<a class="btn order-btn" href="user.php?act=order_list">订单中心</a>
									<a class="btn account-btn" href="user.php?act=account_detail">帐户中心</a>
                                </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-tabs">
                        <div class="cart-list quick-links-a" id="collectBox">
                            <i class="cart"></i>
                            <div class="span">购物车</div>
                            <span class="ECS_CARTINFO" id="ECS_CARTINFO"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span>
                        </div>
                    </li>
                    <li class="sidebar-tabs">
                        <a href="javascript:void(0);" class="mpbtn_history quick-links-a"><i class="history"></i></a>
                        <div class="popup">
                            <font id="mpbtn_histroy">浏览历史</font>
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                    <li id="collectGoods">
                        <a href="user.php?act=collection_list" target="_blank" class="mpbtn_collect quick-links-a"><i class="collect"></i></a>
                        <div class="popup">
                            我的收藏
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                    <li id="collectGoods">
                        <a href="user.php?act=account_log" target="_blank" class="mpbtn_collect quick-links-a"><i class="account"></i></a>
                        <div class="popup">
                            我的资产
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="quick-toggle">
            	<ul>
                    <li class="quick-area">
                    	<a class="quick-links-a" href="javascript:;"><i class="customer-service"></i></a>
                        <div class="sidebar-service quick-sidebar">
                        	<i class="arrow-right"></i>
				<?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
				<?php if ($this->_var['im']): ?>
				<div class="customer-service">
				    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['im']; ?>&site=qq&menu=yes" alt="点击这里给我发消息" title="点击这里给我发消息"><span class="icon-qq"></span>QQ客服</a>
				</div>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
				<?php if ($this->_var['im']): ?>
				<div class="customer-service">
				    <a target="_blank" href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" alt="点击这里给我发消息" title="点击这里给我发消息"><span class="icon-ww"></span>旺旺客服</a>
				</div>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </li>
                    <li class="quick-area">
                    	<a class="quick-links-a" href="javascript:;"><i class="qr-code"></i></a>
                        <div class="sidebar-code quick-sidebar">
                        	<i class="arrow-right"></i>
		  <?php $_from = get_advlist_position_name_pc(微信二维码,0,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_41850800_1531993934');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_41850800_1531993934']):
        $this->_foreach['index_image']['iteration']++;
?>
            <img src="<?php echo $this->_var['ad_0_41850800_1531993934']['image']; ?>" width="130">
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>		
                        </div>
                    </li>
                    <li class="returnTop">
                        <a href="javascript:;" class="return_top quick-links-a"><i class="top"></i></a>
                        <div class="popup">
                        	返回顶部
                        	<i class="arrow-right"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="">
        	
            
        	
        	<div id="ECS_CARTINFO_content" class="ECS_CARTINFO right-sidebar-panels"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
        	
            
        	<div class="right-sidebar-panels">
				<h3 class="sidebar-panel-header">
                	<a href="javascript:;" class="title"><i></i><em class="title">我的足迹</em></a>
                    <span class="close-panel"></span>
                </h3>
          		<div class="sidebar-panel-main">
            		<div class="sidebar-panel-content">
              			<div class="history-panel">
              				<ul>
                				<?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                			</ul>
     		  			</div>
            		</div>
          		</div>
        	</div>
        	
        </div>
    </div>
</div>
<script type="text/javascript">	
$(window).scroll(function(){ 
	if($(this).scrollTop() > $(window).height() ){ 
		$('.returnTop').show();
	}else{ 
		$('.returnTop').hide();
	} 
}) 
$('.cart-panel-content').height($(window).height()-90);
$('.bonus-panel-content').height($(window).height()-40);
$(".returnTop").click(function(){
	$('body,html').animate({scrollTop:0},800);
	return false;
});
$('.quick-area').hover(function(){
	$(this).find('.quick-sidebar').toggle();
})
//移动图标出现文字
$(".right-sidebar-panel li").mouseenter(function(){
	$(this).children(".popup").stop().animate({left:-92,queue:true});
	$(this).children(".popup").css("visibility","visible");
	$(this).children(".ibar_login_box").css("display","block");
});
$(".right-sidebar-panel li").mouseleave(function(){
	$(this).children(".popup").css("visibility","hidden");
	$(this).children(".popup").stop().animate({left:-121,queue:true});
	$(this).children(".ibar_login_box").css("display","none");
});
//点击购物车、用户信息以及浏览历史事件
$('.sidebar-tabs').click(function(){
	if($('.right-sidebar-main').hasClass('right-sidebar-main-open')&&$(this).hasClass('current')){
		$('.right-sidebar-main').removeClass('right-sidebar-main-open');
		$(this).removeClass('current');
		$('.right-sidebar-panels').eq($(this).index()-1).removeClass('animate-in').addClass('animate-out').css('z-index',1);
		$('.cart-panel-content').height($(window).height()-90);
	}else{
		$(this).addClass('current').siblings('.sidebar-tabs').removeClass('current');
		$('.right-sidebar-main').addClass('right-sidebar-main-open');
		$('.right-sidebar-panels').eq($(this).index()-1).addClass('animate-in').removeClass('animate-out').css('z-index',2).siblings('.right-sidebar-panels').removeClass('animate-in').addClass('animate-out').css('z-index',1);
		$('.cart-panel-content').height($(window).height()-90);
	}
});
$(".right-sidebar-panels").on('click', '.close-panel', function () {
	$('.sidebar-tabs').removeClass('current');
	$('.right-sidebar-main').removeClass('right-sidebar-main-open');
	$('.right-sidebar-panels').removeClass('animate-out');
});
$(document).click(function(e){ 
	var target = $(e.target); 
	if(target.closest('.right-sidebar-con').length == 0){ 
		$('.right-sidebar-main').removeClass('right-sidebar-main-open');
		$('.sidebar-tabs').removeClass('current');
		$('.right-sidebar-panels').removeClass('animate-in').addClass('animate-out').css('z-index',1);
	} 
}) 

$('.pop-login').css('top',($(window).height()-$('.pop-login').height())/2);
$('.pop-close').click(function(){
	$('.pop-main,.pop-mask').hide();
	$('form[name="formLogin"]').find('.msg-wrap').css('visibility','hidden');
	$('.pop-login .item,.pop-login .item-detail').removeClass('item-error');
	$('.pop-login .text').val('');
})
$('.pop-login .item .text').focus(function(){
	$(this).addClass('')	
})
</script>