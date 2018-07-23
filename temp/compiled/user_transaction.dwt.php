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
<link href="themes/huazhuangpin/user.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js')); ?>
</head>
<body class="user_center">
<?php echo $this->fetch('library/page_header.lbi'); ?> 
<div id="wrapper" class="cle">	<?php echo $this->fetch('library/ur_here.lbi'); ?> 
    <div class="my_nala_main">
        <?php echo $this->fetch('library/user_menu.lbi'); ?> 
			
    <div class="my_nala_centre ilizi_centre">
    <div class="ilizi cle">
      	<div class="box">
     <div class="box_1">
      <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
         
         <?php if ($this->_var['action'] == 'profile'): ?>
         <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
        <script type="text/javascript">
          <?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </script>
      <h5><span><?php echo $this->_var['lang']['profile']; ?></span></h5>
      <div class="blank"></div>
     <form name="formEdit" action="user.php" method="post" onSubmit="return userEdit()">
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['birthday']; ?>： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF"> <?php echo $this->html_select_date(array('field_order'=>'YMD','prefix'=>'birthday','start_year'=>'-60','end_year'=>'+1','display_days'=>'true','month_format'=>'%m','day_value_format'=>'%02d','time'=>$this->_var['profile']['birthday'])); ?> </td>
                </tr>
                <tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['sex']; ?>： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF"><input type="radio" name="sex" value="0" <?php if ($this->_var['profile']['sex'] == 0): ?>checked="checked"<?php endif; ?> />
                    <?php echo $this->_var['lang']['secrecy']; ?>&nbsp;&nbsp;
                    <input type="radio" name="sex" value="1" <?php if ($this->_var['profile']['sex'] == 1): ?>checked="checked"<?php endif; ?> />
                    <?php echo $this->_var['lang']['male']; ?>&nbsp;&nbsp;
                    <input type="radio" name="sex" value="2" <?php if ($this->_var['profile']['sex'] == 2): ?>checked="checked"<?php endif; ?> />
                  <?php echo $this->_var['lang']['female']; ?>&nbsp;&nbsp; </td>
                </tr>
                <tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['email']; ?>： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF"><input name="email" type="text" value="<?php echo $this->_var['profile']['email']; ?>" size="25" class="inputBg" /><span style="color:#FF0000"> *</span></td>
                </tr>
		<?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
		<?php if ($this->_var['field']['id'] == 6): ?>
		<tr>
		  <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
		  <td width="72%" align="left" bgcolor="#FFFFFF">
		  <select name='sel_question'>
		  <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
		  <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'],'selected'=>$this->_var['profile']['passwd_question'])); ?>
		  </select>
		  </td>
		</tr>
		<tr>
		  <td width="28%" align="right" bgcolor="#FFFFFF" <?php if ($this->_var['field']['is_need']): ?>id="passwd_quesetion"<?php endif; ?>><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
		  <td width="72%" align="left" bgcolor="#FFFFFF">
		  <input name="passwd_answer" type="text" size="25" class="inputBg" maxlengt='20' value="<?php echo $this->_var['profile']['passwd_answer']; ?>"/><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
		  </td>
		</tr>
		<?php elseif ($this->_var['field']['reg_field_name'] == '手机'): ?>
			<?php if ($this->_var['_CFG'] [ 'ecsdxt_mobile_bind' ] == '1'): ?>
				<td width="28%" align="right" bgcolor="#FFFFFF" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>：</td>
				<td width="72%" align="left" bgcolor="#FFFFFF">
				<input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" class="inputBg" value="<?php echo $this->_var['field']['content']; ?>" readonly="readonly" /><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
				&nbsp;
				<?php if ($this->_var['field']['content'] != ''): ?>
				<a href="user.php?act=bindmobile">重新绑定</a>
				<?php else: ?>
				<a href="user.php?act=bindmobile">绑定手机</a>
				<?php endif; ?>
				</td>
			<?php else: ?>
				<td width="28%" align="right" bgcolor="#FFFFFF" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>：</td>
				<td width="72%" align="left" bgcolor="#FFFFFF">
				<input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" class="inputBg" value="<?php echo $this->_var['field']['content']; ?>"/><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
				</td>
			<?php endif; ?>
		<?php else: ?>
		<tr>
			<td width="28%" align="right" bgcolor="#FFFFFF" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>：</td>
			<td width="72%" align="left" bgcolor="#FFFFFF">
			<input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" class="inputBg" value="<?php echo $this->_var['field']['content']; ?>"/><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
			</td>
		</tr>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <tr>
                  <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_edit_profile" />
                    <input name="submit" type="submit" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" class="btn-primary" style="border:none;" />
                  </td>
                </tr>
       </table>
    </form>
     <form name="formPassword" action="user.php" method="post" onSubmit="return editPassword()" >
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['old_password']; ?>：</td>
          <td width="76%" align="left" bgcolor="#FFFFFF"><input name="old_password" type="password" size="25"  class="inputBg" /></td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['new_password']; ?>：</td>
          <td align="left" bgcolor="#FFFFFF"><input name="new_password" type="password" size="25"  class="inputBg" /></td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['confirm_password']; ?>：</td>
          <td align="left" bgcolor="#FFFFFF"><input name="comfirm_password" type="password" size="25"  class="inputBg" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_edit_password" />
            <input name="submit" type="submit" class="btn-primary" style="border:none;" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" />
          </td>
        </tr>
      </table>
    </form>
     <?php endif; ?>
     

     
     <?php if ($this->_var['action'] == 'headimg'): ?>
              <h5><span>会员头像</span></h5>
              <form name="formEdit" action="user.php" method="post" enctype="multipart/form-data" class="ncm-default-form">
                <dl>
                  <dt>头像预览：</dt>
                  <dd>
                    <div class="user-avatar"><span> <?php if ($this->_var['headimg']): ?><img src="<?php echo $this->_var['headimg']; ?>" style="width:150px;height:150px;border:1px solid #eee;"><?php else: ?><img src="themes/huazhuangpin/images/photo.jpg" style="width:150px;height:150px;border:1px solid #eee;"><?php endif; ?></span></div>
                    <p class="hint mt5">完善个人信息资料，上传头像图片有助于您结识更多的朋友。<br />
                      <span style="color:orange;">头像最佳默认尺寸为150x150像素。</span></p>
                  </dd>
                </dl>
                <dl>
                  <dt style="vertical-align:middle">更换头像：</dt>
                  <dd style="vertical-align:middle">
                    <div class="ncm-upload-btn"> <a href="javascript:void(0);"> <span>
                      <input type="file" name="headimg" >
                      </span> </a> </div>
                  </dd>
                </dl>
                <dl>
                  <dt>&nbsp;</dt>
                  <dd>
                    <label class="submit-border">
                      <input name="act" type="hidden" value="act_edit_headimg" />
                      <input name="submit" type="submit" class="btn-primary" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" />
                    </label>
                  </dd>
                </dl>
              </form>
     <?php endif; ?>
     

     
         <?php if ($this->_var['action'] == 'bindmobile'): ?>
	 <script>var ztime=<?php echo $this->_var['ztime']; ?>;</script>
         <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
	 <?php echo $this->smarty_insert_scripts(array('files'=>'global.js')); ?>
	 <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
	 <?php echo $this->smarty_insert_scripts(array('files'=>'sms.js')); ?>
        <script type="text/javascript">
          <?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </script>
      <h5><span>绑定手机</span></h5>
      <div class="blank"></div>
     <form name="formBindmobile" action="user.php" method="post" onSubmit="return bindMobile()" >
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td width="28%" align="right" bgcolor="#FFFFFF">手机号：</td>
          <td width="76%" align="left" bgcolor="#FFFFFF"><input id="mobile" name="mobile" type="text" size="25"  class="inputBg" maxlength="12" /></td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#FFFFFF">验证码：</td>
          <td align="left" bgcolor="#FFFFFF"><input id="verifycode" name="verifycode" type="text" size="25"  class="inputBg" maxlength="6" /><span style="color:#FF0000"> <input type="button" id="zphone" value="获取验证码"  onclick="getverifycode2();"></span></td>
        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_bindmobile" />
            <input name="submit" type="submit" class="btn-primary" style="border:none;" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" />
          </td>
        </tr>
      </table>
    </form>
     <?php endif; ?>
     
     <?php if ($this->_var['action'] == 'bonus'): ?>
      <script type="text/javascript">
        <?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </script>
      <h5><span><?php echo $this->_var['lang']['label_bonus']; ?></span></h5>
      <div class="blank"></div>
       <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bonus_sn']; ?></th>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bonus_name']; ?></th>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bonus_amount']; ?></th>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['min_goods_amount']; ?></th>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bonus_end_date']; ?></th>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bonus_status']; ?></th>
        </tr>
        <?php if ($this->_var['bonus']): ?>
        <?php $_from = $this->_var['bonus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <tr>
          <td align="center" bgcolor="#FFFFFF"><?php echo empty($this->_var['item']['bonus_sn']) ? 'N/A' : $this->_var['item']['bonus_sn']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['type_name']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['type_money']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['min_goods_amount']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['use_enddate']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['status']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
        <tr>
          <td colspan="6" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['user_bonus_empty']; ?></td>
        </tr>
        <?php endif; ?>
      </table>
      <div class="blank5"></div>
      <?php echo $this->fetch('library/pages.lbi'); ?>
      <div class="blank5"></div>
      <h5><span><?php echo $this->_var['lang']['add_bonus']; ?></span></h5>
      <div class="blank"></div>
      <form name="addBouns" action="user.php" method="post" onSubmit="return addBonus()">
        <div style="padding: 15px;">
        <?php echo $this->_var['lang']['bonus_number']; ?>
          <input name="bonus_sn" type="text" size="30" class="inputBg inputcss" />
          <input type="hidden" name="act" value="act_add_bonus" class="inputBg" />
          <input type="submit" class="btn-primary" style="border:none;" value="<?php echo $this->_var['lang']['add_bonus']; ?>" />
        </div>
      </form>
    <?php endif; ?>
   
      
       <?php if ($this->_var['action'] == 'order_list'): ?>
       <h5><span><?php echo $this->_var['lang']['label_order']; ?></span></h5>
       <div class="blank"></div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="bought-table">
            <thead>
              <tr class="col-name">
                <th width="33%" style="border-left: 1px solid #E6E6E6;">宝贝</th>
                <th width="10%">属性</th>
                <th width="9%">单价</th>
                <th width="5%">数量</th>
                <th width="13%">售后</th>
                <th width="8%">总金额</th>
                <th width="10%">状态</th>
                <th width="10%" style="border-right: 1px solid #E6E6E6;">操作</th>
              </tr>
            </thead>
            
            <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
            <tbody class="close-order">
              <tr class="order-hd">
                <td colspan="8"><span class="no">
                  <label> 订单编号：<span class="order-num"><a href="user.php?act=order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>" class="f6"><?php echo $this->_var['item']['order_sn']; ?></a>
                    <?php if ($this->_var['item']['is_suborder']): ?><?php echo $this->_var['item']['is_suborder']; ?><?php endif; ?></span> </label>
                  </span> <span class="deal-time">&nbsp;&nbsp;成交时间：<?php echo $this->_var['item']['order_time']; ?></span>
                  </td>
              </tr>
              <tr class="order-bd last">
                <td align="center" class="baobei no-border-right" style="padding:0px;">
                <?php $_from = $this->_var['item']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                  

                  <div class="goods_desc <?php if (($this->_foreach['goods']['iteration'] == $this->_foreach['goods']['total'])): ?>last<?php endif; ?>"> <a class="pic" <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>href="<?php if ($this->_var['goods']['extension_code'] == 'virtual_good'): ?>virtual_group_goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?><?php else: ?><?php echo $this->_var['goods']['url']; ?><?php endif; ?>"<?php else: ?><?php endif; ?> title="查看宝贝详情" target="_blank"> 
                    <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?> 
                    <img data-original="<?php echo $this->_var['goods']['thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading" alt="查看宝贝详情" width="50" height="50"> 
                    <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?> 
                    <img src="themes/huazhuangpin/images/ico_cart_package.gif" alt="查看宝贝详情" width="50" height="50"/> 
                    <?php endif; ?> 
                    </a>
                    <div class="goods_name"><?php if ($this->_var['goods']['extension_code'] == 'virtual_good'): ?>【虚拟团购】<?php endif; ?> <?php echo $this->_var['goods']['goods_name']; ?></div>
                  </div>
                  
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
                  <td align="center" class="baobei no-border-right"><?php $_from = $this->_var['item']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                  
                  <div class="goods_desc goods_desc_t"> <?php if ($this->_var['goods']['goods_attr']): ?><?php echo nl2br($this->_var['goods']['goods_attr']); ?><?php endif; ?> </div>
                  
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
                <td align="center" class="baobei no-border-right" style="padding:0px;" ><?php $_from = $this->_var['item']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                  
                  <div class="goods_desc price  <?php if (($this->_foreach['goods']['iteration'] == $this->_foreach['goods']['total'])): ?>last<?php endif; ?>" style="padding-left:0px; line-height:50px;"> <?php echo $this->_var['goods']['formated_goods_price']; ?> </div>
                  
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
                <td align="center" class="baobei no-border-right"  style="padding:0px;"><?php $_from = $this->_var['item']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                  
                  <div class="goods_desc  <?php if (($this->_foreach['goods']['iteration'] == $this->_foreach['goods']['total'])): ?>last<?php endif; ?>" style="padding-left:0px;line-height:50px;"> <?php echo $this->_var['goods']['goods_number']; ?> </div>
                  
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
                <td align="center" class="after-service baobei no-border-right" valign="middle"><?php $_from = $this->_var['item']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                
            	<?php if ($this->_var['item']['extension_code'] != 'pre_sale' || $this->_var['item']['pre_sale_status'] > 1): ?>
                  <div class="goods_desc <?php if (($this->_foreach['goods']['iteration'] == $this->_foreach['goods']['total'])): ?>last<?php endif; ?>"> 
                    <?php if (( $this->_var['item']['shipping_status'] == 0 || $this->_var['item']['shipping_status'] == 3 ) && $this->_var['item']['pay_status'] == 2): ?> 
                    <?php if ($this->_var['goods']['back_can'] == 1): ?> <a href="user.php?act=back_order&order_id=<?php echo $this->_var['item']['order_id']; ?>&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>&product_id=<?php echo $this->_var['goods']['product_id']; ?>&x=1" class="red2" >申请退款</a><br />
                    <?php else: ?>
                    <p>[已申请 退款]</p>
                    <?php endif; ?> 
                    <?php endif; ?> 
                    <?php if ($this->_var['item']['shipping_status'] != 0 && $this->_var['item']['shipping_status'] != 3): ?> 
                    <?php if ($this->_var['goods']['back_can'] == 1): ?>
                    <p> <a href="user.php?act=back_order&order_id=<?php echo $this->_var['item']['order_id']; ?>&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>&product_id=<?php echo $this->_var['goods']['product_id']; ?>" class="red2"> <?php if ($this->_var['item']['shipping_status'] == 1): ?>
                      退货
                      <?php else: ?>
                      <?php if ($this->_var['item']['weixiu_time'] == 0): ?>[申请返修 已超期]<?php else: ?>申请返修<?php endif; ?>
                      <?php endif; ?> </a> </p>
                    <?php else: ?>
                    <p>[已申请
                      <?php if ($this->_var['item']['shipping_status'] == 1): ?>退货<?php else: ?>返修<?php endif; ?>
                      ]</p>
                    <?php endif; ?> 
                    <?php endif; ?> 
                    <?php endif; ?>
                    <a href="user.php?act=message_list">留言/投诉</a> </div>
                  
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
                <td rowspan="1" align="center" class="amount no-border-right"><p class="post-type"><strong>
                
                <?php if ($this->_var['item']['extension_code'] == 'pre_sale' && $this->_var['item']['pre_sale_status'] == 1 && $this->_var['item']['pre_sale_deposit'] > 0): ?>
				<?php echo $this->_var['item']['pre_sale_deposit_format']; ?>
				<?php else: ?>
				<?php echo $this->_var['item']['total_fee']; ?>
                <?php endif; ?>
                </strong></p></td>
                <td rowspan="1" align="center" class="trade-status no-border-right"><?php echo $this->_var['item']['order_status']; ?></br>
                  <?php if ($this->_var['item']['invoice_no'] && $this->_var['item']['shipping_name'] != '上门取货' && $this->_var['item']['shipping_name'] != '城际快递' && $this->_var['item']['shipping_name'] != '市内快递' && $this->_var['item']['shipping_name'] != '运费到付'): ?><a href="user.php?act=order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>#wuliu" class="red2">查看物流</a><br><?php endif; ?>
                  <a href="user.php?act=order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>" class="red2">查看详情</a>
                </td>
                <td rowspan="1" align="center" class="other">
                	<?php if ($this->_var['item']['order_status1'] == 2 || $this->_var['item']['order_status1'] == 3): ?>
                  <?php else: ?> 
                  <?php if ($this->_var['item']['pay_status'] == 0 && ! empty ( $this->_var['item']['pay_id'] )): ?> 
                  <a href="flow.php?step=payinfo&order_id=<?php echo $this->_var['item']['order_id']; ?>" class="on_money">立即付款</a><br />
                  
                  <?php endif; ?> 
                  <?php endif; ?> 
                  <font class="red2"><?php echo $this->_var['item']['handler']; ?></font></br>
                  
                  
                  <?php if ($this->_var['item']['shipping_status'] == 2 || $this->_var['item']['order_status1'] == 2 || $this->_var['item']['order_status1'] == 3): ?> 
                  <a href="goods.php?id=<?php echo $this->_var['item']['goods_list']['0']['goods_id']; ?>" target="_blank">再次购买</a> 
                  <?php endif; ?></td>
              </tr>
            </tbody>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
        <div class="blank5"></div>
       <?php echo $this->fetch('library/pages.lbi'); ?>
       <div class="blank5"></div>
       <h5><span><?php echo $this->_var['lang']['merge_order']; ?></span></h5>
       <div class="blank"></div>
        <script type="text/javascript">
        <?php $_from = $this->_var['lang']['merge_order_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </script>
        <form action="user.php" method="post" name="formOrder" onsubmit="return mergeOrder()">
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td width="22%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['first_order']; ?>:</td>
              <td width="12%" align="left" bgcolor="#ffffff"><select name="to_order">
              <option value="0"><?php echo $this->_var['lang']['select']; ?></option>

                  <?php echo $this->html_options(array('options'=>$this->_var['merge'])); ?>

                </select></td>
              <td width="19%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['second_order']; ?>:</td>
              <td width="11%" align="left" bgcolor="#ffffff"><select name="from_order">
              <option value="0"><?php echo $this->_var['lang']['select']; ?></option>

                  <?php echo $this->html_options(array('options'=>$this->_var['merge'])); ?>

                </select></td>
              <td width="36%" bgcolor="#ffffff">&nbsp;<input name="act" value="merge_order" type="hidden" />
              <input type="submit" name="Submit"  class="btn-primary" style="border:none;"  value="<?php echo $this->_var['lang']['merge_order']; ?>" /></td>
            </tr>
            <tr>
              <td bgcolor="#ffffff">&nbsp;</td>
              <td colspan="4" align="left" bgcolor="#ffffff"><?php echo $this->_var['lang']['merge_order_notice']; ?></td>
            </tr>
          </table>
        </form>
       <?php endif; ?>
      
       
      <?php if ($this->_var['action'] == 'track_packages'): ?>
        <h5><span><?php echo $this->_var['lang']['label_track_packages']; ?></span></h5>
        <div class="blank"></div>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="order_table">
        <tr align="center">
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
        </tr>
        <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <tr>
          <td align="center" bgcolor="#ffffff"><a href="user.php?act=order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>"><?php echo $this->_var['item']['order_sn']; ?></a></td>
          <td align="center" bgcolor="#ffffff"><a href="user.php?act=order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>"><?php echo $this->_var['lang']['query_status']; ?></a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
      <div class="blank5"></div>
      <?php echo $this->fetch('library/pages.lbi'); ?>
      <?php endif; ?>
    
     
      <?php if ($this->_var['action'] == order_detail): ?>
        <h5><span><?php echo $this->_var['lang']['order_status']; ?></span></h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_order_sn']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['order_sn']; ?>
          <?php if ($this->_var['order']['extension_code'] == "group_buy"): ?>
					<a href="./group_buy.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>" class="f6"><strong><?php echo $this->_var['lang']['order_is_group_buy']; ?></strong></a>
					<?php elseif ($this->_var['order']['extension_code'] == "exchange_goods"): ?>
					<a href="./exchange.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>" class="f6"><strong><?php echo $this->_var['lang']['order_is_exchange']; ?></strong></a>
					<?php endif; ?>  
					<a href="user.php?act=message_list&order_id=<?php echo $this->_var['order']['order_id']; ?>" class="f6">[<?php echo $this->_var['lang']['business_message']; ?>]</a>
					</td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_order_status']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['order_status']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['order']['confirm_time']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_pay_status']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['pay_status']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php if ($this->_var['order']['order_amount'] > 0): ?><?php echo $this->_var['order']['pay_online']; ?><?php endif; ?><?php echo $this->_var['order']['pay_time']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_shipping_status']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['shipping_status']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['order']['shipping_time']; ?></td>
        </tr>
        <?php if ($this->_var['order']['invoice_no']): ?>
        <tr>
          <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['consignment']; ?>：</td>
          <td align="left" bgcolor="#ffffff" id="invoice_no"><?php echo $this->_var['order']['invoice_no']; ?></td>
        </tr>
        <?php endif; ?>
	</table>
        <?php if ($this->_var['order']['invoice_no'] && $this->_var['order']['shipping_name'] != '上门取货' && $this->_var['order']['shipping_name'] != '城际快递' && $this->_var['order']['shipping_name'] != '市内快递' && $this->_var['order']['shipping_name'] != '运费到付'): ?>
	<a name="wuliu"></a>
        <h5><span>物流跟踪</span></h5>
        <div class="blank"></div>
	<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
	<tr>
	   <td bgcolor="#ffffff">
		<div class="kd">
		  <div class="detail_top">
		    <dl>
		      <dd>
			<span><?php echo $this->_var['kuaidi_list']['shipping_name']; ?></span>
			<em>运单编码：<?php echo $this->_var['kuaidi_list']['invoice_no']; ?></em></dd>
		    </dl>
		  </div>
		  <div class="kd_wl"><?php $_from = $this->_var['kuaidi_list']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('i', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['i'] => $this->_var['data']):
?>
		    <dl <?php if ($this->_var['i'] == '0'): ?>style=" margin-top:10px;" <?php endif; ?>>
		      <dt <?php if ($this->_var['i'] != '0'): ?>style=" background:#ccc;" <?php endif; ?>></dt>
		      <dd>
			<p <?php if ($this->_var['i'] != '0'): ?>style=" color:#666" <?php endif; ?>><?php echo $this->_var['data']['context']; ?></p>
			<strong><?php if ($this->_var['data']['ftime']): ?><?php echo $this->_var['data']['ftime']; ?><?php else: ?><?php echo $this->_var['data']['time']; ?><?php endif; ?></strong></dd>
		    </dl><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
		</div>		
	   </td>
	</tr>
	</table>
        <?php endif; ?>
	<table>
        <?php if ($this->_var['order']['to_buyer']): ?>
        <tr>
          <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_to_buyer']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['to_buyer']; ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($this->_var['virtual_card']): ?>
        <tr>
          <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['virtual_card_info']; ?>：</td>
          <td colspan="3" align="left" bgcolor="#ffffff">
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
            <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
              <?php if ($this->_var['card']['card_sn']): ?><?php echo $this->_var['lang']['card_sn']; ?>:<span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span><?php endif; ?>
              <?php if ($this->_var['card']['card_password']): ?><?php echo $this->_var['lang']['card_password']; ?>:<span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span><?php endif; ?>
              <?php if ($this->_var['card']['end_date']): ?><?php echo $this->_var['lang']['end_date']; ?>:<?php echo $this->_var['card']['end_date']; ?><?php endif; ?><br />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </td>
        </tr>
        <?php endif; ?>
      </table>
        <div class="blank"></div>
        <h5><span><?php echo $this->_var['lang']['goods_list']; ?></span>
        <?php if ($this->_var['allow_to_cart']): ?>
        <a href="javascript:;" onclick="returnToCart(<?php echo $this->_var['order']['order_id']; ?>)" class="fr"><?php echo $this->_var['lang']['return_to_cart']; ?></a>
        <?php endif; ?>
        </h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <th width="23%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></th>
            <th width="29%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_attr']; ?></th>
            <!--<th><?php echo $this->_var['lang']['market_price']; ?></th>-->
            <th width="26%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_price']; ?><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?></th>
            <th width="9%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['number']; ?></th>
            <th width="20%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['subtotal']; ?></th>
          </tr>
          <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
          <tr>
            <td bgcolor="#ffffff">
              <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a>
                <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                <?php elseif ($this->_var['goods']['is_gift']): ?>
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                <?php endif; ?>
              <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（礼包）</span></a>
                <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                    <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                      <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
              <?php endif; ?>
              </td>
            <td align="left" bgcolor="#ffffff"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
            <!--<td align="right"><?php echo $this->_var['goods']['market_price']; ?></td>-->
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['goods']['goods_price']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['goods']['goods_number']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['goods']['subtotal']; ?></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <tr>
            <td colspan="8" bgcolor="#ffffff" align="right">
            <?php echo $this->_var['lang']['shopping_money']; ?><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?>: <?php echo $this->_var['order']['formated_goods_amount']; ?>
            </td>
          </tr>
        </table>
         <div class="blank"></div>
        <h5><span><?php echo $this->_var['lang']['fee_total']; ?></span></h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <td align="right" bgcolor="#ffffff">
                <?php echo $this->_var['lang']['goods_all_price']; ?><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?>: <?php echo $this->_var['order']['formated_goods_amount']; ?>
              <?php if ($this->_var['order']['discount'] > 0): ?>
              - <?php echo $this->_var['lang']['discount']; ?>: <?php echo $this->_var['order']['formated_discount']; ?>
              <?php endif; ?>
              <?php if ($this->_var['order']['tax'] > 0): ?>
              + <?php echo $this->_var['lang']['tax']; ?>: <?php echo $this->_var['order']['formated_tax']; ?>
              <?php endif; ?>
              <?php if ($this->_var['order']['shipping_fee'] > 0): ?>
              + <?php echo $this->_var['lang']['shipping_fee']; ?>: <?php echo $this->_var['order']['formated_shipping_fee']; ?>
              <?php endif; ?>
              <?php if ($this->_var['order']['insure_fee'] > 0): ?>
              + <?php echo $this->_var['lang']['insure_fee']; ?>: <?php echo $this->_var['order']['formated_insure_fee']; ?>
              <?php endif; ?>
              <?php if ($this->_var['order']['pay_fee'] > 0): ?>
              + <?php echo $this->_var['lang']['pay_fee']; ?>: <?php echo $this->_var['order']['formated_pay_fee']; ?>
              <?php endif; ?>
              <?php if ($this->_var['order']['pack_fee'] > 0): ?>
              + <?php echo $this->_var['lang']['pack_fee']; ?>: <?php echo $this->_var['order']['formated_pack_fee']; ?>
              <?php endif; ?>
              <?php if ($this->_var['order']['card_fee'] > 0): ?>
              + <?php echo $this->_var['lang']['card_fee']; ?>: <?php echo $this->_var['order']['formated_card_fee']; ?>
              <?php endif; ?>        </td>
          </tr>
          <tr>
            <td align="right" bgcolor="#ffffff">
              <?php if ($this->_var['order']['money_paid'] > 0): ?>
              - <?php echo $this->_var['lang']['order_money_paid']; ?>: <?php echo $this->_var['order']['formated_money_paid']; ?>
              <?php endif; ?>
              <?php if ($this->_var['order']['surplus'] > 0): ?>
              - <?php echo $this->_var['lang']['use_surplus']; ?>: <?php echo $this->_var['order']['formated_surplus']; ?>
              <?php endif; ?>
              <?php if ($this->_var['order']['integral_money'] > 0): ?>
              - <?php echo $this->_var['lang']['use_integral']; ?>: <?php echo $this->_var['order']['formated_integral_money']; ?>
              <?php endif; ?>
              <?php if ($this->_var['order']['bonus'] > 0): ?>
              - <?php echo $this->_var['lang']['use_bonus']; ?>: <?php echo $this->_var['order']['formated_bonus']; ?>
              <?php endif; ?>        </td>
          </tr>
          <tr>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['order_amount']; ?>: <?php echo $this->_var['order']['formated_order_amount']; ?>
            <?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><br />
            <?php echo $this->_var['lang']['notice_gb_order_amount']; ?><?php endif; ?></td>
          </tr>
            <?php if ($this->_var['allow_edit_surplus']): ?>
          <tr>
            <td align="right" bgcolor="#ffffff">
      <form action="user.php" method="post" name="formFee" id="formFee"><?php echo $this->_var['lang']['use_more_surplus']; ?>:
            <input name="surplus" type="text" size="8" value="0" style="border:1px solid #ccc;"/><?php echo $this->_var['max_surplus']; ?>
            <input type="submit" name="Submit" class="btn-primary" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
      <input type="hidden" name="act" value="act_edit_surplus" />
      <input type="hidden" name="order_id" value="<?php echo $_GET['order_id']; ?>" />
      </form></td>
          </tr>
    <?php endif; ?>
        </table>
         <div class="blank"></div>
        <h5><span><?php echo $this->_var['lang']['consignee_info']; ?></span></h5>
        <div class="blank"></div>
         <?php if ($this->_var['order']['allow_update_address'] > 0): ?>
          <form action="user.php" method="post" name="formAddress" id="formAddress">
           <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
              <tr>
                <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['consignee_name']; ?>： </td>
                <td width="35%" align="left" bgcolor="#ffffff"><input name="consignee" type="text"  class="inputBg" value="<?php echo htmlspecialchars($this->_var['order']['consignee']); ?>" size="25">
                </td>
                <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['email_address']; ?>： </td>
                <td width="35%" align="left" bgcolor="#ffffff"><input name="email" type="text"  class="inputBg" value="<?php echo htmlspecialchars($this->_var['order']['email']); ?>" size="25" />
                </td>
              </tr>
              <?php if ($this->_var['order']['exist_real_goods']): ?>
              
              <tr>
                <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detailed_address']; ?>： </td>
                <td align="left" bgcolor="#ffffff"><input name="address" type="text" class="inputBg" value="<?php echo htmlspecialchars($this->_var['order']['address']); ?> " size="25" /></td>
                <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['postalcode']; ?>：</td>
                <td align="left" bgcolor="#ffffff"><input name="zipcode" type="text"  class="inputBg" value="<?php echo htmlspecialchars($this->_var['order']['zipcode']); ?>" size="25" /></td>
              </tr>
              <?php endif; ?>
              <tr>
                <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['phone']; ?>：</td>
                <td align="left" bgcolor="#ffffff"><input name="tel" type="text" class="inputBg" value="<?php echo htmlspecialchars($this->_var['order']['tel']); ?>" size="25" /></td>
                <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['backup_phone']; ?>：</td>
                <td align="left" bgcolor="#ffffff"><input name="mobile" type="text"  class="inputBg" value="<?php echo htmlspecialchars($this->_var['order']['mobile']); ?>" size="25" /></td>
              </tr>
              <?php if ($this->_var['order']['exist_real_goods']): ?>
              
              <tr>
                <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['sign_building']; ?>：</td>
                <td align="left" bgcolor="#ffffff"><input name="sign_building" class="inputBg" type="text" value="<?php echo htmlspecialchars($this->_var['order']['sign_building']); ?>" size="25" />
                </td>
                <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['deliver_goods_time']; ?>：</td>
                <td align="left" bgcolor="#ffffff"><input name="best_time" type="text" class="inputBg" value="<?php echo htmlspecialchars($this->_var['order']['best_time']); ?>" size="25" />
                </td>
              </tr>
              <?php endif; ?>
              <tr>
                <td colspan="4" align="center" bgcolor="#ffffff"><input type="hidden" name="act" value="save_order_address" />
                  <input type="hidden" name="order_id" value="<?php echo $this->_var['order']['order_id']; ?>" />
                  <input type="submit" class="btn-primary" value="<?php echo $this->_var['lang']['update_address']; ?>"  />
                </td>
              </tr>
            </table>
          </form>
          <?php else: ?>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['consignee_name']; ?>：</td>
              <td width="35%" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['consignee']; ?></td>
              <td width="15%" align="right" bgcolor="#ffffff" ><?php echo $this->_var['lang']['email_address']; ?>：</td>
              <td width="35%" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['email']; ?></td>
            </tr>
            <?php if ($this->_var['order']['exist_real_goods']): ?>
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detailed_address']; ?>：</td>
              <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['address']; ?>
                <?php if ($this->_var['order']['zipcode']): ?>
                [<?php echo $this->_var['lang']['postalcode']; ?>: <?php echo $this->_var['order']['zipcode']; ?>]
                <?php endif; ?></td>
            </tr>
            <?php endif; ?>
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['phone']; ?>：</td>
              <td align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['tel']; ?> </td>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['backup_phone']; ?>：</td>
              <td align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['mobile']; ?></td>
            </tr>
            <?php if ($this->_var['order']['exist_real_goods']): ?>
            <tr>
              <td align="right" bgcolor="#ffffff" ><?php echo $this->_var['lang']['sign_building']; ?>：</td>
              <td align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['sign_building']; ?> </td>
              <td align="right" bgcolor="#ffffff" ><?php echo $this->_var['lang']['deliver_goods_time']; ?>：</td>
              <td align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['best_time']; ?></td>
            </tr>
            <?php endif; ?>
          </table>
          <?php endif; ?>
          <div class="blank"></div>
	<?php if ($this->_var['order']['order_status1'] == 0): ?>
        <h5><span><?php echo $this->_var['lang']['payment']; ?></span></h5>
        <div class="blank"></div>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tr>
                  <td bgcolor="#ffffff">
                  <?php echo $this->_var['lang']['select_payment']; ?>: <?php echo $this->_var['order']['pay_name']; ?>。<?php echo $this->_var['lang']['order_amount']; ?>: <strong><?php echo $this->_var['order']['formated_order_amount']; ?></strong><br />
                  <?php echo $this->_var['order']['pay_desc']; ?>
                  </td>
                </tr>
                  <tr>
                  <td bgcolor="#ffffff" align="right">
                  <?php if ($this->_var['payment_list']): ?>
              <form name="payment" method="post" action="user.php">
              <?php echo $this->_var['lang']['change_payment']; ?>:
              <select name="pay_id">
                <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
                <option value="<?php echo $this->_var['payment']['pay_id']; ?>">
                <?php echo $this->_var['payment']['pay_name']; ?>(<?php echo $this->_var['lang']['pay_fee']; ?>:<?php echo $this->_var['payment']['format_pay_fee']; ?>)
                </option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <input type="hidden" name="act" value="act_edit_payment" />
              <input type="hidden" name="order_id" value="<?php echo $this->_var['order']['order_id']; ?>" />
              <input type="submit" name="Submit" class="btn-primary" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
              </form>
              <?php endif; ?>
                  </td>
                </tr>
              </table>
        <div class="blank"></div>
	<?php endif; ?>
        <h5><span><?php echo $this->_var['lang']['other_info']; ?></span></h5>
        <div class="blank"></div>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <?php if ($this->_var['order']['shipping_id'] > 0): ?>
          <tr>
            <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['shipping']; ?>：</td>
            <td colspan="3" width="85%" align="left" bgcolor="#ffffff" id="shipping_name"><?php echo $this->_var['order']['shipping_name']; ?></td>
          </tr>
          <?php endif; ?>

          <tr>
            <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['payment']; ?>：</td>
            <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['pay_name']; ?></td>
          </tr>
          <?php if ($this->_var['order']['insure_fee'] > 0): ?>
          <?php endif; ?>
          <?php if ($this->_var['order']['pack_name']): ?>
          <tr>
            <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['use_pack']; ?>：</td>
            <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['pack_name']; ?></td>
          </tr>
          <?php endif; ?>
          <?php if ($this->_var['order']['card_name']): ?>
          <tr>
            <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['use_card']; ?>：</td>
            <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['card_name']; ?></td>
          </tr>
          <?php endif; ?>
          <?php if ($this->_var['order']['card_message']): ?>
          <tr>
            <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['bless_note']; ?>：</td>
            <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['card_message']; ?></td>
          </tr>
          <?php endif; ?>
          <?php if ($this->_var['order']['surplus'] > 0): ?>
          <?php endif; ?>
          <?php if ($this->_var['order']['integral'] > 0): ?>
          <tr>
            <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['use_integral']; ?>：</td>
            <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['integral']; ?></td>
          </tr>
          <?php endif; ?>
          <?php if ($this->_var['order']['bonus'] > 0): ?>
          <?php endif; ?>
          <?php if ($this->_var['order']['inv_payee'] && $this->_var['order']['inv_content']): ?>
          <tr>
            <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['invoice_title']; ?>：</td>
            <td width="36%" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['inv_payee']; ?></td>
            <td width="19%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['invoice_content']; ?>：</td>
            <td width="25%" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['inv_content']; ?></td>
          </tr>
          <?php endif; ?>
          <?php if ($this->_var['order']['postscript']): ?>
          <tr>
            <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['order_postscript']; ?>：</td>
            <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['postscript']; ?></td>
          </tr>
          <?php endif; ?>
          <tr>
            <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_process']; ?>：</td>
            <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['how_oos_name']; ?></td>
          </tr>
        </table>
      <?php endif; ?>
    
    
      <?php if ($this->_var['action'] == "account_raply" || $this->_var['action'] == "account_log" || $this->_var['action'] == "account_deposit" || $this->_var['action'] == "account_detail"): ?>
        <script type="text/javascript">
          <?php $_from = $this->_var['lang']['account_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </script>
        <h5><span><?php echo $this->_var['lang']['user_balance']; ?></span></h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <td align="right" bgcolor="#ffffff"><a href="user.php?act=account_deposit" class="f6"><?php echo $this->_var['lang']['surplus_type_0']; ?></a> | <a href="user.php?act=account_raply" class="f6"><?php echo $this->_var['lang']['surplus_type_1']; ?></a> | <a href="user.php?act=account_detail" class="f6"><?php echo $this->_var['lang']['add_surplus_log']; ?></a> | <a href="user.php?act=account_log" class="f6"><?php echo $this->_var['lang']['view_application']; ?></a> </td>
          </tr>
        </table>
        <?php endif; ?>
        <?php if ($this->_var['action'] == "account_raply"): ?>
        <form name="formSurplus" method="post" action="user.php" onSubmit="return submitSurplus()">
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
		
		
          <tr>
            <td width="25%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['repay_money']; ?>:</td>
            <td bgcolor="#ffffff" align="left"><input type="text" name="amount" placeholder="提现金额(￥)" class="inputBg" size="30" />
            </td>
          </tr>
		  
          <tr>
            <td width="25%" align="right"  bgcolor="#ffffff">真实姓名:</td>
            <td bgcolor="#ffffff" align="left"><input type="text" name="real_name" placeholder="真实姓名"  class="inputBg" size="30" />
            </td>
          </tr>
		  
          <tr>
            <td width="25%" align="right" bgcolor="#ffffff">开户银行/支付宝/微信:</td>
            <td bgcolor="#ffffff" align="left"><input type="text" name="bank_name" placeholder="开户银行/支付宝/微信"  class="inputBg" size="30" />
            </td>
          </tr>
		  
          <tr>
            <td width="25%" align="right" bgcolor="#ffffff">银行账号/支付宝账号/微信账号:</td>
            <td bgcolor="#ffffff" align="left"><input type="text" name="bank_account" placeholder="银行账号/支付宝账号/微信账号"  class="inputBg" size="30" />
            </td>
          </tr>
		  
          <tr>
            <td width="25%" align="right" bgcolor="#ffffff">手机号:</td>
           <td bgcolor="#ffffff" align="left"><input type="text" name="mobile_phone" placeholder="手机号"  class="inputBg" size="30" />
            </td>
          </tr>
		  
		  
          <tr>
            <td width="25%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['process_notic']; ?>:</td>
            <td bgcolor="#ffffff" align="left"><textarea name="user_note" cols="55" rows="6" placeholder="<?php echo $this->_var['lang']['process_notic']; ?>" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['user_note']); ?></textarea></td>
          </tr>
		  
		  
          <tr>
            <td bgcolor="#ffffff" colspan="2" align="center">
            <input type="hidden" name="surplus_type" value="1" />
              <input type="hidden" name="act" value="act_account" />
              <input type="submit" name="submit"  class="btn-primary" value="<?php echo $this->_var['lang']['submit_request']; ?>" />
              <input type="reset" name="reset" class="btn-primary" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
            </td>
          </tr>
        </table>
        </form>
        <?php endif; ?>
        <?php if ($this->_var['action'] == "account_deposit"): ?>
        <form name="formSurplus" method="post" action="user.php" onSubmit="return submitSurplus()">
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td width="15%" bgcolor="#ffffff"><?php echo $this->_var['lang']['deposit_money']; ?>:</td>
              <td align="left" bgcolor="#ffffff"><input type="text" name="amount"  class="inputBg" value="<?php echo htmlspecialchars($this->_var['order']['amount']); ?>" size="30" /></td>
            </tr>
            <tr>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_notic']; ?>:</td>
              <td align="left" bgcolor="#ffffff"><textarea name="user_note" cols="55" rows="6" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['user_note']); ?></textarea></td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr align="center">
              <td bgcolor="#ffffff"  colspan="3" align="left"><?php echo $this->_var['lang']['payment']; ?>:</td>
            </tr>
            <tr align="center">
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['pay_name']; ?></td>
              <td bgcolor="#ffffff" width="60%"><?php echo $this->_var['lang']['pay_desc']; ?></td>
              <td bgcolor="#ffffff" width="17%"><?php echo $this->_var['lang']['pay_fee']; ?></td>
            </tr>
            <?php $_from = $this->_var['payment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
            <tr>
              <td bgcolor="#ffffff" align="left">
              <input type="radio" name="payment_id" value="<?php echo $this->_var['list']['pay_id']; ?>" /><?php echo $this->_var['list']['pay_name']; ?></td>
              <td bgcolor="#ffffff" align="left"><?php echo $this->_var['list']['pay_desc']; ?></td>
              <td bgcolor="#ffffff" align="center"><?php echo $this->_var['list']['pay_fee']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
        <td bgcolor="#ffffff" colspan="3"  align="center">
        <input type="hidden" name="surplus_type" value="0" />
          <input type="hidden" name="rec_id" value="<?php echo $this->_var['order']['id']; ?>" />
          <input type="hidden" name="act" value="act_account" />
          <input type="submit" class="btn-primary" name="submit" value="<?php echo $this->_var['lang']['submit_request']; ?>" />
          <input type="reset" class="btn-primary" name="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
        </td>
      </tr>
          </table>
        </form>
        <?php endif; ?>
        <?php if ($this->_var['action'] == "act_account"): ?>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <td width="25%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['surplus_amount']; ?></td>
            <td width="80%" bgcolor="#ffffff"><?php echo $this->_var['amount']; ?></td>
          </tr>
          <tr>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['payment_name']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['payment']['pay_name']; ?></td>
          </tr>
          <tr>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['payment_fee']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['pay_fee']; ?></td>
          </tr>
          <tr>
            <td align="right" valign="middle" bgcolor="#ffffff"><?php echo $this->_var['lang']['payment_desc']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['payment']['pay_desc']; ?></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#ffffff"><?php echo $this->_var['payment']['pay_button']; ?></td>
          </tr>
        </table>
        <?php endif; ?>
       <?php if ($this->_var['action'] == "account_detail"): ?>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_time']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['surplus_pro_type']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['money']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['change_desc']; ?></td>
          </tr>
          <?php $_from = $this->_var['account_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['change_time']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['type']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['amount']; ?></td>
            <td bgcolor="#ffffff" title="<?php echo $this->_var['item']['change_desc']; ?>">&nbsp;&nbsp;<?php echo $this->_var['item']['short_change_desc']; ?></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <tr>
            <td colspan="4" align="center" bgcolor="#ffffff"><div align="right"><?php echo $this->_var['lang']['current_surplus']; ?><?php echo $this->_var['surplus_amount']; ?></div></td>
          </tr>
        </table>
        <?php echo $this->fetch('library/pages.lbi'); ?>
        <?php endif; ?>
        <?php if ($this->_var['action'] == "account_log"): ?>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_time']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['surplus_pro_type']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['money']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_notic']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['admin_notic']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['is_paid']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
          </tr>
          <?php $_from = $this->_var['account_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['add_time']; ?></td>
            <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['type']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['amount']; ?></td>
            <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['user_note']; ?></td>
            <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['short_admin_note']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['pay_status']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['handle']; ?>
              <?php if (( $this->_var['item']['is_paid'] == 0 && $this->_var['item']['process_type'] == 1 ) || $this->_var['item']['handle']): ?>
              <a href="user.php?act=cancel&id=<?php echo $this->_var['item']['id']; ?>" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_account']; ?>')) return false;"><?php echo $this->_var['lang']['is_cancel']; ?></a>
              <?php endif; ?>
                            </td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <tr>
            <td colspan="7" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['current_surplus']; ?><?php echo $this->_var['surplus_amount']; ?></td>
          </tr>
        </table>
        <?php echo $this->fetch('library/pages.lbi'); ?>
      <?php endif; ?>
      
      
      <?php if ($this->_var['action'] == 'address_list'): ?>
        <h5><span><?php echo $this->_var['lang']['consignee_info']; ?></span></h5>
        <div class="blank"></div>
         
            <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,transport_jquery.js,region.js,shopping_flow.js')); ?>
            <script type="text/javascript">
              region.isAdmin = false;
              <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
              var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              
              onload = function() {
                if (!document.all)
                {
                  document.forms['theForm'].reset();
                }
              }
              
            </script>
            <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
            <form action="user.php" method="post" name="theForm" onsubmit="return checkConsignee(this)">
              <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tr>
                  <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['country_province']; ?>：</td>
                  <td colspan="3" align="left" bgcolor="#ffffff"><select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')">
                      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
                      <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
                      <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')">
                      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
                      <?php $_from = $this->_var['province_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
                      <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <select name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')">
                      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
                      <?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                      <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="display:none"<?php endif; ?>>
                      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
                      <?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                      <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                  <?php echo $this->_var['lang']['require_field']; ?> </td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['consignee_name']; ?>：</td>
                  <td align="left" bgcolor="#ffffff"><input name="consignee" type="text" class="inputBg" id="consignee_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" />
                  <?php echo $this->_var['lang']['require_field']; ?> </td>
                  <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['email_address']; ?>：</td>
                  <td align="left" bgcolor="#ffffff"><input name="email" type="text" class="inputBg" id="email_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['email']); ?>" />
                  <?php echo $this->_var['lang']['require_field']; ?></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detailed_address']; ?>：</td>
                  <td align="left" bgcolor="#ffffff"><input name="address" type="text" class="inputBg" id="address_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" />
                  <?php echo $this->_var['lang']['require_field']; ?></td>
                  <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['postalcode']; ?>：</td>
                  <td align="left" bgcolor="#ffffff"><input name="zipcode" type="text" class="inputBg" id="zipcode_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?>" /></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['phone']; ?>：</td>
                  <td align="left" bgcolor="#ffffff"><input name="tel" type="text" class="inputBg" id="tel_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['tel']); ?>" />
                  </td>
                  <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['backup_phone']; ?>：</td>
                  <td align="left" bgcolor="#ffffff"><input name="mobile" type="text" class="inputBg" id="mobile_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?>" /><?php echo $this->_var['lang']['require_field']; ?></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['sign_building']; ?>：</td>
                  <td align="left" bgcolor="#ffffff"><input name="sign_building" type="text" class="inputBg" id="sign_building_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?>" /></td>
                  <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['deliver_goods_time']; ?>：</td>
                  <td align="left" bgcolor="#ffffff"><input name="best_time" type="text"  class="inputBg" id="best_time_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?>" /></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">&nbsp;</td>
                  <td colspan="3" align="center" bgcolor="#ffffff">
		    <?php if ($this->_var['consignee']['consignee']): ?>
                    <input type="submit" name="submit" class="btn-primary" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" />
                    <input name="button" type="button" class="btn-primary"  onclick="if (confirm('<?php echo $this->_var['lang']['confirm_drop_address']; ?>'))location.href='user.php?act=drop_consignee&id=<?php echo $this->_var['consignee']['address_id']; ?>'" value="<?php echo $this->_var['lang']['drop']; ?>" />
                    <?php else: ?>
                    <input type="submit" name="submit" class="btn-primary"  value="<?php echo $this->_var['lang']['add_address']; ?>"/>
                    <?php endif; ?>
                    <input type="hidden" name="act" value="act_edit_address" />
                    <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />
                  </td>
                </tr>
              </table>
            </form>

            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
    
      
       <?php if ($this->_var['action'] == 'transform_points'): ?>
       <h5><span><?php echo $this->_var['lang']['transform_points']; ?></span></h5>
             <div class="blank"></div>
       <?php if ($this->_var['exchange_type'] == 'ucenter'): ?>
        <form action="user.php" method="post" name="transForm" onsubmit="return calcredit();">
       <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tr>
                    <th width="120" bgcolor="#FFFFFF" align="right" valign="top"><?php echo $this->_var['lang']['cur_points']; ?>:</th>
                    <td bgcolor="#FFFFFF">
                    <label for="pay_points"><?php echo $this->_var['lang']['exchange_points']['1']; ?>:</label><input type="text" size="15" id="pay_points" name="pay_points" value="<?php echo $this->_var['shop_points']['pay_points']; ?>" style="border:0;border-bottom:1px solid #DADADA;" readonly="readonly" /><br />
                    <div class="blank"></div>
                    <label for="rank_points"><?php echo $this->_var['lang']['exchange_points']['0']; ?>:</label><input type="text" size="15" id="rank_points" name="rank_points" value="<?php echo $this->_var['shop_points']['rank_points']; ?>" style="border:0;border-bottom:1px solid #DADADA;" readonly="readonly" />
                    </td>
                    </tr>
          <tr><td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <th align="right" bgcolor="#FFFFFF"><label for="amount"><?php echo $this->_var['lang']['exchange_amount']; ?>:</label></th>
            <td bgcolor="#FFFFFF"><input size="15" name="amount" id="amount" value="0" onkeyup="calcredit();" type="text" />
                <select name="fromcredits" id="fromcredits" onchange="calcredit();">
                  <?php echo $this->html_options(array('options'=>$this->_var['lang']['exchange_points'],'selected'=>$this->_var['selected_org'])); ?>
                </select>
            </td>
          </tr>
          <tr>
            <th align="right" bgcolor="#FFFFFF"><label for="desamount"><?php echo $this->_var['lang']['exchange_desamount']; ?>:</label></th>
            <td bgcolor="#FFFFFF"><input type="text" name="desamount" id="desamount" disabled="disabled" value="0" size="15" />
              <select name="tocredits" id="tocredits" onchange="calcredit();">
                <?php echo $this->html_options(array('options'=>$this->_var['to_credits_options'],'selected'=>$this->_var['selected_dst'])); ?>
              </select>
            </td>
          </tr>
          <tr>
            <th align="right" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['exchange_ratio']; ?>:</th>
            <td bgcolor="#FFFFFF">1 <span id="orgcreditunit"><?php echo $this->_var['orgcreditunit']; ?></span> <span id="orgcredittitle"><?php echo $this->_var['orgcredittitle']; ?></span> <?php echo $this->_var['lang']['exchange_action']; ?> <span id="descreditamount"><?php echo $this->_var['descreditamount']; ?></span> <span id="descreditunit"><?php echo $this->_var['descreditunit']; ?></span> <span id="descredittitle"><?php echo $this->_var['descredittitle']; ?></span></td>
          </tr>
          <tr><td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF"><input type="hidden" name="act" value="act_transform_ucenter_points" /><input type="submit" name="transfrom" value="<?php echo $this->_var['lang']['transform']; ?>" /></td></tr>
  </table>
        </form>
       <script type="text/javascript">
        <?php $_from = $this->_var['lang']['exchange_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'lang_js');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['lang_js']):
?>
        var <?php echo $this->_var['key']; ?> = '<?php echo $this->_var['lang_js']; ?>';
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        var out_exchange_allow = new Array();
        <?php $_from = $this->_var['out_exchange_allow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'ratio');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['ratio']):
?>
        out_exchange_allow['<?php echo $this->_var['key']; ?>'] = '<?php echo $this->_var['ratio']; ?>';
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        function calcredit()
        {
            var frm = document.forms['transForm'];
            var src_credit = frm.fromcredits.value;
            var dest_credit = frm.tocredits.value;
            var in_credit = frm.amount.value;
            var org_title = frm.fromcredits[frm.fromcredits.selectedIndex].innerHTML;
            var dst_title = frm.tocredits[frm.tocredits.selectedIndex].innerHTML;
            var radio = 0;
            var shop_points = ['rank_points', 'pay_points'];
            if (parseFloat(in_credit) > parseFloat(document.getElementById(shop_points[src_credit]).value))
            {
                alert(balance.replace('{%s}', org_title));
                frm.amount.value = frm.desamount.value = 0;
                return false;
            }
            if (typeof(out_exchange_allow[dest_credit+'|'+src_credit]) == 'string')
            {
                radio = (1 / parseFloat(out_exchange_allow[dest_credit+'|'+src_credit])).toFixed(2);
            }
            document.getElementById('orgcredittitle').innerHTML = org_title;
            document.getElementById('descreditamount').innerHTML = radio;
            document.getElementById('descredittitle').innerHTML = dst_title;
            if (in_credit > 0)
            {
                if (typeof(out_exchange_allow[dest_credit+'|'+src_credit]) == 'string')
                {
                    frm.desamount.value = Math.floor(parseFloat(in_credit) / parseFloat(out_exchange_allow[dest_credit+'|'+src_credit]));
                    frm.transfrom.disabled = false;
                    return true;
                }
                else
                {
                    frm.desamount.value = deny;
                    frm.transfrom.disabled = true;
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
       </script>
       <?php else: ?>
        <b><?php echo $this->_var['lang']['cur_points']; ?>:</b>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <td width="30%" valign="top" bgcolor="#FFFFFF"><table border="0">
              <?php $_from = $this->_var['bbs_points']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'points');if (count($_from)):
    foreach ($_from AS $this->_var['points']):
?>
              <tr>
                <th><?php echo $this->_var['points']['title']; ?>:</th>
                <td width="120" style="border-bottom:1px solid #DADADA;"><?php echo $this->_var['points']['value']; ?></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </table></td>
            <td width="50%" valign="top" bgcolor="#FFFFFF"><table>
                    <tr>
                <th><?php echo $this->_var['lang']['pay_points']; ?>:</th>
                <td width="120" style="border-bottom:1px solid #DADADA;"><?php echo $this->_var['shop_points']['pay_points']; ?></td>
                    </tr>
              <tr>
                <th><?php echo $this->_var['lang']['rank_points']; ?>:</th>
                <td width="120" style="border-bottom:1px solid #DADADA;"><?php echo $this->_var['shop_points']['rank_points']; ?></td>
              </tr>
            </table></td>
          </tr>
        </table>
        <br />
        <b><?php echo $this->_var['lang']['rule_list']; ?>:</b>
        <ul class="point clearfix">
          <?php $_from = $this->_var['rule_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rule');if (count($_from)):
    foreach ($_from AS $this->_var['rule']):
?>
          <li><font class="f1">·</font>"<?php echo $this->_var['rule']['from']; ?>" <?php echo $this->_var['lang']['transform']; ?> "<?php echo $this->_var['rule']['to']; ?>" <?php echo $this->_var['lang']['rate_is']; ?> <?php echo $this->_var['rule']['rate']; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>

        <form action="user.php" method="post" name="theForm">
        <table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" style="border-collapse:collapse;border:1px solid #DADADA;">
          <tr style="background:#F1F1F1;">
            <th><?php echo $this->_var['lang']['rule']; ?></th>
            <th><?php echo $this->_var['lang']['transform_num']; ?></th>
            <th><?php echo $this->_var['lang']['transform_result']; ?></th>
          </tr>
          <tr>
            <td>
              <select name="rule_index" onchange="changeRule()">
                <?php $_from = $this->_var['rule_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rule');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rule']):
?>
                <option value="<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rule']['from']; ?>-><?php echo $this->_var['rule']['to']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
          </td>
          <td>
            <input type="text" name="num" value="0" onkeyup="calPoints()"/>
          </td>
          <td><span id="ECS_RESULT">0</span></td>
          </tr>
          <tr>
            <td colspan="3" align="center"><input type="hidden" name="act" value="act_transform_points"  /><input type="submit" value="<?php echo $this->_var['lang']['transform']; ?>" /></td>
          </tr>
        </table>
        </form>
       <script type="text/javascript">
          //<![CDATA[
            var rule_list = new Object();
            var invalid_input = '<?php echo $this->_var['lang']['invalid_input']; ?>';
            <?php $_from = $this->_var['rule_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rule');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rule']):
?>
            rule_list['<?php echo $this->_var['key']; ?>'] = '<?php echo $this->_var['rule']['rate']; ?>';
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            function calPoints()
            {
              var frm = document.forms['theForm'];
              var rule_index = frm.elements['rule_index'].value;
              var num = parseInt(frm.elements['num'].value);
              var rate = rule_list[rule_index];

              if (isNaN(num) || num < 0 || num != frm.elements['num'].value)
              {
                document.getElementById('ECS_RESULT').innerHTML = invalid_input;
                rerutn;
              }
              var arr = rate.split(':');
              var from = parseInt(arr[0]);
              var to = parseInt(arr[1]);

              if (from <=0 || to <=0)
              {
                from = 1;
                to = 0;
              }
              document.getElementById('ECS_RESULT').innerHTML = parseInt(num * to / from);
            }

            function changeRule()
            {
              document.forms['theForm'].elements['num'].value = 0;
              document.getElementById('ECS_RESULT').innerHTML = 0;
            }
          //]]>
       </script>
       <?php endif; ?>
        <?php endif; ?>
        

        
        <?php if ($this->_var['action'] == "user_card"): ?>
         <form  action="user.php" method="post">
    <h5><span>绑定会员卡/修改卡密</span></h5>
    <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr>
          <td width="28%" align="left" bgcolor="#FFFFFF" colspan="2" >
您已绑定的卡号：<br />
          <?php if ($this->_var['card_list']): ?>
          <table border="0" cellpadding="0" cellspacing="0" width="80%" align="center">
          <tr>
    <th  align="center">卡号</th>
    <th  align="center">等级</th>
    <th  align="center">发卡方式</th>
    <th  align="center">绑定时间</th>
    <th  align="center">状态</th>
     <th  align="center">备注</th>
  </tr>
          <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
          
  <tr>
    <td align="center"><?php echo $this->_var['card']['card_no']; ?></td>
    <td  align="center"><?php echo $this->_var['card']['card_level']; ?></td>
    <td  align="center"><?php echo $this->_var['card']['send_type']; ?></td>
    <td  align="center"><?php echo $this->_var['card']['str_bind_time']; ?></td>
    <td  align="center"><?php if ($this->_var['card']['is_show']): ?>可用<?php else: ?>锁定<?php endif; ?></td>
     <td  align="center"><?php echo $this->_var['card']['des']; ?></td>
  </tr>
  


          
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
          </table>
          <?php else: ?>
          暂无
          <?php endif; ?>
          </td>
          <tr>
        
        <tr>
        <td colspan="2" bgcolor="#FFFFFF" align="left">
        <span class="f4">提示：</span><br />

1.每个可以用户绑定多个会员卡号，绑定后绑定后你就可以用任何一个卡号登录<br />

2.使用会员卡号登录时请输入会员卡密码（卡密）<br />

        </td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#FFFFFF">卡号：</td>
          <td width="76%" align="left" bgcolor="#FFFFFF"><input name="card_no" type="text" size="25"  class="inputBg" value="" /></td>
          <tr>
          <td width="28%" align="right" bgcolor="#FFFFFF">卡密：</td>
          <td width="76%" align="left" bgcolor="#FFFFFF"><input name="card_pass" type="password" size="25"  class="inputBg" value="" /></td>
          
        </tr>
        <tr><td colspan="2" bgcolor="#FFFFFF" align="center">
        <input name="act" type="hidden" value="user_card" />
        <input name="bind" type="submit" value="绑定" class="btn-primary" style="border:none;" />&nbsp;<input name="unbind" type="submit" value="解绑" class="btn-primary" style="border:none;" />&nbsp;<input name="chgcardpass" type="submit" value="修改卡密" class="btn-primary" style="border:none;" /></td></tr>
    </table>    
    </form>
        
        <?php endif; ?>
        

          <?php if ($this->_var['action'] == back_list): ?>
	  <h5><span>售后订单列表</span></h5>
          <div class="blank"></div>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E6E6E6">
            <tr align="center">
              <td bgcolor="#ffffff">售后单号</td>
              <td bgcolor="#ffffff">原订单号</td>
              <td bgcolor="#ffffff" width="20%">商品名称</td>
              <td bgcolor="#ffffff">申请时间</td>
              <td bgcolor="#ffffff">应退金额</td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_status']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
            </tr>
            <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
            <tr>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['back_id']; ?></td>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_sn']; ?></td>
              <td align="center" bgcolor="#ffffff" ><a href="<?php echo $this->_var['item']['goods_url']; ?>" target="_blank"><?php echo $this->_var['item']['goods_name']; ?></a></td>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_time']; ?></td>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['refund_money_1']; ?></td>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['status_back']; ?></td>
              <td align="center" bgcolor="#ffffff"><?php if ($this->_var['item']['status_back'] == 0): ?> <a href="user.php?act=del_back_order&id=<?php echo $this->_var['item']['back_id']; ?>" onclick="return confirm('你确认要取消吗？')">取消</a> | <?php endif; ?> <a href="user.php?act=back_order_detail&id=<?php echo $this->_var['item']['back_id']; ?>">查看</a></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
          <div class="blank5"></div>
          <?php echo $this->fetch('library/pages.lbi'); ?>
          <div class="blank5"></div>
          <?php endif; ?> 
          <?php if ($this->_var['action'] == back_order): ?>
          <div class="tabmenu">
            <ul class="tab pngFix">
              <li class="active"> <a href="#"><?php if ($this->_var['back_goods']['shipping_time_end'] == 0): ?>
    退款\退货
    <?php else: ?>
    申请售后
    <?php endif; ?>退换货订单提交</a> </li>
            </ul>
          </div>
          <div class="blank"></div>
          <script>
	function check_back_form()
	{
		if (document.getElementById("back_type_2").checked == true)
		{
			if (document.getElementById("huan_box").innerHTML == "")
			{
				alert("请添加换货商品！");
				document.getElementById("add_huan_btton").focus();
				show_huan_goods();
				return false;	
			}
		}
		
		if (document.getElementById("back_reason").value == '')
		{
			alert("请输入问题描述！");	
			document.getElementById("back_reason").focus();
			return false;
		}
		
		if (document.getElementById("back_type_2").checked == true || document.getElementById("back_type_3").checked == true)
		{
			if (document.getElementById("back_address").value == '')
			{
				alert("请输入收货地址！");	
				document.getElementById("back_address").focus();
				return false;
			}
			if (document.getElementById("back_zipcode").value == '')
			{
				alert("请输入邮政编码！");	
				document.getElementById("back_zipcode").focus();
				return false;
			}
			if (document.getElementById("back_consignee").value == '')
			{
				alert("请输入联系人姓名！");	
				document.getElementById("back_consignee").focus();
				return false;
			}
			if (document.getElementById("back_mobile").value == '')
			{
				alert("请输入手机号码！");	
				document.getElementById("back_mobile").focus();
				return false;
			}
		}
	}
	</script>
          <form action="user.php?act=back_order_act" name="theForm" id="theForm" method="post" onsubmit="return check_back_form();">
            <table width="100%" border="0" cellpadding="5" cellspacing="1"  bgcolor="#E6E6E6">
              <tr>
                <td align=center bgcolor="#FFFFFF">订单编号</td>
                <td align=center bgcolor="#FFFFFF">商品名称</td>
                <td align=center bgcolor="#FFFFFF">商品属性</td>
                <td align=center bgcolor="#FFFFFF">商品价格</td>
                <td align=center bgcolor="#FFFFFF">购买数量</td>
                <td align=center bgcolor="#FFFFFF">小计</td>
              </tr>
              <tr>
                <td align=center bgcolor="#FFFFFF"><?php echo $this->_var['back_goods']['order_sn']; ?></td>
                <td align=center bgcolor="#FFFFFF"><?php echo $this->_var['back_goods']['goods_name']; ?> </td>
                <td bgcolor="#FFFFFF"><?php echo $this->_var['back_goods']['goods_attr']; ?></td>
                <td align=center bgcolor="#FFFFFF"><?php echo $this->_var['back_goods']['goods_price_format']; ?></td>
                <td align=center bgcolor="#FFFFFF"><?php echo $this->_var['back_goods']['goods_number']; ?></td>
                <td align=center bgcolor="#FFFFFF"><?php echo $this->_var['back_goods']['total_price_format']; ?></td>
              </tr>
            </table>
            <div class="blank"></div>
            <div class="blank"></div>
            <table width="100%" border="0" cellpadding="5" cellspacing="1" >
              <tr>
                <td width="15%" align="right" valign=top>服务类型：</td>
        <td>
        	<?php if ($this->_var['back_goods']['shipping_time_end'] == 0): ?>
            <?php if ($_GET['x'] != 1): ?><input type="radio" name="back_type" id="back_type_1" value="1" <?php if ($_GET['x'] != 1): ?>checked="checked" <?php endif; ?>onclick="tui_box_show(1)" />退货　<?php endif; ?>
            <!--<input type="radio" name="back_type" id="back_type_2" value="2" onclick="tui_box_show(2)" />换货　-->
            <input type="radio" name="back_type" id="back_type_4" value="4" <?php if ($_GET['x'] == 1): ?>checked="checked" <?php endif; ?>onclick="tui_box_show(3)" />退款（无需退货）　
            <?php else: ?>
            <input type="radio" name="back_type" id="back_type_3" value="3" checked="checked" />申请返修
            <?php endif; ?>
            
            <input type="hidden" name="tui_goods_price" value ="<?php echo $this->_var['back_goods']['goods_price']; ?>">
            <input type="hidden" name="product_id_tui" value ="<?php echo $this->_var['back_goods']['product_id']; ?>" >
            <input type="hidden" name="goods_attr_tui" value ="<?php echo $this->_var['back_goods']['goods_attr']; ?>" >
        </td>
              </tr>
              <tr id="thh_2" style="display:none">
                <td width="15%" align="right" valign=top></td>
                <td><div>
                    <input type="button" name="add_huan_btton" id="add_huan_btton" value="添加换货商品" onclick="javascript:show_huan_goods();">
                    <font color=#ff3300>（*）</font> </div>
                  <table id="huan_goods" style="padding:10px;background:#eee;display:none;">
                    <tr>
                      <td align=right>商品名称：</td>
                      <td><?php echo $this->_var['back_goods']['goods_name']; ?> </td>
                    </tr>
                    <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?> 
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                    <tr>
                      <td valign=top style="padding-top:5px;" align=right><?php echo $this->_var['spec']['name']; ?>：</td>
                      <td ><div class="catt"> 
                          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?> 
                          <a <?php if ($this->_var['key'] == 0): ?>class="cattsel"<?php endif; ?> onclick="changeAtt(this,<?php echo $this->_var['back_goods']['goods_id']; ?>)" href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" title="[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]"><?php echo $this->_var['value']['label']; ?>
                          <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                          </a> 
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                        </div>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" /></td>
                    </tr>
                    <?php endif; ?> 
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <tr>
                      <td colspan=2><input type="button" value="确定" onclick="add_huan_goods(<?php echo $this->_var['back_goods']['goods_id']; ?>);"></td>
                    </tr>
                  </table>
                  <table id="huan_box" >
                  </table></td>
              </tr>
              <tr>
                <td width="15%" align="right" valign=top>提交数量：</td>
                <td><script>
			function check_tui_goods_number()
			{
				var now_number = Number(document.getElementById("tui_goods_number").value);
				var goods_number = <?php echo $this->_var['back_goods']['goods_number']; ?>;
				if (now_number < 1)
				{
					alert("提交数量不能小于1");
					document.getElementById("tui_goods_number").value = 1;
					document.getElementById("tui_goods_number").focus();
				}
				else if (now_number > goods_number)
				{
					alert("提交数量不能超过购买数量"+goods_number);
					document.getElementById("tui_goods_number").value = goods_number;
					document.getElementById("tui_goods_number").focus();
				}
			}
			</script>
                  <input type="text" name="tui_goods_number" id="tui_goods_number" onblur="check_tui_goods_number()" value="1" size=5></td>
              </tr>
              <tr>
                <td width="15%" align="right" valign=top>问题描述：</td>
                <td><textarea name="back_reason" id="back_reason" rows=5 cols=50></textarea>
                  <font color=#ff3300>*</font>
                  <div style="color:#999">请您如实填写申请原因及商品情况，字数在500字内。</div></td>
              </tr>
              <tr>
                <td width="15%" align="right" valign=top>图片信息：</td>
                <td><link rel="stylesheet" href="includes/kindeditor/themes/default/default.css" />
                  <script src="includes/kindeditor/kindeditor.js"></script> 
                  <script src="includes/kindeditor/lang/zh_CN.js"></script> 
                  <script>
                KindEditor.ready(function(K) {
                    var editor = K.editor({
                        allowFileManager : true
                    });
                    K('#back_order_img').click(function() {
                        editor.loadPlugin('image', function() {
                            editor.plugin.imageDialog({
                                showRemote : false,
                                //imageUrl : K('#url3').val(),
                                clickFn : function(url, title, width, height, border, align) {
									K('#back_order_img_list').append('<div><img height="60" src="' + url + '"><input type="hidden" name="imgs[]" value="' + url + '" /></div>');
                                    editor.hideDialog();
                                }
                            });
                        });
                    });
                });
            </script>
                  <style>
			#back_order_img_list div {float:left; margin:0 10px 10px 0;}
			</style>
                  <div id="back_order_img_list" class="clearfix"> </div>
                  <div><img id="back_order_img" src="themes/huazhuangpin/images/back_order_img.gif" /></div>
                  <div style="margin-top:10px;">为了帮助我们更好的解决问题，请您上传图片</div>
                  <div style="color:#999">每张图片大小不超过2M，支持gif,jpg,png,jpeg格式文件</div></td>
              </tr>
    <?php if ($this->_var['back_goods']['shipping_time_end'] == 0): ?>
    <tr id="thh_1">
    <?php else: ?>
    <tr id="thh_1" style="display:none">
    <?php endif; ?>
                <td width="15%" align="right" valign=top>退款方式：</td>
                <td><input type="radio" name="back_pay" value="1" />
                  退款至账户余额<br />
                  <input type="radio" name="back_pay" value="2" checked="checked" />
                  原支付方式返回
                  <div style="color:#999; padding-left:20px;">如为现金支付，将会退款至您的账户余额或银行卡；</div>
              </tr>
    <?php if ($_GET['x'] == 1): ?>
	<tbody id="thh_address" style="display:none">
    <?php else: ?>
	<tbody id="thh_address">
    <?php endif; ?>
                <tr>
                  <td width="15%" align="right" >收货地址：</td>
                  <td> <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,transport.js,region.js,shopping_flow.js')); ?>
                    <select name="country" id="selCountries_1" onchange="region.changed(this, 1, 'selProvinces_1')">
                      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
                      <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
                      <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['order']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <select name="province" id="selProvinces_1" onchange="region.changed(this, 2, 'selCities_1')">
                      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
                      <?php $_from = $this->_var['shop_province']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
                      <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['order']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <select name="city" id="selCities_1" onchange="region.changed(this, 3, 'selDistricts_1')">
                      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
                      <?php $_from = $this->_var['shop_city']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                      <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['order']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <select name="district" id="selDistricts_1" <?php if (! $this->_var['shop_district']): ?>style="display:none"<?php endif; ?>>
                      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
                      <?php $_from = $this->_var['shop_district']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                      <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['order']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <div>
                      <input type="text" name="back_address" id="back_address" size=50 value="<?php echo $this->_var['order']['address']; ?>">
                      <font color=#ff3300>（*）</font></div></td>
                </tr>
                <tr>
                  <td width="15%" align="right" >邮政编码：</td>
                  <td><input type="text" name="back_zipcode"  id="back_zipcode" size=20 value="<?php echo $this->_var['order']['zipcode']; ?>">
                    <font color=#ff3300>（*）</font></td>
                </tr>
                <tr>
                  <td width="15%" align="right" >联系人姓名：</td>
                  <td><input type="text" name="back_consignee"  id="back_consignee" size=20 value="<?php echo $this->_var['order']['consignee']; ?>">
                    <font color=#ff3300>（*）</font></td>
                </tr>
                <tr>
                  <td width="15%" align="right" >手机号码：</td>
                  <td><input type="text" name="back_mobile"  id="back_mobile" size=20 value="<?php echo $this->_var['order']['mobile']; ?>">
                    <font color=#ff3300>（*）</font></td>
                </tr>
              </tbody>
              <tr>
                <td width="15%" align="right" >我要留言：</td>
                <td><textarea name="back_postscript" rows=5 cols=50></textarea></td>
              </tr>
              <tr>
                <td colspan=2 align=center><input type="hidden" name="act" value="back_order_act">
                  <input type="hidden" name="order_id" value="<?php echo $this->_var['back_goods']['order_id']; ?>">
                  <input type="hidden" name="order_sn" value="<?php echo $this->_var['back_goods']['order_sn']; ?>">
                  <input type="hidden" name="goods_id" value="<?php echo $this->_var['back_goods']['goods_id']; ?>">
                  <input type="hidden" name="goods_name" value="<?php echo $this->_var['back_goods']['goods_name']; ?>">
                  <input type="hidden" name="goods_sn" value="<?php echo $this->_var['back_goods']['goods_sn']; ?>">
                  <input type="hidden" name="old_goods_number" value="<?php echo $this->_var['back_goods']['goods_number']; ?>">
                  <input name="submit" type="submit" value="确认" class="btn-primary" style="border:none;" />
                  <input name="reset" type="reset" value="取消" class="btn-primary" style="border:none;" /></td>
              </tr>
            </table>
            <script>

	function show_huan_goods()
	{
	   if (document.getElementById('huan_goods').style.display=="block")
	   {
		document.getElementById('huan_goods').style.display="none";
	   }
	   else if(document.getElementById('huan_goods').style.display=="none")
	   {
		document.getElementById('huan_goods').style.display="block";
	   }
	}

	function changeAtt(t,goods_id) {
	t.lastChild.checked='checked';
	for (var i = 0; i<t.parentNode.childNodes.length;i++) {
		if (t.parentNode.childNodes[i].className == 'cattsel') {
		t.parentNode.childNodes[i].className = '';
		}
	}

	t.className = "cattsel";	
	}

	function  add_huan_goods(goods_id)
	{
	   var goods        = new Object();
	   var formBuy      = document.forms['theForm'];
	   spec_arr = getSelectedAttributes(formBuy);
	   goods.spec     = spec_arr;
	   goods.goods_id = goods_id;
	   Ajax.call('user.php?act=add_huan_goods', 'goods=' + goods.toJSONString(), add_huan_goodsResponse, 'POST', 'JSON');
	}
       function rand_str(prefix)
	{
	var dd = new Date();
	 var tt = dd.getTime();
	tt = prefix + tt;

	var rand = Math.random();
	rand = Math.floor(rand * 100);

	return (tt + rand);
	}

	function add_huan_goodsResponse(result)
	{
		var table_list = document.getElementById('huan_box');
		var new_tr_id = rand_str('t');
		var index = table_list.rows.length; 
		var new_row = table_list.insertRow(index);//新增行
		new_row.setAttribute("id", new_tr_id);
		var new_col = new_row.insertCell(0);
		new_col.innerHTML =  result.goods_name + result.content + '<input type="hidden" name="product_id_huan[]" id="pro_"'+index+' value="' + result.product_id + '"><input type="hidden" name="goods_attr_huan[]" value="' + result.content + '"><input type="button" class="button" value="删除 " onclick="javascript:del_huan_goods(\'' + new_tr_id + '\');"/>';
	
	}


	function del_huan_goods(tr_number)
	{
	if (tr_number.length > 0)
	{
		if (confirm("确定删除吗？") == false)
		{
			return false;
		}
		var table_list = document.getElementById('huan_box');
		for (var i = 0; i < table_list.rows.length; i++)
		{
		if (table_list.rows[i].id == tr_number)
		{
		 table_list.deleteRow(i);
		}
		}
	}
	return true;
	}

	function tui_box_show(type)
	{
		if (type == 1)
		{
			document.getElementById("thh_1").style.display = '';
			document.getElementById("thh_2").style.display = 'none';
			document.getElementById("thh_4").style.display = '';
			document.getElementById("thh_address").style.display = '';
		}
		
		if (type == 2)
		{
			document.getElementById("thh_1").style.display = 'none';
			document.getElementById("thh_2").style.display = '';
			document.getElementById("thh_4").style.display = '';
			document.getElementById("thh_address").style.display = '';
		}
		
		if (type == 3)
		{
			document.getElementById("thh_1").style.display = '';
			document.getElementById("thh_2").style.display = 'none';
			document.getElementById("thh_4").style.display = '';
			document.getElementById("thh_address").style.display = 'none';
		}
		
	}

	function check_back(frm)
	{
	var back_number = <?php echo $this->_var['back_goods']['goods_number']; ?>;
	//alert(back_number);
	var msg = new Array();
	var err = false; 
	if (frm.elements['back_consignee'].value == "" )
	{
	     err = true;
	     msg.push('换回商品收件人不能为空！');
        }
	if (frm.elements['back_address'].value == "" )
	{
	     err = true;
	     msg.push('收货人地址不能为空！');
        }
	
	var back_type_list = frm.elements["back_type"];
	var tui_goods_number=0;
	var huan_goods_number=0;
	if (back_type_list[0].checked == true)
	{
		tui_goods_number = frm.elements['tui_goods_number'].value;		
	}
	if (back_type_list[1].checked == true)
	{
		var table_list = document.getElementById('huan_box');
		huan_goods_number = table_list.rows.length;
	}
	var all_goods_number = Number(huan_goods_number) + Number(tui_goods_number);
	var old_goods_number =frm.elements['old_goods_number'].value;
	//alert(all_goods_number);
	if (all_goods_number > old_goods_number)
	{
	     err = true;
	     msg.push('退货/维修总数不能大于原订单购买数量！');
	}

	if (err)
	{
	    message = msg.join("\n");
	    alert(message);
	}
	return ! err;
	}
	</script>
          </form>
          
          <?php endif; ?> 
          <?php if ($this->_var['action'] == back_order_detail): ?>
	  <h5><span>售后详情</span></h5>
          <div class="blank"></div>
          <table width="100%" border="0" cellpadding="5" cellspacing="1"  bgcolor="#E6E6E6">
            <tr>
              <td width="100%" height=25  bgcolor="#FFFFFF" style="padding-left:10px">原订单号：<?php echo $this->_var['back_shipping']['order_sn']; ?></td>
            </tr>
            <tr>
              <td width="100%" height=25  bgcolor="#FFFFFF" style="padding-left:10px">商品名称：<?php echo $this->_var['back_shipping']['goods_name']; ?></td>
            </tr>
            <tr>
              <td width="100%" height=25  bgcolor="#FFFFFF"  style="padding-left:10px">售后类型：<?php if ($this->_var['back_shipping']['back_type'] == 1): ?>退货<?php endif; ?><?php if ($this->_var['back_shipping']['back_type'] == 2): ?>换货<?php endif; ?><?php if ($this->_var['back_shipping']['back_type'] == 3): ?>申请返修<?php endif; ?><?php if ($this->_var['back_shipping']['back_type'] == 4): ?>退款（无需退货）<?php endif; ?></td>
            </tr>
          </table>
          <div class="blank"></div>
          <?php if ($this->_var['list_backgoods']['0']): ?>
          <table width="100%" border="0" cellpadding="5" cellspacing="1"  bgcolor="#E6E6E6">
            <?php $_from = $this->_var['list_backgoods']['0']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bgoods');if (count($_from)):
    foreach ($_from AS $this->_var['bgoods']):
?>
            <tr>
              <td width="15%" align=center bgcolor="#FFFFFF"><font color=#ff3300>退回商品</font></td>
              <td width="40%" bgcolor="#FFFFFF"><?php echo $this->_var['bgoods']['goods_name']; ?> </td>
              <td width="25%" bgcolor="#FFFFFF"><?php if ($this->_var['bgoods']['goods_attr']): ?><?php echo nl2br($this->_var['bgoods']['goods_attr']); ?><?php endif; ?> </td>
              <td width="10%" bgcolor="#FFFFFF">数量：<?php if ($this->_var['bgoods']['back_goods_number']): ?><?php echo $this->_var['bgoods']['back_goods_number']; ?><?php endif; ?> </td>
              <td width="10%" bgcolor="#FFFFFF">类型：退货 </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
	    <tr> <td  align=center bgcolor="#FFFFFF">退款金额</td><td colspan=4 bgcolor="#FFFFFF">应退金额：<?php echo $this->_var['bgoods']['back_goods_money']; ?> </td></tr>
	    <tr><td  align=center bgcolor="#FFFFFF">处理状态</td><td colspan=4 bgcolor="#FFFFFF"><?php echo $this->_var['bgoods']['status_back']; ?></td></tr>
	    <tr><td align=center bgcolor="#FFFFFF">退款状态</td><td colspan=4 bgcolor="#FFFFFF"><?php echo $this->_var['bgoods']['status_refund']; ?> </td></tr>
	    </table>
	<?php endif; ?>
	<?php if ($this->_var['list_backgoods']['3']): ?>
	<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <?php $_from = $this->_var['list_backgoods']['3']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bgoods');if (count($_from)):
    foreach ($_from AS $this->_var['bgoods']):
?>
	<tr bgcolor=#ffffff >
	<td width="15%" align=center><font color=#ff3300>退回商品</font></td><td width="40%"><?php echo $this->_var['bgoods']['goods_name']; ?> </td>
	<td width="25%"><?php if ($this->_var['bgoods']['goods_attr']): ?><?php echo nl2br($this->_var['bgoods']['goods_attr']); ?><?php endif; ?> </td>
	<td width="10%">数量：<?php if ($this->_var['bgoods']['back_goods_number']): ?><?php echo $this->_var['bgoods']['back_goods_number']; ?><?php endif; ?> </td>
	<td width="10%">类型：申请返修 </td></tr>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<tr bgcolor=#ffffff ><td  align=center>处理状态</td><td colspan=4><?php echo $this->_var['bgoods']['status_back']; ?></td></tr>
	</table>
	<?php endif; ?>
	<?php if ($this->_var['list_backgoods']['4']): ?>
	<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <?php $_from = $this->_var['list_backgoods']['4']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bgoods');if (count($_from)):
    foreach ($_from AS $this->_var['bgoods']):
?>
	<tr bgcolor=#ffffff >
	<td width="15%" align=center><font color=#ff3300>退回商品</font></td><td width="40%"><?php echo $this->_var['bgoods']['goods_name']; ?> </td>
	<td width="25%"><?php if ($this->_var['bgoods']['goods_attr']): ?><?php echo nl2br($this->_var['bgoods']['goods_attr']); ?><?php endif; ?> </td>
	<td width="10%">数量：<?php if ($this->_var['bgoods']['back_goods_number']): ?><?php echo $this->_var['bgoods']['back_goods_number']; ?><?php endif; ?> </td>
	<td width="10%">类型：退款<br />（无需退货） </td></tr>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<tr bgcolor=#ffffff ><td  align=center>退款金额</td><td colspan=4>应退金额：<?php echo $this->_var['bgoods']['back_goods_money']; ?> </td></tr>
	<tr bgcolor=#ffffff ><td  align=center>处理状态</td><td colspan=4><?php echo $this->_var['bgoods']['status_back']; ?></td></tr>
	<tr bgcolor=#ffffff ><td  align=center>退款状态</td><td colspan=4><?php echo $this->_var['bgoods']['status_refund']; ?> </td></tr>
	</table>
          <?php endif; ?>
          <div class="blank"></div>
          <?php if ($this->_var['list_backgoods']['1']): ?>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E6E6E6">
            <?php $_from = $this->_var['list_backgoods']['1']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bgoods');$this->_foreach['list_backgoods_1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['list_backgoods_1']['total'] > 0):
    foreach ($_from AS $this->_var['bgoods']):
        $this->_foreach['list_backgoods_1']['iteration']++;
?>
            <tr>
              <td width="15%" align=center bgcolor="#FFFFFF"><font color=#ff3300><?php if ($this->_foreach['list_backgoods_1']['iteration'] == 1): ?>退回<?php else: ?>换回<?php endif; ?>商品</font></td>
              <td width="40%" bgcolor="#FFFFFF"><?php echo $this->_var['bgoods']['goods_name']; ?></td>
              <td width="25%" bgcolor="#FFFFFF"><?php if ($this->_var['bgoods']['goods_attr']): ?>属性：<?php echo $this->_var['bgoods']['goods_attr']; ?><?php endif; ?> </td>
              <td width="10%" bgcolor="#FFFFFF">数量：<?php if ($this->_var['bgoods']['back_goods_number']): ?><?php echo $this->_var['bgoods']['back_goods_number']; ?><?php endif; ?> </td>
              <td width="10%" bgcolor="#FFFFFF"><?php if ($this->_foreach['list_backgoods_1']['iteration'] == 1): ?>类型：换货<?php endif; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
              <td align=center bgcolor="#FFFFFF">退款金额</td>
              <td colspan=4 bgcolor="#FFFFFF">应退金额：<?php echo $this->_var['bgoods']['back_goods_money']; ?></td>
            </tr>
            <tr>
              <td align=center  bgcolor="#FFFFFF">处理状态</td>
              <td colspan=4 bgcolor="#FFFFFF"><?php echo $this->_var['bgoods']['status_back']; ?></td>
            </tr>
            <tr>
              <td align=center bgcolor="#FFFFFF">退款状态</td>
              <td colspan=4  bgcolor="#FFFFFF"><?php echo $this->_var['bgoods']['status_refund']; ?> </td>
            </tr>
          </table>
          <div class="blank"></div>
          <table width="100%" border="0" cellpadding="5" cellspacing="1"  bgcolor="#E6E6E6">
            <tr>
              <td align=center width="15%"  bgcolor="#FFFFFF">寄回商品<br>
                收件人信息</td>
              <td colspan=4  bgcolor="#FFFFFF">商品寄回地址：<?php echo $this->_var['back_shipping']['country_name']; ?> <?php echo $this->_var['back_shipping']['province_name']; ?> <?php echo $this->_var['back_shipping']['city_name']; ?> <?php echo $this->_var['back_shipping']['district_name']; ?> <?php echo $this->_var['back_shipping']['address']; ?><br>
                邮政编码：<?php echo $this->_var['back_shipping']['zipcode']; ?><br>
                收件人：<?php echo $this->_var['back_shipping']['consignee']; ?><br></td>
            </tr>
            <tr>
              <td align=center width="15%"  bgcolor="#FFFFFF">退款信息</td>
              <td colspan=4  bgcolor="#FFFFFF">应退金额：<?php echo $this->_var['back_shipping']['refund_money_1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;实退金额：<?php echo $this->_var['back_shipping']['refund_money_2']; ?></td>
            </tr>
            <tr>
              <td align=center width="15%"  bgcolor="#FFFFFF">退款形式</td>
              <td colspan=4  bgcolor="#FFFFFF"><?php echo $this->_var['back_shipping']['refund_type_name']; ?></td>
            </tr>
            <tr>
              <td align=center width="15%"  bgcolor="#FFFFFF">退款说明</td>
              <td colspan=4  bgcolor="#FFFFFF"><?php echo $this->_var['back_shipping']['refund_desc']; ?></td>
            </tr>
          </table>
          <?php endif; ?>
          <div class="blank"></div>
	<?php if ($this->_var['back_shipping']['back_type'] != 4 && $this->_var['back_shipping']['status_back'] < 6): ?>
          <div class="tabmenu">
            <ul class="tab pngFix">
              <li class="active"> <a href="#"> 快递信息（请填写您寄回商品的快递信息）：</a> </li>
            </ul>
          </div>
          <div class="blank"></div>
          <form action="user.php" method="post">
            <table width="100%" border="0" cellpadding="7" cellspacing="1" bgcolor="#dddddd">
              <tr>
                <td width="100%"  style="padding-left:25px;"  bgcolor="#FFFFFF"> 快递公司：
                  <select name="shipping_id" size=1>
                    <option value="0">请选择快递公司</option>
                    
                    
                
                
	<?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
	
                
                
                    
                    <option value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['back_shipping']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>selected<?php endif; ?> ><?php echo $this->_var['shipping']['shipping_name']; ?> </option>
                    
                    
                
                
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
              
              
                  
                  </select>
                  快递运单号：
                  <input type="text" name="invoice_no" size=20 value="<?php echo $this->_var['back_shipping']['invoice_no']; ?>">
                  <input type="submit" name="submit" value="确定" <?php if ($this->_var['back_shipping']['status_back'] > 0 && $this->_var['back_shipping']['status_back'] < 5): ?>disabled<?php endif; ?>>
                  <input type="hidden" name="back_id" value="<?php echo $this->_var['back_id']; ?>">
                  <input type="hidden" name="act" value="back_order_detail_edit"></td>
              </tr>
            </table>
          </form>
    <?php endif; ?>
    <div class="blank"></div>
    <div class="tabmenu">
            <ul class="tab pngFix">
              <li class="active">留言/回复</li>
            </ul>
    </div>
    <div class="blank"></div>
    <table width="100%" cellspacing="1" cellpadding="6" style="border:1px #dddddd solid">
    <?php if ($this->_var['back_shipping']['postscript']): ?>
      <tr>
        <td width="50" align="right">我说：</td>
        <td><?php echo $this->_var['back_shipping']['postscript']; ?> （<?php echo $this->_var['back_shipping']['add_time']; ?>）</td>
      </tr>
      <?php endif; ?>
            <?php $_from = $this->_var['back_replay']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['value']):
?> 
            <?php if ($this->_var['value']['type'] == 0): ?>
            <tr style="color:#F00">
              <td align="right" bgcolor="#FFFFFF">客服：</td>
              <td bgcolor="#FFFFFF"><?php echo $this->_var['value']['message']; ?> （<?php echo $this->_var['value']['add_time']; ?>）</td>
            </tr>
            <?php else: ?>
            <tr>
              <td align="right" bgcolor="#FFFFFF">我说：</td>
              <td bgcolor="#FFFFFF"><?php echo $this->_var['value']['message']; ?> （<?php echo $this->_var['value']['add_time']; ?>）</td>
            </tr>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
        <td valign="top" align="right">我说：</td>
              <td bgcolor="#FFFFFF"><script>
            function check_replay()
            {
                if (document.getElementById("message").value == '')
                {
                    alert("请输入回复内容！");
                    document.getElementById("message").focus();
                    return false;	
                }
            }
            </script>
                <form action="user.php?act=back_replay" method="post" onsubmit="return check_replay()">
                  <input name="back_id" type="hidden" value="<?php echo $this->_var['back_shipping']['back_id']; ?>">
                  <div>
                    <textarea id="message" name="message" style="width:500px; height:60px;"></textarea>
                  </div>
                  <div class="blank"></div>
                  <div style="margin-top:10px;">
                    <input type="submit" value="回复" class="btn-primary" />
                  </div>
                </form></td>
            </tr>
          </table>
          
          <?php endif; ?> 
          <?php if ($this->_var['action'] == back_order_act): ?>
          <div class="tabmenu">
            <ul class="tab pngFix">
              <li class="active"> 
    <?php if ($this->_var['back_act_w'] == 'tuihuo'): ?>
    退货&nbsp;申请已提交
    <?php elseif ($this->_var['back_act_w'] == 'tuikuan'): ?>
	退款&nbsp;申请已提交
    <?php elseif ($this->_var['back_act_w'] == 'weixiu'): ?>
    维修&nbsp;申请已提交
    <?php endif; ?>
    </li>
            </ul>
          </div>
          <div class="blank"></div>
          <table cellpadding=5 cellspacing=1 width=100% bgcolor="#E6E6E6">
            <tr>
              <td bgcolor="#FFFFFF" style="font-size:15px;font-weight:bold;line-height:180%;padding:20px;color:#555"> 
    	<?php if ($this->_var['back_act_w'] == 'tuihuo'): ?>
	      商品寄回地址：<?php echo $this->_var['back_address']; ?><br>
                邮政编码：<?php echo $this->_var['back_zipcode']; ?><br>
                收件人：<?php echo $this->_var['back_consignee']; ?> 
		</td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" style="padding:10px 20px 20px 30px"> 1、请尽快将退换货商品寄出<br>
	2、退货商品寄出后，请您在“用户中心 》退款/退货及维修 》详情”中填写快递信息<br>
	3、您随时可以在“退款/退货及维修”中查看退货进度<br>
                4、如果您有其他需要，请随时联系我们的客服。 </td>
    <?php elseif ($this->_var['back_act_w'] == 'tuikuan'): ?>
    退款申请已提交，请耐心等待卖家处理。
    <?php elseif ($this->_var['back_act_w'] == 'weixiu'): ?>
    维修申请已提交，请耐心等待卖家处理。<br>
	商品寄回地址：<?php echo $this->_var['back_address']; ?><br>
	邮政编码：<?php echo $this->_var['back_zipcode']; ?><br>
	收件人：<?php echo $this->_var['back_consignee']; ?>
    <?php endif; ?>
	</td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" align=center><input type="button" value="确定" onclick='location.href="user.php?act=back_list";' style="cursor:pointer;border:none; background:#ED5854;color:#fff;padding:5px 15px"></td>
            </tr>
          </table>
          <?php endif; ?> 


      </div>
     </div>
    </div>
    </div>
    
    </div>
    </div>
    </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</html>
