<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>
		货品列表
		</title>
		<link rel="stylesheet" href="{{__PUBLIC__}}/Admin/Bootstrap/Css/bootstrap.min.css" />
		<link rel="stylesheet" href="{{__PUBLIC__}}/Admin/Css/common.css" />
		<script type="text/javascript" src='{{__PUBLIC__}}/Admin/Js/jquery-1.7.2.min.js'></script>
		<style type="text/css">body {
	margin-bottom: 100px;
}</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
				
					<table class='table table-bordered table-hover'>
						<tr>
							<th>
								货品GLID
							</th>
							{{foreach from="$spec" key="$k" value="$v"}}
								<th>
									{{$v['taname']}}
								</th>
							{{endforeach}}
							<th>
								库存
							</th>
							<th>
								货号
							</th>
							<th>
								操作
							</th>
						</tr>
						<!--<form action="{{U('Admin/GoodsLists/edit',array('gid'=>$_GET['gid'],'tid'=>$_GET['tid']))}})}}" method="post">-->
						{{foreach from="$gdata" key="$gk" value="$gv"}}
						{{if value="$gv['gid']==Q('gid')"}}
							<tr class="info">
								<td>
									{{$gv['glid']}}
								</td>
								{{foreach from="$gv['combine']" key="$gkk" value="$gvv"}}
									<td class="gtv2">
										{{$gvv['gtvalue']}}
									</td>
								{{endforeach}}
								{{foreach from="$spec" key="$sk" value="$sv"}}
									<td class="gtv" style="display: none;">
										<select name="combine{{$sk}}" id="" style="width:80px">
											{{foreach from="$sv['opt']" key="$pk" value="$pv"}}
											<option value="{{$pv['gtid']}}">{{$pv['gtvalue']}}</option>
											{{endforeach}}
										</select>
									</td>
								{{endforeach}}
								<td class="gtv2">
									{{$gv['inventory']}}
								</td>
								<td class="gtv" style="display: none;">
									<input type="text" name="inventory" value="{{$gv['inventory']}}" />
								</td>
								<td class="gtv2">
									{{$gv['number']}}
								</td>
								<td class="gtv" style="display: none;">
									<input type="text" name="number" value="{{$gv['number']}}" />
									<input type="hidden" name="gid" value="{{Q('gid')}}" />
								</td>
								<td>
									<a href="{{U('Admin/GoodsLists/del',array('glid'=>$gv['glid'],'gid'=>$gv['gid'],'tid'=>$_GET['tid']))}}" class="btn btn-primary del">删除货品</a>
									<input style="display: none;" type="submit" value='确认修改' class="btn btn-primary ok"/>
									<a class="btn btn-primary no" href="javascript:;" style="display: none;">取消</a>
									<a href="javascript:;" class="btn btn-primary edit">修改货品</a>
								</td>
							</tr>
							{{endif}}
						{{endforeach}}
						<!--</form>-->
						<form action="{{U('Admin/GoodsLists/index',array('gid'=>$_GET['gid'],'tid'=>$_GET['tid']))}}" method='post'>
							<tr class="info">
								<td>
									添加货品
								</td>
								{{foreach from="$spec" key="$sk" value="$sv"}}
									<td>
										<select name="combine[]" id="" style="width:80px">
											{{foreach from="$sv['opt']" key="$pk" value="$pv"}}
											<option value="{{$pv['gtid']}}">{{$pv['gtvalue']}}</option>
											{{endforeach}}
										</select>
									</td>
								{{endforeach}}
								<td>
									<input type="text" name='inventory' style="width:80px"/>
								</td>
								<td>
									<input type="text" name='number' value="" style="width:80px"/>
								</td>
								<td>
									<input type="submit" value='保存添加' class="btn btn-primary"/>
								</td>
						
							</tr>
						</form>
					</table>
				
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$('.edit').on('click',function(){
					$(this).parent().siblings('.gtv').show();
					$(this).parent().siblings('.gtv2').hide();
					$(this).siblings('.ok').show();
					$(this).siblings('.no').show();
					$(this).siblings('.del').hide();
					$(this).hide();
				})
				$('.no').on('click',function(){
					$(this).parent().siblings('.gtv').hide();
					$(this).parent().siblings('.gtv2').show();
					$(this).hide();
					$(this).siblings('.ok').hide();
					$(this).siblings('.del').show();
					$(this).siblings('.edit').show();
				})
			})
		</script>
	</body>
</html>