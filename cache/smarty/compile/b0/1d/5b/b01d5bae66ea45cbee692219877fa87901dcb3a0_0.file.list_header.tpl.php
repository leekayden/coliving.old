<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\tax_rules\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c141b2190_69758824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b01d5bae66ea45cbee692219877fa87901dcb3a0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\tax_rules\\helpers\\list\\list_header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c141b2190_69758824 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminListBefore'),$_smarty_tpl ) );?>

<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value))) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
ListBefore<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php } elseif ((isset($_GET['controller']))) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
ListBefore<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php }?>

<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_tax_rules_group=<?php echo $_smarty_tpl->tpl_vars['id_tax_rules_group']->value;?>
&amp;updatetax_rules_group#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" class="form">
	<div class="panel">
		<input type="hidden" id="submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" name="submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" value="0"/>
		<div class="table-responsive clearfix">
			<table<?php if ($_smarty_tpl->tpl_vars['table_id']->value) {?> id="table-<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
"<?php }?> class="table<?php if ($_smarty_tpl->tpl_vars['table_dnd']->value) {?> tableDnD<?php }?> <?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
				<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value && $_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
				<col style="width: 10px;" />
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
					<col<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['width'])) && $_smarty_tpl->tpl_vars['params']->value['width'] != 'auto') {?> width="<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
px"<?php }?>/>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
					<col style="width: 80px;"/>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['has_actions']->value) {?>
					<col style="width: 52px;" />
				<?php }?>
				<thead>
					<tr class="nodrag nodrop">
						<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value && $_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
							<th class="center"></th>
						<?php }?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
							<th<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> align="<?php echo $_smarty_tpl->tpl_vars['params']->value['align'];?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['class']))) {?> class="<?php echo $_smarty_tpl->tpl_vars['params']->value['class'];?>
"<?php }?>>
								<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['hint']))) {?><span class="hint" name="help_box"><?php echo $_smarty_tpl->tpl_vars['params']->value['hint'];?>
<span class="hint-pointer">&nbsp;</span></span><?php }?>
								<span class="title_box">
									<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>

								</span>
							</th>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
							<th>
								<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value == 'shop') {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop'),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop group'),$_smarty_tpl ) );?>

								<?php }?>
							</th>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['has_actions']->value && $_smarty_tpl->tpl_vars['filters_has_value']->value) {?>
							<th class="actions text-right"><button type="submit" name="submitReset<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" class="btn btn-warning">
									<i class="icon-eraser"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset'),$_smarty_tpl ) );?>

								</button>
							</th>
						<?php } else { ?>
							<th class="actions text-right"></th>
						<?php }?>
					</tr>
				</thead><?php }
}
