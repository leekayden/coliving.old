<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\customization.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12d79fa3_69096721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '009a2a52bd5d78f7657bc831ecada29ea03ab06a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\customization.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/products/multishop/checkbox.tpl' => 2,
  ),
),false)) {
function content_639e8c12d79fa3_69096721 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['obj']->value->id))) {?>
<div id="product-customization" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Customization" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add or modify customizable properties'),$_smarty_tpl ) );?>
</h3>

	<?php if ((isset($_smarty_tpl->tpl_vars['display_common_field']->value)) && $_smarty_tpl->tpl_vars['display_common_field']->value) {?>
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning, if you change the value of fields with an orange bullet %s, the value will be changed for all other shops for this product','sprintf'=>$_smarty_tpl->tpl_vars['bullet_common_field']->value),$_smarty_tpl ) );?>
</div>
	<?php }?>

	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"uploadable_files",'type'=>"uploadable_files"), 0, false);
?></span></div>
		<label class="control-label col-lg-3" for="uploadable_files">
			<?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>

			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of upload file fields to be displayed to the user.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File fields'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-1">
			<input type="text" name="uploadable_files" id="uploadable_files" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['uploadable_files']->value);?>
" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"text_fields",'type'=>"text_fields"), 0, true);
?></span></div>
		<label class="control-label col-lg-3" for="text_fields">
			<?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>

			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of text fields to be displayed to the user.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text fields'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-1">
			<input type="text" name="text_fields" id="text_fields" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['text_fields']->value);?>
" />
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['has_file_labels']->value) {?>
	<hr/>
	<div class="form-group">
		<label class="control-label col-lg-3">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Define the label of the file fields'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-9">
			<?php echo $_smarty_tpl->tpl_vars['display_file_labels']->value;?>

		</div>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['has_text_labels']->value) {?>
	<hr/>
	<div class="form-group">
		<label class="control-label col-lg-3">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Define the label of the text fields'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-9">
			<?php echo $_smarty_tpl->tpl_vars['display_text_labels']->value;?>

		</div>
	</div>
	<?php }?>
	<div class="panel-footer">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
	</div>
</div>
<?php }
}
}
