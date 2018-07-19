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
<link href="themes/huazhuangpin/pre_spike.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.countdown-2.5.3.min.js')); ?>
<div id="wrapper">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="main cle">
						<?php $_from = $this->_var['ps_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'pre_spike');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['pre_spike']):
        $this->_foreach['name']['iteration']++;
?>
						<?php if ($this->_var['pre_spike']['goods_name'] != ''): ?>
						<div class="product" id="shijian_<?php echo $this->_var['key']; ?>" <?php if ($this->_foreach['name']['iteration'] % 4 == 0): ?>style="margin-right: 0px;"<?php endif; ?>>
							<div class="pic" id="li_<?php echo $this->_var['pre_spike']['goods_id']; ?>">
								<a href="<?php echo $this->_var['pre_spike']['url']; ?>" target="_blank"> <img title="<?php echo htmlspecialchars($this->_var['pre_spike']['goods_name']); ?>" alt="<?php echo htmlspecialchars($this->_var['pre_spike']['goods_name']); ?>" width=220 height=220 data-original="<?php echo $this->_var['pre_spike']['goods_thumb']; ?>" src="themes/huazhuangpin/images/spacer.gif" class="loading pic_img_<?php echo $this->_var['pre_spike']['goods_id']; ?>"></a> <?php if ($this->_var['pre_spike']['is_best']): ?>
								<div class=t_icon_st></div>
								<?php endif; ?>
							</div>
							<div class="shijian" id="shijian1_<?php echo $this->_var['key']; ?>">
								 <span id="ps_labels_<?php echo $this->_var['pre_spike']['goods_id']; ?>" over="false"></span><span id="ps_cd_<?php echo $this->_var['pre_spike']['goods_id']; ?>"></span><span id="ps_labele_<?php echo $this->_var['pre_spike']['goods_id']; ?>" over="false"></span>
							</div>
<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            	<?php if ($this->_var['pre_spike']['gmt_start_time'] > $this->_var['pre_spike']['gmtime'] && $this->_var['pre_spike']['gmt_end_time'] > $this->_var['pre_spike']['gmtime']): ?>
				   	           	var endDate = new Date(<?php echo $this->_var['pre_spike']['gmt_start_time']; ?>);
				   	           	var status = "0";
							$("#ps_labels_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("还有");
							$("#ps_labele_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("开始");
				            	<?php else: ?>
				   	           	var endDate = new Date(<?php echo $this->_var['pre_spike']['gmt_end_time']; ?>);
				   	           	var status = "1";
							$("#ps_labels_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("还剩");
							$("#ps_labele_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("结束");
				            	<?php endif; ?>
				            					   	           	//if(<?php echo $this->_var['pre_spike']['goods_id']; ?> == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
							//alert(ts);
					   	           	$("#ps_cd_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html(ts.toString());
				   	    			//alert($("#ps_cd_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中-&gt;秒杀中
				   	    				if(ts == "End"){
			Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("");
					   	    				//$("#ps_label_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("销售中");
					   	    				$("#zhuangtai<?php echo $this->_var['pre_spike']['goods_id']; ?>").removeClass("weikaishi");
					   	    				$("#zhuangtai<?php echo $this->_var['pre_spike']['goods_id']; ?>").addClass("jinxinzhong");
					   	    				$("#ps_labels_<?php echo $this->_var['pre_spike']['goods_id']; ?>").attr("over", true);
					   	    				$("#ps_labele_<?php echo $this->_var['pre_spike']['goods_id']; ?>").attr("over", true);
							$("#ps_labels_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("还剩");
							$("#ps_labele_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("结束");
					   	    				status = 1;
					   	    				endDate = new Date(<?php echo $this->_var['pre_spike']['gmt_end_time']; ?>);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//秒杀中-&gt;活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("");
					   	    				$("#ps_labels_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("活动已结束");
					   	    				$("#zhuangtai<?php echo $this->_var['pre_spike']['goods_id']; ?>").addClass("jieshu");
					   	    				$("#ps_labele_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("");
					   	    				$("#ps_labels_<?php echo $this->_var['pre_spike']['goods_id']; ?>").attr("over", true);
					   	    				$("#ps_labele_<?php echo $this->_var['pre_spike']['goods_id']; ?>").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
							<div class="title">
								<a title="<?php echo htmlspecialchars($this->_var['pre_spike']['goods_name']); ?>" href="<?php echo $this->_var['pre_spike']['url']; ?>" target="_blank"><?php echo $this->_var['pre_spike']['goods_name']; ?></a>
							</div>
							<div class="price3">
								<div class="y-price">
									<span><?php echo $this->_var['pre_spike']['sale_price']; ?></span><span class="yp"><?php echo $this->_var['pre_spike']['market_price']; ?></span>
								</div>
								<span class="valid_order"><?php echo $this->_var['pre_spike']['sales_counts']; ?>人已购买</span>
							</div>
							<div class="buy3">
								<div class="n-tg">
									<a id="collect_<?php echo $this->_var['pre_spike']['goods_id']; ?>" href="javascript:collect(<?php echo $this->_var['pre_spike']['goods_id']; ?>);">收藏</a>
								</div>
								<div class="n-tg">
									<a title="立即抢购" href="<?php echo $this->_var['pre_spike']['url']; ?>" target="_blank">立即抢购</a>
								</div>
							</div>
						</div>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	</div>
	<?php echo $this->fetch('library/pages.lbi'); ?>
</div>
<div style="clear:both"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
