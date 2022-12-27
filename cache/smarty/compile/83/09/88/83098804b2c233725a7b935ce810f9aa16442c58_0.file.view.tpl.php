<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\suppliers\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13e3f7e8_79600270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83098804b2c233725a7b935ce810f9aa16442c58' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\suppliers\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13e3f7e8_79600270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_584080012639e8c13e24d15_43561715', "override_tpl");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_584080012639e8c13e24d15_43561715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_584080012639e8c13e24d15_43561715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="panel">
	<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['supplier']->value->name;?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of products:'),$_smarty_tpl ) );?>
 <?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
</div>	
	<table class="table">
		<thead>
			<tr>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product name'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute name'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supplier Reference'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wholesale price'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EAN13'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPC'),$_smarty_tpl ) );?>
</span></th>
				<?php if ($_smarty_tpl->tpl_vars['stock_management']->value && $_smarty_tpl->tpl_vars['shopContext']->value != Shop::CONTEXT_ALL) {?><th class="right"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available Quantity'),$_smarty_tpl ) );?>
</span></th><?php }?>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
			<?php if (!$_smarty_tpl->tpl_vars['product']->value->hasAttributes()) {?>
				<tr>
					<td><a class="btn btn-link" href="?tab=AdminProducts&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
&amp;updateproduct&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminProducts'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );?>
</td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->product_supplier_reference)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product']->value->product_supplier_reference;
}?></td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->product_supplier_price_te)) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['product']->value->product_supplier_price_te;
}?></td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->reference)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product']->value->reference;
}?></td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->ean13)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product']->value->ean13;
}?></td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->upc)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product']->value->upc;
}?></td>
					<?php if ($_smarty_tpl->tpl_vars['stock_management']->value && $_smarty_tpl->tpl_vars['shopContext']->value != Shop::CONTEXT_ALL) {?><td class="right" width="150"><?php echo $_smarty_tpl->tpl_vars['product']->value->quantity;?>
</td><?php }?>
				</tr>
			<?php } else { ?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->combination, 'product_attribute', false, 'id_product_attribute');
$_smarty_tpl->tpl_vars['product_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_product_attribute']->value => $_smarty_tpl->tpl_vars['product_attribute']->value) {
$_smarty_tpl->tpl_vars['product_attribute']->do_else = false;
?>
					<tr <?php if ($_smarty_tpl->tpl_vars['id_product_attribute']->value%2) {?>class="alt_row"<?php }?> >
						<td><a class="btn btn-link" href="?tab=AdminProducts&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
&amp;updateproduct&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminProducts'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['attributes'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['attributes'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_reference'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_reference'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_price_te'])) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_price_te'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['reference'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['reference'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['ean13'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['ean13'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['upc'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['upc'];
}?></td>
						<?php if ($_smarty_tpl->tpl_vars['stock_management']->value && $_smarty_tpl->tpl_vars['shopContext']->value != Shop::CONTEXT_ALL) {?><td class="right"><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['quantity'];?>
</td><?php }?>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
</div>
<?php
}
}
/* {/block "override_tpl"} */
}
