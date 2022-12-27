<?php
/* Smarty version 3.1.39, created on 2022-12-27 13:03:31
  from 'C:\xampp2\htdocs\coliving\modules\wktestimonialblock\views\templates\hook\hotelTestimonialSettingLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaed23e9f2e3_97003700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7000f19dea8c359385821ede8346d2342e1c1879' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\wktestimonialblock\\views\\templates\\hook\\hotelTestimonialSettingLink.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaed23e9f2e3_97003700 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['testimonials_setting_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-quote-left"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Testimonial','mod'=>'wktestimonialblock'),$_smarty_tpl ) );?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Testimonials Setting','mod'=>'wktestimonialblock'),$_smarty_tpl ) );?>
" data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure Hotel Testimonials settings using this link.','mod'=>'wktestimonialblock'),$_smarty_tpl ) );?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }
}
