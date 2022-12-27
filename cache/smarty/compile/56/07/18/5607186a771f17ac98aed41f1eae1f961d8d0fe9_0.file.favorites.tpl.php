<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\modules\favorites.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12215cc6_00933905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5607186a771f17ac98aed41f1eae1f961d8d0fe9' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\modules\\favorites.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c12215cc6_00933905 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<div class="panel-heading">
		<i class="icon-list-ul"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules list'),$_smarty_tpl ) );?>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="btn-group pull-right">
				<a class="btn btn-default <?php if (!(isset($_GET['select']))) {?> active<?php }?>" href="index.php?controller=<?php echo htmlentities($_GET['controller']);?>
&amp;token=<?php echo htmlentities($_GET['token']);?>
">
					<i class="icon-list"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Normal view'),$_smarty_tpl ) );?>
 
				</a>
				<a class="btn btn-default <?php if ($_GET['select'] == 'favorites') {?> active<?php }?>" href="javascript:void(0);">
					<i class="icon-star"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Favorites view'),$_smarty_tpl ) );?>

				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="container" class="col-lg-12">
			<div id="moduleContainer">
				<table class="table">
					<thead>
						<tr class="nodrag nodrop">
							<th colspan="2"></th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Interest'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Favorite'),$_smarty_tpl ) );?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module', false, 'km');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['km']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "moduleStatusClass", null, null);?>
								<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->id)) && $_smarty_tpl->tpl_vars['module']->value->id > 0) {?>
									module_active
								<?php } else { ?>
									module_inactive
								<?php }?>
							<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<tr>
								<td width="10px" class="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'moduleStatusClass');?>
"></td>
								<td width="40px">
									<img src="<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->image))) {
echo $_smarty_tpl->tpl_vars['module']->value->image;
} else { ?>../modules/<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;
}?>" width="32" height="32" />
								</td>
								<td class="moduleName">
									<h4><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</h4>
									<span class="moduleFavDesc text-muted"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->description,80,'...' ));?>
</span>
								</td>
								<td width="240px">
									<?php $_smarty_tpl->_assignInScope('module_name', $_smarty_tpl->tpl_vars['module']->value->name);?>
									<select name="t_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" multiple="multiple" class="chosen moduleTabPreferencesChoise">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
											<?php if ($_smarty_tpl->tpl_vars['t']->value['active']) {?>
												<option <?php if ((isset($_smarty_tpl->tpl_vars['tab_modules_preferences']->value[$_smarty_tpl->tpl_vars['module_name']->value])) && in_array($_smarty_tpl->tpl_vars['t']->value['id_tab'],$_smarty_tpl->tpl_vars['tab_modules_preferences']->value[$_smarty_tpl->tpl_vars['module_name']->value])) {?> selected="selected" <?php }?> class="group" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
"><?php if ($_smarty_tpl->tpl_vars['t']->value['name'] == '') {
echo $_smarty_tpl->tpl_vars['t']->value['class_name'];
} else {
echo $_smarty_tpl->tpl_vars['t']->value['name'];
}?></option>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value['sub_tabs'], 't2');
$_smarty_tpl->tpl_vars['t2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t2']->value) {
$_smarty_tpl->tpl_vars['t2']->do_else = false;
?>
													<?php if ($_smarty_tpl->tpl_vars['t2']->value['active']) {?>
														<?php $_smarty_tpl->_assignInScope('id_tab', $_smarty_tpl->tpl_vars['t']->value['id_tab']);?>
														<option <?php if ((isset($_smarty_tpl->tpl_vars['tab_modules_preferences']->value[$_smarty_tpl->tpl_vars['module_name']->value])) && in_array($_smarty_tpl->tpl_vars['t2']->value['id_tab'],$_smarty_tpl->tpl_vars['tab_modules_preferences']->value[$_smarty_tpl->tpl_vars['module_name']->value])) {?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['t2']->value['id_tab'];?>
"><?php if ($_smarty_tpl->tpl_vars['t2']->value['name'] == '') {
echo $_smarty_tpl->tpl_vars['t2']->value['class_name'];
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?></option>
													<?php }?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
								<td>
									<span><?php echo $_smarty_tpl->tpl_vars['module']->value->categoryName;?>
</span>
								</td>
								<td>
									<select name="i_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" class="moduleFavorite">
										<option value="" selected="selected">-</option>
										<option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['module']->value->preferences['interest'])) && $_smarty_tpl->tpl_vars['module']->value->preferences['interest'] == '1') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</option>
										<option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['module']->value->preferences['interest'])) && $_smarty_tpl->tpl_vars['module']->value->preferences['interest'] == '0') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</option>
									</select>
								</td>
								<td>
									<select name="f_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" class="moduleFavorite">
										<option value="" selected="selected">-</option>
										<option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['module']->value->preferences['favorite'])) && $_smarty_tpl->tpl_vars['module']->value->preferences['favorite'] == '1') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</option>
										<option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['module']->value->preferences['favorite'])) && $_smarty_tpl->tpl_vars['module']->value->preferences['favorite'] == '0') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</option>
									</select>
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php }
}
