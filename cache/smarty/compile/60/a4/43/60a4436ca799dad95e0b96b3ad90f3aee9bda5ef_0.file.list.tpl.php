<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\helpers\shops_list\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c14edcf19_67507618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a4436ca799dad95e0b96b3ad90f3aee9bda5ef' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\helpers\\shops_list\\list.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c14edcf19_67507618 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['current_shop_name']->value;?>
 <i class="icon-caret-down"></i></a><ul class="dropdown-menu"><li<?php if (!(isset($_smarty_tpl->tpl_vars['current_shop_value']->value)) || $_smarty_tpl->tpl_vars['current_shop_value']->value == '') {?> class="active"<?php }?>><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All shops'),$_smarty_tpl ) );?>
</a></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tree']->value, 'group_data', false, 'group_id');
$_smarty_tpl->tpl_vars['group_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_id']->value => $_smarty_tpl->tpl_vars['group_data']->value) {
$_smarty_tpl->tpl_vars['group_data']->do_else = false;
if (!(isset($_smarty_tpl->tpl_vars['multishop_context']->value)) || $_smarty_tpl->tpl_vars['is_group_context']->value) {?><li class="group<?php if ($_smarty_tpl->tpl_vars['current_shop_value']->value == ('g-').($_smarty_tpl->tpl_vars['group_id']->value)) {?> active<?php }
if ($_smarty_tpl->tpl_vars['multishop_context_group']->value == false) {?> disabled<?php }?>"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
g-<?php echo $_smarty_tpl->tpl_vars['group_id']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s group','sprintf'=>array(htmlspecialchars($_smarty_tpl->tpl_vars['group_data']->value['name'], ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl ) );?>
</a></li><?php } else { ?><ul class="group <?php if ($_smarty_tpl->tpl_vars['multishop_context_group']->value == false) {?> disabled<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s group','sprintf'=>array(htmlspecialchars($_smarty_tpl->tpl_vars['group_data']->value['name'], ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl ) );
}
if (!(isset($_smarty_tpl->tpl_vars['multishop_context']->value)) || $_smarty_tpl->tpl_vars['is_shop_context']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_data']->value['shops'], 'shop_data', false, 'shop_id');
$_smarty_tpl->tpl_vars['shop_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop_id']->value => $_smarty_tpl->tpl_vars['shop_data']->value) {
$_smarty_tpl->tpl_vars['shop_data']->do_else = false;
if (($_smarty_tpl->tpl_vars['shop_data']->value['active'])) {?><li class="shop<?php if ($_smarty_tpl->tpl_vars['current_shop_value']->value == ('s-').($_smarty_tpl->tpl_vars['shop_id']->value)) {?> active<?php }?>"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
s-<?php echo $_smarty_tpl->tpl_vars['shop_id']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['multishop_context_group']->value == false) {
echo (htmlspecialchars($_smarty_tpl->tpl_vars['group_data']->value['name'], ENT_QUOTES, 'UTF-8', true)).(' - ').($_smarty_tpl->tpl_vars['shop_data']->value['name']);
} else {
echo $_smarty_tpl->tpl_vars['shop_data']->value['name'];
}?></a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (!(!(isset($_smarty_tpl->tpl_vars['multishop_context']->value)) || $_smarty_tpl->tpl_vars['is_group_context']->value)) {?></ul><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
<?php }
}
