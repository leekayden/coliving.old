<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockwishlist\views\templates\front\mywishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11c9b611_85708476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2751a06056484ddfaecfec43383b0f62c863d141' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockwishlist\\views\\templates\\front\\mywishlist.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11c9b611_85708476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div id="mywishlist">
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

		</a>
		<span class="navigation-pipe">
			<?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

		</span>
		<span class="navigation_page">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

		</span>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

	<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</h1>

	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<?php if (intval($_smarty_tpl->tpl_vars['id_customer']->value) != 0) {?>
		<form method="post" class="std box" id="form_wishlist">
			<fieldset>
				<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</h3>
				<div class="form-group">
					<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
					<label class="align_right" for="name">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

					</label>
					<input type="text" id="name" name="name" class="inputTxt form-control" value="<?php if ((isset($_POST['name'])) && count($_smarty_tpl->tpl_vars['errors']->value) > 0) {
echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8', true);
}?>" />
				</div>
				<p class="submit">
                    <button id="submitWishlist" class="btn btn-default button button-medium" type="submit" name="submitWishlist">
                    	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span>
                    </button>
				</p>
			</fieldset>
		</form>
		<?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
			<div id="block-history" class="block-center">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
							<th class="item mywishlist_first"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
							<th class="item mywishlist_first"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
							<th class="item mywishlist_second"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
							<th class="item mywishlist_second"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Direct Link','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
							<th class="item mywishlist_second"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
							<th class="last_item mywishlist_first"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wishlists']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<tr id="wishlist_<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']);?>
">
								<td style="width:200px;">
									<a href="#" onclick="javascript:event.preventDefault();WishlistManage('block-order-detail', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']);?>
');">
										<?php echo mb_convert_encoding(htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'],30,'...' )), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

									</a>
								</td>
								<td class="bold align_center">
									<?php $_smarty_tpl->_assignInScope('n', 0);?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nbProducts']->value, 'nb', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
										<?php if ($_smarty_tpl->tpl_vars['nb']->value['id_wishlist'] == $_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']) {?>
											<?php $_smarty_tpl->_assignInScope('n', intval($_smarty_tpl->tpl_vars['nb']->value['nbProducts']));?>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php if ($_smarty_tpl->tpl_vars['n']->value) {?>
										<?php echo intval($_smarty_tpl->tpl_vars['n']->value);?>

									<?php } else { ?>
										0
									<?php }?>
								</td>
								<td><?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['counter']);?>
</td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date_add'],"%Y-%m-%d");?>
</td>
								<td>
									<a href="#" onclick="javascript:event.preventDefault();WishlistManage('block-order-detail', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']);?>
');">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

									</a>
								</td>
								<td class="wishlist_default">
									<?php if ((isset($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['default'])) && $_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['default'] == 1) {?>
										<p class="is_wish_list_default">
											<i class="icon icon-check-square"></i>
										</p>
									<?php } else { ?>
										<a href="#" onclick="javascript:event.preventDefault();(WishlistDefault('wishlist_<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']);?>
', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']);?>
'));">
											<i class="icon icon-square"></i>
										</a>
									<?php }?>
								</td>
								<td class="wishlist_delete">
									<a class="icon" href="#" onclick="javascript:event.preventDefault();return (WishlistDelete('wishlist_<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']);?>
', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']);?>
', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you really want to delete this wishlist ?','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
'));">
										<i class="icon-remove"></i>
									</a>
								</td>
							</tr>
						<?php
}
}
?>
					</tbody>
				</table>
			</div>
			<div id="block-order-detail">&nbsp;</div>
		<?php }?>
	<?php }?>
	<ul class="footer_links clearfix">
		<li>
			<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
				<span>
					<i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Your Account','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

				</span>
			</a>
		</li>
		<li>
			<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
">
				<span>
					<i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

				</span>
			</a>
		</li>
	</ul>
</div>
<?php }
}
