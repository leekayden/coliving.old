<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\cms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10a86df1_48076662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2abf4bb869838f2875bcc5fee3f2f50ab915544' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\cms.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10a86df1_48076662 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['cms']->value)) && !(isset($_smarty_tpl->tpl_vars['cms_category']->value))) {?>
	<?php if (!$_smarty_tpl->tpl_vars['cms']->value->active) {?>
		<br />
		<div id="admin-action-cms">
			<p>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This CMS page is not visible to your customers.'),$_smarty_tpl ) );?>
</span>
				<input type="hidden" id="admin-action-cms-id" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value->id;?>
" />
				<input type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Publish'),$_smarty_tpl ) );?>
" name="publish_button" class="button btn btn-default"/>
				<input type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back'),$_smarty_tpl ) );?>
" name="lnk_view" class="button btn btn-default"/>
			</p>
			<div class="clear" ></div>
			<p id="admin-action-result"></p>
		</div>
	<?php }?>
	<div class="rte<?php if ($_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?>">
		<?php echo $_smarty_tpl->tpl_vars['cms']->value->content;?>

	</div>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['cms_category']->value))) {?>
	<div class="block-cms">
		<h1><a href="<?php if ($_smarty_tpl->tpl_vars['cms_category']->value->id == 1) {
if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['cms_category']->value->id,$_smarty_tpl->tpl_vars['cms_category']->value->link_rewrite);
}?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h1>
		<?php if ($_smarty_tpl->tpl_vars['cms_category']->value->description) {?>
			<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</p>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['sub_category']->value)) && !empty($_smarty_tpl->tpl_vars['sub_category']->value)) {?>	
			<p class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of sub categories in %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl ) );?>
</p>
			<ul class="bullet list-group">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_category']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
					<li>
						<a class="list-group-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_cms_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['cms_pages']->value)) && !empty($_smarty_tpl->tpl_vars['cms_pages']->value)) {?>
		<p class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of pages in %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl ) );?>
</p>
			<ul class="bullet list-group">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_pages']->value, 'cmspages');
$_smarty_tpl->tpl_vars['cmspages']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cmspages']->value) {
$_smarty_tpl->tpl_vars['cmspages']->do_else = false;
?>
					<li>
						<a class="list-group-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['cmspages']->value['id_cms'],$_smarty_tpl->tpl_vars['cmspages']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmspages']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	</div>
<?php } else { ?>
	<div class="alert alert-danger">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This page does not exist.'),$_smarty_tpl ) );?>

	</div>
<?php }?>
<br />
<?php if ((isset($_GET['ad'])) && $_GET['ad']) {
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'ad'));
$_block_repeat=true;
echo $_block_plugin2->addJsDefL(array('name'=>'ad'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars(($_smarty_tpl->tpl_vars['base_dir']->value).($_GET['ad']), ENT_QUOTES, 'UTF-8', true);
$_block_repeat=false;
echo $_block_plugin2->addJsDefL(array('name'=>'ad'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_GET['adtoken'])) && $_GET['adtoken']) {
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'adtoken'));
$_block_repeat=true;
echo $_block_plugin3->addJsDefL(array('name'=>'adtoken'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);
$_block_repeat=false;
echo $_block_plugin3->addJsDefL(array('name'=>'adtoken'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
