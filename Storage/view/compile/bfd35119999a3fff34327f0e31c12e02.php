<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<title>拉手网北京站-超人气团购网站-北京团购大全</title>
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="Bookmark" href="http://www.lashou.com/favicon.ico">
		<link rel="alternate" type="application/rss+xml" href="http://www.lashou.com/rss.php?cityid=2419" title="RSS">
		<link href="<?php echo __PUBLIC__?>/Home/css/my_news1.css" rel="stylesheet" type="text/css">
		<link href="<?php echo __PUBLIC__?>/Home/css/my_news2.css" rel="stylesheet" type="text/css">
		<!-- <script src="http://cpro.baidu.com/cpro/ui/rt.js" async="" type="text/javascript"></script> -->
		<!-- <script src="http://stats.g.doubleclick.net/dc.js" async="" type="text/javascript"></script> -->
		<!-- <script src="http://d2.lashouimg.com/static/js/release/jquery-1.4.2.min.js" type="text/javascript"></script> -->
		<!-- <script src="http://d1.lashouimg.com/static/js/release/base18-min.js" type="text/javascript"></script> -->
		<!--[if IE 6]>
<SCRIPT src="http://d2.lashouimg.com/static/js/release/iepng.js"></SCRIPT>
<script type="text/javascript">
	DD_belatedPNG.fix('.iepng,content-list li a.new,.prodetail h4 span,.prodetail h4 div,.prodetail ul li,.prodetail ul,.new_h2_1 h2 strong,.life-brandico');
</script>
<![endif]-->
	</head>

	<body>
		<!-- header -->
		<div id="header">
			<div class="hdt-wrap">
				<div class="hdt">
					<h1>拉手网</h1>
					<div class="logo">
						<a href="http://beijing.lashou.com"><img src="http://d1.lashouimg.com/static/img/index/logo02.png" alt="欢聚拉手，快乐生活" title="欢聚拉手，快乐生活" height="72" width="130"></a>
					</div>
					<div class="city">
						<h2>北京</h2>
						<a href="http://www.lashou.com/changecity">切换城市<i class="tri4"></i></a>
						<p class="weather"><img src="http://s2.lashouimg.com/static/img/other/weather/d/01.png" class="iepng" alt="多云" title="多云" height="24" width="24"><span>32℃/19℃ 多云</span></p>
					</div>
					<div class="hdc">
						<div class="hdi">
							<div class="login">
								<span class="left"></span>
								<strong><a href="/account/orders/"><?php echo $_SESSION['preusername']?></a></strong>
								<div class="shopcart">
									<em class="text">
									<p class="fr">购物车(<b><?php if(isset($_SESSION['cart'])){?>
                <?php echo count($_SESSION['cart'])?><?php }else{?>0
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
									<a href="http://www.lashou.com/account/orders/" class="mylst">我的拉手<i class="tri4"></i></a>
									<p>
										<a href="<?php echo U('Home/Member/my_orders')?>">我的订单</a>
										<a href="<?php echo U('Home/Member/my_collections')?>">我的收藏</a>
										<a href="">常用地址</a>
										<a href="<?php echo U('Home/Member/my_bills')?>">拉手账本</a>
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
						<input type='hidden' name='__TOKEN__' value='a3996fecdbea84cc80932d47b9a50080'</form>
					</div>
				</div>
			</div>

			<div class="nav-wrap">
				<div class="nav newga ga" p="首页列表或其他">
					<a href="" class="lashou"><span>团购</span></a>
					<a href="" class="lashou"><span>身边团购</span></a>
					<a href="" class="lashou"><span>美食</span></a>

					<a href=""><span>电影</span></a>
					<a href=""><span>KTV</span></a>
					<a href=""><span>酒店</span></a>
					<a href=""><span>旅游</span></a>
					<a href="" class="lashou"><span>购物</span></a>

					<a href="" class="lashou"><span>超值购</span><i class="hot-icon"></i></a>

					<a class="mobile" href="" target="_blank">手机上拉手</a>
				</div>
			</div>
		</div>
		<!-- header end -->
		<!-- main -->
		<div id="main">
			<div class="myls-left">
				<div class="myls-title">
					<a class="<?php echo U('Home/Member/my_orders')?>">我的订单</a>
					<a href="<?php echo U('Home/Member/my_collections')?>">我的收藏</a>
					<a class="select">拉手账本</a>
					<a href="<?php echo U('Home/Member/my_setting')?>">账户设置</a>
					<a href="<?php echo U('Home/Member/my_news')?>">我的消息</a>
				</div>
				<div class="myls-lc">
					<h3>
						<span class="fl">拉手账本</span>
						<ul class="fr">
							<li class="nobg selcet"><a href="javascript:;"><span>账户余额</span></a><em><?php echo $account?></em></li>
							<li><a href=""><span>抵用券</span></a><em></em></li>
						</ul>
					</h3>
					<div class="myls-lct">
						<div class="ls-surplus">
							<em>您当前的拉手余额：¥&nbsp;</em>
							<span class="yue"><?php echo $account?></span>
						</div>

						<div class="ls-recharge">
							<b>充值到拉手账户，方便抢购！</b>
							<p class="bt"><em>方式一：使用网银或支付平台充值</em> <a href="javascript:;" onclick="getWindow('pwcz')">立即充值&nbsp;&gt;&gt;</a></p>
							<p><em class="pr">方式二：使用充值码充值</em><a href="javascript:;" id="ljcz">立即充值&nbsp;&gt;&gt;</a></p>
							<p style="display: none;" id="p"><input type="text" name="account" id="jq" /><input type="button" value="立即充值" id="cz" /></p>
							<script type="text/javascript" src="<?php echo __PUBLIC__?>/Home/js/jquery-1.7.2.min.js"></script>
							<script>
								$(function(){
									$('#ljcz').click(function(){
										$('#p').show();
									})
									$('#cz').click(function(){
										money=$('#jq').val();
										$.ajax({
											url:"<?php echo U('Home/Member/chongzhi')?>",
											data:{data:money},
											type:'post',
											dataType:'json',
											success:function(data){
												if(data.state==1){
													alert('充值成功');
													$('.yue').html(data.money);
													$('#jq').html();
													$('#p').hide();
												}else{
													alert('充值失败');
												}

											}
										})
									})
								})
							</script>
						</div>
						<table class="mytable2">
							<tbody>
								<tr>
									<th>商品图片</th>
									<th class="name">商品名称</th>
									<th>类别</th>
									<th>数量</th>
									<th>金额</th>
									<th>时间</th>
								</tr>
								<?php foreach ($orders as $k=>$v){?>
								<tr>
									<td><img src="<?php echo $v['pic']?>" style="width: 80px" /></td>
									<td class="no-records" colspan="1"><?php echo $v['oid']?></td>
									<td class="no-records" colspan="1"><?php echo $v['cname']?></td>
									<td class="no-records" colspan="1"><?php echo $v['quantity']?></td>
									<td class="no-records" colspan="1"><?php echo $v['subtotal']?></td>
									<td class="no-records" colspan="1"><?php echo date('Y-m-d H:i:s',$v['time'])?></td>
								</tr>
								<?php }?>
							</tbody>
						</table>

						<div class="clr"></div>
					</div>
				</div>
			</div>
			<div class="myls-right">
				<div class="myls-rwarp myls-rwarptop">
					<div class="myls-title">
						<h4>我的账户</h4></div>
					<div class="myls-account">
						<img src="./Public/Home/images/dulei.JPG" style="width: 100px;margin-right: 20px" alt="" />
						<p>购买成功：<span><?php echo $numbers?></span>份</p>
						<p class="line">总共节省：<span>¥&nbsp;0</span></p>
						<p><a href="/account/bills/">账户余额¥&nbsp;</a>：<span class='yue'><?php echo $account?></span></p>
						<p><a href="/account/coupon/">抵&nbsp;用&nbsp;券</a>：<span>0</span>张</p>
					</div>
				</div>
				<div class="myls-rwarp">
					<dl class="myls-rqa">
						<dt class="line" style="color: #EA4800;">评价返利调整通知</dt>
						<dd>亲爱的用户：
							<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;拉手网评价返利于2014年4月21日结束，今后将推出更多回馈新老用户的优惠活动。 </dd>
						<dt class="line">什么是账户余额？</dt>
						<dd>账户余额是您在拉手网团购时可用于支付的金额。</dd>
						<dt class="line">那怎样才能有余额？</dt>
						<dd>您可以通过<a href="/account/charge/">账户充值</a>、礼品券充值 等多种方式充值。</dd>
						<dt class="line">为什么有余额不能提现？</dt>
						<dd>使用充值卡充值或者返利、活动奖励等部分余额都不能提现。</dd>
						<dt class="line">退款、提现需要多久？</dt>
						<dd>2-5个工作日完成退款；
							<br>2-10个工作日完成提现。</dd>
						<dt class="line">提现到哪里？</dt>
						<dd>直接使用平台帐户支付的金额，如：快钱、支付宝、财付通等，将原路退回至相应平台帐户；
							<br>通过网上银行支付的金额，如：工银行、建设银行等，将原路退回至您的银行账户；</dd>
					</dl>
				</div>
				<div class="myls-rwarp">
					<div class="myls-title">
						<h4>余额支付提示</h4></div>
					<div class="myls-sctips">
						使用拉手手机客户端也同样可以使用账户中的余额进行支付，便于您随时随地消费。
						<a target="_blank" href="http://mobile.lashou.com/client_buy.html">下载手机客户端</a>
					</div>
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

		<div style="margin-right: -535px; right: 50%; display: none;" id="go-top">
			<a href="javascript:void(0)" title="返回顶部" class="gotop">返回顶部</a>
			<!-- 返回顶部 -->
		</div>

		<!-- 购物车 -->
		<!-- 购物车end -->

		<!-- footer end -->
		<!-- 关注弹窗 -->
		<div class="pop" id="attention">
			<a href="javascript:void(0)" class="pop-close"></a>
			<div class="pop-title">关注我们</div>
			<div class="poptt">
				<a class="current" onclick="tabCutover(this,'pop-weixin')" href="javascript:void(0)">微信</a>
				<a onclick="tabCutover(this,'pop-sina')" href="javascript:void(0)">新浪微博</a>
				<a onclick="tabCutover(this,'pop-tengx')" href="javascript:void(0)">腾讯微博</a>
				<a onclick="tabCutover(this,'pop-kaix')" href="javascript:void(0)">开心网</a>
				<a onclick="tabCutover(this,'pop-qq')" href="javascript:void(0)">QQ空间</a>
			</div>
			<div class="popc">
				<div class="pop-weixin">
					<img src="http://d2.lashouimg.com/static/img/index/weixin186.png" height="132" width="132">
					<div class="pop-wxtext">
						<b>拉手网</b>
						<em>幸福从拉手开始！</em>
						<p>添加方式：
							<br>1.使用微信扫描左侧二维码。
							<br>2.使用微信添加号码2477190824或
							<br>&nbsp;&nbsp;lashouwang318</p>
					</div>
				</div>
				<div class="pop-sina"></div>
				<div class="pop-tengx"></div>
				<div class="pop-kaix">
					<a class="kximg" href="http://www.kaixin001.com/home/?uid=80071233" target="_blank"><img src="http://d1.lashouimg.com/static/img/index/kaixin.png" height="78" width="78"></a>
					<strong>拉手网的开心主页</strong>
					<a class="kxbut" href="http://www.kaixin001.com/home/?uid=80071233" target="_blank"><span></span>点击进入</a>
				</div>
				<div class="pop-qq"></div>
			</div>
		</div>
		<!-- 订阅弹窗 -->
		<div class="pop" id="subscribe" style="">
			<a href="javascript:void(0)" class="pop-close"></a>
			<div class="pop-title">
				订阅</div>
			<div class="poptt">
				<a class="current" onclick="subscribeTabClick(this,'pop-email')" href="javascript:void(0)">
            邮件订阅</a> <a onclick="subscribeTabClick(this,'pop-phone');" href="javascript:void(0)">短信订阅</a>
			</div>
			<div class="popc">
				<div class="pop-email">
					<strong>邮件订阅北京每日团购信息</strong>
					<table>
						<tbody>
							<tr>
								<th>
									<label>邮箱：</label>
								</th>
								<td>
									<input class="ppot" onfocus="pemtfocus(this)" onblur="pemtblur(this)" value="请输入邮箱地址" name="subscribe_email" id="subscribe_email" type="text">
									<span class="error02" id="subscribe_error" style="display: none"></span>
								</td>
							</tr>
							<tr class="mobile_yzm">
								<th>
									<label>验证码：</label>
								</th>
								<td>
									<input class="ppot ppot02 mobile_myyzm" value="请输入验证码" nullval="请输入验证码" maxlength="4" type="text">
									<span class="yzmerror mobile_yzmtip"></span>
									<img class="popyzm mobile_chkimg" src="http://d1.lashouimg.com/static/images/n_img/a.gif" height="23" width="48">
									<a class="yzmlink mobile_changeChkimg" href="javascript:void(0);">看不清楚？换一张</a>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="pop-ckb">
						<input class="pemc" checked="checked" id="sec" name="sec" type="checkbox"><span class="cbt">已阅读&nbsp;<a href="/rule.php" target="_blank">隐私条款</a></span>
					</div>
					<input class="popbut" value="订阅" onclick="subscribe_email(this)" id="subscribe_button" type="button">
				</div>
				<div class="pop-phone pop-phone2">
					<strong>短信订阅/退订北京每日团购信息</strong>
					<table>
						<tbody>
							<tr>
								<th>
									<label for="subscribe_mobile">
										手机号：</label>
								</th>
								<td>
									<input class="ppot" onfocus="ppotfocus1(this)" onblur="ppotblur1(this)" value="请输入要订阅/退订的手机号" name="subscribe_mobile" id="subscribe_mobile" type="text">
									<span class="error02" id="subscribe_mobile_error" style="display: none"></span>
								</td>
							</tr>

							<tr class="mobile_yzm" style="">
								<th>
									<label for="myyzm">
										图片验证码：</label>
								</th>
								<td>
									<input class="ppot ppot02 mobile_myyzm" maxlength="4" value="请输入图片文字" type="text">
									<span class="yzmerror mobile_yzmtip"></span>
									<img class="popyzm mobile_chkimg" alt="" src="http://d1.lashouimg.com/static/images/n_img/a.gif" height="23" width="48"><a class="mobile_changeChkimg">看不清楚？换一张</a>
								</td>
							</tr>
							<tr>
								<th>
								</th>
								<td>
									<input class="ppotbut" value="发送验证码" onclick="send_subscribe_code(this)" id="subscribe_code_btn" type="button">
								</td>
							</tr>
							<tr>
								<th>
									<label for="subscribe_code">
										验证码：</label>
								</th>
								<td>
									<input class="ppot" onfocus="ppotfocus2(this)" onblur="ppotblur2(this)" value="请输入手机收到的验证码" name="subscribe_code" id="subscribe_code" type="text">
									<span class="error02" id="subscribe_mobile_error2" style="display: none"></span>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="pop-ckb">
						<input class="pemc" checked="checked" id="sec2" name="sec2" type="checkbox"><span class="cbt">已阅读&nbsp;<a href="/rule.php" target="_blank">隐私条款</a></span>
					</div>
					<input name="subscribe_type" id="subscribe_type" value="1" type="hidden">
					<input class="popbut" value="订阅" id="popbut" onclick="subscribe_sms()" type="button">
					<a class="popnosb" href="javascript:void(0)" id="popnosb" onclick="subscribe_sms()" style="display: none;">退订</a>
				</div>
			</div>
			<div class="pop-eok">
				<div class="pop-oktext">
					<span></span><strong>邮件订阅成功！</strong>
					<br> 北京每日团购信息会及时发送到您的邮箱。
				</div>
				<p>
					收不到邮件？ <a href="/setemails.php" target="_blank">设置邮箱白名单</a></p>
				<div class="pop-okbut">
					<input class="popokbut" value="完成" type="button">
				</div>
			</div>
			<div class="pop-pok">
				<div class="pop-oktext">
					<span></span><strong>短信订阅成功！</strong>
					<br> 北京每日团购信息会及时发送到您的手机。
				</div>
				<div class="pop-okbut">
					<input class="popokbut" value="完成" type="button">
				</div>
			</div>
			<div class="pop-pusok">
				<div class="pop-oktext">
					<span></span><strong>短信退订成功！</strong>
					<br> 您将不再收到北京每日团购信息短信。
				</div>
				<div class="pop-okbut">
					<input class="popokbut" value="完成" type="button">
				</div>
			</div>
		</div>
		<!-- 添加购物车弹窗 购买超过20个 -->
		<div class="pop" id="cartfull">
			<a href="javascript:void(0);" class="pop-close"></a>
			<div class="pop-title">
			</div>
			<div class="carthtml">
				<div class="cf-cen">
					<span class="cf-icon"></span><b>添加失败！</b>
					<p>
						购物车内的商品已经达到上限（20种）</p>
					<a class="cf-but01" href="javascript:void(0);" onclick="hidePoplayer('cartfull');">继续浏览</a>
					<a class="cf-but02" href="/order.php?act=confirm_cart">整理购物车</a>
				</div>
			</div>
		</div>

		<!-- 添加购物车弹窗 -->
		<div class="pop" id="cartempty">

		</div>
		<script type="text/javascript">
			(function(d) {
				window.bd_cpro_rtid = "rH0snHf";
				var s = d.createElement("script");
				s.type = "text/javascript";
				s.async = true;
				s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
				var s0 = d.getElementsByTagName("script")[0];
				s0.parentNode.insertBefore(s, s0);
			})(document);
		</script>

	</body>

</html>