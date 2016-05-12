<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-12 13:30:32
         compiled from "tpl/admin/userAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:6533715115734660f847fb9-65341970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ac02f862c617c0ffc581f31e18f041e4000735e' => 
    array (
      0 => 'tpl/admin/userAddForm.html',
      1 => 1463052596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6533715115734660f847fb9-65341970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5734660f9130d5_22175392',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5734660f9130d5_22175392')) {function content_5734660f9130d5_22175392($_smarty_tpl) {?><form action="admin.php?controller=admin&method=doAdd&tab=3" method="post"  class="user-add" id="user-add">
	<table  width="400" border="1" bgcolor="#ccc">
	<caption>添加用户</caption>
		<tr>
			<td align="right"><label for="username">用户账号：</label></td>
			<td><input type="text" class="user" name="username" id="username"></td>
		</tr>
		<tr>
			<td align="right"><label for="password"> 用户密码：</label></td>
			<td><input type="password" class="password" name="password" id="password"></td>
		</tr>
		<tr>
			<td align="right"><label for="email">用户邮箱：</label> </td>
			<td><input type="email" class="email" name="email" id="email"></td>
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
			<td colspan="2" align="center"><input type="submit" value="添加"></td>
		</tr>
	</table>
</form>


	
<?php }} ?>
