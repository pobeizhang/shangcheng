// JavaScript Document
$(function() {
	/*验证码点击切换*/
	$('.yzmlink').click(function(){
		var src1=$('.yzmimg').attr("src");
		$('.yzmimg').attr("src",src1+"&tem="+Math.random());
	})
	$('.insubmit').click(function(){
		var logindata=$('#loginval').val();
		var pwddata=$('#loginpwd').val();
		$.ajax({
			url:"index.php?m=Home&c=Login&a=login",
			type:'post',
			data:{username:logindata,password:pwddata},
			success:function(data){
				if(data==1){
					var yzmval = $('#yzmval').val();
					$.ajax({
						url: "index.php?m=Home&c=Register&a=vyzm",
						type: 'post',
						data: {
							data: yzmval
						},
						success: function(data) {
							if (data == 1) {
								location.href="index.php?m=Home&c=Index&a=index";
							}
							if (data == 0) {
								$('#yzmerror').css({
									display: 'block'
								});
								$('#yzme').html('验证码错误');
								$('#yzme').css({color:'red'});
							}
						}
					})
				}
				if(data==0){
					$('.login-error').css({display:'block'});
					$('#loginspa').html('密码或者用户名错误');
				}
			}
		})
		
	})
	
})

function tabCutover(e, t) {
	$(e).addClass('now').siblings().removeClass('now');
	$(e).parent().siblings('.login-content').find("." + t).css({
		display: 'block'
	}).siblings().css({
		display: 'none'
	});
	// $("."+t).css({display:'block'}).siblings('ul').css({display:'none'});
	$(e).find('.handy-icon').css({
		display: 'block'
	}).parent().siblings().find('.handy-icon').css({
		display: 'none'
	});
}