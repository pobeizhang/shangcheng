<header>
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
							<em>购物车(<b>{{if value="isset($_SESSION['cart'])"}}
											{{count($_SESSION['cart'])}}
										{{else}}
											0
										{{endif}}</b>)</em>
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
		<!-- 广告轮播部分---------------------------------------------------------- -->
		<div class='ad-img'>
			<div class='ad-up'>
				<img src="{{__PUBLIC__}}/Home/images/1.jpg" alt="" />
				<img src="{{__PUBLIC__}}/Home/images/2.jpg" alt="" />
				<img src="{{__PUBLIC__}}/Home/images/3.jpg" alt="" />
				<img src="{{__PUBLIC__}}/Home/images/4.jpg" alt="" />
				<img src="{{__PUBLIC__}}/Home/images/1.jpg" alt="" />
			</div>
			<div class='ad-close'></div>
		</div>
		<!-- 广告轮播部分-->
		<div class='header-bottom'>
			<div class='logo'>
				<a href="{{U('Home/Index/index')}}">
					<img src="{{__PUBLIC__}}/Home/images/logo.png" alt="" />
				</a>
			</div>
			<div class='city'>
				<h2>北京</h2>
				<a href="">
					<i class='triangle'></i>
					切换城市
				</a>
				<p class='weather'>
					<img src="{{__PUBLIC__}}/Home/images/wheather.png" alt="" />
					<span>32℃/19℃ 多云</span>
				</p>
			</div>
			<div class='search'>
				<form action="" id='searchform'>
					<div class='search-frame'>
						<span class='scvalue'>自助餐</span>
						<input type="text" name="sw" id="sw" class='sctext' />
						<input type="submit" value="搜索" class='scsubmit' />
					</div>

					<div class='search-hot'>
						<a href="">旅游</a>
						<a href="">火锅</a>
						<a href="">蛋糕</a>
						<a href="">美食</a>
						<a href="">自助餐</a>
						<a href="">体检</a>
						<a href="">烤肉</a>
						<a href="">美发</a>
						<a href="">电影票</a>
						<a href="">婚纱照</a>
					</div>
				</form>
			</div>
			<div class='commitment'>
				<a href="">
					<img src="{{__PUBLIC__}}/Home/images/commitment.png" alt="" />
				</a>
			</div>
		</div>
	</header>