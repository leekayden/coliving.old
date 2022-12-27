<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:51:42
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\helpers\list\list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaea5e981b30_86533892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fc965bb5c0d951422e0139e36cd6bab7e10e4cb' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\helpers\\list\\list_content.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaea5e981b30_86533892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'tr_count', null, null);
echo smarty_function_counter(array('name'=>'tr_count'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<tbody>
<?php if (count($_smarty_tpl->tpl_vars['list']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'tr', false, 'index');
$_smarty_tpl->tpl_vars['tr']->iteration = 0;
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
$_smarty_tpl->tpl_vars['tr']->iteration++;
$__foreach_tr_8_saved = $_smarty_tpl->tpl_vars['tr'];
?>
	<tr<?php if ($_smarty_tpl->tpl_vars['position_identifier']->value) {?> id="tr_<?php echo $_smarty_tpl->tpl_vars['position_group_identifier']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
_<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value['position']['position']))) {
echo $_smarty_tpl->tpl_vars['tr']->value['position']['position'];
} else { ?>0<?php }?>"<?php }?> class="<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value['class']))) {
echo $_smarty_tpl->tpl_vars['tr']->value['class'];
}?> <?php if ((1 & $_smarty_tpl->tpl_vars['tr']->iteration / 1)) {?>odd<?php }?>"<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value['color'])) && $_smarty_tpl->tpl_vars['color_on_bg']->value) {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['tr']->value['color'];?>
"<?php }?> >
		<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value && $_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
			<td class="row-selector text-center">
				<?php if ((isset($_smarty_tpl->tpl_vars['list_skip_actions']->value['delete']))) {?>
					<?php if (!in_array($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value],$_smarty_tpl->tpl_vars['list_skip_actions']->value['delete'])) {?>
						<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Box[]" value="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
"<?php ob_start();
echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];
$_prefixVariable1 = ob_get_clean();
if ((isset($_smarty_tpl->tpl_vars['checked_boxes']->value)) && is_array($_smarty_tpl->tpl_vars['checked_boxes']->value) && in_array($_prefixVariable1,$_smarty_tpl->tpl_vars['checked_boxes']->value)) {?> checked="checked"<?php }?> class="noborder" />
					<?php }?>
				<?php } else { ?>
					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Box[]" value="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
"<?php ob_start();
echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];
$_prefixVariable2 = ob_get_clean();
if ((isset($_smarty_tpl->tpl_vars['checked_boxes']->value)) && is_array($_smarty_tpl->tpl_vars['checked_boxes']->value) && in_array($_prefixVariable2,$_smarty_tpl->tpl_vars['checked_boxes']->value)) {?> checked="checked"<?php }?> class="noborder" />
				<?php }?>
			</td>
		<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102888900163aaea5e9074f8_97771570', "open_td");
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14299401563aaea5e9196e3_69296350', "td_content");
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84742185063aaea5e96e097_69797701', "close_td");
?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
		<td title="<?php echo $_smarty_tpl->tpl_vars['tr']->value['shop_name'];?>
">
			<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value['shop_short_name']))) {?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value['shop_short_name'];?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value['shop_name'];?>

			<?php }?>
		</td>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['has_actions']->value) {?>
		<td class="text-right">
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
					<?php if ($_smarty_tpl->tpl_vars['action']->value == 'delete' && count($_smarty_tpl->tpl_vars['actions']->value) > 2) {?>
						<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['compiled_actions']) ? $_smarty_tpl->tpl_vars['compiled_actions']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'divider';
$_smarty_tpl->_assignInScope('compiled_actions', $_tmp_array);?>
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
					<?php echo $_smarty_tpl->tpl_vars['compiled_actions']->value[0];?>

					<?php if (count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 1) {?>
					<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<i class="icon-caret-down"></i>&nbsp;
					</button>
						<ul class="dropdown-menu">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compiled_actions']->value, 'action', false, 'key');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['key']->value != 0) {?>
							<li<?php if ($_smarty_tpl->tpl_vars['action']->value == 'divider' && count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 3) {?> class="divider"<?php }?>>
								<?php if ($_smarty_tpl->tpl_vars['action']->value != 'divider') {
echo $_smarty_tpl->tpl_vars['action']->value;
}?>
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
$_smarty_tpl->tpl_vars['tr'] = $__foreach_tr_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<tr>
		<td class="list-empty" colspan="<?php echo count($_smarty_tpl->tpl_vars['fields_display']->value)+1;?>
">
			<div class="list-empty-msg">
				<i class="icon-warning-sign list-empty-icon"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No records found'),$_smarty_tpl ) );?>

			</div>
		</td>
	</tr>
<?php }?>
</tbody>
<?php }
/* {block "open_td"} */
class Block_102888900163aaea5e9074f8_97771570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'open_td' => 
  array (
    0 => 'Block_102888900163aaea5e9074f8_97771570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<td
					<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?>
						id="td_<?php if (!empty($_smarty_tpl->tpl_vars['position_group_identifier']->value)) {
echo $_smarty_tpl->tpl_vars['position_group_identifier']->value;
} else { ?>0<?php }?>_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tr_count') > 1) {?>_<?php echo intval(($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tr_count')-1));
}?>"
					<?php }?>
					class="<?php if (!$_smarty_tpl->tpl_vars['no_link']->value) {?>pointer<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['position'])) && $_smarty_tpl->tpl_vars['order_by']->value == 'position' && $_smarty_tpl->tpl_vars['order_way']->value != 'DESC') {?> dragHandle<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['class'];
}
if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];
}?>"
					<?php if ((!(isset($_smarty_tpl->tpl_vars['params']->value['position'])) && !$_smarty_tpl->tpl_vars['no_link']->value && !(isset($_smarty_tpl->tpl_vars['params']->value['remove_onclick'])))) {?>
						onclick="document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_index']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8', true);?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['view']->value) {?>&amp;view<?php } else { ?>&amp;update<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>&amp;page=<?php echo intval($_smarty_tpl->tpl_vars['page']->value);
}?>&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
'">
					<?php } else { ?>
					>
				<?php }?>
			<?php
}
}
/* {/block "open_td"} */
/* {block "default_field"} */
class Block_155304832763aaea5e961e86_72238779 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
--<?php
}
}
/* {/block "default_field"} */
/* {block "td_content"} */
class Block_14299401563aaea5e9196e3_69296350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_14299401563aaea5e9196e3_69296350',
  ),
  'default_field' => 
  array (
    0 => 'Block_155304832763aaea5e961e86_72238779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['prefix']))) {
echo $_smarty_tpl->tpl_vars['params']->value['prefix'];
}?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_success'])) && $_smarty_tpl->tpl_vars['params']->value['badge_success'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_success'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_success'] == $_smarty_tpl->tpl_vars['params']->value['badge_success']) {?><span class="badge badge-success"><?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_warning'])) && $_smarty_tpl->tpl_vars['params']->value['badge_warning'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_warning'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_warning'] == $_smarty_tpl->tpl_vars['params']->value['badge_warning']) {?><span class="badge badge-warning"><?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_danger'])) && $_smarty_tpl->tpl_vars['params']->value['badge_danger'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_danger'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_danger'] == $_smarty_tpl->tpl_vars['params']->value['badge_danger']) {?><span class="badge badge-danger"><?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['color'])) && (isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['params']->value['color']]))) {?>
					<span class="label color_field" style="background-color:<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['params']->value['color']];?>
;color:<?php if (Tools::getBrightness($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['params']->value['color']]) < 128) {?>white<?php } else { ?>#383838<?php }?>">
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
					<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['active']))) {?>
						<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['callback']))) {?>
						<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['maxlength'])) && Tools::strlen($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) > $_smarty_tpl->tpl_vars['params']->value['maxlength']) {?>
							<span title="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],$_smarty_tpl->tpl_vars['params']->value['maxlength'],'...' ));?>
</span>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

						<?php }?>
					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['activeVisu']))) {?>
						<?php if ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
							<i class="icon-check-ok"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled'),$_smarty_tpl ) );?>

						<?php } else { ?>
							<i class="icon-remove"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled'),$_smarty_tpl ) );?>

						<?php }?>
					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?>
						<?php if (!$_smarty_tpl->tpl_vars['filters_has_value']->value && $_smarty_tpl->tpl_vars['order_by']->value == 'position' && $_smarty_tpl->tpl_vars['order_way']->value != 'DESC') {?>
							<div class="dragGroup">
								<div class="positions">
									<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

								</div>
							</div>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

						<?php }?>
					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['image']))) {?>
						<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['icon']))) {?>
						<?php if (is_array($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
							<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['class']))) {?>
								<i class="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['class'];?>
"></i>
							<?php } else { ?>
								<img src="../img/admin/<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['alt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['alt'];?>
" />
							<?php }?>
						<?php }?>
					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'price') {?>
						<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value['id_currency']))) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'currency'=>$_smarty_tpl->tpl_vars['tr']->value['id_currency']),$_smarty_tpl ) );?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]),$_smarty_tpl ) );?>

						<?php }?>
					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['float']))) {?>
						<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'date') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'full'=>0),$_smarty_tpl ) );?>

					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'datetime') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'full'=>1),$_smarty_tpl ) );?>

					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'decimal') {?>
						<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>

					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'percent') {?>
						<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%'),$_smarty_tpl ) );?>

										<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'editable' && (isset($_smarty_tpl->tpl_vars['tr']->value['id']))) {?>
						<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['tr']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
					<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'color') {?>
						<?php if (!is_array($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
						<div style="background-color: <?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
;" class="attributes-color-container"></div>
						<?php } else { ?> 						<img src="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['texture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tr']->value['name'];?>
" class="attributes-color-container" />
						<?php }?>
					<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['maxlength'])) && Tools::strlen($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) > $_smarty_tpl->tpl_vars['params']->value['maxlength']) {?>
						<span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],$_smarty_tpl->tpl_vars['params']->value['maxlength'],'...' )), ENT_QUOTES, 'UTF-8', true);?>
</span>
					<?php } else { ?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
				<?php } else { ?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155304832763aaea5e961e86_72238779', "default_field", $this->tplIndex);
?>

				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['suffix']))) {
echo $_smarty_tpl->tpl_vars['params']->value['suffix'];
}?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['color'])) && (isset($_smarty_tpl->tpl_vars['tr']->value['color']))) {?>
					</span>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_danger'])) && $_smarty_tpl->tpl_vars['params']->value['badge_danger'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_danger'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_danger'] == $_smarty_tpl->tpl_vars['params']->value['badge_danger']) {?></span><?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_warning'])) && $_smarty_tpl->tpl_vars['params']->value['badge_warning'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_warning'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_warning'] == $_smarty_tpl->tpl_vars['params']->value['badge_warning']) {?></span><?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_success'])) && $_smarty_tpl->tpl_vars['params']->value['badge_success'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_success'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_success'] == $_smarty_tpl->tpl_vars['params']->value['badge_success']) {?></span><?php }?>
			<?php
}
}
/* {/block "td_content"} */
/* {block "close_td"} */
class Block_84742185063aaea5e96e097_69797701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'close_td' => 
  array (
    0 => 'Block_84742185063aaea5e96e097_69797701',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				</td>
			<?php
}
}
/* {/block "close_td"} */
}
