<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockcategories\blockcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1131c369_36160801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22db5d839019b9d84ad1d16cf543e092a74f66d2' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1131c369_36160801 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['blockCategTree']->value && count($_smarty_tpl->tpl_vars['blockCategTree']->value['children'])) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h2 class="title_block">
		<?php if ((isset($_smarty_tpl->tpl_vars['currentCategory']->value))) {?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentCategory']->value->name, ENT_QUOTES, 'UTF-8', true);?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl ) );?>

		<?php }?>
	</h2>
	<div class="block_content">
		<ul class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
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
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div>
<!-- /Block categories module -->
<?php }
}
}
