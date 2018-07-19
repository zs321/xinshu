<!-- $Id: wxch_point.html  2013-10-16 20:13 Z djks $ -->
<?php if ($this->_var['full_page']): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $this->_var['wxch_lang']['cp_home']; ?><?php if ($this->_var['wxch_lang']['ur_here']): ?> - <?php echo $this->_var['wxch_lang']['ur_here']; ?> <?php endif; ?></title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="styles/general.css" rel="stylesheet" type="text/css" />
    <link href="styles/main.css" rel="stylesheet" type="text/css" />
	<?php echo $this->smarty_insert_scripts(array('files'=>'../js/jquery-1.9.1.min.js,../js/jquery.json.js')); ?>
    <script type="text/javascript" src="./js/transport_jquery.js"></script><script type="text/javascript" src="js/common.js"></script>
</head>
<body>

<h1>
    <span class="action-span"><a href="wxch_prize.php?act=add_prize">添加新抽奖规则</a></span>
    <span class="action-span1"><a href="index.php?act=main"><?php echo $this->_var['wxch_lang']['cp_home']; ?></a> </span><span id="search_id" class="action-span1"> - <?php echo $this->_var['wxch_lang']['ur_here']; ?> </span>
    <div style="clear:both"></div>
</h1>
<script type="text/javascript" src="../data/static/js/utils.js"></script><script type="text/javascript" src="./js/listtable.js"></script>

<div class="form-div">
    <form action="javascript:searchArticle()" name="searchForm" action="wxch_prize.php" >
        <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
        规则名称 <input type="text" name="keyword" id="keyword" />
        <input type="submit" value=" 搜索 " class="button" />
    </form>
</div>

<!-- start prize -->
<form method="POST" action="wxch_prize.php?act=batch_remove" name="listForm">
    <!-- start cat list -->
    <div class="list-div" id="listDiv">
        <?php endif; ?>
        <table cellspacing='1' cellpadding='3' id='list-table'>
            <tr>
                <th><a href="#">规则名称</a></th>
                <th><a href="#">活动项目</a></th>
                <th><a href="#">活动状态</a></th>
                <th><a href="#">参与人数</a></th>
                <th><a href="#">开始时间</a></th>
                <th><a href="#">结束时间</a></th>
                <th>操作</th>
            </tr>
            <?php $_from = $this->_var['wxchdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
            <tr>
                <td class="first-cell">
                    <span onclick="javascript:listTable.edit(this, 'edit_title', <?php echo $this->_var['list']['id']; ?>)"><?php echo $this->_var['list']['title']; ?> </span></td>
                <td align="center"><span><?php echo $this->_var['list']['fun_title']; ?></span></td>
                <td align="center">
                    <span><img src="images/<?php if ($this->_var['list']['status'] == 1): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'zjd_state', <?php echo $this->_var['list']['pid']; ?>)" /></span>
                </td>
                <td align="center"><span><?php echo $this->_var['list']['count']; ?></span></td>
                <td align="center"><span><?php echo $this->_var['list']['starttime']; ?></span></td>
                <td align="center"><?php echo $this->_var['list']['endtime']; ?></td>
                <td align="center" nowrap="true"><span>
                <a href="/wechat/<?php if ($this->_var['list']['fun'] == 'egg'): ?>egg<?php else: ?>dzp<?php endif; ?>/index.php?pid=<?php echo $this->_var['list']['pid']; ?>" target="_blank" title="查看"><img src="images/icon_view.gif" width="21" height="21" border="0" /></a>
                    <a href="wxch_prize.php?act=edit_prize&pid=<?php echo $this->_var['list']['pid']; ?>" title="编辑规则"><img src="images/icon_priv.gif" border="0" width="21" height="21" /></a>&nbsp;
      <a href="wxch_prize.php?act=edit&pid=<?php echo $this->_var['list']['pid']; ?>" title="编辑奖品、数量"><img src="images/icon_edit.gif" border="0" width="21" height="21" /></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['list']['pid']; ?>, '您确认要删除这个规则吗？')" title="移除"><img src="images/icon_drop.gif" border="0" width="21" height="21"></a><!--  --></span>
                </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>&nbsp;
                <td align="right" nowrap="true" colspan="8">
                    <div id="turn-page">
                        总计  <span id="totalRecords"><?php echo $this->_var['filter']['record_count']; ?></span>
                        个记录分为 <span id="totalPages"><?php echo $this->_var['filter']['page_count']; ?></span>
                        页当前第 <span id="pageCurrent"><?php echo $this->_var['filter']['page']; ?></span>
                        页，每页 <input type='text' size='3' name="page_size" id='pageSize' value="<?php echo $this->_var['filter']['page_size']; ?>" onkeypress="return listTable.changePageSize(event)" />
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
              <?php echo $this->smarty_create_pages(array('count'=>$this->_var['filter']['page_count'],'page'=>$this->_var['filter']['page'])); ?>
          </select>
                    </div>
                </td>
            </tr>
        </table>

        <?php if ($this->_var['full_page']): ?>
    </div>
</form>
<!-- end prize form -->


<script language="JavaScript">
    listTable.recordCount = <?php echo $this->_var['filter']['record_count']; ?>;
    listTable.pageCount = <?php echo $this->_var['filter']['page_count']; ?>;
    var page_size   = <?php echo $this->_var['filter']['page_size']; ?>;

    listTable.filter.type = '<?php echo $this->_var['filter']['type']; ?>';
    listTable.filter.pagesize = '<?php echo $this->_var['filter']['page_size']; ?>';
    listTable.filter.record_count = '<?php echo $this->_var['filter']['record_count']; ?>';
    listTable.filter.page = '<?php echo $this->_var['filter']['page']; ?>';
    listTable.filter.page_count = '<?php echo $this->_var['filter']['record_count']; ?>';
    listTable.filter.start = '<?php echo $this->_var['filter']['start']; ?>';

    onload = function () {

        // 开始检查订单
        startCheckOrder();
    }
    /* 搜索规则 */
    function searchArticle() {
        listTable.filter.keyword = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
        listTable.filter.page = 1;
        listTable.loadList();
    }
</script>
<?php echo $this->fetch('wxch_pagefooter.htm'); ?>
<?php endif; ?>