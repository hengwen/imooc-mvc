$(document).ready(function() {
	/**
	 * 编辑管理员
	 */
	$('input[value="修改"]').click(function() {
			var id = $(this).attr('data');
			var tab = $(this).attr('tab');
			window.location.href = "admin.php?controller=admin&method=editForm&tab="+tab+"&id="+id;
		});
	/**
	 * 后台删除操作
	 */
	$('input[value="删除"]').click(function(){
		var id = $(this).attr('data');
		var tab = $(this).attr('tab');
		if(window.confirm("您确定要删除吗？")){
			window.location.href = "admin.php?controller=admin&method=doDel&tab="+tab+"&id="+id;
		}
	});
	
	//添加用户时获得当前日期并传递给表单中的input
	var time = new Date();
	var now = time.toLocaleDateString(); 
	$('#regTime').val(now);
					
	//获取需要修改的用户头像和性别值
		var face = $('#edit-face').val();
		var sex = $('#edit-sex').val();
		//将用户原来的头像和性别显示
		$("input[name='face'][value='"+face+"']").attr('checked','checked');
		$("input[name='sex'][value='"+sex+"']").attr('checked','checked');		

	/**
	 * 添加商品中的商品描述编辑器
	 */
	KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });	
	/**
	 * 添加商品中的添加附件
	 */
	$(document).ready(function(){
        	$("#selectFileBtn").click(function(){
        		$fileField = $('<input type="file" name="myfile[]"/>');
        		$fileField.hide();
        		$("#attachList").append($fileField);
        		$fileField.trigger("click");
        		$fileField.change(function(){
        		$path = $(this).val();
        		//console.log($path);
        		$filename = $path.substring($path.lastIndexOf("\\")+1);
        		//console.log($filename);
        		$attachItem = $('<div class="attachItem" style="display:inline-block"><div class="left">a.gif</div><div class="right"><a href="javascript:void(0)" title="删除附件">删除</a></div></div>');
        		$attachItem.find(".left").html($filename);
        		$("#attachList").append($attachItem);		
        		});
        	});
        	//删除添加的附加
        	$(document).on('click','#attachList > .attachItem a',function(){
        		$(this).parents('.attachItem').prev('input').remove();
        		$(this).parents('.attachItem').remove();
        	});
        	
        });	
});

	

	
