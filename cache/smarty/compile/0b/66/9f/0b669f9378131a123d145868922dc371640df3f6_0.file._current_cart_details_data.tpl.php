<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\orders\_current_cart_details_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c128168d2_65725716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b669f9378131a123d145868922dc371640df3f6' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\orders\\_current_cart_details_data.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c128168d2_65725716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="panel form-horizontal" id="customer_cart_details">
	<div class="panel-heading">
		<i class="icon-shopping-cart"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Details'),$_smarty_tpl ) );?>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<table class="table" id="customer_cart_details_table">
				<thead>
					<tr>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room No.'),$_smarty_tpl ) );?>
</span></th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Image'),$_smarty_tpl ) );?>
</th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Type'),$_smarty_tpl ) );?>
</span></th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration'),$_smarty_tpl ) );?>
</span></th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit Price (tax excl)'),$_smarty_tpl ) );?>
</span></th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additinal Facilities (tax excl)'),$_smarty_tpl ) );?>
</span></th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms Price (tax excl)'),$_smarty_tpl ) );?>
</span></th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Price (tax excl)'),$_smarty_tpl ) );?>
</span></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php if ((isset($_smarty_tpl->tpl_vars['cart_detail_data']->value)) && $_smarty_tpl->tpl_vars['cart_detail_data']->value) {?>
					<?php $_smarty_tpl->_assignInScope('curr_id', intval($_smarty_tpl->tpl_vars['cart']->value->id_currency));?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_detail_data']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
						<tr>
							<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['room_num'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							<td><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="Room image" /></td>
							<td>
								<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['room_type'], ENT_QUOTES, 'UTF-8', true);?>
</p>
								<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['selected_demands'])) && $_smarty_tpl->tpl_vars['data']->value['selected_demands']) {?>
									<ul class="extra-demand-list">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['selected_demands'], 'selDemand');
$_smarty_tpl->tpl_vars['selDemand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['selDemand']->value) {
$_smarty_tpl->tpl_vars['selDemand']->do_else = false;
?>
										<li>
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selDemand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

										</li>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								<?php }?>
							</td>
							<td><?php echo smarty_modifier_date_format(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['date_from'], ENT_QUOTES, 'UTF-8', true),"%d-%m-%Y");?>
&nbsp;-&nbsp; <?php echo smarty_modifier_date_format(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['date_to'], ENT_QUOTES, 'UTF-8', true),"%d-%m-%Y");?>
</td>
							<td id="cart_detail_data_unit_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
								<span class="product_original_price <?php if ($_smarty_tpl->tpl_vars['data']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>" <?php if ($_smarty_tpl->tpl_vars['data']->value['feature_price_diff'] < 0) {?> style="display:none;"<?php }?>>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['product_price_tax_excl'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

								</span>&nbsp;
								<span class="room_type_current_price" <?php if (!$_smarty_tpl->tpl_vars['data']->value['feature_price_diff']) {?>style="display:none;"<?php }?>>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['feature_price_tax_excl'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

								</span>
							</td>
							<td>
								<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data']->value['extra_demands']) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['demand_price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>0),$_smarty_tpl ) );?>

								<?php }?>
							</td>
							<td id="cart_detail_data_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data']->value['amt_with_qty']),$_smarty_tpl ) );?>
</td>
							<td>
								<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data']->value['extra_demands']) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['amt_with_qty'], ENT_QUOTES, 'UTF-8', true)+htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['demand_price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['amt_with_qty'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

								<?php }?>
							</td>
							<td>
								<button class="delete_hotel_cart_data btn btn-danger" data-id_room=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_room'], ENT_QUOTES, 'UTF-8', true);?>
 data-id_product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
 data-id = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 data-id_cart = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_cart'], ENT_QUOTES, 'UTF-8', true);?>
 data-date_to = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['date_to'], ENT_QUOTES, 'UTF-8', true);?>
 data-date_from = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['date_from'], ENT_QUOTES, 'UTF-8', true);?>
>
									<i class="icon-trash"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>

								</button>
								<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data']->value['extra_demands']) {?>
									<br />
									<a href="#" id_room=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_room'], ENT_QUOTES, 'UTF-8', true);?>
 date_from="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['date_from'], ENT_QUOTES, 'UTF-8', true);?>
" date_to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['date_to'], ENT_QUOTES, 'UTF-8', true);?>
" id_product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
" id_cart="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_cart'], ENT_QUOTES, 'UTF-8', true);?>
" class="open_rooms_extra_demands btn btn-success" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to add or remove the additinal facilities of this room type.'),$_smarty_tpl ) );?>
">
										<i class="icon-plus"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>

									</a>
								<?php }?>
							</td>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php } else { ?>
					<tr>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Room Found in the cart.'),$_smarty_tpl ) );?>
</td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="rooms_type_extra_demands">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities'),$_smarty_tpl ) );?>
</h3>
			</div>
			<div class="modal-body" id="rooms_extra_demands">
				<div class="rooms_extra_demands_head">
					<p class="rooms_extra_demands_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add below additional facilities to the room for better hotel experience'),$_smarty_tpl ) );?>
</p>
				</div>
				<div id="room_type_demands_desc"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</div>
</div>

<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtExtraDemandSucc'));
$_block_repeat=true;
echo $_block_plugin8->addJsDefL(array('name'=>'txtExtraDemandSucc'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Updated Successfully','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin8->addJsDefL(array('name'=>'txtExtraDemandSucc'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtExtraDemandErr'));
$_block_repeat=true;
echo $_block_plugin9->addJsDefL(array('name'=>'txtExtraDemandErr'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while updating demands','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin9->addJsDefL(array('name'=>'txtExtraDemandErr'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<style type="text/css">
	#customer_cart_details .extra-demand-list {
		padding-left:15px;}
	#customer_cart_details .delete_hotel_cart_data {
		margin-bottom:2px !important;}
	#customer_cart_details .room_type_old_price {
		text-decoration: line-through;
		color:#979797;
		font-size:12px;}
	/*Extra demands CSS*/
	#rooms_extra_demands {
		font-size: 16px;}
	#rooms_extra_demands .room_demands_container {
		border: 1px solid #ddd;}
	#rooms_extra_demands .demand_header {
		padding: 10px;
		color: #333;
    	border-bottom: 1px solid #ddd;}
	#rooms_extra_demands .rooms_extra_demands_head {
		margin-bottom: 18px;}
	#rooms_extra_demands .room_demand_block {
		margin-bottom: 15px;
		color: #333;
		font-size: 14px;}
	#rooms_extra_demands .room_demand_detail {
		padding: 15px 15px 0px 15px;}
</style>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		// modalbox for extra bed requirement
		$('body').on('click', '.open_rooms_extra_demands', function() {
			var idProduct = $(this).attr('id_product');
			var idCart = $(this).attr('id_cart');
			var idRoom = $(this).attr('id_room');
			var dateFrom = $(this).attr('date_from');
			var dateTo = $(this).attr('date_to');
			$.ajax({
				type: 'POST',
				headers: {
					"cache-control": "no-cache"
				},
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
",
				cache: false,
				data: {
					date_from: dateFrom,
					date_to: dateTo,
					id_room: idRoom,
					id_cart: idCart,
					id_product: idProduct,
					action: 'getRoomTypeCartDemands',
					ajax: true
				},
				success: function(result) {
					$('#rooms_type_extra_demands').find('#room_type_demands_desc').html('');
					$('#rooms_type_extra_demands').find('#room_type_demands_desc').append(result);
					$('#rooms_type_extra_demands').modal('show');
				},
			});
		});
		$('#rooms_type_extra_demands').on('hidden.bs.modal', function (e) {
			// reload so that changes prices will reflect everywhere
			location.reload();
		});

		// select/unselect extra demand
		$(document).on('click', '.id_room_type_demand', function() {
			var roomDemands = [];
			// get the selected extra demands by customer
			$(this).closest('.room_demand_detail').find('input:checkbox.id_room_type_demand:checked').each(function () {
				roomDemands.push({
					'id_global_demand':$(this).val(),
					'id_option': $(this).closest('.room_demand_block').find('.id_option').val()
				});
			});
			var idBookingCart = $(this).attr('id_cart_booking');
			$.ajax({
				type: 'POST',
				headers: {
					"cache-control": "no-cache"
				},
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
",
				dataType: 'JSON',
				cache: false,
				data: {
					id_cart_booking: idBookingCart,
					room_demands: JSON.stringify(roomDemands),
					action: 'changeRoomDemands',
					ajax: true
				},
				success: function(result) {
					if (result == 1) {
						showSuccessMessage(txtExtraDemandSucc);
					} else {
						showErrorMessage(txtExtraDemandErr);
					}
				}
			});
		});

		// change advance option of extra demand
		$(document).on('change', '.demand_adv_option_block .id_option', function(e) {
			var option_selected = $(this).find('option:selected');
			var extra_demand_price = option_selected.attr("optionPrice")
			extra_demand_price = parseFloat(extra_demand_price);
			extra_demand_price = formatCurrency(extra_demand_price, currency_format, currency_sign, currency_blank);
			$(this).closest('.room_demand_block').find('.extra_demand_option_price').text(extra_demand_price);
			var roomDemands = [];
			// get the selected extra demands by customer
			$(this).closest('.room_demand_detail').find('input:checkbox.id_room_type_demand:checked').each(function () {
				roomDemands.push({
					'id_global_demand':$(this).val(),
					'id_option': $(this).closest('.room_demand_block').find('.id_option').val()
				});
			});
			var idBookingCart = $(this).closest('.room_demand_block').find('.id_room_type_demand').attr('id_cart_booking');
			$.ajax({
				type: 'POST',
				headers: {
					"cache-control": "no-cache"
				},
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
",
				dataType: 'JSON',
				cache: false,
				data: {
					id_cart_booking: idBookingCart,
					room_demands: JSON.stringify(roomDemands),
					action: 'changeRoomDemands',
					ajax: true
				},
				success: function(result) {
					if (result == 1) {
						showSuccessMessage(txtExtraDemandSucc);
					} else {
						showErrorMessage(txtExtraDemandErr);
					}
				}
			});
		});
	});
<?php echo '</script'; ?>
><?php }
}
