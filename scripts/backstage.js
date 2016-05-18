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
	/**
	 * 后台删除分类
	 */
	$('input[value="删除分类"]').click(function(){
		var id = $(this).attr('data');
		var tab = $(this).attr('tab');
		if(window.confirm("您确定要删除吗？")){
			window.location.href = "admin.php?controller=admin&method=doDelCate&tab="+tab+"&id="+id;
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

/*jquery ui dialog插件，在后台商品列表中点击详情是弹出一个商品详情的对话框*/
	$('input[value="详情"]').click(function() {
			var id = $(this).attr('data');
			var pName = $(this).attr('pName');
			$("#showDetail"+id).dialog({
				  	height:"auto",
			      width: "900",
			      position: {my: "center", at: "center",  collision:"fit"},
			      modal:false,//是否模式对话框
			      draggable:true,//是否允许拖拽
			      resizable:true,//是否允许拖动
			      title:"商品名称："+pName,//对话框标题
			      show:"slide",
			      hide:"explode"
			});
		});
	/**
	 * 为后台商品列表展示中商品的模糊查询传递参数
	 */
	$("#list-pro-search").keypress(function(event) {
		if (event.which == 13) {
			var keywords = $("#list-pro-search").val();
			window.location.href = "admin.php?controller=admin&method=showList&tab=1&p=1&val="+keywords;
		}
	});

/**
 * 当后台商品列表中的选择按价格排列顺序时，向服务器传递一个变量
 */
	$("#pd-price").change(function() {
		var order = $("#pd-price").val();
		window.location.href = "admin.php?controller=admin&method=showList&tab=1&p=1&order="+order;
	});
	/**
 * 当后台商品列表中的选择按上架时间排列顺序时，向服务器传递一个变量
 */
	$("#pd-pubtime").change(function() {
		var order = $("#pd-pubtime").val();
		window.location.href = "admin.php?controller=admin&method=showList&tab=1&p=1&order="+order;
	});
	/**
	 *当点击后台商品图片列表的文字水印操作时，传递一个商品的id号
	 */
	$("input[value='文字水印']").click(function() {
		var id = $(this).attr('data');
		if (window.confirm("您确定要添加文字水印吗？")) {
			window.location.href = "admin.php?controller=admin&method=fontMark&id="+id;
		}
	});
	/**
	 *当点击后台商品图片列表的图片水印操作时，传递一个商品的id号
	 */
	$("input[value='图片水印']").click(function() {
		var id = $(this).attr('data');
		if (window.confirm("您确定要添加图片水印吗？")) {
			window.location.href = "admin.php?controller=admin&method=imageMark&id="+id;
		}
	});

	/**
	 * 为后台订单列表展示中订单的模糊查询传递参数
	 */
	$("#order-search").keypress(function(event) {
		if (event.which == 13) {
			var keywords = $(this).val();
		window.location.href = "admin.php?controller=admin&method=showList&tab=6&p=1&val="+keywords;
		}
	});
	/**
 * 当后台订单列表中的选择按订单状态排列顺序时，向服务器传递一个变量
 */
	$("#order-active").change(function() {
		var order = $(this).val();
		window.location.href = "admin.php?controller=admin&method=showList&tab=6&p=1&order="+order;
	});
	/**
 * 当后台订单列表中的选择按订单时间排列顺序时，向服务器传递一个变量
 */
	$("#order-time").change(function() {
		var order = $(this).val();
		window.location.href = "admin.php?controller=admin&method=showList&tab=6&p=1&order="+order;
	});
});

	

	
