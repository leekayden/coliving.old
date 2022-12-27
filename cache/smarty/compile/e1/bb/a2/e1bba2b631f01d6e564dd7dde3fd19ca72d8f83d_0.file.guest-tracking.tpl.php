<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\guest-tracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10c7cfd6_05826181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1bba2b631f01d6e564dd7dde3fd19ca72d8f83d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\guest-tracking.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./order-detail.tpl' => 1,
  ),
),false)) {
function content_639e8c10c7cfd6_05826181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Tracking'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Tracking'),$_smarty_tpl ) );?>
</h1>

<?php if ((isset($_smarty_tpl->tpl_vars['order_collection']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_collection']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
		<?php $_smarty_tpl->_assignInScope('order_state', $_smarty_tpl->tpl_vars['order']->value->getCurrentState());?>
		<?php $_smarty_tpl->_assignInScope('invoice', $_smarty_tpl->tpl_vars['order']->value->invoice);?>
		<?php $_smarty_tpl->_assignInScope('order_history', $_smarty_tpl->tpl_vars['order']->value->order_history);?>
		<?php $_smarty_tpl->_assignInScope('carrier', $_smarty_tpl->tpl_vars['order']->value->carrier);?>
		<?php $_smarty_tpl->_assignInScope('address_invoice', $_smarty_tpl->tpl_vars['order']->value->address_invoice);?>
		<?php $_smarty_tpl->_assignInScope('address_delivery', $_smarty_tpl->tpl_vars['order']->value->address_delivery);?>
		<?php $_smarty_tpl->_assignInScope('inv_adr_fields', $_smarty_tpl->tpl_vars['order']->value->inv_adr_fields);?>
		<?php $_smarty_tpl->_assignInScope('dlv_adr_fields', $_smarty_tpl->tpl_vars['order']->value->dlv_adr_fields);?>
		<?php $_smarty_tpl->_assignInScope('invoiceAddressFormatedValues', $_smarty_tpl->tpl_vars['order']->value->invoiceAddressFormatedValues);?>
		<?php $_smarty_tpl->_assignInScope('deliveryAddressFormatedValues', $_smarty_tpl->tpl_vars['order']->value->deliveryAddressFormatedValues);?>
		<?php $_smarty_tpl->_assignInScope('currency', $_smarty_tpl->tpl_vars['order']->value->currency);?>
		<?php $_smarty_tpl->_assignInScope('discounts', $_smarty_tpl->tpl_vars['order']->value->discounts);?>
		<?php $_smarty_tpl->_assignInScope('invoiceState', $_smarty_tpl->tpl_vars['order']->value->invoiceState);?>
		<?php $_smarty_tpl->_assignInScope('deliveryState', $_smarty_tpl->tpl_vars['order']->value->deliveryState);?>
		<?php $_smarty_tpl->_assignInScope('products', $_smarty_tpl->tpl_vars['order']->value->products);?>
		<?php $_smarty_tpl->_assignInScope('customizedDatas', $_smarty_tpl->tpl_vars['order']->value->customizedDatas);?>
		<?php $_smarty_tpl->_assignInScope('HOOK_ORDERDETAILDISPLAYED', $_smarty_tpl->tpl_vars['order']->value->hook_orderdetaildisplayed);?>
		<?php if ((isset($_smarty_tpl->tpl_vars['order']->value->total_old))) {?>
			<?php $_smarty_tpl->_assignInScope('total_old', $_smarty_tpl->tpl_vars['order']->value->total_old);?>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['order']->value->followup))) {?>
			<?php $_smarty_tpl->_assignInScope('followup', $_smarty_tpl->tpl_vars['order']->value->followup);?>
		<?php }?>

		<div id="block-history">
			<div id="block-order-detail" class="std">
				<?php $_smarty_tpl->_subTemplateRender("file:./order-detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			</div>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<h2 id="guestToCustomer" class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For more advantages...'),$_smarty_tpl ) );?>
</h2>

	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['transformSuccess']->value))) {?>
		<p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your guest account has been successfully transformed into a customer account. You can now log in as a registered user. '),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in now.'),$_smarty_tpl ) );?>
</a></p>
	<?php } else { ?>
		<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
#guestToCustomer" class="std">
			<fieldset class="description_box box">

                <p><strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transform your guest account into a customer account and enjoy:'),$_smarty_tpl ) );?>
</strong></p>
				<ul>
					<li> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personalized and secure access'),$_smarty_tpl ) );?>
</li>
					<li> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fast and easy checkout'),$_smarty_tpl ) );?>
</li>
					<li> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Easier refund process'),$_smarty_tpl ) );?>
</li>
				</ul>
                <div class="row">
                	<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                        <div class="text form-group">
                            <label><strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set your password:'),$_smarty_tpl ) );?>
</strong></label>
                            <input type="password" name="password" class="form-control" />
                        </div>
                    </div>
                </div>

				<input type="hidden" name="id_order" value="<?php if ((isset($_smarty_tpl->tpl_vars['order']->value->id))) {
echo $_smarty_tpl->tpl_vars['order']->value->id;
} else {
if ((isset($_GET['id_order']))) {
echo htmlspecialchars($_GET['id_order'], ENT_QUOTES, 'UTF-8', true);
} else {
if ((isset($_POST['id_order']))) {
echo htmlspecialchars($_POST['id_order'], ENT_QUOTES, 'UTF-8', true);
}
}
}?>" />
				<input type="hidden" name="order_reference" value="<?php if ((isset($_GET['order_reference']))) {
echo htmlspecialchars($_GET['order_reference'], ENT_QUOTES, 'UTF-8', true);
} else {
if ((isset($_POST['order_reference']))) {
echo htmlspecialchars($_POST['order_reference'], ENT_QUOTES, 'UTF-8', true);
}
}?>" />
				<input type="hidden" name="email" value="<?php if ((isset($_GET['email']))) {
echo htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8', true);
} else {
if ((isset($_POST['email']))) {
echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8', true);
}
}?>" />

				<p>
                    <button type="submit" name="submitTransformGuestToCustomer" class="button button-medium btn btn-default"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></button>
                </p>
			</fieldset>
		</form>
	<?php }
} else { ?>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['show_login_link']->value)) && $_smarty_tpl->tpl_vars['show_login_link']->value) {?>
		<p><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/userinfo.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information'),$_smarty_tpl ) );?>
" class="icon" /><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to log in to your customer account.'),$_smarty_tpl ) );?>
</a><br /><br /></p>
	<?php }?>
	<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="std" id="guestTracking">
		<fieldset class="description_box box">
			<h2 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To track your order, please enter the following information:'),$_smarty_tpl ) );?>
</h2>
                    <div class="text form-group">
                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference:'),$_smarty_tpl ) );?>
 </label>
                        <input class="form-control" type="text" name="order_reference" value="<?php if ((isset($_GET['id_order']))) {
echo htmlspecialchars($_GET['id_order'], ENT_QUOTES, 'UTF-8', true);
} else {
if ((isset($_POST['id_order']))) {
echo htmlspecialchars($_POST['id_order'], ENT_QUOTES, 'UTF-8', true);
}
}?>" size="8" />
                        <i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For example: QIIXJXNUI'),$_smarty_tpl ) );?>
</i>
                    </div>
                    <div class="text form-group">
                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email:'),$_smarty_tpl ) );?>
</label>
                        <input class="form-control" type="email" name="email" value="<?php if ((isset($_GET['email']))) {
echo htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8', true);
} else {
if ((isset($_POST['email']))) {
echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8', true);
}
}?>" />
                    </div>
			<p>
                <button type="submit" name="submitGuestTracking" class="button btn btn-default button-medium"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></button>
            </p>
		</fieldset>
	</form>
<?php }
}
}
