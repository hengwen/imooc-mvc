<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-29 15:50:16
         compiled from "tpl/admin/cateAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:388613166574af398e6dfd1-86518056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e4992e5aeae6586d780eb6fa8c6b6c4c134a3c' => 
    array (
      0 => 'tpl/admin/cateAddForm.html',
      1 => 1463408246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '388613166574af398e6dfd1-86518056',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_574af398ef7ff8_32893041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574af398ef7ff8_32893041')) {function content_574af398ef7ff8_32893041($_smarty_tpl) {?>
<form class="admin-add" action="admin.php?controller=admin&method=doAdd&tab=2" method="post" >
	<table  width="400" border="1" bgcolor="#ccc">
	<caption>添加分类</caption>
		<tr>
			<td align="right">分类名称：</td>
			<td><input type="text" class="user" name="cName" id="username"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="添加" class="submit"></td>
		</tr>
	</table>
</form>


	
<?php }} ?>
