<style>
    .ground {
        min-width:1366px;
        min-height:730px;
        width:100%;
        height:auto;
        background-image:url('themes/huazhuangpin/images/ground.png');
        background-size: 100% 100%;
        position:relative;
    }

    .place {
        position: absolute;
        top: 29%;
        left: 10%;
        height: 58%;
        width: 78%;
        transform: rotate(30deg);
    }

    .left {
           
           position: absolute;
           height: 15%;
           width: 40%;
           margin-top: 8%;
           margin-left: 2%;
    }

    .left p{
        font-size:20px;
        color: darkviolet;
    }
    .trees{
        margin-bottom:15px;
    }

</style>

<div  id = 'ground' class='ground'>
               <div class="place" onclick="ajaxChange()"  title="点击获取杏树"></div>
       <div class="left">
            <p class = 'trees'>我的杏树：<?php echo $this->_var['trees']; ?>棵</p>
            <p class = 'tree_num'>获取资格：<?php echo $this->_var['tree_num']; ?>次</p>
       </div>
</div>


