<?php /* Smarty version Smarty-3.1-DEV, created on 2016-05-31 07:48:53
         compiled from "tpl/admin/statisticsList.html" */ ?>
<?php /*%%SmartyHeaderCode:20568570115746e24a1f6f31-69524222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c2cb65d5f3e3aa0c8535a57f9c02a4d55311257' => 
    array (
      0 => 'tpl/admin/statisticsList.html',
      1 => 1464673732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20568570115746e24a1f6f31-69524222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5746e24a4120d2_60216011',
  'variables' => 
  array (
    'pName' => 0,
    'totalCount' => 0,
    'total' => 0,
    'makeMon' => 0,
    'username' => 0,
    'type' => 0,
    'cates' => 0,
    'cate' => 0,
    'result' => 0,
    'i' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746e24a4120d2_60216011')) {function content_5746e24a4120d2_60216011($_smarty_tpl) {?><div id="ceshi"></div>
<div class="top-time" id="top-time">
      <a href="javascript:void(0);" value="all" class="current">全部</a>
      <a href="javascript:void(0);" value="today">今天</a>
      <a href="javascript:void(0);" value="yesterday">昨天</a>
      <a href="javascript:void(0);" value="thisweek">本周</a>
      <a href="javascript:void(0);" value="lastweek">上周</a>
      <a href="javascript:void(0);" value="thismonth">本月</a>
      <a href="javascript:void(0);" value="lastmonth">上月</a>
      <div class="show-time-wrap">
            <h3 class="show-time">全部 </h3>
            <span class="show-hide" id="show-hide">收起统计数据</span>
      </div>
</div>
<div id="box" class="box"> 
      <div class="table-op-top">
            
            <div class="total" id="total">
                  
                  <table width="100%" id="show-total">
                        <tr>
                              <th width="15%" style="height: 70px;">销售笔数</th>
                              <th width="15%">销售额</th>
                              <th width="15%">销售毛利</th>
                              <th width="15%">毛利率</th>
                              <td width="40%"><span class="bold">销售量最高的商品：<span id="pName" style="font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['pName']->value;?>
</span></span></td>
                        </tr>
                        <tr>
                              <td class="bold" id="totalCount"><?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
</td>
                              <td class="bold red" id="totalm"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                              <td class="bold red" id="makeMon"><?php echo ($_smarty_tpl->tpl_vars['makeMon']->value).(".00");?>
</td>
                              <td class="bold red" id="makeRate"><?php echo sprintf('%.4f',($_smarty_tpl->tpl_vars['makeMon']->value/$_smarty_tpl->tpl_vars['total']->value))*(100).("%");?>
</td>
                              <td><span class="bold" >消费额最高的用户：<span id="username"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></span></td>
                        </tr>
                  </table>

            </div>
            <div class="sort-by-box">
                  <div class="sort-by" id="sort-by">
                        <a href="javascript:void(0);" value="product" class="current">按商品</a>
                        <a href="javascript:void(0);" value="user">按用户</a>
                  </div>
                  <div class="table-op">
                        <label>排序：
                              <span class="select-box">
                                    <select id="all-sort">
                                          <option value="">请选择</option>
                                          <option value="count desc">按数量</option>
                                          <option value="money desc">按金额</option>
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
                  </div>
                  
            </div>
      </div>
      <div id="list-box">
            <table class="pd-manage" id="list-table">
                  <tr>
                        <th width="10%">编号</th>
                        <th width="10%">商品编号</th>
                        <th width="30%">商品名称</th>
                        <th width="10%">销售量</th>
                        <th width="10%">销售额</th>
                        <th width="15%">销售毛利（元）</th>
                        <th width="15%">操作</th>
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
                              <td><?php echo $_smarty_tpl->tpl_vars['list']->value['pId'];?>
</td>
                              <td> <?php echo $_smarty_tpl->tpl_vars['list']->value['pName'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['list']->value['count'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['list']->value['money'];?>
</td>
                              <td><?php echo ($_smarty_tpl->tpl_vars['list']->value['iPrice']-$_smarty_tpl->tpl_vars['list']->value['pCost'])*($_smarty_tpl->tpl_vars['list']->value['count']).(".00");?>
</td>
                              <td><input class='pd-list-op' type='button'value='详情'></td>
                        </tr>
                  <?php } ?>
            </table>  
            <table class="pd-manage" id="tab1" style="display:none">
                  <tr>
                        <th width="10%">编号</th>
                        <th width="10%">商品编号</th>
                        <th width="30%">商品名称</th>
                        <th width="10%">销售量</th>
                        <th width="10%">销售额</th>
                        <th width="15%">销售毛利（元）</th>
                        <th width="15%">操作</th>
                  </tr>   
            </table>  
            <table class="pd-manage" id="tab2" style="display:none">
                  <tr>
                        <th width="10%">编号</th>
                        <th width="10%">用户ID</th>
                        <th width="10%">用户名称</th>
                        <th width="10%">消费笔数</th>
                        <th width="15%">消费额</th>
                        <th width="15">每笔消费金额</th>
                        <th width="15%">消费比重</th>
                        <th width="15%">操作</th>
                  </tr>   
            </table> 
      </div>
       
</div>


<div class="page" id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div><?php }} ?>
