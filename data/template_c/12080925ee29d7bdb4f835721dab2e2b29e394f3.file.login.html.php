<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-24 12:43:32
         compiled from "tpl/show/login.html" */ ?>
<?php /*%%SmartyHeaderCode:715988597573b247e83e4b3-49113333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12080925ee29d7bdb4f835721dab2e2b29e394f3' => 
    array (
      0 => 'tpl/show/login.html',
      1 => 1464086593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '715988597573b247e83e4b3-49113333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_573b247e9505b5_06476223',
  'variables' => 
  array (
    'referer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b247e9505b5_06476223')) {function content_573b247e9505b5_06476223($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登入页</title>
	<link rel="stylesheet" href="css/meyer-reset.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="login-top">
		<div class="inner-center">
			<div class="logo"><a href="javascript:void(0);"><img src="images/img_logo.jpg" alt="mooc logo"></a>欢迎登陆</div>
		</div>
	</div>
	<div class="login-box">
		<div class="inner-center">
			<form action=<?php echo ("admin.php?controller=index&method=login&referer=").($_smarty_tpl->tpl_vars['referer']->value);?>
 method="post" class="login-form">
				<div>
					<label>邮箱/用户名/已验证手机<br><input type="text" name="username" class="user" placeholder="example@163.com"></label>
				</div>
				<div>
					<label>密码<br><input type="password" name="password" class="password"></label>
				</div>
				<div>
					<label>验证码<br><input type="text" name="verify" class="verify"></label>
				</div>
					<img src ="getVerify.php" alt="验证码" class="vertify-img">
				<div>
					<label><input type="checkbox" name="autoLogin" class="auto-login" >自动登陆</label>&nbsp;
					<label><input type="checkbox" name="safeBtn" class="safe-btn">安全控件 </label>&nbsp;
					<a href="javascript:void(0);">忘记密码？</a>
				</div>
				<input type="submit" name="submit" class="submit" value="登录">
				<p class="login-tip">使用合作网账号登录：<br>
					<a href="javascript:void(0);">QQ</a>|
					<a href="javascript:void(0);">网易</a>|
					<a href="javascript:void(0);">人人</a>|
					<a href="javascript:void(0);">奇虎360</a>|
					<a href="javascript:void(0);">开心</a>|
					<a href="javascript:void(0);">豆瓣</a>|
					<a href="javascript:void(0);">搜狐</a>|
					<a href="javascript:void(0);" class="more">更多</a>
				</p>
				<a class="register-btn" href="admin.php?controller=index&method=registerForm">免费注册&gt;&gt;</a>
			</form>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("show/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
