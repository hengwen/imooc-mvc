<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-16 12:13:56
         compiled from "tpl/admin/adminList.html" */ ?>
<?php /*%%SmartyHeaderCode:162881420357399d644d2057-73618174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '073418e4b8a4c8ef4a310c4b34f28f712de71b16' => 
    array (
      0 => 'tpl/admin/adminList.html',
      1 => 1463041527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162881420357399d644d2057-73618174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57399d645d1be1_02212970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57399d645d1be1_02212970')) {function content_57399d645d1be1_02212970($_smarty_tpl) {?><div class="table-op-top">
	<div class="add">
		<a href="admin.php?controller=admin&method=showAddForm&tab=4" >添加</a>
	</div>
</div>
<table class="pd-manage">
	<tr>
		<th>编号</th>
		<th>管理员名称</th>
		<th>管理员邮箱</th>
		<th>操作</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
		<tr>
			<td><label><input type="checkbox" name="checkbox" class="pd-list-che"></label><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['username'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['email'];?>
</td>
			<td><input type="button" class="pd-list-op" value="修改" data=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 tab="4"  id="edit-btn" 	> <input type="button" class="pd-list-op" value="删除" data=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 tab="4" ></td>
		</tr>
	<?php } ?>
</table>
<div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
<?php }} ?>
