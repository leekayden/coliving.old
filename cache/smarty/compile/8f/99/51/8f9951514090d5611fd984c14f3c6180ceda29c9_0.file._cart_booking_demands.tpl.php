<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\orders\_cart_booking_demands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c127c9ca9_17724988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f9951514090d5611fd984c14f3c6180ceda29c9' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\orders\\_cart_booking_demands.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c127c9ca9_17724988 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['selectedRoomDemands']->value)) && $_smarty_tpl->tpl_vars['selectedRoomDemands']->value) {?>
	<?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selectedRoomDemands']->value, 'roomDemand', false, 'key');
$_smarty_tpl->tpl_vars['roomDemand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->do_else = false;
?>
		<div class="row room_demands_container">
			<div class="col-sm-12 demand_header">
				<span>
					<i class="icon-bed"></i>
					<?php if ((isset($_smarty_tpl->tpl_vars['roomDemand']->value['room_num'])) && $_smarty_tpl->tpl_vars['roomDemand']->value['room_num']) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomDemand']->value['room_num'], ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
				</span>
			</div>
			<div class="col-sm-12 room_demand_detail">
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
		<?php $_smarty_tpl->_assignInScope('roomCount', $_smarty_tpl->tpl_vars['roomCount']->value+1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
