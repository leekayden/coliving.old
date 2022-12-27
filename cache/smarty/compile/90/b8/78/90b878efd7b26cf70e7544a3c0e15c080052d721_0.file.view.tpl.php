<?php
/* Smarty version 3.1.39, created on 2022-12-27 13:31:48
  from 'C:\xampp2\htdocs\coliving\modules\hotelreservationsystem\views\templates\admin\hotel_features\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaf3c48a9477_27466389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90b878efd7b26cf70e7544a3c0e15c080052d721' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\hotelreservationsystem\\views\\templates\\admin\\hotel_features\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaf3c48a9477_27466389 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
	<div class="panel-heading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Features','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

	</div>
	<div class="row">
		<form method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['submit_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}?>&token=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="defaultForm form-horizontal features_list_form" enctype="multipart/form-data">
			<?php if ($_smarty_tpl->tpl_vars['features_list']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features_list']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
					<div class="col-sm-12 feature_div" id="grand_feature_div_<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
						<div class="row row-margin-bottom row-margin-top">
							<div class="col-sm-12">
								<div class="row feature-border-div">
									<div class="col-sm-12 feature-header-div">
										<span><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['name'];
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable1,'mod'=>'hotelreservationsyatem'),$_smarty_tpl ) );?>
</span>
										<a class="btn btn-primary pull-right edit_feature col-sm-1" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminHotelFeatures');?>
&amp;updatehtl_features&amp;id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span><i class="icon-pencil"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</span></a>
										<button class="btn btn-primary pull-right dlt-feature col-sm-1" data-feature-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-trash"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</button>
									</div>
								</div>
							</div>
						</div>
						<div class="row child-features-container">
							<div class="col-sm-12">
								<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['children'])) && $_smarty_tpl->tpl_vars['value']->value['children']) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['children'], 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
										<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['val']->value['name'];
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable2,'mod'=>'hotelreservationsyatem'),$_smarty_tpl ) );?>
</p>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
							</div>
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<div class="alert alert-warning">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No hotel features found. Start adding new features for the hotels.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

				</div>
			<?php }?>
		</form>
	</div>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('delete_url'=>$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminHotelFeatures'),'js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'success_delete_msg'));
$_block_repeat=true;
echo $_block_plugin1->addJsDefL(array('name'=>'success_delete_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Successfully Deleted.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin1->addJsDefL(array('name'=>'success_delete_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'error_delete_msg'));
$_block_repeat=true;
echo $_block_plugin2->addJsDefL(array('name'=>'error_delete_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occured while deleting feature.Please try again.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin2->addJsDefL(array('name'=>'error_delete_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'no_feature_warning_txt'));
$_block_repeat=true;
echo $_block_plugin3->addJsDefL(array('name'=>'no_feature_warning_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No hotel features found. Start adding new features for the hotels.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin3->addJsDefL(array('name'=>'no_feature_warning_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'confirm_delete_msg'));
$_block_repeat=true;
echo $_block_plugin4->addJsDefL(array('name'=>'confirm_delete_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin4->addJsDefL(array('name'=>'confirm_delete_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
