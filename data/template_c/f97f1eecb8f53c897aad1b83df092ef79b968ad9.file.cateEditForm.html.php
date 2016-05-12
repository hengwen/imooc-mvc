<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-12 13:52:23
         compiled from "tpl/admin/cateEditForm.html" */ ?>
<?php /*%%SmartyHeaderCode:111770152957346e772be5e3-34757230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f97f1eecb8f53c897aad1b83df092ef79b968ad9' => 
    array (
      0 => 'tpl/admin/cateEditForm.html',
      1 => 1463053935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111770152957346e772be5e3-34757230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'cName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57346e77350a22_47904852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57346e77350a22_47904852')) {function content_57346e77350a22_47904852($_smarty_tpl) {?>
<form class="admin-add" action="admin.php?controller=admin&method=doEdit&tab=2&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
	<table  width="400" border="1" bgcolor="#ccc">
	<caption>编辑分类</caption>
		<tr>
			<td align="right">分类名称：</td>
			<td><input type="text" class="user" name="cName" id="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['cName']->value;?>
"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" class="submit" value="编辑"></td>
		</tr>
	</table>
</form>


	
<?php }} ?>
