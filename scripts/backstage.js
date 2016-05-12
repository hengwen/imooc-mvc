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
		var table = $(this).attr('table');
		if(window.confirm("您确定要删除吗？")){
			$.ajax({
				url: 'admin.php?controller=admin&method=delAdmin&table='+table+'&id='+id,
				type: 'GET',
				dataType: 'json',
				success: function(data) {
					if (data.msg) { 
						$("#table-op-box").html(data.msg);
					} else {
						$("#table-op-box").html("出现错误：" + data.msg);
					}  
				},
				error: function(jqXHR){     
				   alert("发生错误：" + jqXHR.status);  
				},    
			});	
		}
	});
	
});

	

	
