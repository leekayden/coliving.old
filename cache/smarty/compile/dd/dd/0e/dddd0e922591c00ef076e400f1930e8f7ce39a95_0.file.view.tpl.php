<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\manufacturers\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c120a7ea0_35630320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dddd0e922591c00ef076e400f1930e8f7ce39a95' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\manufacturers\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c120a7ea0_35630320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1742722093639e8c120847c7_39487930', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1742722093639e8c120847c7_39487930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1742722093639e8c120847c7_39487930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="panel">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['addresses']->value);?>
</span></h3>
	<?php if (!count($_smarty_tpl->tpl_vars['addresses']->value)) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No address has been found for this manufacturer.'),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'addresse');
$_smarty_tpl->tpl_vars['addresse']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addresse']->value) {
$_smarty_tpl->tpl_vars['addresse']->do_else = false;
?>
		<div class="panel">
			<div class="panel-heading">
				<?php echo $_smarty_tpl->tpl_vars['addresse']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['addresse']->value['lastname'];?>

				<div class="pull-right">
					<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminManufacturers'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_address=<?php echo $_smarty_tpl->tpl_vars['addresse']->value['id_address'];?>
&amp;editaddresses=1">
						<i class="icon-edit"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>
</a>
				</div>
			</div>

			<table class="table">
				<tbody>
					<tr>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['addresse']->value['address1'];?>
<br />
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['address2']) {
echo $_smarty_tpl->tpl_vars['addresse']->value['address2'];?>
<br /><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['addresse']->value['postcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['addresse']->value['city'];?>
<br />
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['state']) {
echo $_smarty_tpl->tpl_vars['addresse']->value['state'];?>
<br /><?php }?>
							<b><?php echo $_smarty_tpl->tpl_vars['addresse']->value['country'];?>
</b><br />
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['phone']) {
echo $_smarty_tpl->tpl_vars['addresse']->value['phone'];?>
<br /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['phone_mobile']) {
echo $_smarty_tpl->tpl_vars['addresse']->value['phone_mobile'];?>
<br /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['other']) {?><div ><br />
								<i><?php echo nl2br($_smarty_tpl->tpl_vars['addresse']->value['other']);?>
</i></div>
							<?php }?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<div class="panel">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
</span></h3>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
		<?php if (!$_smarty_tpl->tpl_vars['product']->value->hasAttributes()) {?>
			<div class="panel">
				<div class="panel-heading">
					<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

					<div class="pull-right">
						<a href="?tab=AdminProducts&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
&amp;updateproduct&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminProducts'),$_smarty_tpl ) );?>
" class="btn btn-default btn-sm">
							<i class="icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

						</a>
						<a href="?tab=AdminProducts&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
&amp;deleteproduct&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminProducts'),$_smarty_tpl ) );?>
" class="btn btn-default btn-sm" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete item #'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 ?');">
							<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>

				<table class="table">
					<thead>
						<tr>
							<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->reference)) {?><th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ref:'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->reference;?>
</th><?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->ean13)) {?><th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EAN13:'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->ean13;?>
</th><?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->upc)) {?><th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPC:'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->upc;?>
</th><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['stock_management']->value) {?><th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty:'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->quantity;?>
</th><?php }?>
						</tr>
					</thead>
				</table>
			</div>
		<?php } else { ?>
			<div class="panel">
				<div class="panel-heading">

					<a href="?tab=AdminProducts&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
&amp;updateproduct&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminProducts'),$_smarty_tpl ) );?>
">
						<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

					</a>
					<div class="pull-right">
						<a href="?tab=AdminProducts&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
&amp;updateproduct&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminProducts'),$_smarty_tpl ) );?>
" class="btn btn-default btn-sm">
							<i class="icon-edit"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

						</a>
						<a href="?tab=AdminProducts&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
&amp;deleteproduct&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminProducts'),$_smarty_tpl ) );?>
" class="btn btn-default btn-sm" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete item #'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 ?');">
							<i class="icon-trash"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>

						</a>
					</div>

				</div>

				<table class="table">
					<thead>
						<tr>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute name'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EAN13'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPC'),$_smarty_tpl ) );?>
</span></th>
							<?php if ($_smarty_tpl->tpl_vars['stock_management']->value && $_smarty_tpl->tpl_vars['shopContext']->value != Shop::CONTEXT_ALL) {?>
								<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available Quantity'),$_smarty_tpl ) );?>
</span></th>
							<?php }?>
						</tr>
					</thead>
					<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->combination, 'product_attribute', false, 'id_product_attribute');
$_smarty_tpl->tpl_vars['product_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_product_attribute']->value => $_smarty_tpl->tpl_vars['product_attribute']->value) {
$_smarty_tpl->tpl_vars['product_attribute']->do_else = false;
?>
						<tr <?php if ($_smarty_tpl->tpl_vars['id_product_attribute']->value%2) {?>class="alt_row"<?php }?> >
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['attributes'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['reference'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['ean13'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['upc'];?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['stock_management']->value && $_smarty_tpl->tpl_vars['shopContext']->value != Shop::CONTEXT_ALL) {?>
								<td class="right"><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['quantity'];?>
</td>
							<?php }?>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			</div>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php
}
}
/* {/block "override_tpl"} */
}
