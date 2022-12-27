<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\pack.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c133557f6_99570074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f9d9c27bc846d0c1db4feeb4af09a36d1a170de' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\pack.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c133557f6_99570074 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" name="submitted_tabs[]" value="Pack" />
<hr />
<div class="form-group listOfPack">
	<label class="control-label col-lg-3 product_description">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of products of this pack'),$_smarty_tpl ) );?>

	</label>
	<div class="col-lg-9">
		<p class="alert alert-warning pack-empty-warning" <?php if (count($_smarty_tpl->tpl_vars['pack_items']->value) != 0) {?>style="display:none"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack is empty. You must add at least one product item.'),$_smarty_tpl ) );?>
</p>
		<ul id="divPackItems" class="list-unstyled">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pack_items']->value, 'pack_item');
$_smarty_tpl->tpl_vars['pack_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pack_item']->value) {
$_smarty_tpl->tpl_vars['pack_item']->do_else = false;
?>
				<li class="product-pack-item media-product-pack" data-product-name="<?php echo $_smarty_tpl->tpl_vars['curPackItemName']->value;?>
" data-product-qty="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['pack_quantity'];?>
" data-product-id="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['id'];?>
" data-product-id-attribute="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['id_product_attribute'];?>
">
					<img class="media-product-pack-img" src="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['image'];?>
"/>
					<span class="media-product-pack-title"><?php echo $_smarty_tpl->tpl_vars['pack_item']->value['name'];?>
</span>
					<span class="media-product-pack-ref">REF: <?php echo $_smarty_tpl->tpl_vars['pack_item']->value['reference'];?>
</span>
					<span class="media-product-pack-quantity"><span class="text-muted">x</span><?php echo $_smarty_tpl->tpl_vars['pack_item']->value['pack_quantity'];?>
</span>
					<button type="button" class="btn btn-default delPackItem media-product-pack-action" data-delete="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['id'];?>
" data-delete-attr="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['id_product_attribute'];?>
"><i class="icon-trash"></i></button>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div>
<div class="form-group addProductToPack">
	<label class="control-label col-lg-3" for="curPackItemName">
		<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Start by typing the first letters of the product name, then select the product from the drop-down list.'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add product in your pack'),$_smarty_tpl ) );?>

		</span>
	</label>
	<div class="col-lg-9">
		<div class="row">
			<div class="col-lg-6">
				<input type="text" id="curPackItemName" name="curPackItemName" class="form-control" />
			</div>
			<div class="col-lg-2">
				<div class="input-group">
					<span class="input-group-addon">&times;</span>
					<input type="number" name="curPackItemQty" id="curPackItemQty" class="form-control" min="1" value="1"/>
				</div>
			</div>
			<div class="col-lg-2">
				<button type="button" id="add_pack_item" class="btn btn-default">
					<i class="icon-plus-sign-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add this product'),$_smarty_tpl ) );?>

				</button>
			</div>
		</div>
	</div>
</div>

<input type="hidden" name="inputPackItems" id="inputPackItems" value="<?php echo $_smarty_tpl->tpl_vars['input_pack_items']->value;?>
" placeholder="inputs"/>
<input type="hidden" name="namePackItems" id="namePackItems" value="<?php echo $_smarty_tpl->tpl_vars['input_namepack_items']->value;?>
" placeholder="name"/><?php }
}
