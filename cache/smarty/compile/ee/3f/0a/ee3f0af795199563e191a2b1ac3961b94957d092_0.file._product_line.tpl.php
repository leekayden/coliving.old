<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\orders\_product_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12995389_69936077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee3f0af795199563e191a2b1ac3961b94957d092' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\orders\\_product_line.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c12995389_69936077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<tr class="product-line-row" data-id_room="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
" data-id_product="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_product'];?>
" data-id_hotel="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_hotel'];?>
" data-date_from="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
" data-date_to="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
" data-product_price="<?php echo $_smarty_tpl->tpl_vars['data']->value['unit_amt_tax_incl'];?>
" data-order_detail_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_order_detail'];?>
">
	<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
		<td class="standard_refund_fields" style="display:none">
			<input type="checkbox" name="id_htl_booking[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && (in_array($_smarty_tpl->tpl_vars['data']->value['id'],$_smarty_tpl->tpl_vars['refundReqBookings']->value))) {?>disabled<?php }?>/>
		</td>
	<?php }?>
	<td class="text-center">
		<?php echo $_smarty_tpl->tpl_vars['data']->value['room_num'];?>

	</td>
	<td class="text-center">
		<img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image_link'];?>
" title="Room image" />
	</td>
	<td class="text-center">
		<p><?php echo $_smarty_tpl->tpl_vars['data']->value['room_type'];?>
</p>
		<p class="room_extra_demands <?php if (!(isset($_smarty_tpl->tpl_vars['data']->value['extra_demands'])) || !$_smarty_tpl->tpl_vars['data']->value['extra_demands']) {?>edit_product_fields<?php }?>" <?php if (!(isset($_smarty_tpl->tpl_vars['data']->value['extra_demands'])) || !$_smarty_tpl->tpl_vars['data']->value['extra_demands']) {?>style="display: none;"<?php }?>>
			<a href="#" data-toggle="modal" data-target="#rooms_type_extra_demands" date_from="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
" date_to="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
" id_product="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_product'];?>
" id_room="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
" id_order="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" class="open_room_extra_demands" id_htl_booking="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" edit_orde_line="0">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Features'),$_smarty_tpl ) );?>

			</a>
		</p>
		<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data']->value['extra_demands']) {?>
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data']->value['extra_demands_price_ti'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

			</p>
		<?php }?>
	</td>
	<td class="text-center">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddHotel');?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_hotel'];?>
&amp;updatehtl_branch_info" target="_blank">
			<span><?php echo $_smarty_tpl->tpl_vars['data']->value['hotel_name'];?>
</span>
		</a>
	</td>
	<td class="text-center">
		<span class="booking_duration_show"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_from'],"%d-%m-%Y");?>
&nbsp-&nbsp <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_to'],"%d-%m-%Y");?>
</span>

		<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
			<div class="booking_duration_edit" style="display:none;">
				<div class="form-group">
					<div class="fixed-width-xl room_check_in_div">
						<div class="input-group">
							<div class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check In'),$_smarty_tpl ) );?>
</div>
							<input type="text" class="form-control add_product_date_from" name="add_product[date_from]" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_from'],"%d-%m-%Y");?>
" readonly/>
							<div class="input-group-addon"><i class="icon-calendar"></i></div>
						</div>
					</div>
					<br/>
					<div class="fixed-width-xl room_check_out_div">
						<div class="input-group">
							<div class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Out'),$_smarty_tpl ) );?>
</div>
							<input type="text" class="form-control add_product_date_to" name="add_product[date_to]" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_to'],"%d-%m-%Y");?>
" readonly/>
							<div class="input-group-addon"><i class="icon-calendar"></i></div>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
	</td>
	</td>
	<td class="text-center">
		<span class="product_original_price <?php if ($_smarty_tpl->tpl_vars['data']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>" <?php if ($_smarty_tpl->tpl_vars['data']->value['feature_price_diff'] < 0) {?> style="display:none;"<?php }?>>
        	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data']->value['unit_price_without_reduction_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

		</span>&nbsp;
        <span class="room_type_current_price" <?php if (!$_smarty_tpl->tpl_vars['data']->value['feature_price_diff']) {?>style="display:none;"<?php }?>>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data']->value['paid_unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

        </span>
	</td>
	<td class="text-center">
		<span class="product_price_show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data']->value['amt_with_qty_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
		<div class="product_price_edit" style="display:none;">
			<div class="form-group">
				<div class="fixed-width-xl">
					<div class="input-group">
						<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );?>
</div><?php }?>
						<input type="text" name="product_price_tax_excl" class="edit_product_price_tax_excl edit_product_price" value="<?php echo Tools::ps_round($_smarty_tpl->tpl_vars['data']->value['original_unit_price_tax_excl'],2);?>
"/>
						<?php if (!($_smarty_tpl->tpl_vars['currency']->value->format%2)) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );?>
</div><?php }?>
					</div>
				</div>
				<br/>
				<div class="fixed-width-xl">
					<div class="input-group">
						<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.'),$_smarty_tpl ) );?>
</div><?php }?>
						<input type="text" name="product_price_tax_incl" class="edit_product_price_tax_incl edit_product_price" value="<?php echo Tools::ps_round($_smarty_tpl->tpl_vars['data']->value['original_unit_price_tax_incl'],2);?>
"/>
						<?php if (!($_smarty_tpl->tpl_vars['currency']->value->format%2)) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.'),$_smarty_tpl ) );?>
</div><?php }?>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</td>
	<?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
		<td class="text-center">
			<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['refund_info'])) && $_smarty_tpl->tpl_vars['data']->value['refund_info']) {?>
				<span class="badge" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['refund_info']['color'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['refund_info']['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
			<?php }?>
		</td>
		<td class="text-center">
			<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['refund_info'])) && $_smarty_tpl->tpl_vars['data']->value['refund_info']) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data']->value['refund_info']['refunded_amount'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

			<?php }?>
		</td>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['data']->value['booking_type'] == 1) {?>
		<td class="text-center">
			<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['refund_info'])) && ($_smarty_tpl->tpl_vars['data']->value['refund_info']['refunded'] || $_smarty_tpl->tpl_vars['data']->value['refund_info']['denied'])) {?>
				<p class="text-center">--</p>
			<?php } else { ?>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySwappigModal" data-id_order="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" data-room_num='<?php echo $_smarty_tpl->tpl_vars['data']->value['room_num'];?>
' data-date_from='<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
' data-date_to='<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
' data-id_room='<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
' data-cust_name='<?php echo $_smarty_tpl->tpl_vars['data']->value['alloted_cust_name'];?>
' data-cust_email='<?php echo $_smarty_tpl->tpl_vars['data']->value['alloted_cust_email'];?>
' data-avail_rm_swap='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['avail_rooms_to_swap'] ));?>
' data-avail_rm_realloc='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['avail_rooms_to_realloc'] ));?>
'>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reallocate Room','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

				</button>
			<?php }?>
		</td>
	<?php }?>
	<?php if (($_smarty_tpl->tpl_vars['can_edit']->value && !$_smarty_tpl->tpl_vars['order']->value->hasBeenDelivered())) {?>
		<td class="product_invoice" style="display: none;">
		<?php if (sizeof($_smarty_tpl->tpl_vars['invoices_collection']->value)) {?>
		<select name="product_invoice" class="edit_product_invoice">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices_collection']->value, 'invoice');
$_smarty_tpl->tpl_vars['invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->do_else = false;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" >
				#<?php echo Configuration::get('PS_INVOICE_PREFIX',$_smarty_tpl->tpl_vars['current_id_lang']->value,null,$_smarty_tpl->tpl_vars['order']->value->id_shop);
echo sprintf('%06d',$_smarty_tpl->tpl_vars['invoice']->value->number);?>

			</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<?php } else { ?>
		&nbsp;
		<?php }?>
		</td>
		<td class="product_action text-right">
						<div class="btn-group">
				<button type="button" class="btn btn-default edit_product_change_link">
					<i class="icon-pencil"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

				</button>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#" class="delete_product_line">
							<i class="icon-trash"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>

						</a>
					</li>
				</ul>
			</div>
						<button type="button" class="btn btn-default submitProductChange" style="display: none;">
				<i class="icon-ok"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update'),$_smarty_tpl ) );?>

			</button>
			<button type="button" class="btn btn-default cancel_product_change_link" style="display: none;">
				<i class="icon-remove"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

			</button>
		</td>
	<?php }?>
</tr><?php }
}
