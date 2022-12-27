<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\orders\_new_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1291a293_27993459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '227f7445b283ed85d06ea59e14f4df9539ed3bd2' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\orders\\_new_product.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1291a293_27993459 (Smarty_Internal_Template $_smarty_tpl) {
?><tr id="new_product" style="display:none">
	<td style="display:none;" colspan="2" class="text-center">
		<input type="hidden" id="add_product_product_id" name="add_product[product_id]" value="0" />

		<div class="form-group">
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Type:'),$_smarty_tpl ) );?>
</label>
			<div class="input-group">
				<input type="text" id="add_product_product_name" value=""/>
				<div class="input-group-addon">
					<i class="icon-search"></i>
				</div>
			</div>
		</div>
		<!-- <div id="add_product_product_attribute_area" class="form-group" style="display: none;">
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Combinations'),$_smarty_tpl ) );?>
</label>
			<select name="add_product[product_attribute_id]" id="add_product_product_attribute_id"></select>
		</div>

		<div id="add_product_product_warehouse_area" class="form-group" style="display: none;">
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warehouse'),$_smarty_tpl ) );?>
</label>
			<select  id="add_product_warehouse" name="add_product_warehouse"></select>
		</div> -->
	</td>
	<td style="display:none;" class="bookingDuration text-center" colspan="2">
		<center>
			<div class="room_check_in_div">
				<div class="input-group fixed-width-xl">
					<div class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check In'),$_smarty_tpl ) );?>
</div>
					<input type="text" class="form-control add_product_date_from" name="add_product[date_from]" readonly />
					<div class="input-group-addon"><i class="icon-calendar"></i></div>
				</div>
			</div>
			<br/>
			<div class="room_check_out_div">
				<div class="input-group fixed-width-xl">
					<div class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Out'),$_smarty_tpl ) );?>
</div>
					<input type="text" class="form-control add_product_date_to" name="add_product[date_to]" readonly/>
					<div class="input-group-addon"><i class="icon-calendar"></i></div>
				</div>
			</div>
		</center>
	</td>
	<td style="display:none;" class="text-center" colspan="2">
		<center>
			<div class="row">
				<div class="input-group fixed-width-xl">
					<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );?>
</div><?php }?>
					<input type="text" name="add_product[product_price_tax_excl]" id="add_product_product_price_tax_excl" value="" readonly="true" />
					<?php if (!($_smarty_tpl->tpl_vars['currency']->value->format%2)) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );?>
</div><?php }?>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="input-group fixed-width-xl">
					<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.'),$_smarty_tpl ) );?>
</div><?php }?>
					<input type="text" name="add_product[product_price_tax_incl]" id="add_product_product_price_tax_incl" value="" readonly="true" />
					<?php if (!($_smarty_tpl->tpl_vars['currency']->value->format%2)) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.'),$_smarty_tpl ) );?>
</div><?php }?>
				</div>
			</div>
		</center>
	</td>
	<td style="display:none;" class="productQuantity text-center">
		<center>
			<input type="number" class="form-control fixed-width-sm" name="add_product[product_quantity]" id="add_product_product_quantity" value="1" disabled="disabled" min="1"/>
		</center>
	</td>
		<td style="display:none;" id="add_product_product_total"  class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>0,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</td>
	<td style="display:none;" colspan="2"  class="text-center">
		<?php if (sizeof($_smarty_tpl->tpl_vars['invoices_collection']->value)) {?>
		<select class="form-control" name="add_product[invoice]" id="add_product_product_invoice" disabled="disabled">
			<optgroup class="existing" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Existing'),$_smarty_tpl ) );?>
">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices_collection']->value, 'invoice');
$_smarty_tpl->tpl_vars['invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['invoice']->value->getInvoiceNumberFormatted($_smarty_tpl->tpl_vars['current_id_lang']->value);?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</optgroup>
			<optgroup label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New'),$_smarty_tpl ) );?>
">
				<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a new invoice'),$_smarty_tpl ) );?>
</option>
			</optgroup>
		</select>
		<?php }?>
	</td>
	<td style="display:none;"  class="text-center">
		<button type="button" class="btn btn-default" id="cancelAddProduct">
			<i class="icon-remove text-danger"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

		</button>
		<button type="button" class="btn btn-default" id="submitAddProduct" disabled="disabled">
			<i class="icon-ok text-success"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>

		</button>
	</td>
</tr>

<!-- <tr id="new_invoice" style="display:none">
	<td colspan="10">
		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New invoice information'),$_smarty_tpl ) );?>
</h4>
		<div class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<p class="form-control-static"><strong><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</strong></p>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Cost'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="add_invoice[free_shipping]" value="1" />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping'),$_smarty_tpl ) );?>

						</label>
						<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you don\'t select "Free shipping," the normal shipping cost will be applied.'),$_smarty_tpl ) );?>
</p>
					</div>
				</div>
			</div>
		</div>
	</td>
</tr>
 -->
<?php }
}
