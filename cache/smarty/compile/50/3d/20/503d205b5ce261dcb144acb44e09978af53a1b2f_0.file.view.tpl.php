<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\import\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11bd5923_13753435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '503d205b5ce261dcb144acb44e09978af53a1b2f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\import\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11bd5923_13753435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1713777676639e8c11bbbf79_51834623', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1713777676639e8c11bbbf79_51834623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1713777676639e8c11bbbf79_51834623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		var errorEmpty = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please name your data matching configuration in order to save it.','js'=>1),$_smarty_tpl ) );?>
';
		var current = 0;
		function showTable(nb) {
			$('#btn_left').disabled = null;
			$('#btn_right').disabled = null;
			if (nb <= 0) {
				nb = 0;
				$('#btn_left').disabled = 'true';
			}
			if (nb >= <?php echo $_smarty_tpl->tpl_vars['nb_table']->value;?>
 - 1) {
				nb = <?php echo $_smarty_tpl->tpl_vars['nb_table']->value;?>
 - 1;
				$('#btn_right').disabled = 'true';
			}
			$('#table' + current).hide();
			current = nb;
			$('#table' + current).show();
		}
		$(document).ready(function() {
			var btn_save_import = $('span[class~="process-icon-save-import"]').parent();
			var btn_submit_import = $('#import');
			if (btn_save_import.length > 0 && btn_submit_import.length > 0) {
				btn_submit_import.closest('.form-group').hide();
				btn_save_import.find('span').removeClass('process-icon-save-import');
				btn_save_import.find('span').addClass('process-icon-save');
				btn_save_import.click(function(){
					btn_submit_import.before('<input type="hidden" name="' + btn_submit_import.attr("name") + '" value="1" />');
					$('#import_form').submit();
				});
			}
			showTable(current);
		});
	<?php echo '</script'; ?>
>
	<div id="container-customer" class="panel">
		<h3><i class="icon-list-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View your data'),$_smarty_tpl ) );?>
</h3>
		<div class="alert alert-info">
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please match each column of your source CSV file to one of the destination columns.'),$_smarty_tpl ) );?>
</p>
		</div>
		<div class="form-horizontal">
			<div class="form-group" <?php if (!$_smarty_tpl->tpl_vars['import_matchs']->value) {?>style="display:none"<?php }?>>
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load a data matching configuration'),$_smarty_tpl ) );?>
</label>
				<div id="selectDivImportMatchs" class="col-lg-7">
					<select id="valueImportMatchs">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['import_matchs']->value, 'match');
$_smarty_tpl->tpl_vars['match']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['match']->value) {
$_smarty_tpl->tpl_vars['match']->do_else = false;
?>
							<option id="<?php echo $_smarty_tpl->tpl_vars['match']->value['id_import_match'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['match']->value['match'];?>
"><?php echo $_smarty_tpl->tpl_vars['match']->value['name'];?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="col-lg-2">
					<a id="loadImportMatchs" href="#" class="btn btn-default"><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load'),$_smarty_tpl ) );?>
</a>
					<a id="deleteImportMatchs" href="#" class="btn btn-default"><i class="icon-remove"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="newImportMatchs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save your data matching configuration'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-7">
					<input type="text" name="newImportMatchs" id="newImportMatchs" />		
				</div>
				<div class="col-lg-2">
					<a id="saveImportMatchs" class="btn btn-default" href="#"><i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</a>
				</div>
			</div>
		</div>
		<div id="error_duplicate_type" class="alert alert-warning" style="display:none;">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Two columns cannot have the same type of values'),$_smarty_tpl ) );?>

		</div>
		<div id="required_column" class="alert alert-warning" style="display:none;">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This column must be set:'),$_smarty_tpl ) );?>
 <span id="missing_column">&nbsp;</span>
		</div>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="import_form" name="import_form" class="form-horizontal">
			<input type="hidden" name="csv" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['csv'];?>
" />
			<input type="hidden" name="convert" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['convert'];?>
" />
			<input type="hidden" name="regenerate" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['regenerate'];?>
" />
			<input type="hidden" name="entity" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['entity'];?>
" />
			<input type="hidden" name="iso_lang" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['iso_lang'];?>
" />
			<?php if ($_smarty_tpl->tpl_vars['fields_value']->value['truncate']) {?>
				<input type="hidden" name="truncate" value="1" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['fields_value']->value['forceIDs']) {?>
				<input type="hidden" name="forceIDs" value="1" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['fields_value']->value['match_ref']) {?>
				<input type="hidden" name="match_ref" value="1" />
			<?php }?>
			<input type="hidden" name="separator" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['separator'];?>
" />
			<input type="hidden" name="multiple_value_separator" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['multiple_value_separator'];?>
" />
			<div class="form-group">
				<label class="control-label col-lg-3" for="skip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lines to skip'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<input class="fixed-width-sm" type="text" name="skip" id="skip" value="1" />
					<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This number indicates how many of the first lines of your CSV file should be skipped when importing the data. For instance set it to 1 if the first row of your file contains headers.'),$_smarty_tpl ) );?>
</p>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-12">
					<?php
$__section_nb_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nb_table']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nb_i_0_start = min(0, $__section_nb_i_0_loop);
$__section_nb_i_0_total = min(($__section_nb_i_0_loop - $__section_nb_i_0_start), $__section_nb_i_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_nb_i'] = new Smarty_Variable(array());
if ($__section_nb_i_0_total !== 0) {
for ($__section_nb_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nb_i']->value['index'] = $__section_nb_i_0_start; $__section_nb_i_0_iteration <= $__section_nb_i_0_total; $__section_nb_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nb_i']->value['index']++){
?>
						<?php $_smarty_tpl->_assignInScope('i', (isset($_smarty_tpl->tpl_vars['__smarty_section_nb_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nb_i']->value['index'] : null));?>
						<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value];?>

					<?php
}
}
?>
					<button id="btn_left" type="button" class="btn btn-default pull-left" onclick="showTable(current - 1);">
						<i class="icon-chevron-sign-left"></i>
					</button>
					<button id="btn_right" type="button" class="btn btn-default pull-right" onclick="showTable(current + 1);">
						<i class="icon-chevron-sign-right"></i>
					</button>
				</div>
			</div>
			<div class="panel-footer">
				<button type="button" class="btn btn-default" onclick="window.history.back();">
					<i class="process-icon-cancel text-danger"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

				</button>
				<button id="import" name="import" type="submit" onclick="return (validateImportation(new Array(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
)));"  class="btn btn-default pull-right">
					<i class="process-icon-ok text-success"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import .CSV data'),$_smarty_tpl ) );?>

				</button>
			</div>
		</form>
	</div>
<?php
}
}
/* {/block "override_tpl"} */
}
