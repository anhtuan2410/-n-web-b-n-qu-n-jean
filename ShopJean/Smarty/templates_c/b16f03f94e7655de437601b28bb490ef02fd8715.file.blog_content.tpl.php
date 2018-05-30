<?php /* Smarty version Smarty-3.1.18, created on 2017-03-25 11:25:56
         compiled from "views\blog\blog_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1191758d645b4d2f391-95605913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b16f03f94e7655de437601b28bb490ef02fd8715' => 
    array (
      0 => 'views\\blog\\blog_content.tpl',
      1 => 1490341660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1191758d645b4d2f391-95605913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bai_viets' => 0,
    'bv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58d645b4dcf699_22991812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d645b4dcf699_22991812')) {function content_58d645b4dcf699_22991812($_smarty_tpl) {?><div class="blog-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="row"> <?php  $_smarty_tpl->tpl_vars['bv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bai_viets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bv']->key => $_smarty_tpl->tpl_vars['bv']->value) {
$_smarty_tpl->tpl_vars['bv']->_loop = true;
?>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-blog">
              <div class="blog-photo"> <a href="post_blog.php?ma_bai_viet=<?php echo $_smarty_tpl->tpl_vars['bv']->value->ma_bai_viet;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['bv']->value->hinh;?>
" alt="" /></a>
                <div class="blog-post-date"> <span>13th</span> <span>Feb</span> </div>
              </div>
              <div class="blog-brief">
                <p><?php echo $_smarty_tpl->tpl_vars['bv']->value->tieu_de;?>
</p>
                <div class="like-comment"> <a href="#"><i class="sp-like"></i>120 like</a> <a href="#"><i class="sp-comment"></i>60 comment</a> </div>
                <a class="shop-now" href="post_blog.php?ma_bai_viet=<?php echo $_smarty_tpl->tpl_vars['bv']->value->ma_bai_viet;?>
">Xem them</a> </div>
            </div>
          </div>
          <?php } ?> 
         </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12"> 
        <!-- widget-brand start -->
		<?php echo $_smarty_tpl->getSubTemplate ("views/blog/widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
    </div>
  </div>
</div>
<?php }} ?>
