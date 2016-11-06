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
								<?php foreach ($scate as $k=>$v){?>
								<?php if($v['pid']!=0){?>
                
								<tr>
									<td>
										<?php echo $v['cid']?>
									</td>
									<td>
										<?php echo $v['_cname']?>
									</td>
									<td style="text-align: center;">
										<?php if($v['tid']==0){?>
                
										----
										<?php }else{?>
										<?php echo $v['tname']?>
										
               <?php }?>
									</td>
									<td style="text-align: center;">
										<a href="<?php echo U('Admin/Category/addSonCategory',array('pid'=>$v['cid']))?>" class="btn btn-sm btn-primary">
											添加子分类
										</a>
										
										<a href="<?php echo U('Admin/Category/editSonCategory',array('cid'=>$v['cid'],'tid'=>$v['tid']))?>" class="btn btn-sm btn-warning">
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
		<input type='hidden' name='__TOKEN__' value='ed567ebdcf24d19b8dfad794a466164e'</form>
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