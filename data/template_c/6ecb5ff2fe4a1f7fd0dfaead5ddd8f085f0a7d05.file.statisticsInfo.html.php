<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-30 03:06:53
         compiled from "tpl/admin/statisticsInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:811752252574af4c112c974-47690149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ecb5ff2fe4a1f7fd0dfaead5ddd8f085f0a7d05' => 
    array (
      0 => 'tpl/admin/statisticsInfo.html',
      1 => 1464570360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '811752252574af4c112c974-47690149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_574af4c132ad95_80526042',
  'variables' => 
  array (
    'totalCount' => 0,
    'total' => 0,
    'username' => 0,
    'type' => 0,
    'cates' => 0,
    'cate' => 0,
    'result' => 0,
    'i' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574af4c132ad95_80526042')) {function content_574af4c132ad95_80526042($_smarty_tpl) {?><div class="table-op-top">
      <div class="total" id="total">
            <table width="100%" id="show-total">
                  <tr>
                        <th>销售笔数</th>
                        <th>销售额</th>
                        <th>销售毛利</th>
                        <th>毛利率</th>
                        <?php if ($_smarty_tpl->tpl_vars['totalCount']->value!=null) {?>
                              <td width="30%"><span class="bold">销售额最高的商品：ipad</span></td>
                        <?php } else { ?>
                              <td width="30%"><span class="bold">销售额最高的商品：</span></td>
                        <?php }?>
                  </tr>
                  <tr>
                        <?php if ($_smarty_tpl->tpl_vars['totalCount']->value!=null) {?>
                              <td class="bold"><?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
</td>
                              <td class="bold red"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                              <td class="bold red"><?php echo $_smarty_tpl->tpl_vars['total']->value*0.2;?>
</td>
                              <td class="bold red"><?php echo sprintf('%.2f',0.2);?>
</td>
                              <td><span class="bold">购买额最高的用户：<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></td>
                        <?php } else { ?>
                              <td class="bold"></td>
                              <td class="bold red"></td>
                              <td class="bold red"></td>
                              <td class="bold red"></td>
                              <td><span class="bold">购买额最高的用户：</span></td>
                        <?php }?>
                  </tr>
            </table>
      </div>
      <div class="table-op">
            <div class="sort-by" id="sort-by">
                  <a href="javascript:void(0);" value="product" class="current">按商品</a>
                  <a href="javascript:void(0);" value="user">按用户</a>
            </div>
            <div class="sort-select">
                  <label>排序：
                        <span class="select-box">
                              <select id="all-sort">
                                    <option value="">请选择</option>
                                    <option value="">按数量</option>
                                    <option value="user">按金额</option>
                              </select>
                        </span>
                  </label>
                  <label>按商品分类：
                        <span class="select-box">
                              <select id="all-cate">
                                    <option value="">请选择</option>
                                    <?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>
                                          <?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
                                                 <option value=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['cate']->value['cName'];?>
</option>
                                          <?php } ?>
                                    <?php }?>
                              </select>
                        </span>
                  </label>
                  <label>搜索：<input type="text" name="search" class="search" id="all-search"></label>
            </div>
            
      </div>
</div>
<div id="list-box">
      <table class="pd-manage">
            <tr>
                  <th width="5%">编号</th>
                  <th width="10%">商品编号</th>
                  <th width="30%">商品名称</th>
                  <th width="10%">销售量</th>
                  <th width="10%">销售额</th>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['result']->value!=null) {?>
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
                                    <?php echo $_smarty_tpl->tpl_vars['list']->value['pId'];?>

                              </td>
                              <td>
                                    <?php echo $_smarty_tpl->tpl_vars['list']->value['pName'];?>

                              </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['list']->value['count'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['list']->value['money'];?>
</td>
                        </tr>
                  <?php } ?>
            <?php } else { ?>
                   <tr>
                        <td><label><input type="checkbox" name="checkbox" class="pd-list-che"></label></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                  </tr>
            <?php }?>
      </table>       
</div><?php }} ?>
