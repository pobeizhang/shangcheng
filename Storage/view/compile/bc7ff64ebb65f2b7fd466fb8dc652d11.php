<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="./Public/Admin/Bootstrap/Css/bootstrap.min.css" />
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>
								属性TAID
							</th>
							<th>
								属性名称
							</th>
							<th>
								属性类别
							</th>
							<th>
								属性值
							</th>
							<th>
								操作
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($attrData as $k=>$v){?>
						<tr class="success">
							<td>
								<?php echo $v['taid']?>
							</td>
							<td>
								<?php echo $v['taname']?>
							</td>
							<td>
								<?php if($v["class"]==1){?>
                规格<?php }else{?>属性
               <?php }?>
							</td>
							<td>
								<?php echo $v['tavalue']?>
							</td>
							<td>
								<a href="<?php echo U('Admin/ShopType/editTypeAttr',array('taid'=>$v['taid'],'tid'=>$v['tid']))?>" class="btn btn-warning"><i class="icon-pencil icon-white"></i>修改</a>
								<a href="<?php echo U('Admin/ShopType/delTypeAttr',array('taid'=>$v['taid']))?>" class="btn btn-danger"><i class="icon-trash icon-white"></i>删除</a>
							</td>
						</tr>
						<?php }?>
						<!--<tr>
							<td colspan='5' align='center'>
								<a href="<?php echo U('Admin/ShopType/addShopAttribute')?>"  class="btn btn-primary"><i class="icon-pencil icon-white"></i>添加属性</a>
							</td>
						</tr>-->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>