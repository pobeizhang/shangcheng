{{category}}
	<div class='sort'>
		<div class='sort-menu'>
			<em class='sort-icon'></em>
			<i class='{{$v['className']}}'></i>
			<a href="{{U('Home/Cate/cate',array('cid'=>$v['cid'],'tid'=>$v['tid'],'pid'=>$v['pid']))}}" class='title'>{{$v['cname']}}</a>
			<p>
				{{list from="$v['child1']" name="$n" row="3"}}
				<a href="{{U('Home/Cate/cate',array('cid'=>$n['cid'],'tid'=>$n['tid'],'pid'=>$n['pid']))}}">{{$n['cname']}}</a>
				{{endlist}}
			</p>
		</div>
		
		{{if value="empty($v['child1'][0]['child2'])"}}
		<div class='sort-con'>
			<div class='sort-con-left'>
				<div class='menu-cover'></div>
				<h4>
					<a href="{{U('Home/Cate/cate',array('cid'=>$v['cid'],'tid'=>$v['tid'],'pid'=>$v['pid']))}}">{{$v['cname']}}</a>
				</h4>
				<ul class='sort-link02'>
					{{foreach from="$v['child1']" key="$kk" value="$vv"}}
					<li>
						<a href="{{U('Home/Cate/cate',array('cid'=>$vv['cid'],'tid'=>$vv['tid'],'pid'=>$vv['pid']))}}">{{$vv['cname']}}</a>
					</li>
					{{endforeach}}
				</ul>
			</div>
		</div>
		{{elseif value="count($v['child1'])<=4"}}
		<div class='sort-con'>
			<div class='sort-con-left'>
				<div class='menu-cover'></div>
				{{foreach from="$v['child1']" key="$k3" value="$v3"}}
				<h4>
					<a href="{{U('Home/Cate/cate',array('cid'=>$v3['cid'],'tid'=>$v3['tid'],'pid'=>$v3['pid']))}}">{{$v3['cname']}}</a>
				</h4>
				<ul class='sort-link02'>
					{{foreach from="$v3['child2']" key="$k4" value="$v4"}}
					<li>
						<a href="{{U('Home/Cate/cate',array('cid'=>$v4['cid'],'tid'=>$v4['tid'],'pid'=>$v4['pid']))}}">{{$v4['cname']}}</a>
					</li>
					{{endforeach}}
				</ul>
				{{endforeach}}
			</div>
		</div>
		{{else}}
		<div class='sort-con gouwu-top'>
			<div class='sort-con-piece'>
				<div class='fl'>
					<div class='menu-cover'></div>
					{{list from="$v['child1']" name="$m" row="4"}}
					<h4>
						<a href="{{U('Home/Cate/cate',array('cid'=>$m['cid'],'tid'=>$m['tid'],'pid'=>$m['pid']))}}">{{$m['cname']}}</a>
					</h4>
					<ul class='sort-link02'>
						{{foreach from="$m['child2']" key="$mk" value="$mv"}}
						<li>
							<a href="{{U('Home/Cate/cate',array('cid'=>$mv['cid'],'tid'=>$mv['tid'],'pid'=>$mv['pid']))}}">{{$mv['cname']}}</a>
						</li>
						{{endforeach}}
					</ul>
					{{endlist}}
				</div>
				<div class='fr'>
					{{list from="$v['child1']" name="$mn" start="5"}}
					<h4>
						<a href="{{U('Home/Cate/cate',array('cid'=>$mn['cid'],'tid'=>$mn['tid'],'pid'=>$mn['pid']))}}">{{$mn['cname']}}</a>
					</h4>
					<ul class='sort-link02'>
						{{foreach from="$mn['child2']" key="$mnk" value="$mnv"}}
						<li>
							<a href="{{U('Home/Cate/cate',array('cid'=>$mnv['cid'],'tid'=>$mnv['tid'],'pid'=>$mnv['pid']))}}">{{$mnv['cname']}}</a>
						</li>
						{{endforeach}}
					</ul>
					{{endlist}}
				</div>
			</div>
		</div>
		{{endif}}
	</div>
{{endcategory}}
	<div class='sort-lottery'>
		<div class='sort-menu'>
			<i class='choujiang'></i>
			<a href="" class='title'>0元抽奖</a>
		</div>
	</div>
