<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>【拉手网】北京团购_拉手网团购网_北京团购大全_欢聚拉手，快乐生活</title>
<link rel="shortout icon" href="{{__PUBLIC__}}/Home/images/favicon.ico" />
<link rel="stylesheet" href="{{__PUBLIC__}}/Home/css/index.css" />
<link rel="stylesheet" href="{{__PUBLIC__}}/Home/css/goods.css" />
<script type="text/javascript" src="{{__PUBLIC__}}/Home/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="{{__PUBLIC__}}/Home/js/js.js"></script>
<script type="text/javascript" src="{{__PUBLIC__}}/Home/js/goods.js"></script>
<style>
	.detail-intro .bg{
		border: 2px solid #FF7E00;
	}
	#bg{
		border: 2px solid #FF7E00;
	}
</style>
</head>
<body>
	<!-- 头部----------------------------------------------------------------------------------- -->
	{{include file="Common/header.php"}}
	<!-- 头部结束 -->
	<!-- 导航部分------------------------------------------------------------------------------ -->
	{{include file="Common/nav.php"}}
	<!-- 导航部分 -->
	<!-- 主体部分------------------------------------------------------------------------------- -->
	<main id='main'>
		<div class='index-main'>
			<div class='sort-nav'>
				<h3 class='sort-title'>
					<span>全部商品分类</span>
				</h3>
				<div class='sort-cen' style="display:none">
				{{include file="Common/category.php"}}
				</div>
			</div>
		</div>

		<div class='main-content'>
			<div class='breadcrumbs'>
				<span>您的位置：</span>
				<a href="">北京团购</a>
				<i></i>
				<a href="">西城团购</a>
				<i></i>
				<a href="">美食团购</a>
				<i></i>
				<a href="">海鲜团购</a>
				<i></i>
				<span>{{$goodData['gname']}}</span>
			</div>

			<div class='detail-intro'>
				<div class='roduct-name'>
					<span>{{$goodData['gname']}}</span>
					<!-- <h1>中秋爪王阳澄湖大闸蟹</h1> -->
					<!-- <p>阳澄湖大闸蟹12只装，优质食材，买六送六！个大、味美、实惠、体面</p> -->
				</div>
				
				<div class='roduct-left'>
					<img src="{{$goodData['pic']}}" alt="" />
				</div>
				<div class='roduct-info'>
					<div id="tem">
						<div class='roduct-price'>
							<span class='price'>
								<em>¥</em>
								<span id="shopprice">{{$goodData['shopprice']}}</span>
							</span>
							<span class='money'>
								<em>¥</em>
								<del id="del">{{$goodData['marketprice']}}</del>
							</span>
							<span class='discount'>
								<em id="zhekou">{{round($goodData['shopprice']/$goodData['marketprice']*10,1)}}</em>
								折
							</span>
						</div>

						<div class='roduct-stars'>
							<span>
								已售
								<strong>40</strong>
							</span>
						</div>

						<div class='roduct-otherinfo roduct-linetop'>
							<span class='otherinfo-title'>有效期</span>
							<div class='otherinfo-content'>
								<span class='text'>2015-12-31</span>
							</div>
							<div class='clear'></div>
						</div>

						<div class='roduct-otherinfo roduct-linebom'>
							<span class='otherinfo-title'>服务</span>
							<div class='otherinfo-content'>
								<em class='serving'>
									<i class='suishi'></i>
									<a href="">随时退</a>
								</em>
								<em class='serving'>
									<i class='guoqi'></i>
									<a href="">过期退</a>
								</em>
								<em class='serving'>
									<i class='yuyue'></i>
									<a href="">免预约</a>
								</em>
								<div class='clear'></div>
							</div>
							<div class='clear'></div>
						</div>
						{{foreach from="$spec" key="$sk" value="$sv"}}
						<div class='roduct-otherinfo' class="gbox">
							<span class='otherinfo-title'>{{$sv['name']}}</span>
							<div class='otherinfo-module'>
								{{foreach from="$sv['opt']" key="$kk" value="$vv"}}
								{{if value="$kk==0"}}
								<a href="javascript:;"class="bg special" gtid="{{$vv['gtid']}}">
									<span>{{$vv['gtvalue']}}</span>
									<i {{if value="$kk==0"}}style="display: block;"{{else}}style="display: none;"{{endif}}></i>
								</a>
								{{else}}
								<a href="javascript:;" class='special' gtid="{{$vv['gtid']}}">
									<span>{{$vv['gtvalue']}}</span>
									<i {{if value="$kk==0"}}style="display: block;"{{else}}style="display: none;"{{endif}}></i>
								</a>
								{{endif}}
								{{endforeach}}
							</div>
						</div>
						{{endforeach}}
						<script>
							$(function(){
								$('.special').click(function(){
									$(this).addClass('bg');
									$(this).siblings().removeClass('bg');
									$(this).find('i').hide();
									$(this).siblings().find('i').hide();
									$(this).find('i').show();
									len=$(this).siblings().length;
									// alert(len);

									str='';
									for(var i=0;i<len;i++){
										str+=','+$('.bg').eq(i).attr('gtid');
									}
									$.ajax({
										url:'{{U("ajaxGetPro")}}',
										type:'post',
										data:{combine:str,gid:{{$_GET['gid']}}},
										dataType:'json',
										success:function(data){
											if(data.state==0){
												$('#kucun').html("亲，改类型的商品没有库存了，再看看其他的商品吧！！！");
											}else if(data.state==1){
												//通过js将价格及库存写到相应位置
												$('#kucun').html("该类型商品还有"+data.message.inventory+"件");
												$('#shopprice').html(data.message.price);
											}
										}
									})
								})
							})
						</script>
						<div class='roduct-otherinfo'>
							<span class='otherinfo-title'>数量</span>
							<div class='otherinfo-content'>
								<span class='minus'>
									<i class='minus-icon'></i>
								</span>
								<input type="text" name="gnumber" id="" value='1'/>
								<span class='plus'>
									<i class='plus-icon'></i>
								</span>
								<div class='clear'></div>
							</div>
						</div>

						<div class='roduct-otherinfo'>
							<span class='otherinfo-title'>库存</span>
							<div class='otherinfo-content'>
								<span id='kucun'>该商品总共还有{{$goodData['total']}}件库存</span>
							</div>
						</div>
						<div class='roduct-button'>
							<a href="javascript:;" class='button-red' id="buynow">立即购买</a>
							<a href="javascript:;" class='button-cart' id="shopcart">
								<i></i>
								<span>加入购物车</span>
							</a>
							<a class='button-red' id="deal" style="display: none;" href="{{U('Home/ShoppingCart/shoppingCart')}}">去购物车并结算</a>
							<!-- 异步添加购物车 -->
							<script>
								$(function(){
									$('#shopcart').click(function(){
										$('#deal').show();
										//获取要购买的数量
										var num=$('input[name=gnumber]').val();
										//获取当前文档中cur属性的数量
										len=$('.bg').length;
										// alert(len);
										//循环得到货品规格信息
										var str='';
										for(i=0;i<len;i++){
											str+=','+$('.bg').eq(i).attr('gtid');
										}
										// alert(str);
										//异步请求，添加到购物车
										$.ajax({
											url:'{{U("Home/Goods/ajaxAddCart")}}',
											data:{combine:str,num:num},
											type:'post',
											dataType:'json',
											success:function(data){
												// alert(data.message);
											}
										})
									})
								})
							</script>
							<ul class='collect-share'>
								<li>
									<a href="" class='collect'>
										<i></i>
										收藏本单
									</a>
								</li>
								<li>
									<a href="" class='share'>
										<i></i>
										分享到
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class='clear'></div>
			</div>
			<div class='detail-content cl'>
				<div class='detail-sidebar'>
					<div class='other-gp slider-warp-updown newga ga'>
						<h3>
							<span>该商家其他团购</span>
						</h3>
						<ul style='height:432px; overflow:hidden; position:relative;'>
							<li style='height:auto; position:absolute; width:100%; top:0px;'>
								<div class='small-goods'>
									<a href="" class='small-goods-img'>
										<img src="{{__PUBLIC__}}/Home/images/CqgBJlQX3hqAIV32AABaj4T27Ow046-198x126.jpg" alt="" height="126" />
									</a>
									<h4>
										<a href="" class='small-goods-name'>【朝外大街】扇子餐厅</a>
										<a href="" class='small-goods-text'>扇子餐厅：4人餐，节假日通用</a>
									</h4>
									<div class='small-goods-info'>
										<span class='price'>
											<em>¥</em>
											398
										</span>
										<span class='money'>
											¥
											<del>1464</del>
										</span>
										<span class='number'>
											已售
											<i>102</i>
										</span>
									</div>
								</div>
								<div class='small-goods'>
									<a href="" class='small-goods-img'>
										<img src="{{__PUBLIC__}}/Home/images/CqgBJlQX3hqAIV32AABaj4T27Ow046-198x126.jpg" alt="" height="126" />
									</a>
									<h4>
										<a href="" class='small-goods-name'>【朝外大街】扇子餐厅</a>
										<a href="" class='small-goods-text'>扇子餐厅：4人餐，节假日通用</a>
									</h4>
									<div class='small-goods-info'>
										<span class='price'>
											<em>¥</em>
											398
										</span>
										<span class='money'>
											¥
											<del>1464</del>
										</span>
										<span class='number'>
											已售
											<i>102</i>
										</span>
									</div>
								</div>
								<div class='small-goods'>
									<a href="" class='small-goods-img'>
										<img src="{{__PUBLIC__}}/Home/images/CqgBJlQX3hqAIV32AABaj4T27Ow046-198x126.jpg" alt="" height="126" />
									</a>
									<h4>
										<a href="" class='small-goods-name'>【朝外大街】扇子餐厅</a>
										<a href="" class='small-goods-text'>扇子餐厅：4人餐，节假日通用</a>
									</h4>
									<div class='small-goods-info'>
										<span class='price'>
											<em>¥</em>
											398
										</span>
										<span class='money'>
											¥
											<del>1464</del>
										</span>
										<span class='number'>
											已售
											<i>102</i>
										</span>
									</div>
								</div>
							</li>
						</ul>
						<div class='ogp-sliderpn'>
							<a href="" class='slider-prev disabled'>
								<i></i>
							</a>
							<a href="" class='slider-next'>
								<i></i>
							</a>
						</div>
					</div>
					<div class='list-sidebarcen newga ga'>
						<h3>
							<span>看过此团购的用户还购买了</span>
						</h3>
						<div class='small-goods'>
							<a href="" class='small-goods-img'>
								<img src="{{__PUBLIC__}}/Home/images/CqgBJlQX3hqAIV32AABaj4T27Ow046-198x126.jpg" alt="" height="126" />
							</a>
							<h4>
								<a href="" class='small-goods-name'>【朝外大街】扇子餐厅</a>
								<a href="" class='small-goods-text'>扇子餐厅：4人餐，节假日通用</a>
							</h4>
							<div class='small-goods-info'>
								<span class='price'>
									<em>¥</em>
									398
								</span>
								<span class='money'>
									¥
									<del>1464</del>
								</span>
								<span class='number'>
									<i>18</i>
									人团
								</span>
							</div>
						</div>
					</div>
					<div class='list-sidebarcen nomb deal_history_clear  newga ga'>
						<h3>
							<span>最近浏览</span>
							<a href="">清空</a>
						</h3>
						<div class='sr-goods'>
							<a href="" class='sr-goods-img'>
								<img src="{{__PUBLIC__}}/Home/images/CqgBJlQX3jSAaMy0AABaj4T27Ow513-88x56.jpg" alt="" />
							</a>
							<div class='sr-goods-icon'>
								<a href="">扇子餐厅：双人餐，午晚餐通...</a>
								<span class='price'>
									<em>¥</em>
									268
								</span>
								<span class='money'>
									¥<del>834</del>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class='detail-right'>
					<div class='detail-info'>
						<div class='detail-navwarp'>
							<div class='detail-nav' style='position: static; top: 0px;'>
								<ul>
									<li class='lishow current'>
										<span>
											<i>商家位置</i>
										</span>
									</li>
									<li class='lishow'>
										<span>
											<i>团购详情</i>
										</span>
									</li>
									<li class='lishow detail-nav-comment'>
										<span>
											<i>消费评价（15）</i>
										</span>
									</li>
								</ul>
							</div>
						</div>
						<div class='detail-con'>
							<h3 class='detail-contit'>
								<span>商家地址</span>
							</h3>
							<div class='detail-map cl'>
								<div class='detail-mapleft'>
									<img src="{{__PUBLIC__}}/Home/images/map.png" alt="" />
								</div>
								
								<div class="detail-mapright">
									<div class='detail-maptext'>
										<div class='scroll-warp'>
											<ul class='scroll-content' style='height: 108px;'>
												<li class='current an'>
													<div class='shop-name'>
														<a href="">扇子餐厅</a>
													</div>
													<div class='shop-info'>
														<p class='top'>
															<span class='address'>北京朝阳区神路街39号院1号楼1层20号</span>
															<span class='operate'>
																<a href="">查看地图</a>
																<em>|</em>
																<a href="">公交/驾车</a>
															</span>
														</p>
														<p>
															<strong>营业时间：</strong>
															11:30-13:30;17:30-23:00
														</p>
														<p>
															<strong>电话：</strong>
															010-85628350
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class='clear'></div>
							</div>
							<div class='prodetail'>
								<h4 style="margin: 10px 0px; padding: 0px; font-size: 14px; color: rgb(255, 255, 255); background-color: rgb(153, 0, 0); position: relative; ">
									<div style="background-image: url({{__PUBLIC__}}/Home/images/detail_icon.png); background-color: white; height: 35px; padding-left: 10px; line-height: 28px; color: rgb(31, 31, 31); background-repeat: no-repeat no-repeat;">【本单详情】</div>
								</h4>
								<table width="100%" cellspacing='0' cellpadding='0' bordercolor='#cfcfcf' border="1" style="font-size: 14px;">
									<tbody>
										<tr class='firstRow'>
											<th align="center" bgcolor="#ededed" valign="middle" width="33%">内容</th>
											<th align="center" bgcolor="#ededed" valign="middle" width="33%">数量</th>
											<th align="center" bgcolor="#ededed" valign="middle" width="33%">价格</th>
										</tr>
										<tr>
											<th rowspan="1" colspan="3" align="center" bgcolor="#ededed" valign="middle">菜品</th>
										</tr>
										<tr>
											<td align="left" valign="middle">加拿大深海龙虾（多口味）</td>
											<td align="center" valign="middle">1只（约1.5斤）</td>
											<td align="right" valign="middle">252元</td>
										</tr>
										<tr>
											<th rowspan="1" colspan="3" align="center" bgcolor="#ededed" valign="middle">大蟹2选1</th>
										</tr>
										<tr>
											<td align="left" valign="middle">泰国贵妃蟹</td>
											<td align="center" valign="middle">2只</td>
											<td align="right" valign="middle">136元</td>
										</tr>
										<tr>
											<th rowspan="1" colspan="3" align="center" bgcolor="#ededed" valign="middle">荤菜4选1</th>
										</tr>
										<tr>
											<td align="left" valign="middle">花雕醉鸡</td>
											<td align="center" valign="middle">1份</td>
											<td align="right" valign="middle">98元</td>
										</tr>
										<tr>
											<th rowspan="1" colspan="3" align="center" bgcolor="#ededed" valign="middle">其他</th>
										</tr>
										<tr>
											<td colspan="1" rowspan="1" align="left" valign="middle">金汤翅捞饭</td>
											<td colspan="1" rowspan="1" align="center" valign="middle">2份</td>
											<td colspan="1" rowspan="1" align="right" valign="middle">136元</td>
										</tr>
										<tr>
											<td colspan="1" rowspan="1" align="left" valign="middle">扇辣菌王海参煲</td>
											<td colspan="1" rowspan="1" align="center" valign="middle">1份</td>
											<td colspan="1" rowspan="1" align="right" valign="middle">118元</td>
										</tr>
										<tr>
											<td align="left" valign="middle">芝士焗生蚝</td>
											<td align="center" valign="middle">1份</td>
											<td align="right" valign="middle">88元</td>
										</tr>
										<tr>
											<td colspan="3" rowspan="1" align="right" valign="middle">市场价最高834元，拉手团购仅需
												<strong>
													<em style="color: rgb(192, 0, 0); font-size:18px;">268</em>
												</strong>
												元
											</td>
										</tr>
									</tbody>
								</table>
								<div style="font-size: 14px;clear:both;">
									<h4 id="tips"><span>【温馨提示】</span></h4>
									<ul id="tips_generated_by_system">
										<li>
											<strong>有效期：</strong>
											2014-04-03至2016-02-24 
										</li>
										<li>
											<strong>特殊日期使用规则：</strong>
											有效期内周末、法定节假日通用
										</li>
										<li>
											<strong>预约提醒：</strong>
											请提前1天预约，预约无需出示拉手券密码
										</li>
										<li>
											<strong>特别提示：</strong>
										</li>
										<li>每张拉手券最多2人使用</li>
										<li>每次消费仅限使用1张拉手券</li>
										<li>拉手券不与店内其他优惠同享</li>
									</ul>
									<ul id="tips_editor" style="background-image: none;" class=" list-paddingleft-2"> 
										 <li><p>本次团购仅限大厅堂食</p></li> 
									</ul>
								</div>
								<div id="kfzs" class="new_h2_1">
									<h4 style="margin: 10px 0px; padding: 0px; font-size: 14px; color: rgb(255, 255, 255); background-color: rgb(255, 102, 0); position: relative;">
										<div style="background-image: url({{__PUBLIC__}}/Home/images/detail_icon.png); background-color: white; height: 35px; padding-left: 10px; line-height: 28px; color: rgb(31, 31, 31); background-repeat: no-repeat no-repeat;">
											【内容展示】
										</div>
									</h4>
								</div>
								<p>
									<strong>
										<strong style="white-space: normal;">
											咖喱龙虾
										</strong>
									</strong>
								</p>
								<p>
									<img src="{{__PUBLIC__}}/Home/images/CqgBHlTAowOAO1tGAAD1vUwwq5Q389.jpg" style="">
								</p>
								<p>辣炒龙虾</p>
								<p>
									<img src="{{__PUBLIC__}}/Home/images/CqgBHlTAowOAfyUrAAEiEb9aKP4209.jpg" style=""></p>
							</div>
							<h3 id="detail-tag04" class="detail-contit">
								<span>消费评价</span>
							</h3>

							<div class="detail-xfpj" _goods_id="8079742" _goods_type="1">
                				<div class="appraise-title">
            						<em>本单用户评价</em>
        						</div>
        						<dl class="appraise-cen">
        							<dd>
        								<div class="userac-info">
        									<p class="star12">
        										<span style="width:100%;"></span>
        									</p>
        									<a class="disabled" href="javascript:void(0);">
        										<img src="http://f1.lashouimg.com/public/{{__PUBLIC__}}/Home/images/index/level4.png" height="15" width="22">
        									</a>
        									<span class="userac-name">q***4</span>
        								</div>
        								<div class="userac">
        									<p>很好</p>
        								</div>
        								<div class="userac-time">
        									<span>扇子餐厅</span>
        									<em>2015-09-10</em>
        								</div>
        							</dd>
        						</dl>
    						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class='clear'></div>
	</main>


	<!-- 底部-------------------------------------------------------------------------- -->
	{{include file="Common/footer.php"}}
</body>
</html>
