<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:47:02
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae946347f62_48867203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0871b25653a08bc10a925ca39bcdfa2e0f09f2' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\nav.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:search_form.tpl' => 1,
  ),
),false)) {
function content_63aae946347f62_48867203 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bootstrap">
	<nav id="<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_menu) {?>nav-sidebar<?php } else { ?>nav-topbar<?php }?>" role="navigation">
		<?php if (!$_smarty_tpl->tpl_vars['tab']->value) {?>
			<div class="mainsubtablist" style="display:none;"></div>
		<?php }?>
		<ul class="menu">
			<li class="searchtab">
				<?php $_smarty_tpl->_subTemplateRender("file:search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"header_search",'show_clear_btn'=>1), 0, false);
?>
			</li>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['t']->value['active']) {?>
				<li class="maintab <?php if ($_smarty_tpl->tpl_vars['t']->value['current']) {?>active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])) {?>has_submenu<?php }?>" id="maintab-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
">
					<a href="<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs']) && (isset($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['href'], ENT_QUOTES, 'UTF-8', true);
}?>" class="title" >
						<i class="icon-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
"></i>
						<span><?php if ($_smarty_tpl->tpl_vars['t']->value['name'] == '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['class_name'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?></span>
					</a>
					<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])) {?>
						<ul class="submenu">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value['sub_tabs'], 't2');
$_smarty_tpl->tpl_vars['t2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t2']->value) {
$_smarty_tpl->tpl_vars['t2']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['t2']->value['active']) {?>
							<li id="subtab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['class_name'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['t2']->value['current']) {?> class="active"<?php }?>>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php if ($_smarty_tpl->tpl_vars['t2']->value['name'] == '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['class_name'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>
								</a>
							</li>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					<?php }?>
				</li>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify icon-rotate-90"></i>
		</span>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminNavBarBeforeEnd'),$_smarty_tpl ) );?>

	</nav>
</div>
<?php }
}
