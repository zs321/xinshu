<!-- $Id: user_rank.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<div class="form-div">
  <form action="javascript:searchUserCard()" name="searchForm" >
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    卡号<input type="text" name="card_no" id="card_no"  size="10" />会员名<input type="text" name="user_name" id="user_name" size="10" /><input type="hidden" name="ct_id" value="<?php echo $this->_var['ct_info']['ct_id']; ?>" />
    <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
  </form>
</div>
<form method="post" action="user_card.php?act=batch_remove" name="listForm" onsubmit="return confirm_bath()">
<!-- start ads list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

<table cellspacing='1' id="list-table">
  <tr>
    <th><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox"></th>
    <th><a href="javascript:listTable.sort('card_no'); "><?php echo $this->_var['lang']['card_no']; ?></a></th>
    <th><?php echo $this->_var['lang']['card_pass']; ?></th>
    <th><?php echo $this->_var['lang']['card_level']; ?></th>
    <th><a href="javascript:listTable.sort('user_money'); "><?php echo $this->_var['lang']['user_money']; ?></a></th>
    <th><a href="javascript:listTable.sort('pay_points'); "><?php echo $this->_var['lang']['pay_points']; ?></a></th>
    <th><a href="javascript:listTable.sort('rank_points'); "><?php echo $this->_var['lang']['rank_points']; ?></a></th>
    
    <th><?php echo $this->_var['lang']['card_status']; ?></th>
    <th><?php echo $this->_var['lang']['send_type']; ?></th>
    <th><?php echo $this->_var['lang']['add_time']; ?></th>
    <th><?php echo $this->_var['lang']['is_show']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
  <tr>
  <td><input name="checkboxes[]" type="checkbox" value="<?php echo $this->_var['card']['id']; ?>" /></td>
    <td class="first-cell" ><span onclick="listTable.edit(this,'edit_card_no', <?php echo $this->_var['card']['id']; ?>)"><?php echo $this->_var['card']['card_no']; ?></span></td>
    <td align="center"><?php echo $this->_var['card']['card_pass']; ?></td>
    <td ><span onclick="listTable.edit(this, 'edit_card_level', <?php echo $this->_var['card']['id']; ?>)"><?php echo $this->_var['card']['card_level']; ?></span></td>
     <td align="center"><span  onclick="listTable.edit(this, 'edit_user_money', <?php echo $this->_var['card']['id']; ?>)"><?php echo $this->_var['card']['user_money']; ?></span></td>
    <td align="center"><span  onclick="listTable.edit(this, 'edit_pay_points', <?php echo $this->_var['card']['id']; ?>)"><?php echo $this->_var['card']['pay_points']; ?></span></td>
    <td align="center"><span  onclick="listTable.edit(this, 'edit_rank_points', <?php echo $this->_var['card']['id']; ?>)"><?php echo $this->_var['card']['rank_points']; ?></span></td>
    
    <td align="center"><img src="images/<?php if ($this->_var['card']['card_status']): ?>yes<?php else: ?>no<?php endif; ?>.gif" />
    <?php if ($this->_var['card']['card_status']): ?><?php echo $this->_var['card']['user_name']; ?><br />
<?php echo $this->_var['card']['bind_date']; ?><?php endif; ?></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_send_type', <?php echo $this->_var['card']['id']; ?>)"><?php echo $this->_var['card']['send_type']; ?></span></td>
    <td align="center"><span><?php echo $this->_var['card']['date']; ?></span></td>
    
    <td align="center"><img src="images/<?php if ($this->_var['card']['is_show']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'toggle_is_show', <?php echo $this->_var['card']['id']; ?>)" /></td>
    <td align="center"><a href="user_card.php?act=edit&id=<?php echo $this->_var['card']['id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" border="0" width="21" height="21" /></a>&nbsp;
    <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['card']['id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" width="21" height="21"></a>
    <?php if ($this->_var['card']['card_status']): ?><a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['card']['id']; ?>, '<?php echo $this->_var['lang']['unbind_confirm']; ?>','unbind')" title="<?php echo $this->_var['lang']['card_unbind']; ?>"><?php echo $this->_var['lang']['card_unbind']; ?></a><?php endif; ?></td>
  </tr>
  <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="11"><?php echo $this->_var['lang']['no_user_card']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
      <td colspan="3">
      <input type="hidden" name="act" value="batch_remove" />
      <input type="hidden" name="ct_id" value="<?php echo $this->_var['ct_info']['ct_id']; ?>" />
      <input type="submit" id="btnSubmit" value="<?php echo $this->_var['lang']['button_remove']; ?>" disabled="true" class="button" /></td>
      <td align="right" nowrap="true" colspan="9">
      <?php echo $this->fetch('page.htm'); ?>
      </td>
  </tr>
  </table>
  

<?php if ($this->_var['full_page']): ?>

</div>
<!-- end user ranks list -->
</form>
<div style="display:hidden;">
  <form method="post" action="user_card.php?act=export" name="export_form" id="export_form">
  <input name="id" id="export_ids"  type="hidden"/>
  <input type="hidden" name="ct_id" value="<?php echo $this->_var['ct_info']['ct_id']; ?>" />
  </form>
  </div>
<script type="text/javascript" language="JavaScript">
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
 /* 搜索文章 */
 function searchUserCard()
 {
    listTable.filter.card_no = Utils.trim(document.forms['searchForm'].elements['card_no'].value);
    listTable.filter.user_name = Utils.trim(document.forms['searchForm'].elements['user_name'].value);
    listTable.filter.page = 1;
    listTable.loadList();
 }
function confirm_bath()
{
  userItems = document.getElementsByName('checkboxes[]');

  cfm = '您确定要删除选定的会员卡吗？';

  return confirm(cfm);
}
 function daochu()
  {
	  var snArray = new Array();
	  var eles = document.forms['listForm'].elements;
	  for (var i=0; i<eles.length; i++)
	  {
		if (eles[i].tagName == 'INPUT' && eles[i].type == 'checkbox' && eles[i].checked && eles[i].value != 'on')
		{
		  snArray.push(eles[i].value);
		}
	  }
	  if (snArray.length == 0)
	  {
		document.forms['export_form'].submit();
	  }
	  else
	  {
		document.getElementById("export_ids").value = snArray.toString();
		document.forms['export_form'].submit();
	  }


  }

//-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>
