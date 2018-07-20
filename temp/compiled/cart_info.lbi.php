<form id="formCart" name="formCart" method="post" action="flow.php" >
	<span class="cart_num"><?php echo $this->_var['str']; ?></span>
	<div class="sidebar-cart-box">
        <h3 class="sidebar-panel-header">
            <a href="javascript:;" class="title"><i class="cart-icon"></i><em class="title">购物车</em></a>
            <span class="close-panel"></span>
        </h3>
        <div class="cart-panel-main">
            <div class="cart-panel-content" style="height:auto;">
                <?php if ($this->_var['goods']): ?>
                <div class="cart-list">
                    <?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_24600000_1532066174');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_24600000_1532066174']):
        $this->_foreach['goods']['iteration']++;
?>
                    <div class="cart-item">
                        <div class="item-goods">
                            <span class="p-img"><a href="<?php echo $this->_var['goods_0_24600000_1532066174']['url']; ?>"><img src="<?php if ($this->_var['goods_0_24600000_1532066174']['goods_thumb'] == 'package_img'): ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/ico_cart_package.gif<?php else: ?><?php echo $this->_var['goods_0_24600000_1532066174']['goods_thumb']; ?><?php endif; ?>" class="loading" width="50" height="50" alt="<?php echo $this->_var['goods_0_24600000_1532066174']['short_name']; ?>"></a></span>
                        <div class="p-name"><a href="<?php echo $this->_var['goods_0_24600000_1532066174']['url']; ?>" title="<?php echo $this->_var['goods_0_24600000_1532066174']['short_name']; ?>"><?php echo $this->_var['goods_0_24600000_1532066174']['short_name']; ?></a></div>
                        <div class="p-price"><strong><?php echo $this->_var['goods_0_24600000_1532066174']['goods_price']; ?></strong>×<?php echo $this->_var['goods_0_24600000_1532066174']['goods_number']; ?></div>
                        <a href="javascript:;" class="p-del" onClick="deleteCartGoods(<?php echo $this->_var['goods_0_24600000_1532066174']['rec_id']; ?>)">删除</a>
                        </div>
                    </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                <?php else: ?>
                <div class="tip-box">
                  <i class="tip-icon"></i>
                  <div class="tip-text">您的购物车里什么都没有哦<br/><a class="main-color" href="./">再去看看吧</a></div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($this->_var['goods']): ?>
        <div class="cart-panel-footer">
            <div class="cart-footer-checkout">
                <div class="number"><strong class="count"><?php echo $this->_var['str']; ?></strong>件商品</div>
                <div class="sum">共计：<strong class="total"><?php echo $this->_var['zj']['goods_price']; ?></strong></div>
                <a class="btn" href="flow.php" target="_blank">去购物车结算</a>
            </div>
        </div>
        <?php endif; ?>
    </div>
<script type="text/javascript">
function deleteCartGoods(rec_id){
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res){
  if (res.error){
    alert(res.err_msg);
  }else{
      $('.ECS_CARTINFO').html(res.content);
      $('.cart-panel-content').height($(window).height()-90);
      $("#ECS_CARTINFO_TOP").html(res.content_top);
  }
}
</script> 
</form>
