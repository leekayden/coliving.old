<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\modules\tab_modules_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1244aa27_32266542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2426c188e43ff9fa5b8c232a4894429a84bc26e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\modules\\tab_modules_list.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/modules/tab_module_line.tpl' => 2,
  ),
),false)) {
function content_639e8c1244aa27_32266542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)) && !empty($_smarty_tpl->tpl_vars['tab_modules_list']->value)) {?>
	<div class="row row-margin-bottom">
		<div class="col-lg-12">
			<ul class="nav nav-pills">
				<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])) {?>
					<li class="active">
						<a href="#tab_modules_list_not_installed" data-toggle="tab">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not Installed'),$_smarty_tpl ) );?>

						</a>
					</li>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])) {?>
					<li <?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed']) == 0) {?>class="active"<?php }?>>
						<a href="#tab_modules_list_installed" data-toggle="tab">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Installed'),$_smarty_tpl ) );?>

						</a>
					</li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div id="modules_list_container_content" class="tab-content modal-content-overflow">
		<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])) {?>
		<div class="tab-pane active" id="tab_modules_list_not_installed">
			<table id="tab_modules_list_not_installed" class="table">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'], 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
					<?php ob_start();
echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_row'=>$_prefixVariable6), 0, true);
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
		</div>
		<?php }?>
		<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])) {?>
		<div class="tab-pane <?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed']) == 0) {?>active<?php }?>" id="tab_modules_list_installed">
			<table id="tab_modules_list_installed" class="table">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'], 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
					<?php ob_start();
echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_row'=>$_prefixVariable7), 0, true);
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
		</div>
		<?php }?>
	</div>
<?php }?>
<div class="alert alert-addons row-margin-top">
	<a href="https://qloapps.com/addons" onclick="return !window.open(this.href);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More modules on qloapps.com/addons/'),$_smarty_tpl ) );?>
</a>
</div>
<?php }
}
