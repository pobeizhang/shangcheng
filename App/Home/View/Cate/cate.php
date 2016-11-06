<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>【拉手网】北京团购_拉手网团购网_北京团购大全_欢聚拉手，快乐生活</title>
<link rel="shortout icon" href="{{__PUBLIC__}}/Home/images/favicon.ico" />
<link rel="stylesheet" href="{{__PUBLIC__}}/Home/css/index.css" />
<link rel="stylesheet" href="{{__PUBLIC__}}/Home/css/cate.css" />
<script type="text/javascript" src="{{__PUBLIC__}}/Home/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="{{__PUBLIC__}}/Home/js/js.js"></script>
<script type="text/javascript" src="{{__PUBLIC__}}/Home/js/cate.js"></script>
<script type="text/javascript" src="{{__PUBLIC__}}/Home/js/goods.js"></script>
</head>
<body>
	<!-- 头部----------------------------------------------------------------------------------- -->
	{{include file="Common/header.php"}}
	<!-- 头部结束 -->
	<!-- 导航部分------------------------------------------------------------------------------ -->
	{{include file="Common/nav.php"}}
	<!-- 导航部分 -->

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
			<div class='clear'></div>
		</div>

		<div class='main-content'>
			<div class='sort-filter'>
				<div class='sf-hot'>
					<h3>热　门：</h3>
					<ul>
						<li><a href="" class='hot'>新单<span>59</span></a></li>
						<li><a href="">电影</a></li>
						<li><a href="">自助餐</a></li>
						<li><a href="">经济型酒店</a></li>
						<li><a href="">门票</a></li>
						<li><a href="">休闲零食</a></li>
						<li><a href="">地方特产</a></li>
						<li><a href="">火锅</a></li>
						<li><a href="">KTV</a></li>
						<li><a href="">周边游</a></li>
						<li><a href="">养生休闲</a></li>
						<li><a href="">热卖专场</a></li>
						<li><a href="">话费充值</a></li>
					</ul>
				</div>

				<div class='sf-breadcrumbs'>
					<span class='sfbc-item sfbc-item-open'>
						<em class='sfbc-item-title'>
							<font>美食</font>
							<i class='item-icon'></i>
							<a href="" class='item-close'></a>
						</em>

						<em class='sfbc-item-option'>
							<a href="">美食<span>1625</span></a>
							<a href="">休闲娱乐<span>2866</span></a>
							<a href="">电影<span>57</span></a>
							<a href="">生活服务<span>2299</span></a>
							<a href="">摄影写真<span>974</span></a>
							<a href="">酒店<span>12556</span></a>
							<a href="">旅游<span>1539</span></a>
							<a href="">丽人<span>1044</span></a>
							<a href="">教育培训<span>657</span></a>
							<a href="">抽奖公益<span>5</span></a>
							<a href="">购物<span>2171</span></a>
						</em>
					</span>
				</div>

				<div class='sf-content'>
					<h3>分　类：</h3>
					<div class='sf-link sf-unfold'>
						<a href="" class='filter-more' style='display:none;'>
							<span>更多</span>
							<i class='triangle'></i>
						</a>
						<!-- 商品顶级分类信息 -->
						<ul>
							<li><a href="">全部</a></li>
							{{foreach from="$cdata" key="$ck" value="$cv"}}
							{{if value="$cv['pid']==0"}}
							<li><a href="{{U('Home/Cate/cate',array('cid'=>$cv['cid'],'pid'=>$cv['pid']))}}" {{if value="$cv['cid']==Q('pid')||$cv['cid']==Q('cid')"}}class='current'{{endif}}>{{$cv['cname']}}<span>1625</span></a></li>
							{{endif}}
							{{endforeach}}
						</ul>
					</div>
					<div class='clear'></div>
				</div>

				<div class='sf-firstsub'>
					<div class='sf-link'>
						<a href="javascript:;" class='filter-more'>
							<span>更多</span>
							<i class='triangle'></i>
						</a>
						<!-- 详细商品分类信息 -->
						<ul>
							<li><a href="javascript:;" {{if value="Q('pid')==0"}}class='current'{{endif}}>全部</a></li>
							{{foreach from="$cdata" key="$k" value="$v"}}
							{{if value="$v['pid']==Q('pid')&&Q('pid')!=0"}}
							<li><a href="{{U('Home/Cate/cate',array('cid'=>$v['cid'],'pid'=>$v['pid']))}}" {{if value="Q('cid')==$v['cid']"}} class='current'{{endif}}>{{$v['cname']}}<span>290</span></a></li>
							{{elseif value="Q('pid')==0&&$v['pid']==Q('cid')"}}
								<li><a href="{{U('Home/Cate/cate',array('cid'=>$v['cid'],'pid'=>$v['pid']))}}" {{if value="Q('cid')==$v['cid']"}} class='current'{{endif}}>{{$v['cname']}}<span>290</span></a></li>
							{{endif}}
							{{endforeach}}
						</ul>
					</div>
				</div>
				<div class='sf-contentmore' style='display:none'>

					{{foreach from="$attrs" key="$ka" value="$kv"}}
					<div class='sf-content'>
						<?php 
						$tem=$filter;
						$pid=Q('pid');
						$tem[$ka]=0;
					?>
						<h3>{{$kv['name']}}：</h3>
						<div class='sf-link'>
							<ul>
								<li><a href="{{U('Home/Cate/cate',array('cid'=>$_GET['cid'],'sx'=>implode('_',$tem),'pid'=>$pid))}}" class='current'>全部</a></li>
								{{foreach from="$kv['opt']" key="$ok" value="$ov"}}
								<li>
								<?php $tem[$ka]=$ov['id']?>
									<a href="{{U('Home/Cate/cate',array('cid'=>$_GET['cid'],'sx'=>implode('_',$tem),'pid'=>$pid))}}">
										{{$ov['value']}}
										<span>254</span>
									</a>
								</li>
								{{endforeach}}
							</ul>
						</div>
					</div>
					{{endforeach}}
				</div>

				<div class='sf-push'>
					<span>
						<em classs='open'>查看</em>
						<em class='close'>收起</em>
						<b>更多筛选(价格、人数、时段)</b>
						<i class='cate-i'></i>
					</span>
				</div>

				<div class='sf-sequence'>
					<div class='fl'>
						<a href=""class='current left'>默认排序</a>
						<a href="">
							<span>销量</span>
							<i class='up'></i>
						</a>
						<a href="">
							<span>价格</span>
							<i class='up'></i>
						</a>
						<a href="">
							<span>价格</span>
							<i class='down'></i>
						</a>
						<a href="">
							<span>发布时间</span>
							<i class='down'></i>
						</a>
						<label class='merger'>
							<input type="checkbox" value='b' />
							<em>免预约</em>
						</label>
						<label class='merger'>
							<input type="checkbox" value='voucher' />
							<em>代金券</em>
						</label>
						<label class='merger'>
							<input type="checkbox" value='holiday' />
							<em>节假日通用</em>
						</label>
					</div>
				</div>
				<div class='clear'></div>
			</div>

			<div class='list-content'>
				<div class='goods-list'>
					{{foreach from="$goods" key="$gk" value="$gv"}}
					<div class='goods'>
						<a href="{{U('Home/Goods/goods',array('gid'=>$gv['gid']))}}" class='goods-img'>
							<img src="{{$gv['pic']}}" style="width:308px;height:196px" alt="" />
							<span class='goods-place'>人大西门店、东大桥店、蒲黄榆店、东直门店、公益西桥店、车公庄店、望京店、惠新东街店、霄云路店、梨园店、昌平万科店、北苑华…</span>
							<span class='goods-mark'>
								<em class='merger iepng'></em>
								<!-- <em class='reserve iepng'></em> -->
							</span>
						</a>

						<h3>
							<a href="{{U('Home/Goods/goods',array('gid'=>$gv['gid']))}}" class='goods-name'>{{$gv['gname']}}</a>
							<a href="{{U('Home/Goods/goods',array('gid'=>$gv['gid']))}}"class='goods-text'>汉斯特（劲松店）：单人自助午餐</a>
						</h3>
						<div class='goods-info'>
							<span class='price'><em>¥</em>{{$gv['shopprice']}}</span>
							<span class='app-price'>
								<b>立减</b>
								<em>¥32.40</em>
							</span>
							<span class='money'>
								¥
								<del>{{$gv['marketprice']}}</del>
							</span>
							<span class='number'>
								已售
								<i>1274</i>
							</span>
						</div>
					</div>
					{{endforeach}}
					{{if value="empty($goods)"}}
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;没有为你找到符合条件的商品
					{{endif}}
					<div class='clear'></div>
				</div>
			</div>
			<div class='clear'></div>
		</div>
		<!-- <div class='clear'></div> -->
	</main>

	<!--底部热门团购模块---------------------------------------------------------------- -->
	<div class='gp-hot'>
		<div class='gp-hottit'>
			<a class='left current' onclick="tabCutover(this,'hotc01')" style='borderColor:#EDEDED;background:white;' href="javascript:;">热门城市</a>
			<a class='current' onclick="tabCutover(this,'hotc02')" href="javascript:;">热门团购</a>
			<a class='current' onclick="tabCutover(this,'hotc03')" href="javascript:;">美食团购</a>
			<a class='current' onclick="tabCutover(this,'hotc04')" href="javascript:;">酒店团购</a>
			<a class='current' onclick="tabCutover(this,'hotc05')" href="javascript:;">电影票团购</a>
			<a class='current' onclick="tabCutover(this,'hotc06')" href="javascript:;">ktv团购</a>
			<a class='current' onclick="tabCutover(this,'hotc07')" href="javascript:;">分类导航</a>
		</div>
		<div class='gp-hotcen'>
			<p class='hotc01' style='display:block;'>
				<a href="">北京团购</a>
				<a href="">广东团购</a>
				<a href="">上海团购</a>
				<a href="">深圳团购</a>
				<a href="">成都团购</a>
				<a href="">东莞团购</a>
				<a href="">重庆团购</a>
				<a href="">厦门团购</a>
				<a href="">南京团购</a>
				<a href="">西安团购</a>
				<a href="">石家庄团购</a>
				<a href="">郑州团购</a>
				<a href="">青岛团购</a>
				<a href="">哈尔滨团购</a>
				<a href="">合肥团购</a>
				<a href="">福州团购</a>
				<a href="">大庆团购</a>
				<a href="">佛山团购</a>
				<a href="">杭州团购</a>
				<a href="">沈阳团购</a>
				<a href="">长春团购</a>
				<a href="">苏州团购</a>
				<a href="">大连团购</a>
				<a href="">顺德团购</a>
				<a href="">济南团购</a>
				<a href="">南宁团购</a>
				<a href="">泉州团购</a>
				<a href="">烟台团购</a>
				<a href="">银川团购</a>
			</p>
			<p class='hotc02'>
				<a href="">电影票团购</a>
				<a href="">婚纱照团购</a>
				<a href="">蛋糕团购</a>
				<a href="">美食团购</a>
				<a href="">火锅团购</a>
				<a href="">ktv团购</a>
				<a href="">眼镜团购</a>
				<a href="">自助餐团购</a>
				<a href="">美发团购</a>
				<a href="">游泳团购</a>
				<a href="">月饼团购</a>
				<a href="">烤肉团购</a>
				<a href="">旅游团购</a>
				<a href="">体验团购</a>
			</p>
			<p class='hotc03'>
				<a href="">北京美食团购</a>
				<a href="">广州美食团购</a>
				<a href="">上海美食团购</a>
				<a href="">深圳美食团购</a>
				<a href="">成都美食团购</a>
				<a href="">东莞美食团购</a>
				<a href="">重庆美食团购</a>
				<a href="">厦门美食团购</a>
				<a href="">南京美食团购</a>
				<a href="">西安美食团购</a>
				<a href="">石家庄美食团购</a>
				<a href="">郑州美食团购</a>
				<a href="">青岛美食团购</a>
				<a href="">哈尔滨美食团购</a>
				<a href="">合肥美食团购</a>
				<a href="">福州美食团购</a>
				<a href="">大庆美食团购</a>
				<a href="">佛山美食团购</a>
				<a href="">杭州美食团购</a>
				<a href="">沈阳美食团购</a>
				<a href="">长春美食团购</a>
				<a href="">苏州美食团购</a>
				<a href="">大连美食团购</a>
				<a href="">顺德美食团购</a>
				<a href="">济南美食团购</a>
				<a href="">南宁美食团购</a>
				<a href="">泉州美食团购</a>
				<a href="">烟台美食团购</a>
				<a href="">银川美食团购</a>
			</p>
			<p class='hotc04'>
				<a href="">北京酒店团购</a>
				<a href="">广州酒店团购</a>
				<a href="">上海酒店团购</a>
				<a href="">深圳酒店团购</a>
				<a href="">成都酒店团购</a>
				<a href="">东莞酒店团购</a>
				<a href="">重庆酒店团购</a>
				<a href="">厦门酒店团购</a>
				<a href="">南京酒店团购</a>
				<a href="">西安酒店团购</a>
				<a href="">石家酒店食团购</a>
				<a href="">郑州酒店团购</a>
				<a href="">青岛酒店团购</a>
				<a href="">哈尔酒店食团购</a>
				<a href="">合肥酒店团购</a>
				<a href="">福州酒店团购</a>
				<a href="">大庆酒店团购</a>
				<a href="">佛山酒店团购</a>
				<a href="">杭州酒店团购</a>
				<a href="">沈阳酒店团购</a>
				<a href="">长春酒店团购</a>
				<a href="">苏州酒店团购</a>
				<a href="">大连酒店团购</a>
				<a href="">顺德酒店团购</a>
				<a href="">济南酒店团购</a>
				<a href="">南宁酒店团购</a>
				<a href="">泉州酒店团购</a>
				<a href="">烟台酒店团购</a>
				<a href="">银川酒店团购</a>
			</p>
			<p class='hotc05'>
				<a href="">北京电影票团购</a>
				<a href="">广州电影票团购</a>
				<a href="">上海电影票团购</a>
				<a href="">深圳电影票团购</a>
				<a href="">成都电影票团购</a>
				<a href="">东莞电影票团购</a>
				<a href="">重庆电影票团购</a>
				<a href="">厦门电影票团购</a>
				<a href="">南京电影票团购</a>
				<a href="">西安电影票团购</a>
				<a href="">石家电影票食团购</a>
				<a href="">郑州电影票团购</a>
				<a href="">青岛电影票团购</a>
				<a href="">哈尔电影票食团购</a>
				<a href="">合肥电影票团购</a>
				<a href="">福州电影票团购</a>
				<a href="">大庆电影票团购</a>
				<a href="">佛山电影票团购</a>
				<a href="">杭州电影票团购</a>
				<a href="">沈阳电影票团购</a>
				<a href="">长春电影票团购</a>
				<a href="">苏州电影票团购</a>
				<a href="">大连电影票团购</a>
				<a href="">顺德电影票团购</a>
				<a href="">济南电影票团购</a>
				<a href="">南宁电影票团购</a>
				<a href="">泉州电影票团购</a>
				<a href="">烟台电影票团购</a>
				<a href="">银川电影票团购</a>
			</p>
			<p class='hotc06'>
				<a href="">北京ktv团购</a>
				<a href="">广州ktv团购</a>
				<a href="">上海ktv团购</a>
				<a href="">深圳ktv团购</a>
				<a href="">成都ktv团购</a>
				<a href="">东莞ktv团购</a>
				<a href="">重庆ktv团购</a>
				<a href="">厦门ktv团购</a>
				<a href="">南京ktv团购</a>
				<a href="">西安ktv团购</a>
				<a href="">石家庄ktv食团购</a>
				<a href="">郑州ktv团购</a>
				<a href="">青岛ktv团购</a>
				<a href="">哈尔滨ktv食团购</a>
				<a href="">合肥ktv团购</a>
				<a href="">福州ktv团购</a>
				<a href="">大庆ktv团购</a>
				<a href="">佛山ktv团购</a>
				<a href="">杭州ktv团购</a>
				<a href="">沈阳ktv团购</a>
				<a href="">长春ktv团购</a>
				<a href="">苏州ktv团购</a>
				<a href="">大连ktv团购</a>
				<a href="">顺德ktv团购</a>
				<a href="">济南ktv团购</a>
				<a href="">南宁ktv团购</a>
				<a href="">泉州ktv团购</a>
				<a href="">烟台ktv团购</a>
				<a href="">银川ktv团购</a>
			</p>
			<p class='hotc07'>
				<a href="">生活指南</a>
				<a href="">美食地图</a>
				<a href="">电影地图</a>
				<a href="">ktv地图</a>
				<a href="">酒店地图</a>
				<a href="">生活服务地图</a>
				<a href="">北京热门地标</a>
			</p>
		</div>
	</div>

	<!-- 底部-------------------------------------------------------------------------- -->
	{{include file="Common/footer.php"}}
<body>
</body>
</html>
