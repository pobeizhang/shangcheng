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
									<th width="100" style="text-align: center;">
										分类名称
									</th>
									<th width="100" style="text-align: center;">
										商品类型
									</th>
									<th width="210" style="text-align: center;">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{foreach from='$scate' key='$k' value='$v'}}
								{{if value="$v['pid']!=0"}}
								<tr>
									<td>
										{{$v['cid']}}
									</td>
									<td>
										{{$v['_cname']}}
									</td>
									<td style="text-align: center;">
										{{if value="$v['tid']==0"}}
										----
										{{else}}
										{{$v['tname']}}
										{{endif}}
									</td>
									<td style="text-align: center;">
										<a href="{{U('Admin/Category/addSonCategory',array('pid'=>$v['cid']))}}" class="btn btn-sm btn-primary">
											添加子分类
										</a>
										
										<a href="{{U('Admin/Category/editSonCategory',array('cid'=>$v['cid'],'tid'=>$v['tid']))}}" class="btn btn-sm btn-warning">
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