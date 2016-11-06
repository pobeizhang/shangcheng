$(function(){
	$('#cate').change(function(){
		//获取当前被选中的tid属性
		tid=$(this).find('option:selected').attr('tid');
		$('#htid').val(tid);
		// 异步获取tid对应的属性值
		$.ajax({
			url:'index.php?m=admin&c=Goods&a=getAttr',
			type:'post',
			data:{tid:tid},
			dataType:'json',
			success:function(data){
				$('#attr').find('tbody').html('');
				$('#spec').find('tbody').html('');
				// alert(data);
				//通过js事件给普通属性及规格属性添加内容
				$('#attr').find('tbody').append(data.attr);
				$('#spec').find('tbody').append(data.spec);
			}
		})
	})
	$('#spec').on('click','.add-spec',function(){
		// alert('123')
		var spec=$(this).parents('tr');
		//克隆spec标签内容
		var obj=spec.clone();
		
		del='<span class="del-spec btn btn-success"><i class="icon-plus icon-white"></i>删除规格</span>';
		obj.find('td').eq(3).find('.add-spec').remove();
		obj.find('td').eq(3).append(del);
		spec.after(obj);
	})

	$('#spec').on('click','.del-spec',function(){
		$(this).parents('tr').remove();
	})
})
