<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="./Public/Admin/Bootstrap/Css/bootstrap.min.css" />
</head>
<body>
	<form action="<?php echo U('Admin/ShopType/editTypeAttr')?>" method="post">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<table class="table table-bordered table-hover">
						<tr>
							<td>
								属性名称
							</td>
							<td>
								<input type="text" name='taname' value="<?php echo $ed['taname']?>"/>
							</td>
						</tr>
						<tr class="success">
							<td>
								属性类别
							</td>
							<td>
								<?php if($ed['class']==1){?>
                
								<label><input type="radio" value="0" name="class" />&nbsp;属性</label>
								&nbsp;&nbsp;
								<label><input type="radio" value="1" checked="checked" name="class" />&nbsp;规格</label>
								<?php }else{?>
								<label><input type="radio" value="0" name="class" />&nbsp;属性</label>
								&nbsp;&nbsp;
								<label><input type="radio" value="1" checked="checked" name="class" />&nbsp;规格</label>
								
               <?php }?>
							</td>
						</tr>
						<tr class="error">
							<td>
								属性值(多个值用 竖线 | 分隔)
							</td>
							<td>
								<textarea name="tavalue" cols="100" rows="4"><?php echo $ed['tavalue']?></textarea>
							</td>
						</tr>
						<tr class="warning">
							<td colspan="2">
								<input type="hidden" name='taid' value='<?php echo $ed['taid']?>'/>
								<input type="submit" class="btn btn-primary" value="修改属性" />
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	<input type='hidden' name='__TOKEN__' value='2f195e1779c2577efc305d9db8c79afc'</form>
</body>
</html>