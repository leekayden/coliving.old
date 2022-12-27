<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\orders\_room_extra_demands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c129cee55_80061678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1537289ec0019f9ac3886b36567dd3b8d2e52257' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\orders\\_room_extra_demands.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c129cee55_80061678 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
	<h3 class="modal-title"><i class="icon-tasks"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities'),$_smarty_tpl ) );?>
 <?php if ((isset($_smarty_tpl->tpl_vars['orderEdit']->value)) && $_smarty_tpl->tpl_vars['orderEdit']->value) {?><span class="badge badge-success demand_edit_badge"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'edit'),$_smarty_tpl ) );?>
</span><?php }?> <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</h3>
</div>
<div class="modal-body" id="rooms_extra_demands">
	<div id="room_type_demands_desc" class="row">
		<input type="hidden" value="0" id="id_htl_booking">
		<?php if ((isset($_smarty_tpl->tpl_vars['orderEdit']->value)) && $_smarty_tpl->tpl_vars['orderEdit']->value) {?>
			<p class="col-sm-12 facility_nav_btn">
				<button id="btn_new_room_facility" class="btn btn-success"><i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new facility'),$_smarty_tpl ) );?>
</button>
				<button id="back_to_facilities_btn" class="btn btn-default"><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back'),$_smarty_tpl ) );?>
</button>
			</p>

						<div class="col-sm-12 room_ordered_demands table-responsive">
				<table class="table">
					<tbody>
						<?php if ((isset($_smarty_tpl->tpl_vars['extraDemands']->value)) && $_smarty_tpl->tpl_vars['extraDemands']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extraDemands']->value, 'roomDemand');
$_smarty_tpl->tpl_vars['roomDemand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->do_else = false;
?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'], 'demand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['demand']->value['name'];?>
</td>
										<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['demand']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl ) );?>
</td>
										<td><a class="btn btn-danger pull-right del-order-room-demand" href="#" id_booking_demand="<?php echo $_smarty_tpl->tpl_vars['demand']->value['id_booking_demand'];?>
"><i class="icon-trash"></i></a></td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
							<tr>
								<td colspan="3">
									<i class="icon-warning"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No additional facilities added yet.'),$_smarty_tpl ) );?>

								</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>

						<div class="col-sm-12 room_demands_container">
				<div class="room_demand_detail">
					<?php if ((isset($_smarty_tpl->tpl_vars['roomTypeDemands']->value)) && $_smarty_tpl->tpl_vars['roomTypeDemands']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomTypeDemands']->value, 'demand', false, 'idGlobalDemand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idGlobalDemand']->value => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
							<div class="row room_demand_block">
								<div class="col-xs-6">
									<div class="row">
										<div class="col-xs-2">
											<input id_cart_booking="<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idGlobalDemand']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" class="id_room_type_demand" <?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands'])) && $_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands'] && (in_array($_smarty_tpl->tpl_vars['idGlobalDemand']->value,$_smarty_tpl->tpl_vars['roomDemand']->value['selected_global_demands']))) {?>checked<?php }?> />
										</div>
										<div class="col-xs-10 demand_adv_option_block">
											<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
											<?php if ((isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'])) && $_smarty_tpl->tpl_vars['demand']->value['adv_option']) {?>
												<select class="id_option">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['demand']->value['adv_option'], 'option', false, 'idOption');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idOption']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
														<?php $_smarty_tpl->_assignInScope('demand_key', ((string)$_smarty_tpl->tpl_vars['idGlobalDemand']->value)."-".((string)$_smarty_tpl->tpl_vars['idOption']->value));?>
														<option optionPrice="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idOption']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'][$_smarty_tpl->tpl_vars['demand_key']->value]))) {?>selected<?php }?> key="<?php echo $_smarty_tpl->tpl_vars['demand_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
														<?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'][$_smarty_tpl->tpl_vars['demand_key']->value]))) {?>
															<?php $_smarty_tpl->_assignInScope('selected_adv_option', ((string)$_smarty_tpl->tpl_vars['idOption']->value));?>
														<?php }?>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</select>
											<?php } else { ?>
												<input type="hidden" class="id_option" value="0" />
											<?php }?>
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<p><span class="pull-right extra_demand_option_price"><?php if ((isset($_smarty_tpl->tpl_vars['selected_adv_option']->value)) && (isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'][$_smarty_tpl->tpl_vars['selected_adv_option']->value]['price']))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['adv_option'][$_smarty_tpl->tpl_vars['selected_adv_option']->value]['price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['price'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
}?></span></p>
								</div>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				</div>
			</div>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['extraDemands']->value)) && $_smarty_tpl->tpl_vars['extraDemands']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extraDemands']->value, 'roomDemand');
$_smarty_tpl->tpl_vars['roomDemand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->do_else = false;
?>
				<div class="col-sm-12">
					<div class="col-sm-12 room_demand_detail">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'], 'demand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
							<p>
								<span><?php echo $_smarty_tpl->tpl_vars['demand']->value['name'];?>
</span>
								<span class="pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['demand']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl ) );?>
</span>
							</p>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary pull-left" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close'),$_smarty_tpl ) );?>
</button>
	<button type="button" id="save_room_facilities" class="btn btn-success pull-right"><i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
</div>



<style type="text/css">
	/*Extra demands CSS*/
	#rooms_type_extra_demands .modal-title {
		margin: 0px;}
	#rooms_type_extra_demands .demand_edit_badge {
		font-size: 14px;}
	#rooms_extra_demands .room_ordered_demands td, #rooms_extra_demands .room_demand_detail {
		font-size: 14px;}
	#rooms_extra_demands .demand_header {
		padding: 10px;
		color: #333;
    	border-bottom: 1px solid #ddd;}
	#rooms_extra_demands .room_demand_block {
		margin-bottom: 15px;
		color: #333;
		font-size: 14px;}
	#rooms_extra_demands .facility_nav_btn {
		margin-bottom: 20px;}
	#rooms_extra_demands .room_demands_container {
		display: none;}
	#room_extra_demand_content #save_room_facilities, #room_extra_demand_content #back_to_facilities_btn {
		display: none;}
</style>

<?php }
}
