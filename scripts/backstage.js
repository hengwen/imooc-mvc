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
});

	

	
