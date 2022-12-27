<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\combinations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12cff255_10600474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9d9e857915362d5edefe6a8076557ce80885ad9' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\combinations.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/products/multishop/check_fields.tpl' => 1,
    'file:controllers/products/multishop/checkbox.tpl' => 8,
  ),
),false)) {
function content_639e8c12cff255_10600474 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value->id)) && !$_smarty_tpl->tpl_vars['product']->value->is_virtual) {?>
<div id="product-combinations" class="panel product-tab">
	<?php echo '<script'; ?>
 type="text/javascript">
		var msg_combination_1 = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose an attribute.'),$_smarty_tpl ) );?>
';
		var msg_combination_2 = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose a value.'),$_smarty_tpl ) );?>
';
		var msg_combination_3 = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can only add one combination per attribute type.'),$_smarty_tpl ) );?>
';
		var msg_new_combination = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New combination'),$_smarty_tpl ) );?>
';
		var msg_cancel_combination = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel combination'),$_smarty_tpl ) );?>
';
		var attrs = new Array();
		var modifyattributegroup = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify this attribute combination.','js'=>1),$_smarty_tpl ) );?>
";
		attrs[0] = new Array(0, "---");
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributeJs']->value, 'group', false, 'idgrp');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idgrp']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
			attrs[<?php echo $_smarty_tpl->tpl_vars['idgrp']->value;?>
] = new Array(0
			, '---'
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value, 'attrname', false, 'idattr');
$_smarty_tpl->tpl_vars['attrname']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idattr']->value => $_smarty_tpl->tpl_vars['attrname']->value) {
$_smarty_tpl->tpl_vars['attrname']->do_else = false;
?>
				, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( strval($_smarty_tpl->tpl_vars['idattr']->value) ));?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( trim($_smarty_tpl->tpl_vars['attrname']->value) ));?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			);
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		$(document).ready(function(){
			populate_attrs();
			$(".datepicker").datepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd'
			});
		});
	<?php echo '</script'; ?>
>
	<input type="hidden" name="submitted_tabs[]" value="Combinations" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add or modify combinations for this product'),$_smarty_tpl ) );?>
</h3>
	<div class="alert alert-info">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also use the [1]Product Combinations Generator[2/][/1] in order to automatically create a set of combinations.','tags'=>array("<a class='btn btn-link bt-icon confirm_leave' href='index.php?tab=AdminAttributeGenerator&amp;id_product=".((string)$_smarty_tpl->tpl_vars['product']->value->id)."&amp;attributegenerator&amp;token=".((string)$_smarty_tpl->tpl_vars['token_generator']->value)."'>",'<i class="icon-external-link-sign">')),$_smarty_tpl ) );?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['combination_exists']->value) {?>
	<div class="alert alert-info" style="display:block">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some combinations already exist. If you want to generate a set of new combinations, the quantities for the existing combinations will be lost.'),$_smarty_tpl ) );?>
<br/>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can add a single combination by clicking the "New combination" button.'),$_smarty_tpl ) );?>

	</div>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value)) && $_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value) {?>
		<br />
		<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab'=>"Combinations"), 0, false);
?>
	<?php }?>
	<div id="add_new_combination" class="panel" style="display: none;">
		<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add or modify combinations for this product'),$_smarty_tpl ) );?>
</div>
		<div class="form-group">
			<label class="control-label col-lg-3" for="attribute_group"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-5">
				<select name="attribute_group" id="attribute_group" onchange="populate_attrs();">
				<?php if ((isset($_smarty_tpl->tpl_vars['attributes_groups']->value))) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes_groups']->value, 'attribute_group', false, 'k');
$_smarty_tpl->tpl_vars['attribute_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['attribute_group']->value) {
$_smarty_tpl->tpl_vars['attribute_group']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute_group']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;&nbsp;</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				</select>
			</div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3" for="attribute"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<div class="form-group">
					<div class="col-lg-8">
						<select name="attribute" id="attribute">
							<option value="0">-</option>
						</select>
					</div>
					<div class="col-lg-4">
						<button type="button" class="btn btn-default btn-block" onclick="add_attr();"><i class="icon-plus-sign-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>
</button>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-8">
						<select id="product_att_list" name="attribute_combination_list[]" multiple="multiple" ></select>
					</div>
					<div class="col-lg-4">
						<button type="button" class="btn btn-default btn-block" onclick="del_attr()"><i class="icon-minus-sign-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
</button>
					</div>
				</div>
			</div>
		</div>
		<hr/>
		<div class="form-group">
			<label class="control-label col-lg-3" for="attribute_reference">
				<span class="label-tooltip" data-toggle="tooltip"
					title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special characters allowed:'),$_smarty_tpl ) );?>
 .-_#">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference code'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-5">
				<input type="text" id="attribute_reference" name="attribute_reference" value="" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-lg-3" for="attribute_ean13">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EAN-13 or JAN barcode'),$_smarty_tpl ) );?>

			</label>
			<div class="col-lg-3">
				<input maxlength="13" type="text" id="attribute_ean13" name="attribute_ean13" value="" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-lg-3" for="attribute_upc">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPC barcode'),$_smarty_tpl ) );?>

			</label>
			<div class="col-lg-3">
				<input maxlength="12" type="text" id="attribute_upc" name="attribute_upc" value="" />
			</div>
		</div>
		<hr/>
		<div class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"attribute_wholesale_price",'type'=>"default"), 0, false);
?></span></div>
			<label class="control-label col-lg-2" for="attribute_wholesale_price">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set to zero if the price does not change.'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wholesale price'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-9">
				<div class="input-group col-lg-2">
					<span class="input-group-addon">
						<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 != 0) {
echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
						<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 == 0) {
echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
					</span>
					<input type="text" name="attribute_wholesale_price" id="attribute_wholesale_price" value="0" onKeyUp="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
				</div>
				<span style="display:none;" id="attribute_wholesale_price_full" class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Overrides the wholesale price from the "Prices" tab.'),$_smarty_tpl ) );?>
</span>
			</div>

		</div>
		<div class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"attribute_price_impact",'type'=>"attribute_price_impact"), 0, true);
?></span></div>
			<label class="control-label col-lg-2" for="attribute_price_impact">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Impact on price'),$_smarty_tpl ) );?>

			</label>
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-4">
						<select name="attribute_price_impact" id="attribute_price_impact" onchange="check_impact(); calcImpactPriceTI();">
							<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None'),$_smarty_tpl ) );?>
</option>
							<option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increase'),$_smarty_tpl ) );?>
</option>
							<option value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrease'),$_smarty_tpl ) );?>
</option>
						</select>
					</div>
					<div id="span_impact" class="col-lg-8">
						<div class="form-group">
							<label class="control-label col-lg-1" for="attribute_price">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'of'),$_smarty_tpl ) );?>

							</label>
							<div class="input-group col-lg-5">
								<div class="input-group-addon">
									<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 != 0) {
echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
									<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 == 0) {?> <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
									<?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );?>

									<?php }?>
								</div>
								<input type="hidden"  id="attribute_priceTEReal" name="attribute_price" value="0.00" />

								<input type="text" id="attribute_price" value="0.00" onkeyup="$('#attribute_priceTEReal').val(this.value.replace(/,/g, '.')); if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.'); calcImpactPriceTI();"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-1" for="attribute_priceTI">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or'),$_smarty_tpl ) );?>

							</label>
							<div class="input-group col-lg-5">
								<div class="input-group-addon" <?php if ($_smarty_tpl->tpl_vars['tax_exclude_option']->value) {?>style="display:none"<?php }?>>
									<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 != 0) {
echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
									<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 == 0) {?> <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );?>

								</div>
								<input type="text" name="attribute_priceTI" id="attribute_priceTI" value="0.00" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.'); calcImpactPriceTE();"/>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="alert">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The final product price will be set to'),$_smarty_tpl ) );?>

									<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 != 0) {
echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
									<span id="attribute_new_total_price">0.00</span>
									<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 == 0) {
echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"attribute_weight_impact",'type'=>"attribute_weight_impact"), 0, true);
?></span></div>
			<label class="control-label col-lg-2" for="attribute_weight_impact">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Impact on weight'),$_smarty_tpl ) );?>

			</label>
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-4">
						<select name="attribute_weight_impact" id="attribute_weight_impact" onchange="check_weight_impact();">
							<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None'),$_smarty_tpl ) );?>
</option>
							<option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increase'),$_smarty_tpl ) );?>
</option>
							<option value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduction'),$_smarty_tpl ) );?>
</option>
						</select>
					</div>
					<div id="span_weight_impact" class="col-lg-8">
						<div class="row">
							<label class="control-label col-lg-1" for="attribute_weight">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'of'),$_smarty_tpl ) );?>

							</label>
							<div class="input-group col-lg-5">
								<div class="input-group-addon">
									<?php echo $_smarty_tpl->tpl_vars['ps_weight_unit']->value;?>

								</div>
								<input type="text" name="attribute_weight" id="attribute_weight" value="0.00" onKeyUp="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="tr_unit_impact" class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"attribute_unit_impact",'type'=>"attribute_unit_impact"), 0, true);
?></span></div>
			<label class="control-label col-lg-2" for="attribute_unit_impact">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Impact on unit price'),$_smarty_tpl ) );?>

			</label>
			<div class="col-lg-3">
				<select name="attribute_unit_impact" id="attribute_unit_impact" onchange="check_unit_impact();">
					<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None'),$_smarty_tpl ) );?>
</option>
					<option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increase'),$_smarty_tpl ) );?>
</option>
					<option value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduction'),$_smarty_tpl ) );?>
</option>
				</select>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<label class="control-label col-lg-1" for="attribute_unity">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'of'),$_smarty_tpl ) );?>

					</label>
					<div class="input-group col-lg-5">
						<div class="input-group-addon">
							<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 != 0) {
echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
							<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 == 0) {
echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
							/ <span id="unity_third"><?php echo $_smarty_tpl->tpl_vars['field_value_unity']->value;?>
</span>
						</div>
						<input type="text" name="attribute_unity" id="attribute_unity" value="0.00" onKeyUp="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
					</div>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['ps_use_ecotax']->value) {?>
		<div class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"attribute_ecotax",'type'=>"default"), 0, true);
?></span></div>
			<label class="control-label col-lg-2" for="attribute_ecotax">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Overrides the ecotax from the "Prices" tab.'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ecotax (tax excl.)'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="input-group col-lg-2">
				<div class="input-group-addon">
					<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 != 0) {
echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
					<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2 == 0) {?> <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
				</div>
				<input type="text" name="attribute_ecotax" id="attribute_ecotax" value="0.00" onKeyUp="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
			</div>
		</div>
		<?php }?>
		<div class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"attribute_minimal_quantity",'type'=>"default"), 0, true);
?></span></div>
			<label class="control-label col-lg-2" for="attribute_minimal_quantity">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum quantity to buy this product (set to 1 to disable this feature).'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minimum quantity'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-9">
				<div class="input-group col-lg-2">
					<div class="input-group-addon">&times;</div>
					<input maxlength="6" name="attribute_minimal_quantity" id="attribute_minimal_quantity" type="text" value="<?php echo $_smarty_tpl->tpl_vars['minimal_quantity']->value;?>
" />
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"available_date_attribute",'type'=>"default"), 0, true);
?></span></div>
			<label class="control-label col-lg-2" for="available_date_attribute">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If this product is out of stock, you can indicate when the product will be available again.'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-9">
				<div class="input-group col-lg-3">
					<input class="datepicker" id="available_date_attribute" name="available_date_attribute" value="<?php echo $_smarty_tpl->tpl_vars['available_date']->value;?>
" type="text" />
					<div class="input-group-addon">
						<i class="icon-calendar-empty"></i>
					</div>
				</div>
			</div>
		</div>
		<hr/>
		<div class="form-group">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<?php if (count($_smarty_tpl->tpl_vars['images']->value)) {?>
				<ul id="id_image_attr" class="list-inline">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, 'k');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
					<li>
						<input type="checkbox" name="id_image_attr[]" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" id="id_image_attr_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" />
						<label for="id_image_attr_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
">
							<img class="img-thumbnail" src="<?php echo (defined('_THEME_PROD_DIR_') ? constant('_THEME_PROD_DIR_') : null);
echo $_smarty_tpl->tpl_vars['image']->value['obj']->getExistingImgPath();?>
-<?php echo $_smarty_tpl->tpl_vars['imageType']->value;?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" />
						</label>
					</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				<?php } else { ?>
					<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must upload an image before you can select one for your combination.'),$_smarty_tpl ) );?>
</div>
				<?php }?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"attribute_default",'type'=>"attribute_default"), 0, true);
?></span></div>
			<label class="control-label col-lg-2" for="attribute_default">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default'),$_smarty_tpl ) );?>

			</label>
			<div class="col-lg-9">
				<p class="checkbox">
				<label for="attribute_default">
					<input type="checkbox" name="attribute_default" id="attribute_default" value="1" />
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Make this combination the default combination for this product.'),$_smarty_tpl ) );?>

				</label>
				</p>
			</div>
		</div>
		<div class="panel-footer">
			<span id="ResetSpan">
				<button type="reset" name="ResetBtn" id="ResetBtn" onclick="$('#desc-product-newCombination').click();" class="btn btn-default">
					<i class="icon-undo"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel modification'),$_smarty_tpl ) );?>

				</button>
			</span>
		</div>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	<div class="panel-footer">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
		<a href="#" id="desc-product-newCombination" class="btn btn-default pull-right"><i class="process-icon-new"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"New combination"),$_smarty_tpl ) );?>
</span></a>
	</div>
</div>
<?php }
}
}
