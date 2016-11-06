<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<title>拉手网北京站-超人气团购网站-北京团购大全</title>
		<link rel="shortout icon" href="<?php echo __PUBLIC__?>/Home/images/favicon.ico" />
		<link rel="alternate" type="application/rss+xml" href="http://www.lashou.com/rss.php?cityid=2419" title="RSS">
		<link href="<?php echo __PUBLIC__?>/Home/css/my_news1.css" rel="stylesheet" type="text/css">
		<link href="<?php echo __PUBLIC__?>/Home/css/my_news2.css" rel="stylesheet" type="text/css">
		<!-- <script src="http://cpro.baidu.com/cpro/ui/rt.js" async="" type="text/javascript"></script> -->
		<!-- <script src="http://stats.g.doubleclick.net/dc.js" async="" type="text/javascript"></script> -->
		<!-- <script src="http://d1.lashouimg.com/static/js/release/jquery-1.4.2.min.js" type="text/javascript"></script> -->
		<!-- <script src="http://d2.lashouimg.com/static/js/release/base18-min.js" type="text/javascript"></script> -->
	</head>

	<body>
		<!-- header -->
		<div id="header">
			<div class="hdt-wrap">
				<div class="hdt">
					<h1>拉手网</h1>
					<div class="logo">
						<a href="">
							<img src="http://d2.lashouimg.com/static/img/index/logo02.png" alt="欢聚拉手，快乐生活" title="欢聚拉手，快乐生活" height="72" width="130">
						</a>
					</div>
					<div class="city">
						<h2>北京</h2>
						<a href="">切换城市<i class="tri4"></i></a>
					</div>
					<div class="hdc">
						<div class="hdi">
							<div class="login">
								<span class="left"></span>
								<strong><a href="/account/orders/"><?php echo $_SESSION['preusername']?></a></strong>
								<div class="shopcart">
									<em class="text">
									<p class="fr">购物车(<b><?php if(isset($_SESSION['cart'])){?>
                
											<?php echo count($_SESSION['cart'])?>
										<?php }else{?>
											0
										
               <?php }?></b>)</p>
								<em class="sc-icon"></em>
									<i class="tri4"></i>
									</em>
									<div class="shopcart-cen">
										<ul class="htul">
										</ul>
										<div class="shopcart-but">
											<em class="fl">购物车里还有2种商品</em>
											<a href="#">去购物车并结算</a>
										</div>
									</div>
								</div>
								<div class="history">
									<em class="text">最近浏览<i class="tri4"></i></em>
									<ul class="htul">

									</ul>
								</div>
								<div class="myls">
									<a href="" class="mylst">我的拉手<i class="tri4"></i></a>
									<p>
										<a href="">我的订单</a>
										<a href="">我的收藏</a>
										<a href="">常用地址</a>
										<a href="">拉手账本</a>
										<a href="">账户设置</a>
										<a href="">我的消息</a>
									</p>
								</div>
								<a class="loga" href="http://www.lashou.com/account/logout/?from_url=%2Faccount%2Flogin">[退出]</a>
								<div class="news" style="display:none;"></div>
							</div>
							<ul class="hdiul">
								<li><a id="AddFavorite" href="javascript:void(0)">收藏拉手网</a><span></span></li>
								<li><a target="_blank" href="/faq.php">帮助</a><span></span></li>
								<li><a target="_blank" href="http://www.lashou.com/feedback.php">反馈</a></li>
							</ul>
						</div>
						<a class="hdc-commitment" href="/faq.php?act=promise" target="_blank"></a>
						<form action="/search.php" method="get" id="searchform" onsubmit="return new_checksubmit()">
							<div class="search">
								<span class="scv">自助餐</span>
								<input x-webkit-speech="" id="sw" name="sw" class="sct ac_input" autocomplete="off" maxlength="26" value="" lang="zh-CN" type="text">
								<input name="cityid" value="2419" type="hidden">
								<input value="搜索" class="scb" type="submit">
								<div class="search-text" id="searchcookie">
									<div class="search-history"><span>您最近的搜索词</span><a href="javascript:void(0);">清空记录</a></div>
									<ul>
									</ul>
								</div>
							</div>
						<input type='hidden' name='__TOKEN__' value='f26a7d86cfbd366ca8d20c7d35b44b1e'</form>
					</div>
				</div>
			</div>

			<div class="nav-wrap">
				<div class="nav newga ga" p="首页列表或其他">
					<a tracknum="39000" href="" class="lashou"><span>团购</span></a>
					<a tracknum="39001" href="" class="lashou"><span>身边团购</span></a>
					<a tracknum="39002" href="" class="lashou"><span>美食</span></a>

					<a href=""><span>电影</span></a>
					<a href=""><span>KTV</span></a>
					<a tracknum="39005" href=""><span>酒店</span></a>
					<a tracknum="39005" href=""><span>旅游</span></a>
					<a tracknum="39006" href="" class="lashou"><span>购物</span></a>

					<a tracknum="39007" href="" class="lashou"><span>超值购</span><i class="hot-icon"></i></a>

					<a tracknum="39010" class="mobile" href="" target="_blank">手机上拉手</a>
				</div>
			</div>
		</div>
		<!-- header end -->
		<!-- <script src="http://d1.lashouimg.com/static/js/release/order16.js" type="text/javascript"></script> -->
		<!-- <script src="http://d2.lashouimg.com/public/js/bank_addr_c77e4e8.js" type="text/javascript"></script> -->
		<!-- main -->
		<div id="main">
			<div class="myls-left">
				<div class="myls-title">
					<a class="select nolink" href="#">我的订单</a>
					<!--<a href="/account/codes/">我的拉手券</a>-->
					<a href="<?php echo U('Home/Member/my_collections')?>">我的收藏</a>
					<a href="<?php echo U('Home/Member/my_bills')?>">拉手账本</a>
					<a href="<?php echo U('Home/Member/my_setting')?>">账户设置</a>
					<a href="<?php echo U('Home/Member/my_news')?>">我的消息</a>
				</div>
				<div class="myls-lc">
					<h3>
						<span class="fl">我的订单</span>
						<ul class="fr">
							<li class="nobg selcet"><a href=""><span>团购订单</span></a><em></em></li>
							<li><a href=""><span>电影预订单</span></a><em></em></li>
							<li><a href=""><span>酒店预订单</span></a><em></em></li>
							<li><a href=""><span>我的机票订单</span></a><em></em></li>
						</ul>
					</h3>
					<div class="myls-lct">
						<form method="post" id="form" action="<?php echo U('Home/Member/my_orders')?>">
							<div class="subsort">
								<a href="" class="select">未付款(<?php echo $error?>)</a>
								<span>|</span>
								<a href="<?php echo U('Home/Member/my_payed')?>">已付款(<?php echo $success?>)</a>
								<span>|</span>
								<!-- <a href="">已取消</a> -->

								<!-- <input class="all_selector" id="all_selector" checked="" type="checkbox"> -->
								<!-- <label for="all_selector">全选</label> -->
								<!-- <input class="mybut but08" value="合并付款" id="btn" type="submit"> -->
							</div>
							<div class="orders-tit">
								<table class="order-tab">
									<tbody>
										<tr>
											<th class="left">团购项目</th>
											<th>数量</th>
											<th>实付款</th>
											<th>状态</th>
											<th>操作</th>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="less-orders">
								<table class="order-tab">
									<tbody>
										<?php foreach ($orders as $k=>$v){?>
										<?php if($v['status']=='未付款'){?>
                
										<tr>
											<td class="left">
												<div class="order-info">
													<!-- <input name="trade_no[]" value="<?php echo $k?>" checked="" type="checkbox"> -->
													<a class="orders-img" href="#">
														<img src="<?php echo $v['pic']?>" height="54" width="85">
													</a>
													<p>
														<a href="#" title="<?php echo $v['gname']?>"><?php echo $v['gname']?></a>
														<br>订单号：<?php echo $v['number']?>
													</p>
												</div>
											</td>
											<td><?php echo $v['quantity']?></td>
											<td>¥<?php echo $v['subtotal']?></td>
											<input type="hidden" name="account[]" value="<?php echo $v['subtotal']?>" />
											<td>
												<span class="clr01"><?php echo $v['status']?></span>
											</td>
											<td>
												<p>
													<a class="order-but" href="<?php echo U('Home/Member/oneGoodPay',array('oid'=>$v['oid'],'account'=>$v['subtotal']))?>">支付</a>
												</p>
												<p>
													<!-- <a href="javascript:;">取消</a> -->
												</p>
											</td>
										</tr>
										
               <?php }?>
										<?php }?>
									</tbody>
								</table>
							</div>
						<input type='hidden' name='__TOKEN__' value='f26a7d86cfbd366ca8d20c7d35b44b1e'</form>
					</div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="myls-right">
				<div class="myls-rwarp myls-rwarptop">
					<div class="myls-title">
						<h4>我的账户</h4></div>
					<div class="myls-account">
						<!-- <span class="myls-accountbg"></span> -->
						<img src="./Public/Home/images/dulei.JPG" style="width: 100px;margin-right: 20px" alt="" />
						<p>购买成功：<span><?php echo $numbers?></span>份</p>
						<p class="line">总共节省：<span>¥&nbsp;0</span></p>
						<p><a href="">账户余额</a>：<span>¥&nbsp;<?php echo $account?></span></p>
						<p><a href="">抵&nbsp;用&nbsp;券</a>：<span>0</span>张</p>
					</div>
				</div>
				<div class="myls-rwarp">
					<a href="" target="_blank"><img src="http://d2.lashouimg.com/static/img/myls/cj.png" height="97" width="236"></a>
					<span class="cj"></span>
				</div>
				<div class="myls-rwarp">
					<dl class="myls-rqa">
						<dt class="line" style="color: #EA4800;">评价返利调整通知</dt>
						<dd>亲爱的用户：
							<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;拉手网评价返利于2014年4月21日结束，今后将推出更多回馈新老用户的优惠活动。 </dd>
						<dt class="line">我已支付成功，为什么没有拉手券？</dt>
						<dd>1）短信可能有延迟，您可以到订单详情中查看拉手券和密码，可重新发送短信。
							<br>2）如果订单详情中没有拉手券，那是因为还没有达到最低成团人数，一旦凑够人数，您就会看到拉手券了。</dd>
						<dt class="line">什么是已过期订单？</dt>
						<dd>如果某个订单未及时付款，那么等团购结束时就无法再付款了，这种订单就是过期订单。</dd>
						<dt class="line">账户安全提示</dt>
						<dd>拉手网提示您保管好个人及账户信息，提防钓鱼网站，定期查杀个人电脑病毒与木马，尽量不在公共电脑登录拉手网。切勿随便向他人透露自己的账号密码等信息，以免账户被盗造成不必要的损失。详情请参见<a href="/xieyi.php" target="_blank">《拉手网用户协议》</a>第三项（用户的基本义务）中第3.4、3.5、3.6条。</dd>
					</dl>
				</div>
			</div>
			<div class="clr"></div>
		</div>
		<!-- footer -->
		<div id="footer">
			<div class="ftl-warp">
				<div class="ftl">
					<dl>
						<dt>服务保障</dt>
						<dd><a href="http://www.lashou.com/faq.php?act=promise" rel="nofollow">团购三包</a></dd>
						<dd><a href="http://www.lashou.com/faq.php?act=server" rel="nofollow">退换货服务</a></dd>
						<dd><a href="http://www.lashou.com/faq.php?act=zhifu" rel="nofollow">支付方式</a></dd>
					</dl>
					<dl>
						<dt>用户帮助</dt>
						<dd><a href="http://www.lashou.com/feedback.php" rel="nofollow">答疑反馈</a></dd>
						<dd><a href="http://www.lashou.com/faq.php" rel="nofollow">常见问题</a></dd>
						<dd><a href="http://beijing.lashou.com/hot_deals" rel="nofollow">往期团购</a></dd>
						<dd><a href="http://www.lashou.com/event/lottery_form.php" rel="nofollow">抽奖活动</a></dd>
					</dl>
					<dl>
						<dt>商务合作</dt>
						<dd><a href="http://www.lashou.com/stores/commit/index" rel="nofollow">团购合作</a></dd>
						<dd><a href="http://www.lashou.com/open.php?page=api" rel="nofollow">开放API</a></dd>
						<dd><a href="http://union.lashou.com" target="_blank">拉手网联盟</a></dd>
						<dd><a href="http://www.lashou.com/need/ad/hezuo.php">友情链接</a></dd>
					</dl>
					<dl>
						<dt>公司信息</dt>
						<dd><a href="http://www.sanpowergroup.com" target="_blank" rel="nofollow">三胞集团</a></dd>
						<dd><a href="http://www.lashou.com/about.php" rel="nofollow">关于拉手</a></dd>
						<dd><a href="http://www.lashou.com/job.php" rel="nofollow">加入我们</a></dd>
						<dd><a href="http://www.lashou.com/rule.php" rel="nofollow">法律中心</a></dd>
					</dl>
					<dl>
						<dt>移动拉手</dt>
						<dd><a href="http://mobile.lashou.com/client_buy.html" target="_blank">拉手团购APP</a></dd>
						<dd><a href="http://mobile.lashou.com/client_hotel.html" target="_blank" rel="nofollow">拉手酒店预订APP</a></dd>
						<dd><a href="http://mobile.lashou.com/client_movie.html" target="_blank" rel="nofollow">拉手电影APP</a></dd>
						<dd><a href="http://m.lashou.com/" target="_blank" rel="nofollow">拉手网wap版</a></dd>
					</dl>
					<div class="phone">
						<span><em>全国统一客服电话(免长途费)4000-517-317</em></span>
					</div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="attest">
				<a class="attest01" href="http://www.lashou.com/need/ad/chengxin.php" rel="nofollow" target="_blank" title="中国商务信用平台信用网站认证"></a>
				<a class="attest02" href="http://www.lashou.com/need/ad/chengxin.php#renzheng" rel="nofollow" target="_blank" title="企业信用评级证书"></a>
				<a class="attest04" href="http://www.lashou.com/need/ad/chengxin.php#cft" rel="nofollow" target="_blank" title="财付通诚信商家"></a>
				<a class="attest06" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202013081300003" rel="nofollow" target="_blank" title="经营性网站备案信息"></a>
				<a class="attest07" href="https://search.szfw.org/cert/l/CX20150626010508010630" rel="nofollow" style="background: url('http://d2.lashouimg.com/static/img/index/attest_f7b1066.png') no-repeat -223px -41px; width: 114px;" target="_blank" title="诚信网站"></a>
			</div>
			<p class="copyright">©&nbsp;&nbsp;
				<script>
					document.write(new Date().getFullYear());
				</script>2015&nbsp;&nbsp;北京拉手网络技术有限公司&nbsp;&nbsp;LaShou.com&nbsp;&nbsp;京ICP证100571号&nbsp;&nbsp;京ICP备11004895号&nbsp;&nbsp;京公网安备110105001181号</p>
		</div>

		<!-- 购物车 -->
		<!-- 购物车end -->

		<!-- footer end -->
	</body>

</html>