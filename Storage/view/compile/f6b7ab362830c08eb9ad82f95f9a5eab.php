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
		<link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__?>/Home/css/buy1.css">
		<link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__?>/Home/css/buy2.css">
		<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Home/css/index.css" />
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
						<?php if(isset($_SESSION['preusername'])){?>
                
						<li class="top-right-li">
							<a href="" class='login-link'><?php echo $_SESSION['preusername']?></a>
						</li>
						<li class="top-right-li">
							<a href="">
								<img src="<?php echo __PUBLIC__?>/Home/images/level0.png" alt="" />
							</a>
						</li>
						
               <?php }?>
						<li class='top-right-li padli gouwucar' style="cursor:default;">
							<p>
								<em class='shop-icon'></em>
								<em>购物车(<b><?php if(isset($_SESSION['cart'])){?>
                <?php echo count($_SESSION['cart'])?><?php }else{?>0
               <?php }?></b>)</em>
								<i class='triangle'></i>
							</p>
							<?php if(isset($_SESSION['cart'])){?>
                
							<ul class='htul'>
								<div class='history-cover' style="width:128px"></div>
								<?php foreach ($_SESSION['goodinfo'] as $k=>$v){?>
								<li>
									<a href="" class='flimg'>
										<img style="width: 66px;height: 42px;" src="<?php echo $v['pic']?>" alt="" />
									</a>
									<p>
										<a href="" class='tit'><?php echo $v['gname']?></a>
										<span>¥<?php echo $v['shopprice']?></span>
										<a href="<?php echo U('Home/ShoppingCart/delCart',array('index'=>$v['cartIndex']))?>" class=del>删除</a>
									</p>
								</li>
								<?php }?>
								<li class='shopcart-but'>
									<a href="<?php echo U('Home/ShoppingCart/shoppingCart')?>">去购物车并结算</a>
								</li>
							</ul>
							
               <?php }?>
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
										<img src="<?php echo __PUBLIC__?>/Home/images/gw.jpg" alt="" />
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
								<li><a href="<?php echo U('Home/Member/my_orders')?>">我的订单</a></li>
								<li><a href="<?php echo U('Home/Member/my_collections')?>">我的收藏</a></li>
								<li><a href="<?php echo U('Home/Member/my_address')?>">常用地址</a></li>
								<li><a href="<?php echo U('Home/Member/my_bills')?>">拉手账本</a></li>
								<li><a href="<?php echo U('Home/Member/my_setting')?>">账户设置</a></li>
								<li><a href="<?php echo U('Home/Member/my_news')?>">我的消息</a></li>
							</ul>
						</li>
						<?php if(!isset($_SESSION['preusername'])){?>
                
						<li class='top-right-li'>
							<a href="<?php echo U('Home/Login/login')?>">[登录]</a>
						</li>
						
						<li class='top-right-li'>
							<a href="<?php echo U('Home/Register/register')?>">[注册]</a>
						</li>
						<?php }else{?>
						 <li class='top-right-li'>
							<a href="<?php echo U('Home/Login/outLogin')?>">[退出]</a>
						</li> 
						
               <?php }?>
					</ul>
				</div>
			</div>
			<div class="header-bottom cl">
				<div class="logo">
					<h1>
						拉手网
					</h1>
					<a href="<?php echo U('Home/Index/index')?>">
						<img src="<?php echo __PUBLIC__?>/Home/images/logo.png" alt="欢聚拉手，快乐生活" title="欢聚拉手，快乐生活" height="68" width="127">
					</a>
				</div>
				<div class="commitment">
					<a href="#" target="_blank">
						<img src="<?php echo __PUBLIC__?>/Home/images/commitment.png" height="45" width="187">
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
					<p class="step-end">
						<span><small>3.</small>完成</span>
						<em>
						</em>
						<i class="narrow-icon">
						</i>
					</p>
				</div>
				<form action="<?php echo U('Home/Trade/zhifu')?>" method="post" enctype="application/x-www-form-urlencoded" name="postpay" id="payForm" target="_blank">
					<dl class="buy-details">
						<dt>
							<h3>
								商品信息
							</h3>
							<span>应付总额：</span><em>¥</em><strong><?php echo $orders_prices?></strong>
						</dt>
						<!-- <input name="order_type" value="1" type="hidden"> -->
						<?php foreach ($orders as $k=>$v){?>
						<dd class="cl">
							<p class="left" style="display: inline-block;width: 70px;">
								<img src="<?php echo $v['pic']?>" alt="" style="width:70px;"/>
							</p>
							<p class="left">
								<a href="" target="_blank" title="">
									<?php echo $v['gname']?>
								</a>
								<?php foreach ($v['spec'] as $sk=>$sv){?>
									<?php echo $sv?>
								<?php }?>
							</p>
							<p class="left">
								<span>单件价格<?php echo $v['subtotal']/$v['quantity']?></span>
								<span><?php echo $v['quantity']?>件</span>
								<input type="hidden" name="oid" value="<?php echo $v['oid']?>" />
							</p>
						</dd>
						<?php }?>
					</dl>
					<div class="pay-bank">
						<div class="pay-bank-tab">
							<a class="current" onclick="tabCutover(this,'bank01')" href="javascript:void(0);">
								<span>网上银行</span><em>(储蓄卡/信用卡)</em>
							</a>
							<a onclick="tabCutover(this,'bank02')" href="javascript:void(0);">
								<span>平台支付</span><em>(支付宝/财付通/等)</em>
							</a>
							<a onclick="tabCutover(this,'bank03')" href="javascript:void(0);">
								<span>手机扫码支付</span><em>(支付宝/微信)</em>
							</a>
							<a onclick="tabCutover(this,'bank04')" href="javascript:void(0);">
								<span>快捷支付</span><em>(信用卡)</em>
							</a>
						</div>
						<div class="pay-bank-con">
							<div class="bank bank01" style="display: block;">
								<ul class="cl">
								</ul>
								<ul class="none cl" style="display:block">
									<li>
										<input bank-name="快钱-工商银行" id="kq_ICBC" hidefocus="true" name="bank_name" value="kq_ICBC" checked="checked" type="radio">
										<img bank-name="快钱-工商银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank01.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-建设银行" id="kq_CCB" hidefocus="true" name="bank_name" value="kq_CCB" type="radio">
										<img bank-name="快钱-建设银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank03.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-农业银行" id="kq_ABC" hidefocus="true" name="bank_name" value="kq_ABC" type="radio">
										<img bank-name="快钱-农业银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank04_new.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-广东发展" id="kq_GDB" hidefocus="true" name="bank_name" value="kq_GDB" type="radio">
										<img bank-name="快钱-广东发展" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank012_xin.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-中国银行" id="kq_BOC" hidefocus="true" name="bank_name" value="kq_BOC" type="radio">
										<img bank-name="快钱-中国银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank06.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-中国邮政" id="kq_PSBC" hidefocus="true" name="bank_name" value="kq_PSBC" type="radio">
										<img bank-name="快钱-中国邮政" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank08new.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-兴业银行" id="kq_CIB" hidefocus="true" name="bank_name" value="kq_CIB" type="radio">
										<img bank-name="快钱-兴业银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank013.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-光大银行" id="kq_CEB" hidefocus="true" name="bank_name" value="kq_CEB" type="radio">
										<img bank-name="快钱-光大银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank019.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-招商银行" id="kq_CMB" hidefocus="true" name="bank_name" value="kq_CMB" type="radio">
										<img bank-name="快钱-招商银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank02.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-浦发银行" id="kq_SPDB" hidefocus="true" name="bank_name" value="kq_SPDB" type="radio">
										<img bank-name="快钱-浦发银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank05.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-北京银行" id="kq_BOB" hidefocus="true" name="bank_name" value="kq_BOB" type="radio">
										<img bank-name="快钱-北京银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank07.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-民生银行" id="kq_CMBC" hidefocus="true" name="bank_name" value="kq_CMBC" type="radio">
										<img bank-name="快钱-民生银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank09.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-交通银行" id="kq_BCOM" hidefocus="true" name="bank_name" value="kq_BCOM" type="radio">
										<img bank-name="快钱-交通银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank_jiat.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-中信银行" id="kq_CITIC" hidefocus="true" name="bank_name" value="kq_CITIC" type="radio">
										<img bank-name="快钱-中信银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank010.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-华夏银行" id="kq_HXB" hidefocus="true" name="bank_name" value="kq_HXB" type="radio">
										<img bank-name="快钱-华夏银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank011.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-南京银行" id="kq_NJCB" hidefocus="true" name="bank_name" value="kq_NJCB" type="radio">
										<img bank-name="快钱-南京银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank014.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-平安银行" id="kq_PAB" hidefocus="true" name="bank_name" value="kq_PAB" type="radio">
										<img bank-name="快钱-平安银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank015.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-北京农商银行" id="kq_BJRCB" hidefocus="true" name="bank_name" value="kq_BJRCB" type="radio">
										<img bank-name="快钱-北京农商银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank017.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-东亚银行" id="kq_BEA" hidefocus="true" name="bank_name" value="kq_BEA" type="radio">
										<img bank-name="快钱-东亚银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank018.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-上海银行" id="kq_SHB" hidefocus="true" name="bank_name" value="kq_SHB" type="radio">
										<img bank-name="快钱-上海银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank020.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-宁波银行" id="kq_NBCB" hidefocus="true" name="bank_name" value="kq_NBCB" type="radio">
										<img bank-name="快钱-宁波银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank021.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-浙商银行" id="kq_CZB" hidefocus="true" name="bank_name" value="kq_CZB" type="radio">
										<img bank-name="快钱-浙商银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank022.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-深圳发展银行" id="kq_SDB" hidefocus="true" name="bank_name" value="kq_SDB" type="radio">
										<img bank-name="快钱-深圳发展银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank023.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-杭州银行" id="kq_HZB" hidefocus="true" name="bank_name" value="kq_HZB" type="radio">
										<img bank-name="快钱-杭州银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank024.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-渤海银行" id="kq_CBHB" hidefocus="true" name="bank_name" value="kq_CBHB" type="radio">
										<img bank-name="快钱-渤海银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank025.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-徽商银行" id="kq_HSB" hidefocus="true" name="bank_name" value="kq_HSB" type="radio">
										<img bank-name="快钱-徽商银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank026.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-上海农村商业银行" id="kq_SRCB" hidefocus="true" name="bank_name" value="kq_SRCB" type="radio">
										<img bank-name="快钱-上海农村商业银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank027.gif" height="32" width="112">
									</li>
								</ul>
							</div>
							<div class="bank bank02">
								<ul class="cl">
									<li>
										<input bank-name="支付宝" id="zfb" hidefocus="true" name="bank_name" value="zfb" type="radio">
										<img bank-name="支付宝" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/b_zfb.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱" id="kq" hidefocus="true" name="bank_name" value="kq" type="radio">
										<img bank-name="快钱" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank_zhifu01.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="财付通" id="caifutong" hidefocus="true" name="bank_name" value="caifutong" type="radio">
										<img bank-name="财付通" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/b_cft.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="银联" id="yinlian" hidefocus="true" name="bank_name" value="yinlian" type="radio">
										<img bank-name="银联" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank_zhifu07.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="银联无卡" id="yinlianwuka" hidefocus="true" name="bank_name" value="yinlianwuka" type="radio">
										<img bank-name="银联无卡" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/zxzf_new.jpg" height="32" width="112">
									</li>
								</ul>
							</div>
							<div class="bank bank03">
								<ul class="cl">
									<li>
										<input bank-name="支付宝扫码支付" id="zfbsm" hidefocus="true" name="bank_name" value="zfbsm" type="radio">
										<img bank-name="支付宝扫码支付" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/b_zfbsm.gif" height="32" width="112">
									</li>
								</ul>
							</div>
							<div class="bank bank04">
								<ul class="cl">
								</ul>
								<ul class="none cl" style="display:block">
									<li>
										<input bank-name="快钱-快捷支付-民生银行" id="kq_kjCMBC" hidefocus="true" name="bank_name" value="kq_kjCMBC" type="radio">
										<img bank-name="快钱-快捷支付-民生银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank09.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-工商银行" id="kq_kjICBC" hidefocus="true" name="bank_name" value="kq_kjICBC" type="radio">
										<img bank-name="快钱-快捷支付-工商银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank01.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-建设银行" id="kq_kjCCB" hidefocus="true" name="bank_name" value="kq_kjCCB" type="radio">
										<img bank-name="快钱-快捷支付-建设银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank03.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-农业银行" id="kq_kjABC" hidefocus="true" name="bank_name" value="kq_kjABC" type="radio">
										<img bank-name="快钱-快捷支付-农业银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank04_new.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-广东发展" id="kq_kjGDB" hidefocus="true" name="bank_name" value="kq_kjGDB" type="radio">
										<img bank-name="快钱-快捷支付-广东发展" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank012_xin.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-中国银行" id="kq_kjBOC" hidefocus="true" name="bank_name" value="kq_kjBOC" type="radio">
										<img bank-name="快钱-快捷支付-中国银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank06.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-中国邮政" id="kq_kjPSBC" hidefocus="true" name="bank_name" value="kq_kjPSBC" type="radio">
										<img bank-name="快钱-快捷支付-中国邮政" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank08new.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-兴业银行" id="kq_kjCIB" hidefocus="true" name="bank_name" value="kq_kjCIB" type="radio">
										<img bank-name="快钱-快捷支付-兴业银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank013.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-光大银行" id="kq_kjCEB" hidefocus="true" name="bank_name" value="kq_kjCEB" type="radio">
										<img bank-name="快钱-快捷支付-光大银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank019.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-招商银行" id="kq_kjCMB" hidefocus="true" name="bank_name" value="kq_kjCMB" type="radio">
										<img bank-name="快钱-快捷支付-招商银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank02.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-浦发银行" id="kq_kjSPDB" hidefocus="true" name="bank_name" value="kq_kjSPDB" type="radio">
										<img bank-name="快钱-快捷支付-浦发银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank05.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-交通银行" id="kq_kjBCOM" hidefocus="true" name="bank_name" value="kq_kjBCOM" type="radio">
										<img bank-name="快钱-快捷支付-交通银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank_jiat.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-中信银行" id="kq_kjCITIC" hidefocus="true" name="bank_name" value="kq_kjCITIC" type="radio">
										<img bank-name="快钱-快捷支付-中信银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank010.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-华夏银行" id="kq_kjHXB" hidefocus="true" name="bank_name" value="kq_kjHXB" type="radio">
										<img bank-name="快钱-快捷支付-华夏银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank011.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-南京银行" id="kq_kjNJCB" hidefocus="true" name="bank_name" value="kq_kjNJCB" type="radio">
										<img bank-name="快钱-快捷支付-南京银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank014.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-平安银行" id="kq_kjPAB" hidefocus="true" name="bank_name" value="kq_kjPAB" type="radio">
										<img bank-name="快钱-快捷支付-平安银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank015.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-北京农商银行" id="kq_kjBJRCB" hidefocus="true" name="bank_name" value="kq_kjBJRCB" type="radio">
										<img bank-name="快钱-快捷支付-北京农商银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank017.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-上海银行" id="kq_kjSHB" hidefocus="true" name="bank_name" value="kq_kjSHB" type="radio">
										<img bank-name="快钱-快捷支付-上海银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank020.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-宁波银行" id="kq_kjNBCB" hidefocus="true" name="bank_name" value="kq_kjNBCB" type="radio">
										<img bank-name="快钱-快捷支付-宁波银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank021.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-深圳发展银行" id="kq_kjSDB" hidefocus="true" name="bank_name" value="kq_kjSDB" type="radio">
										<img bank-name="快钱-快捷支付-深圳发展银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank023.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-杭州银行" id="kq_kjHZB" hidefocus="true" name="bank_name" value="kq_kjHZB" type="radio">
										<img bank-name="快钱-快捷支付-杭州银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank024.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-徽商银行" id="kq_kjHSB" hidefocus="true" name="bank_name" value="kq_kjHSB" type="radio">
										<img bank-name="快钱-快捷支付-徽商银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank026.gif" height="32" width="112">
									</li>
									<li>
										<input bank-name="快钱-快捷支付-上海农村商业银行" id="kq_kjSRCB" hidefocus="true" name="bank_name" value="kq_kjSRCB" type="radio">
										<img bank-name="快钱-快捷支付-上海农村商业银行" src="http://f2.lashouimg.com/templates/default/images/kq_bankimg/bank027.gif" height="32" width="112">
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="money-details">
						<p>
							<span>需要支付：</span><em>¥</em><strong><?php echo $orders_prices?></strong>
							<input type="hidden" name="account" value="<?php echo $orders_prices?>" />
						</p>
						<p>
							<span>你的账户余额：</span><em>¥</em><strong><?php echo $account?></strong>
						</p>
					</div>
					<div class="buy-botton">
						<!-- <input name="trade_no" id="trade_no" value="1162648488w4c7ae7957" type="hidden"> -->
						<a href="<?php echo U('Home/Index/index')?>" >暂不支付，继续购物</a>
						<input value="去支付" type="submit">
						<!-- <div class="pay-modify">
							<a href="/order/buy/?id=11626484">
								&lt;&lt; 返回修改订单
							</a>
						</div> -->
					</div>
				<input type='hidden' name='__TOKEN__' value='ed567ebdcf24d19b8dfad794a466164e'</form>
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