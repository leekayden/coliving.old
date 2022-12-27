<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\orders\_discount_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c128a5e32_34731224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dbecb5c6581476e6ab733672d2bda97c4674ddd' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\orders\\_discount_form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c128a5e32_34731224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-horizontal well">
	<div class="form-group">
		<label class="control-label col-lg-3">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-9">
			<input class="form-control" type="text" name="discount_name" value="" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-9">
			<select class="form-control" name="discount_type" id="discount_type">
				<option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Percent'),$_smarty_tpl ) );?>
</option>
				<option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount'),$_smarty_tpl ) );?>
</option>
				<!-- By webkul no need of free shipping voucher -->
			</select>
		</div>
	</div>

	<div id="discount_value_field" class="form-group">
		<label class="control-label col-lg-3">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-9">
			<div class="input-group">
				<div class="input-group-addon">
					<span id="discount_currency_sign" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
					<span id="discount_percent_symbol">%</span>
				</div>
				<input class="form-control" type="text" name="discount_value"/>
			</div>
			<p class="text-muted" id="discount_value_help" style="display: none;">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This value must include taxes.'),$_smarty_tpl ) );?>

			</p>
		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['order']->value->hasInvoice()) {?>
	<div class="form-group">
		<label class="control-label col-lg-3">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-9">
			<select name="discount_invoice">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices_collection']->value, 'invoice');
$_smarty_tpl->tpl_vars['invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" selected="selected">
					<?php echo $_smarty_tpl->tpl_vars['invoice']->value->getInvoiceNumberFormatted($_smarty_tpl->tpl_vars['current_id_lang']->value);?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['invoice']->value->total_paid_tax_incl,'currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency),$_smarty_tpl ) );?>

				</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<p class="checkbox">
				<label class="control-label" for="discount_all_invoices">
					<input type="checkbox" name="discount_all_invoices" id="discount_all_invoices" value="1" />
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply on all invoices'),$_smarty_tpl ) );?>

				</label>
			</p>
			<p class="help-block">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you chooses to create this discount for all invoices, only one discount will be created per order invoice.'),$_smarty_tpl ) );?>

			</p>
		</div>
	</div>
	<?php }?>

	<div class="row">
		<div class="col-lg-9 col-lg-offset-3">
			<button class="btn btn-default" type="button" id="cancel_add_voucher">
				<i class="icon-remove text-danger"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

			</button>
			<button class="btn btn-default" type="submit" name="submitNewVoucher">
				<i class="icon-ok text-success"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>

			</button>
		</div>
	</div>
</div>
<?php }
}
