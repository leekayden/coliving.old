<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockwishlist\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11bbd6d9_34465858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cddcd244c763332f8c4c1bee5d83db09cbec10f6' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockwishlist\\my-account.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11bbd6d9_34465858 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
		<i class="icon-heart"></i>
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }
}
