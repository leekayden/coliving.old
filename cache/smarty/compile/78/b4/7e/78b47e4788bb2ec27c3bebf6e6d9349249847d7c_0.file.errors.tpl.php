<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10bd4550_99891380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78b47e4788bb2ec27c3bebf6e6d9349249847d7c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\errors.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10bd4550_99891380 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value) {?>
	<div class="alert alert-danger">
		<p><?php if (count($_smarty_tpl->tpl_vars['errors']->value) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is %d error','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl ) );
}?></p>
		<ol>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error', false, 'k');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
		<?php if ((isset($_SERVER['HTTP_REFERER'])) && !strstr($_smarty_tpl->tpl_vars['request_uri']->value,'authentication') && preg_replace('#^https?://[^/]+/#','/',$_SERVER['HTTP_REFERER']) != $_smarty_tpl->tpl_vars['request_uri']->value) {?>
			<p class="lnk"><a class="alert-link" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'secureReferrer' ][ 0 ], array( htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8', true) ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back'),$_smarty_tpl ) );?>
">&laquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back'),$_smarty_tpl ) );?>
</a></p>
		<?php }?>
	</div>
<?php }
}
}
