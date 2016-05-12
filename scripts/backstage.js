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
	
});

	

	
