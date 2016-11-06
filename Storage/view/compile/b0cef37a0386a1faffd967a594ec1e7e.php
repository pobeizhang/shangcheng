<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<title>
		</title>
		<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
		<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/Bootstrap/Css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/Css/common.css" />
		<!--<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/Uploadify/uploadify.css" />-->
		<script type="text/javascript" src='<?php echo __PUBLIC__?>/Admin/Js/jquery-1.7.2.min.js'></script>
		<!--<script type="text/javascript" src='<?php echo __PUBLIC__?>/Admin/Uploadify/jquery.uploadify.js'></script>-->
		<!--<script type="text/javascript" src='<?php echo __PUBLIC__?>/Admin/Ueditor/ueditor.config.js'></script>-->
		<!--<script type="text/javascript" src='<?php echo __PUBLIC__?>/Admin/Ueditor/ueditor.all.min.js'></script>-->
		<!--<script type="text/javascript" src='<?php echo __PUBLIC__?>/Admin/Js/goods.js'></script>-->
		<script type="text/javascript" src="<?php echo __PUBLIC__?>/Admin/Goods/goods.js"></script>
		<!-- 引入缩略图插件相关文件 -->
		<script type="text/javascript" src='<?php echo __PUBLIC__?>/Admin/Uploadify/uploadify/jquery.uploadify.min.js'></script>
		<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/Uploadify/uploadify/uploadify.css" />
		<!-- 引入的在线编辑器文件 -->
		<link rel="stylesheet" href="<?php echo __PUBLIC__?>/Admin/kindeditor/themes/default/default.css" />
		<script charset="utf-8" src="<?php echo __PUBLIC__?>/Admin/kindeditor/kindeditor-min.js"></script>
		<script charset="utf-8" src="<?php echo __PUBLIC__?>/Admin/kindeditor/lang/zh_CN.js"></script>
		 <!-- 文本域在线编辑器图片上传 -->
		<script>
		    var editor;
		    KindEditor.ready(function(K) {
		        editor = K.create('#intro',{
		            uploadJson:"<?php echo U('Admin/Goods/UploadImg')?>",
		        });
		    });
		    
		    var editor1;
		    KindEditor.ready(function(K1) {
		        editor1 = K1.create('#service',{
		            uploadJson:"<?php echo U('Admin/Goods/UploadImg')?>",
		        });
		    });
		
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<form action="<?php echo U('Admin/Goods/add')?>" method='post'>
						<fieldset>
							<legend>
								添加商品
							</legend>
							<table class='table table-bordered table-hover'>
								<thead>
									<tr>
										<th colspan="2" class="btn btn-primary">
											基本信息
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="info">
										<td>
											所属分类
										</td>
										<td>
											<select name="cid" id="cate">
												<option value="0">
													-请选择-
												</option>
												<?php foreach ($cateData as $ck=>$cv){?>
												<option value="<?php echo $cv['cid']?>" <?php if($cv['tid']==0){?>
                disabled="disabled"
               <?php }?> tid="<?php echo $cv['tid']?>">
													<?php echo $cv['_cname']?>
												</option>
												<?php }?>
											</select>
										</td>
									</tr>
									<tr class="info">
										<td>
											所属品牌
										</td>
										<td>
											<select name="bid">
												<option value="0">
													-请选择-
												</option>
												<?php foreach ($brandData as $bk=>$bv){?>
												<option value="<?php echo $bv['bid']?>">
													<?php echo $bv['bname']?>
												</option>
												<?php }?>
											</select>
										</td>
									</tr>
									<tr class="info">
										<td>
											商品名称
										</td>
										<td>
											<input type="text" name='gname'/>
										</td>
									</tr>
									<tr class="info">
										<td>
											单位
										</td>
										<td>
											<input type="text" name='unit' value='件'/>
										</td>
									</tr>
									<tr class="info">
										<td>
											市场价
										</td>
										<td>
											<input type="text" name='marketprice'/>
										</td>
									</tr>
									<tr class="info">
										<td>
											商城价
										</td>
										<td>
											<input type="text" name='shopprice'/>
										</td>
									</tr>
									<tr class="info">
										<td>
											点击次数
										</td>
										<td>
											<input type="text" name='click'/>
										</td>
									</tr>
								</tbody>
							</table>
							<p class="btn btn-primary">
								商品属性
							</p>
							<table class="table table-bordered table-hover" id="attr">
								<tbody style="display: block;">
								</tbody>
							</table>
							<p class="btn btn-primary">
								商品规格
							</p>
							<table class="table table-bordered table-hover" id="spec">
								<tbody  style="display: block;">
								</tbody>
							</table>
							<table class='table table-bordered'>
								<tr>
									<th colspan="3" class="btn btn-primary">
										列表图
									</th>
								</tr>
								<tr class="info">
									<td>
										上传图片
									</td>
									<td>
										<img src="" id="preview" alt="缩略图预览"/ width="50" height="50"style="margin-left: 250px;">
										<input id="file" type="file" required="" name="" multiple="true">
										<input type="hidden" name="pic" id="hid_thumb" />
										<script type="text/javascript">$(function() {
											$('#file').uploadify({
												'swf': '<?php echo __PUBLIC__?>/Admin/Uploadify/uploadify/uploadify.swf', //选择文件按钮
												'uploader': 'index.php?m=Admin&c=Goods&a=up', //处理文件上传的php文件
												'removeCompleted': true,
												'width': '130', //选择文件按钮的宽度
												'height': '26', //选择文件按钮的高度
												'debug': false,
												'multi': true, //设置为true时可以上传多个文件
												onUploadSuccess: function(file, data, response) {
													// data=$.parseJSON(data);
													$("#preview").attr("src", data);
													$("#hid_thumb").val(data);
												}
											});
										});</script>
									</td>
									<td id='pic-list'>
									</td>
								</tr>
							</table>
							<table class='table table-bordered'>
								<tr>
									<th colspan="3" class="btn btn-primary">
										商品图册
									</th>
								</tr>
								<tr class="info">
									<td>
										上传图片
									</td>
									<td>
										<img src="" id="preview1" alt="缩略图预览"/ width="50" height="50"style="margin-left: 250px;">
										<input id="file1" type="file" required="" name="" multiple="true">
										<input type="hidden" name="medium" id="hid_thumb1" />
										<script type="text/javascript">$(function() {
											$('#file1').uploadify({
												'swf': '<?php echo __PUBLIC__?>/Admin/Uploadify/uploadify/uploadify.swf', //选择文件按钮
												'uploader': 'index.php?m=Admin&c=Goods&a=up', //处理文件上传的php文件
												'removeCompleted': true,
												'width': '130', //选择文件按钮的宽度
												'height': '26', //选择文件按钮的高度
												'debug': false,
												'multi': true, //设置为true时可以上传多个文件
												onUploadSuccess: function(file, data, response) {
													// data=$.parseJSON(data);
													$("#preview1").attr("src", data);
													$("#hid_thumb1").val(data);
												}
											});
										});</script>
									</td>
									<td id='photo-list'>
									</td>
								</tr>
							</table>
							<table class='table'>
								<tr class="next_show">
									<th class="btn btn-primary">
										商品详细
									</th>
								</tr>
								<tr class="info">
									<td>
										<textarea name="intro" rows="5" cols="" style="width: 100%;" id="intro" ></textarea>																																																		
									</td>
								</tr>
							</table>
							<table class='table'>
								<tr class="next_show">
									<th class="btn btn-primary">
										售后服务
									</th>
								</tr>
								<tr class="info">
									<td>
										<textarea name="service" rows="5" cols="" style="width:100%" id="service" ></textarea>
									</td>
								</tr>
							</table>
							<input type="hidden" name='tid' id="htid" value='0'/>
							<input type="submit" value="确认添加" class="btn btn-primary btn-block btn-large" />
						</fieldset>
					<input type='hidden' name='__TOKEN__' value='ed567ebdcf24d19b8dfad794a466164e'</form>
				</div>
			</div>
		</div>
	</body>
</html>