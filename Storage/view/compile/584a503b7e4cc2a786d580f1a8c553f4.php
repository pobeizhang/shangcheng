<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册-北京拉手网</title>
<link rel="shortout icon" href="<?php echo __PUBLIC__?>/Home/images/favicon.ico" />
<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Home/css/register.css" />
<script type="text/javascript" src="<?php echo __PUBLIC__?>/Home/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo __PUBLIC__?>/Home/js/register.js"></script>
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

	<div class='create-main'>
		<p class='create-right'>
			已有账号i？
			<a href="<?php echo U('Home/Login/login')?>">快速登录</a>
		</p>
		<div class='create-title'>
			<a href="javascript:;" class='current now' onclick="tabCutover(this,'mail')">邮箱注册
				<i class='email-icon'></i>
				<i class='handy-icon' style="display:block"></i>
			</a>
			<a href="javascript:;" class='current' onclick="tabCutover(this,'phone')">手机注册
				<i class='telephone-icon'></i>
				<i class='handy-icon'></i>
			</a>
		</div>

		<div class='create-content'>
			<ul class='email-create mail'>
				<form action="<?php echo U('Home/Register/register')?>" id='fm' method="post">
					<li class='prz'>
						<label>邮箱</label>
						<div class='input-warp'>
							<input type="text" name="email" class='intext' id="email" maxlength='18' placeholder='请输入您的常用邮箱' />

							<p class='tips error' id="emailerror">
								<i class='pop-icon'></i>
								<span id="espa"></span>
							</p>
						</div>
					</li>
				
					<li>
						<label>用户名</label>
						<div class='input-warp'>
							<input type="text" name="username" id="username" class='intext' maxlength='30' placeholder='中文、英文、数字或者划线6-20位字符' />

							<p class='tips error' id='usernameerror' >
								<i class='pop-icon' id='ucw'></i>
								<span id="uspa"></span> 
							</p>
						</div>
					</li>
					<li>
						<label>密码</label>
						<div class='input-warp'>
							<input type="password" name="password" id='password' class='intext' maxlength='20' placeholder='请输入6至20位的数字、字母、下划线组合' />

							<p id='pwderror' class='tips error' >
								<i class='pop-icon' id='ispa'></i>
								<span id="pspa"></span>
							</p>
							<div class='security-level'>
								<span class='block1'>危险</span>
								<span class='block2'>适中</span>
								<span class='block3'>安全</span>
							</div>
						</div>
					</li>

					<li>
						<label>确认密码</label>
						<div class='input-warp'>
							<input type="password" name="password2" id='qr' class='intext' maxlength='20' placeholder='请再次输入密码' />
							<p class='tips error' id='pqr'>
								<i class='pop-icon' id="iqr"></i>
								<span id="queren"></span>
							</p>
						</div>
					</li>

					<li>
						<label>验证码</label>
						<div class='input-warp'>
							<input type="text" name="yzm" class='intext yzm' id='yzmval' maxlength='4' placeholder='右侧验证码' />

							<p class='tips error' id='yzmerror'>
								<i class='pop-icon'></i>
								<span id='yzme'></span>
							</p>

							<img src="<?php echo U('Home/Yzm/codeshow')?>" alt="验证码" class='yzmimg' width='72' height='36' />
							<a href="javascript:;" class='yzmlink'>换一张？</a>
						</div>
					</li>

					<li class='checkbox'>
						<label>
							<input type="checkbox" name="check" id='xy'/>
							<span>我已阅读并接受</span>
							<a href="">《拉手网用户协议》</a>
						</label>
					</li>

					<li>
						<div class='input-warp'>
							<p class='tips' id='xieyi' style="margin-left: 100px;">
								<i class='pop-icon'></i>
								<span>您还未接受拉手用户协议</span>
							</p>
							<input type="button" value="注册" id='sub' class='insubmit' />
						</div>
					</li>

					<div class='clear'></div>
				<input type='hidden' name='__TOKEN__' value='ed567ebdcf24d19b8dfad794a466164e'</form>
				
				<div class='clear'></div>
			</ul>

			<ul class='phone-create phone' style='display:none'>
				<form action="">
					<li class='prz'>
						<label>手机号</label>
						<div class='input-warp'>
							<input type="text" name="" class='intext' maxlength='11' placeholder='请输入您的手机号' />

							<p class='tips error'>
								<i class='pop-icon'></i>
							</p>
						</div>
					</li>

					<li>
						<label>验证码</label>
						<div class='input-warp'>
							<input type="text" name="" class='intext yzm' maxlength='4' placeholder='右侧验证码' />

							<p class='tips error'>
								<i class='pop-icon'></i>
							</p>

							<img src="" alt="验证码" class='yzmimg' width='72' height='36' />
							<a href="" class='yzmlink'>换一张？</a>
						</div>
					</li>

					<li class='button'>
						<div class='inbutton-warp'>
							<input type="button" value="获取动态码" class='inbutton' maxlength="6"/>
							<p class='tips'>
								<i class='post-icon'></i>
								已发送
							</p>
						</div>
					</li>

					<li>
						<label>动态码</label>
						<div class='input-warp'>
							<i class='password-icon'></i>
							<input type="password" name="" class='intext' placeholder='请输入您手机获得的动态码' maxlength='4' />
						</div>
					</li>

					<li>
						<label>密码</label>
						<div class='input-warp'>
							<input type="text" name="" class='intext' maxlength='20' placeholder='请输入6至20位的数字、字母组合' />

							<p class='tips error'>
								<i class='pop-icon'></i>
							</p>
							<div class='security-level'>
								<span class='block1'>危险</span>
								<span class='block2'>适中</span>
								<span class='block3'>安全</span>
							</div>
						</div>
					</li>

					<li>
						<label>确认密码</label>
						<div class='input-warp'>
							<input type="text" name="" class='intext' maxlength='20' placeholder='请再次输入密码' />
							<p class='tips error'>
								<i class='pop-icon'></i>
							</p>
						</div>
					</li>

					<li class='checkbox'>
						<label>
							<input type="checkbox" name="" checked='checked'/>
							<span>我已阅读并接受</span>
							<a href="">《拉手网用户协议》</a>
						</label>
					</li>

					<li>
						<div class='input-warp'>
							<input type="submit" value="注册" class='insubmit' />
							<p class='tips'>
								<i class='pop-icon'></i>
								<span>您还未接受拉手用户协议</span>
							</p>
						</div>
					</li>
				<input type='hidden' name='__TOKEN__' value='ed567ebdcf24d19b8dfad794a466164e'</form>
			</ul>
			<div class='clear'></div>
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
