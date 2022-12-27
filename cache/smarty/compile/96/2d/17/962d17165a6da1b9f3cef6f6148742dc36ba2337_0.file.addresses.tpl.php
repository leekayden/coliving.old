<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c107494e2_50524077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '962d17165a6da1b9f3cef6f6148742dc36ba2337' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\addresses.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c107494e2_50524077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses'),$_smarty_tpl ) );?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses'),$_smarty_tpl ) );?>
</h1>
<?php if ((isset($_smarty_tpl->tpl_vars['multipleAddresses']->value)) && $_smarty_tpl->tpl_vars['multipleAddresses']->value) {?>
<div class="addresses">
	<p><strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your addresses are listed below.'),$_smarty_tpl ) );?>
</strong></p>
	<p class="p-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be sure to update your personal information if it has changed.'),$_smarty_tpl ) );?>
</p>
	<?php $_smarty_tpl->_assignInScope('adrs_style', $_smarty_tpl->tpl_vars['addresses_style']->value);?>
	<div class="bloc_adresses row">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['multipleAddresses']->value, 'address', false, NULL, 'myLoop', array (
  'last' => true,
  'first' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
    	<div class="col-xs-12 col-sm-6 address">
			<ul class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%2) {?> alternate_item<?php } else { ?> item<?php }?> box">
                <li><h3 class="page-subheading"><?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
</h3></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value['ordered'], 'pattern', false, NULL, 'adr_loop', array (
));
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('addressKey', explode(" ",$_smarty_tpl->tpl_vars['pattern']->value));?>
                    <li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addressKey']->value, 'key', false, NULL, 'word_loop', array (
));
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['address']->value['formated'][smarty_modifier_replace($_smarty_tpl->tpl_vars['key']->value,',','')]))) {?>
							<span <?php if ((isset($_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?> class="<?php echo $_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"<?php }?>>
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['formated'][smarty_modifier_replace($_smarty_tpl->tpl_vars['key']->value,',','')], ENT_QUOTES, 'UTF-8', true);?>

							</span>
						<?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <li class="address_update">
                <a class="btn btn-default button button-small" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"id_address=".$_prefixVariable1), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></a>
                <a class="btn btn-default button button-small" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"id_address=".$_prefixVariable2."&delete"), ENT_QUOTES, 'UTF-8', true);?>
" data-id="addresses_confirm" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
<i class="icon-remove right"></i></span></a></li>
            </ul>
        </div>
	<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%2 && !(isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>
	</div>
	<div class="bloc_adresses row">
	<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php } else { ?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No addresses are available.'),$_smarty_tpl ) );?>
&nbsp;<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new address'),$_smarty_tpl ) );?>
</a></p>
<?php }?>
<div class="clearfix main-page-indent">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add an address'),$_smarty_tpl ) );?>
" class="btn btn-default button button-medium"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new address'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></a>
</div>
<ul class="footer_links clearfix">
	<li><a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account'),$_smarty_tpl ) );?>
</span></a></li>
	<li><a class="btn btn-default button button-small" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>"><span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>
</span></a></li>
</ul>
<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'addressesConfirm'));
$_block_repeat=true;
echo $_block_plugin1->addJsDefL(array('name'=>'addressesConfirm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin1->addJsDefL(array('name'=>'addressesConfirm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
