<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blocksupplier\blocksupplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1193a178_84901402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fc642269e4af981c419aa11961bf2d590807944' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1193a178_84901402 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
		<?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('supplier'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','mod'=>'blocksupplier'),$_smarty_tpl ) );?>
">
		<?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','mod'=>'blocksupplier'),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
			</a>
		<?php }?>
	</p>
	<div class="block_content list-block">
		<?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['text_list']->value) {?>
			<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers']->value, 'supplier', false, NULL, 'supplier_list', array (
  'iteration' => true,
  'last' => true,
  'first' => true,
  'index' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['total'];
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
				<li class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['last'] : null)) {?>last_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['first'] : null)) {?>first_item<?php } else { ?>item<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
					<a 
					href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" 
					title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about','mod'=>'blocksupplier'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
">
				<?php }?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
					</a>
                <?php }?>
				</li>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['form_list']->value) {?>
				<form action="<?php echo htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8', true);?>
" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All suppliers','mod'=>'blocksupplier'),$_smarty_tpl ) );?>
</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers']->value, 'supplier');
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
?>
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</form>
			<?php }?>
		<?php } else { ?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No supplier','mod'=>'blocksupplier'),$_smarty_tpl ) );?>
</p>
		<?php }?>
	</div>
</div>
<!-- /Block suppliers module -->
<?php }
}
