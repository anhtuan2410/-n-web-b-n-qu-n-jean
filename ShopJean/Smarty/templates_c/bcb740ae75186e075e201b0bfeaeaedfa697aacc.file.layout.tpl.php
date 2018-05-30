<?php /* Smarty version Smarty-3.1.18, created on 2017-03-25 11:26:08
         compiled from "views\checkout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70058d645c0b6b4f0-84721592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb740ae75186e075e201b0bfeaeaedfa697aacc' => 
    array (
      0 => 'views\\checkout\\layout.tpl',
      1 => 1489986244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70058d645c0b6b4f0-84721592',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58d645c0bb2e16_87584927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d645c0bb2e16_87584927')) {function content_58d645c0bb2e16_87584927($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/banner_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/checkout_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
