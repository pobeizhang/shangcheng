// JavaScript Document
$(function(){
	$('.sfbc-item-open').hover(function(){
		$('.sfbc-item-title').css({borderBottom:'1px solid white'});
		$('.sfbc-item-option').css({display:'block'});
	},function(){
		$('.sfbc-item-title').css({borderBottom:'1px solid #E0E0E0'});
		$('.sfbc-item-option').css({display:'none'});
	})


	$('.filter-more').click(function(){
		$(this).parent().css({height:'72px'});
	})
	
	$('.sf-push').toggle(function(){
		$('.sf-contentmore').css({display:'block'});
		// $(this).childred('.open').css({display:'none'});
	},
	function(){
		$('.sf-contentmore').css({display:'none'});
		// $('.close').css({display:'block'});
	})

	$('.goods').hover(function(){
        $(this).css({border:'1px solid #FF7E00'});
        $(this).find('.goods-place').css({opacity:'1'});
    },function(){
        $(this).css({border:'1px solid #E0E0E0'});
        $(this).find('.goods-place').css({opacity:'0'});
    })
	
})