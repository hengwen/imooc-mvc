<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-30 02:57:23
         compiled from "tpl/admin/statisticsTable.html" */ ?>
<?php /*%%SmartyHeaderCode:738366676574b8ff3032806-01066081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14c6db39f2f53b07fec7a3d59cb4fe754bf4de22' => 
    array (
      0 => 'tpl/admin/statisticsTable.html',
      1 => 1464531103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '738366676574b8ff3032806-01066081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'result' => 0,
    'i' => 0,
    'list' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_574b8ff31ddf72_28561655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574b8ff31ddf72_28561655')) {function content_574b8ff31ddf72_28561655($_smarty_tpl) {?><table class="pd-manage">
      <tr>
            <th width="5%">编号</th>
            <th width="10%"><?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>商品编号<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>用户编号<?php } else { ?>商品编号<?php }?></th>
            <th width="30%"><?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>商品名称<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>用户名称<?php } else { ?>商品名称<?php }?></th>
            <th width="10%"><?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>销售量<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>订单量<?php } else { ?>销售量<?php }?></th>
            <th width="10%"><?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>销售额<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>消费额<?php } else { ?>销售额<?php }?></th>
            <?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?>
            <th>销售比重</th>
            <th>销售毛利（元）</th>
            <?php }?>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
            <tr>
                  <td><label><input type="checkbox" name="checkbox" class="pd-list-che"></label><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</td>
                  <td>
                      <?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>
                        <?php echo $_smarty_tpl->tpl_vars['list']->value['pId'];?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>
                        <?php echo $_smarty_tpl->tpl_vars['list']->value['uId'];?>

                      <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['list']->value['pId'];?>

                      <?php }?>
                  </td>
                  <td>
                      <?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>
                        <?php echo $_smarty_tpl->tpl_vars['list']->value['pName'];?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>
                        <?php echo $_smarty_tpl->tpl_vars['list']->value['username'];?>

                      <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['list']->value['pName'];?>

                      <?php }?>               
                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['list']->value['count'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['list']->value['money'];?>
</td>
                  <?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?>
                  <td><?php echo sprintf('%.2f',($_smarty_tpl->tpl_vars['list']->value['money']/$_smarty_tpl->tpl_vars['total']->value*100));?>
%</td>
                  <td><?php echo sprintf('%.2f',($_smarty_tpl->tpl_vars['list']->value['money']*0.2));?>
</td>
                  <?php }?>
                  
            </tr>
      <?php } ?>
</table><?php }} ?>
