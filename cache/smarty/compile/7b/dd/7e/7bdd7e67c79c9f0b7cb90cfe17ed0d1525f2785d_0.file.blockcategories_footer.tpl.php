<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockcategories\blockcategories_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1135af35_70995865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bdd7e67c79c9f0b7cb90cfe17ed0d1525f2785d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockcategories\\blockcategories_footer.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1135af35_70995865 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block categories module -->
<section class="blockcategories_footer footer-block col-xs-12 col-sm-2">
	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl ) );?>
</h4>
	<div class="category_footer toggle-footer">
		<div class="list">
			<ul class="<?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blockCategTree']->value['children'], 'child', false, NULL, 'blockCategTree', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['total'];
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['last'] : null)) {?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0, true);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0, true);
?>
				<?php }?>
			
				<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['iteration'] : null) % $_smarty_tpl->tpl_vars['numberColumn']->value) == 0 && !(isset($_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blockCategTree']->value['last'] : null)) {?>
			</ul>
		</div>
	</div> <!-- .category_footer -->

	<div class="category_footer">
		<div class="list">
			<ul class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div> <!-- .category_footer -->
</section>
<!-- /Block categories module -->
<?php }
}
