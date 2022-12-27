<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blocknewsletter\blocknewsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11721418_34820254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bccbbecb8a54138dabc60f5fb38bbe243d9b3934' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blocknewsletter\\blocknewsletter.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11721418_34820254 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block Newsletter module-->
<div class="row">
    <section class="col-xs-12 col-sm-12">
        <div class="row margin-lr-0 footer-section-heading">
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GET NOTIFICATIONS','mod'=>'blocknewsletter'),$_smarty_tpl ) );?>
</p>
            <hr/>
        </div>
        <div class="row margin-lr-0">
            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
                <div class="form-group<?php if ((isset($_smarty_tpl->tpl_vars['msg']->value)) && $_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }
}?>" >
                    <input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php if ((isset($_smarty_tpl->tpl_vars['msg']->value)) && $_smarty_tpl->tpl_vars['msg']->value) {
echo $_smarty_tpl->tpl_vars['msg']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['value']->value)) && $_smarty_tpl->tpl_vars['value']->value) {
echo $_smarty_tpl->tpl_vars['value']->value;
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl ) );
}?>" />
                                        <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

                    <?php }?>
                    <button type="submit" name="submitNewsletter" class="btn button button-medium newsletter-btn">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','mod'=>'blocknewsletter'),$_smarty_tpl ) );?>
</span>
                    </button>
                    <input type="hidden" name="action" value="0" />
                </div>
            </form>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBlockNewsletterBottom",'from'=>'blocknewsletter'),$_smarty_tpl ) );?>

    </section>
</div>
<!-- /Block Newsletter module-->
<?php if ((isset($_smarty_tpl->tpl_vars['msg']->value)) && $_smarty_tpl->tpl_vars['msg']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('msg_newsl'=>addcslashes($_smarty_tpl->tpl_vars['msg']->value,'\'')),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['nw_error']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('nw_error'=>$_smarty_tpl->tpl_vars['nw_error']->value),$_smarty_tpl ) );
}
$_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'placeholder_blocknewsletter'));
$_block_repeat=true;
echo $_block_plugin33->addJsDefL(array('name'=>'placeholder_blocknewsletter'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin33->addJsDefL(array('name'=>'placeholder_blocknewsletter'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'email_js_error'));
$_block_repeat=true;
echo $_block_plugin34->addJsDefL(array('name'=>'email_js_error'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please Enter Valid E-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin34->addJsDefL(array('name'=>'email_js_error'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ((isset($_smarty_tpl->tpl_vars['msg']->value)) && $_smarty_tpl->tpl_vars['msg']->value) {
$_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'alert_blocknewsletter'));
$_block_repeat=true;
echo $_block_plugin35->addJsDefL(array('name'=>'alert_blocknewsletter'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter : %1$s','sprintf'=>$_smarty_tpl->tpl_vars['msg']->value,'js'=>1,'mod'=>"blocknewsletter"),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin35->addJsDefL(array('name'=>'alert_blocknewsletter'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
