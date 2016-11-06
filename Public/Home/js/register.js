// JavaScript Document
$(function(){
	/*验证码点击切换*/
	$('.yzmlink').click(function(){
		var src1=$('.yzmimg').attr("src");
		$('.yzmimg').attr("src",src1+"&tem="+Math.random());
	})
	$('#email').blur(function(){
		var emaildata=$(this).val();
		$.ajax({
			url:'index.php?m=Home&c=Register&a=validEmail',
			type:'post',
			data:{edata:emaildata},
			success:function(data){
				if(data=='1'){
					$('#emailerror').css({display:'none'});
					$('#espa').html('');
				}
				if(data=='0'){
					$('#emailerror').css({display:'block'});
					$('#espa').html('邮箱格式不正确');
				}
			}
		})
	})
	/*验证邮箱是否为空*/
	$('#username').focus(function(){
		var ed=$('#email').val();
		if(ed==""){
			$('#emailerror').css({display:'block'});
			$('#espa').html('邮箱地址不能为空');
		}else{
			$('#emailerror').css({display:'none'});
			$('#espa').html('');
		}
	})
	/*验证用户名是否为空*/
	$('#password').focus(function(){
		var ud=$('#username').val();
		var ed=$('#email').val();
		if(ud==""){
			$('#usernameerror').css({display:'block'});
			$('#uspa').html('用户名不能为空');
		}else{
			$('#usernameerror').css({display:'none'});
			$('#uspa').html('');
		}
		if(ed==""){
			$('#emailerror').css({display:'block'});
			$('#espa').html('邮箱地址不能为空');
		}else{
			$('#emailerror').css({display:'none'});
			$('#espa').html('');
		}
	})
	
	/*验证用户名*/
	$('#username').blur(function(){
		var usernamedata=$(this).val();
		$.ajax({
			url:'index.php?m=Home&c=Register&a=validusername',
			type:'post',
			data:{udata:usernamedata},
			success:function(data){
				if(data=='1'){
					$('#usernameerror').css({display:'block'});
					$('#ucw').css({display:'none'});
					$('#uspa').html('该用户名可以使用').css({color:'green'});
				}
				if(data=='2'){
					$('#usernameerror').css({display:'block'});
					$('#ucw').css({display:'none'});
					$('#uspa').html('该用户名已存在');
				}
				if(data=='0'){
					$('#usernameerror').css({display:'block'});
					$('#uspa').html('用户名格式不正确');
				}
			}
		})
	})

	/*验证密码*/
	$('#password').keyup(function(){

		var pwddata=$(this).val();
		$.ajax({
			url:'index.php?m=Home&c=Register&a=validpwd',
			type:'post',
			data:{pdata:pwddata},
			success:function(data){
				if(data==1){
					$('#pwderror').css({display:'block'});
					$('#ispa').css({display:'none'});
					$('#pspa').html('密码强度太弱');
					$('.block1').css({backgroundColor:'red'});
				}
				if(data==2){
					$('#pwderror').css({display:'block'});
					$('#ispa').css({display:'none'});
					$('#pspa').html('密码强度适中');
					$('#pspa').css({color:'blue'});
					$('.block2').css({backgroundColor:'blue'});
				}
				if(data==3){
					$('#pwderror').css({display:'block'});
					$('#ispa').css({display:'none'});
					$('#pspa').html('密码强度高');
					$('#pspa').css({color:'green'});
					$('.block3').css({backgroundColor:'green'});
				}
				if(data==0){
					$('#pwderror').css({display:'block'});
					$('#pspa').html('密码格式不正确');
				}
			}
		})
	})
	
	$('#qr').blur(function(){
		var pwd1=$('#password').val();
		var pwd2=$(this).val();
		$.ajax({
			url:'index.php?m=Home&c=Register&a=validqueren',
			type:'post',
			data:{pd1:pwd1,pd2:pwd2},
			success:function(data){
				if(data==1){
					$("#pqr").css({display:'block'});
					$('#iqr').css({display:'none'});
					$('#queren').html('密码正确').css({color:'green'});
				}
				if(data==0){
					$("#pqr").css({display:'block'});
					$('#queren').html('两次密码不一致');
				}
			}
		})
	})
	
	$('#sub').click(function(){
		var ed=$('#email').val();
		if(ed==""){
			$('#emailerror').css({display:'block'});
			$('#espa').html('邮箱地址不能为空');
		}else{
			$('#emailerror').css({display:'none'});
			$('#espa').html('');
			var ud=$('#username').val();
			if(ud==""){
				$('#usernameerror').css({display:'block'});
				$('#uspa').html('用户名不能为空');
			}else{
				$('#usernameerror').css({display:'none'});
				$('#uspa').html('');
				var pwddata=$('#password').val();
				if(pwddata==''){
					$('#pwderror').css({display:'block'});
					$('#pspa').html('密码不能为空');
					$("#pqr").css({display:'block'});
					$('#queren').html('两次密码不一致');
				}else{
					$('#pwderror').css({display:'none'});
					$('#queren').html('');
					var xy=$('#xy').attr('checked');
					if(xy!='checked'){
						$('#xieyi').css({display:'block'});
					}else{
						$('#xieyi').css({display:'none'});
						var yzmval=$('#yzmval').val();
						$.ajax({
							url:"index.php?m=Home&c=Register&a=vyzm",
							type:'post',
							data:{data:yzmval},
							success:function(data){
								if(data==1){
									$('#fm').submit();
								}
								if(data==0){
									$('#yzmerror').css({display:'block'});
									$('#yzme').html('验证码错误');
								}
							}
						})
					}
				}
			}
		}
	})
})

function tabCutover(e,t){
	$(e).addClass('now').siblings().removeClass('now');
    $(e).parent().siblings('.create-content').find("."+t).css({display:'block'}).siblings().css({display:'none'});
    // $("."+t).css({display:'block'}).siblings('ul').css({display:'none'});
    $(e).find('.handy-icon').css({display:'block'}).parent().siblings().find('.handy-icon').css({display:'none'});
}
