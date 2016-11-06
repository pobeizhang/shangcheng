<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<title>
		</title>
		<link rel="stylesheet" href="./Public/Admin/Bootstrap/Css/bootstrap.min.css" />
		<link rel="stylesheet" href="./Public/Admin/Css/common.css" />
		<script type="text/javascript" src="./Public/Admin/Js/jquery-1.7.2.min.js"></script>
	</head>
	<body>
		<form action="{{U('Admin/Category/category')}}" method="post">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th width="30">
										cid
									</th>
									<th width="210" style="text-align: center;">
										分类名称
									</th>
									<th width="210" style="text-align: center;">
										所属商品类型
									</th>
									<th width="auto" style="text-align: center;">
										<button class="btn btn-primary" style='width:130px;' type="submit">
											自定义排序
										</button>
										<a href="javascript:;" id="order_a" class="btn btn-primary" style="margin-left: 10px;">
											一键排序<span id='order_span'>{{if value="Q('sort')==1"}}(降序){{else}}(升序){{endif}}</span>
										</a>
									</th>
									<th width="210" style="text-align: center;">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{foreach from='$catedata' key='$k' value='$v'}}
								{{if value="$v['pid']==0"}}
								<tr>
									<td>
										{{$v['cid']}}
									</td>
									<td style="text-align: center;">
										{{$v['_cname']}}
									</td>
									<td style="text-align: center;">
										----
									</td>
									<td style="text-align: center;">
										<input type="hidden" style="width:30px" name="cid[]" value="{{$v['cid']}}" id="" />
										<input type="number" id="num" min="0" style="width:50px;text-align: center;" name="sort[]" value="{{$v['sort']}}" id="" />
									</td>
									<td style="text-align: center;">
										<a href="{{U('Admin/Category/addSonCategory',array('pid'=>$v['cid']))}}" class="btn btn-sm btn-primary">
											添加子分类
										</a>
										<a href="{{U('Admin/Category/sonCategory',array('cid'=>$v['cid']))}}" class="btn btn-sm btn-primary">
											查看子分类
										</a>
										<a href="{{U('Admin/Category/editCategory',array('cid'=>$v['cid']))}}" class="btn btn-sm btn-warning">
											编辑
										</a>
										<a href="{{U('Admin/Category/delCategory',array('cid'=>$v['cid']))}}" class="btn btn-sm btn-danger">
											删除
										</a>
									</td>
								</tr>
								{{endif}}
								{{endforeach}}
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</form>
		<script src="./Public/Admin/Houtai/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
		<script>
		$(function() {
			{{if value = "isset($_GET['sort'])"}}
				s = {{Q('sort')}}; 
			{{else}}
				s = 0; 
			{{endif}}
			$('#order_a').click(function() {
				if (s == 0) {
					/*降序*/
					location.href = "{{U('Admin/Category/category',array('sort'=>1))}}";
					s = 1;
				} else {
					/*升序*/
					location.href = "{{U('Admin/Category/category',array('sort'=>0))}}";
					s = 0;
				}
			})
		})
		</script>
	</body>
</html>