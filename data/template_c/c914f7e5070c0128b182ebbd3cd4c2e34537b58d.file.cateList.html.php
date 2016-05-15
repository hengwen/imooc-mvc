<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-15 10:33:07
         compiled from "tpl/admin/cateList.html" */ ?>
<?php /*%%SmartyHeaderCode:165121181157383443c7f8f0-88124612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c914f7e5070c0128b182ebbd3cd4c2e34537b58d' => 
    array (
      0 => 'tpl/admin/cateList.html',
      1 => 1463278216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165121181157383443c7f8f0-88124612',
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
  'unifunc' => 'content_57383443dfa897_23468150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57383443dfa897_23468150')) {function content_57383443dfa897_23468150($_smarty_tpl) {?><div class="table-op-top">
						<div class="add">
							<a href="admin.php?controller=admin&method=showAddForm&tab=2"  >添加</a>
						</div>
					</div>
					<table class="pd-manage">
						<tr>
							<th>编号</th>
							<th>分类名称</th>
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
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['cName'];?>
</td>
								<td><input type="button" class="pd-list-op" value="修改"  id="edit-btn" data= <?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 tab="2"	> <input type="button" class="pd-list-op" value="删除分类" data = <?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 tab="2"></td>
							</tr>
						<?php } ?>
					</table>
					<div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div><?php }} ?>
