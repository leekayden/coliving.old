<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\themes\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1426ec41_25535026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '730e92c524f5cf13db73de42a0e07673ef29052d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\themes\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1426ec41_25535026 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('The "%1$s" theme has been successfully installed.',$_smarty_tpl->tpl_vars['theme_name']->value)),$_smarty_tpl ) );?>

</div>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterThemeInstallation','theme_name'=>$_smarty_tpl->tpl_vars['theme_name']->value),$_smarty_tpl ) );?>


<?php if (count($_smarty_tpl->tpl_vars['doc']->value) > 0) {?>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <li><i><a class="_blank" href="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></i>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
if (count($_smarty_tpl->tpl_vars['modules_errors']->value) > 0) {?>
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The following module(s) were not installed properly:'),$_smarty_tpl ) );?>

        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_errors']->value, 'module_errors');
$_smarty_tpl->tpl_vars['module_errors']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module_errors']->value) {
$_smarty_tpl->tpl_vars['module_errors']->do_else = false;
?>
                <li>
                   <b><?php echo $_smarty_tpl->tpl_vars['module_errors']->value['module_name'];?>
</b> : <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_errors']->value['errors'], 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?><br>  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }?>
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning: You may have to regenerate images to fit with this new theme.'),$_smarty_tpl ) );?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['image_link']->value;?>
">
        <button class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to the thumbnails regeneration page'),$_smarty_tpl ) );?>
</button>
    </a>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['img_error']->value['error']))) {?>
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning: Copy/paste your errors if you want to manually set the image type (in the "Images" page under the "Preferences" menu):'),$_smarty_tpl ) );?>

        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['img_error']->value['error'], 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <li>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name image type:'),$_smarty_tpl ) );?>
 <strong><?php echo $_smarty_tpl->tpl_vars['error']->value['name'];?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(width: %1$spx, height: %2$spx).',$_smarty_tpl->tpl_vars['error']->value['width'],$_smarty_tpl->tpl_vars['error']->value['height'])),$_smarty_tpl ) );?>

                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

    </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['img_error']->value['ok']))) {?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Images have been correctly updated in the database:'),$_smarty_tpl ) );?>

        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['img_error']->value['ok'], 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <li>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name image type:'),$_smarty_tpl ) );?>
 <strong><?php echo $_smarty_tpl->tpl_vars['error']->value['name'];?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(width: %1$spx, height: %2$spx).',$_smarty_tpl->tpl_vars['error']->value['width'],$_smarty_tpl->tpl_vars['error']->value['height'])),$_smarty_tpl ) );?>

                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

    </div>
<?php }?>

<a href="<?php echo $_smarty_tpl->tpl_vars['back_link']->value;?>
">
    <button class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Finish'),$_smarty_tpl ) );?>
</button>
</a>

<?php }
}
