<?php /* Smarty version Smarty-3.1.18, created on 2017-03-25 11:25:58
         compiled from "views\shop\shop_content_nu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:986558d645b61ab764-25416894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '969ad9a70ff01ddca87c33bdc84eb3ca472afad5' => 
    array (
      0 => 'views\\shop\\shop_content_nu.tpl',
      1 => 1490286466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '986558d645b61ab764-25416894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sp_nus' => 0,
    'sp' => 0,
    'list_nu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58d645b6390d80_98079980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d645b6390d80_98079980')) {function content_58d645b6390d80_98079980($_smarty_tpl) {?><div class="shop-content" id="XlGia"> 
  <!-- product-toolbar start -->
  <div class="product-toolbar"> 
    <!-- Shop-menu --> 
    <!-- pagination --> 
  </div>
  <!-- product-toolbar end --> 
  <!-- Shop-product start -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="grid-view">
      <div class="row shop-grid"> <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sp_nus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?> 
        <!-- Single-product start -->
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <div class="single-product">
            <div class="product-photo"> <a href="chi-tiet-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"> <img class="primary-photo" src="images/<?php echo $_smarty_tpl->tpl_vars['sp']->value->hinh;?>
" alt="" /> <img class="secondary-photo" src="images/<?php echo $_smarty_tpl->tpl_vars['sp']->value->hinh;?>
" alt="" /> </a>
              <div class="pro-action">
                <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->don_gia;?>
"/>
                <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"/>
                <!--<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>-->
                <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->don_gia;?>
"/>
                <input type="hidden" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"/>
                <a href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" class="action-btn"><i class="sp-shopping-cart"></i><span>Thêm giỏ hàng</span></a> </div>
            </div>
            <div class="product-brief">
              <h2><a href="chi-tiet-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"><?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
</a></h2>
              <h3>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->don_gia);?>
</h3>
            </div>
          </div>
        </div>
        <!-- Single-product end --> 
        <?php } ?> </div>
    </div>
  </div>
  <!-- Shop-product end --> 
  <!-- product-toolbar start -->
  <div class="product-toolbar btm-border"> 
    <!-- Shop-menu --> 
    <!-- Pagination -->
    <div class="shop-pagination">
     <?php echo $_smarty_tpl->tpl_vars['list_nu']->value;?>

  </div>
  <!-- product-toolbar end --> 
</div>
<?php }} ?>
