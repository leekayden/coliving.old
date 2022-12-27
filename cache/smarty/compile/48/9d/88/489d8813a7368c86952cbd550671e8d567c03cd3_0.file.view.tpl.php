<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\search\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13961604_01592539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '489d8813a7368c86952cbd550671e8d567c03cd3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\search\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13961604_01592539 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
$(function() {
	$('#content .panel').highlight('<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
');
});
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
	<h2>
	<?php if ((isset($_smarty_tpl->tpl_vars['nb_results']->value)) && $_smarty_tpl->tpl_vars['nb_results']->value == 0) {?>
		<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no results matching your query "%s".','sprintf'=>$_smarty_tpl->tpl_vars['query']->value),$_smarty_tpl ) );?>
</h2>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['nb_results']->value)) && $_smarty_tpl->tpl_vars['nb_results']->value == 1) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 result matches your query "%s".','sprintf'=>$_smarty_tpl->tpl_vars['query']->value),$_smarty_tpl ) );?>

	<?php } elseif ((isset($_smarty_tpl->tpl_vars['nb_results']->value))) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d results match your query "%s".','sprintf'=>array(intval($_smarty_tpl->tpl_vars['nb_results']->value),$_smarty_tpl->tpl_vars['query']->value)),$_smarty_tpl ) );?>

	<?php }?>
	</h2>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['query']->value && (isset($_smarty_tpl->tpl_vars['nb_results']->value)) && $_smarty_tpl->tpl_vars['nb_results']->value) {?>

	<?php if ((isset($_smarty_tpl->tpl_vars['features']->value))) {?>
	<div class="panel">
		<h3>
			<?php if (count($_smarty_tpl->tpl_vars['features']->value) == 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 feature'),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d features','sprintf'=>count($_smarty_tpl->tpl_vars['features']->value)),$_smarty_tpl ) );?>

			<?php }?>
		</h3>
		<table class="table">
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature', false, 'key');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value, 'val', false, 'k', 'feature_list', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_feature_list']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_feature_list']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_feature_list']->value['index'];
?>
					<tr>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['link'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_feature_list']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_feature_list']->value['first'] : null)) {?>><strong><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</strong><?php }?></a></td>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
</a></td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['modules']->value)) && $_smarty_tpl->tpl_vars['modules']->value) {?>
	<div class="panel">
		<h3>
			<?php if (count($_smarty_tpl->tpl_vars['modules']->value) == 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 module'),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d modules','sprintf'=>count($_smarty_tpl->tpl_vars['modules']->value)),$_smarty_tpl ) );?>

			<?php }?>
		</h3>
		<table class="table">
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module', false, 'key');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
				<tr>
					<td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->linkto, ENT_QUOTES, 'UTF-8', true);?>
"><strong><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</strong></a></td>
					<td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->linkto, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value->description;?>
</a></td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
		</table>
	</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['categories']->value)) && $_smarty_tpl->tpl_vars['categories']->value) {?>
	<div class="panel">
		<h3>
			<?php if (count($_smarty_tpl->tpl_vars['categories']->value) == 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 category'),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d categories','sprintf'=>count($_smarty_tpl->tpl_vars['categories']->value)),$_smarty_tpl ) );?>

			<?php }?>
		</h3>
		<table class="table" style="border-spacing : 0; border-collapse : collapse;">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'key');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value) {?>
	<div class="panel">
		<h3>
			<?php if (count($_smarty_tpl->tpl_vars['products']->value) == 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 product'),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d products','sprintf'=>count($_smarty_tpl->tpl_vars['products']->value)),$_smarty_tpl ) );?>

			<?php }?>
		</h3>
		<?php echo $_smarty_tpl->tpl_vars['products']->value;?>

	</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['customers']->value)) && $_smarty_tpl->tpl_vars['customers']->value) {?>
	<div class="panel">
		<h3>
			<?php if (count($_smarty_tpl->tpl_vars['customers']->value) == 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 customer'),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d customers','sprintf'=>count($_smarty_tpl->tpl_vars['customers']->value)),$_smarty_tpl ) );?>

			<?php }?>
		</h3>
		<?php echo $_smarty_tpl->tpl_vars['customers']->value;?>

	</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['orders']->value)) && $_smarty_tpl->tpl_vars['orders']->value) {?>
	<div class="panel">
		<h3>
			<?php if (count($_smarty_tpl->tpl_vars['orders']->value) == 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 order'),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d orders','sprintf'=>count($_smarty_tpl->tpl_vars['orders']->value)),$_smarty_tpl ) );?>

			<?php }?>
		</h3>
		<?php echo $_smarty_tpl->tpl_vars['orders']->value;?>

	</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['addons']->value)) && $_smarty_tpl->tpl_vars['addons']->value) {?>
	<div class="panel">
		<h3>
			<?php if (count($_smarty_tpl->tpl_vars['addons']->value) == 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 addon'),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d addons','sprintf'=>count($_smarty_tpl->tpl_vars['addons']->value)),$_smarty_tpl ) );?>

			<?php }?>
		</h3>
		<table class="table">
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon', false, 'key');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
				<tr>
					<td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
&amp;utm_source=back-office&amp;utm_medium=search&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="_blank"><strong><i class="icon-external-link-sign"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</strong></a></td>
					<td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
&amp;utm_source=back-office&amp;utm_medium=search&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="_blank"><?php if (is_string($_smarty_tpl->tpl_vars['addon']->value['description'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon']->value['description'],256,'...' )), ENT_QUOTES, 'UTF-8', true);
}?></a></td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
			<tfoot>
				<tr>
					<td colspan="2" class="text-center"><a href="http://addons.prestashop.com/search.php?search_query=<?php echo urlencode($_smarty_tpl->tpl_vars['query']->value);?>
&amp;utm_source=back-office&amp;utm_medium=search&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="_blank"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show more results...'),$_smarty_tpl ) );?>
</strong></a></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<?php }?>

<?php }?>
<div class="row">
	<div class="col-lg-4">
		<div class="panel">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search doc.prestashop.com'),$_smarty_tpl ) );?>
</h3>
			<a href="http://doc.prestashop.com/dosearchsite.action?spaceSearch=true&amp;queryString=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
&amp;utm_source=back-office&amp;utm_medium=search&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="btn btn-default _blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to the documentation'),$_smarty_tpl ) );?>
</a>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search addons.prestashop.com'),$_smarty_tpl ) );?>
</h3>
			<a href="http://addons.prestashop.com/search.php?search_query=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
&amp;utm_source=back-office&amp;utm_medium=search&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="btn btn-default _blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to Addons'),$_smarty_tpl ) );?>
</a>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search prestashop.com forum'),$_smarty_tpl ) );?>
</h3>
			<a href="https://www.google.fr/search?q=site%3Aprestashop.com%2Fforums%2F+<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="btn btn-default _blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to the Forum'),$_smarty_tpl ) );?>
</a>
		</div>
	</div>
</div>




<?php }
}
