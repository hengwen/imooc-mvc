<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-15 13:52:26
         compiled from "tpl/show/index.html" */ ?>
<?php /*%%SmartyHeaderCode:14554671545738244370b075-38890043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a97b6d09f478851a9c9059fa55ebc89f1e5b6ae3' => 
    array (
      0 => 'tpl/show/index.html',
      1 => 1463313143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14554671545738244370b075-38890043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5738244386b870_70968178',
  'variables' => 
  array (
    'cates' => 0,
    'cate' => 0,
    'proArr' => 0,
    'i' => 0,
    'pros' => 0,
    'albumPaths' => 0,
    'j' => 0,
    'pro' => 0,
    'paths' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738244386b870_70968178')) {function content_5738244386b870_70968178($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>慕课网电商网站首页</title>
	<link rel="stylesheet" href="css/meyer-reset.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header class="header">
		
			<?php echo $_smarty_tpl->getSubTemplate ("show/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("show/logo-search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<nav class="nav">
				<div class="inner-center">
					<div class="shop-class">
						<h1><a href="#">全部商品分类</a></h1>
						<div class="shop-class-info" style="display: block">
							<dl class="shop-class-list">
								<dt class="list-tt">
									<a href="#">手机</a>
									<a href="#">数码</a>
									<a href="#" class="bg-item">合约机</a>
									<span class="right-sanjiao"></span>
								</dt>
								<dd class="list-txt">
									<a href="#">荣耀3X</a>
									<a href="#">单反</a>
									<a href="#">智能设备</a>
								</dd>
							</dl>
							<dl class="shop-class-list current">
								<dt class="list-tt">
									<a href="#">电脑</a>
									<a href="#">硬件外设</a>
									<a href="#" class="bg-item">装机宝</a>
									<span class="right-sanjiao"></span>
								</dt>
								<dd class="list-txt">
									<a href="#">笔记本</a>
									<a href="#">台式机</a>
									<a href="#">超极本 </a>
									<a href="#">平板</a>
								</dd>
							</dl>
							<dl class="shop-class-list">
								<dt class="list-tt">
									<a href="#">大家电</a>
									<span class="right-sanjiao"></span>
								</dt>
								<dd class="list-txt">
									<a href="#">电视</a>
									<a href="#">空调</a>
									<a href="#">冰箱</a>
									<a href="#">洗衣机</a>
								</dd>
							</dl>
							<dl class="shop-class-list">
								<dt class="list-tt">
									<a href="#">厨房电器 </a>
									<a href="#">生活电器</a>
									<span class="right-sanjiao"></span>
								</dt>
								<dd class="list-txt">
									<a href="#">空气净化器 </a>
									<a href="#">微波炉</a>
									<a href="#">取暖设备</a>
								</dd>
							</dl>
							<dl class="shop-class-list">
								<dt class="list-tt">
									<a href="#">食品/饮料/生鲜</a>
									<a href="#" class="bg-item">粮油</a>
									<span class="right-sanjiao"></span>
								</dt>
								<dd class="list-txt">
									<a href="#">进口</a>
									<a href="#">方便面 </a>
									<a href="#">零食 </a>
									<a href="#">保健</a>
								</dd>
							</dl>
						</div>
						<dl class="class-item">
							<dd>
								<em>电脑整机</em>
								<span><a href="#">笔记本</a>
									<a href="#">超极本</a>
									<a href="#">上网本</a>
									<a href="#">平板电脑</a>
									<a href="#">台式机</a></span>
							</dd>
							<dd>
								<em>装机配件</em>
								<span><a href="#">CPU</a>
									<a href="#">硬盘</a>
									<a href="#">SSD固态硬</a>
									<a href="#">内存</a>
									<a href="#">显示</a>
									<a href="#">器智能显示器</a>
									<a href="#">主板</a>
									<a href="#">显卡</a>
									<a href="#">机箱</a>
									<a href="#"></a>
									<a href="#">散热器</a>
									<a href="#">刻录机/光驱</a>
									<a href="#">拓展卡</a>
									<a href="#">声卡</a>
									<a href="#">服务器配件</a>
									<a href="#">DIY小</a>
									<a href="#">装机/配件</a></span>
							</dd>
							<dd>
								<em>整机附件</em>
								<span><a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a>
									<a href="#">电脑包</a></span>
							</dd>
							<dd>
								<em>电脑外设</em>
								<span><a href="#">电脑外设</a>
									<a href="#">电脑外设</a>
									<a href="#">电脑外设</a>
									<a href="#">电脑外设</a>
									<a href="#">电脑外设</a>
									<a href="#">电脑外设</a>
									<a href="#">电脑外设</a>
									<a href="#">电脑外设</a>
									<a href="#">电脑外设</a>
									<a href="#">电脑外设</a></span>
							</dd>
							<dd>
								<em>网络设备</em>
								<span><a href="#">路由器</a>
									<a href="#">路由器</a>
									<a href="#">路由器</a>
									<a href="#">路由器</a>
									<a href="#">路由器</a>
									<a href="#">路由器</a>
									<a href="#">路由器</a>
									<a href="#">路由器</a></span>
							</dd>
							<dd>
								<em>音频设备</em>
								<span><a href="#">音箱</a>
									<a href="#">音箱</a>
									<a href="#">音箱</a>
									<a href="#">音箱</a>
									<a href="#">音箱</a>
									<a href="#">音箱</a></span>
							</dd>
							<dd class="special">
								<span><a href="#">电脑整机频道</a>
									<a href="#">硬件/外设频道</a></span>
							</dd>
						</dl>
					</div>
					<ul class="nav-list">
						<li><a href="#">数码城</a></li>
						<li><a href="#">天黑黑</a></li>
						<li><a href="#">团购</a></li>
						<li><a href="#">发现</a></li>
						<li><a href="#">二手特卖</a></li>
						<li><a href="#">名品会</a></li>
					</ul>
				</div>
			</nav><!--nav结束-->
	</header>
	<?php echo $_smarty_tpl->getSubTemplate ("show/banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
	<section class="section-computer">
		<div class="inner-center">
			<div class="product-tit">
				<h2><a href="#"><?php echo $_smarty_tpl->tpl_vars['cate']->value['cName'];?>
</a></h2>
				<span><a href="#">more&gt;&gt;</a></span>
			</div>
			<div class="product-ad">
				<div class="img-box">
					<ul class="img-list">
						<li class="list-item"><a href="#"><img src="images/ad_small1.jpg" alt="ad-small1"></a></li>
						<li class="list-item"><a href="#"><img src="images/ad_small2.jpg" alt="ad-small2"></a></li>
					</ul>
					<div class="banner-btn">
						<a href="#" class="current"></a><a href="#"></a>
					</div>
				</div>
			</div><!--product-ad结束-->
			<div class="product-info">
				<ul class="product-list-big">
					<?php  $_smarty_tpl->tpl_vars['pros'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pros']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['proArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pros']->key => $_smarty_tpl->tpl_vars['pros']->value) {
$_smarty_tpl->tpl_vars['pros']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pros']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['cate']->value['id']) {?>
							<?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
								<?php  $_smarty_tpl->tpl_vars['paths'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['paths']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['albumPaths']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['paths']->key => $_smarty_tpl->tpl_vars['paths']->value) {
$_smarty_tpl->tpl_vars['paths']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['paths']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['j']->value==$_smarty_tpl->tpl_vars['pro']->value['id']) {?>
										<li class="list-item" title='<?php echo $_smarty_tpl->tpl_vars['pro']->value['pName'];?>
'>
											<a href=<?php echo ("admin.php?controller=index&method=detail&id=").($_smarty_tpl->tpl_vars['pro']->value['id']);?>
 class="list-item-link" ><img src=uploads/proImg/images200/<?php echo $_smarty_tpl->tpl_vars['paths']->value['albumPath'];?>
 alt="product images" class="item-img"></a>
											<h3 class="item-tt"><a href=<?php echo ("admin.php?controller=index&method=detail&id=").($_smarty_tpl->tpl_vars['pro']->value['id']);?>
 class="item-tt-link"><?php echo $_smarty_tpl->tpl_vars['pro']->value['pName'];?>
</a></h3>
											<p class="item-text">&yen;<?php echo $_smarty_tpl->tpl_vars['pro']->value['iPrice'];?>
元</p>
										</li>
									<?php }?>
								<?php } ?>
							<?php } ?>
						<?php }?>
					<?php } ?>
				</ul><!--product-list-big结束-->
				<ul class="product-list-small">
					<li class="list-item">
						<div class="list-item-left">
							<a href="#" class="list-item-link"><img src="images/img_product_small1.jpg" alt="product images" class="item-img"></a>
						</div>
						<h3 class="item-tt"><a href="#" class="item-tt-link">NFC技术一碰轻松
						配对！接触屏幕</a></h3>
						<p class="item-text">&yen;149.00</p>
					</li>
					<li class="list-item">
						<div class="list-item-left">
							<a href="#" class="list-item-link"><img src="images/img_product_small2.jpg" alt="product images" class="item-img"></a>
						</div>
						
							<h3 class="item-tt"><a href="#" class="item-tt-link">Samsung三星G
							ALAXY Grand2</a></h3>
							<p class="item-text">&yen;2000.00</p>
						
					</li>
					<li class="list-item">
						<div class="list-item-left">
							<a href="#" class="list-item-link"><img src="images/img_product_small3.jpg" alt="product images" class="item-img"></a>
						</div>
						
							<h3 class="item-tt"><a href="#" class="item-tt-link">全网低价 Apple
							苹果iPad mini1</a></h3>
							<p class="item-text">&yen;1888.00</p>
						
					</li>
					<li class="list-item">
						<div class="list-item-left">
							<a href="#" class="list-item-link"><img src="images/img_product_small4.jpg" alt="product images" class="item-img"></a>
						</div>
						
							<h3 class="item-tt"><a href="#" class="item-tt-link" title="Apple苹果 全新Retina屏MacBook pro">Apple苹果 全新Retina屏MacBook pro</a></h3>
							<p class="item-text">&yen;1899元</p>
						
					</li>
				</ul><!--product-list-small结束-->
			</div><!--product-info结束-->
		</div>
	</section><!--section-computer结束-->
	<?php } ?>
	<?php echo $_smarty_tpl->getSubTemplate ("show/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
