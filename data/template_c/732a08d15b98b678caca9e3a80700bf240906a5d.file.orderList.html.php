<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-18 10:25:04
         compiled from "tpl/admin/orderList.html" */ ?>
<?php /*%%SmartyHeaderCode:802771163573c1e2c962530-93208031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '732a08d15b98b678caca9e3a80700bf240906a5d' => 
    array (
      0 => 'tpl/admin/orderList.html',
      1 => 1463559903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '802771163573c1e2c962530-93208031',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_573c1e2cbf3dc1_68552323',
  'variables' => 
  array (
    'result' => 0,
    'list' => 0,
    'proImage' => 0,
    'image' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573c1e2cbf3dc1_68552323')) {function content_573c1e2cbf3dc1_68552323($_smarty_tpl) {?><div class="table-op-top">
	<div class="add">
		<a href="admin.php?controller=admin&method=showProAddForm&tab=1"  >添加</a>
	</div>
	<div class="table-op">
		<label>订单状态：
			<span class="select-box">
				<select id="order-active">
					<option value="">请选择</option>
					<option value="active desc">已完成</option>
					<option value="active asc">未完成</option>
				</select>
			</span>
		</label>
		<label>订单时间：
			<span class="select-box">
				<select id="order-time">
					<option value="">请选择</option>
					<option value="indentTime desc">最新订单</option>
					<option value="indentTime asc">最早订单</option>
				</select>
			</span>
		</label>
		<label>搜索：<input type="text" name="search" class="search" id="order-search"></label>
	</div>
</div>
<table class="pd-manage">
	<tr>
		<th width="5%">订单号</th>
		<th width="10%">用户名称</th>
		<th width="30%">商品名称</th>
		<th width="5%">商品数量</th>
		<th width="10%">总价</th>
		<th width="10%">订单时间</th>
        <th width="10%">订单状态</th>
		<th width="20%">操作</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['pName'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['count'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['list']->value['indentMon'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['list']->value['indentTime'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['list']->value['active']==1) {?> 完成 <?php } else { ?> 未完成 <?php }?></td>
			<td><input type="button" class="pd-list-op" value="修改"  id="edit-btn" data= <?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 tab="1"	> <input type="button" class="pd-list-op" value="删除" data = <?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 tab='1'>
				<div id="showDetail<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" style="display:none;">
        	<table class="table" cellspacing="0" cellpadding="0" width="800">
        		<tr>
        			<td width="20%" align="right">商品名称</td>
        			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['pName'];?>
</td>
        		</tr>
        		<tr>
        			<td width="20%"  align="right">商品类别</td>
        			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['cName'];?>
</td>
        		</tr>
        		<tr>
        			<td width="20%"  align="right">商品货号</td>
        			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['pSn'];?>
</td>
        		</tr>
        		<tr>
        			<td width="20%"  align="right">商品数量</td>
        			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['pNum'];?>
</td>
        		</tr>
        		<tr>
        			<td  width="20%"  align="right">商品价格</td>
        			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['mPrice'];?>
</td>
        		</tr>
        		<tr>
        			<td  width="20%"  align="right">幕课网价格</td>
        			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['iPrice'];?>
</td>
        		</tr>
        		<tr>
        			<td width="20%"  align="right">商品图片</td>
        			<td>
        			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['proImage']->value[$_tmp1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
        					<img width="100" height="100" src= uploads/proImg/<?php echo $_smarty_tpl->tpl_vars['image']->value['albumPath'];?>
 alt="商品图片"/> &nbsp;&nbsp;
        			<?php } ?>
        			</td>
        		</tr>
        		<tr>
        			<td width="20%"  align="right">是否上架</td>
        			<td>
        				<?php if ($_smarty_tpl->tpl_vars['list']->value['isShow']==1) {?> 上架 <?php } else { ?> 下架 <?php }?>
        			</td>
        		</tr>
        		<tr>
        			<td width="20%"  align="right">是否热卖</td>
        			<td>
        				<?php if ($_smarty_tpl->tpl_vars['list']->value['isHot']==1) {?> 热卖 <?php } else { ?> 不热卖 <?php }?>
        			</td>
        		</tr>
        	</table>
        	<span style="display:block;width:80%; ">
        	商品描述: <br/>
        		<?php echo $_smarty_tpl->tpl_vars['list']->value['pDesc'];?>

        	</span>
    		</div>
			</td>
			
		</tr>
		
	<?php } ?>
</table>

<div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div><?php }} ?>
