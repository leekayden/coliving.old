<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\suppliers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1356ea96_91977757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd43a7d8fca187607b48dc4bfcfe060da2d28b27' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\suppliers.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1356ea96_91977757 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" name="supplier_loaded" value="1">
<?php if ((isset($_smarty_tpl->tpl_vars['product']->value->id))) {?>
<div id="product-suppliers" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Suppliers" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers of the current product'),$_smarty_tpl ) );?>
</h3>
	<div class="alert alert-info">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This interface allows you to specify the suppliers of the current product and eventually its combinations.'),$_smarty_tpl ) );?>
<br />
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It is also possible to specify supplier references according to previously associated suppliers.'),$_smarty_tpl ) );?>
<br />
		<br />
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When using the advanced stock management tool (see Preferences/Products), the values you define (prices, references) will be used in supply orders.'),$_smarty_tpl ) );?>

	</div>
	<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose the suppliers associated with this product. Please select a default supplier, as well.'),$_smarty_tpl ) );?>
</label>
	<table class="table">
		<thead>
			<tr>
				<th class="fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supplier Name'),$_smarty_tpl ) );?>
</span></th>
				<th class="fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default'),$_smarty_tpl ) );?>
</span></th>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers']->value, 'supplier');
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
?>
			<tr>
				<td><input type="checkbox" class="supplierCheckBox" name="check_supplier_<?php echo $_smarty_tpl->tpl_vars['supplier']->value['id_supplier'];?>
" <?php if ($_smarty_tpl->tpl_vars['supplier']->value['is_selected'] == true) {?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['id_supplier'];?>
" /></td>
				<td><?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
</td>
				<td><input type="radio" id="default_supplier_<?php echo $_smarty_tpl->tpl_vars['supplier']->value['id_supplier'];?>
" name="default_supplier" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['id_supplier'];?>
" <?php if ($_smarty_tpl->tpl_vars['supplier']->value['is_selected'] == false) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['supplier']->value['is_default'] == true) {?>checked="checked"<?php }?> /></td>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
	<a class="btn btn-link bt-icon confirm_leave" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminSuppliers'), ENT_QUOTES, 'UTF-8', true);?>
&addsupplier">
		<i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a new supplier'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i>
	</a>
	<div class="panel-footer">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
	</div>
</div>
<div class="panel">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supplier reference(s)'),$_smarty_tpl ) );?>
</h3>
	<div class="alert alert-info">
		<?php if (count($_smarty_tpl->tpl_vars['associated_suppliers']->value) == 0) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must specify the suppliers associated with this product. You must also select the default product supplier before setting references.'),$_smarty_tpl ) );?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can specify product reference(s) for each associated supplier.'),$_smarty_tpl ) );?>

		<?php }?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click "Save and Stay" after changing selected suppliers to display the associated product references.'),$_smarty_tpl ) );?>

	</div>
	<div class="panel-group" id="accordion-supplier">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['associated_suppliers']->value, 'supplier', false, NULL, 'data', array (
));
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
?>
		<div class="panel">
			<div class="panel-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-supplier" href="#supplier-<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
"><?php if ((isset($_smarty_tpl->tpl_vars['supplier']->value->name))) {
echo $_smarty_tpl->tpl_vars['supplier']->value->name;
}?></a>
			</div>
			<div id="supplier-<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
">
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product name'),$_smarty_tpl ) );?>
</span></th>
								<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supplier reference'),$_smarty_tpl ) );?>
</span></th>
								<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price tax excluded'),$_smarty_tpl ) );?>
</span></th>
								<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price currency'),$_smarty_tpl ) );?>
</span></th>
							</tr>
						</thead>
						<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value, 'attribute', false, 'index');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('reference', '');?>
							<?php $_smarty_tpl->_assignInScope('price_te', '');?>
							<?php $_smarty_tpl->_assignInScope('id_currency', $_smarty_tpl->tpl_vars['id_default_currency']->value);?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['associated_suppliers_collection']->value, 'asc');
$_smarty_tpl->tpl_vars['asc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['asc']->value) {
$_smarty_tpl->tpl_vars['asc']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['asc']->value->id_product == $_smarty_tpl->tpl_vars['attribute']->value['id_product'] && $_smarty_tpl->tpl_vars['asc']->value->id_product_attribute == $_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute'] && $_smarty_tpl->tpl_vars['asc']->value->id_supplier == $_smarty_tpl->tpl_vars['supplier']->value->id_supplier) {?>
									<?php $_smarty_tpl->_assignInScope('reference', $_smarty_tpl->tpl_vars['asc']->value->product_supplier_reference);?>
									<?php $_smarty_tpl->_assignInScope('price_te', Tools::ps_round($_smarty_tpl->tpl_vars['asc']->value->product_supplier_price_te,2));?>
									<?php if ($_smarty_tpl->tpl_vars['asc']->value->id_currency) {?>
										<?php $_smarty_tpl->_assignInScope('id_currency', $_smarty_tpl->tpl_vars['asc']->value->id_currency);?>
									<?php }?>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<tr <?php if ((1 & $_smarty_tpl->tpl_vars['index']->value)) {?>class="alt_row"<?php }?>>
								<td><?php echo $_smarty_tpl->tpl_vars['product_designation']->value[$_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute']];?>
</td>
								<td>
									<input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reference']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="supplier_reference_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id_supplier;?>
" />
								</td>
								<td>
									<input type="text" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['price_te']->value);?>
" name="product_price_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id_supplier;?>
" />
								</td>
								<td>
									<select name="product_price_currency_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id_supplier;?>
">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id_currency'];?>
"
												<?php if ($_smarty_tpl->tpl_vars['currency']->value['id_currency'] == $_smarty_tpl->tpl_vars['id_currency']->value) {?>selected="selected"<?php }?>
											><?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<div class="panel-footer">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
	</div>
</div>
<?php }
}
}
