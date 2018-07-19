<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>
    <title>账号绑定</title>
    <link href="css/app.min.css?v=20170524" rel="stylesheet" type="text/css" />
    <script type="text/javascript">var ROOT_URL = '/mobile/';</script>
    <script src="css/app.min.js?v=20170524"></script>
    </head>
<body>
	<div class="con">
    <?php if ($this->_var['auth_list']): ?>
		<?php $_from = $this->_var['auth_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');$this->_foreach['val'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['val']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
        $this->_foreach['val']['iteration']++;
?>
		<div class="user_profile_bind  bg-white padding-all dis-box m-top08">				
			<div class="box-flex"  >
				<div class="dis-box">
					   <div><img src="themes/huazhuangpin/images/oauth/<?php echo $this->_var['val']['img']; ?>" alt=""></div>
						<div class="box-flex cont">
							<h4 class="f-05 col-3"><?php echo $this->_var['val']['name']; ?></h4>
							<p class="f-02 col-7 m-top02">一键登录，更方便，更快捷！</p>
						</div>
						 <i class="iconfont icon-jiantou tf-180"></i>
				</div>
			</div>
			<div class="right">
				
				<?php if ($this->_var['key'] == 'weixin' && ! $this->_var['is_wechat_browser']): ?>
					<div class="user_profile_bind_btn">
							<sapn class="col-7">请使用微信客户端操作</sapn>
					 </div>  
				<?php else: ?>
					<?php if ($this->_var['val']['bing']): ?>
					<div class="user_profile_bind_btn">
						<a href="javascript:;">
						   <sapn class="color-red">已绑定</sapn>
						</a>
						<label>|</label>
						<a href="javascript:;" data-item="<?php echo $this->_var['key']; ?>" class="accountbind">
							<sapn class="col-7">解绑</sapn>
						</a>
					</div>
					<?php else: ?>
					<div class="user_profile_bind_btn">
						<a href="user.php?act=oath&type=<?php echo $this->_var['key']; ?>">
							<sapn class="col-7">去绑定</sapn>
						</a>
					 </div>  
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<?php else: ?>
		<div class="no-div-message">
		<i class="iconfont icon-biaoqingleiben"></i>
		<p>亲，没有第三方授权登录插件</p> 
		</div>
	<?php endif; ?>
	</div>

    <script type="text/javascript">
    $(function(){
        // 点击
        $('.accountbind').click(function(){
            var id = $(this).attr("data-item");
            //询问框
            layer.open({
                content: '您确定要解绑此会员帐号吗？'
                ,btn: ['确定', '取消']
                ,yes: function(index){

                    remove_account(id); //解绑
                }
            });
        });

        // 解绑
        function remove_account(id) {
            $.post("accountbind.php?act=del_oath", {type:id}, function(data) {
                alert(data);
				window.location.href = 'accountbind.php?act=accountbind';
                return true;
            });
        }

    });
    </script>
</body>
</html>
