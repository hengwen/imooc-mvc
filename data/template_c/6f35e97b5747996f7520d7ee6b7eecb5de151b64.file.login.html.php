<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-12 06:32:56
         compiled from "tpl/admin/login.html" */ ?>
<?php /*%%SmartyHeaderCode:141910300457340778588807-46608772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f35e97b5747996f7520d7ee6b7eecb5de151b64' => 
    array (
      0 => 'tpl/admin/login.html',
      1 => 1463027145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141910300457340778588807-46608772',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5734077862cf31_03808367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5734077862cf31_03808367')) {function content_5734077862cf31_03808367($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理员登录</title>
	<link rel="stylesheet" href="css/backstage.css">
</head>
<body>
	<div class="login-top">
		<div class="inner-center">
			<div class="logo"><a href="javascript:void(0);"><img src="images/img_b_logo.jpg" alt="mooc logo"></a>欢迎登陆</div>
		</div>
	</div>
	<div class="back-login">
		<div class="inner-center">
			<form action='admin.php?controller=admin&method=login' method="post" name="backLoginForm" class="login-form">
					<div>
						<label>管理员账号<br><input type="text" name="username" class="user" ></label>
					</div>
					<div>
						<label>密码<br><input type="password" name="password" class="password"></label>
					</div>
					<div>
						<label>验证码<br><input type="text" name="verify" class="vertify"></label>
					</div>
					
					<img src ="verify.php" alt="验证码" class="vertify-img">
					<div>
						<label><input type="checkbox" name="autoLogin" class="auto-login" >自动登陆(一周内自动登录)</label>&nbsp;
					</div>
					<input type="submit" name="submit" class="submit" value="登录">
					
				</form>
		</div>
	</div>
	<footer>
		<div class="inner-center">
			<p class="footer-nav">
				<a href="#">慕课简介</a> |
				<a href="#">慕课公告</a> |
				<a href="#">招纳贤士</a> |
				<a href="#">联系我们</a> |
				<span>客服热线：400-675-1234</span>
			</p>
			<p class="copyright">Copyright &copy; 2006 - 2014 慕课版权所有   京ICP备09037834号   京ICP证B1034-8373号   某市公安局XX分局备案编号：123456789123</p>

				<a href="#"><img src="images/icon_licence.jpg" alt="licence"></a>
				<a href="#"><img src="images/icon_licence.jpg" alt="licence"></a>
				<a href="#"><img src="images/icon_licence.jpg" alt="licence"></a>
				<a href="#"><img src="images/icon_licence.jpg" alt="licence"></a>
			
		</div>
	</footer>
</body>
</html><?php }} ?>
