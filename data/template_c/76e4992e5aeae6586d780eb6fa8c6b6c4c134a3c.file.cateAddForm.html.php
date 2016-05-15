<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-15 10:30:49
         compiled from "tpl/admin/cateAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:561379042573833b945e013-31855556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e4992e5aeae6586d780eb6fa8c6b6c4c134a3c' => 
    array (
      0 => 'tpl/admin/cateAddForm.html',
      1 => 1463053821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '561379042573833b945e013-31855556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_573833b94abea3_40895522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573833b94abea3_40895522')) {function content_573833b94abea3_40895522($_smarty_tpl) {?>
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
