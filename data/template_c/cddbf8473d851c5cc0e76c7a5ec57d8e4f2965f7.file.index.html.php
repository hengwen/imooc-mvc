<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-12 06:32:22
         compiled from "tpl/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:598865318573406752d5a96-83679588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cddbf8473d851c5cc0e76c7a5ec57d8e4f2965f7' => 
    array (
      0 => 'tpl/admin/index.html',
      1 => 1463027540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '598865318573406752d5a96-83679588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_573406753da379_81096015',
  'variables' => 
  array (
    'auth' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573406753da379_81096015')) {function content_573406753da379_81096015($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台首页</title>
	<link rel="stylesheet" href="css/backstage.css">
</head>
<body>
	<div class="bs-top">
		<div class="inner-center">
			<div class="back-logo"><img src="images/logo_b_index.png" alt="慕课网logo"></div>
			<div class="bs-tit">慕课电子商务后台管理系统</div>
		</div>
	</div>
	<div class="inner-center">
	<div class="func-tab">
		<div class="path">
			
		</div>
		<div class="operate">
			<span class="m-name">欢迎您&nbsp;<?php echo $_smarty_tpl->tpl_vars['auth']->value;?>

			</span>
			<a href="../index.php" class="home">首页</a>
			<a href="#" class="advance">前进</a>
			<a href="#" class="back">后退</a>
			<a href="#" class="refresh">刷新</a>
			<a href="admin.php?controller=admin&method=logout" class="out">退出</a>
		</div>
	</div>
	
		<div class="main-box">
			<div class="aside-nav">
				<div class="nav-tit">管理员</div>
				<ul class="nav-list">
					<li class="list-item">
						<h3 onclick="show('menu1','change1')"><span id="change1">+</span>商品管理</h3>
						<dl id="menu1">
							<dd><a href="admin.php?controller=admin&method=showAddForm&tab=1" >添加商品</a></dd>
							<dd><a href="admin.php?controller=admin&method=showList&tab=1&p=1">商品列表</a></dd>	
						</dl>
					</li>
					<li class="list-item">
						<h3 onclick="show('menu2','change2')"><span id="change2">+</span>分类管理</h3>
						<dl id="menu2">
							<dd><a href="admin.php?controller=admin&method=showAddForm&tab=2" >添加分类</a></dd>
							<dd><a href="admin.php?controller=admin&method=showList&tab2&p=1">分类列表</a></dd>	
						</dl>
					</li>
					<li class="list-item">
						<h3 onclick="show('menu3','change3')"><span id="change3">+</span>订单管理</h3>
						<dl id="menu3">
							<dd><a href="#">订单修改</a></dd>
							<dd><a href="#">订单修改</a></dd>
							<dd><a href="#">订单修改</a></dd>
							<dd><a href="#">订单修改</a></dd>
							<dd><a href="#">订单修改</a></dd>
						</dl>
					</li>
					<li class="list-item">
						<h3 onclick="show('menu4','change4')"><span id="change4">+</span>用户管理</h3>
						<dl id="menu4">
							<dd><a href="admin.php?controller=admin&method=showAddForm&tab=3">添加用户</a></dd>
							<dd><a href="admin.php?controller=admin&method=showList&tab=3&p=1">用户列表</a></dd>	
						</dl>
					</li>
					<li class="list-item">
						<h3 onclick="show('menu5','change5')"><span id="change5">+</span>管理员管理</h3>
						<dl id="menu5">
							<dd><a href="admin.php?controller=admin&method=showAddForm&tab=4">添加管理员</a></dd>
							<dd><a href="admin.php?controller=admin&method=showList&tab=4&p=1">管理员列表</a></dd>	
						</dl>
					</li>
				</ul>
			</div>
			<div class="main">
				<div class="nav-tit">后台管理</div>
				<div class="table-op-box" id="table-op-box">
					<?php echo $_smarty_tpl->getSubTemplate ("admin/".((string)$_smarty_tpl->tpl_vars['path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div><!--table-op-box--></div>
			
		</div>
	</div>
	
	<script type="text/javascript">

		function show(menu,change){
		 // console.log("skldf");
			var menu = document.getElementById(menu);
			//console.log(menu);
			var change = document.getElementById(change);
			if(menu.style.display=='block'){
				menu.style.display='none';
			}else{
				menu.style.display='block';
			}
			if(change.innerHTML=='+'){
				change.innerHTML='-';
			}else{
				change.innerHTML='+';
			}
		}
	</script>
</body>
</html><?php }} ?>
