<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			拉手网北京站-超人气团购网站-北京团购大全
		</title>
		<link rel="shortcut icon" href="http://www.lashou.com/favicon.ico">
		<link rel="Bookmark" href="http://www.lashou.com/favicon.ico">
		<script src="http://f1.lashouimg.com/public/js/dc.js" async="" type="text/javascript"></script>
		<script type="text/javascript" src="http://f3.lashouimg.com//public/js/lib/jquery.js"></script>
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
			{{if value="isset($_SESSION['cart'])"}}
				<div class="narrow-step">
					<p class="step-begin current">
						<span><small>1.</small>提交订单</span>
						<em>
						</em>
						<i class="narrow-icon">
						</i>
					</p>
					<p>
						<span><small>2.</small>去支付</span>
						<em>
						</em>
						<i class="narrow-icon">
						</i>
						<em>
						</em>
					</p>
					<p class="step-end ">
						<span><small>3.</small>完成</span>
						<em>
						</em>
						<i class="narrow-icon">
						</i>
					</p>
				</div>
				
				<form id="sub_form" action="{{U('Home/Trade/trade')}}" method="post" target="_self">
					<div class="cart-warp">
						<div class="cart-thead">
							<span class="product">商品</span>
							<span class="money">单价</span>
							<span class="quantity">数量</span>
							<span class="prefer">
							</span>
							<span class="price">小计</span>
						</div>
						
						{{foreach from="$goodinfo" key="$k" value="$v"}}
						<input type="checkbox" name="infoIndex[]" class="checkboxs" value="{{$k}}"/>
						<div class="cart-list cl">
							<div class="product">
								<a class="product-img" href="{{U('Home/Goods/goods',array('gid'=>Q('gid')))}}" target="_blank">
									<img src="{{$v['pic']}}" height="42" width="66">
								</a>
								<div class="product-info">
									<p>
										<a class="name" href="{{U('Home/Goods/goods',array('gid'=>Q('gid')))}}" title="{{$v['gname']}}" target="_blank">
											{{$v['gname']}}
										</a>
									</p>
									<p>
										<span>
										{{foreach from="$v['spec']" key="$sk" value="$sv"}}
											{{$sv}}
										{{endforeach}}
										</span>
									</p>
								</div>
								<div class="product-serving">
								</div>
							</div>
							<div class="money">
								<p>
									<em>¥</em><span class='unitprice'>{{$v['shopprice']}}</span>
								</p>
							</div>
							<div class="quantity">
								<div class="quantity-number">
									<span class="minus disabled">
										<i class="minus-icon">
										</i>
									</span>
									<input name="amount[]" class="shuliang" value="{{$_SESSION['cart'][$k]['num']}}" type="text">
									<span class="plus">
										<i class="plus-icon">
										</i>
									</span>
								</div>
							</div>
							<div class="prefer">
							</div>
							<div class="price">
								<em>¥</em>
								<em class="totalprice">{{$_SESSION['cart'][$k]['num']*$v['shopprice']}}</em>
								<a href="{{U('Home/ShoppingCart/delCart',array('index'=>$v['cartIndex']))}}">删除</a>
							</div>
						</div>
						{{endforeach}}
						<div class="total-price">
							<span>应付总额：</span><em>¥</em><b id="totalpri">0</b>
							<input type="hidden" name="total" id="totalInput" value="0" />
						</div>
						<script>
							$(function(){
								n=1;
								$('.plus').click(function(){
									n=1;
									$(this).siblings('span').removeClass('disabled');
									shuliang=parseInt($(this).siblings('input').val());
									if(shuliang==100){
										$(this).addClass('disabled');
										n=0;
									}
									shuliang=shuliang+n;
									$(this).siblings('input').val(shuliang);
									unitprice=$(this).parents('.quantity').siblings('.money').find('p').children('span').html();
									$(this).parents('.quantity').siblings('.price').children('.totalprice').html(unitprice*shuliang);
									tem=$('.totalprice').length;
									t=0;
									for(i=0;i<tem;i++){
										t=t+parseInt($('.totalprice').eq(i).html());
									}
									$('#totalpri').html(t);
									$('#totalInput').val(t);
								})
								$('.minus').click(function(){
									n=1;
									$(this).siblings('span').removeClass('disabled');
									shuliang=parseInt($(this).siblings('input').val());
									if(shuliang==1){
										$(this).addClass('disabled');
										n=0;
									}
									shuliang=shuliang-n;
									$(this).siblings('input').val(shuliang);
									unitprice=$(this).parents('.quantity').siblings('.money').find('p').children('span').html();
									$(this).parents('.quantity').siblings('.price').children('.totalprice').html(unitprice*shuliang);
									tem=$('.totalprice').length;
									t=0;
									for(i=0;i<tem;i++){
										t=t+parseInt($('.totalprice').eq(i).html());
									}
									$('#totalpri').html(t);
									$('#totalInput').val(t);
								})
								$('.shuliang').change(function(){
									numbers=$(this).val();
									if(numbers<1){
										$(this).val(1);
										numbers=1;
									}
									if(numbers>100){
										$(this).val(100);
										numbers=100;
									}
									unitprice=$(this).parents('.quantity').siblings('.money').find('p').children('span').html();
									$(this).parents('.quantity').siblings('.price').children('.totalprice').html(unitprice*numbers);
									t=0;
									for(i=0;i<tem;i++){
										t=t+parseInt($('.totalprice').eq(i).html());
									}
									$('#totalpri').html(t);
									$('#totalInput').val(t);
								})
								
								tem=$('.totalprice').length;
								t=0;
								for(i=0;i<tem;i++){
									t=t+parseInt($('.totalprice').eq(i).html());
								}
								$('#totalpri').html(t);
							})
						</script>
					</div>
					
					<div id="receive" class="buy-block">
						<div class="buy-block-title">
							<h3>收货地址</h3>
							<a href="javascript:;" id="manageAdd">填写收货地址</a>
						</div>
						<!-- <input type="hidden" name="address_id" value=""> -->
						<ul class="addressi-form" style="display: none;">
							<li class="cl">
								<label>收货地址</label>
								<div class="input-warp">
									<input name="address" class="intext long" type="text" value="">
								</div>
							</li>
							<li class="cl">
								<label>收件人姓名</label>
								<div class="input-warp">
									<input name="consignee" class="intext" type="text" value="">
								</div>
							</li>
							<li class="cl">
								<label>收件人手机号码</label>
								<div class="input-warp">
									<input name="mobile" class="intext" type="text" value="">
								</div>
							</li>
						</ul>
						<div id="delivery_memo" class="coupon-title" style="display: none;">
							<div class="merger-explain">
								<label>配送说明：</label>
								<input type="text" name="remark" placeholder="可告诉商家您的特殊需求（选填）">
							</div>
						</div>
						<script>
							$(function(){
								i=0;
								$('#manageAdd').click(function(){
									if(i==0){
										$('.buy-address').show();
										$('.addressi-form').show();
										$('.coupon-title').show();
										i=1;
									}else{
										$('.buy-address').hide();
										$('.addressi-form').hide();
										$('.coupon-title').hide();
										i=0;
									}
								})
							})
						</script>
					</div>
					<div class="buy-botton">
						<input type="submit" id="btn" value="提交订单">
					</div>
				</form>
				{{else}}
				<div class="cart-warp" style="padding-left: 400px;">
					<h2>你还没有选择任何商品</h2>
					<h2><a href="{{U('Home/Index/index')}}">继续购物</a></h2>
				</div>
				{{endif}}
			</div>
		</div>
		{{include file="Common/footer.php"}}
	</body>
</html>