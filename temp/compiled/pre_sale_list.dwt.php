<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/huazhuangpin/pre_sale.css" rel="stylesheet" type="text/css" />
<link href="themes/huazhuangpin/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-lazyload.js')); ?>  <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,common.js,jquery.countdown-2.5.3.min.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.countdown-2.5.3.min.js')); ?>
<div id="wrapper">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="main cle">
    <?php echo $this->fetch('exchange_tree.dwt'); ?>
</div>
</div>
<div style="clear:both"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
<script language="javascript">
    function ajaxChange(){

        $.ajax({
            url:'pre_sale.php',
            type:'get',
            beforeSend: function(){
                 alert("加载中...");
                },
            data:{'act':'tree_change'},
            success:function(data){
               var data = JSON.parse(data);
               console.log(data);
                    alert(data.content);
                    if(data.code == 200){
                        $('.trees').text("获取资格："+data.data.trees+"次");
                        $('.tree_num').text("我的杏树："+data.data.tree_num+"棵");
                    }
            }
        })
    }
</script>