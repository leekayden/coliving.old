<?php
/* Smarty version 3.1.39, created on 2022-12-27 13:03:32
  from 'C:\xampp2\htdocs\coliving\modules\blocknavigationmenu\views\templates\hook\customNavigationLinkSetting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaed2406e216_07415067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3d4c56a464e5a8cdca2e8332247010975681a8' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\blocknavigationmenu\\views\\templates\\hook\\customNavigationLinkSetting.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaed2406e216_07415067 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['custom_navigation_link_setting_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-chain"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Navigation Link','mod'=>'blocknavigationmenu'),$_smarty_tpl ) );?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Links Setting','mod'=>'blocknavigationmenu'),$_smarty_tpl ) );?>
" data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create custom links which will display at footer navigation block and navigation menu.','mod'=>'blocknavigationmenu'),$_smarty_tpl ) );?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }
}
