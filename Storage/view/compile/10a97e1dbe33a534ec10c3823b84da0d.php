<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>
		货品列表
		</title>
		<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/Bootstrap/Css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/Css/common.css" />
		<script type="text/javascript" src='<?php echo __PUBLIC__?>/Admin/Js/jquery-1.7.2.min.js'></script>
		<style type="text/css">body {
	margin-bottom: 100px;
}</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
				
					<table class='table table-bordered table-hover'>
						<tr>
							<th>
								货品GLID
							</th>
							<?php foreach ($spec as $k=>$v){?>
								<th>
									<?php echo $v['taname']?>
								</th>
							<?php }?>
							<th>
								库存
							</th>
							<th>
								货号
							</th>
							<th>
								操作
							</th>
						</tr>
						<!--<form action="<?php echo U('Admin/GoodsLists/edit',array('gid'=>$_GET['gid'],'tid'=>$_GET['tid']))?>)}}" method="post">-->
						<?php foreach ($gdata as $gk=>$gv){?>
						<?php if($gv['gid']==Q('gid')){?>
                
							<tr class="info">
								<td>
									<?php echo $gv['glid']?>
								</td>
								<?php foreach ($gv['combine'] as $gkk=>$gvv){?>
									<td class="gtv2">
										<?php echo $gvv['gtvalue']?>
									</td>
								<?php }?>
								<?php foreach ($spec as $sk=>$sv){?>
									<td class="gtv" style="display: none;">
										<select name="combine<?php echo $sk?>" id="" style="width:80px">
											<?php foreach ($sv['opt'] as $pk=>$pv){?>
											<option value="<?php echo $pv['gtid']?>"><?php echo $pv['gtvalue']?></option>
											<?php }?>
										</select>
									</td>
								<?php }?>
								<td class="gtv2">
									<?php echo $gv['inventory']?>
								</td>
								<td class="gtv" style="display: none;">
									<input type="text" name="inventory" value="<?php echo $gv['inventory']?>" />
								</td>
								<td class="gtv2">
									<?php echo $gv['number']?>
								</td>
								<td class="gtv" style="display: none;">
									<input type="text" name="number" value="<?php echo $gv['number']?>" />
									<input type="hidden" name="gid" value="<?php echo Q('gid')?>" />
								</td>
								<td>
									<a href="<?php echo U('Admin/GoodsLists/del',array('glid'=>$gv['glid'],'gid'=>$gv['gid'],'tid'=>$_GET['tid']))?>" class="btn btn-primary del">删除货品</a>
									<input style="display: none;" type="submit" value='确认修改' class="btn btn-primary ok"/>
									<a class="btn btn-primary no" href="javascript:;" style="display: none;">取消</a>
									<a href="javascript:;" class="btn btn-primary edit">修改货品</a>
								</td>
							</tr>
							
               <?php }?>
						<?php }?>
						<!--<input type='hidden' name='__TOKEN__' value='842250c77ae4b570fcb5f1afd977a356'</form>-->
						<form action="<?php echo U('Admin/GoodsLists/index',array('gid'=>$_GET['gid'],'tid'=>$_GET['tid']))?>" method='post'>
							<tr class="info">
								<td>
									添加货品
								</td>
								<?php foreach ($spec as $sk=>$sv){?>
									<td>
										<select name="combine[]" id="" style="width:80px">
											<?php foreach ($sv['opt'] as $pk=>$pv){?>
											<option value="<?php echo $pv['gtid']?>"><?php echo $pv['gtvalue']?></option>
											<?php }?>
										</select>
									</td>
								<?php }?>
								<td>
									<input type="text" name='inventory' style="width:80px"/>
								</td>
								<td>
									<input type="text" name='number' value="" style="width:80px"/>
								</td>
								<td>
									<input type="submit" value='保存添加' class="btn btn-primary"/>
								</td>
						
							</tr>
						<input type='hidden' name='__TOKEN__' value='842250c77ae4b570fcb5f1afd977a356'</form>
					</table>
				
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$('.edit').on('click',function(){
					$(this).parent().siblings('.gtv').show();
					$(this).parent().siblings('.gtv2').hide();
					$(this).siblings('.ok').show();
					$(this).siblings('.no').show();
					$(this).siblings('.del').hide();
					$(this).hide();
				})
				$('.no').on('click',function(){
					$(this).parent().siblings('.gtv').hide();
					$(this).parent().siblings('.gtv2').show();
					$(this).hide();
					$(this).siblings('.ok').hide();
					$(this).siblings('.del').show();
					$(this).siblings('.edit').show();
				})
			})
		</script>
	</body>
</html>