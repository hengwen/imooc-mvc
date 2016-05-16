<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-16 03:25:29
         compiled from "tpl/show/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:179417678857385db9aca3b0-53337851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6322a458b0cb8c7d29660227cd0315b5d45cd298' => 
    array (
      0 => 'tpl/show/detail.html',
      1 => 1463361928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179417678857385db9aca3b0-53337851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57385db9bc1b09_31814339',
  'variables' => 
  array (
    'bigPath' => 0,
    'proImage' => 0,
    'i' => 0,
    'images' => 0,
    'pName' => 0,
    'iPrice' => 0,
    'pDesc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57385db9bc1b09_31814339')) {function content_57385db9bc1b09_31814339($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>详细页-商品介绍</title>
	<link rel="stylesheet" href="css/meyer-reset.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="scripts/jquery-1.12.3.min.js"></script>

	<script src="scripts/jquery.jqzoom.js"></script>
	<link rel="stylesheet" href="css/jqzoom.css">
	<script src="scripts/main.js"></script>

</head>
<body>
	<header class="header">
		<?php echo $_smarty_tpl->getSubTemplate ("show/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("show/logo-search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("show/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</header>
	<div class="detail-wrap">
		<div class="inner-center">
			<div class="detail-top"><a href="#">首页</a>&nbsp;&gt;&nbsp;<a href="#">平板电脑</a>&nbsp;&gt;&nbsp;<a href="#">平板电脑</a>&nbsp;&gt;&nbsp;<a href="#">Apple 苹果</a>&nbsp;&gt;&nbsp;<a href="#">MD531CH/A</a></div>
			<div class="dt-info">
				<div class="info-img">
				
					<div class="img-big">
						<a href=<?php echo ("uploads/proImg/").($_smarty_tpl->tpl_vars['bigPath']->value);?>
 class="jqzoom" rel='gal1'  title="triumph"><img src=<?php echo ("uploads/proImg/images300/").($_smarty_tpl->tpl_vars['bigPath']->value);?>
 alt="ipad" title="triumph"></a>
					</div>
					<ul class="info-img-list" id="thumblist">
					<?php  $_smarty_tpl->tpl_vars['images'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['images']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['proImage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['images']->key => $_smarty_tpl->tpl_vars['images']->value) {
$_smarty_tpl->tpl_vars['images']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['images']->key;
?>

						<li class="list-item" >
							<a href="javascript:void(0);" <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?> class="zoomThumbActive list-item-link current" <?php } else { ?> class="list-item-link current" <?php }?> 
							 rel="{gallery: 'gal1', smallimage: '<?php echo (((("uploads/proImg/images300/").($_smarty_tpl->tpl_vars['images']->value['albumPath'])).("', largeimage: '")).("uploads/proImg/")).($_smarty_tpl->tpl_vars['images']->value['albumPath']);?>
'}" >
								<img  src=<?php echo ("uploads/proImg/images50/").($_smarty_tpl->tpl_vars['images']->value['albumPath']);?>
 alt="ipad" >
							</a>
						</li>
					<?php } ?>
					</ul>
				</div>
				<div class="info-pd-box">
					<p class="info-pd-tit"><a href="#"><?php echo $_smarty_tpl->tpl_vars['pName']->value;?>
</a></p>
					<ul class="info-pd-list">
						<li class="list-item"><span class="list-tit">慕课价</span><div>
							<span class="price">&yen;<?php echo $_smarty_tpl->tpl_vars['iPrice']->value;?>
</span>
						</div></li>
						<li class="list-item"><span class="list-tit">优惠</span><div>
							<span class="preferential">购ipad加价优惠够配件或USB充电插座</span>
						</div></li>
						<li class="list-item"><span class="list-tit">送到</span><div>
							<a href="#" class="select-box">日照市 东港区 大学城<i></i></a><span class="other">有货，可当日出库</span>
						</div></li>
						<li class="list-item"><span class="list-tit">选择颜色</span><div>
							<span class="color"><a href="#" class="current">白色</a><a href="#">灰色</a><a href="#">黑色</a></span>
						</div></li>
						<li class="list-item">
							<span class="list-tit">选择规格</span>
							<div>
								<span class="size">
									<a href="javascript:void(0);" class="current">WIFI 16G</a>
									<a href="javascript:void(0);">WIFI 32G</a>
									<a href="javascript:void(0);">WIFI 64G</a>
									<a href="javascript:void(0);">WIFI Cellular 32G</a>
									<a href="javascript:void(0);">WIFI Cellular 64G</a>
									<a href="javascript:void(0);">WIFI Cellular 16G</a>
								</span>
							</div>
							
						</li>
						<li class="list-item"><span class="list-tit">数量</span>
						<div><span class="num"><a href="javascript:void(0);" class="left">-</a>1<a href="javascript:void(0);" class="right">+</a></span>限购<a href="javascript:void(0);" class="limit-num">9</a>件</div></li>
					</ul>
					<div class="pd-choice">已选择<a href="javascript:void(0);">“白色|WIFI 16G”</a></div>
					<div class="pd-buy">
						<a href="javascript:void(0);" class="pd-add-shopCar">加入购物车</a>
						<a href="javascript:void(0);" class="pd-buy-now">立即购买</a>
					</div>
					<span class="attention">注意：此商品可提供普通发票，不提供增值税发票。</span>
				</div>
			</div><!--dt-info结束-->
			<div class="dt-info-other">
				<div class="aside-box">
					<div class="same-pd">
						<h3 class="sameprice-tit">同价位</h3>
						<ul class="sameprice-list">
							<li class="list-item">
								<a href="#"><img src="images/pd-detail/pd_detail_samePrice1.jpg" alt="同价位商品手机"></a>
								<p class="sameprice-name"><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a></p>
								<span class="sameprice-price">&yen;3588.00</span>
							</li>
							<li class="list-item">
								<a href="#"><img src="images/pd-detail/pd_detail_samePrice1.jpg" alt="同价位商品手机"></a>
								<p class="sameprice-name"><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a></p>
								<span class="sameprice-price">&yen;3588.00</span>
							</li>
							<li class="list-item">
								<a href="#"><img src="images/pd-detail/pd_detail_samePrice1.jpg" alt="同价位商品手机"></a>
								<p class="sameprice-name"><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a></p>
								<span class="sameprice-price">&yen;3588.00</span>
							</li>
							<li class="list-item">
								<a href="#"><img src="images/pd-detail/pd_detail_samePrice1.jpg" alt="同价位商品手机"></a>
								<p class="sameprice-name"><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a></p>
								<span class="sameprice-price">&yen;3588.00</span>
							</li>
						</ul>
					</div>
					<div class="same-pd">
						<h3 class="sameprice-tit">看了就想买</h3>
						<ul class="sameprice-list">
							<li class="list-item">
								<a href="#"><img src="images/pd-detail/pd_detail_wantBuy1.jpg" alt="同价位商品手机"></a>
								<p class="sameprice-name"><a href="#">某某品牌 配备 Retina 显示屏 IPS</a></p>
								<span class="sameprice-price">&yen;3588.00</span>
							</li>
							<li class="list-item">
								<a href="#"><img src="images/pd-detail/pd_detail_wantBuy1.jpg" alt="同价位商品手机"></a>
								<p class="sameprice-name"><a href="#">某某品牌 配备 Retina 显示屏 IPS</a></p>
								<span class="sameprice-price">&yen;3588.00</span>
							</li>
							<li class="list-item">
								<a href="#"><img src="images/pd-detail/pd_detail_wantBuy1.jpg" alt="同价位商品手机"></a>
								<p class="sameprice-name"><a href="#">某某品牌 配备 Retina 显示屏 IPS</a></p>
								<span class="sameprice-price">&yen;3588.00</span>
							</li>
						</ul>
					</div>
				</div><!--aside-box结束-->
				<div class="pd-intro-com">
					<div class="intro-com-tit"><a href="javascript:void(0);" class="intro-tit intro-current"><span>产品介绍</span></a><a href="javascript:void(0);" class="com-tit"><span>商品评价</span></a></div>
					<div class="intro-info">
						<div class="intro-img">
							<img src="images/pd-detail/pd_detail_intro1.jpg" alt="introduce picture">
						</div>
						<div class="intro-section">
							<h4 class="intro-section-tit"><span>强烈推荐</span></h4>
							<p><?php echo $_smarty_tpl->tpl_vars['pDesc']->value;?>
</p>
						</div>
						<div class="intro-section">
							<h4 class="intro-section-tit"><span>精美图片</span></h4>
							<p>苹果iPad7.9 英寸显示屏可带来新的iPad体验，绚丽的显示屏，在每一寸画面中呈现灵动鲜活的美妙影像。苹果miniMD528CH/A采用500 万像素 iSight 摄像头，清晰记录每一次的幸福。</p>
							<img src="images/pd-detail/pd_detail_intro2.jpg" alt="ipad" class="intro-section-img">
							<img src="images/pd-detail/pd_detail_intro2.jpg" alt="ipad" class="intro-section-img">
							<img src="images/pd-detail/pd_detail_intro2.jpg" alt="ipad" class="intro-section-img">

						</div>
					</div>
					<div class="com-info">
						<div class="pd-com-box">
							<div class="pd-com-tit">
								<h4>商品评价</h4>
								<div class="pd-com-grade">
									<div class="grade"><span>4.7</span>分</div>
									<div class="rang">
										<a href="javascript:void(0)">非常不满意</a>
										<a href="javascript:void(0)">不满意	</a>
										<a href="javascript:void(0)">一般</a>
										<a href="javascript:void(0)">满意</a>
										<a href="javascript:void(0)">非常满意</a>
										<span class="rang-grade">4.7 <i></i></span>
									</div>
									<p class="com-people">&nbsp;共<a href="javacript:void(0);" class="com-people-num">18939</a>位慕课网友参与评分</p>
								</div>
							</div><!--pd-com-tit结束-->
							<div class="pd-com-con">
								<div class="all-com-num">
									<div class="all-com-num-left">
										<span class="all">全部</span>
										<span class="com-rang-num">满意(<a href="javascript:void(0);">17490</a>)</span>
										<span class="com-rang-num">一般(<a href="javascript:void(0);">549</a>)</span>
										<span class="com-rang-num">不满意(<a href="javascript:void(0);">743</a>)</span>
									</div>
									<div class="all-com-num-right">
										<a href="javascript:void(0);">时间排序</a>
										<a href="javascript:void(0);">推荐排序</a>
									</div>
								</div>
								<div class="com-con-info">
									<div class="con-info-list">
										<div class="list-left">
											<img src="images/pd-detail/icon_pd_detail_user1.png" alt="user rank">
											<p class="user-id">61***42</p>
											<p class="user-rank">金色会员</p>
										</div>
										<div class="list-right">
											<p class="user-grade">
												<em></em>
												<em></em>
												<em></em>
												<em></em>
												<em></em>
												<span class="user-grade-num">&nbsp;&nbsp;5分&nbsp;&nbsp; 满意</span>
												<span class="time">2014-03-07 17:41:44</span>
											</p>
											<p class="com-detail">挺不错的，信赖慕课</p>
											<p class="user-com-other">
												<a href="javascript:void(0);">踩 ( <span> 0 </span> )</a>&nbsp;&nbsp;
												<a href="javascript:void(0);">顶 ( <span> 0 </span> )</a>
											</p>
										</div>
									</div>
									<div class="con-info-list">
										<div class="list-left">
											<img src="images/pd-detail/icon_pd_detail_user2.png" alt="user rank">
											<p class="user-id">61***42</p>
											<p class="user-rank">金色会员</p>
										</div>
										<div class="list-right">
											<p class="user-grade">
												<em></em>
												<em></em>
												<em></em>
												<em></em>
												<em></em>
												<span class="user-grade-num">&nbsp;&nbsp;5分&nbsp;&nbsp; 满意</span>
												<span class="time">2014-03-07 17:41:44</span>
											</p>
											<p class="com-detail">挺不错的，信赖慕课</p>
											<p class="user-com-other">
												<a href="javascript:void(0);">踩 ( <span> 0 </span> )</a>&nbsp;&nbsp;
												<a href="javascript:void(0);">顶 ( <span> 0 </span> )</a>
											</p>
										</div>
									</div>
									<div class="con-info-list">
										<div class="list-left">
											<img src="images/pd-detail/icon_pd_detail_user2.png" alt="user rank">
											<p class="user-id">61***42</p>
											<p class="user-rank">金色会员</p>
										</div>
										<div class="list-right">
											<p class="user-grade">
												<em></em>
												<em></em>
												<em></em>
												<em></em>
												<em></em>
												<span class="user-grade-num">&nbsp;&nbsp;5分&nbsp;&nbsp; 满意</span>
												<span class="time">2014-03-07 17:41:44</span>
											</p>
											<p class="com-detail">挺不错的，信赖慕课</p>
											<p class="user-com-other">
												<a href="javascript:void(0);">踩 ( <span> 0 </span> )</a>&nbsp;&nbsp;
												<a href="javascript:void(0);">顶 ( <span> 0 </span> )</a>
											</p>
										</div>
									</div>
									<div class="con-info-list">
										<div class="list-left">
											<img src="images/pd-detail/icon_pd_detail_user2.png" alt="user rank">
											<p class="user-id">61***42</p>
											<p class="user-rank">金色会员</p>
										</div>
										<div class="list-right">
											<p class="user-grade">
												<em></em>
												<em></em>
												<em></em>
												<em></em>
												<em></em>
												<span class="user-grade-num">&nbsp;&nbsp;5分&nbsp;&nbsp; 满意</span>
												<span class="time">2014-03-07 17:41:44</span>
											</p>
											<p class="com-detail">挺不错的，信赖慕课</p>
											<p class="user-com-other">
												<a href="javascript:void(0);">踩 ( <span> 0 </span> )</a>&nbsp;&nbsp;
												<a href="javascript:void(0);">顶 ( <span> 0 </span> )</a>
											</p>
										</div>
									</div>
									<div class="con-info-list">
										<div class="list-left">
											<img src="images/pd-detail/icon_pd_detail_user2.png" alt="user rank">
											<p class="user-id">61***42</p>
											<p class="user-rank">金色会员</p>
										</div>
										<div class="list-right">
											<p class="user-grade">
												<em></em>
												<em></em>
												<em></em>
												<em></em>
												<em></em>
												<span class="user-grade-num">&nbsp;&nbsp;5分&nbsp;&nbsp; 满意</span>
												<span class="time">2014-03-07 17:41:44</span>
											</p>
											<p class="com-detail">挺不错的，信赖慕课</p>
											<p class="user-com-other">
												<a href="javascript:void(0);">踩 ( <span> 0 </span> )</a>&nbsp;&nbsp;
												<a href="javascript:void(0);">顶 ( <span> 0 </span> )</a>
											</p>
										</div>
									</div>
									<div class="page-num">
										<a href="javascript:void(0);"> &lt;上一页</a>
										<a href="javascript:void(0);">1</a>
										<a href="javascript:void(0);">2</a>
										<a href="javascript:void(0);">3</a>
										<a href="javascript:void(0);">4</a>
										<a href="javascript:void(0);">5</a>
										<a href="javascript:void(0);" class="page-num-special">...</a>
										<a href="javascript:void(0);">1879</a>
										<a href="javascript:void(0);">下一页 &gt;</a>&nbsp;
										<span>&nbsp;到第&nbsp;<input type="text" class="to-page-num" value="1"></span>&nbsp;
										<button>确定</button>
									</div>
								</div><!--com-con-info结束-->
							</div><!--pd-com-con结束-->
							<div class="user-information">
								<div class="information-tit">
									<h4>全部咨询(705)</h4>
									<span class="present-infor"><a href="javascript:void(0);">发表资讯</a></span>
								</div>
								<p class="tip">
									提示:因厂家更改产品包装、产地或者更换随机附件等没有任何提前通知，且每位咨询者购买情况、提问时间等不同，为此以下回复信息仅供参考！若由此给您带来不便请多多谅解，谢谢！
								</p>
								<div class="com-con-info">
									<div class="con-info-list">
										<div class="list-left">
											<img src="images/pd-detail/icon_pd_detail_user3.jpg" alt="user rank">
											<p class="user-id">12***20</p>
											<p class="user-rank">土星会员</p>
										</div>
										<div class="list-right">
											<p class="user-grade">
												<span>[ 商品咨询 ]</span>
												<span class="time">2014-03-07 17:41:44</span>
											</p>
											<p class="com-detail">还能再便宜点吗？</p>
											<p class="mooc-answer">
												慕课网回复：您好，现在已经是活动价格了
												<span class="sj"></span>
											</p>
										</div>
									</div>
									<div class="con-info-list">
										<div class="list-left">
											<img src="images/pd-detail/icon_pd_detail_user3.jpg" alt="user rank">
											<p class="user-id">12***20</p>
											<p class="user-rank">土星会员</p>
										</div>
										<div class="list-right">
											<p class="user-grade">
												<span>[ 商品咨询 ]</span>
												<span class="time">2014-03-07 17:41:44</span>
											</p>
											<p class="com-detail">还能再便宜点吗？</p>
											<p class="mooc-answer">
												慕课网回复：您好，现在已经是活动价格了
												<span class="sj"></span>
											</p>
										</div>
									</div>
									<div class="con-info-list">
										<div class="list-left">
											<img src="images/pd-detail/icon_pd_detail_user3.jpg" alt="user rank">
											<p class="user-id">12***20</p>
											<p class="user-rank">土星会员</p>
										</div>
										<div class="list-right">
											<p class="user-grade">
												<span>[ 商品咨询 ]</span>
												<span class="time">2014-03-07 17:41:44</span>
											</p>
											<p class="com-detail">还能再便宜点吗？</p>
											<p class="mooc-answer">
												慕课网回复：您好，现在已经是活动价格了
												<span class="sj"></span>
											</p>
										</div>
									</div>
									<div class="con-info-list">
										<div class="list-left">
											<img src="images/pd-detail/icon_pd_detail_user3.jpg" alt="user rank">
											<p class="user-id">12***20</p>
											<p class="user-rank">土星会员</p>
										</div>
										<div class="list-right">
											<p class="user-grade">
												<span>[ 商品咨询 ]</span>
												<span class="time">2014-03-07 17:41:44</span>
											</p>
											<p class="com-detail">还能再便宜点吗？</p>
											<p class="mooc-answer">
												慕课网回复：您好，现在已经是活动价格了
												<span class="sj"></span>
											</p>
										</div>
									</div>
									<div class="con-info-list">
										<div class="list-left">
											<img src="images/pd-detail/icon_pd_detail_user3.jpg" alt="user rank">
											<p class="user-id">12***20</p>
											<p class="user-rank">土星会员</p>
										</div>
										<div class="list-right">
											<p class="user-grade">
												<span>[ 商品咨询 ]</span>
												<span class="time">2014-03-07 17:41:44</span>
											</p>
											<p class="com-detail">还能再便宜点吗？</p>
											<p class="mooc-answer">
												慕课网回复：您好，现在已经是活动价格了
												<span class="sj"></span>
											</p>
										</div>
									</div>
									
									<div class="page-num">
										<a href="javascript:void(0);"> &lt;上一页</a>
										<a href="javascript:void(0);">1</a>
										<a href="javascript:void(0);">2</a>
										<a href="javascript:void(0);" class="page-num-special">...</a>
										<a href="javascript:void(0);">19</a>
										<a href="javascript:void(0);">下一页 &gt;</a>&nbsp;
										<span>&nbsp;到第&nbsp;<input type="text" class="to-page-num" value="1"></span>&nbsp;
										<button>确定</button>
									</div>
								</div><!--com-con-info结束-->

							</div>
						</div><!--pd-com-box结束-->
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ("show/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
