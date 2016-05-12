<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-12 13:37:47
         compiled from "tpl/admin/userEditForm.html" */ ?>
<?php /*%%SmartyHeaderCode:131855758057346aa707e7e0-67430001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f4ea15c61eeb76d6e43901c5bce7f469a7e4d4c' => 
    array (
      0 => 'tpl/admin/userEditForm.html',
      1 => 1463053064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131855758057346aa707e7e0-67430001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57346aa71c1881_36649913',
  'variables' => 
  array (
    'id' => 0,
    'username' => 0,
    'email' => 0,
    'face' => 0,
    'sex' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57346aa71c1881_36649913')) {function content_57346aa71c1881_36649913($_smarty_tpl) {?>
<form action="admin.php?controller=admin&method=doEdit&tab=3&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" class="user-add" >
	<table  width="400" border="1" bgcolor="#ccc">
	<caption>编辑用户</caption>
		<tr>
			<td align="right"><label for="username">用户账号：</label></td>
			<td><input type="text" class="user" name="username" id="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"></td>
		</tr>
		<tr>
			<td align="right"><label for="password"> 用户密码：</label></td>
			<td><input type="password" class="password" name="password" id="password" placeholder="******"></td>
		</tr>
		<tr>
			<td align="right"><label for="email">用户邮箱：</label> </td>
			<td><input type="email" class="email" name="email" id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"></td>
		</tr>
		<tr>
			<td align="right">性别：</td>
			<td>
				<label><input type="radio" name="sex" value="male" checked> 男</label>&nbsp;&nbsp;
				<label><input type="radio" name="sex" value="female"> 女</label>
			</td>
		</tr>
		<tr>
			<td align="right"><label for="face">用户头像：</label> </td>
			<td>
				<input type="radio" class="face" name="face" id="face" value="1" checked><img src="images/face_b_1.jpg" value="1" alt="face" width="40" height="40">
				<input type="radio" class="face" name="face" id="face" value="2"><img src="images/face_b_2.jpg" value="1" alt="face" width="40" height="40">
				<input type="radio" class="face" name="face" id="face" value="3"><img src="images/face_b_3.jpg" value="1" alt="face" width="40" height="40">
				<input type="radio" class="face" name="face" id="face" value="4"><img src="images/face_b_4.jpg" value="1" alt="face" width="40" height="40">
				<input type="hidden" name="regTime" value="" id="regTime">
				<input type="hidden" name="activeFlag" value="1" id="activeFlag">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="编辑"></td>
		</tr>
	</table>
</form>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['face']->value;?>
" id="edit-face">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
" id="edit-sex">


	
<?php }} ?>
