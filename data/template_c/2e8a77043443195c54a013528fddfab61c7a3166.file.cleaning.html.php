<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-18 08:36:35
         compiled from "tpl/show/cleaning.html" */ ?>
<?php /*%%SmartyHeaderCode:357363479573bcd475789c6-55440513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8a77043443195c54a013528fddfab61c7a3166' => 
    array (
      0 => 'tpl/show/cleaning.html',
      1 => 1463553350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '357363479573bcd475789c6-55440513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_573bcd47674fe1_85487715',
  'variables' => 
  array (
    'imgPath' => 0,
    'pName' => 0,
    'iPrice' => 0,
    'num' => 0,
    'uId' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573bcd47674fe1_85487715')) {function content_573bcd47674fe1_85487715($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购物车和结算页</title>
	<link rel="stylesheet" href="css/meyer-reset.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="scripts/jquery-1.12.3.min.js"></script>
	<script src="scripts/main.js"></script>
</head>
<body>
	<header class="header">
		<?php echo $_smarty_tpl->getSubTemplate ("show/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="logo-search">
			<div class="inner-center">
				<div class="logo">
					<a href="#"><img src="images/img_logo.jpg" alt="慕课网"></a>
				</div>
			</div>
		</div><!--logo-search结束-->
	</header>
	<div class="form-wrap">
		<div class="inner-center">
			<form action="admin.php?controller=index&method=indent" method="post" class="cleaing-form">
				<fieldset>
					<div class="fieldset-tit">收货信息</div>
					<div>
						<label><span class="tit"><em>*</em> 选择地区：</span><input type="text" class="area" name="area" placeholder="日照市 东港区 大学城"></label>
					</div>
					<div>
						<label><span class="tit"><em>*</em> 详细地址：</span><input type="address" class="address" name="address" placeholder="最多输入26个汉字"></label>
					</div>
					<div>
						<label><span class="tit"><em>*</em> 收货人：</span><input type="text" class="recieve-name" name="recieve-name" placeholder="最多10个汉字"></label>
					</div>
					<div>
						<label><span class="tit"><em>*</em> 手机：</span><input type="phone" class="phone" name="phone" placeholder="如12345678910"></label>
					<label> 或固定电话：<input type="text" name="area-num" class="area-num" placeholder="区号"> - <input type="text" name="phone-num" class="phone-num" placeholder="电话号码"> - <input type="text" name="fenji-num" class="fenji-num" placeholder="分机号（可选）"></label>
					</div>
					<input type="button" value="确认收货地址" class="sure-add">
				</fieldset>
				<fieldset>
					<div class="fieldset-tit">支付方式</div>
					<div>
						<label><input type="radio" name="pay-method"> &nbsp;微信支付&nbsp;&nbsp;<img src="images/icon_weixin.png" alt="weixin">&nbsp;&nbsp;用微信扫一扫就能支付</label>
					</div>
					<div>
						<label><input type="radio" name="pay-method">&nbsp; 货到付款 &nbsp;&nbsp;送货上门后再付，使用现金或银行卡</label>
					</div>
				</fieldset>
				<fieldset>
					<div class="fieldset-tit">发票信息</div>
					<div>
						<label><input type="checkbox" checked> 需要发票</label>
					</div>
					<div>
						<label><span class="tit"><em>*</em> 发票类型：</span>
						 <select name="invoice" id="invoice">
						 	<option value="商业零售发票">商业零售发票</option>
						 	<option value="个人">个人</option>
						 </select>
						</label>
					</div>
					<div>
						<label><span class="tit"><em>*</em> 发票抬头：</span>
							<select name="invoice-tit" id="invoice-tit">
						 	<option value="公司">公司</option>
						 	<option value="个人">个人</option>
						 </select>
						 <input type="text" name="invoice-tit-more" placeholder="阿斯顿">
						</label>
					</div>
				</fieldset>
				<fieldset>
					<div class="fieldset-tit">送货清单</div>
					<table class="buy-list">
						<thead>
							<tr>
								<th colspan="2">商品名称</th>
								<th>单价</th>
								<th>返现</th>
								<th>数量</th>
								<th>小计</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td rowspan="2"><img src=<?php echo ("uploads/proImg/images100/").($_smarty_tpl->tpl_vars['imgPath']->value);?>
 alt=""></td>
								<td><?php echo $_smarty_tpl->tpl_vars['pName']->value;?>
</td>
								<td>&yen;<?php echo $_smarty_tpl->tpl_vars['iPrice']->value;?>
</td>
								<td>&yen;0.00</td>
								<td><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</td>
								<td>&yen;<?php echo $_smarty_tpl->tpl_vars['iPrice']->value*($_smarty_tpl->tpl_vars['num']->value).(".00");?>
</td>
							</tr>
							<tr>
								<td>[赠品] 保鲜盒 抽真空保鲜盒 海信冰洗赠品</td>
								<td></td>
								<td></td>
								<td>1</td>
								<td></td>
							</tr>
						</tbody>
					</table>
					<div class="no-buy-box" >
						<p class="require-tip">若您对包裹有特殊要求，请在此留言。</p>
						<p class="require-warming">抱歉，以下商品暂时不能购买，已帮您自动在本次结算中剔除并扣减对应金额，您可以先购买其他商品：</p>
						<div class="no-buy">
							<a href="javascript:void(0);"><img src="images/pd_cleaning2.jpg" alt="不能购买的商品"></a>
							<p class="no-buy-name"><a href="#">清风 欧院系列 清香型 100抽...</a></p>
							<p class="no-buy-num">数量：<span>1</span>件</p>
							<p class="no-buy-price">&yen;4.90<em>(无货)</em></p>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="fieldset-tit">订单结算</div>
					<div class="sum">
						<div class="sum-price">总计 <span class="big">&yen;<?php echo $_smarty_tpl->tpl_vars['iPrice']->value*($_smarty_tpl->tpl_vars['num']->value).(".00");?>
</span></div>
						<input type="hidden" name="uId" value=<?php echo $_smarty_tpl->tpl_vars['uId']->value['id'];?>
>
						<input type="hidden" name="pId" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
						<input type="hidden" name="num" value=<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
>
						<input type="hidden" name="totle" value=<?php echo $_smarty_tpl->tpl_vars['iPrice']->value*$_smarty_tpl->tpl_vars['num']->value;?>
>
						<input type="submit" value="提交订单" class="submit">
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("show/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
