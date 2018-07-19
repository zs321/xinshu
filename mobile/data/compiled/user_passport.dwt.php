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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js')); ?>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery-1.4.4.min.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<script type="text/javascript">
/* *
 * 处理注册用户
 */
function register()
{
  var frm  = document.forms['formUser'];
  <?php if ($this->_var['_CFG'] [ 'ecsdxt_mobile_reg' ] == '1'): ?>
	  var username  = Utils.trim(frm.elements['extend_field5'].value);
	  var yzm = Utils.trim(frm.elements['extend_field'].value);
  <?php else: ?>
	  var username  = Utils.trim(frm.elements['username'].value);
  <?php endif; ?>
  //var email  = frm.elements['email'].value;
  var password  = Utils.trim(frm.elements['password'].value);
  //var confirm_password = Utils.trim(frm.elements['confirm_password'].value);
  var checked_agreement = frm.elements['agreement'].checked;
  var msn = frm.elements['extend_field1'] ? Utils.trim(frm.elements['extend_field1'].value) : '';
  var qq = frm.elements['extend_field2'] ? Utils.trim(frm.elements['extend_field2'].value) : '';
  var home_phone = frm.elements['extend_field4'] ? Utils.trim(frm.elements['extend_field4'].value) : '';
  var office_phone = frm.elements['extend_field3'] ? Utils.trim(frm.elements['extend_field3'].value) : '';
  var mobile_phone = frm.elements['extend_field5'] ? Utils.trim(frm.elements['extend_field5'].value) : '';
  var passwd_answer = frm.elements['passwd_answer'] ? Utils.trim(frm.elements['passwd_answer'].value) : '';
  var sel_question =  frm.elements['sel_question'] ? Utils.trim(frm.elements['sel_question'].value) : '';


  var msg = "";
  // 检查输入
  var msg = '';
  <?php if ($this->_var['_CFG'] [ 'ecsdxt_mobile_reg' ] != '1'): ?>
  if (username.length == 0)
  {
    msg += username_empty + '\n';
  }
  else if (username.match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
  {
    msg += username_invalid + '\n';
  }
  else if (username.length < 3)
  {
    //msg += username_shorter + '\n';
  }
  <?php else: ?>
  if (!(Utils.isMobile(username)))
  {
    msg += '手机号码不正确' + '\n';
  }
  if (yzm.length != 6 || !(Utils.isNumber(yzm)))
  {
    msg += '验证码不正确' + '\n';
  }
  <?php endif; ?>

  if (password.length == 0)
  {
    msg += password_empty + '\n';
  }
  else if (password.length < 6)
  {
    msg += password_shorter + '\n';
  }
  if (/ /.test(password) == true)
  {
	msg += passwd_balnk + '\n';
  }

  if(checked_agreement != true)
  {
    msg += agreement + '\n';
  }

  if (msn.length > 0 && (!Utils.isEmail(msn)))
  {
    msg += msn_invalid + '\n';
  }

  if (qq.length > 0 && (!Utils.isNumber(qq)))
  {
    msg += qq_invalid + '\n';
  }

  if (office_phone.length>0)
  {
    var reg = /^[\d|\-|\s]+$/;
    if (!reg.test(office_phone))
    {
      msg += office_phone_invalid + '\n';
    }
  }
  if (home_phone.length>0)
  {
    var reg = /^[\d|\-|\s]+$/;

    if (!reg.test(home_phone))
    {
      msg += home_phone_invalid + '\n';
    }
  }
  if (mobile_phone.length>0)
  {
    var reg = /^[\d|\-|\s]+$/;
    if (!reg.test(mobile_phone))
    {
      msg += mobile_phone_invalid + '\n';
    }
  }
  if (passwd_answer.length > 0 && sel_question == 0 || document.getElementById('passwd_quesetion') && passwd_answer.length == 0)
  {
    msg += no_select_question + '\n';
  }

  for (i = 4; i < frm.elements.length - 4; i++)	// 从第五项开始循环检查是否为必填项
  {
	needinput = document.getElementById(frm.elements[i].name + 'i') ? document.getElementById(frm.elements[i].name + 'i') : '';

	if (needinput != '' && frm.elements[i].value.length == 0)
	{
	  msg += '- ' + needinput.innerHTML + msg_blank + '\n';
	}
  }

  if (msg.length > 0)
  {
    alert(msg);
    return false;
  }
  else
  {
    return true;
  }
}
</script>

</head>
<body style="background:#fff;">
 
<?php if ($this->_var['action'] == 'login'): ?>
<div class="login-container">
	<div id="page">
	  <header id="header">
	    <div class="header_l"> <a class="ico_10" onClick="javascript:history.back(1);"> 返回 </a> </div>
	    <h1> 会员登录 </h1>
	  </header>
	</div>

	
		<!-- <ul class="login-title">
			<li class="active" id="login-account"><a href="javascript:void(0)">账号密码登录</a>
			<li id="login-cardNum" style="display: none;"><a href="javascript:void(0)">会员卡登录</a>
		</ul> -->

	
	<div class="login-main">
		
		<div class="login-form login-account" style="">
			<form name="formLogin" id="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
			<div class="form-content">
				<span>账&nbsp;&nbsp;&nbsp;&nbsp;号</span>
				<div class="form-input">
					<input type="text" id="username" name="username" autocomplete="off" placeholder="<?php echo $this->_var['lang']['username']; ?>/<?php echo $this->_var['lang']['mobile']; ?>/<?php echo $this->_var['lang']['email']; ?>">
				</div>
			</div>

			<div class="form-content">
				<span>密&nbsp;&nbsp;&nbsp;&nbsp;码</span>
				<div class="form-input">
					<input type="password" id="password" name="password" autocomplete="off" placeholder="<?php echo $this->_var['lang']['label_password']; ?>">
				</div>
			</div>

			<div class="form-content" style="display:none;">
				<input type="checkbox" checked="checked" value="1" name="remember" id="remember" />
			</div>

			
			<div class="login-operate">
				<input type="hidden" name="act" value="act_login" />
				<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
				<input type="hidden" id="login_type" name="login_type" value="0" />
				<input type="submit" name="submit"  value="登录" class="login-btn active-login-btn" />
				<div class="login-guide">
					<a href="user.php?act=register">注册会员</a>
					<?php if ($this->_var['_CFG'] [ 'ecsdxt_mobile_pwd' ] == '1'): ?><a href="user.php?act=mpassword_name" class="f6">忘记密码？</a><?php else: ?>
					<a href="user.php?act=get_password" id="goForgetPwd">忘记密码？</a><?php endif; ?>
				</div>
			</div>
			</form>
		</div>

		
		<div class="login-form login-phoneNum" style="display:none">
			<form name="formcard" id="formcard" action="user.php" method="post" onSubmit="return usercard()">
			<div class="form-content">
				<span>会员卡号</span>
				<div class="form-input">
					<input type="text" id="username" name="username" placeholder="请输入会员卡号">
				</div>
			</div>

			<div class="form-content">
				<span>会员卡密</span>
				<div class="form-input">
					<input type="password" id="password" name="password" placeholder="请输入会员卡密码">
				</div>
			</div>

			<div class="form-content" style="display:none;">
				<input type="checkbox" checked="checked" value="1" name="remember" id="remember" />
			</div>

			
			<div class="login-operate">
				<input type="hidden" name="act" value="act_login" />
				<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
				<input type="hidden" id="login_type" name="login_type" value="3" />
				<input type="submit" name="submit"  value="登录" class="login-btn active-login-btn" />
				<div class="login-guide">
					<a href="user.php?act=register">注册会员</a>
					<?php if ($this->_var['_CFG'] [ 'ecsdxt_mobile_pwd' ] == '1'): ?><a href="user.php?act=mpassword_name" class="f6">忘记密码？</a><?php else: ?>
					<a href="user.php?act=get_password" id="goForgetPwd">忘记密码？</a><?php endif; ?>
				</div>
			</div>
			</form>
		</div>		
	</div>

	
	<?php if ($this->_var['qq_login'] || $this->_var['weibo_login'] || $this->_var['alipay_login'] || $this->_var['weixin_login']): ?>
	<div class="login-others">
		<div class="login-others-title">
			<div class="line"></div>
			<span>其他方式登录</span>
			<div class="line"></div>
		</div>
		<ul>
			<?php if ($this->_var['qq_login']): ?>
			<li>
			<a href="user.php?act=oath&type=qq">
			<i class="qq-ico"></i>
			<span>QQ</span>
			</a>
			</li>
			<?php endif; ?>

			<?php if ($this->_var['is_wechat_browser'] && $this->_var['weixin_login']): ?>
			<li>
			<a href="user.php?act=oath&type=weixin">
			<i class="wx-ico"></i>
			<span>微信</span></a>
			</li>
			<?php endif; ?>
			<?php if ($this->_var['weibo_login']): ?><li><a href="user.php?act=oath&type=weibo"><i class="wb-ico"></i><span>微博</span></a></li><?php endif; ?>
			<?php if ($this->_var['alipay_login']): ?><li><a href="user.php?act=oath&type=alipay"><i class="zfb-ico"></i><span>支付宝</span></a></li><?php endif; ?>
		</ul>
	</div>
	<?php endif; ?>
</div>
<script type="text/javascript">
jQuery(function($){
	$('.login-container ul li').click(function(){
		var index = $('.login-container ul li').index(this);
		$(this).addClass('active').siblings('li').removeClass('active');
		$('.login-main .login-form:eq('+index+')').show().siblings('.login-form').hide();
	})
})
</script>
<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'register'): ?>
<div class="login-container">
	<div id="page">
	  <header id="header">
	    <div class="header_l"> <a class="ico_10" onClick="javascript:history.back(1);"> 返回 </a> </div>
	    <h1> 会员注册 </h1>
	  </header>
	</div>

	
	<?php if ($this->_var['shop_reg_closed'] == 1): ?>
	<div class="login-form login-account"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
	<?php else: ?>
	<div class="login-main">
		
		<div class="login-form login-account">
			<form action="user.php" method="post" name="formUser" onsubmit="return register();">
			<input type="hidden" name="flag" id="flag" value="register" />
			<div class="form-content">
				<span>账号</span>
				<div class="form-input">
					<input type="text" id="username" name="username" autocomplete="off" placeholder="请输入用户名">
				</div>
			</div>
			<?php if ($this->_var['_CFG'] [ 'ecsdxt_mobile_reg' ] != '1'): ?>
			<div class="form-content">
				<span>密码</span>
				<div class="form-input">
					<input type="password" id="password" name="password" autocomplete="off" placeholder="请输入密码">
				</div>
			</div>
			
			<div class="form-content">
				<span>确认密码</span>
				<div class="form-input">
					<input type="password" name="confirm_password" id="confirm_password" autocomplete="off" placeholder="确认密码">
				</div>
			</div>
			<?php endif; ?>



		     <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
		     <?php if ($this->_var['field']['reg_field_name'] == '手机'): ?>
			<?php if ($this->_var['_CFG'] [ 'ecsdxt_mobile_reg' ] == '1'): ?>
			   <script>var ztime=<?php echo $this->_var['ztime']; ?>;</script>
			   <?php echo $this->smarty_insert_scripts(array('files'=>'global.js')); ?>
			   <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
			   <?php echo $this->smarty_insert_scripts(array('files'=>'sms.js')); ?>
			   <div class="form-content">
				<span>手机</span>
				<div class="form-input">
					<input type="text" autocomplete="off" name="extend_field<?php echo $this->_var['field']['id']; ?>" id="extend_field<?php echo $this->_var['field']['id']; ?>" placeholder="请输入手机号码">
				</div>
			   </div>
			   <div class="form-content">
				<span>验证码</span>
				<div class="form-input">
					<input type="text" name="extend_field" id="extend_field" autocomplete="off" placeholder="请输入验证码" maxlength="6">
				</div>
			  <input id="zphone" name="sendsms" type="button" value="获取验证码" onClick="getverifycode1('extend_field<?php echo $this->_var['field']['id']; ?>', '<?php echo $this->_var['field']['reg_field_name']; ?>');" class="phoneCodeBtn" style="background:#fff;border:0;"/>

			   </div>
			   <div class="form-content">
				<span>密码</span>
				<div class="form-input">
					<input type="password" name="password" id="mobile_pwd" autocomplete="off" placeholder="请输入密码">
				</div>
			   </div>
			   <div class="form-content">
				<span>确认密码</span>
				<div class="form-input">
					<input type="password" name="confirm_password" id="confirm_password" autocomplete="off" placeholder="确认密码">
				</div>
			   </div>
			<?php else: ?>
			   <div class="form-content">
				<span><?php echo $this->_var['field']['reg_field_name']; ?></span>
				<div class="form-input">
					<input type="text" name="extend_field<?php echo $this->_var['field']['id']; ?>" id="extend_field<?php echo $this->_var['field']['id']; ?>" autocomplete="off" placeholder="<?php echo $this->_var['field']['reg_field_name']; ?>">
				</div>
			   </div>
			<?php endif; ?>


		     <?php else: ?>
			<?php if ($this->_var['field']['id'] == 6): ?>
			   <div class="form-content">
				<span><?php echo $this->_var['lang']['passwd_question']; ?></span>
				<div class="form-input">
					  <select name='sel_question'>
					  <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
					  <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
					  </select>
				</div>
			   </div>
			   <div class="form-content">
				<span><?php echo $this->_var['lang']['passwd_answer']; ?></span>
				<div class="form-input"<?php if ($this->_var['field']['is_need']): ?> id="passwd_quesetion"<?php endif; ?>>
					<input type="text" autocomplete="off" name="passwd_answer" placeholder="<?php echo $this->_var['lang']['passwd_answer']; ?>">
				</div>
			   </div>
			<?php else: ?>
			   <div class="form-content">
				<span><?php echo $this->_var['field']['reg_field_name']; ?></span>
				<div class="form-input">
					<input type="text" autocomplete="off" name="extend_field<?php echo $this->_var['field']['id']; ?>" id="extend_field<?php echo $this->_var['field']['id']; ?>" placeholder="<?php echo $this->_var['field']['reg_field_name']; ?>">
				</div>
			   </div>
			<?php endif; ?>
		     <?php endif; ?>
		     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

			   <div class="form-content" style="display:none;">
				<input id="agreement" name="agreement" type="checkbox" value="1" checked="checked" style="vertical-align:middle; zoom:200%;" /><label for="agreement"> 我已看过并同意《<a href="article.php?cat_id=-1">用户协议</a>》</label>
			   </div>




			
			<div class="login-operate">
				<input name="act" type="hidden" value="act_register" />
				<input name="enabled_sms" type="hidden" value="1" />
				<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
				<input type="submit" name="submit"  value="提交注册" class="login-btn active-login-btn" />
			</div>
			</form>
			<div class="login-operate">
				<div class="login-guide">
					<a href="user.php">会员登录</a>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if ($this->_var['qq_login'] || $this->_var['weibo_login'] || $this->_var['alipay_login'] || $this->_var['weixin_login']): ?>
	<div class="login-others">
		<div class="login-others-title">
			<div class="line"></div>
			<span>其他方式登录</span>
			<div class="line"></div>
		</div>
		<ul>
			<?php if ($this->_var['qq_login']): ?><li><a href="user.php?act=oath&type=qq"><i class="qq-ico"></i><span>QQ</span></a></li><?php endif; ?>
			<?php if ($this->_var['is_wechat_browser'] && $this->_var['weixin_login']): ?><li><a href="user.php?act=oath&type=weixin"><i class="wx-ico"></i><span>微信</span></a></li><?php endif; ?>
			<?php if ($this->_var['weibo_login']): ?><li><a href="user.php?act=oath&type=weibo"><i class="wb-ico"></i><span>微博</span></a></li><?php endif; ?>
			<?php if ($this->_var['alipay_login']): ?><li><a href="user.php?act=oath&type=alipay"><i class="zfb-ico"></i><span>支付宝</span></a></li><?php endif; ?>
		</ul>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'get_password'): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?> 
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div id="page">
  <header id="header">
    <div class="header_l"> <a class="ico_10" onClick="javascript:history.back();"> 返回 </a> </div>
    <h1> 找回密码 </h1>
  </header>
</div>
<section class="wrap">
  <div id="leftTabBox" class="loginBox">
    <div class="hd"> <span>您可通过<?php if ($this->_var['enabled_sms_signin'] == 1): ?>手机号码<?php else: ?>电子邮件<?php endif; ?>重置密码</span>
    </div>
    <div id="tabBox1-bd">
      <ul>
      	<?php if ($this->_var['enabled_sms_signin'] == 1): ?>
      	<form  action="user.php" method="post" name="getPassword" onSubmit="return submitForget();">
          <input type="hidden" name="flag" id="flag" value="forget" />
          <div class="table_box">
            <dl>
              <dd>
                <input placeholder="请输入手机号码" class="inputBg" name="mobile" id="mobile_phone" type="text" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input placeholder="请输入验证码" class="inputBg" name="mobile_code" id="mobile_code" type="text" />
              </dd>
              <dd>
              <input id="zphone" name="sendsms" type="button" value="获取手机验证码" onClick="sendSms();" class="c-btn3" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input name="act" type="hidden" value="send_pwd_sms" />
                <input name="Submit" type="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="c-btn3" />
              </dd>
            </dl>
          </div>
        </form>
        <?php else: ?>
        <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
          <div class="table_box">
            <dl>
              <dd>
                <input placeholder="<?php echo $this->_var['lang']['username']; ?>" class="inputBg" name="user_name" type="text" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input placeholder="<?php echo $this->_var['lang']['email']; ?>" class="inputBg" name="email" type="text" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input name="act" type="hidden" value="send_pwd_email" />
                <input name="Submit" type="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="c-btn3" />
              </dd>
            </dl>
          </div>
        <br />
      </form>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</section>
<?php endif; ?> 


 
<?php if ($this->_var['action'] == 'reset_password'): ?> 
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div id="page">
  <header id="header">
    <div class="header_l"> <a class="ico_10" onClick="javascript:history.back();"> 返回 </a> </div>
    <h1> 重置密码 </h1>
  </header>
</div>
<section class="wrap">
  <div id="leftTabBox" class="loginBox">
    <div>
      <ul>
        <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
          <div class="table_box">
            <dl>
              <dd>
                <input placeholder="<?php echo $this->_var['lang']['new_password']; ?>" class="inputBg" name="new_password" type="password" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input placeholder="<?php echo $this->_var['lang']['confirm_password']; ?>" class="inputBg" name="confirm_password" type="password" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input type="hidden" name="act" value="act_edit_password" />
		<input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
		<input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
                <input name="Submit" type="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" class="c-btn3" />
              </dd>
            </dl>
          </div>
        <br />
      </form>
      </ul>
    </div>
  </div>
</section>
<?php endif; ?> 
 


    <?php if ($this->_var['action'] == 'mpassword_name'): ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div id="page">
  <header id="header">
    <div class="header_l"> <a class="ico_10" onClick="javascript:history.back();"> 返回 </a> </div>
    <h1> 找回密码 </h1>
  </header>
</div>
<section class="wrap">
  <div id="leftTabBox" class="loginBox">
    <div class="hd"> <span>您可通过手机号码重置密码</span>
    </div>
    <div id="tabBox1-bd">
      <ul>
      	<form action="user.php" method="post" name="getPasswordByMobile" onsubmit="return submitPwdMobileInfo();">
          <div class="table_box">
            <dl>
              <dd>
		<input placeholder="请输入手机号码" name="mobile" type="text" size="30" class="inputBg" maxlength="12" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input type="hidden" name="act" value="send_pwd_mobile" />
		<input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="c-btn3" style="border:none;" />
              </dd>
            </dl>
          </div>
        </form>
      </ul>
    </div>
  </div>
</section>
<?php endif; ?>

<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/sms.js"></script>
<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</body>
</html>
