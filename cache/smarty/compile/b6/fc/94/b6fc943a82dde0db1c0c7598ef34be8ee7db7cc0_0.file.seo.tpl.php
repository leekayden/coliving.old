<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\seo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c134d1725_49744860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6fc943a82dde0db1c0c7598ef34be8ee7db7cc0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\seo.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/products/multishop/check_fields.tpl' => 1,
    'file:controllers/products/multishop/checkbox.tpl' => 4,
    'file:controllers/products/input_text_lang.tpl' => 3,
    'file:controllers/products/textarea_lang.tpl' => 1,
  ),
),false)) {
function content_639e8c134d1725_49744860 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="product-seo" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Seo" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SEO'),$_smarty_tpl ) );?>
</h3>
	<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab'=>"Seo"), 0, false);
?>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"meta_title",'type'=>"default",'multilang'=>"true"), 0, false);
?></span></div>
		<label class="control-label col-lg-2" for="meta_title_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Public title for the product\'s page, and for search engines. Leave blank to use the room type name.'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The number of remaining characters is displayed to the left of the field.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meta title'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-8">
			<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>'meta_title','input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_title,'maxchar'=>70), 0, false);
?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"meta_description",'type'=>"default",'multilang'=>"true"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="meta_description_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This description will appear in search engines. You need a single sentence, shorter than 160 characters (including spaces).'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meta description'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-8">
			<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/textarea_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>'meta_description','input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_description,'maxchar'=>160), 0, false);
?>
		</div>
	</div>
		<div class="form-group hide">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"meta_keywords",'type'=>"default",'multilang'=>"true"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Keywords for search engines, separated by commas.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meta keywords'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-8">
			<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_keywords,'input_name'=>'meta_keywords'), 0, true);
?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"link_rewrite",'type'=>"seo_friendly_url",'multilang'=>"true"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="link_rewrite_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This is the human-readable URL, as generated from the room type\'s name. You can change it if you want.'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Friendly URL:'),$_smarty_tpl ) );?>

			</span>

		</label>
		<div class="col-lg-6">
				<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->link_rewrite,'input_name'=>'link_rewrite'), 0, true);
?>
		</div>
		<div class="col-lg-2">
			<button type="button" class="btn btn-default" id="generate-friendly-url" onmousedown="updateFriendlyURLByName();"><i class="icon-random"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate'),$_smarty_tpl ) );?>
</button>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-9 col-lg-offset-3">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			<div class="alert alert-warning translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
				<i class="icon-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product link will look like this:'),$_smarty_tpl ) );?>
<br/>
				<strong><?php if ((isset($_smarty_tpl->tpl_vars['rewritten_links']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']][0]))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['rewritten_links']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']][0], ENT_QUOTES, 'UTF-8', true);
}?><span id="friendly-url_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->link_rewrite[$_smarty_tpl->tpl_vars['language']->value['id_lang']], ENT_QUOTES, 'UTF-8', true);?>
</span><?php if ((isset($_smarty_tpl->tpl_vars['rewritten_links']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']][1]))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['rewritten_links']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']][1], ENT_QUOTES, 'UTF-8', true);
}?></strong>
			</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	if (tabs_manager.allow_hide_other_languages)
		hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['default_form_language']->value;?>
);
<?php echo '</script'; ?>
>
<?php }
}
