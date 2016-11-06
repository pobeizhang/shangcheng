<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Public/Admin/Css/login.css" />
	<script type="text/javascript" src="./Public/Admin/Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
		var images = "./Public/Admin/Images/";
//		var act = "<?php echo U('Admin/Login/verify')?>";
	</script>
	
	<script type="text/javascript" src="./Public/Admin/Js/login.js"></script>
</head>
<body>
	<div id="top">
		拉手网&nbsp;&nbsp;商城
		<a href="<?php echo U('Home/Index/index')?>" target="_blank">-商城首页-</a>
	</div>
	<div id="logbox">
		<img id="log" src="./Public/Admin/Images/welcome.png" alt="" />
		<form action="<?php echo U('Admin/Login/login')?>" method="post">
			<input type="text" name="username" id="username" />
			<input type="password" name="password" id="password" />
			<img src="<?php echo U('Admin/Login/verify')?>" alt="" id="code"/>
			<input type="text" name="verify" id="verify" />
			<input type="submit" value="" id="sub" name="sub" />
			<input type="reset" value="" id="reset" />
		<input type='hidden' name='__TOKEN__' value='f26a7d86cfbd366ca8d20c7d35b44b1e'</form>
		<p id="info">
			<span id="username_info"></span>
			<span id="password_info"></span>
			<span id="verify_info"></span>
		</p>
	</div>
</body>
</html>