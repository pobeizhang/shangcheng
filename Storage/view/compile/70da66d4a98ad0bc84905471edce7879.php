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

	<form action="" method='post'>
		<table class="table table-bordered table-hover">
			<thead>	
				<tr>
					<th width="30">bid</th>
					<th width="150" style="text-align: center;">品牌名称</th>
					<th width="150" style="text-align: center;">品牌logo</th>
					<th width="auto" style="text-align: center;">是否热门</th>
					 <th width="auto" style="text-align: center;"><button class="btn btn-primary" style='width:130px;' type="submit"> 自定义排序</button><a href="javascript:;" id="order_a" class="btn btn-primary" style="margin-left: 10px;">一键排序<span id='order_span'><?php if(Q('sort')==1){?>
                (降序)<?php }else{?>(升序)
               <?php }?></span></a></th>
					
					<th width="210" style="text-align: center;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($brandData as $k=>$v){?>
				<tr>
					<td><?php echo $v['bid']?></td>
					<td style="text-align: center;"><?php echo $v['bname']?></td>
					<td style="text-align: center;"><img src="<?php echo $v['logo']?>" alt="" style='width: 50px;'/></td>
					<?php if($v['ishot']==1){?>
                
					<td style="text-align: center;">热门</td>
					<?php }else{?>
					<td style="text-align: center;">不热门</td>
					
               <?php }?>
					 <td style="text-align: center;">
					 	<input type="hidden" style="width:30px" name="bid[]" value="<?php echo $v['bid']?>" id="" />
					 	<input type="number" id="num" min="0" style="width:50px;text-align: center;" name="sort[]" value="<?php echo $v['sort']?>" id="" />
					 </td>
					<td style="text-align: center;">
						<a href="<?php echo U('Admin/Brand/editBrand',array('bid'=>$v['bid']))?>" class="btn btn-sm btn-warning">编辑</a>
						<a href="<?php echo U('Admin/Brand/delBrand',array('bid'=>$v['bid']))?>" class="btn btn-sm btn-danger">删除</a>
					</td>
				</tr>
				<?php }?>
				<!--<tr>
					<td colspan='6' align='center'>
						<input type="hidden" name='table' value='brand'/>
						<input type="submit" value='排序' class="btn btn-success" />
					</td>
				</tr>-->
				</tbody>
		</table>
	<input type='hidden' name='__TOKEN__' value='f26a7d86cfbd366ca8d20c7d35b44b1e'</form>
	
	</div>
	</div>
	</div>
</body>
<script src="./Public/Admin/Houtai/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
	<script>
		$(function(){
			<?php if(isset($_GET['sort'])){?>
                
			s=<?php echo Q('sort')?>;
			<?php }else{?>
			s=0;
			
               <?php }?>
			$('#order_a').click(function(){
				if(s==0){
					/*降序*/
					location.href="<?php echo U('Admin/Brand/brand',array('sort'=>1))?>";
					s=1;
				}else{
					/*升序*/
					location.href="<?php echo U('Admin/Brand/brand',array('sort'=>0))?>";
					s=0;
				}
			})
		})
	</script>
</html>