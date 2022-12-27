<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\warehouses\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1447f6a0_32310365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecbef0a658d93dd04b7ad0584b31dd48e99f2a17' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\warehouses\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1447f6a0_32310365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_952816055639e8c1446d1f2_68092194', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_952816055639e8c1446d1f2_68092194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_952816055639e8c1446d1f2_68092194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['warehouse']->value))) {?>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General information'),$_smarty_tpl ) );?>
</h3>
	<div class="form-horizontal">
		<div class="row">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference:'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['warehouse']->value->reference;?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name:'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['warehouse']->value->name;?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manager:'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country:'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['address']->value->country != '') {
echo $_smarty_tpl->tpl_vars['address']->value->country;
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
}?></p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone:'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['address']->value->phone != '') {
echo $_smarty_tpl->tpl_vars['address']->value->phone;
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
}?></p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Management type:'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['warehouse']->value->management_type),$_smarty_tpl ) );?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valuation currency:'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['currency']->value->name;?>
 (<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
)</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product references:'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['warehouse_num_products']->value;?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Physical product quantities:'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['warehouse_quantities']->value;?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stock valuation:'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['warehouse_value']->value;?>
</p></div>
		</div>
	</div>
</div>
<div class="panel">
	<h3><i class="icon-sitemap"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shops'),$_smarty_tpl ) );?>
</h3>
	<?php if ((isset($_smarty_tpl->tpl_vars['shops']->value)) && count($_smarty_tpl->tpl_vars['shops']->value) > 0) {?>
	<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The following are the shops associated with this warehouse.'),$_smarty_tpl ) );?>
</div>
	<table class="table">
		<thead>
			<tr>
				<th class="fixed-width-xs align-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</span></th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
			<tr>
				<td class="fixed-width-xs align-center"><?php echo $_smarty_tpl->tpl_vars['shop']->value['id_shop'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
</td>
			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
	<?php } else { ?>
	<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currently there is no shop associated with this warehouse.'),$_smarty_tpl ) );?>
</div>
	<?php }?>
</div>
<div class="panel">
	<h3><i class="icon-archive"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stock'),$_smarty_tpl ) );?>
</h3>
	<a class="btn btn-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminStockInstantState'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_warehouse=<?php echo intval($_smarty_tpl->tpl_vars['warehouse']->value->id);?>
&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminStockInstantState'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See products details'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i></a>
</div>
<div class="panel">
	<h3><i class="icon-reorder"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'History'),$_smarty_tpl ) );?>
</h3>
	<a class="btn btn-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminStockMvt'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_warehouse=<?php echo intval($_smarty_tpl->tpl_vars['warehouse']->value->id);?>
&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminStockMvt'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See warehouse\'s activity details'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i></a>
</div>
<?php } else { ?>
	<div class="panel"><div class="alert alert danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This warehouse does not exist.'),$_smarty_tpl ) );?>
</div></div>
<?php }
}
}
/* {/block "override_tpl"} */
}
