<style>
    .ground {
        min-width:320px;
        min-height:420px;
        width:100%;
        height:auto;
        background-image:url('themes/huazhuangpin/images/ground.png');
        background-size: 100% 100%;
        position:relative;
    }

    .place {
        
        position: absolute;
        bottom: 0;
        height: 46%;
        width: 99%;
    }

    .left {
           
           position: absolute;
           height: 15%;
           width: 40%;
           margin-top: 25%;
           margin-left: 2%;
    }

    .left p{
        font-size:20px;
        color: darkviolet;
    }
    .trees{
        margin-bottom:15px;
    }


   #shade{
            position:absolute;
            top:0;
            left:0;
            z-index:2;
            width:100%;
            height:100%;
            background-color:#000;
            opacity:0.3;
            filter: alpha(opacity=30);
            display:none;
            text-align: center;
            line-height: 100%;
            font-size:30px;
            color:white;
        }

</style>
<div id="shade">加载中。。。</div>
<div   id = 'ground' class='ground'>
       <div class="place" onclick="ajaxChange()"></div>
       <div class="left">
            <p class = 'trees'>我的杏树：<?php echo $this->_var['trees']; ?>棵</p>
            <p class = 'tree_num'>获取资格：<?php echo $this->_var['tree_num']; ?>次</p>
       </div>
</div>


