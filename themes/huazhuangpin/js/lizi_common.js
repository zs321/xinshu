var machine_time;
var isBegin = false;
$(function(){
 	/*鲜一下 strat*/
   $(".item-list .p-img").hover(function(){
		$(this).find(".p-price").animate({"bottom":"24"},250);
		$(this).find(".p-addcart").animate({"bottom":"0"},250);
	},function(){
		$(this).find(".p-price").animate({"bottom":"0"},250);
		$(this).find(".p-addcart").animate({"bottom":"-24"},250);
	});
	$(".product-list .item").hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover");
	});

	var u = 210;
	$('.arm-btn').click(function(){
		clearInterval(machine_time);
		$(".arm-operator").addClass("arm-curr");
		$(".arm-btn").animate({"top":"40"},250,function(){$(".arm-btn").animate({"top":"0"},250,function(){$(".arm-operator").removeClass("arm-curr")})});
		$(".product-item .item").css('top',0);		
		if(isBegin) return false;
		isBegin = true;		
		var num_arr = numRand();
		$(".product-item .item").each(function(index){
			var _num = $(this);
			setTimeout(function(){
				_num.animate({ 
					top: -(u*num_arr[index])
				},{
					duration: 300+index*300,
					easing: "easeInOutQuad",
					complete: function(){
						if(!_num.find(".item-list").eq(num_arr[index]).hasClass("price_list0")){_num.find(".item-list").eq(num_arr[index]).addClass("price_list0 flag"+index+num_arr[index]);}
						if(index==3) isBegin = false;	
					}
				});
			}, index * 200);
		});
	});
    arm_machine();	
	$(".arm-btn").hover(function(){
		clearInterval(machine_time);
		$(".arm-btn").animate({"top":"5"},250);
	},function(){
		$(".arm-btn").animate({"top":"0"},250);
		arm_machine();	
	});
	/*鲜一下 end*/

	/*品牌列表 strat*/
	$(".brandWrap").hover(function(){$(this).find(".brandDesc").animate({top:"-20px"},400,"swing")},function(){$(this).find(".brandDesc").stop(!0,!1).animate({top:"0px"},400,"swing")});
	/*品牌列表 end*/

	/*购物车弹出 strat*/
	$("#ECS_CARTINFO_TOP").on("mouseenter",function(){
		$(this).addClass("topbar-cart-active")
		$(this).find(".cart-menu").slideDown();
	}).on("mouseleave",function(){
		$(this).removeClass("topbar-cart-active");
		$(this).find(".cart-menu").stop().slideUp(300,function(){
			$(".cart-section").removeClass("cart-section-on")
		});
	})
	/*购物车弹出 end*/

	$('.dianqi-activity a').hover(
		function() {
			$(this).animate({
				left: '-5px'
			}, 300);
		},
		function() {
			$(this).animate({
				left: '0'
			}, 300);
		}
	);

	/*顶部下拉 strat*/
	$(".J_userInfo").on("mouseenter",".user",function(){
		$('.user-menu').slideDown(200);
		$(this).addClass("user-active");
	}).on("mouseleave",".user",function(){
		$('.user-menu').slideUp(200);
		$(this).removeClass("user-active");
	})
	/*顶部下拉 end*/

	/*分类导航*/
	if($('.j-extendCate').hasClass('dis-n')){
		$('.j-allCate').on('mouseenter',function(){
			$(this).find('.catetit').addClass('hover');
			$(this).find('.j-extendCate').show();
		}).on('mouseleave',function(){
			$(this).find('.catetit').removeClass('hover');
			$(this).find('.j-extendCate').hide();
		});
	}	
	$.fn.extendCate=function(){
		$.each(this,function(){
			var timer1=null,timer2=null,flag=false;
			$(this).on("mouseenter",function(){
				if(flag){
					clearTimeout(timer2);
				}else{
					var _this=$(this);
					timer1=setTimeout(function(){
						if(parseInt(_this.find(".catetwo").css("left"))==200){
							_this.find('.cateone').addClass('hover');
							_this.find(".catetwo").fadeIn(100).stop(true,true).animate({"left":230},100,function(){
								$(".catetwo").css("left",230);
							});
						}else{
							_this.find('.cateone').addClass('hover');
							_this.find(".catetwo").show();
						}
						flag=true;
					},100);
				}
			}).on("mouseleave",function(){
				if(flag){
					var _this=$(this);
					timer2=setTimeout(function(){
						_this.find(".catetwo").hide();
						_this.find('.cateone').removeClass('hover');
						flag=false;
					},150);
				}else{
					clearTimeout(timer1);
				}
			});
		});
	}
	$(".j-extendCate li").extendCate();
	$(".j-extendCate").on("mouseleave",function(){
		$(this).find('.cateone').removeClass('hover');
		$(this).find('.catetwo').css("left",230).hide();
	});

	/*明星单品 start*/
	$(".J_starGoodsCarousel").slide({
		prevCell:".box-hd .more .control-prev",
		nextCell:".box-hd .more .control-next",
		mainCell:".rainbow-list",
		autoPage:true,
		effect:"left",
		autoPlay:false,
		vis:5,
		scroll:5,
		trigger:"click",
		pnLoop:false
	});
	/*明星单品 end*/

	/*分类楼层单品鼠标经过效果*/
	$(".brick-item-m").mouseenter(function(){
		$(this).addClass("brick-item-active");
	}).mouseleave(function(){
		$(this).removeClass("brick-item-active");
	})
		
	/*购物车鼠标移入效果 start*/
	$("#ECS_CARTINFO").on("mouseenter", function() {
		$("#ECS_CARTINFO").animate(200,function(){
			$("#ECS_CARTINFO").addClass("hd_cart_hover");
			$("p.fail").show();
		})
	}).on("mouseleave", function() {
		$("#ECS_CARTINFO").animate(200,function(){
			$("#ECS_CARTINFO").removeClass("hd_cart_hover");
			$("p.fail").hide();
		})
	});
	/*购物车鼠标移入效果 end*/
	
	/*分类导航鼠标移入效果 start*/	
	h = this;
	b = $("#J_mainCata");
	e = $("#J_subCata");
	i = $("#main_nav");
	l = null;
	k = null;
	d = false;
	g = false;
	f = false;
			
	i.on("mouseenter", function() {
		var m = $(this);
		if (l !== null) {
			clearTimeout(l);
		}
		if (f) {
			return;
		}
		l = setTimeout(function() {
			m.addClass("main_nav_hover");
			b.stop().show().animate({
					opacity: 1
			}, 300);
		}, 200);		
	}).on("mouseleave", function() {
		if (l !== null) {
			clearTimeout(l);
		}
		l = setTimeout(function() {
			e.css({
				opacity: 0,
				left: "100px"
			}).find(".J_subView").hide();
			b.hide();
			g = false;
			if (!f) {
				b.stop().delay(200).animate({
					opacity: 0
				}, 300, function() {
					i.removeClass("main_nav_hover");
					b.hide().find("li").removeClass("current");
				});
			} else {
				b.find("li").removeClass("current");
			}
        }, 200);
	});
			
			
	$("#J_mainCata li").mouseenter(function(){
		m = $(this);
		n = $("#J_mainCata li").index($(this));
				
		/*
		if (n > 4) {
			m.addClass("current").siblings("li").removeClass("current");
			e.find(".J_subView").hide();
			return false;
		}
		*/
		if (n > 1) {
			subView_h = (e.find(".J_subView").eq(n).height());
			b_h = b.height();
			m_h = m.height();
			m_p = m.position();
			

			x = b_h-subView_h;
			x = (x/2);
			
			v = parseInt(m_p.top)+m_h;
			
			
			if(parseInt(subView_h+x) > v)
			{
				x+=35;
				e.css({
					top: x
				});	
			}
			else
			{
				
				s = v - x - subView_h;
				x += s;
				x += 35;
				
				e.css({
					top: x
				});	
				
			}

			
		} else {
			e.css({
			top: "35px"
			});
		} 
		
		if (g) {					
			m.addClass("current").siblings("li").removeClass("current");
			e.find(".J_subView").hide().eq(n).show();
		} else {
			if (k !== null) {
				clearTimeout(k);
			}
			k = setTimeout(function() {
					m.addClass("current").siblings("li").removeClass("current");
					g = true;
					if (d) {
						e.css({
							opacity: 1,
							left: "213px"
						}).find(".J_subView").eq(n).show();
					} else {
						c(n);
                    }
			}, 200);
		}
	})
			
	function c(m) {
		e.css({
			opacity: 1,
			left: "213px"
		}).find(".J_subView").eq(m).show();
			d = true;
	}
	/*分类导航鼠标移入效果 end*/	
	
	$("#h_box h3").click(function(){
		var i = $("#h_box h3").index($(this));
		
		if($("#h_box ul").eq(i).is(":hidden"))
		{
			$(this).addClass("h3_all");
			$("#h_box ul").eq(i).show();
		}
		else
		{
			$(this).removeClass("h3_all");
			$("#h_box ul").eq(i).hide();
		}
	})
})

/******分类页商品数量加减****/
function modifyBuyNum(d, a) {
	var b;
    var c;
   if (a == -1) {
        c = $(d).parents(".shopping_num").find("input");
        b = parseInt(c.val()) || 1;
        if (b == 1) {
            return
        } else {
            if (b == 2) {
                $(d).attr("class", "p-reduce disable")
            } else {
                $(d).prev().attr("class", "add")
            }
            c.val(b + a)
        }
    } else {
        c = $(d).parents(".shopping_num").find("input");
        b = parseInt(c.val()) || 1;
        $(d).next().attr("class", "p-reduce")
      	c.val(b + a)
    }		
}

function arm_machine(){
	machine_time = setInterval(function(){
		$(".arm-txt").stop().animate({"top":"37"},300,function(){
			$(".arm-txt").animate({"top":"25"},300,function(){$(".arm-txt").animate({"top":"37"},300,function(){$(".arm-txt").animate({"top":"25"},300)})})});
	},5000);
}

function numRand() {
	var rand= [];
	for(var i = 0;i<5;i++){
		var itemId = $(".product-item .item").eq(i).attr("item-id");
		var len = $(".product-item .item").eq(i).find(".item-list").length - 1;
		var num = parseInt((Math.random() * len + 1));
		while (itemId == num) {
			num = parseInt((Math.random() * len + 1));
		}
	    $(".product-item .item").eq(i).attr("item-id",num);
		rand.push(num);
	}
	return rand;  
}
