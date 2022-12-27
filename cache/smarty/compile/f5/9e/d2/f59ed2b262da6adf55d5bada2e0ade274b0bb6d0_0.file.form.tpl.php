<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\supply_orders\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13e91818_27245693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f59ed2b262da6adf55d5bada2e0ade274b0bb6d0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\supply_orders\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13e91818_27245693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32686255639e8c13e6f3b1_61392969', "other_fieldsets");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "other_fieldsets"} */
class Block_32686255639e8c13e6f3b1_61392969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_fieldsets' => 
  array (
    0 => 'Block_32686255639e8c13e6f3b1_61392969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['show_product_management_form']->value))) {?>
	<input type="hidden" id="product_ids" name="product_ids" value="<?php echo $_smarty_tpl->tpl_vars['product_ids']->value;?>
" />
	<input type="hidden" id="product_ids_to_delete" name="product_ids_to_delete" value="<?php echo $_smarty_tpl->tpl_vars['product_ids_to_delete']->value;?>
" />
	<input type="hidden" name="updatesupply_order" value="1" />

	<div class="panel">
		<h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage the products you want to order from the supplier.'),$_smarty_tpl ) );?>
</h3>
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To add a product to the order, type the first letters of the product name, then select it from the drop-down list.'),$_smarty_tpl ) );?>
</div>
		<div class="row">
			<div class="col-lg-9">
				<input type="text" size="100" id="cur_product_name" />
			</div>
			<div class="col-lg-2">
				<button type="button" class="btn btn-default" onclick="addProduct();"><i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a product to the supply order'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
		<table id="products_in_supply_order" class="table">
			<thead>
				<tr class="nodrag nodrop">
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EAN13'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPC'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supplier Reference'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</span></th>
					<th class="fixed-width-md"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit Price (tax excl.)'),$_smarty_tpl ) );?>
</span></th>
					<th class="fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</span></th>
					<th class="fixed-width-md"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount rate'),$_smarty_tpl ) );?>
</span></th>
					<th class="fixed-width-md"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax rate'),$_smarty_tpl ) );?>
</span></th>
					<th class="fixed-width-sm">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_list']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<tr>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>

							<input type="hidden" name="input_check_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['checksum'];?>
" />
							<input type="hidden" name="input_reference_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
" />
							<input type="hidden" name="input_id_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_supply_order_detail']))) {
echo $_smarty_tpl->tpl_vars['product']->value['id_supply_order_detail'];
}?>" />
						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['ean13'];?>

							<input type="hidden" name="input_ean13_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['ean13'];?>
" />
						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['upc'];?>

							<input type="hidden" name="input_upc_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['upc'];?>
" />
						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['supplier_reference'];?>

							<input type="hidden" name="input_supplier_reference_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['supplier_reference'];?>
" />
						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

							<input type="hidden" name="input_name_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
						</td>
						<td>
							<div class="input-group fixed-width-md">
							<?php if ((isset($_smarty_tpl->tpl_vars['currency']->value->prefix)) && trim($_smarty_tpl->tpl_vars['currency']->value->prefix) != '') {?><span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>
</span><?php }?><input type="text" name="input_unit_price_te_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['product']->value['unit_price_te']);?>
" /><?php if ((isset($_smarty_tpl->tpl_vars['currency']->value->suffix)) && trim($_smarty_tpl->tpl_vars['currency']->value->suffix) != '') {?><span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span><?php }?>
							</div>
						</td>
						<td>
							<input type="text" name="input_quantity_expected_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['product']->value['quantity_expected']);?>
" class="fixed-width-xs" />
						</td>
						<td>
							<div class="input-group fixed-width-md">
								<input type="text" name="input_discount_rate_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo round($_smarty_tpl->tpl_vars['product']->value['discount_rate'],4);?>
" /><span class="input-group-addon">%</span>
							</div>
						</td>
						<td>
							<div class="input-group fixed-width-md">
								<input type="text" name="input_tax_rate_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo round($_smarty_tpl->tpl_vars['product']->value['tax_rate'],4);?>
" /><span class="input-group-addon">%</span>
							</div>
						</td>
						<td>
							<a href="#" id="deletelink|<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" class="btn btn-default removeProductFromSupplyOrderLink"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );?>

							</a>
						</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<div class="panel-footer">
			<button type="submit" value="1" id="supply_order_form_submit_btn" name="submitAddsupply_order" class="btn btn-default pull-right">
				<i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save order'),$_smarty_tpl ) );?>

			</button>
			<a class="btn btn-default" onclick="window.history.back();">
				<i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

			</a>
			<button type="submit" class="btn btn-default btn btn-default pull-right" name="submitAddsupply_orderAndStay"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save order and stay'),$_smarty_tpl ) );?>
</button>
		</div>
	</div>

	<?php echo '<script'; ?>
 type="text/javascript">
		product_infos = null;
		debug = null;
		if ($('#product_ids').val() == '')
			product_ids = [];
		else
			product_ids = $('#product_ids').val().split('|');

		if ($('#product_ids_to_delete').val() == '')
			product_ids_to_delete = [];
		else
			product_ids_to_delete = $('#product_ids_to_delete').val().split('|');


		function addProduct()
		{
			// check if it's possible to add the product
			if (product_infos == null || $('#cur_product_name').val() == '')
			{
				jAlert('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select at least one product.','js'=>1),$_smarty_tpl ) );?>
');
				return false;
			}

			if (!product_infos.unit_price_te)
				product_infos.unit_price_te = 0;

			// add a new line in the products table
			$('#products_in_supply_order > tbody:last').append(
				'<tr>'+
				'<td>'+product_infos.reference+'<input type="hidden" name="input_check_'+product_infos.id+'" value="'+product_infos.checksum+'" /><input type="hidden" name="input_reference_'+product_infos.id+'" value="'+product_infos.reference+'" /></td>'+
				'<td>'+product_infos.ean13+'<input type="hidden" name="input_ean13_'+product_infos.id+'" value="'+product_infos.ean13+'" /></td>'+
				'<td>'+product_infos.upc+'<input type="hidden" name="input_upc_'+product_infos.id+'" value="'+product_infos.upc+'" /></td>'+
				'<td>'+product_infos.supplier_reference+'<input type="hidden" name="input_supplier_reference_'+product_infos.id+'" value="'+product_infos.supplier_reference+'" /></td>'+
				'<td>'+product_infos.name+'<input type="hidden" name="input_name_displayed_'+product_infos.id+'" value="'+product_infos.name+'" /></td>'+
				'<td><div class="input-group fixed-width-md"><?php if ((isset($_smarty_tpl->tpl_vars['currency']->value->prefix)) && trim($_smarty_tpl->tpl_vars['currency']->value->prefix) != '') {?><span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>
</span><?php }?><input type="text" name="input_unit_price_te_'+product_infos.id+'" value="'+product_infos.unit_price_te+'" /><?php if ((isset($_smarty_tpl->tpl_vars['currency']->value->suffix)) && trim($_smarty_tpl->tpl_vars['currency']->value->suffix) != '') {?><span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span><?php }?></div></td>'+
				'<td><input type="text" name="input_quantity_expected_'+product_infos.id+'" value="0" class="fixed-width-xs" /></td>'+
				'<td><div class="input-group fixed-width-md"><input type="text" name="input_discount_rate_'+product_infos.id+'" value="0" /><span class="input-group-addon">%</span></div></td>'+
				'<td><div class="input-group fixed-width-md"><input type="text" name="input_tax_rate_'+product_infos.id+'" value="0" /><span class="input-group-addon">%</span></div></td>'+
				'<td><a href="#" id="deletelink|'+product_infos.id+'" class="btn btn-default removeProductFromSupplyOrderLink"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Remove"),$_smarty_tpl ) );?>
'+
				'</a></td></tr>'
			);

			// add the current product id to the product_id array - used for not show another time the product in the list
			product_ids.push(product_infos.id);

			// update the product_ids hidden field
			$('#product_ids').val(product_ids.join('|'));

			// clear the cur_product_name field
			$('#cur_product_name').val("");

			// clear the product_infos var
			product_infos = null;
		}

		/* function autocomplete */
		$(function() {
			// add click event on just created delete item link
			$('a.removeProductFromSupplyOrderLink').live('click', function() {

				var id = $(this).attr('id');
				var product_id = id.split('|')[1];


				//find the position of the product id in product_id array
				var position = jQuery.inArray(product_id, product_ids);
				if (position != -1)
				{
					//remove the id from the array
					product_ids.splice(position, 1);

					var input_id = $('input[name~="input_id_'+product_id+'"]');
					if (input_id != 'undefined')
						if (input_id.length > 0)
							product_ids_to_delete.push(product_id);

					// update the product_ids hidden field
					$('#product_ids').val(product_ids.join('|'));
					$('#product_ids_to_delete').val(product_ids_to_delete.join('|'));

					//remove the table row
					$(this).parents('tr:eq(0)').remove();
				}

				return false;
			});

			btn_save = $('span[class~="process-icon-save"]').parent();

			btn_save.click(function() {
				$('#supply_order_form').submit();
			});

			// bind enter key event on search field
			$('#cur_product_name').bind('keypress', function(e) {
				var code = (e.keyCode ? e.keyCode : e.which);
				if(code == 13) { //Enter keycode
					e.stopPropagation();//Stop event propagation
					return false;
				}
			});

			// set autocomplete on search field
			$('#cur_product_name').autocomplete("ajax-tab.php", {
				delay: 100,
				minChars: 3,
				autoFill: true,
				max:100,
				matchContains: true,
				mustMatch:false,
				scroll:false,
				cacheLength:0,
	            dataType: 'json',
	            extraParams: {
	                id_supplier: '<?php echo $_smarty_tpl->tpl_vars['supplier_id']->value;?>
',
	                id_currency: '<?php echo $_smarty_tpl->tpl_vars['currency']->value->id;?>
',
					ajax : '1',
					controller : 'AdminSupplyOrders',
					token : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
',
					action : 'searchProduct'
	            },
	            parse: function(data) {
		            if (data == null || data == 'undefined')
			        	return [];
	            	var res = $.map(data, function(row) {
		            	// filter the data to chaeck if the product is already added to the order
	            		if (jQuery.inArray(row.id, product_ids) == -1)
		    				return {
		    					data: row,
		    					result: row.supplier_reference + ' - ' + row.name,
		    					value: row.id
		    				}
	    			});
	    			return res;
	            },
	    		formatItem: function(item) {
	    			return item.supplier_reference + ' - ' + item.name;
	    		}
	        }).result(function(event, item){
				product_infos = item;
	            if (typeof(ajax_running_timeout) !== 'undefined')
	            	clearTimeout(ajax_running_timeout);
			});
		});
	<?php echo '</script'; ?>
>
	<?php }
}
}
/* {/block "other_fieldsets"} */
}
