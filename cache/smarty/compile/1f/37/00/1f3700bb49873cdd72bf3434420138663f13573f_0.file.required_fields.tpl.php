<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\helpers\required_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c14eb3418_71399708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f3700bb49873cdd72bf3434420138663f13573f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\helpers\\required_fields.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c14eb3418_71399708 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="btn btn-default" href="#" onclick="if ($('.requiredFieldsParameters:visible').length == 0) $('.requiredFieldsParameters').slideDown('slow'); else $('.requiredFieldsParameters').slideUp('slow'); return false;">
	<i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set required fields for this section'),$_smarty_tpl ) );?>

</a>
<div class="clearfix">&nbsp;</div>
<div style="display:none" class="panel requiredFieldsParameters">
	<h3><i class="icon-asterisk"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required Fields'),$_smarty_tpl ) );?>
</h3>
	<form name="updateFields" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;submitFields=1&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post">
		<div class="alert alert-info">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select the fields you would like to be required for this section.'),$_smarty_tpl ) );?>

		</div>
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th class="fixed-width-xs">
							<input type="checkbox" onclick="checkDelBoxes(this.form, 'fieldsBox[]', this.checked)" class="noborder" name="checkme">
						</th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Field Name'),$_smarty_tpl ) );?>
</span></th>
					</tr>
				</thead>
				<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_fields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
					<?php if (!in_array($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['required_class_fields']->value)) {?>
					<tr>
						<td class="noborder">
							<input type="checkbox" name="fieldsBox[]" value="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['field']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> checked="checked"<?php }?> />
						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						</td>
					</tr>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<button name="submitFields" type="submit" class="btn btn-default pull-right">
				<i class="process-icon-save "></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</span>
			</button>
		</div>
	</form>
</div><?php }
}
