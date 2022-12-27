<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\shipping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13502d71_55451737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '607aee2f6f2938a564394b83d0bdf3daba4e7e51' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\shipping.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13502d71_55451737 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="product-shipping" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Shipping" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping'),$_smarty_tpl ) );?>
</h3>

	<?php if ((isset($_smarty_tpl->tpl_vars['display_common_field']->value)) && $_smarty_tpl->tpl_vars['display_common_field']->value) {?>
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning, if you change the value of fields with an orange bullet %s, the value will be changed for all other shops for this product','sprintf'=>$_smarty_tpl->tpl_vars['bullet_common_field']->value),$_smarty_tpl ) );?>
</div>
	<?php }?>

	<div class="form-group">
		<label class="control-label col-lg-3" for="width"><?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package width'),$_smarty_tpl ) );?>
</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['ps_dimension_unit']->value;?>
</span>
			<input maxlength="14" id="width" name="width" type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->width;?>
" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="height"><?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package height'),$_smarty_tpl ) );?>
</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['ps_dimension_unit']->value;?>
</span>
			<input maxlength="14" id="height" name="height" type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->height;?>
" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="depth"><?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package depth'),$_smarty_tpl ) );?>
</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['ps_dimension_unit']->value;?>
</span>
			<input maxlength="14" id="depth" name="depth" type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->depth;?>
" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="weight"><?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package weight'),$_smarty_tpl ) );?>
</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['ps_weight_unit']->value;?>
</span>
			<input maxlength="14" id="weight" name="weight" type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->weight;?>
" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="additional_shipping_cost">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If a carrier has a tax, it will be added to the shipping fees.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional shipping fees (for a single item)'),$_smarty_tpl ) );?>

			</span>

		</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
 <?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );?>
)<?php }?></span>
			<input type="text" id="additional_shipping_cost" name="additional_shipping_cost" onchange="this.value = this.value.replace(/,/g, '.');" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['product']->value->additional_shipping_cost);?>
" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="availableCarriers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carriers'),$_smarty_tpl ) );?>
</label>
		<div class="col-lg-9">
			<div class="form-control-static row">
				<div class="col-xs-6">
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available carriers'),$_smarty_tpl ) );?>
</p>
					<select id="availableCarriers" name="availableCarriers" multiple="multiple">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carrier_list']->value, 'carrier');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
							<?php if (!(isset($_smarty_tpl->tpl_vars['carrier']->value['selected'])) || !$_smarty_tpl->tpl_vars['carrier']->value['selected']) {?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['id_reference'];?>
"><?php echo $_smarty_tpl->tpl_vars['carrier']->value['name'];?>
</option>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<a href="#" id="addCarrier" class="btn btn-default btn-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>
 <i class="icon-arrow-right"></i></a>
				</div>
				<div class="col-xs-6">
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected carriers'),$_smarty_tpl ) );?>
</p>
					<select id="selectedCarriers" name="selectedCarriers[]" multiple="multiple">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carrier_list']->value, 'carrier');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
							<?php if ((isset($_smarty_tpl->tpl_vars['carrier']->value['selected'])) && $_smarty_tpl->tpl_vars['carrier']->value['selected']) {?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['id_reference'];?>
"><?php echo $_smarty_tpl->tpl_vars['carrier']->value['name'];?>
</option>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<a href="#" id="removeCarrier" class="btn btn-default btn-block"><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );?>
</a>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group" id="no-selected-carries-alert">
		<div class="col-lg-offset-3">
			<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If no carrier is selected then all the carriers will be available for customers orders.'),$_smarty_tpl ) );?>
</div>
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
