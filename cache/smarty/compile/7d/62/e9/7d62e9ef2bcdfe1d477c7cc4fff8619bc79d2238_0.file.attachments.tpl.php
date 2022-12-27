<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\attachments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12bdf621_49189564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d62e9ef2bcdfe1d477c7cc4fff8619bc79d2238' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\attachments.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/products/input_text_lang.tpl' => 1,
    'file:controllers/products/textarea_lang.tpl' => 1,
  ),
),false)) {
function content_639e8c12bdf621_49189564 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['obj']->value->id))) {?>
<div id="product-attachements" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Attachments" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachment'),$_smarty_tpl ) );?>
</h3>

	<div class="form-group">
		<label class="control-label col-lg-3 required" for="attachment_name_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip"
			title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximum 32 characters.'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filename'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-9">
			<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['attachment_name']->value,'input_name'=>"attachment_name"), 0, false);
?>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="attachment_description_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-9">
			<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/textarea_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>"attachment_description",'input_value'=>$_smarty_tpl->tpl_vars['attachment_description']->value), 0, false);
?>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="attachement_filename">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload a file from your computer'),$_smarty_tpl ) );?>
 (<?php echo sprintf('%.2f',Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE'));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MB max.'),$_smarty_tpl ) );?>
)">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File'),$_smarty_tpl ) );?>

			</span>
		</label>
		<?php echo $_smarty_tpl->tpl_vars['attachment_uploader']->value;?>

		<div class="col-lg-3">
		&nbsp;
		</div>
		<div class="col-lg-8">
			<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload a file from your computer'),$_smarty_tpl ) );?>
 (<?php echo sprintf('%.2f',Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE'));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MB max.'),$_smarty_tpl ) );?>
)</p>
		</div>
	</div>

	<hr/>

	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<div class="row">
				<div class="col-lg-6">
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available attachments:'),$_smarty_tpl ) );?>
</p>
					<select multiple id="selectAttachment2">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attach2']->value, 'attach');
$_smarty_tpl->tpl_vars['attach']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attach']->value) {
$_smarty_tpl->tpl_vars['attach']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['attach']->value['id_attachment'];?>
"><?php echo $_smarty_tpl->tpl_vars['attach']->value['name'];?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<a href="#" id="addAttachment" class="btn btn-default btn-block">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>

						<i class="icon-arrow-right"></i>
					</a>
				</div>
				<div class="col-lg-6">
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments for this product:'),$_smarty_tpl ) );?>
</p>
					<select multiple id="selectAttachment1" name="attachments[]">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attach1']->value, 'attach');
$_smarty_tpl->tpl_vars['attach']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attach']->value) {
$_smarty_tpl->tpl_vars['attach']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['attach']->value['id_attachment'];?>
"><?php echo $_smarty_tpl->tpl_vars['attach']->value['name'];?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<a href="#" id="removeAttachment" class="btn btn-default btn-block">
						<i class="icon-arrow-left"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );?>

					</a>
				</div>
			</div>
		</div>
	</div>
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

	<input type="hidden" name="arrayAttachments" id="arrayAttachments" value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attach1']->value, 'attach');
$_smarty_tpl->tpl_vars['attach']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attach']->value) {
$_smarty_tpl->tpl_vars['attach']->do_else = false;
echo $_smarty_tpl->tpl_vars['attach']->value['id_attachment'];?>
,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>" />

	<?php echo '<script'; ?>
 type="text/javascript">
		var iso = '<?php echo $_smarty_tpl->tpl_vars['iso_tiny_mce']->value;?>
';
		var pathCSS = '<?php echo (defined('_THEME_CSS_DIR_') ? constant('_THEME_CSS_DIR_') : null);?>
';
		var ad = '<?php echo $_smarty_tpl->tpl_vars['ad']->value;?>
';

		if (tabs_manager.allow_hide_other_languages)
			hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['default_form_language']->value;?>
);
	<?php echo '</script'; ?>
>
</div>
<?php }
}
}
