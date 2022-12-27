<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:45:23
  from 'C:\xampp2\htdocs\coliving\modules\hotelreservationsystem\views\templates\hook\copyRight.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae8e31fd7a3_76727138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '200dc312d5886f982757d462058e1d6e98ecd171' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\hotelreservationsystem\\views\\templates\\hook\\copyRight.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae8e31fd7a3_76727138 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="copyRightWrapper">
	<p class="copyRight">
		&copy; <?php echo $_smarty_tpl->tpl_vars['WK_HTL_ESTABLISHMENT_YEAR']->value;?>
-<?php echo date('Y');?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value;?>
</a>.&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' All rights reserved.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

	</p>
</div><?php }
}
