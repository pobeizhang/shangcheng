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
				<form action="" method="post">
					<fieldset>
						 <legend>修改商品类型</legend> 
						 <label>商品类型名称：</label>
						 <input type="text" name="tname" value='{{$oneTypeData['tname']}}'/> 
						 <span class="help-block">请在输入框中填写要添加的商品类型名称，然后点击修改按钮</span> 
						 <button type="submit" class="btn btn-primary">确认修改</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>