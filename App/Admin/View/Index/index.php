<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<!-- bootstrap样式写在最上边，因为写在下边的话会将自己的样式文件中的样式覆盖掉 -->
	<link rel="stylesheet" href="{{__PUBLIC__}}/Admin/Bootstrap/Css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="{{__PUBLIC__}}/Admin/Css/index.css" />
	<script type="text/javascript" src="{{__PUBLIC__}}/Admin/Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="{{__PUBLIC__}}/Admin/Js/index.js"></script>
	<base target="con"/>
</head>
<body>
	{{if value="$_SESSION['welcome']==0"}}
	<div id="hello"><p>欢 迎 来 到</p> <p>拉手网</p> <p>后 台 管 理 系 统</p></div>
	<?php $_SESSION['welcome']=1?>
	{{endif}}
	<div id="top">
		<div id="logo">拉手网 后台管理中心</div>
		<p id="welcome"><i></i>欢迎您<b>{{$_SESSION['username']}}</b><span>今天是{{date('Y-m-d H:i:s',time())}} 星期五</span></p>
		<a href="{{U('Admin/Login/edit')}}" id="edit" target="_self" style='margin-left: 20px;'>修改密码</a>
		{{if value="$_SESSION['username']=='root'"}}
		<a href="{{U('Admin/Login/open')}}" id="open" target="_self" style='margin-left: 20px;'>开通新账号</a>
		{{endif}}
		<a href="{{U('Admin/Login/loginOut')}}" id="logout" target="_self">安全退出</a>
		<a href="#" id="help">帮助中心</a>
		<a href="{{U('Home/Index/index')}}" id="index" target="_blank">网站首页</a>
	</div>
	<div id="nav">
		<p>
			<a href="{{U('Admin/Index/info')}}" class="nav_cur" path="后台首页">后台首页</a>
			<a href="{{U('Admin/Goods/index')}}" path="商品管理">商品管理</a>
			<a href="{{U('Admin/Orders/orders')}}" path="订单管理">订单管理</a>
			<a href="" path="评论管理">评论管理</a>
			<a href="" path="广告管理">广告管理</a>
			<a href="" path="用户管理">用户管理</a>
			<a href="" path="系统设置">系统设置</a>
		</p>
	</div>
	<div id="left">
		<h2>后台首页</h2>
		<div id="item">
			<dl class="item_cur">
				<dt>系统信息</dt>
				<dd>
					<ul>
						<li><a href="{{U('Admin/Index/info')}}" path="后台首页 > 系统信息">系统信息</a></li>
					</ul>
				</dd>
				<dt>管理员信息</dt>
				<dd>
					<ul>
						<li><a href="{{U('Admin/Index/info')}}" path="后台首页 > 管理员信息">管理员信息</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>商品管理</dt>
				<dd>
					<ul>
						<li><a href="{{U('Admin/Goods/index')}}" path="商品管理 > 商品列表">商品列表</a></li>
						<li><a href="{{U('Admin/Goods/add')}}" path="商品管理 > 添加商品">添加商品</a></li>
					</ul>
				</dd>
				<dt>品牌管理</dt>
				<dd>
					<ul>
						<li><a href="{{U('Admin/Brand/brand')}}" path="商品管理 > 品牌管理 > 品牌列表">品牌列表</a></li>
						<li><a href="{{U('Admin/Brand/addBrand')}}" path="商品管理 > 品牌管理 > 添加品牌">添加品牌</a></li>
					</ul>
				</dd>
				<dt>分类管理</dt>
				<dd>
					<ul>
						<li><a href="{{U('Admin/Category/category')}}" path="商品管理 > 分类管理 > 分类列表">分类列表</a></li>
						<li><a href="{{U('Admin/Category/addCategory')}}" path="商品管理 > 分类管理 > 添加分类">添加分类</a></li>
					</ul>
				</dd>
				<dt>类型管理</dt>
				<dd>
					<ul>
						<li><a href="{{U('Admin/ShopType/shopType')}}" path="商品管理 > 类型管理 > 类型列表">类型列表</a></li>
						<li><a href="{{U('Admin/ShopType/addType')}}" path="商品管理 > 类型管理 > 添加类型">添加类型</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>生成静态</dt>
				<dd>
					<ul>
						<li><a href="" path="生成静态 > 首页静态">首页静态</a></li>
						<li><a href="" path="生成静态 > 列表页静态">列表页静态</a></li>
						<li><a href="" path="生成静态 > 内容页静态">内容页静态</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>数据备份</dt>
				<dd>
					<ul>
						<li><a href="#" path="数据备份 > 数据备份">数据备份</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>网站配置</dt>
				<dd>
					<ul>
						<li><a href="#" path="网站配置 > 网站配置">网站配置</a></li>
					</ul>
				</dd>
			</dl>
		</div>
	</div>
	<div id="right">
		<div id="path">
			您当前的位置是：<span>后台首页</span>
			<button id="back" class="btn btn-primary"><i class="icon-arrow-left icon-white"></i>返回上一步</button>
		</div>
		<div id="iframe">
			<iframe name="con" src="{{U('Admin/Index/info')}}" frameborder="0"></iframe>
		</div>
	</div>
	<div id="bottom">Copyright &copy; 2013-2014 ccSHOP All Rights Reserved.</div>
</body>
</html>