<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blocklink\blocklink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c116514c0_65025433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00bcb4eefe9bd4b41d5d2cc1b000155e1d2d4ed9' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blocklink\\blocklink.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c116514c0_65025433 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block links module -->
<div id="links_block_left" class="block">
	<p class="title_block">
	<?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
	<?php } else { ?>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>

	<?php }?>
	</p>
    <div class="block_content list-block">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocklink_links']->value, 'blocklink_link');
$_smarty_tpl->tpl_vars['blocklink_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blocklink_link']->value) {
$_smarty_tpl->tpl_vars['blocklink_link']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value]))) {?> 
                    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['blocklink_link']->value['newWindow']) {?> onclick="window.open(this.href);return false;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<!-- /Block links module -->
<?php }
}
