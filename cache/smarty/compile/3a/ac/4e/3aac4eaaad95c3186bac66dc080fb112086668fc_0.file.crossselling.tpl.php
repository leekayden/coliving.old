<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockcart\crossselling.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11309f95_75869053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aac4eaaad95c3186bac66dc080fb112086668fc' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockcart\\crossselling.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11309f95_75869053 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <?php if ((isset($_smarty_tpl->tpl_vars['orderProducts']->value)) && count($_smarty_tpl->tpl_vars['orderProducts']->value) > 0) {?>
	<div class="crossseling-content">
		<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers who bought this product also bought:','mod'=>'blockcart'),$_smarty_tpl ) );?>
</h2>
		<div id="blockcart_list">
			<ul id="blockcart_caroucel">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderProducts']->value, 'orderProduct', false, NULL, 'orderProduct', array (
));
$_smarty_tpl->tpl_vars['orderProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->value) {
$_smarty_tpl->tpl_vars['orderProduct']->do_else = false;
?>
					<li>
						<div class="product-image-container">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" class="lnk_img">
								<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" />
							</a>
						</div>
						<p class="product-name">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
								<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderProduct']->value['name'],15,'...' )), ENT_QUOTES, 'UTF-8', true);?>

							</a>
						</p>
						<?php if ($_smarty_tpl->tpl_vars['orderProduct']->value['show_price'] == 1 && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<span class="price_display">
								<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl ) );?>
</span>
							</span>
						<?php }?>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>
<?php }?> --><?php }
}
