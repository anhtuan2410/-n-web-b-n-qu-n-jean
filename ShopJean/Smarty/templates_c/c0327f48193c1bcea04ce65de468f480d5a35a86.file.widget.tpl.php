<?php /* Smarty version Smarty-3.1.18, created on 2017-03-25 11:25:56
         compiled from "views\blog\widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3078658d645b4f36ac2-59262603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0327f48193c1bcea04ce65de468f480d5a35a86' => 
    array (
      0 => 'views\\blog\\widget.tpl',
      1 => 1490162032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3078658d645b4f36ac2-59262603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'bai_viets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58d645b505cbb5_28640061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d645b505cbb5_28640061')) {function content_58d645b505cbb5_28640061($_smarty_tpl) {?><aside class="widget sidebar-banner margin-mbl"> <a href="#"><img src="http://vn-live.slatic.net/cms/2016/campaign-12/Tet/12-banner-trend-03.jpg" alt="" /></a> </aside>
<aside class="widget top-rated">
  <h5 class="sidebar-title">Được quan tâm nhiều</h5>
  <div class="sidebar-product"> 
    <!-- Single-product start --> 
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (0) : 0-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <div class="single-product">
      <div class="product-photo"> <a href="post_blog.php?ma_bai_viet=<?php echo $_smarty_tpl->tpl_vars['bai_viets']->value[$_smarty_tpl->tpl_vars['i']->value]->ma_bai_viet;?>
"> <img class="primary-photo" src="<?php echo $_smarty_tpl->tpl_vars['bai_viets']->value[$_smarty_tpl->tpl_vars['i']->value]->hinh;?>
" alt=""/> </a> </div>
      <div class="product-brief">
        <h2><a href="post_blog.php?ma_bai_viet=<?php echo $_smarty_tpl->tpl_vars['bai_viets']->value[$_smarty_tpl->tpl_vars['i']->value]->ma_bai_viet;?>
"><?php echo $_smarty_tpl->tpl_vars['bai_viets']->value[$_smarty_tpl->tpl_vars['i']->value]->tieu_de;?>
</a></h2>
      </div>
    </div>
    <?php }} ?> </div>
</aside>
<aside> <a href="#"><img src="http://www.laprendo.com/data/1/Folder/leftbanner/leftbanner_20160422.jpg" alt="" /></a> </aside>
<?php }} ?>
