<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-13 15:11:04
         compiled from "tpl/admin/adminAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:13193496765734297d771b03-95510413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2afa8250243c6111db4230ddcc8b0a3b320f2eb9' => 
    array (
      0 => 'tpl/admin/adminAddForm.html',
      1 => 1463053776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13193496765734297d771b03-95510413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5734297d8285b6_93372816',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5734297d8285b6_93372816')) {function content_5734297d8285b6_93372816($_smarty_tpl) {?>
<form action="admin.php?controller=admin&method=doAdd&tab=4" method="post" class="admin-add" id="admin-form" >
	<table  width="400" border="1" bgcolor="#ccc">
	<caption>添加管理员</caption>
		<tr>
			<td align="right">管理员账号：</td>
			<td><input type="text" class="user" name="username" id="username"></td>
		</tr>
		<tr>
			<td align="right"> 管理员密码：</td>
			<td><input type="password" class="password" name="password"></td>
		</tr>
		<tr>
			<td align="right"> 管理员邮箱：</td>
			<td><input type="email" class="email" name="email"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" class="submit" value="添加"></td>
		</tr>
	</table>

</form>


	
<?php }} ?>
