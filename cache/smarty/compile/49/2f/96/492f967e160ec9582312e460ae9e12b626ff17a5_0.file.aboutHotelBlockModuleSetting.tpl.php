<?php
/* Smarty version 3.1.39, created on 2022-12-27 13:03:31
  from 'C:\xampp2\htdocs\coliving\modules\wkabouthotelblock\views\templates\hook\aboutHotelBlockModuleSetting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaed23d4ac32_11070161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '492f967e160ec9582312e460ae9e12b626ff17a5' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\wkabouthotelblock\\views\\templates\\hook\\aboutHotelBlockModuleSetting.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaed23d4ac32_11070161 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAboutHotelBlockSetting'), ENT_QUOTES, 'UTF-8', true);?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-file-text"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Interior Block','mod'=>'wkabouthotelblock'),$_smarty_tpl ) );?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'About Hotel Setting','mod'=>'wkabouthotelblock'),$_smarty_tpl ) );?>
" data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure Hotel Interior block. You can display hotel interior images using this block. This block will be displayed in home page','mod'=>'wkabouthotelblock'),$_smarty_tpl ) );?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }
}
