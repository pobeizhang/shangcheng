<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Login Options - Login Form 1</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>

<link href="./Public/Home/Houtai/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="./Public/Home/Houtai/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="./Public/Home/Houtai/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>


<link href="./Public/Home/Houtai/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="./Public/Home/Houtai/assets/admin/layout/img/logo-big.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?php echo U('Admin/Login/edit')?>" method="post">
		<h3 class="form-title">修改密码</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			请输入以前的密码和新密码 </span>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">以前的密码</label>
			<input class="form-control form-control-solid placeholder-no-fix" id='old' type="password" autocomplete="off" placeholder="以前的密码" name="newpassword"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">新密码</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="新密码" name="oldpassword"/>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success uppercase btn-block">修改</button>
		</div>
	<input type='hidden' name='__TOKEN__' value='8c103151d5ae947399f18e9c5ce14541'</form>
	<!-- END LOGIN FORM -->
	
</div>
<div class="copyright">
	 2014 © Metronic. Admin Dashboard Template.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="./Public/Home/Houtai/assets/global/plugins/respond.min.js"></script>
<script src="./Public/Home/Houtai/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="./Public/Home/Houtai/assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script src="./Public/Home/Houtai/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="./Public/Home/Houtai/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="./Public/Home/Houtai/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="./Public/Home/Houtai/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>

<script src="./Public/Home/Houtai/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();
$('#old').blur(function(){
	var p=$('#old').val();
	$.ajax({
		url:'index.php?m=Admin&c=Login&a=valid',
		data:{data:p},
		type:'post',
		success:function(data){
			if(data=='1'){
				return true;
//				alert('密码正确');
			}
			if(data=='0'){
				alert('密码错误');
			}
		}
	})
})
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>