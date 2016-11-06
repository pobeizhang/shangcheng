// JavaScript Document
$(function(){
	var sh = 0;
    // 3.函数体
    function qq(){
    	sh++;
    	// 判断循环
    	if(sh==5){
            $(".ad-up").css({top:"0px"});
    		sh=1;
    	}

    	// 获得top值
    	b = sh * -63 + "px";
    	$(".ad-up").animate({top:b},800);
    }
    //2. 定时器
    timers = setInterval(qq,2000);
    $('.ad-img').hover(function(){
    	clearInterval(timers);
    },function(){
    	timers=setInterval(qq,2000);
    })
    $('.ad-close').click(function(){
    	$('.ad-img').css({display:"none"});
    })

    $('.sctext').click(function(){
    	$('.scvalue').css({display:"none"});
    	$(this).attr('placeholder','请输入商品、商家、商圈')
    })

    $('.index-app-qrcode').hover(function(){
    	$('.iap-con').css({display:'block'});
    },function(){
    	$('.iap-con').css({display:'none'});
    })

    $('.sort').hover(function(){
        $(this).find('.sort-con').css({display:"block"});
    },function(){
         $(this).find('.sort-con').css({display:"none"});
    })

    $(".filter-more").hover(function(){
        $(".filter-link-more").css({height:'44px'});
        $('.filter-strip-more').css({paddingBottom:"33px"});
    },function(){
        $(".filter-link-more").css({height:'22px'});
        $('.filter-strip-more').css({paddingBottom:"0px"});
    })

    var num = 0;
    // 3.函数体
    function hot(){
        num++;
        // 判断循环
        if(num==6){
            $(".slider-ul").css({left:"0px"});
            num=1;
        }

        // 获得top值
        left = num * -723 + "px";
        $(".slider-ul").animate({left:left},800);
    }
    //2. 定时器
    timers1 = setInterval(hot,2000);
    $('.slider-ulwarp').hover(function(){
        clearInterval(timers1);
    },function(){
        timers1=setInterval(hot,2000);
    })

    var cnum = 0;
    // 3.函数体
    function cj(){
        cnum++;
        // 判断循环
        if(cnum==5){
            $(".lottery-ul").css({left:"0px"});
            cnum=1;
        }

        // 获得top值
        left = cnum * -209 + "px";
        $(".lottery-ul").animate({left:left},800);
    }
    //2. 定时器
    timers2 = setInterval(cj,2000);
    $('.lottery-ulwarp').hover(function(){
        clearInterval(timers2);
    },function(){
        timers2=setInterval(cj,2000);
    })

    var hnum = 0;
    // 3.函数体
    function hcj(){
        hnum++;
        // 判断循环
        if(hnum==4){
            $(".set-ul").css({left:"0px"});
            hnum=1;
        }

        // 获得top值
        left = hnum * -223 + "px";
        $(".set-ul").animate({left:left},800);
    }
    //2. 定时器
    timers3 = setInterval(hcj,2000);
    $('.set-ulwarp').hover(function(){
        clearInterval(timers3);
    },function(){
        timers3=setInterval(hcj,2000);
    })

    $('.handy-tit').mouseover(function(){
        $(this).css({borderBottom:'1px solid white'}).siblings('.handy-tit').css({borderBottom:'none'});
        $(this).find('em').css({backgroundPosition:'-74px -117px'});
        $(this).siblings('.handy-tit').find('em').css({backgroundPosition:'-74px -114px'});
    })

    $('.wnum').hover(function(){
        $('.handy-dropdowncen').css({display:'block'});
    },function(){
        $('.handy-dropdowncen').css({display:'none'});
    })

    $('.wmovie').hover(function(){
        $('.handy-dropdowncen').css({display:'block'});
    },function(){
        $('.handy-dropdowncen').css({display:'none'});
    })

    $('.handy-tit').mouseover(function(){
        if($(this).html()==$('.h1').html()){
            $('.handy-recharge').css({display:'block'}).siblings('.tem').css({display:'none'});
        }else if($(this).html()==$('.h2').html()){
            $('.handy-movie').css({display:'block'}).siblings('.tem').css({display:'none'});
        }else if($(this).html()==$('.h3').html()){
            $('.handy-hotel').css({display:'block'}).siblings('.tem').css({display:'none'});
        }else if($(this).html()==$('.h4').html()){
            $('.handy-flights').css({display:'block'}).siblings('.tem').css({display:'none'});
        }
    })


    var newnum = 0;
    // 3.函数体
    function newgoods(){
        newnum++;
        // 判断循环
        if(newnum==5){
            $(".slider-ul-new").css({left:"0px"});
            newnum=1;
        }

        // 获得top值
        left = newnum * -1162 + "px";
        $(".slider-ul-new").animate({left:left},800);
    }
    //2. 定时器
    newtimers = setInterval(newgoods,3000);
    $('.slider-ulwarp-new').hover(function(){
        clearInterval(newtimers);
    },function(){
        newtimers=setInterval(newgoods,3000);
    })

    $('.index-goods').hover(function(){
        $(this).css({border:'1px solid #FF7E00'});
        $(this).find('.index-goods-place').css({opacity:'1'});
    },function(){
        $(this).css({border:'1px solid #E0E0E0'});
        $(this).find('.index-goods-place').css({opacity:'0'});
    })
    

})

function tabCutover(e,t){
    $(e).css({borderLeft:'1px solid #EDEDED',borderRight:'1px solid #EDEDED',background:'white'}).siblings().css({borderLeft:'1px solid #F6F6F6',borderRight:'1px solid #F6F6F6',background:'#F6F6F6'});
    $(e).parent().siblings().find("."+t).css({display:'block'}).siblings().css({display:'none'});
}