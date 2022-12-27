<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\associations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12ba39a2_55098295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc9bfe2b050209d35008b7721e447d624d6462d8' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\associations.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/products/multishop/check_fields.tpl' => 1,
    'file:controllers/products/multishop/checkbox.tpl' => 2,
  ),
),false)) {
function content_639e8c12ba39a2_55098295 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value))) {?>
	<div id="product-associations" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="Associations" />
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Associations'),$_smarty_tpl ) );?>
</h3>
		<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab'=>"Associations"), 0, false);
?>
		<div id="no_default_category" class="alert alert-info">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a default category.'),$_smarty_tpl ) );?>

		</div>
		<div class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"category_box",'type'=>"category_box"), 0, false);
?></span></div>
			<label class="control-label col-lg-2" for="category_block">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Associated categories'),$_smarty_tpl ) );?>

			</label>
			<div class="col-lg-9">
				<div id="category_block">
					<?php echo $_smarty_tpl->tpl_vars['category_tree']->value;?>

				</div>
							</div>
		</div>
		<div class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"id_category_default",'type'=>"default"), 0, true);
?></span></div>
			<label class="control-label col-lg-2" for="id_category_default">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The default category is the main category for your room type, and is displayed by default.'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default category'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-5">
				<select id="id_category_default" name="id_category_default">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_cat']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_category'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_category_default']->value == $_smarty_tpl->tpl_vars['cat']->value['id_category']) {?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
		</div>
		<!-- By webkul to hide unneccessary fields -->
		<!-- <div class="form-group">
			<label class="control-label col-lg-3" for="product_autocomplete_input">
				<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can indicate existing products as accessories for this product.'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Start by typing the first letters of the product\'s name, then select the product from the drop-down list.'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to save the product afterwards!'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accessories'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-5">
				<input type="hidden" name="inputAccessories" id="inputAccessories" value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'accessory');
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
echo $_smarty_tpl->tpl_vars['accessory']->value['id_product'];?>
-<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>" />
				<input type="hidden" name="nameAccessories" id="nameAccessories" value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'accessory');
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
¤<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>" />
				<div id="ajax_choose_product">
					<div class="input-group">
						<input type="text" id="product_autocomplete_input" name="product_autocomplete_input" />
						<span class="input-group-addon"><i class="icon-search"></i></span>
					</div>
				</div>

				<div id="divAccessories">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'accessory');
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
?>
				<div class="form-control-static">
					<button type="button" class="btn btn-default delAccessory" name="<?php echo $_smarty_tpl->tpl_vars['accessory']->value['id_product'];?>
">
						<i class="icon-remove text-danger"></i>
					</button>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['name'], ENT_QUOTES, 'UTF-8', true);
if (!empty($_smarty_tpl->tpl_vars['accessory']->value['reference'])) {?>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(ref: %s)','sprintf'=>$_smarty_tpl->tpl_vars['accessory']->value['reference']),$_smarty_tpl ) );
}?>
				</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</div> -->
		<!-- By webkul to hide unneccessary fields -->
		<!-- <div class="form-group">
			<label class="control-label col-lg-3" for="id_manufacturer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manufacturer'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-5">
				<select name="id_manufacturer" id="id_manufacturer">
					<option value="0">- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose (optional)'),$_smarty_tpl ) );?>
 -</option>
					<?php if ($_smarty_tpl->tpl_vars['product']->value->id_manufacturer) {?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_manufacturer;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['product']->value->manufacturer_name;?>
</option>
					<?php }?>
					<option disabled="disabled">-</option>
				</select>
			</div>
			<div class="col-lg-4">
				<a class="btn btn-link bt-icon confirm_leave" style="margin-bottom:0" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminManufacturers'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addmanufacturer">
					<i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new manufacturer'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i>
				</a>
			</div>
		</div> -->
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
