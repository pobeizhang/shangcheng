<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="./Public/Admin/Bootstrap/Css/bootstrap.min.css" />
	<link rel="stylesheet" href="./Public/Admin/Css/common.css" />
</head>
<body>
	<form action="{{U('Admin/Category/editSonCategory')}}" method='post'>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<fieldset>
					<legend>修改商品子分类</legend>
					<table class="table table-bordered table-hover">
							<tr class="info">
								<td>所属类型</td>
								<td>
									<select name="tid" class="form-control" required="">
										<option value="0">--请选择--</option>
										{{foreach from="$typedata" key="$tk" value="$tv"}}
										{{if value="$tv['tid']==$data['tid']"}}
										<option value="{{$tv['tid']}}" selected="selected">{{$tv['tname']}}</option>
										{{else}}
										<option value="{{$tv['tid']}}">{{$tv['tname']}}</option>
										{{endif}}
										{{endforeach}}
									</select>
								</td>
							</tr> 
						<tr class="info">
							<td>子分类名称</td>
							<td>
								<input id="exampleInputEmail1" class="form-control" type="text" value="{{$data['cname']}}" required="" name="cname">
							</td>
						</tr>
						<tr class="info">
							<td>子分类排序</td>
							<td>
								<input id="exampleInputEmail1" class="form-control" type="number" value="{{$data['sort']}}" required="" name="sort" value="0">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="hidden" name="cid" value="{{$data['cid']}}" />
								<!--<input type="hidden" name="tid" value="{{$cdata['tid']}}" />-->
								<input type="submit" value="修改子分类" class="btn btn-primary" />
							</td>
						</tr>
					</table>
					</fieldset>
				</div>
			</div>
		</div>
	</form>
</body>
</html>