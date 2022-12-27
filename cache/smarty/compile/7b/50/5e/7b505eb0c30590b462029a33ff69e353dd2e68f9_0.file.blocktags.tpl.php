<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blocktags\blocktags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11969881_42663811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b505eb0c30590b462029a33ff69e353dd2e68f9' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blocktags\\blocktags.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11969881_42663811 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block tags module -->
<div id="tags_block_left" class="block tags_block">
	<p class="title_block">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags','mod'=>'blocktags'),$_smarty_tpl ) );?>

	</p>
	<div class="block_content">
		<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag', false, NULL, 'myLoop', array (
  'last' => true,
  'first' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
				<a 
				class="<?php echo $_smarty_tpl->tpl_vars['tag']->value['class'];?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } else { ?>item<?php }?>"
				href="<?php ob_start();
echo urlencode($_smarty_tpl->tpl_vars['tag']->value['name']);
$_prefixVariable17=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,NULL,"tag=".$_prefixVariable17), ENT_QUOTES, 'UTF-8', true);?>
" 
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about','mod'=>'blocktags'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" 
				>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

				</a>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No tags specified yet','mod'=>'blocktags'),$_smarty_tpl ) );?>

		<?php }?>
	</div>
</div>
<!-- /Block tags module -->
<?php }
}
