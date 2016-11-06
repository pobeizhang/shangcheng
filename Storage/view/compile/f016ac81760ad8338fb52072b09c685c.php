<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="./Public/Admin/Bootstrap/Css/bootstrap.min.css" />
	<link rel="stylesheet" href="./Public/Admin/Css/common.css" />
</head>
<body>
	<form action="<?php echo U('Admin/Category/addCategory')?>" method='post'>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<fieldset>
					<legend>添加商品分类</legend> 
					<table class="table table-bordered table-hover">
						<if condition='$type'>
							<tr class="info">
								<td>所属类型</td>
								<td>
									<select name="tid" class="form-control" required="">
										<option value="">请选择</option>
										<?php foreach ($typesdata as $k=>$v){?>
										<option value="<?php echo $v['tid']?>"><?php echo $v['tname']?></option>
										<?php }?>
									</select>
								</td>
							</tr>
						</if>
						<tr class="info">
							<td>分类名称</td>
							<td>
								<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类名称" required="" name="cname">
							</td>
						</tr>
						<tr class="info">
							<td>分类排序</td>
							<td>
								<input id="exampleInputEmail1" class="form-control" type="number" placeholder="请输入分类排序" required="" name="sort" value="0">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" value="添加分类" class="btn btn-primary" />
							</td>
						</tr>
					</table>
					</fieldset>
				</div>
			</div>
		</div>
	<input type='hidden' name='__TOKEN__' value='0c89c206921f84590fa5b66af93383dd'</form>
</body>
</html>