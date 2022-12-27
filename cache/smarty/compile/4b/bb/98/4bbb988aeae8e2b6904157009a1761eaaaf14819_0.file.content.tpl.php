<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\localization\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11d43351_29091670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bbb988aeae8e2b6904157009a1761eaaaf14819' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11d43351_29091670 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['localization_form']->value))) {
echo $_smarty_tpl->tpl_vars['localization_form']->value;
}
if ((isset($_smarty_tpl->tpl_vars['localization_options']->value))) {
echo $_smarty_tpl->tpl_vars['localization_options']->value;
}
echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
<?php echo '</script'; ?>
><?php }
}
