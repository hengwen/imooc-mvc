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
	
	//商品详情页jqzoom效果
	$('.jqzoom').jqzoom({
    zoomType: 'standard',
    lens:true,
    preloadImages: false,
    alwaysOn:false,
		title:false,
		zoomWidth:410,
		zoomHeight:410
  });

  




});
