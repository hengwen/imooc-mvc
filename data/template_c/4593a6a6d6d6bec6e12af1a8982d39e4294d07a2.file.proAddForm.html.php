<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-13 16:18:00
         compiled from "tpl/admin/proAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:14120934557346f62353dc2-64679653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4593a6a6d6d6bec6e12af1a8982d39e4294d07a2' => 
    array (
      0 => 'tpl/admin/proAddForm.html',
      1 => 1463149078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14120934557346f62353dc2-64679653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57346f623fbd55_29375946',
  'variables' => 
  array (
    'cates' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57346f623fbd55_29375946')) {function content_57346f623fbd55_29375946($_smarty_tpl) {?>
<form class="admin-add pro-add" action="admin.php?controller=admin&method=addPro&tab=1" method="post" enctype="multipart/form-data" >
	<table  width="400" border="1" bgcolor="#ccc" class="pro-table">
	<caption>添加商品</caption>
		<tr>
			<th width="20%">商品名称：</th>
			<td><input type="text"  name="pName" id="pName"></td>
		</tr>
		<tr>
			<th >商品分类：</th>
			<td>
				<select name="cId" class="select-cate">
					<?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['cName'];?>
</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th > 商品货号：</th>
			<td><input type="text"  name="pSn"></td>
		</tr>
		<tr>
			<th > 商品库存：</th>
			<td><input type="text" name="pNum"></td>
		</tr>
		<tr>
			<th > 市场价格：</th>
			<td><input type="text" name="mPrice"></td>
		</tr>
		<tr>
			<th > 慕课价格：</th>
			<td><input type="text" name="iPrice"></td>
		</tr>
		<tr>
			<th > 商品描述：</th>
			<td>
				<textarea name="pDesc" id="editor_id" style="width:100%; height: 150px;"></textarea>
			</td>
		</tr>
		<tr>
			<th align="right"> 商品图像：</th>
			<td>
				<a href="javascript:void(0)" id="selectFileBtn">添加附件</a>
				<div id="attachList" class="clear"></div>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="发布" class="submit"></td>
		</tr>
	</table>
</form>


	
<?php }} ?>
