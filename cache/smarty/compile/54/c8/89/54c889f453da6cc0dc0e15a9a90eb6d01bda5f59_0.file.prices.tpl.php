<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13448464_01418090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c889f453da6cc0dc0e15a9a90eb6d01bda5f59' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\prices.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/products/multishop/check_fields.tpl' => 1,
    'file:controllers/products/multishop/checkbox.tpl' => 10,
  ),
),false)) {
function content_639e8c13448464_01418090 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var Customer = new Object();
var product_url = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true));?>
';
var ecotax_tax_excl = parseFloat(<?php echo $_smarty_tpl->tpl_vars['ecotax_tax_excl']->value;?>
);
var priceDisplayPrecision = <?php echo intval((defined('_PS_PRICE_DISPLAY_PRECISION_') ? constant('_PS_PRICE_DISPLAY_PRECISION_') : null));?>
;

$(document).ready(function () {
	Customer = {
		"hiddenField": jQuery('#id_customer'),
		"field": jQuery('#customer'),
		"container": jQuery('#customers'),
		"loader": jQuery('#customerLoader'),
		"init": function() {
			jQuery(Customer.field).typeWatch({
				"captureLength": 1,
				"highlight": true,
				"wait": 50,
				"callback": Customer.search
			}).focus(Customer.placeholderIn).blur(Customer.placeholderOut);
		},
		"placeholderIn": function() {
			if (this.value == '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All customers'),$_smarty_tpl ) );?>
') {
				this.value = '';
			}
		},
		"placeholderOut": function() {
			if (this.value == '') {
				this.value = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All customers'),$_smarty_tpl ) );?>
';
			}
		},
		"search": function()
		{
			Customer.showLoader();
			jQuery.ajax({
				"type": "POST",
				"url": "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers'));?>
",
				"async": true,
				"dataType": "json",
				"data": {
					"ajax": "1",
					"token": "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
",
					"tab": "AdminCustomers",
					"action": "searchCustomers",
					"customer_search": Customer.field.val()
				},
				"success": Customer.success
			});
		},
		"success": function(result)
		{
			if(result.found) {
				var html = '<ul class="list-unstyled">';
				jQuery.each(result.customers, function() {
					html += '<li><a class="fancybox" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers');?>
&id_customer='+this.id_customer+'&viewcustomer&liteDisplaying=1">'+this.firstname+' '+this.lastname+'</a>'+(this.birthday ? ' - '+this.birthday:'');
					html += ' - '+this.email;
					html += '<a onclick="Customer.select('+this.id_customer+', \''+this.firstname+' '+this.lastname+'\'); return false;" href="#" class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose'),$_smarty_tpl ) );?>
</a></li>';
				});
				html += '</ul>';
			}
			else
				html = '<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customers found'),$_smarty_tpl ) );?>
</div>';
			Customer.hideLoader();
			Customer.container.html(html);
			jQuery('.fancybox', Customer.container).fancybox();
		},
		"select": function(id_customer, fullname)
		{
			Customer.hiddenField.val(id_customer);
			Customer.field.val(fullname);
			Customer.container.empty();
			return false;
		},
		"showLoader": function() {
			Customer.loader.fadeIn();
		},
		"hideLoader": function() {
			Customer.loader.fadeOut();
		}
	};
	Customer.init();
});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'priceDisplayPrecisionFormat', null);
echo (('%.').((defined('_PS_PRICE_DISPLAY_PRECISION_') ? constant('_PS_PRICE_DISPLAY_PRECISION_') : null))).('f');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<div id="product-prices" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Prices" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room type price'),$_smarty_tpl ) );?>
</h3>
	<div class="alert alert-info" <?php if (!$_smarty_tpl->tpl_vars['country_display_tax_label']->value || $_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>style="display:none;"<?php }?>>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter either the pre-tax retail price, or the retail price with tax. The input field will be automatically calculated.'),$_smarty_tpl ) );?>

	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab'=>"Prices"), 0, false);
?>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"wholesale_price",'type'=>"default"), 0, false);
?></span></div>
		<label class="control-label col-lg-2" for="wholesale_price">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The operating cost is the expense related to the operation of the room type. Do not include the tax.'),$_smarty_tpl ) );?>
"><?php if (!$_smarty_tpl->tpl_vars['country_display_tax_label']->value || $_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Operating cost'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pre-tax operating cost'),$_smarty_tpl ) );
}?></span>
		</label>
		<div class="col-lg-2">
			<div class="input-group">
				<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
				<input maxlength="27" name="wholesale_price" id="wholesale_price" type="text" value="<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['toolsConvertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->wholesale_price),$_smarty_tpl ) );
$_prefixVariable12 = ob_get_clean();
echo sprintf($_smarty_tpl->tpl_vars['priceDisplayPrecisionFormat']->value,$_prefixVariable12);?>
" onchange="this.value = this.value.replace(/,/g, '.');" />
			</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['pack']->value)) && $_smarty_tpl->tpl_vars['pack']->value->isPack($_smarty_tpl->tpl_vars['product']->value->id)) {?><p class="help-block"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['toolsConvertPrice'][0], array( array('price'=>sprintf($_smarty_tpl->tpl_vars['priceDisplayPrecisionFormat']->value,$_smarty_tpl->tpl_vars['pack']->value->noPackWholesalePrice($_smarty_tpl->tpl_vars['product']->value->id))),$_smarty_tpl ) );
$_prefixVariable13 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The sum of wholesale prices of the room types in the pack is %s%s%s','sprintf'=>array($_smarty_tpl->tpl_vars['currency']->value->prefix,$_prefixVariable13,$_smarty_tpl->tpl_vars['currency']->value->suffix)),$_smarty_tpl ) );?>
</p><?php }?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"price",'type'=>"price"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="priceTE">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The pre-tax retail price is the price for which you intend sell this room type to your customers. It should be higher than the pre-tax wholesale price: the difference between the two will be your margin.'),$_smarty_tpl ) );?>
"><?php if (!$_smarty_tpl->tpl_vars['country_display_tax_label']->value || $_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Retail price'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pre-tax retail price'),$_smarty_tpl ) );
}?></span>
		</label>
		<div class="col-lg-2">
			<div class="input-group">
				<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
				<input type="hidden" id="priceTEReal" name="price" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['toolsConvertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->price),$_smarty_tpl ) );?>
"/>
				<input size="11" maxlength="27" id="priceTE" name="price_displayed" type="text" value="<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['toolsConvertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->price),$_smarty_tpl ) );
$_prefixVariable14 = ob_get_clean();
echo sprintf('%.6f',$_prefixVariable14);?>
" onchange="noComma('priceTE'); $('#priceTEReal').val(this.value);" onkeyup="$('#priceType').val('TE'); $('#priceTEReal').val(this.value.replace(/,/g, '.')); if (isArrowKey(event)) return; calcPriceTI();" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"id_tax_rules_group",'type'=>"default"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="id_tax_rules_group">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax rule:'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-8">
			<?php echo '<script'; ?>
 type="text/javascript">
				noTax = <?php if ($_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>true<?php } else { ?>false<?php }?>;
				taxesArray = new Array();
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxesRatesByGroup']->value, 'tax_by_group');
$_smarty_tpl->tpl_vars['tax_by_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax_by_group']->value) {
$_smarty_tpl->tpl_vars['tax_by_group']->do_else = false;
?>
					taxesArray[<?php echo $_smarty_tpl->tpl_vars['tax_by_group']->value['id_tax_rules_group'];?>
] = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['tax_by_group']->value ));?>
;
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				ecotaxTaxRate = <?php echo $_smarty_tpl->tpl_vars['ecotaxTaxRate']->value/100;?>
;
			<?php echo '</script'; ?>
>
			<div class="row">
				<div class="col-lg-6">
					<select onchange="javascript:calcPrice(); " name="id_tax_rules_group" id="id_tax_rules_group" <?php if ($_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>disabled="disabled"<?php }?> >
						<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Tax'),$_smarty_tpl ) );?>
</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tax_rules_groups']->value, 'tax_rules_group');
$_smarty_tpl->tpl_vars['tax_rules_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax_rules_group']->value) {
$_smarty_tpl->tpl_vars['tax_rules_group']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['tax_rules_group']->value['id_tax_rules_group'];?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value->getIdTaxRulesGroup() == $_smarty_tpl->tpl_vars['tax_rules_group']->value['id_tax_rules_group']) {?>selected="selected"<?php }?> >
					<?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['tax_rules_group']->value['name']);?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="col-lg-2">
					<a class="btn btn-link confirm_leave" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminTaxRulesGroup'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addtax_rules_group&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?> disabled="disabled"<?php }?>>
						<i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new tax'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>
	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<div class="alert">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Taxes are currently disabled:'),$_smarty_tpl ) );?>

				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminTaxes'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to open the Taxes configuration page.'),$_smarty_tpl ) );?>
</a>
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getIdTaxRulesGroup();?>
" name="id_tax_rules_group" />
			</div>
		</div>
	</div>
	<?php }?>
	<div class="form-group" <?php if (!$_smarty_tpl->tpl_vars['ps_use_ecotax']->value) {?> style="display:none;"<?php }?>>
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"ecotax",'type'=>"default"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="ecotax">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The ecotax is a local set of taxes intended to "promote ecologically sustainable activities via economic incentives". It is already included in retail price: the higher this ecotax is, the lower your margin will be.'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ecotax (tax incl.)'),$_smarty_tpl ) );?>
</span>
		</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
			<input maxlength="27" id="ecotax" name="ecotax" type="text" value="<?php echo sprintf($_smarty_tpl->tpl_vars['priceDisplayPrecisionFormat']->value,$_smarty_tpl->tpl_vars['product']->value->ecotax);?>
" onkeyup="$('#priceType').val('TI');if (isArrowKey(event))return; calcPriceTE(); this.value = this.value.replace(/,/g, '.'); if (parseInt(this.value) > getE('priceTE').value) this.value = getE('priceTE').value; if (isNaN(this.value)) this.value = 0;" />
		</div>
	</div>
	<div class="form-group" <?php if (!$_smarty_tpl->tpl_vars['country_display_tax_label']->value || $_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>style="display:none;"<?php }?> >
		<label class="control-label col-lg-3" for="priceTI"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Retail price with tax'),$_smarty_tpl ) );?>
</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
			<input id="priceType" name="priceType" type="hidden" value="TE" />
			<input id="priceTI" name="priceTI" type="text" value="" onchange="noComma('priceTI');" maxlength="27" onkeyup="$('#priceType').val('TI');if (isArrowKey(event)) return;  calcPriceTE();" />
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['pack']->value)) && $_smarty_tpl->tpl_vars['pack']->value->isPack($_smarty_tpl->tpl_vars['product']->value->id)) {?><p class="col-lg-9 col-lg-offset-3 help-block"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['toolsConvertPrice'][0], array( array('price'=>sprintf($_smarty_tpl->tpl_vars['priceDisplayPrecisionFormat']->value,$_smarty_tpl->tpl_vars['pack']->value->noPackPrice($_smarty_tpl->tpl_vars['product']->value->id))),$_smarty_tpl ) );
$_prefixVariable15 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The sum of prices of the room types in the pack is %s%s%s','sprintf'=>array($_smarty_tpl->tpl_vars['currency']->value->prefix,$_prefixVariable15,$_smarty_tpl->tpl_vars['currency']->value->suffix)),$_smarty_tpl ) );?>
</p><?php }?>
	</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['product']->value->unity)) && $_smarty_tpl->tpl_vars['product']->value->unity) {?>
	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<div class="alert alert-warning">
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or'),$_smarty_tpl ) );?>

					<?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>
<span id="unit_price_with_tax">0.00</span><?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'per'),$_smarty_tpl ) );?>
 <span id="unity_second"><?php echo $_smarty_tpl->tpl_vars['product']->value->unity;?>
</span><?php if ($_smarty_tpl->tpl_vars['ps_tax']->value && $_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?>
				</span>
			</div>
		</div>
	</div>
	<?php }?>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"on_sale",'type'=>"default"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="on_sale">&nbsp;</label>
		<div class="col-lg-9">
			<div class="checkbox">
				<label class="control-label" for="on_sale" >
					<input type="checkbox" name="on_sale" id="on_sale" <?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>checked="checked"<?php }?> value="1" />
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display the "on sale" icon on the room type page, and in the text found within the room type listing.'),$_smarty_tpl ) );?>

				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<div class="alert alert-warning">
				<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final retail price:'),$_smarty_tpl ) );?>
</strong>
				<span>
					<?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>

					<span id="finalPrice" >0.00</span>
					<?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>

					<span<?php if (!$_smarty_tpl->tpl_vars['ps_tax']->value) {?> style="display:none;"<?php }?>> (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.'),$_smarty_tpl ) );?>
)</span>
				</span>
				<span<?php if (!$_smarty_tpl->tpl_vars['ps_tax']->value) {?> style="display:none;"<?php }?> >
				<?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?>
					/
				<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>

				<span id="finalPriceWithoutTax"></span>
					<?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>

					<?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );?>
)<?php }?>
				</span>
			</div>
		</div>
	</div>

	<!-- by webkul -->
	<?php if ($_smarty_tpl->tpl_vars['WK_ALLOW_ADVANCED_PAYMENT']->value) {?>
		<div class="form-group">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"price",'type'=>"price"), 0, true);
?></span></div>
			<label class="control-label col-sm-2">
				<input type="hidden" name="id_adv_pmt" <?php if ((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['adv_pay_dtl']->value['id'];?>
"<?php }?>>
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If Disabled, Advance payment will not apply on this room type.'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow Advance Payment'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" value="1" id="adv_payment_active_on" name="adv_payment_active" class="adv_payment_active" <?php if ((((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) && $_smarty_tpl->tpl_vars['adv_pay_dtl']->value['active']) || !(isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)))) {?>checked="checked"<?php }?>>
					<label for="adv_payment_active_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</label>
					<input type="radio" value="0" id="adv_payment_active_off" name="adv_payment_active" class="adv_payment_active" <?php if (((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) && !$_smarty_tpl->tpl_vars['adv_pay_dtl']->value['active'])) {?>checked="checked"<?php }?>>
					<label for="adv_payment_active_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>

		<div class="form-group adv_payment_field">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"price",'type'=>"price"), 0, true);
?></span></div>
			<label class="control-label col-sm-2">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If disabled, Advance Payment for the room type will be calculated By Global Advance payment settings.'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply Room Type Advance Payment Setting.'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" value="1" id="cal_from_on" name="cal_from" <?php if (((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) && $_smarty_tpl->tpl_vars['adv_pay_dtl']->value['calculate_from'])) {?>checked="checked"<?php }?>>
					<label for="cal_from_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</label>
					<input type="radio" value="0" id="cal_from_off" name="cal_from" <?php if ((((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) && !$_smarty_tpl->tpl_vars['adv_pay_dtl']->value['calculate_from']) || !(isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)))) {?>checked="checked"<?php }?>>
					<label for="cal_from_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>

		<div class="form-group adv_payment_field">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"price",'type'=>"price"), 0, true);
?></span></div>
			<label class="control-label col-sm-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment type'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<div class="radio">
					<label for="percent_type">
						<input type="radio" name="payment_type" class="payment_type" value="1" <?php if ((((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) && ($_smarty_tpl->tpl_vars['adv_pay_dtl']->value['payment_type'] == 1)) || !(isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) || !$_smarty_tpl->tpl_vars['adv_pay_dtl']->value['payment_type'])) {?>checked="checked"<?php }?>>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Percent (%) '),$_smarty_tpl ) );?>

					</label>
				</div>
				<div class="radio">
					<label for="fixed_type">
						<input type="radio" name="payment_type" class="payment_type" value="2" <?php if ((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) && ($_smarty_tpl->tpl_vars['adv_pay_dtl']->value['payment_type'] == 2)) {?>checked="checked"<?php }?>>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount'),$_smarty_tpl ) );?>

					</label>
				</div>
			</div>
		</div>

		<div class="form-group adv_payment_field">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"price",'type'=>"price"), 0, true);
?></span></div>
			<div class="col-lg-11">

				<div class="row" id="type_percent">
					<label class="control-label col-sm-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value'),$_smarty_tpl ) );?>
</label>
					<div class="col-sm-4 col-lg-3">
						<div class="input-group">
							<span class="input-group-addon">%</span>
							<input type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) && ($_smarty_tpl->tpl_vars['adv_pay_dtl']->value['payment_type'] == 1)) {
echo $_smarty_tpl->tpl_vars['adv_pay_dtl']->value['value'];
}?>" name="adv_pay_percent" />
						</div>
					</div>
				</div>

				<div class="row" id="type_amount">
					<label class="control-label col-sm-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount'),$_smarty_tpl ) );?>
</label>
					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-4 col-lg-3">
								<div class="input-group">
									<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
									<input name="adv_pay_amount" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) && ($_smarty_tpl->tpl_vars['adv_pay_dtl']->value['payment_type'] == 2)) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['toolsConvertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['adv_pay_dtl']->value['value']),$_smarty_tpl ) );
$_prefixVariable16 = ob_get_clean();
echo sprintf('%.6f',$_prefixVariable16);
}?>"/>
								</div>
							</div>
						</div>
						<div class="help-block">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If final price of the room type is less than advance payment amount for the customer then customer will pay the final(lesser) price of the room type.'),$_smarty_tpl ) );?>

						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="form-group adv_payment_field">
			<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"price",'type'=>"price"), 0, true);
?></span></div>
			<label class="control-label col-sm-2">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If Enable, customer will pay : (Advanced payment price + tax) and if Disabled, customer will only pay advanced payment price'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Include tax'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" value="1" id="adv_tax_include_on" name="adv_tax_include" <?php if (((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) && $_smarty_tpl->tpl_vars['adv_pay_dtl']->value['tax_include']) || !(isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value))) {?>checked="checked"<?php }?>>
					<label for="adv_tax_include_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</label>
					<input type="radio" value="0" id="adv_tax_include_off" name="adv_tax_include" <?php if ((isset($_smarty_tpl->tpl_vars['adv_pay_dtl']->value)) && !$_smarty_tpl->tpl_vars['adv_pay_dtl']->value['tax_include']) {?>checked="checked"<?php }?>>
					<label for="adv_tax_include_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
	<?php }?>

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
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature Price Plans'),$_smarty_tpl ) );?>
</h3>
	<div class="alert alert-info">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can set feature price plans by visiting '),$_smarty_tpl ) );?>

		<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminHotelFeaturePricesSettings');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'create feature price plans'),$_smarty_tpl ) );?>
</a>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Id'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Plan Name'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Impact way'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Impact Type'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Impact Value'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date From'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date To'),$_smarty_tpl ) );?>
</th>
					<th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php if ((isset($_smarty_tpl->tpl_vars['productFeaturePrices']->value)) && $_smarty_tpl->tpl_vars['productFeaturePrices']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productFeaturePrices']->value, 'featurePlan');
$_smarty_tpl->tpl_vars['featurePlan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['featurePlan']->value) {
$_smarty_tpl->tpl_vars['featurePlan']->do_else = false;
?>
						<tr>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['featurePlan']->value['id_feature_price'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['featurePlan']->value['feature_price_name'];?>

							</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['featurePlan']->value['impact_type'] == 1) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Percentage'),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fixed Amount'),$_smarty_tpl ) );?>

								<?php }?>
							</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['featurePlan']->value['impact_way'] == 1) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrease'),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increase'),$_smarty_tpl ) );?>

								<?php }?>
							</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['featurePlan']->value['impact_type'] == 1) {?>
									<?php echo round($_smarty_tpl->tpl_vars['featurePlan']->value['impact_value'],2);?>
%
								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['featurePlan']->value['impact_value']),$_smarty_tpl ) );?>

								<?php }?>
							</td>
							<td>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['featurePlan']->value['date_from'],'full'=>0),$_smarty_tpl ) );?>

							</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['featurePlan']->value['date_selection_type'] == 1) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['featurePlan']->value['date_to'],'full'=>0),$_smarty_tpl ) );?>

								<?php } else { ?>
									<span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific date'),$_smarty_tpl ) );?>
</span>
								<?php }?>
							</td>
							<td class="text-center">
								<?php if ($_smarty_tpl->tpl_vars['featurePlan']->value['active'] == 1) {?>
									<i class="icon-check text-success"></i>
								<?php } else { ?>
									<i class="icon-times text-danger"></i>
								<?php }?>
							</td>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php } else { ?>
					<tr>
						<td class="text-center" colspan="6">
							<i class="icon-warning-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No feature price plans.'),$_smarty_tpl ) );?>

						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['specificPriceModificationForm']->value))) {?>
<div class="panel">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific prices'),$_smarty_tpl ) );?>
</h3>
	<div class="alert alert-info">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can set specific prices for clients belonging to different groups, different countries, etc.'),$_smarty_tpl ) );?>

	</div>
	<div class="form-group">
		<div class="col-lg-12">
			<a class="btn btn-default" href="#" id="show_specific_price">
				<i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new specific price'),$_smarty_tpl ) );?>

			</a>
			<a class="btn btn-default" href="#" id="hide_specific_price" style="display:none">
				<i class="icon-remove text-danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel new specific price'),$_smarty_tpl ) );?>

			</a>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		var product_prices = new Array();
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinations']->value, 'combination');
$_smarty_tpl->tpl_vars['combination']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['combination']->value) {
$_smarty_tpl->tpl_vars['combination']->do_else = false;
?>
			product_prices['<?php echo $_smarty_tpl->tpl_vars['combination']->value['id_product_attribute'];?>
'] = '<?php echo addcslashes($_smarty_tpl->tpl_vars['combination']->value['price'],'\'');?>
';
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php echo '</script'; ?>
>
	<div id="add_specific_price" class="well clearfix" style="display: none;">
		<div class="col-lg-12">
			<div class="form-group">
				<label class="control-label col-lg-2" for="<?php if (!$_smarty_tpl->tpl_vars['multi_shop']->value) {?>spm_currency_0<?php } else { ?>sp_id_shop<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<div class="row">
					<?php if (!$_smarty_tpl->tpl_vars['multi_shop']->value) {?>
						<input type="hidden" name="sp_id_shop" value="0" />
					<?php } else { ?>
						<div class="col-lg-3">
							<select name="sp_id_shop" id="sp_id_shop">
								<?php if (!$_smarty_tpl->tpl_vars['admin_one_shop']->value) {?><option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All shops'),$_smarty_tpl ) );?>
</option><?php }?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_shop'];?>
"><?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['shop']->value['name']);?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					<?php }?>
						<div class="col-lg-3">
							<select name="sp_id_currency" id="spm_currency_0" onchange="changeCurrencySpecificPrice(0);">
								<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All currencies'),$_smarty_tpl ) );?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'curr');
$_smarty_tpl->tpl_vars['curr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id_currency'];?>
"><?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['curr']->value['name']);?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="col-lg-3">
							<select name="sp_id_country" id="sp_id_country">
								<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All countries'),$_smarty_tpl ) );?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
"><?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['country']->value['name']);?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="col-lg-3">
							<select name="sp_id_group" id="sp_id_group">
								<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All groups'),$_smarty_tpl ) );?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-2" for="customer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<input type="hidden" name="sp_id_customer" id="id_customer" value="0" />
					<div class="input-group">
						<input type="text" name="customer" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All customers'),$_smarty_tpl ) );?>
" id="customer" autocomplete="off" />
						<span class="input-group-addon"><i id="customerLoader" class="icon-refresh icon-spin" style="display: none;"></i> <i class="icon-search"></i></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<div id="customers"></div>
				</div>
			</div>
			<?php if (count($_smarty_tpl->tpl_vars['combinations']->value) != 0) {?>
			<div class="form-group">
				<label class="control-label col-lg-2" for="sp_id_product_attribute"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Combination:'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<select id="sp_id_product_attribute" name="sp_id_product_attribute">
						<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply to all combinations'),$_smarty_tpl ) );?>
</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinations']->value, 'combination');
$_smarty_tpl->tpl_vars['combination']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['combination']->value) {
$_smarty_tpl->tpl_vars['combination']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['combination']->value['id_product_attribute'];?>
"><?php echo $_smarty_tpl->tpl_vars['combination']->value['attributes'];?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<?php }?>
			<div class="form-group">
				<label class="control-label col-lg-2" for="sp_from"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'from'),$_smarty_tpl ) );?>
</span>
								<input type="text" name="sp_from" class="datepicker" value="" style="text-align: center" id="sp_from" />
								<span class="input-group-addon"><i class="icon-calendar-empty"></i></span>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to'),$_smarty_tpl ) );?>
</span>
								<input type="text" name="sp_to" class="datepicker" value="" style="text-align: center" id="sp_to" />
								<span class="input-group-addon"><i class="icon-calendar-empty"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-2" for="sp_from_quantity"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Starting at'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<div class="input-group">
						<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'unit'),$_smarty_tpl ) );?>
</span>
						<input type="text" name="sp_from_quantity" id="sp_from_quantity" value="1" />
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-2" for="sp_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room type price'),$_smarty_tpl ) );?>

					<?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );?>

					<?php }?>
				</label>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
								<input type="text" disabled="disabled" name="sp_price" id="sp_price" value="<?php echo sprintf($_smarty_tpl->tpl_vars['priceDisplayPrecisionFormat']->value,$_smarty_tpl->tpl_vars['product']->value->price);?>
" onchange="noComma('sp_price');" />
							</div>
							<p class="checkbox">
								<label for="leave_bprice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave base price:'),$_smarty_tpl ) );?>
</label>
								<input type="checkbox" id="leave_bprice" name="leave_bprice"  value="1" checked="checked"  />
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-2" for="sp_reduction"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply a discount of'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-3">
							<input type="text" name="sp_reduction" id="sp_reduction" value="0.00" onchange="noComma('sp_reduction');"/>
						</div>
						<div class="col-lg-6">
							<select name="sp_reduction_type" id="sp_reduction_type">
								<option value="amount" selected="selected"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%'),$_smarty_tpl ) );?>
</option>
							</select>
						</div>
						<div class="col-lg-3">
							<select name="sp_reduction_tax" id="sp_reduction_tax">
								<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded'),$_smarty_tpl ) );?>
</option>
								<option value="1" selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included'),$_smarty_tpl ) );?>
</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		var currencyName = '<?php echo addcslashes(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->name, ENT_QUOTES, 'UTF-8', true),'\'');?>
';
		$(document).ready(function(){
			var adv_payment = $(".adv_payment_active:checked").val();
			if (adv_payment == 1)
				$(".adv_payment_field").show();
			else
				$(".adv_payment_field").hide();

			$(".adv_payment_active").on('change',function()
			{
				var adv_payment = $(".adv_payment_active:checked").val();
				if (adv_payment == 1)
					$(".adv_payment_field").show();
				else if (adv_payment == 0)
					$(".adv_payment_field").hide();
			});

			var payment_type = $(".payment_type:checked").val();
			if (payment_type == 1)
			{
				$("#type_percent").show();
				$("#type_amount").hide();
			}
			else if (payment_type == 2)
			{
				$("#type_percent").hide();
				$("#type_amount").show();
			}

			$(".payment_type").on('change',function()
			{
				var payment_type = $(".payment_type:checked").val();
				if (payment_type == 1)
				{
					$("#type_percent").show();
					$("#type_amount").hide();
				}
				else if (payment_type == 2)
				{
					$("#type_percent").hide();
					$("#type_amount").show();
				}
			});

			product_prices['0'] = $('#sp_current_ht_price').html();
			$('#id_product_attribute').change(function() {
				$('#sp_current_ht_price').html(product_prices[$('#id_product_attribute option:selected').val()]);
			});
			$('#leave_bprice').click(function() {
				if (this.checked)
					$('#sp_price').attr('disabled', 'disabled');
				else
					$('#sp_price').removeAttr('disabled');
			});
			$('.datepicker').datetimepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd',
				// Define a custom regional settings in order to use PrestaShop translation tools
				currentText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Now','js'=>1),$_smarty_tpl ) );?>
',
				closeText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Done','js'=>1),$_smarty_tpl ) );?>
',
				ampm: false,
				amNames: ['AM', 'A'],
				pmNames: ['PM', 'P'],
				timeFormat: 'hh:mm:ss tt',
				timeSuffix: '',
				timeOnlyTitle: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Time','js'=>1),$_smarty_tpl ) );?>
',
				timeText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time','js'=>1),$_smarty_tpl ) );?>
',
				hourText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hour','js'=>1),$_smarty_tpl ) );?>
',
				minuteText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minute','js'=>1),$_smarty_tpl ) );?>
'
			});
			$('#sp_reduction_type').on('change', function() {
				if (this.value == 'percentage')
					$('#sp_reduction_tax').hide();
				else
					$('#sp_reduction_tax').show();
			});
		});
	<?php echo '</script'; ?>
>
	<div class="table-responsive">
	<table id="specific_prices_list" class="table table-bordered">
		<thead>
			<tr>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rule'),$_smarty_tpl ) );?>
</th>
								<?php if ($_smarty_tpl->tpl_vars['multi_shop']->value) {?><th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop'),$_smarty_tpl ) );?>
</th><?php }?>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer'),$_smarty_tpl ) );?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fixed price (tax excl.)'),$_smarty_tpl ) );?>
</th>
				<?php } else { ?>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fixed price'),$_smarty_tpl ) );?>
</th>
				<?php }?>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Impact'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Period'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From (quantity)'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action'),$_smarty_tpl ) );?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php echo $_smarty_tpl->tpl_vars['specificPriceModificationForm']->value;?>

				<?php echo '<script'; ?>
 type="text/javascript">
					$(document).ready(function() {
						delete_price_rule = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Do you really want to remove this price rule?"),$_smarty_tpl ) );?>
';
						calcPriceTI();
						//unitPriceWithTax('unit');
					});
				<?php echo '</script'; ?>
>
			<?php }
}
}
