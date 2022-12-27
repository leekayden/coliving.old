<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blocklayered\blocklayered.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11637845_39912031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de955cc2708cad8b8e6b95179340f84bccd0c93a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blocklayered\\blocklayered.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11637845_39912031 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['nbr_filterBlocks']->value != 0) {?>
<div id="layered_block_left" class="block">
	<p class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Catalog','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</p>
	<div class="block_content">
		<form action="#" id="layered_form">
			<div>
				<?php if ((isset($_smarty_tpl->tpl_vars['selected_filters']->value)) && $_smarty_tpl->tpl_vars['n_filters']->value > 0) {?>
				<div id="enabled_filters">
					<span class="layered_subtitle" style="float: none;">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled filters:','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</span>
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_filters']->value, 'filter_values', false, 'filter_type');
$_smarty_tpl->tpl_vars['filter_values']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter_type']->value => $_smarty_tpl->tpl_vars['filter_values']->value) {
$_smarty_tpl->tpl_vars['filter_values']->do_else = false;
?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_values']->value, 'filter_value', false, 'filter_key', 'f_values', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['filter_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter_value']->value) {
$_smarty_tpl->tpl_vars['filter_value']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_values']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_values']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_f_values']->value['index'];
?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['filter']->value['type'] == $_smarty_tpl->tpl_vars['filter_type']->value && (isset($_smarty_tpl->tpl_vars['filter']->value['values']))) {?>
										<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['slider']))) {?>
											<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_values']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_values']->value['first'] : null)) {?>
												<li>
													<a href="#" data-rel="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_slider" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'blocklayered'),$_smarty_tpl ) );?>
"></a>
													<?php if ($_smarty_tpl->tpl_vars['filter']->value['format'] == 1) {?>
														<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['filter']->value['values'][0]),$_smarty_tpl ) );
$_prefixVariable15 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['filter']->value['values'][1]),$_smarty_tpl ) );
$_prefixVariable16 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>htmlspecialchars(sprintf('%1$s: %2$s - %3$s',$_smarty_tpl->tpl_vars['filter']->value['name'],$_prefixVariable15,$_prefixVariable16), ENT_QUOTES, 'UTF-8', true),'mod'=>'blocklayered'),$_smarty_tpl ) );?>

													<?php } else { ?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>htmlspecialchars(sprintf('%1$s: %2$s %4$s - %3$s %4$s',$_smarty_tpl->tpl_vars['filter']->value['name'],$_smarty_tpl->tpl_vars['filter']->value['values'][0],$_smarty_tpl->tpl_vars['filter']->value['values'][1],$_smarty_tpl->tpl_vars['filter']->value['unit']), ENT_QUOTES, 'UTF-8', true),'mod'=>'blocklayered'),$_smarty_tpl ) );?>

													<?php }?>
												</li>
											<?php }?>
										<?php } else { ?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['values'], 'value', false, 'id_value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_value']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
												<?php if ($_smarty_tpl->tpl_vars['id_value']->value == $_smarty_tpl->tpl_vars['filter_key']->value && !is_numeric($_smarty_tpl->tpl_vars['filter_value']->value) && ($_smarty_tpl->tpl_vars['filter']->value['type'] == 'id_attribute_group' || $_smarty_tpl->tpl_vars['filter']->value['type'] == 'id_feature') || $_smarty_tpl->tpl_vars['id_value']->value == $_smarty_tpl->tpl_vars['filter_value']->value && $_smarty_tpl->tpl_vars['filter']->value['type'] != 'id_attribute_group' && $_smarty_tpl->tpl_vars['filter']->value['type'] != 'id_feature') {?>
													<li>
														<a href="#" data-rel="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'blocklayered'),$_smarty_tpl ) );?>
"><i class="icon-remove"></i></a>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: %2$s','mod'=>'blocklayered','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['name'],$_smarty_tpl->tpl_vars['value']->value['name'])),$_smarty_tpl ) );?>

													</li>
												<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['values']))) {?>
						<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['slider']))) {?>
							<div class="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
" style="display: none;">
						<?php } else { ?>
							<div class="layered_filter">
						<?php }?>
                        <div class="layered_subtitle_heading">
                            <span class="layered_subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <!--<span class="layered_close">
                            	<a href="#" data-rel="ul_layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
"></a>
                            </span>-->
						</div>
						<ul id="ul_layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
" class="col-lg-12 layered_filter_ul<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['is_color_group'])) && $_smarty_tpl->tpl_vars['filter']->value['is_color_group']) {?> color-group<?php }?>">
							<?php if (!(isset($_smarty_tpl->tpl_vars['filter']->value['slider']))) {?>
								<?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_type'] == 0) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['values'], 'value', false, 'id_value', 'fe', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_value']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fe']->value['index']++;
?>
										<?php if ($_smarty_tpl->tpl_vars['value']->value['nbr'] || !$_smarty_tpl->tpl_vars['hide_0_values']->value) {?>
										<li class="nomargin <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fe']->value['index'] : null) >= $_smarty_tpl->tpl_vars['filter']->value['filter_show_limit']) {?>hiddable<?php }?> col-lg-12">
											<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['is_color_group'])) && $_smarty_tpl->tpl_vars['filter']->value['is_color_group']) {?>
												<input class="color-option <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['checked'])) && $_smarty_tpl->tpl_vars['value']->value['checked']) {?>on<?php }?> <?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?>disable<?php }?>" type="button" name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" data-rel="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
" id="layered_id_attribute_group_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?>disabled="disabled"<?php }?> style="background: <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['color']))) {
if (file_exists(((defined('_PS_ROOT_DIR_') ? constant('_PS_ROOT_DIR_') : null)).("/img/co/".((string)$_smarty_tpl->tpl_vars['id_value']->value).".jpg"))) {?>url(img/co/<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
.jpg)<?php } else {
echo $_smarty_tpl->tpl_vars['value']->value['color'];
}
} else { ?>#CCC<?php }?>;" />
												<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['checked'])) && $_smarty_tpl->tpl_vars['value']->value['checked']) {?><input type="hidden" name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" /><?php }?>
											<?php } else { ?>
												<input type="checkbox" class="checkbox" name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];
if ($_smarty_tpl->tpl_vars['id_value']->value || $_smarty_tpl->tpl_vars['filter']->value['type'] == 'quantity') {?>_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;
}?>" value="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;
if ($_smarty_tpl->tpl_vars['filter']->value['id_key']) {?>_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['checked']))) {?> checked="checked"<?php }
if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?> disabled="disabled"<?php }?> /> 
											<?php }?>
											<label for="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
"<?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?> class="disabled"<?php } else {
if ((isset($_smarty_tpl->tpl_vars['filter']->value['is_color_group'])) && $_smarty_tpl->tpl_vars['filter']->value['is_color_group']) {?> name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" class="layered_color" data-rel="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
"<?php }
}?>>
												<?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?>
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['name'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['layered_show_qties']->value) {?><span> (<?php echo $_smarty_tpl->tpl_vars['value']->value['nbr'];?>
)</span><?php }?>
												<?php } else { ?>
												<a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['link'];?>
"<?php if (trim($_smarty_tpl->tpl_vars['value']->value['rel']) != '') {?> data-rel="<?php echo $_smarty_tpl->tpl_vars['value']->value['rel'];?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['name'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['layered_show_qties']->value) {?><span> (<?php echo $_smarty_tpl->tpl_vars['value']->value['nbr'];?>
)</span><?php }?></a>
												<?php }?>
											</label>
										</li>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } else { ?>
									<?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_type'] == 1) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['values'], 'value', false, 'id_value', 'fe', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_value']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fe']->value['index']++;
?>
										<?php if ($_smarty_tpl->tpl_vars['value']->value['nbr'] || !$_smarty_tpl->tpl_vars['hide_0_values']->value) {?>
										<li class="nomargin <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fe']->value['index'] : null) >= $_smarty_tpl->tpl_vars['filter']->value['filter_show_limit']) {?>hiddable<?php }?>">
											<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['is_color_group'])) && $_smarty_tpl->tpl_vars['filter']->value['is_color_group']) {?>
												<input class="radio color-option <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['checked'])) && $_smarty_tpl->tpl_vars['value']->value['checked']) {?>on<?php }?> <?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?>disable<?php }?>" type="button" name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" data-rel="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
" id="layered_id_attribute_group_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?>disabled="disabled"<?php }?> style="background: <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['color']))) {
if (file_exists(((defined('_PS_ROOT_DIR_') ? constant('_PS_ROOT_DIR_') : null)).("/img/co/".((string)$_smarty_tpl->tpl_vars['id_value']->value).".jpg"))) {?>url(img/co/<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
.jpg)<?php } else {
echo $_smarty_tpl->tpl_vars['value']->value['color'];
}
} else { ?>#CCC<?php }?>;"/>
												<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['checked'])) && $_smarty_tpl->tpl_vars['value']->value['checked']) {?><input type="hidden" name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" /><?php }?>
											<?php } else { ?>
												<input type="radio" class="radio layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];
if ($_smarty_tpl->tpl_vars['filter']->value['id_key']) {?>_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];
} else { ?>_1<?php }?>" id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];
if ($_smarty_tpl->tpl_vars['id_value']->value || $_smarty_tpl->tpl_vars['filter']->value['type'] == 'quantity') {?>_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;
if ($_smarty_tpl->tpl_vars['filter']->value['id_key']) {?>_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];
}
}?>" value="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;
if ($_smarty_tpl->tpl_vars['filter']->value['id_key']) {?>_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['checked']))) {?> checked="checked"<?php }
if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?> disabled="disabled"<?php }?> /> 
											<?php }?>
											<label for="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
"<?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?> class="disabled"<?php } else {
if ((isset($_smarty_tpl->tpl_vars['filter']->value['is_color_group'])) && $_smarty_tpl->tpl_vars['filter']->value['is_color_group']) {?> name="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" class="layered_color" data-rel="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
"<?php }
}?>>
												<?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['name'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['layered_show_qties']->value) {?><span> (<?php echo $_smarty_tpl->tpl_vars['value']->value['nbr'];?>
)</span><?php }?>
												<?php } else { ?>
													<a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['link'];?>
"<?php if (trim($_smarty_tpl->tpl_vars['value']->value['rel']) != '') {?> data-rel="<?php echo $_smarty_tpl->tpl_vars['value']->value['rel'];?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['name'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['layered_show_qties']->value) {?><span> (<?php echo $_smarty_tpl->tpl_vars['value']->value['nbr'];?>
)</span><?php }?></a>
												<?php }?>
											</label>
										</li>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php } else { ?>
										<select class="select form-control" <?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_show_limit'] > 1) {?>multiple="multiple" size="<?php echo $_smarty_tpl->tpl_vars['filter']->value['filter_show_limit'];?>
"<?php }?>>
											<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No filters','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['values'], 'value', false, 'id_value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_value']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
											<?php if ($_smarty_tpl->tpl_vars['value']->value['nbr'] || !$_smarty_tpl->tpl_vars['hide_0_values']->value) {?>
												<option style="color: <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['color']))) {
echo $_smarty_tpl->tpl_vars['value']->value['color'];
}?>" id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type_lite'];
if ($_smarty_tpl->tpl_vars['id_value']->value || $_smarty_tpl->tpl_vars['filter']->value['type'] == 'quantity') {?>_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;
}?>" value="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['checked'])) && $_smarty_tpl->tpl_vars['value']->value['checked']) {?>selected="selected"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['value']->value['nbr']) {?>disabled="disabled"<?php }?>>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['name'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['layered_show_qties']->value) {?><span> (<?php echo $_smarty_tpl->tpl_vars['value']->value['nbr'];?>
)</span><?php }?>
												</option>
											<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</select>
									<?php }?>
								<?php }?>
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_type'] == 0) {?>
									<label for="<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Range:','mod'=>'blocklayered'),$_smarty_tpl ) );?>

									</label> 
									<span id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range"></span>
									<div class="layered_slider_container">
										<div class="layered_slider" id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_slider" data-type="<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
" data-format="<?php echo $_smarty_tpl->tpl_vars['filter']->value['format'];?>
" data-unit="<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit'];?>
"></div>
									</div>
								<?php } else { ?>
									<?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_type'] == 1) {?>
									<li class="nomargin row">
	                                    <div class="col-xs-6 col-sm-12 col-lg-6 first-item">
	                                    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From','mod'=>'blocklayered'),$_smarty_tpl ) );?>
 
	                                    	<input class="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range layered_input_range_min layered_input_range form-control grey" id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range_min" type="text" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['values'][0];?>
"/>
	                                    	<span class="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range_unit">
	                                    		<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit'];?>

	                                    	</span>
	                                    </div>
	                                    <div class="col-xs-6 col-sm-12 col-lg-6">
	                                    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to','mod'=>'blocklayered'),$_smarty_tpl ) );?>
 
	                                    	<input class="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range layered_input_range_max layered_input_range form-control grey" id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range_max" type="text" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['values'][1];?>
"/>
	                                    	<span class="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range_unit">
	                                    		<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit'];?>

	                                    	</span>
	                                    </div>
										<span class="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_format" style="display:none;">
											<?php echo $_smarty_tpl->tpl_vars['filter']->value['format'];?>

										</span>
									</li>
									<?php } else { ?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['list_of_values'], 'values');
$_smarty_tpl->tpl_vars['values']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['values']->value) {
$_smarty_tpl->tpl_vars['values']->do_else = false;
?>
										<li class="nomargin <?php if ($_smarty_tpl->tpl_vars['filter']->value['values'][1] == $_smarty_tpl->tpl_vars['values']->value[1] && $_smarty_tpl->tpl_vars['filter']->value['values'][0] == $_smarty_tpl->tpl_vars['values']->value[0]) {?>layered_list_selected<?php }?> layered_list" onclick="$('#layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range_min').val(<?php echo $_smarty_tpl->tpl_vars['values']->value[0];?>
);$('#layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range_max').val(<?php echo $_smarty_tpl->tpl_vars['values']->value[1];?>
);reloadContent();">
											- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From','mod'=>'blocklayered'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['values']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['filter']->value['unit'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to','mod'=>'blocklayered'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['values']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['filter']->value['unit'];?>

										</li>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<li style="display: none;">
										<input class="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range" id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range_min" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['values'][0];?>
"/>
										<input class="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range" id="layered_<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
_range_max" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['values'][1];?>
"/>
									</li>
									<?php }?>
								<?php }?>
							<?php }?>
							<?php if (count($_smarty_tpl->tpl_vars['filter']->value['values']) > $_smarty_tpl->tpl_vars['filter']->value['filter_show_limit'] && $_smarty_tpl->tpl_vars['filter']->value['filter_show_limit'] > 0 && $_smarty_tpl->tpl_vars['filter']->value['filter_type'] != 2) {?>
								<span class="hide-action more"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show more','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</span>
								<span class="hide-action less"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show less','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</span>
							<?php }?>
						</ul>
					</div>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<input type="hidden" name="id_category_layered" value="<?php echo $_smarty_tpl->tpl_vars['id_category_layered']->value;?>
" />
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['filter']->value['type_lite'] == 'id_attribute_group' && (isset($_smarty_tpl->tpl_vars['filter']->value['is_color_group'])) && $_smarty_tpl->tpl_vars['filter']->value['is_color_group'] && $_smarty_tpl->tpl_vars['filter']->value['filter_type'] != 2) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['values'], 'value', false, 'id_value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_value']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['checked']))) {?>
							<input type="hidden" name="layered_id_attribute_group_<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_value']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['filter']->value['id_key'];?>
" />
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</form>
	</div>
	<div id="layered_ajax_loader" style="display: none;">
		<p>
			<img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" alt="" />
			<br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','mod'=>'blocklayered'),$_smarty_tpl ) );?>

		</p>
	</div>
</div>
<?php } else { ?>
<div id="layered_block_left" class="block">
	<div class="block_content">
		<form action="#" id="layered_form">
			<input type="hidden" name="id_category_layered" value="<?php echo $_smarty_tpl->tpl_vars['id_category_layered']->value;?>
" />
		</form>
	</div>
	<div style="display: none;">
		<p>
			<img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" alt="" />
			<br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','mod'=>'blocklayered'),$_smarty_tpl ) );?>

		</p>
	</div>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['nbr_filterBlocks']->value != 0) {
if (version_compare((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null),'1.5','>')) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('param_product_url'=>('#').($_smarty_tpl->tpl_vars['param_product_url']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('param_product_url'=>''),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('blocklayeredSliderName'=>$_smarty_tpl->tpl_vars['blocklayeredSliderName']->value),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['filters']->value)) && count($_smarty_tpl->tpl_vars['filters']->value)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('filters'=>$_smarty_tpl->tpl_vars['filters']->value),$_smarty_tpl ) );
}
}
}
}
