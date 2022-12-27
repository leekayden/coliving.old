<?php
/* Smarty version 3.1.39, created on 2022-12-27 13:03:31
  from 'C:\xampp2\htdocs\coliving\modules\wkfooterpaymentblock\views\templates\hook\footerPaymentSettingLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaed23f21808_08546071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fdf27d4a3a70f6d93f8a7bb328727dd029f8210' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\wkfooterpaymentblock\\views\\templates\\hook\\footerPaymentSettingLink.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaed23f21808_08546071 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['footerPaymentBlockLink']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-money"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer Payment Block','mod'=>'wkfooterpaymentblock'),$_smarty_tpl ) );?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer Payment Block Setting','mod'=>'wkfooterpaymentblock'),$_smarty_tpl ) );?>
" data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Using this setting, you can configure payment block view in the footer of page in front end.','mod'=>'wkfooterpaymentblock'),$_smarty_tpl ) );?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }
}
