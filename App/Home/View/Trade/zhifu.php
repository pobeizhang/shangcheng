<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			拉手网北京站-超人气团购网站-北京团购大全
		</title>
		<link rel="shortcut icon" href="http://www.lashou.com/favicon.ico">
		<link rel="Bookmark" href="http://www.lashou.com/favicon.ico">
		<script type="text/javascript" src="http://f2.lashouimg.com//public/js/lib/jquery.js"></script>
		<script type="text/javascript">var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-15429888-1']);
_gaq.push(['_setDomainName', '.lashou.com']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_setAllowHash', false]);
_gaq.push(['_addOrganic', 'baidu', 'word']);
_gaq.push(['_addOrganic', 'm.baidu', 'word']);
_gaq.push(['_addOrganic', 'soso', 'w']);
_gaq.push(['_addOrganic', 'so', 'q']);
_gaq.push(['_addOrganic', 'bing', 'q']);
_gaq.push(['_addOrganic', 'yodao', 'q']);
_gaq.push(['_addOrganic', 'sogou', 'query']);
_gaq.push(['_trackPageview']);</script>
		<script type="text/javascript">//<![CDATA[
(function() {
	if (window.top !== window.self) {
		try {
			if (window.top.location.host.indexOf('lashou.com')) {} else {
				setTimeout(function() {
					window.top.location = window.self.location;
					document.body.innerHTML = '';
				}, 0);
				window.self.onload = function() {
					document.body.innerHTML = '';
				};
			}
		} catch (e) {
			try {
				setTimeout(function() {
					window.top.location = window.self.location;
					document.body.innerHTML = '';
				}, 0);
				window.self.onload = function() {
					document.body.innerHTML = '';
				};
			} catch (e) {}
		}
	}
})();
//]]>
</script>
		<link rel="stylesheet" type="text/css" href="{{__PUBLIC__}}/Home/css/buy1.css">
		<link rel="stylesheet" type="text/css" href="{{__PUBLIC__}}/Home/css/buy2.css">
		<link rel="stylesheet" href="{{__PUBLIC__}}/Home/css/index.css" />
	</head>
	<body>
		<header id="header">
			<div class='header-topbg'>
				<div class='header-top'>
					<ul class='top-left'>
						<li><a href="">收藏拉手网</a></li>
						<li>|</li>
						<li><a href="">帮助</a></li>
						<li>|</li>
						<li><a href="">反馈</a></li>
					</ul>

					<ul class='top-right'>
						{{if value="isset($_SESSION['preusername'])"}}
						<li class="top-right-li">
							<a href="" class='login-link'>{{$_SESSION['preusername']}}</a>
						</li>
						<li class="top-right-li">
							<a href="">
								<img src="{{__PUBLIC__}}/Home/images/level0.png" alt="" />
							</a>
						</li>
						{{endif}}
						<li class='top-right-li padli gouwucar' style="cursor:default;">
							<p>
								<em class='shop-icon'></em>
								<em>购物车(<b>{{if value="isset($_SESSION['cart'])"}}{{count($_SESSION['cart'])}}{{else}}0{{endif}}</b>)</em>
								<i class='triangle'></i>
							</p>
							{{if value="isset($_SESSION['cart'])"}}
							<ul class='htul'>
								<div class='history-cover' style="width:128px"></div>
								{{foreach from="$_SESSION['goodinfo']" key="$k" value="$v"}}
								<li>
									<a href="" class='flimg'>
										<img style="width: 66px;height: 42px;" src="{{$v['pic']}}" alt="" />
									</a>
									<p>
										<a href="" class='tit'>{{$v['gname']}}</a>
										<span>¥{{$v['shopprice']}}</span>
										<a href="{{U('Home/ShoppingCart/delCart',array('index'=>$v['cartIndex']))}}" class=del>删除</a>
									</p>
								</li>
								{{endforeach}}
								<li class='shopcart-but'>
									<a href="{{U('Home/ShoppingCart/shoppingCart')}}">去购物车并结算</a>
								</li>
							</ul>
							{{endif}}
						</li>

						<li class='top-right-li dropdown-history padli'>
							<p>
								<em>最近浏览</em>
								<i class='triangle'></i>
							</p>
							<ul class='htul'>
								<div class='history-cover'></div>
								<!-- <li class='history-empty'><em>您还没有浏览记录！</em></li> -->
								<li>
									<a href="" class='flimg'>
										<img src="{{__PUBLIC__}}/Home/images/gw.jpg" alt="" />
									</a>
									<p>
										<a href="" class='tit'>单人铁板烧自助餐，午餐/晚餐通用，提供免费WiFi</a>
										<span>¥138</span>
									</p>
								</li>
								<li class='shopcart-but'>
									<a href="">清空浏览记录</a>
								</li>
							</ul>
						</li>

						<li class='top-right-li padli my-lashou-li'>
							<p>
								<em><a href="">我的拉手</a></em>
								<i class='triangle'></i>
							</p>
							<ul class='my-lashou'>
								<div class='history-cover' style="position:absolute;left:0px;"></div>
								<li><a href="{{U('Home/Member/my_orders')}}">我的订单</a></li>
								<li><a href="{{U('Home/Member/my_collections')}}">我的收藏</a></li>
								<li><a href="{{U('Home/Member/my_address')}}">常用地址</a></li>
								<li><a href="{{U('Home/Member/my_bills')}}">拉手账本</a></li>
								<li><a href="{{U('Home/Member/my_setting')}}">账户设置</a></li>
								<li><a href="{{U('Home/Member/my_news')}}">我的消息</a></li>
							</ul>
						</li>
						{{if value="!isset($_SESSION['preusername'])"}}
						<li class='top-right-li'>
							<a href="{{U('Home/Login/login')}}">[登录]</a>
						</li>
						
						<li class='top-right-li'>
							<a href="{{U('Home/Register/register')}}">[注册]</a>
						</li>
						{{else}}
						 <li class='top-right-li'>
							<a href="{{U('Home/Login/outLogin')}}">[退出]</a>
						</li> 
						{{endif}}
					</ul>
				</div>
			</div>
			<div class="header-bottom cl">
				<div class="logo">
					<h1>
						拉手网
					</h1>
					<a href="{{U('Home/Index/index')}}">
						<img src="{{__PUBLIC__}}/Home/images/logo.png" alt="欢聚拉手，快乐生活" title="欢聚拉手，快乐生活" height="68" width="127">
					</a>
				</div>
				<div class="commitment">
					<a href="#" target="_blank">
						<img src="{{__PUBLIC__}}/Home/images/commitment.png" height="45" width="187">
					</a>
				</div>
			</div>
		</header>
		<div class="narrow-main">
			<div class="narrow-content">
				<div class="narrow-step">
					<p class="step-begin current">
						<span><small>1.</small>提交订单</span>
						<em>
						</em>
						<i class="narrow-icon">
						</i>
					</p>
					<p class="current">
						<span><small>2.</small>去支付</span>
						<em>
						</em>
						<i class="narrow-icon">
						</i>
						<em>
						</em>
					</p>
					<p class="step-end current">
						<span><small>3.</small>完成</span>
						<em>
						</em>
						<i class="narrow-icon">
						</i>
					</p>
				</div>
				<br /><br />
				<h1 style="margin-left: 280px;font-size: 38px;">恭喜你Y(^_^)Y已完成支付</h1>
				<br /><br />
				<a style="margin-left: 420px;font-size: 26px;"href="{{U('Home/Index/index')}}">继续购物</a>
			</div>
		</div>
		<footer id="footer">
			<div class="footer-top">
				<div class="site-info">
					<dl>
						<dt>
							服务保障
						</dt>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/faq.php?act=promise" rel="nofollow">
								团购三包
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/faq.php?act=server" rel="nofollow">
								退换货服务
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/faq.php?act=zhifu" rel="nofollow">
								支付方式
							</a>
						</dd>
					</dl>
					<dl>
						<dt>
							用户帮助
						</dt>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/feedback.php" rel="nofollow">
								答疑反馈
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/faq.php" rel="nofollow">
								常见问题
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://beijing.lashou.com/hot_deals" rel="nofollow">
								往期团购
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/event/lottery_form.php" rel="nofollow">
								抽奖活动
							</a>
						</dd>
					</dl>
					<dl>
						<dt>
							商务合作
						</dt>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/stores/commit/index" rel="nofollow">
								团购合作
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/open.php?page=api" rel="nofollow">
								开放API
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://union.lashou.com" target="_blank">
								拉手网联盟
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/need/ad/hezuo.php">
								友情链接
							</a>
						</dd>
					</dl>
					<dl>
						<dt>
							公司信息
						</dt>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.sanpowergroup.com" target="_blank" rel="nofollow">
								三胞集团
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/about.php" rel="nofollow">
								关于拉手
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/job.php" rel="nofollow">
								加入我们
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://www.lashou.com/rule.php" rel="nofollow">
								法律声明
							</a>
						</dd>
					</dl>
					<dl>
						<dt>
							移动拉手
						</dt>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://mobile.lashou.com/client_buy.html" target="_blank">
								拉手团购APP
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://mobile.lashou.com/client_hotel.html" target="_blank" rel="nofollow">
								拉手酒店预订APP
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://mobile.lashou.com/client_movie.html" target="_blank" rel="nofollow">
								拉手电影APP
							</a>
						</dd>
						<dd>
							<i class="site-icon">
							</i>
							<a href="http://m.lashou.com/" target="_blank" rel="nofollow">
								拉手网wap版
							</a>
						</dd>
					</dl>
					<div class="phone">
						<img src="http://s2.lashouimg.com//public/images/index/footer-phone.png" alt="全国统一客服电话(免长途费)4000-517-317" height="110" width="167">
					</div>
					<div class="clr">
					</div>
				</div>
			</div>
			<div class="attest">
				<a class="attest01" href="http://www.lashou.com/need/ad/chengxin.php" rel="nofollow" target="_blank" title="中国商务信用平台信用网站认证">
				</a>
				<a class="attest02" href="http://www.lashou.com/need/ad/chengxin.php#renzheng" rel="nofollow" target="_blank" title="企业信用评级证书">
				</a>
				<a class="attest04" href="http://www.lashou.com/need/ad/chengxin.php#cft" rel="nofollow" target="_blank" title="财付通诚信商家">
				</a>
				<a class="attest06" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202013081300003" rel="nofollow" target="_blank" title="经营性网站备案信息">
				</a>
				<a class="attest07" href="https://search.szfw.org/cert/l/CX20150626010508010630" rel="nofollow" target="_blank" title="诚信网站">
				</a>
			</div>
			<p class="copyright">
				©
				<script>document.write(new Date().getFullYear());</script>2015　北京拉手网络技术有限公司　LaShou.com　京ICP证100571号　京ICP备11004895号　京公网安备110105001181号
			</p>
		</footer>
		<div class="scroll-block" id="go-top">
			<a href="javascript:void(0);" class="gotop newga ga" t="分类导航" p="右侧浮动导航" ga_t="回到顶部">
				<i class="scroll-icon">
				</i>
			</a>
		</div>
		<script type="text/javascript">var is_showcode_pop = '';
$(function() {
	$('a[tracknum]').bind('click', function() {
		var pos = $(this).attr('tracknum');
		if (pos) {
			document.cookie = "pos=" + pos + ";path=/;";
		}
	});
	$('input.filter-but[tracknum]').bind('click', function() {
		var pos = $(this).attr('tracknum');
		if (pos) {
			document.cookie = "pos=" + pos + ";path=/;";
		}
	});
});</script>
		<div class="pop" id="product-type">
			<a href="javascript:void(0);" class="pop-close">
			</a>
			<div class="pop-border">
			</div>
			<div class="pop-main">
				<div class="pop-title">
				</div>
				<dl class="type-branch">
				</dl>
				<div class="tb-button">
					<input value="确 定" type="submit">
				</div>
			</div>
		</div>
		<div class="pop" id="feedback">
			<a href="javascript:void(0);" onclick="payPassObj.pophide()" class="pop-close">
			</a>
			<div class="pop-border">
			</div>
			<div class="pop-main">
				<div class="pop-title">
					在新打开的页面上完成付款！
				</div>
				<div class="feedback">
					<p>
						<i class="icon01">
						</i><span>如已经支付成功，请点击</span>
						<a class="red" href="/account/orders/type2/">
							已完成付款
						</a>
					</p>
					<p>
						<i class="icon02">
						</i><span>如付款遇到问题，您可以</span>
						<a class="gray" href="javascript:void(0);" onclick="payPassObj.pophide()">
							重新支付
						</a><em>或</em>
						<a class="gray" href="javascript:void(0);" onclick="payPassObj.pophide()">
							选择其他支付方式
						</a>
					</p>
					<div class="question">
						<a href="/faq.php?act=zhifuwenti" target="_blank">
							支付常见问题
						</a><span>|</span>客服电话：4000-517-317
					</div>
				</div>
			</div>
		</div>
		<script>var payPass = '';
var buyTime = '2015-11-23 02:45:57';
var nowTime = '1448218712';
var spike = '';
var gacity = '';
var uid = '76385226';
$(function() {
	setCookie('refresh', 1, 1000 * 60 * 60, 1, null);
	var pay = new Pay();
	pay.init();
	//统计页面流量，购买商品种类
	var ga_info = {
		"addItems": [
			["1162648488w4c7ae7957", "11626484", "\u73e0\u6d77\u4e2d\u6fb3\u65c5\u884c\u793e\u6709\u9650\u516c\u53f8\u91d1\u6e7e\u8425\u4e1a\u90e8|\u6ca8\u7af9\u5e73\u65e5\u513f\u7ae5\u5355\u4eba\u81ea\u52a9\u665a\u9910", "\u81ea\u52a9\u9910|\u7f8e\u98df", "102.00", "1"]
		],
		"setCustomVar": 1,
		"addTrans": ["1162648488w4c7ae7957", "\u62c9\u624b\u7f51", "102.00", "0", "0.00", "\u5317\u4eac", "\u5317\u4eac", "\u4e2d\u56fd"]
	};
	var _setCustomVar = ga_info.setCustomVar == 1 ? "首次购买" : "多次购买";
	var _addTrans = ga_info.addTrans;
	var _addItems = ga_info.addItems;
	if (_addTrans) {
		_gaq.push(['_addTrans', _addTrans[0], _addTrans[5], _addTrans[2], _addTrans[3], _addTrans[4], _addTrans[5], _addTrans[6], _addTrans[7]]);
	}
	if (_addItems && _addTrans) {
		for (i = 0; i < _addItems.length; i++) {
			_gaq.push(['_addItem', _addItems[i][0], _addItems[i][1], (_addTrans[5] ? _addTrans[5] : "未知") + "|" + _addItems[i][2], _addItems[i][3], _addItems[i][4], _addItems[i][5]]);
		}
	}
	_gaq.push(['_trackTrans']);
});</script>
		<script type="text/javascript" src="http://f2.lashouimg.com//public/js/base/base_8aebc17.js"></script>
		<script type="text/javascript" src="http://f2.lashouimg.com//public/js/base/common_f494340.js"></script>
		<script type="text/javascript" src="http://f2.lashouimg.com//public/js/data/buy_addr_a13b219.js"></script>
		<script type="text/javascript" src="http://f2.lashouimg.com//public/js/buy_263962f.js"></script>
		<script type="text/javascript" src="http://f2.lashouimg.com//public/js/base/ga_751f342.js"></script>
	</body>
</html>