<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-16 08:23:18
         compiled from "tpl/show/top.html" */ ?>
<?php /*%%SmartyHeaderCode:132513106357385ffded67e6-70631564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a44e853963d97fcd8880ce93867bb55fa5f40659' => 
    array (
      0 => 'tpl/show/top.html',
      1 => 1463379796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132513106357385ffded67e6-70631564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57385ffdeec8e8_61460392',
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57385ffdeec8e8_61460392')) {function content_57385ffdeec8e8_61460392($_smarty_tpl) {?><div class="top">
	<div class="inner-center">
		<div class="top-left">
			<a href="#">收藏慕课</a>
		</div>
		<div class="top-right">
			欢迎来到慕课！<a><?php if ($_smarty_tpl->tpl_vars['auth']->value!='') {?> <?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
</a>&nbsp;<a href="admin.php?controller=index&method=logout">退出</a><?php } else { ?> <a href="admin.php?controller=index&method=login">[登入]</a><a href="admin.php?controller=index&method=registerForm">[免费注册]</a><?php }?>
		</div>
	</div>
</div><!--top结束--><?php }} ?>
