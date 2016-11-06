<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录-北京拉手网</title>
<link rel="shortout icon" href="<?php echo __PUBLIC__?>/Home/images/favicon.ico" />
<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Home/css/login.css" />
<script type="text/javascript" src="<?php echo __PUBLIC__?>/Home/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo __PUBLIC__?>/Home/js/login.js"></script>
</head>

<body>
	<header>
		<div class='header-bottom'>
			<div class='logo'>
				<a href="">
					<img src="<?php echo __PUBLIC__?>/Home/images/logo.png" alt="" />
				</a>
			</div>

			<div class='commitment'>
				<a href="">
					<img src="<?php echo __PUBLIC__?>/Home/images/commitment.png" alt="" />
				</a>
			</div>
		</div>
	</header>

	<div class='login-main'>
		<div class='login-left'>
			<img src="<?php echo __PUBLIC__?>/Home/images/login02.png" alt="" />
		</div>

		<div class='login-right'>
			<div class='login-title'>
				<a href="javascript:;" class='current now' onclick="tabCutover(this,'putong')">普通方式登录
					<i class='handy-icon' style="display:block"></i>
				</a>
				<a href="javascript:;" class='current' onclick="tabCutover(this,'shouji')">手机动态码登录
					<i class='handy-icon'></i>
				</a>
			</div>

			<div class='login-content'>
				<ul class='putong'>
					<form action="<?php echo U('Home/Login/login')?>" method="post">
						<li class='login-error' style='display:none'>
							<i class='pop-icon'></i>
							<span id='loginspa'></span>
						</li>
						<li class='prz'>
							<div class='input-warp'>
								<i class='account-icon'></i>
								<input type="text" name="username" id='loginval' class='intext'placeholder='用户名/邮箱/手机号' />
							</div>
						</li>
						<li>
							<div class='input-warp'>
								<i class='password-icon'></i>
								<input type="password" name="password" id='loginpwd' class='intext' placeholder='密码' />
							</div>
						</li>
						<li>
							<div class='input-warp'>
								<input type="text" name="yzm" id="yzmval" class='intext yzm' placeholder='右侧验证码'/>
								
								<img src="<?php echo U('Home/Yzm/codeshow')?>" alt="验证码" width="74" height="36" class='yzmimg' />
								<a href="javascript:;" class='yzmlink'>换一张？</a>
								<p class='tips error' id='yzmerror'>
									<span id='yzme'></span>
								</p>
							</div>
							
						</li>
						<li>
							<input type="button" value="登录" class='insubmit' />
						</li>
						<li class='link'>
							<a href="" class='fl'>忘记密码</a>
							<a href="<?php echo U('Home/Register/register')?>" class='fr'>免费注册</a>
						</li>
					<input type='hidden' name='__TOKEN__' value='f26a7d86cfbd366ca8d20c7d35b44b1e'</form>
				</ul>

				<ul style='display:none' class='shouji'>
					<form action="">
						<li class='login-error' style='display:none'>
							<i class='pop-icon'></i>
						</li>
						<li class='prz'>
							<div class='input-warp'>
								<i class='phone-icon'></i>
								<input type="text" name="mobile" class='intext'placeholder='手机号' />
							</div>
						</li>
						
						<li>
							<div class='input-warp'>
								<input type="text" name="" id="" class='intext yzm' placeholder='右侧验证码'/>
									<img src="" alt="验证码" width="74" height="36" class='yzmimg' />
									<a href="" class='yzmlink'>换一张？</a>
							</div>
						</li>

						<li class='button'>
							<div calss='inbutton-warp'>
								<input type="button" value="获取动态码" class='inbutton' maxlength="6"/>
								<p class='tips'>
									<i class='post-icon'></i>
									已发送
								</p>
							</div>
						</li>

						<li>
							<div class='input-warp'>
								<i class='password-icon'></i>
								<input type="password" name="" class='intext' placeholder='手机动态码' maxlength='4' />
							</div>
						</li>
						<li>
							<input type="button" value="登录" class='insubmit' />
						</li>
						<li class='link'>
							<a href="" class='fr'>免费注册</a>
						</li>
					<input type='hidden' name='__TOKEN__' value='f26a7d86cfbd366ca8d20c7d35b44b1e'</form>
				</ul>
			</div>

			<div class='login-more'>
				<p>用合作网站登录</p>
				<a href="" class='a-qq'>
					<i class='qq'></i>
					QQ
				</a>
				<a href="" class='a-qihu360'>
					<i class='qihu360'></i>
					360
				</a>
				<a href="" class='a-zhifubao'>
					<i class='zhifubao'></i>
					支付宝
				</a>
				<a href="" class='a-sina'>
					<i class='sina'></i>
					新浪
				</a>
				<a href="" class='a-baidu'>
					<i class='baidu'></i>
					百度
				</a>
				<a href="" class='a-tuan800'>
					<i class='tuan800'></i>
					团800
				</a>
			</div>
		</div>
		<div class='clear'></div>
	</div>

	<div id='footer'>
		<div class='login-footerlink'>
			<a href="" class='nofollow'>关于拉手</a>
			<span></span>
			<a href="" class='nofollow'>常见问题 </a>
			<span></span>
			<a href="" class='nofollow'>服务保障</a>
			<span></span>
			<a href="" class='nofollow'>团购合作</a>
			<span></span>
			<a href="" class='nofollow'> 开放API</a>
			<span></span>
			<a href="" class='nofollow'>拉手网联盟</a>
			<span></span>
			<a href="" class='nofollow'>加入我们</a>
			<span></span>
			<a href="" class='nofollow'>移动拉手</a>
		</div>
		<p class='copyright'>©&nbsp;&nbsp;2015&nbsp;&nbsp;北京拉手网络技术有限公司&nbsp;&nbsp;LaShou.com&nbsp;&nbsp;京ICP证100571号  京ICP备11004895号&nbsp;&nbsp;京公网安备110105001181号</p>
	</div>
</body>
</html>
