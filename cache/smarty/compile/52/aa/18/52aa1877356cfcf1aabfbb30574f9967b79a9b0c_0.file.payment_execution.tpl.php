<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\cheque\views\templates\front\payment_execution.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11ecf1d7_41348480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52aa1877356cfcf1aabfbb30574f9967b79a9b0c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\cheque\\views\\templates\\front\\payment_execution.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11ecf1d7_41348480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check payment','mod'=>'cheque'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order summary','mod'=>'cheque'),$_smarty_tpl ) );?>
</h1>

<?php $_smarty_tpl->_assignInScope('current_step', 'payment');
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['nbProducts']->value)) && $_smarty_tpl->tpl_vars['nbProducts']->value <= 0) {?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.','mod'=>'cheque'),$_smarty_tpl ) );?>
</p>
<?php } else { ?>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
		<div class="box cheque-box">
			<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check payment','mod'=>'cheque'),$_smarty_tpl ) );?>
</h3>
			<p class="cheque-indent">
				<strong class="dark">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have chosen to pay by check.','mod'=>'cheque'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here is a short summary of your order:','mod'=>'cheque'),$_smarty_tpl ) );?>

				</strong>
			</p>
			<p>
				- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The total amount of your order comes to:','mod'=>'cheque'),$_smarty_tpl ) );?>

				<span id="amount" class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl ) );?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value == 1) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','mod'=>'cheque'),$_smarty_tpl ) );?>

				<?php }?>
			</p>
			<p>
				-
				<?php if ((isset($_smarty_tpl->tpl_vars['currencies']->value)) && count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We accept several currencies to receive payments by check.','mod'=>'cheque'),$_smarty_tpl ) );?>

					<br />
					<div class="form-group row">
						<label class="col-xs-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose one of the following:','mod'=>'cheque'),$_smarty_tpl ) );?>
</label>
						<div class="col-xs-4">
							<select id="currency_payment" class="form-control" name="currency_payment">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id_currency'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['currencies']->value)) && $_smarty_tpl->tpl_vars['currency']->value['id_currency'] == $_smarty_tpl->tpl_vars['cust_currency']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					</div>
				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We allow the following currencies to be sent by check:','mod'=>'cheque'),$_smarty_tpl ) );?>
&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['name'];?>
</b>
					<input type="hidden" name="currency_payment" value="<?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['id_currency'];?>
" />
				<?php }?>
			</p>
			<p>
				- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check owner and address information will be displayed on the next page.','mod'=>'cheque'),$_smarty_tpl ) );?>

				<br />
				- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please confirm your order by clicking \'I confirm my order\'','mod'=>'cheque'),$_smarty_tpl ) );?>
.
			</p>
		</div>
		<p class="cart_navigation clearfix" id="cart_navigation">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,"step=3"), ENT_QUOTES, 'UTF-8', true);?>
" class="button-exclusive btn btn-default">
				<i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other payment methods','mod'=>'cheque'),$_smarty_tpl ) );?>

			</a>
						<?php if (!$_smarty_tpl->tpl_vars['restrict_order']->value) {?>
                <button class="btn pull-right button button-medium" type="submit">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I confirm my order','mod'=>'cheque'),$_smarty_tpl ) );?>
&nbsp;<i class="icon-chevron-right right"></i></span>
                </button>
            <?php }?>
		</p>
	</form>
<?php }
}
}
