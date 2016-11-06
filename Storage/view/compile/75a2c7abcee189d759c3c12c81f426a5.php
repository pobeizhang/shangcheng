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
		<form action="<?php echo U('Admin/Category/category')?>" method="post">
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
											一键排序<span id='order_span'><?php if(Q('sort')==1){?>
                (降序)<?php }else{?>(升序)
               <?php }?></span>
										</a>
									</th>
									<th width="210" style="text-align: center;">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($catedata as $k=>$v){?>
								<?php if($v['pid']==0){?>
                
								<tr>
									<td>
										<?php echo $v['cid']?>
									</td>
									<td style="text-align: center;">
										<?php echo $v['_cname']?>
									</td>
									<td style="text-align: center;">
										----
									</td>
									<td style="text-align: center;">
										<input type="hidden" style="width:30px" name="cid[]" value="<?php echo $v['cid']?>" id="" />
										<input type="number" id="num" min="0" style="width:50px;text-align: center;" name="sort[]" value="<?php echo $v['sort']?>" id="" />
									</td>
									<td style="text-align: center;">
										<a href="<?php echo U('Admin/Category/addSonCategory',array('pid'=>$v['cid']))?>" class="btn btn-sm btn-primary">
											添加子分类
										</a>
										<a href="<?php echo U('Admin/Category/sonCategory',array('cid'=>$v['cid']))?>" class="btn btn-sm btn-primary">
											查看子分类
										</a>
										<a href="<?php echo U('Admin/Category/editCategory',array('cid'=>$v['cid']))?>" class="btn btn-sm btn-warning">
											编辑
										</a>
										<a href="<?php echo U('Admin/Category/delCategory',array('cid'=>$v['cid']))?>" class="btn btn-sm btn-danger">
											删除
										</a>
									</td>
								</tr>
								
               <?php }?>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<input type='hidden' name='__TOKEN__' value='842250c77ae4b570fcb5f1afd977a356'</form>
		<script src="./Public/Admin/Houtai/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
		<script>
		$(function() {
			<?php if(isset($_GET['sort'])){?>
                
				s = <?php echo Q('sort')?>; 
			<?php }else{?>
				s = 0; 
			
               <?php }?>
			$('#order_a').click(function() {
				if (s == 0) {
					/*降序*/
					location.href = "<?php echo U('Admin/Category/category',array('sort'=>1))?>";
					s = 1;
				} else {
					/*升序*/
					location.href = "<?php echo U('Admin/Category/category',array('sort'=>0))?>";
					s = 0;
				}
			})
		})
		</script>
	</body>
</html>