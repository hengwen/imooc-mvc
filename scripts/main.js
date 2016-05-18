(function(){

	var num;
	$('.shop-class-list').hover(function() {
		$(this).addClass('current');
		num = $(this).attr('data');
		$('.item'+num).fadeIn(200);
	}, function() {
		$(this).removeClass('current');
		$('.item'+num).hide();
	});
	$('.class-item').hover(function() {
		$('.shop-class-info dl[data='+num+']').addClass('current');
		$(this).show();
	}, function() {
		$('.shop-class-info dl[data='+num+']').removeClass('current');
		$(this).hide();
	
	});

	
	$(".shop-class-info dl[data='1']").click(function() {
		window.location.href = "admin.php?controller=index&method=sort";
	});
})(jQuery);
$(function(){
	/**
	 * 用户点击登入按钮进行跳转
	 */
	$('#login').click(function() {
		window.location.href = 'admin.php?controller=index&method=login&referer='+encodeURIComponent(window.location.href);
	});
	/**
	 * 用户点击登出
	 */
	$('#logout').click(function() {
		window.location.href = 'admin.php?controller=index&method=logout&referer='+encodeURIComponent(window.location.href);
	});
	//详细页商品数量减少
	$('#indent-num-up').click(function() {
		var limit = $('#limit-num').html();
		var num = $('#indent-num').val();
		num = parseInt(num) + 1;
		if (num > limit) {
			$('#indent-num').val(limit);
		}else{
			$('#indent-num').val(num);
		}
	});
	//详细页商品数量增加
	$('#indent-num-down').click(function() {
		var num = $('#indent-num').val();
		num = parseInt(num) - 1;
		if (num<1) {
			$('#indent-num').val(1);
		}else{
			$('#indent-num').val(num);
		}
	});
	//详细页商品数量自定义不超过库存
	$('#indent-num').mouseout(function() {
		var num = $(this).val();
		var limit = $('#limit-num').html();
		if (num > limit) {
			$(this).val(limit);
		}
	});
	$('#indent-num').blur(function() {
		var num = $(this).val();
		var limit = $('#limit-num').html();
		if (num > limit) {
			$(this).val(limit);
		}
	});
	//购买
	$('#pd-buy-now').click(function() {
		var pId = $(this).attr('data');
		var num = $('#indent-num').val();
		window.location.href = "admin.php?controller=index&method=buyNow&pId="+pId+"&num="+num+"&referer="+encodeURIComponent(window.location.href);

	});
	//商品详细页显示评价或商品详情
	$('.intro-tit').click(function() {
		$('.com-tit').removeClass('com-current');
		$(this).addClass('intro-current');
		$('.intro-info').css('display','block');
		$('.com-info').css('display','none');
	});
	$('.com-tit').click(function() {
		$('.intro-tit').removeClass('intro-current');
		$(this).addClass('com-current');
		$('.intro-info').css('display','none');
		$('.com-info').css('display','block');
	});
	
	

	

});

