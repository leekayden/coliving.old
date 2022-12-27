<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\supply_orders\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13ee2a86_69799175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b22ea0aa6d396904b4c2d7e63bdf73cccdeed2ee' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\supply_orders\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13ee2a86_69799175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1212877205639e8c13edbb93_03286077', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1212877205639e8c13edbb93_03286077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1212877205639e8c13edbb93_03286077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row">
	<div class="col-lg-6">
		<div class="panel">
			<h3>
				<i class="icon-info"></i>
				<?php if ((isset($_smarty_tpl->tpl_vars['is_template']->value)) && $_smarty_tpl->tpl_vars['is_template']->value == 1) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template'),$_smarty_tpl ) );?>
 <?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General information'),$_smarty_tpl ) );?>

			</h3>
			<table class="table">
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Creation date:'),$_smarty_tpl ) );?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_creation_date']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supplier:'),$_smarty_tpl ) );?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_supplier_name']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last update:'),$_smarty_tpl ) );?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_last_update']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery expected:'),$_smarty_tpl ) );?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_expected']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warehouse:'),$_smarty_tpl ) );?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_warehouse']->value;?>
</td>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency:'),$_smarty_tpl ) );?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_currency']->value->name;?>
</td>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Global discount rate:'),$_smarty_tpl ) );?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['supply_order_discount_rate']->value;?>
 %</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel">
			<h3>
				<i class="icon-th-list"></i>
				<?php if ((isset($_smarty_tpl->tpl_vars['is_template']->value)) && $_smarty_tpl->tpl_vars['is_template']->value == 1) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template'),$_smarty_tpl ) );?>
 <?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Summary'),$_smarty_tpl ) );?>

			</h3>
			<table class="table">
				<thead>
					<tr>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Designation'),$_smarty_tpl ) );?>
</span></th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value'),$_smarty_tpl ) );?>
</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total (tax excl.)'),$_smarty_tpl ) );?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['supply_order_total_te']->value;?>
</td>
					</tr>
					<tr>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount'),$_smarty_tpl ) );?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['supply_order_discount_value_te']->value;?>
</td>
					</tr>
					<tr>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total with discount (tax excl.)'),$_smarty_tpl ) );?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['supply_order_total_with_discount_te']->value;?>
</td>
					</tr>
					<tr>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Tax'),$_smarty_tpl ) );?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['supply_order_total_tax']->value;?>
</td>
					</tr>
					<tr>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total (tax incl.)'),$_smarty_tpl ) );?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['supply_order_total_ti']->value;?>
</td>
					</tr>
					<tr>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total to pay.'),$_smarty_tpl ) );?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['supply_order_total_ti']->value;?>
</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['supply_order_detail_content']->value;?>

<?php
}
}
/* {/block "override_tpl"} */
}
