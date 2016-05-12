<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-12 12:22:51
         compiled from "tpl/admin/adminEditForm.html" */ ?>
<?php /*%%SmartyHeaderCode:10643564485734451a3182c3-81011870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a328a5e180ca3358099d8f304bffa647f6f5e57' => 
    array (
      0 => 'tpl/admin/adminEditForm.html',
      1 => 1463048565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10643564485734451a3182c3-81011870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5734451a41f8e9_73825791',
  'variables' => 
  array (
    'id' => 0,
    'username' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5734451a41f8e9_73825791')) {function content_5734451a41f8e9_73825791($_smarty_tpl) {?>
<form action="admin.php?controller=admin&method=doEdit&tab=4&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" class="admin-add">
	<table  width="400" border="1" bgcolor="#ccc">
	<caption>编辑管理员</caption>
		<tr>
			<td align="right">管理员账号：</td>
			<td><input type="text" class="user" name="username" id="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"></td>
		</tr>
		<tr>
			<td align="right"> 管理员密码：</td>
			<td><input type="password" class="password" name="password" placeholder="******"></td>
		</tr>
		<tr>
			<td align="right"> 管理员邮箱：</td>
			<td><input type="email" class="email" name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="编辑"></td>
		</tr>
	</table>
</form>

<?php }} ?>
