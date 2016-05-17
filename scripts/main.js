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
	//rel="{gallery: 'gal1', smallimage: 'image_small1.jpg',largeimage: 'image_big1.jpg'}"
	
	

	

});

