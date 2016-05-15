<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-15 10:40:45
         compiled from "tpl/admin/proEditForm.html" */ ?>
<?php /*%%SmartyHeaderCode:12483923635738360de58bf5-09933782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '204a6074e6950d4a3ad616ebca71a0737dc7644d' => 
    array (
      0 => 'tpl/admin/proEditForm.html',
      1 => 1463221526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12483923635738360de58bf5-09933782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'pName' => 0,
    'cates' => 0,
    'cate' => 0,
    'cId' => 0,
    'pSn' => 0,
    'pNum' => 0,
    'mPrice' => 0,
    'iPrice' => 0,
    'isShow' => 0,
    'isHot' => 0,
    'pDesc' => 0,
    'pubTime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5738360df3a8f5_64027017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738360df3a8f5_64027017')) {function content_5738360df3a8f5_64027017($_smarty_tpl) {?>
<form class="admin-add pro-add" action="admin.php?controller=admin&method=editPro&tab=1&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" enctype="multipart/form-data" >
	<table  width="400" border="1" bgcolor="#ccc" class="pro-table">
	<caption>编辑商品</caption>
		<tr>
			<th width="20%">商品名称：</th>
			<td><input type="text"  name="pName" id="pName" placeholder="<?php echo $_smarty_tpl->tpl_vars['pName']->value;?>
"></td>
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
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==$_smarty_tpl->tpl_vars['cId']->value) {?> 
							<option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['cate']->value['cName'];?>
</option>
						<?php } else { ?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['cName'];?>
</option>
						<?php }?>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th > 商品货号：</th>
			<td><input type="text"  name="pSn" placeholder="<?php echo $_smarty_tpl->tpl_vars['pSn']->value;?>
"></td>
		</tr>
		<tr>
			<th > 商品库存：</th>
			<td><input type="text" name="pNum" placeholder="<?php echo $_smarty_tpl->tpl_vars['pNum']->value;?>
"></td>
		</tr>
		<tr>
			<th > 市场价格：</th>
			<td><input type="text" name="mPrice" placeholder="<?php echo $_smarty_tpl->tpl_vars['mPrice']->value;?>
"></td>
		</tr>
		<tr>
			<th > 慕课价格：</th>
			<td><input type="text" name="iPrice" placeholder="<?php echo $_smarty_tpl->tpl_vars['iPrice']->value;?>
"></td>
		</tr>
		<tr>
			<th> 是否上架：</th>
			<td><input type="text" name="isShow" placeholder="<?php echo $_smarty_tpl->tpl_vars['isShow']->value;?>
"></td>
		</tr>
		<tr>
			<th> 是否热卖：</th>
			<td><input type="text" name="isHot" placeholder="<?php echo $_smarty_tpl->tpl_vars['isHot']->value;?>
"></td>
		</tr>
		<tr>
			<th > 商品描述：</th>
			<td>
				<textarea name="pDesc" id="editor_id" style="width:100%; height: 150px;" ><?php echo $_smarty_tpl->tpl_vars['pDesc']->value;?>
</textarea>
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
			<td colspan="2" align="center"><input type="submit" value="编辑" class="submit"></td>
		</tr>
	</table>
	<input type="hidden" name="pubTime" value="<?php echo $_smarty_tpl->tpl_vars['pubTime']->value;?>
">
</form>


	
<?php }} ?>
