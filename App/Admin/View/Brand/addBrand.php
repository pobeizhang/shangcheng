<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="{{__PUBLIC__}}/Admin/Bootstrap/Css/bootstrap.min.css" />
	<link rel="stylesheet" href="{{__PUBLIC__}}/Admin/Css/common.css" />
	<script type="text/javascript" src='{{__PUBLIC__}}/Admin/Js/jquery-1.7.2.min.js'></script>
	<!-- 引入缩略图插件相关文件 -->
	<script src="//cdn.bootcss.com/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script type="text/javascript" src='{{__PUBLIC__}}/Admin/Uploadify/uploadify/jquery.uploadify.min.js'></script>
	<link rel="stylesheet" href="{{__PUBLIC__}}/Admin/Uploadify/uploadify/uploadify.css" />
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">

	<form action="" method='post'>
		<fieldset>
		<legend>添加商品品牌</legend>
		<table class="table table-bordered table-hover">
			<tr class="info">
				<td>品牌名称</td>
				<td colspan="2">
					<input type="text" name='bname'/>
				</td>
			</tr>
			<tr class="info">
				<td>品牌LOGO</td>
				<td>
					<img src="" id="preview" alt="缩略图预览"/ width="50" height="50">
				<input id="file" type="file" required="" name="" multiple="true">
				<input type="hidden" name="logo" id="hid_thumb" />
				<script type="text/javascript">
	                $(function() {
	                    $('#file').uploadify({
	                        'swf':'{{__PUBLIC__}}/Admin/Uploadify/uploadify/uploadify.swf',//选择文件按钮
	
	                        'uploader':'index.php?m=Admin&c=Brand&a=up',//处理文件上传的php文件
	
	                        'removeCompleted':true,
	
	                        'width':'130',//选择文件按钮的宽度
	
	                        'height':'26',//选择文件按钮的高度
	
	                        'debug':false,
	
	                        'multi':true,//设置为true时可以上传多个文件
	                        onUploadSuccess:function(file,data,response){
	                            // data=$.parseJSON(data);
	                            $("#preview").attr("src",data);
	                            $("#hid_thumb").val(data);
	                        }
	                    });
	                }); 
	            </script>
				</td>
			</tr>
			<tr class="info">
				<td>是否热门</td>
				<td colspan="2">
				是：<input id='exampleInputEmail1' type='radio' checked='checked' value='1' name='ishot'>
				否：<input id='exampleInputEmail1' type='radio' value='0' name='ishot'>
				</td>
			</tr>
			<tr>
				<td colspan='3' align='center'>
					<input type="submit" class="btn btn-primary" value="添加品牌" />
				</td>
			</tr>
		</table>
		</fieldset>
	</form>

	</div>
	</div>
	</div>
</body>
</html>