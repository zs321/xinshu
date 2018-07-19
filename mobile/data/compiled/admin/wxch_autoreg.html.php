<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0055)http://www.tianmahui.com/admin/wxch-ent.php?act=autoreg -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>管理中心 - 自动注册 </title>
<meta name="robots" content="noindex, nofollow">

<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/jquery-1.9.1.min.js,../js/jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'./js/transport_jquery.js,./js/common.js')); ?>
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="index.php?act=main">管理中心</a> </span><span id="search_id" class="action-span1"> - 自动注册 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div" id="conent_area">

<form method="post" name="theForm" action="wxch-ent.php?act=autoreg">

  <table id="general-table" align="center">
  <tbody><tr>
    <td style="font-weight: bold;color:#192E32; " width="20%">用户名前缀:</td>
    <td>
        <input type="text" name="username" value="<?php echo $this->_var['data']['autoreg_name']; ?>">
        <span> wx_+user_id 生成：wx_113</span>
    </td>
  </tr>
      <tr>
          <td style="font-weight: bold; color:#192E32;" width="20%">密码前缀:</td>
          <td><input type="text" name="userpwd" value="<?php echo $this->_var['cfg']['cfg_value']; ?>"></td>
      </tr>
      <tr>
          <td style="font-weight: bold; color:#192E32;" width="20%">随机密码位数:</td>
          <td>
              <input type="text" name="rand" value="<?php echo $this->_var['data']['autoreg_rand']; ?>">
              <span> 密码前缀+随机密码 生成：wxch23159</span>
          </td>

      </tr>
  <tr>
    <td style="font-weight: bold;color:#192E32;">默认会员等级:</td>
    <td>
            <select name="rank_id">
                <option <?php if ($this->_var['rank_id'] == 0): ?>selected<?php endif; ?>>请选择...</option>
                <?php $_from = $this->_var['w_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'userrank');if (count($_from)):
    foreach ($_from AS $this->_var['userrank']):
?>
                <option name="rank_id" value="<?php echo $this->_var['userrank']['rank_id']; ?>" <?php if ($this->_var['rank_id'] == $this->_var['userrank']['rank_id']): ?>selected<?php endif; ?>><?php echo $this->_var['userrank']['rank_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </select>
    </td>
  </tr>

  <tr>
    <td style="font-weight: bold;color:#192E32;">自动注册开关:</td>
    <td>
      <input type="radio" name="state" value="1" <?php if ($this->_var['data']['state'] == 1): ?>checked="checked" <?php endif; ?> />开启
      <input type="radio" name="state" value="0"  <?php if ($this->_var['data']['state'] == 0): ?>checked="checked" <?php endif; ?>/>关闭

      <input type="hidden" name="tpl" value="">
    </td>
  </tr>


  <tr>
    <td colspan="2" align="center"><input type="submit" value=" 确定 " class="button"></td>
  </tr>
  </tbody></table>
</form>


</div>

<div id="footer">
<br>
Copyright © 2012-2017 青蜂网络 版权所有</div>
<script type="text/javascript" src="./js/utils.js"></script><!-- 新订单提示信息 -->


<!--
<embed src="images/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="images/online.swf">
  <param name="quality" value="high">
  <embed src="images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  
</object>

<script language="JavaScript">
document.onmousemove=function(e)
{
  var obj = Utils.srcElement(e);
  if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
  {
    obj.title = '点击修改内容';
    obj.style.cssText = 'background: #278296;';
    obj.onmouseout = function(e)
    {
      this.style.cssText = '';
    }
  }
  else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
  {
    obj.title = '点击对列表排序';
  }
}
<!--


var MyTodolist;
function showTodoList(adminid)
{
  if(!MyTodolist)
  {
    var global = $import("../js/global.js","js");
    global.onload = global.onreadystatechange= function()
    {
      if(this.readyState && this.readyState=="loading")return;
      var md5 = $import("js/md5.js","js");
      md5.onload = md5.onreadystatechange= function()
      {
        if(this.readyState && this.readyState=="loading")return;
        var todolist = $import("js/todolist.js","js");
        todolist.onload = todolist.onreadystatechange = function()
        {
          if(this.readyState && this.readyState=="loading")return;
          MyTodolist = new Todolist();
          MyTodolist.show();
        }
      }
    }
  }
  else
  {
    if(MyTodolist.visibility)
    {
      MyTodolist.hide();
    }
    else
    {
      MyTodolist.show();
    }
  }
}

if (Browser.isIE)
{
  onscroll = function()
  {
    //document.getElementById('calculator').style.top = document.body.scrollTop;
    document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
  }
}

if (document.getElementById("listDiv"))
{
  document.getElementById("listDiv").onmouseover = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
        if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
      }
    }

  }

  document.getElementById("listDiv").onmouseout = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
          if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
      }
    }
  }

  document.getElementById("listDiv").onclick = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.tagName == "INPUT" && obj.type == "checkbox")
    {
      if (!document.forms['listForm'])
      {
        return;
      }
      var nodes = document.forms['listForm'].elements;
      var checked = false;

      for (i = 0; i < nodes.length; i++)
      {
        if (nodes[i].checked)
        {
           checked = true;
           break;
         }
      }

      if(document.getElementById("btnSubmit"))
      {
        document.getElementById("btnSubmit").disabled = !checked;
      }
      for (i = 1; i <= 10; i++)
      {
        if (document.getElementById("btnSubmit" + i))
        {
          document.getElementById("btnSubmit" + i).disabled = !checked;
        }
      }
    }
  }

}

//-->
</script>


</body></html>