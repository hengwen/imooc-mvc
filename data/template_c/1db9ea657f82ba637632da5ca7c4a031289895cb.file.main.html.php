<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-15 10:30:33
         compiled from "tpl/admin/main.html" */ ?>
<?php /*%%SmartyHeaderCode:1889549874573833a9b8c828-19264112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1db9ea657f82ba637632da5ca7c4a031289895cb' => 
    array (
      0 => 'tpl/admin/main.html',
      1 => 1463027405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1889549874573833a9b8c828-19264112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'php_os' => 0,
    'apache_version' => 0,
    'php_version' => 0,
    'php_sapi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_573833a9bc3d12_42430069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573833a9bc3d12_42430069')) {function content_573833a9bc3d12_42430069($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/backstage.css">
</head>
<body>
	<table class="pd-manage" >
						<caption>系统信息</caption>
						<tr>
							<th width="30%">操作系统</th>
							<td ><?php echo $_smarty_tpl->tpl_vars['php_os']->value;?>
</td>
						</tr>
						<tr>
							<th>Apache版本</th>
							<td><?php echo $_smarty_tpl->tpl_vars['apache_version']->value;?>
</td>
						</tr>
						<tr>
							<th>PHP版本</th>
							<td><?php echo $_smarty_tpl->tpl_vars['php_version']->value;?>
</td>
						</tr>
						<tr>
							<th>运行方式</th>
							<td><?php echo $_smarty_tpl->tpl_vars['php_sapi']->value;?>
</td>
						</tr>
					</table>
					<table class="pd-manage">
						<caption>软件信息</caption>
						<tr>
							<th width="30%">系统名称</th>
							<td>仿慕课网电子商城</td>
						</tr>
						<tr>
							<th>开发团队</th>
							<td>jason@team</td>
						</tr>
						<tr>
							<th>github账号</th>
							<td><a href="https://hengwen.github.com">https://hengwen.github.com</a></td>
						</tr>
						<tr>
							<th>个人邮箱</th>
							<td>hengweno@163.com</td>
						</tr>
					</table>
</body>
</html><?php }} ?>
