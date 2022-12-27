<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\warehouses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1363edd7_41281148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73b8e6a943699df5d97744ca0374e47f03b1552f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\warehouses.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1363edd7_41281148 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" name="warehouse_loaded" value="1">
<?php if ((isset($_smarty_tpl->tpl_vars['product']->value->id))) {?>
<div id="product-warehouses" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Warehouses" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product location in warehouses'),$_smarty_tpl ) );?>
</h3>
	<div class="row">
		<div class="alert alert-info" style="display:block; position:'auto';">
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This interface allows you to specify the warehouse in which the product is stocked.'),$_smarty_tpl ) );?>
</p>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also specify product/product combinations as it relates to warehouse location. '),$_smarty_tpl ) );?>
</p>
		</div>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose the warehouses associated with this product.'),$_smarty_tpl ) );?>
</p>
	</div>
	<div class="row">
		<a class="btn btn-link confirm_leave" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminWarehouses'), ENT_QUOTES, 'UTF-8', true);?>
&addwarehouse"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a new warehouse'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i></a>
	</div>
	<div class="row">
		<div class="panel-group" id="warehouse-accordion">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warehouses']->value, 'warehouse', false, NULL, 'data', array (
));
$_smarty_tpl->tpl_vars['warehouse']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warehouse']->value) {
$_smarty_tpl->tpl_vars['warehouse']->do_else = false;
?>
			    <div class="panel panel-default">
					<div class="panel-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#warehouse-accordion" href="#warehouse-<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id_warehouse'];?>
"><?php echo $_smarty_tpl->tpl_vars['warehouse']->value['name'];?>
</a>
					</div>
					<div id="warehouse-<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id_warehouse'];?>
">
							<table class="table">
								<thead>
									<tr>
										<th class="fixed-width-xs" align="center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stored'),$_smarty_tpl ) );?>
</span></th>
										<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product'),$_smarty_tpl ) );?>
</span></th>
										<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Location (optional)'),$_smarty_tpl ) );?>
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
									<?php $_smarty_tpl->_assignInScope('location', '');?>
									<?php $_smarty_tpl->_assignInScope('selected', '');?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['associated_warehouses']->value, 'aw');
$_smarty_tpl->tpl_vars['aw']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aw']->value) {
$_smarty_tpl->tpl_vars['aw']->do_else = false;
?>
										<?php if ($_smarty_tpl->tpl_vars['aw']->value->id_product == $_smarty_tpl->tpl_vars['attribute']->value['id_product'] && $_smarty_tpl->tpl_vars['aw']->value->id_product_attribute == $_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute'] && $_smarty_tpl->tpl_vars['aw']->value->id_warehouse == $_smarty_tpl->tpl_vars['warehouse']->value['id_warehouse']) {?>
											<?php $_smarty_tpl->_assignInScope('location', $_smarty_tpl->tpl_vars['aw']->value->location);?>
											<?php $_smarty_tpl->_assignInScope('selected', true);?>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<tr <?php if ((1 & $_smarty_tpl->tpl_vars['index']->value)) {?>class="alt_row"<?php }?>>
										<td class="fixed-width-xs" align="center"><input type="checkbox"
											name="check_warehouse_<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id_warehouse'];?>
_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute'];?>
"
											<?php if ($_smarty_tpl->tpl_vars['selected']->value == true) {?>checked="checked"<?php }?>
											value="1" />
										</td>
										<td><?php echo $_smarty_tpl->tpl_vars['product_designation']->value[$_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute']];?>
</td>
										<td><input type="text"
											name="location_warehouse_<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id_warehouse'];?>
_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute'];?>
"
											value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value, ENT_QUOTES, 'UTF-8', true);?>
"
											size="20" />
										</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</table>
							<?php if (count($_smarty_tpl->tpl_vars['attributes']->value) > 1) {?>
							<button type="button" class="btn btn-default check_all_warehouse" value="check_warehouse_<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id_warehouse'];?>
"><i class="icon-check-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mark / Unmark all product combinations as stored in this warehouse'),$_smarty_tpl ) );?>
</button>
							<!--<tr>
								<td><input type="checkbox" class="check_all_warehouse" value="check_warehouse_<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id_warehouse'];?>
" /></td>
								<td colspan="2"><i></i></td>
							</tr>-->
							<?php }?>
						</div>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
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
