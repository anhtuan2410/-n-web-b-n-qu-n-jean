<?php /* Smarty version Smarty-3.1.18, created on 2017-03-25 10:59:47
         compiled from "Smarty\templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1836458d63f934123f0-63450752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d56455e1c870e35aed51a78bc894ced5b4eace' => 
    array (
      0 => 'Smarty\\templates\\content.tpl',
      1 => 1489073252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1836458d63f934123f0-63450752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58d63f9342da06_06487481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d63f9342da06_06487481')) {function content_58d63f9342da06_06487481($_smarty_tpl) {?><section class="page-content"> 
<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</section>
<?php }} ?>
