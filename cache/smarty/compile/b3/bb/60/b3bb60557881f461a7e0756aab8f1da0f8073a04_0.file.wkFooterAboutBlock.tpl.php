<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:45:21
  from 'C:\xampp2\htdocs\coliving\modules\wkfooteraboutblock\views\templates\hook\wkFooterAboutBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae8e1c56f50_26629927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3bb60557881f461a7e0756aab8f1da0f8073a04' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\wkfooteraboutblock\\views\\templates\\hook\\wkFooterAboutBlock.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae8e1c56f50_26629927 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'About','mod'=>'wkfooteraboutblock'),$_smarty_tpl ) );?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-about-hotel">
			<p><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['WK_HTL_SHORT_DESC']->value,220,'',true )), ENT_QUOTES, 'UTF-8', true);?>
</p>
		</div>
	</section>
</div><?php }
}
