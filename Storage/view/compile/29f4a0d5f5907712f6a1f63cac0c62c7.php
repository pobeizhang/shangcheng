<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/Bootstrap/Css/bootstrap.min.css" />
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th colspan="2">
								系统信息
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								操作系统
							</td>
							<td>
								<?php echo $sys['os']?>
							</td>
						</tr>
						<tr>
							<td>
								浏览器类型
							</td>
							<td>
								<?php echo $sys['browser']?>
							</td>
						</tr>
						<tr>
							<td>
								浏览器语言
							</td>
							<td>
								<?php echo $sys['language']?>
							</td>
						</tr>
						<tr class="success">
							<td>
								PHP版本
							</td>
							<td>
								<?php echo $sys['version']?>
							</td>
						</tr>
						<tr class="error">
							<td>
								服务器环境
							</td>
							<td>
								<?php echo $sys['server']?>
							</td>
						</tr>
						<tr class="warning">
							<td>
								mysql数据库版本
							</td>
							<td>
								<?php echo $sys['mysql']?>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="table table-hover table-bordered">
				</table>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th colspan="2">
								管理员信息
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								用户名
							</td>
							<td>
								<?php echo $_SESSION['username']?>
							</td>
						</tr>
						<tr class="success">
							<td>
								上次登录时间
							</td>
							<td>
								
							</td>
						</tr>
						<tr class="error">
							<td>
								本次登录时间
							</td>
							<td>
								<?php echo date('Y-m-d H:i:s',$_SESSION['curtime'])?>
							</td>
						</tr>
						<tr class="warning">
							<td>
								上次登录IP
							</td>
							<td>
								
							</td>
						</tr>
						<tr class="warning">
							<td>
								本次登录IP
							</td>
							<td>
								<?php echo $sys['trueIp']?>
							</td>
						</tr>
						<tr class="warning">
							<td>
								本地登录ip
							</td>
							<td>
								<?php echo $sys['localIp']?>
							</td>
						</tr>
						
					</tbody>
				</table>
				<table class="table table-hover table-bordered">
				</table>
			</div>
		</div>
	</div>
</body>
</html>