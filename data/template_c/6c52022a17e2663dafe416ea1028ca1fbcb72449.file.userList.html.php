<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-16 09:15:08
         compiled from "tpl/admin/userList.html" */ ?>
<?php /*%%SmartyHeaderCode:12018462125739737c8e0634-72374350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c52022a17e2663dafe416ea1028ca1fbcb72449' => 
    array (
      0 => 'tpl/admin/userList.html',
      1 => 1463053131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12018462125739737c8e0634-72374350',
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
  'unifunc' => 'content_5739737cb12ac6_81064800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5739737cb12ac6_81064800')) {function content_5739737cb12ac6_81064800($_smarty_tpl) {?><div class="table-op-top">
						<div class="add">
							<a href="admin.php?controller=admin&method=showAddForm&tab=3" >添加</a>
						</div>
					</div>
					<table class="pd-manage">
						<tr>
							<th>编号</th>
							<th>用户名称</th>
							<th>用户邮箱</th>
							<th>用户性别</th>
							<th>用户头像</th>
							<th>注册时间</th>
							<th>是否激活</th>
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
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['sex'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['face'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['regTime'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['list']->value['activeFlag'];?>
</td>
								<td><input type="button" class="pd-list-op" value="修改"  id="edit-btn" data= <?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 tab="3"	> <input type="button" class="pd-list-op" value="删除" data = <?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 tab="3"></td>
							</tr>
						<?php } ?>
					</table>
					<div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div><?php }} ?>
