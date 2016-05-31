$(document).ready(function() {
	/**
	 * 后台页面刷新
	 */
	$('#refresh').click(function() {
		window.location.reload();
	});

	

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

	/*****************************
	 * 后台统计模块
	 *********************************/
	 var time = "all";
	 var type = 1;
	 var cId = "";
	 var sort = "";
	 var totalMon;
	 var p =1;
	 /**
	  * 按商品获得数据
	  */
	 function getInfoByPro(json,num){
		var proInfo;     //数据
		var pageNav;   //页码导航
		var pageSize = 5;  //每页条数
		var pageIndex = num;  //当前页
		var begin = (pageIndex-1)*pageSize;
		var end;
		var pageCount = parseInt(json.length/pageSize) + (json.length%pageSize ? 1 : 0);  //总页数
		var pageurl = 'admin.php?controller=admin&method=showStatisticsListAjaxByRole&type='+type+'&time='+time+'&cId='+cId+'&sort='+sort+'&p=';
		if (pageIndex < pageCount) {
			end = pageIndex * pageSize -1;
		}else{
			end = json.length-1;
		}
		for (var i = begin; i <= end; i++) {
			proInfo+="<tr>";
			proInfo+= "<td><label><input type='checkbox' name='checkbox' class='pd-list-che'></label>"+(i+1)+"</td>";
			proInfo+= "<td>"+json[i]['pId']+"</td>";
			proInfo+= "<td>"+json[i]['pName']+"</td>";
			proInfo+= "<td>"+json[i]['count']+"</td>";
			proInfo+= "<td>"+json[i]['money']+"</td>";
			proInfo+= "<td>"+((json[i]['iPrice']-json[i]['pCost'])*json[i]['count']).toFixed(2)+"</td>";
			proInfo+= "<td><input class='pd-list-op' type='button'value='详情'></td>";
			proInfo+="</tr>";
		}
		$('#list-table').hide();
		$('#tab2').hide();
		$('#tab1').show();
		$('#tab1 tr').not(':first').remove();
		$('#tab1').append(proInfo);
		pageNav = page(pageSize,pageIndex,pageCount,pageurl);
		$('#page').html(pageNav);
	}
	/**
	 * 按用户获得数据
	 */
	function getInfoByuser(json,num){
		var proInfo;     //数据
		var pageNav;   //页码导航
		var pageSize = 5;  //每页条数
		var pageIndex = num;  //当前页
		var begin = (pageIndex-1)*pageSize;
		var end;
		var pageCount = parseInt(json.length/pageSize) + (json.length%pageSize ? 1 : 0);  //总页数
		var pageurl = 'admin.php?controller=admin&method=showStatisticsListAjaxByRole&type='+type+'&time='+time+'&cId='+cId+'&sort='+sort+'&p=';
		if (pageIndex < pageCount) {
			end = pageIndex * pageSize -1;
		}else{
			end = json.length-1;
		}
		for (var i = begin; i <= end; i++) {
			proInfo+="<tr>";
			proInfo+= "<td><label><input type='checkbox' name='checkbox' class='pd-list-che'></label>"+(i+1)+"</td>";
			proInfo+= "<td>"+json[i]['uId']+"</td>";
			proInfo+= "<td>"+json[i]['username']+"</td>";
			proInfo+= "<td>"+json[i]['count']+"</td>";
			proInfo+= "<td>"+json[i]['money']+"</td>";
			proInfo+= "<td>"+json[i]['money']/json[i]['count']+"</td>";
			proInfo+= "<td>"+((json[i]['money']/totalMon)*100).toFixed(2)+"%</td>";
			proInfo+= "<td><input type='button'value='详情' class='pd-list-op'>";
			proInfo+="</tr>";
		}
		$('#list-table').hide();
		$('#tab1').hide();
		$('#tab2').show();
		$('#tab2 tr').not(':first').remove();
		$('#tab2').append(proInfo);
		pageNav = page(pageSize,pageIndex,pageCount,pageurl);
		$('#page').html(pageNav);
	}
	/**
	 * 创建页码导航条
	 */
	function page(pageSize,pageIndex,pageCount,url){
		/**
		 * pagesize: 每页显示条数
		 * pageIndex: 当前页数
		 * pageCount: 总页数
		 * url: 地址
		 */
		var intPage = 5;  //显示的总页数
		var pageOffset = parseInt(intPage/2);  //页面偏移量
		var pageNav = "";   //页码导航条
		var pageBegin = 1;   //页码导航条开始页码数
		var pageEnd = pageCount; //页码导航条结束页码数
		if(pageIndex > 1){
			pageNav += "<a href='"+url+'1'+"'>首页</a>";
			pageNav += "<a href='"+url+(pageIndex-1)+"'>上一页</a>";
		}else{
			pageNav += "<a href='javascript:void(0);' class='forbid'>首页</a>";
			pageNav += "<a href='javascript:void(0);' class='forbid'>上一页</a>";
		}
		if(pageCount > intPage){  //总页数大于显示的页数
			if(pageIndex > pageOffset + 1){  //当前页大于偏移量加1
				pageNav += "...";
			}
			if (pageIndex > pageOffset) {  //当前页大于偏移量
				pageBegin = pageIndex - pageOffset;
				pageEnd = (pageIndex+pageOffset > pageCount) ? pageCount : pageIndex+pageOffset;
			}else{
				pageBegin = 1;
				pageEnd = intPage;
			}
			if (pageIndex+pageOffset > pageCount) { //当前页加上偏移量大于总页数
				pageBegin = pageIndex-(pageIndex+pageOffset-pageCount+pageOffset);
				pageEnd = pageCount;
			}
		}
		//显示页码导航条的页码数
		for(var i = pageBegin; i <= pageEnd; i++){
			pageNav += "<a href='"+url+i+"'>"+i+"</a>";
		}
		if (intPage < pageCount && pageIndex+pageOffset < pageCount) {
			pageNav += "...";
		}
		if(pageIndex < pageCount){
			pageNav += "<a href='"+url+(pageIndex+1)+"'>下一页</a>";
			pageNav += "<a href='"+url+pageCount+"'>尾页</a>";
		}else{
			pageNav += "<a href='javascript:void(0);' class='forbid'>首页</a>";
			pageNav += "<a href='javascript:void(0);' class='forbid'>上一页</a>";
		}
		if(Boolean(pageCount)){
			pageNav += " 共 " + pageCount + " 页 ";
		}else{
			pageNav="";
		}
		
		return pageNav;
	}
	/**
	 * 按时间显示销售统计
	 */
	$('#top-time a').click(function() {
		time = $(this).attr('value');
		$('#top-time a').removeClass('current');
		$(this).addClass('current');
		$('.show-time').text($(this).text());
		
		$.ajax({
			url: "admin.php?controller=admin&method=showStatisticsListAjax&time="+time,
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				$('#totalCount').html(data[0].totalCount);
				$('#totalm').html(data[0].total);
				$('#username').html(data[0].username);
				$('#makeMon').html(data[0].makeMon+".00");
				$('#makeRate').html((data[0].makeMon/data[0].total*100).toFixed(2)+'%');
				$('#pName').html(data[0].pName);
				if(!(data['not'])){
					var proInfo;     //数据
					var pageNav;   //页码导航
					var pageSize = 5;  //每页条数
					var pageIndex = 1;  //当前页
					var begin = (pageIndex-1)*pageSize;
					var end;
					var pageCount = parseInt(data.length/pageSize) + (data.length%pageSize ? 1 : 0);  //总页数
					var pageurl = 'admin.php?controller=admin&method=showStatisticsListAjaxByRole&type='+type+'&time='+time+'&cId='+cId+'&sort='+sort+'&p=';
					if (pageIndex < pageCount) {
						end = pageIndex * pageSize;
					}else{
						end = data.length-1;
					}
					for (var i = begin+1; i <= end; i++) {
							proInfo+="<tr>";
							proInfo+= "<td><label><input type='checkbox' name='checkbox' class='pd-list-che'></label>"+i+"</td>";
							proInfo+= "<td>"+data[i]['pId']+"</td>";
							proInfo+= "<td>"+data[i]['pName']+"</td>";
							proInfo+= "<td>"+data[i]['count']+"</td>";
							proInfo+= "<td>"+data[i]['money']+"</td>";
							proInfo+= "<td>"+((data[i]['iPrice']-data[i]['pCost'])*data[i]['count']).toFixed(2)+"</td>";
							proInfo+= "<td><input class='pd-list-op' type='button'value='详情'></td>";
							proInfo+="</tr>";
						}
					$('#list-table').hide();
					$('#tab2').hide();
					$('#tab1').show();
					$('#tab1 tr').not(':first').remove();
					$('#tab1').append(proInfo);
					pageNav = page(pageSize,pageIndex,pageCount,pageurl);
					$('#page').html(pageNav);
				}
			},
			error: function(jqXHR){     
			   alert("发生错误：" + jqXHR.status);  
			},     
		});
	});
	/**
	 * 按用户或者商品显示销售统计
	 */
	$("#sort-by a").click(function() {
		var role = $(this).attr('value');
		var time = $('#top-time .current').attr('value');
		if (role== 'user') {
			type = 2;
		}else if(role == 'product'){
			type = 1;
		}
		$("#sort-by a").removeClass('current');
		$(this).addClass('current');
		totalMon = $('#totalm').text();
		$.getJSON('admin.php?controller=admin&method=showStatisticsListAjaxByRole&p=1&type='+type+'&time='+time+'&cId='+cId+'&sort='+sort, {}, function(json, textStatus) {
				var num;
				if (type ==1) {
					num = 1;
					getInfoByPro(json,num);
				}else if(type == 2){
					num = 1;
					getInfoByuser(json,num);
				}
		});
	});
	/**
	 * 隐藏或者显示总统计
	 */
	$('#show-hide').click(function() {
		$(this).text($("#show-total").is(":hidden") ? "收起数据统计" : "展开数据统计");
        $("#show-total").slideToggle();
	});
	/**
	 * 显示大类商品
	 */
	$('#all-cate').change(function() {
		cId = $(this).val();
		time = (!time) ? "" : time;
		type = (!type) ? "" : type;
		$.getJSON('admin.php?controller=admin&method=showStatisticsListAjaxByRole&time='+time+'&type='+type+'&cId='+cId+'&sort='+sort, {}, function(json, textStatus) {
				getInfoByPro(json,p);
		});
	});
	/**
	 * 按数量或金额排序
	 */
	$('#all-sort').change(function() {
		sort = $(this).val();
		cId = (!cId) ? "" : cId;
		time = (!time) ? "" : time;
		type = (!type) ? "" : type;
		$.getJSON('admin.php?controller=admin&method=showStatisticsListAjaxByRole&time='+time+'&type='+type+'&cId='+cId+'&sort='+sort, {}, function(json, textStatus) {
				if(type ==1){
					getInfoByPro(json,p);
				}else if(type == 2){
					getInfoByuser(json,p);
				}
		});
	});
	/**
	 * 获取url中的参数值
	 */
	function getUrlParam(name,url) {
      var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
      var r = url.substr(1).match(reg);  //匹配目标参数
      if (r != null) return unescape(r[2]); return null; //返回参数值
  }
  /**
   * 页码导航条绑定点击事件
   */
	$('#page').on('click', 'a', function(event) {
		event.preventDefault();
		var pageurl = $(this).attr('href');
		var type1 = getUrlParam('type',pageurl);
		if(!type1){
			type1 = 1;
		}
		p = getUrlParam('p',pageurl);
		$.getJSON('admin.php?controller=admin&method=showStatisticsListAjaxByRole&time='+time+'&type='+type+'&cId='+cId+'&sort='+sort, {}, function(json, textStatus) {
				if(type1 ==1){
					getInfoByPro(json,p);
				}else if(type1 == 2){
					getInfoByuser(json,p);
				}
		});
		
	});
	


});

	

	
