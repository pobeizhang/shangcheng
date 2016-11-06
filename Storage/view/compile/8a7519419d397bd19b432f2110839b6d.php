<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="./Public/Admin/Bootstrap/Css/bootstrap.min.css" />
	<link rel="stylesheet" href="./Public/Admin/Css/common.css" />
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th style="text-align: center;">
								类型TID
							</th>
							<th style="text-align: center;">
								类型名称
							</th>
							<th style="text-align: center;">
								操作
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($allData as $k=>$v){?>
						<tr class="info">
							<td style="text-align: center;">
								<?php echo $v['tid']?>
							</td>
							<td style="text-align: center;">
								<?php echo $v['tname']?>
							</td>
							<td style="text-align: center;">
								<a href="<?php echo U('Admin/ShopType/shopAttribute',array('tid'=>$v['tid']))?>" class="btn btn-success"><i class="icon-th icon-white"></i>属性列表</a>
								<a href="<?php echo U('Admin/ShopType/addShopAttribute',array('tid'=>$v['tid']))?>" class="btn btn-sm btn-warning">添加商品属性</a>
								<a href="<?php echo U('Admin/ShopType/editShopType',array('tid'=>$v['tid']))?>" class="btn btn-warning"><i class="icon-pencil icon-white"></i>修改</a>
								<a href="<?php echo U('Admin/ShopType/delShopType',array('tid'=>$v['tid']))?>" class="btn btn-danger"><i class="icon-trash icon-white"></i>删除</a>
							</td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>