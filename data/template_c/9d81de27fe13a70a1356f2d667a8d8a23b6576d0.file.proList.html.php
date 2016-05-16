<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-16 12:14:01
         compiled from "tpl/admin/proList.html" */ ?>
<?php /*%%SmartyHeaderCode:23572535957399d69befe69-57677681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d81de27fe13a70a1356f2d667a8d8a23b6576d0' => 
    array (
      0 => 'tpl/admin/proList.html',
      1 => 1463302886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23572535957399d69befe69-57677681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'list' => 0,
    'proImage' => 0,
    'image' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57399d69d16978_89328613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57399d69d16978_89328613')) {function content_57399d69d16978_89328613($_smarty_tpl) {?><div class="table-op-top">
	<div class="add">
		<a href="admin.php?controller=admin&method=showProAddForm&tab=1"  >添加</a>
	</div>
	<div class="table-op">
		<label>商品价格：
			<span class="select-box">
				<select id="pd-price">
					<option value="">请选择</option>
					<option value="iPrice asc">从低到高</option>
					<option value="iPrice desc">从高到低</option>
				</select>
			</span>
		</label>
		<label>上架时间：
			<span class="select-box">
				<select id="pd-pubtime">
					<option value="">请选择</option>
					<option value="pubTime desc">最新发布</option>
					<option value="pubTime asc">最早发布</option>
				</select>
			</span>
		</label>
		<label>搜索：<input type="text" name="search" class="search" id="list-pro-search"></label>
	</div>
</div>
<table class="pd-manage">
	<tr>
		<th width="5%">编号</th>
		<th width="30%">商品名称</th>
		<th width="10%">商品分类</th>
		<th width="10%">商品价格</th>
		<th width="10%">是否上架</th>
		<th width="10%">上架时间</th>
		<th width="25%">操作</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['iPrice'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['list']->value['isShow']==1) {?> 上架 <?php } else { ?> 下架 <?php }?></td>
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value['pubTime'];?>
</td>
			<td><input type="button" class="pd-list-op" value="详情" id="detail-btn" data= <?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 pName= <?php echo $_smarty_tpl->tpl_vars['list']->value['pName'];?>
><input type="button" class="pd-list-op" value="修改"  id="edit-btn" data= <?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
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
