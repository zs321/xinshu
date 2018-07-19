   	<?php if ($this->_var['ps_list']): ?>
    <div id="J_ItemList" class="srp album flex-f-row" style="opacity:1;">
      <?php $_from = $this->_var['ps_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'pre_spike');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['pre_spike']):
        $this->_foreach['name']['iteration']++;
?> 
      <?php if ($this->_var['pre_spike']['goods_name'] != ''): ?>
      <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="<?php echo $this->_var['pre_spike']['url']; ?>" style="display:block;font-size:0px;"> <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['pre_spike']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['pre_spike']['goods_name']); ?>"> </a> </div>
          <div class="protime"><font id="ps_cd_<?php echo $this->_var['pre_spike']['goods_id']; ?>"></font><font id="ps_label_<?php echo $this->_var['pre_spike']['goods_id']; ?>" over="false"><?php echo $this->_var['pre_spike']['cur_status']; ?></font></div>
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
				            	<?php if ($this->_var['pre_spike']['status'] == 0): ?>
				   	           	var endDate = new Date(<?php echo $this->_var['pre_spike']['local_start_date']; ?>);
				            	<?php else: ?>
				   	           	var endDate = new Date(<?php echo $this->_var['pre_spike']['local_end_date']; ?>);
				            	<?php endif; ?>
				   	           	//if(<?php echo $this->_var['pre_spike']['goods_id']; ?> == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "<?php echo $this->_var['pre_spike']['status']; ?>";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("");
					   	    				$("#ps_label_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("后结束");
					   	    				$("#ps_label_<?php echo $this->_var['pre_spike']['goods_id']; ?>").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(<?php echo $this->_var['pre_spike']['local_end_date']; ?>);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("");
					   	    				$("#ps_label_<?php echo $this->_var['pre_spike']['goods_id']; ?>").html("活动已结束");
					   	    				$("#ps_label_<?php echo $this->_var['pre_spike']['goods_id']; ?>").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>

          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="<?php echo $this->_var['pre_spike']['url']; ?>" ><?php echo $this->_var['pre_spike']['goods_name']; ?></a> </div>
            <div class="proPrice"> 
              <em><?php echo $this->_var['pre_spike']['sale_price']; ?></em> 
            </div>
            <div class="proSales"><em><?php echo $this->_var['pre_spike']['sales_counts']; ?></em>人已购买</div>
          </div>
        </div>
      </div>
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <?php else: ?>
    <div id="J_ItemList" class="srp album flex-f-row" style="opacity:1;">
    <p>找不到匹配条件的商品哦~ ~</p>
    </div>
    <?php endif; ?>