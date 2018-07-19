$(function(){
	/*商品详情页tab切换 strat*/
	$('.itemContentHead li').click(function(){
		type = '#' + $(this).attr('data-position');
		$('html,body').animate({scrollTop:$(type).offset().top -15},300);
	})
	/*商品详情页tab切换 end*/

	/*商品详情页滚动tab切换 strat*/
	$(window).scroll(function(){
		docT = $(document).scrollTop();
		objD1 = $('#D1').offset().top - 15;
		objD2 = $('#D2').offset().top - 15;
		objD3 = $('#D3').offset().top - 15;
		if(docT > objD1){
			$('.itemBar').fadeIn();
		}else{
			$('.itemBar').fadeOut();
		}
		if(docT > objD1){
			$('#iteamBarHead li').removeAttr('class');
			$('#H1').attr('class','itemContentHeadFocus');
		}
		if(docT > objD2-1){
			$('#iteamBarHead li').removeAttr('class');
			$('#H2').attr('class','itemContentHeadFocus');
		}
		if(docT > objD3-1){
			$('#iteamBarHead li').removeAttr('class');
			$('#H3').attr('class','itemContentHeadFocus');
		}
	})
	/*商品详情页滚动tab切换 end*/

	$(".item-thumbs").slide({mainCell:".bd ul",autoPage:true,effect:"left",vis:5});

	$("#item-thumbs li a").click(function(){
		$("#item-thumbs li").removeClass("current");
		$(this).parent().addClass("current");
	})
	
	$("#membership,.membership_con").mouseenter(function(){
		$(".membership_con").show();
	})
	
	$("#membership,.membership_con").mouseleave(function(){
		$(".membership_con").hide();
	})
	
	$(".seemore_items").slide({mainCell:".bd ul",effect:"top",autoPage:true,scroll:3,vis:3});

	$("#skunum").on('click', 'span', function(e) {
		if ($(this).hasClass("add")) {
			countNum(1);
		} else {
			countNum(-1);
		}
		return false;
    });
	
	$(".sku_list a").click(function(){
		$(this).parent().find("a").removeClass("selected");
		$(this).addClass("selected");
		$(this).parent().find("input:radio").prop("checked",false);
		$(this).find("input:radio").prop("checked",true);
		//changePrice();
	})
	
	$(".sku_list2").click(function(){
		$(this).parent().find("label").removeClass("selected");
		$(this).addClass("selected");
	})
		
	$("#taocan_tabs li").click(function(){
		$("#taocan_tabs li").removeClass("current");
		$(this).addClass("current");
		var i = $("#taocan_tabs li").index($(this));
		$("#taocan_panels .panel").hide();
		$("#taocan_panels .panel").eq(i).show();
	})
})


function countNum(i) {
	var $count_box = $("#skunum");
	var $input = $count_box.find('input');
	var num = $input.val();
    if (!$.isNumeric(num)) {
		alert("请您输入正确的购买数量!")
        $input.val('1');
        return;
	}
    num = parseInt(num) + i;
    switch (true) {
		case num == 0:
			$input.val('1');
			alert('您至少得购买1件商品！');
			break;
        default:
        	$input.val(num);
            break;
    }
	changePrice();
}

