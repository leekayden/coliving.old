<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\supply_orders\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13ebbd30_44090075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b8f0af965169822551cb259ba3644dbbe962c3e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\supply_orders\\helpers\\list\\list_header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13ebbd30_44090075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1035819060639e8c13eb5251_37232744', 'override_header');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_1035819060639e8c13eb5251_37232744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_1035819060639e8c13eb5251_37232744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['warehouses']->value)) && count($_smarty_tpl->tpl_vars['warehouses']->value) > 0 && (isset($_smarty_tpl->tpl_vars['filter_status']->value))) {?>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters'),$_smarty_tpl ) );?>
</h3>
	<div class="filter-stock-extended">
		<form id="supply_orders" method="get" class="form-horizontal">
			<input type="hidden" name="controller" value="AdminSupplyOrders" />
			<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<div class="form-group">
				<label for="id_warehouse" class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter by warehouse:'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<select id="id_warehouse" name="id_warehouse" onchange="$('#supply_orders').submit();">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warehouses']->value, 'i', false, 'k');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
						<option <?php if ($_smarty_tpl->tpl_vars['i']->value['id_warehouse'] == $_smarty_tpl->tpl_vars['current_warehouse']->value) {?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id_warehouse'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox col-lg-9 col-lg-push-3">
					<label for="filter_status">
						<input id="filter_status" type="checkbox" name="filter_status" class="noborder" onchange="$('#supply_orders').submit();" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value == 1) {?>value="on" checked<?php }?> /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose not to display completed/canceled orders:'),$_smarty_tpl ) );?>

					</label>
				</div>
			</div>
		</form>
	</div>
</div>
<?php }
}
}
/* {/block 'override_header'} */
}
