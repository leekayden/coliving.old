<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockcontact\blockcontact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11428a07_62149030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee012a13f02798e918c35f9ce39ef3840b14d640' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockcontact\\blockcontact.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11428a07_62149030 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="contact_block" class="block">
	<h4 class="title_block">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl ) );?>

	</h4>
	<div class="block_content clearfix">
		<p>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our support hotline is available 24/7.','mod'=>'blockcontact'),$_smarty_tpl ) );?>

		</p>
		<?php if ($_smarty_tpl->tpl_vars['telnumber']->value != '') {?>
			<p class="tel">
				<span class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl ) );?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>

			</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['email']->value != '') {?>
			<a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl ) );?>

			</a>
		<?php }?>
	</div>
</div><?php }
}
