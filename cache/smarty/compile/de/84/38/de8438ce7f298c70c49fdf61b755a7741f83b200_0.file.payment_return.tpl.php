<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\bankwire\views\templates\hook\payment_return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c110f14c7_17462241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de8438ce7f298c70c49fdf61b755a7741f83b200' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\bankwire\\views\\templates\\hook\\payment_return.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c110f14c7_17462241 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['status']->value == 'ok') {?>
<p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s is complete.','sprintf'=>$_smarty_tpl->tpl_vars['shop_name']->value,'mod'=>'cheque'),$_smarty_tpl ) );?>
</p><br /><br />
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please send us a bank wire with','mod'=>'bankwire'),$_smarty_tpl ) );?>

		<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount','mod'=>'bankwire'),$_smarty_tpl ) );?>
 <span class="price"><strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span>
		<br /><br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name of account owner','mod'=>'bankwire'),$_smarty_tpl ) );?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireOwner']->value) {
echo $_smarty_tpl->tpl_vars['bankwireOwner']->value;
} else { ?>___________<?php }?></strong>
		<br /><br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Include these details','mod'=>'bankwire'),$_smarty_tpl ) );?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireDetails']->value) {
echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;
} else { ?>___________<?php }?></strong>
		<br /><br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bank name','mod'=>'bankwire'),$_smarty_tpl ) );?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireAddress']->value) {
echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;
} else { ?>___________<?php }?></strong>
		<?php if (!(isset($_smarty_tpl->tpl_vars['reference']->value))) {?>
			<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to insert your order number #%d in the subject of your bank wire.','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'bankwire'),$_smarty_tpl ) );?>

		<?php } else { ?>
			<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to insert your order reference %s in the subject of your bank wire.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'bankwire'),$_smarty_tpl ) );?>

		<?php }?>
	</p>
<?php } else { ?>
	<p class="warning">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our','mod'=>'bankwire'),$_smarty_tpl ) );?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'expert customer support team','mod'=>'bankwire'),$_smarty_tpl ) );?>
</a>.
	</p>
<?php }
}
}
