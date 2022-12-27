<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:55:13
  from 'C:\xampp2\htdocs\coliving\modules\hotelreservationsystem\views\templates\admin\_partials\htl-form-fields-flag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaeb31845776_87091680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76d3acb5c07112a40df9e07f4513a9ec89a1b98' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\hotelreservationsystem\\views\\templates\\admin\\_partials\\htl-form-fields-flag.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaeb31845776_87091680 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<img class="all_lang_icon" data-lang-id="<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ps_img_dir']->value;
echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
.jpg">
<?php }
}
}
