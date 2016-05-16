<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-16 12:15:27
         compiled from "tpl/admin/imageList.html" */ ?>
<?php /*%%SmartyHeaderCode:144118013657399a6982cd04-57323918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4dd314574e7fb55d755c1eee1ca456dfb9a2ba' => 
    array (
      0 => 'tpl/admin/imageList.html',
      1 => 1463393726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144118013657399a6982cd04-57323918',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57399a69882862_50267345',
  'variables' => 
  array (
    'result' => 0,
    'list' => 0,
    'i' => 0,
    'j' => 0,
    'paths' => 0,
    'path' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57399a69882862_50267345')) {function content_57399a69882862_50267345($_smarty_tpl) {?><div class="table-op-top">
						<div class="add">
							<a href="admin.php?controller=admin&method=showAddForm&tab=6" >添加</a>
						</div>
					</div>
					<table class="pd-manage">
						<tr>
							<th width="5%">商品id</th>
							<th width="30%">商品名称</th>
							<th width="30%">商品图片</th>
							<th width="35%">操作</th>
						</tr>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
							<?php  $_smarty_tpl->tpl_vars['paths'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['paths']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['paths']->key => $_smarty_tpl->tpl_vars['paths']->value) {
$_smarty_tpl->tpl_vars['paths']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['paths']->key;
?>
								<tr>
									<td><label><input type="checkbox" name="checkbox" class="pd-list-che"></label><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['j']->value;?>

									</td>
									<td>
										<?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paths']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
?>
											<img src=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['path']->value['albumPath'];?>
<?php $_tmp1=ob_get_clean();?><?php echo ("uploads/proImg/images50/").($_tmp1);?>
 alt="商品图片">
											
										<?php } ?>
									</td>
									<td>
										<input type="button" class="pd-list-op" value="添加" > 
										<input type="button" class="pd-list-op" value="删除">
										<input type="button" class="pd-list-op" value="文字水印">
										<input type="button" class="pd-list-op" value="图片水印">
									</td>
								</tr>
							<?php } ?>
						<?php } ?>
					</table>
					<div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div><?php }} ?>
