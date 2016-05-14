<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-14 03:44:44
         compiled from "tpl/admin/proList.html" */ ?>
<?php /*%%SmartyHeaderCode:178100771857349b15e40bd6-38857285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d81de27fe13a70a1356f2d667a8d8a23b6576d0' => 
    array (
      0 => 'tpl/admin/proList.html',
      1 => 1463188547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178100771857349b15e40bd6-38857285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57349b15f07262_70225828',
  'variables' => 
  array (
    'result' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57349b15f07262_70225828')) {function content_57349b15f07262_70225828($_smarty_tpl) {?><div class="table-op-top">
						<div class="add">
							<a href="admin.php?controller=admin&method=showProAddForm&tab=1"  >添加</a>
						</div>
					</div>
					<table class="pd-manage">
						<tr>
							<th width="10%">编号</th>
							<th width="30%">商品名称</th>
							<th width="10%">商品分类</th>
							<th width="10%">是否上架</th>
							<th width="10%">上架时间</th>
							<th width="30%">操作</th>
						</tr>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
							<tr>
								<td><label><input type="checkbox" name="checkbox" class="pd-list-che"></label><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['pName'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['cName'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['isShow'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['pubTime'];?>
</td>
								<td><input type="button" class="pd-list-op" value="详情" ><input type="button" class="pd-list-op" value="修改"  id="edit-btn" data= <?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 tab="1"	> <input type="button" class="pd-list-op" value="删除" data = <?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 tab='1'></td>
							</tr>
						<?php } ?>
					</table>
					<div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div><?php }} ?>
