<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<title></title>
		<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/Bootstrap/Css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/Css/common.css" />
		<style type="text/css">
			body{
				margin-bottom: 100px;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<table class="table table-bordered table-hover">
						<tr>
							<th style="text-align: center;">OID</th>
							<th style="text-align: center;">订单号</th>
							<th style="text-align: center;">收货人</th>
							<th style="text-align: center;">收货地址</th>
							<th style="text-align: center;">电话</th>
							<th style="text-align: center;">总价</th>
							<th style="text-align: center;">购买时间</th>
							<th style="text-align: center;">订单的付款状态</th>
							<th style="text-align: center;">收货情况</th>
							<th style="text-align: center;">发货操作</th>
						</tr>
						<?php foreach ($orders as $k=>$v){?>
						<tr class="info">
							<td style="text-align: center;"><?php echo $v['oid']?></td>
							<td style="text-align: center;"><?php echo $v['number']?></td>
							<td style="text-align: center;"><?php echo $v['consignee']?></td>
							<td style="text-align: center;"><?php echo $v['address']?></td>
							<td style="text-align: center;"><?php echo $v['mobile']?></td>
							<td style="text-align: center;"><?php echo $v['total']?></td>
							<td style="text-align: center;"><?php echo date('Y-m-d H:i:s',$v['time'])?></td>
							<td style="text-align: center;"><?php echo $v['status']?></td>
							<td style="text-align: center;"><?php if($v['status']=='未付款'){?>
                等待用户付款<?php }else if($v['get']==0){?>未发货<?php }else{?>已发货
               <?php }?></td>
							<td style="text-align: center;"><?php if($v['status']=='未付款'){?>
                等待用户付款<?php }else if($v['get']==1){?>发货中...<?php }else{?><a href="<?php echo U('Admin/Orders/fahuo',array('oid'=>$v['oid']))?>">发货</a>
               <?php }?></td>
						</tr>
						<?php }?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>