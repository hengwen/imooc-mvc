<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-16 08:45:46
         compiled from "tpl/show/register.html" */ ?>
<?php /*%%SmartyHeaderCode:885956377573942ca5438f7-34655488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560a5ec8f349e666a10defdeac3888dc6d8369f6' => 
    array (
      0 => 'tpl/show/register.html',
      1 => 1463380816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '885956377573942ca5438f7-34655488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_573942ca5bb032_36047279',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573942ca5bb032_36047279')) {function content_573942ca5bb032_36047279($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页</title>
	<link rel="stylesheet" href="css/meyer-reset.css">
	<link rel="stylesheet" href="css/main.css">
	
</head>
<body>
	<div class="login-top">
		<div class="inner-center">
			<div class="logo"><a href="admin.php"><img src="images/img_logo.jpg" alt="mooc logo"></a>欢迎注册</div>
		</div>
	</div>
	<div class="register-box">
		<div class="inner-center">
			<form action="admin.php?controller=index&method=register" method="post"  class="register-form">
				<div>
					<label><span class="tit"><em>*</em>账户名：</span><input type="text" class="user" name="username" placeholder="邮箱/用户名/手机号"></label>
				</div>
				<div>
					<label><span class="tit"><em>*</em>请设置密码：</span><input type="password" class="password" name="password" ></label>
				</div>
				<div>
					<label><span class="tit"><em>*</em>请确认密码：</span><input type="password" class="password" name="password1" ></label>
				</div>
				<div>
					<label><span class="tit"><em>*</em>邮箱：</span><input type="email" class="email" name="email" ></label>
				</div>
				<div>
					<label>
						<span class="tit"><em>*</em>性别：</span>
						<label><input type="radio"  name="sex" value="male" checked>男</label>&nbsp;&nbsp;
						<label><input type="radio"  name="sex" value="female">女</label>
					</label>
				</div>
				<div>
					<label><input type="checkbox"  class="readed">我已阅读并同意<a href="javascript:void(0);">《用户注册协议》</a></label>
				</div>
				<input type="hidden" name="face" value="1">
				<input type="hidden" name="activeFlag" value="1">
				<input type="submit" class="submit" value="注册">
			</form>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("show/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<script src="scripts/jquery-1.12.3.min.js"></script>
	<script src="scripts/main.js"></script>
</body>
</html><?php }} ?>
