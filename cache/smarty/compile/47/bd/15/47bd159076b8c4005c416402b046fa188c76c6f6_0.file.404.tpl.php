<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10612420_61183776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47bd159076b8c4005c416402b046fa188c76c6f6' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\404.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10612420_61183776 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pagenotfound">
	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This page is not available'),$_smarty_tpl ) );?>
</h1>

	<p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl ) );?>

	</p>

	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl ) );?>
</h3>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
		<fieldset>
			<div>
				<label for="search_query"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our product catalog:'),$_smarty_tpl ) );?>
</label>
				<input id="search_query" name="search_query" type="text" class="form-control grey" />
                <button type="submit" name="Submit" value="OK" class="btn btn-default button button-small"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ok'),$_smarty_tpl ) );?>
</span></button>
			</div>
		</fieldset>
	</form>

	<div class="buttons"><a class="btn btn-default button button-medium" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>
"><span><i class="icon-chevron-left left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home page'),$_smarty_tpl ) );?>
</span></a></div>
</div>
<?php }
}
