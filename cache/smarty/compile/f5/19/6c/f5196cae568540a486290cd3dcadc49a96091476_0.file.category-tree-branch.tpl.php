<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockcategories\category-tree-branch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11398531_95786727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5196cae568540a486290cd3dcadc49a96091476' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11398531_95786727 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li <?php if ((isset($_smarty_tpl->tpl_vars['last']->value)) && $_smarty_tpl->tpl_vars['last']->value == 'true') {?>class="last"<?php }?>>
	<a 
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['currentCategoryId']->value)) && $_smarty_tpl->tpl_vars['node']->value['id'] == $_smarty_tpl->tpl_vars['currentCategoryId']->value) {?> class="selected"<?php }?> title="<?php echo htmlspecialchars(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['desc'])), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

	</a>
	<?php if (count($_smarty_tpl->tpl_vars['node']->value['children']) > 0) {?>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['children'], 'child', false, NULL, 'categoryTreeBranch', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['total'];
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last'] : null)) {?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0, true);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false'), 0, true);
?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }?>
</li>
<?php }
}
