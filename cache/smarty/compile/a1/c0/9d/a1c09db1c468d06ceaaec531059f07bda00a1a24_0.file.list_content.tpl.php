<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\tax_rules\helpers\list\list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1413dcc1_55412044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1c09db1c468d06ceaaec531059f07bda00a1a24' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\tax_rules\\helpers\\list\\list_content.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1413dcc1_55412044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>
<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'tr', false, 'index');
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
?>
		<tr
		<?php if ($_smarty_tpl->tpl_vars['position_identifier']->value) {?>id="tr_<?php echo $_smarty_tpl->tpl_vars['id_category']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
_<?php echo $_smarty_tpl->tpl_vars['tr']->value['position']['position'];?>
"<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value['color'])) && $_smarty_tpl->tpl_vars['color_on_bg']->value) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['tr']->value['color'];?>
"<?php }?> >
			<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value && $_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
				<td class="text-center">
					<?php $_smarty_tpl->_assignInScope('bulkActionPossible', true);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_skip_actions']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
						<?php if (in_array($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value],$_smarty_tpl->tpl_vars['value']->value) == true) {?>
							<?php $_smarty_tpl->_assignInScope('bulkActionPossible', false);?>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php if ($_smarty_tpl->tpl_vars['bulkActionPossible']->value == true) {?>
						<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
Box[]" value="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
" class="noborder" />
					<?php }?>
				</td>
			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
				<td
					<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?>
						id="td_<?php if ($_smarty_tpl->tpl_vars['id_category']->value) {
echo $_smarty_tpl->tpl_vars['id_category']->value;
} else { ?>0<?php }?>_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
"
					<?php }?>
					class="<?php if (!$_smarty_tpl->tpl_vars['no_link']->value) {?>pointer<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['position'])) && $_smarty_tpl->tpl_vars['order_by']->value == 'position') {?> dragHandle<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];
}?>"

				<?php if ((!(isset($_smarty_tpl->tpl_vars['params']->value['position'])) && !$_smarty_tpl->tpl_vars['no_link']->value)) {?>
					onclick="document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_index']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8', true);?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['view']->value) {?>&amp;view<?php } else { ?>&amp;update<?php }
echo $_smarty_tpl->tpl_vars['table']->value;?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
'"><?php if ((isset($_smarty_tpl->tpl_vars['params']->value['prefix']))) {
echo $_smarty_tpl->tpl_vars['params']->value['prefix'];
}?>
				<?php } else { ?>
					>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['active']))) {?>
				    <?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

				<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['activeVisu']))) {?>
					<img src="../img/admin/<?php if ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>enabled.gif<?php } else { ?>disabled.gif<?php }?>"
					alt="<?php if ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled'),$_smarty_tpl ) );
}?>" title="<?php if ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled'),$_smarty_tpl ) );
}?>" />
				<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?>
					<?php if ($_smarty_tpl->tpl_vars['order_by']->value == 'position' && $_smarty_tpl->tpl_vars['order_way']->value != 'DESC') {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position_url_down'];?>
" <?php if (!($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position'] != $_smarty_tpl->tpl_vars['positions']->value[count($_smarty_tpl->tpl_vars['positions']->value)-1])) {?>style="display: none;"<?php }?>>
							<img src="../img/admin/<?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'ASC') {?>down<?php } else { ?>up<?php }?>.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Down'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Down'),$_smarty_tpl ) );?>
" />
						</a>

						<a href="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position_url_up'];?>
" <?php if (!($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position'] != $_smarty_tpl->tpl_vars['positions']->value[0])) {?>style="display: none;"<?php }?>>
							<img src="../img/admin/<?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'ASC') {?>up<?php } else { ?>down<?php }?>.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up'),$_smarty_tpl ) );?>
" />
						</a>
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

					<?php }?>
				<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['image']))) {?>
					<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

				<?php } elseif (((isset($_smarty_tpl->tpl_vars['params']->value['icon'])))) {?>
					<img src="../img/admin/<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" />
	            <?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['price']))) {?>
					<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

				<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['float']))) {?>
					<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

				<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'date') {?>
					<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

				<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'datetime') {?>
					<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

				<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['callback']))) {?>
					<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

				<?php } elseif ((isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
					<?php if ($_smarty_tpl->tpl_vars['key']->value == 'behavior') {?>
						<?php if ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value] == 0) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This tax only'),$_smarty_tpl ) );?>

						<?php } elseif ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value] == 1) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Combine'),$_smarty_tpl ) );?>

						<?php } elseif ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value] == 2) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'One after another'),$_smarty_tpl ) );?>

						<?php }?>
					<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'rate') {?>
						<?php echo sprintf("%.3f",$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
%
					<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'zipcode') {?>
						<?php if ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value] == '0 - 0') {?>
							--
						<?php } else { ?>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true);?>

						<?php }?>
					<?php } else { ?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
				<?php } else { ?>
					--
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['suffix']))) {
echo $_smarty_tpl->tpl_vars['params']->value['suffix'];
}?>
				</td>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
			<td <?php if ($_smarty_tpl->tpl_vars['name']->value != $_smarty_tpl->tpl_vars['tr']->value['shop_name']) {?>title="<?php echo $_smarty_tpl->tpl_vars['tr']->value['shop_name'];?>
"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['tr']->value['shop_short_name']))) {
echo $_smarty_tpl->tpl_vars['tr']->value['shop_short_name'];
} else {
echo $_smarty_tpl->tpl_vars['tr']->value['shop_name'];
}?></td>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['has_actions']->value) {?>
			<td class="text-right fixed-width-lg">
				<?php $_smarty_tpl->_assignInScope('compiled_actions', array());?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action', false, 'key');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['action']->value]))) {?>
						<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
							<?php $_smarty_tpl->_assignInScope('action', $_smarty_tpl->tpl_vars['action']->value);?>
						<?php }?>
						<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['compiled_actions']) ? $_smarty_tpl->tpl_vars['compiled_actions']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['action']->value];
$_smarty_tpl->_assignInScope('compiled_actions', $_tmp_array);?>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if (count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 0) {?>
					<?php if (count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 1) {?><div class="btn-group-action"><?php }?>
					<div class="btn-group pull-right">
						<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['compiled_actions']->value[0],'/class\s*=\s*"(\w*)"/','class="$1 btn btn-default"');?>

						<?php if (count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 1) {?>
						<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>&nbsp;
						</button>
							<ul class="dropdown-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compiled_actions']->value, 'action', false, 'key');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['key']->value != 0) {?>
								<li>
									<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

								</li>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						<?php }?>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 1) {?></div><?php }?>
				<?php }?>
			</td>
		<?php }?>
		</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
<?php }
}
