<?php
/* Smarty version 3.1.39, created on 2022-12-27 13:19:50
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\controllers\modules_positions\list_modules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaf0f6a37031_63354830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6edd0ca06a9d181635c4bdf3a68ad48aa7fc0a6a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\controllers\\modules_positions\\list_modules.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaf0f6a37031_63354830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	var come_from = 'AdminModulesPositions';
<?php echo '</script'; ?>
>

<div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22365161263aaf0f69dd971_33247982', "leadin");
?>
</div>

<?php if (!$_smarty_tpl->tpl_vars['can_move']->value) {?>
					<p class="alert alert-warning">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want to order/move the following data, please select a shop from the shop list.'),$_smarty_tpl ) );?>

					</p>
<?php }?>

<div class="row">
	<div class="col-lg-9">
		<div class="panel">
			<form class="well form-horizontal" id="position_filer">
				<div class="row">
					<div class="form-group col-lg-6 col-sm-12">
						<label class="control-label col-lg-4" style="text-align: left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show'),$_smarty_tpl ) );?>
</label>
						<div class="col-lg-7">
							<select id="show_modules" class="filter" style="width: 100%;">
								<option value="all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All modules'),$_smarty_tpl ) );?>
&nbsp;</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
$_smarty_tpl->tpl_vars['module']->iteration = 0;
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
$_smarty_tpl->tpl_vars['module']->iteration++;
$__foreach_module_0_saved = $_smarty_tpl->tpl_vars['module'];
?>
									<option value="<?php echo intval($_smarty_tpl->tpl_vars['module']->value->id);?>
"<?php if ($_smarty_tpl->tpl_vars['display_key']->value == $_smarty_tpl->tpl_vars['module']->value->id) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->displayName, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php
$_smarty_tpl->tpl_vars['module'] = $__foreach_module_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					</div>
					<div class="form-group col-lg-6 col-sm-12">
						<label class="control-label col-lg-offset-1 col-lg-4" style="text-align: left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for a hook'),$_smarty_tpl ) );?>
</label>
						<div class="col-lg-7">
							<div class="input-group">
								<div class="input-group-addon"><i class="icon icon-search"></i></div>
								<input type="text" class="form-control" id="hook_search" name="hook_search" placeholder="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
							<p class="checkbox">
								<label class="control-label" for="hook_position">
									<input type="checkbox" id="hook_position"/>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display non-positionable hooks'),$_smarty_tpl ) );?>

								</label>
							</p>
					</div>
				</div>
			</form>
			<div id="modulePosition">
				<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_submit']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hooks']->value, 'hook');
$_smarty_tpl->tpl_vars['hook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->do_else = false;
?>
					<section class="hook_panel <?php if ($_smarty_tpl->tpl_vars['hook']->value['position'] == 0) {?>hook_position<?php }?>" <?php if ($_smarty_tpl->tpl_vars['hook']->value['position'] == 0) {?>style="display:none;"<?php }?>>
						<a name="<?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
"></a>
						<header class="hook_panel_header">
							<span class="hook_name"><?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
</span>
							<!-- <span class="hook_title"><?php echo $_smarty_tpl->tpl_vars['hook']->value['title'];?>
</span> -->
							<span class="badge pull-right">
								<?php if ($_smarty_tpl->tpl_vars['hook']->value['module_count'] && $_smarty_tpl->tpl_vars['can_move']->value) {?>
								<input type="checkbox" id="Ghook<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
" onclick="hookCheckboxes(<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
, 0, this)"/>
								<?php }?>
								<?php echo $_smarty_tpl->tpl_vars['hook']->value['module_count'];?>
 <?php if ($_smarty_tpl->tpl_vars['hook']->value['module_count'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module'),$_smarty_tpl ) );
}?>
							</span>

							<?php if (!empty($_smarty_tpl->tpl_vars['hook']->value['description'])) {?>
							<div class="hook_description"><?php echo $_smarty_tpl->tpl_vars['hook']->value['description'];?>
</div>
							<?php }?>
						</header>

						<?php if ($_smarty_tpl->tpl_vars['hook']->value['module_count']) {?>
						<section class="module_list">
						<ul class="list-unstyled<?php if (count($_smarty_tpl->tpl_vars['hook']->value['modules']) > 1) {?> sortable<?php }?>">

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hook']->value['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->iteration = 0;
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
$_smarty_tpl->tpl_vars['module']->iteration++;
$__foreach_module_2_saved = $_smarty_tpl->tpl_vars['module'];
?>
							<?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
							<li id="<?php echo intval($_smarty_tpl->tpl_vars['hook']->value['id_hook']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
" class="module_position_<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
 module_list_item<?php if ($_smarty_tpl->tpl_vars['can_move']->value && $_smarty_tpl->tpl_vars['hook']->value['module_count'] >= 2) {?> draggable<?php }?>">
								<div class="module_col_select">
									<input type="checkbox" id="mod<?php echo intval($_smarty_tpl->tpl_vars['hook']->value['id_hook']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
" class="modules-position-checkbox hook<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
" onclick="hookCheckboxes(<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
, 1, this)" name="unhooks[]" value="<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
_<?php echo $_smarty_tpl->tpl_vars['module']->value['instance']->id;?>
"/>
								</div>
								<?php if (!$_smarty_tpl->tpl_vars['display_key']->value) {?>
								<div class="module_col_position<?php if ($_smarty_tpl->tpl_vars['can_move']->value && $_smarty_tpl->tpl_vars['hook']->value['module_count'] >= 2) {?> dragHandle<?php }?>" id="td_<?php echo intval($_smarty_tpl->tpl_vars['hook']->value['id_hook']);?>
_<?php echo $_smarty_tpl->tpl_vars['module']->value['instance']->id;?>
">
									<span class="positions"><?php echo $_smarty_tpl->tpl_vars['module']->iteration;?>
</span>
									<?php if ($_smarty_tpl->tpl_vars['can_move']->value) {?>
									<div class="btn-group-vertical">
										<a class="btn btn-default btn-xs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_module=<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
&amp;id_hook=<?php echo intval($_smarty_tpl->tpl_vars['hook']->value['id_hook']);?>
&amp;direction=0&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;changePosition#<?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
">
											<i class="icon-chevron-up"></i>
										</a>

										<a class="btn btn-default btn-xs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_module=<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
&amp;id_hook=<?php echo intval($_smarty_tpl->tpl_vars['hook']->value['id_hook']);?>
&amp;direction=1&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;changePosition#<?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
">
											<i class="icon-chevron-down"></i>
										</a>
									</div>
									<?php }?>
								</div>
								<?php }?>
								<div class="module_col_icon">
									<img width="57" src="../modules/<?php echo $_smarty_tpl->tpl_vars['module']->value['instance']->name;?>
/logo.png" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['module']->value['instance']->name);?>
" />
								</div>
								<div class="module_col_infos">
									<span class="module_name">
										<?php echo stripslashes($_smarty_tpl->tpl_vars['module']->value['instance']->displayName);?>
 <?php if ($_smarty_tpl->tpl_vars['module']->value['instance']->version) {?>
										<small class="text-muted">&nbsp;-&nbsp;v<?php if (intval($_smarty_tpl->tpl_vars['module']->value['instance']->version) == $_smarty_tpl->tpl_vars['module']->value['instance']->version) {
echo sprintf('%.1f',$_smarty_tpl->tpl_vars['module']->value['instance']->version);
} else {
echo floatval($_smarty_tpl->tpl_vars['module']->value['instance']->version);
}?></small><?php }?>
									</span>
									<div class="module_description"><?php echo $_smarty_tpl->tpl_vars['module']->value['instance']->description;?>
</div>
								</div>
								<div class="module_col_actions">
									<!-- <div class="lab_modules_positions" for="mod<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
_<?php echo $_smarty_tpl->tpl_vars['module']->value['instance']->id;?>
"></div> -->
									<div class="btn-group">
										<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_module=<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
&amp;id_hook=<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
&amp;editGraft<?php if ($_smarty_tpl->tpl_vars['display_key']->value) {?>&amp;show_modules=<?php echo $_smarty_tpl->tpl_vars['display_key']->value;
}?>&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
">
											<i class="icon-pencil"></i>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

										</a>
										<a class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>&nbsp;
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_module=<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
&amp;id_hook=<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
&amp;deleteGraft<?php if ($_smarty_tpl->tpl_vars['display_key']->value) {?>&amp;show_modules=<?php echo $_smarty_tpl->tpl_vars['display_key']->value;
}?>&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
">
													<i class="icon-minus-sign-alt"></i>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unhook'),$_smarty_tpl ) );?>

												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<?php }?>
						<?php
$_smarty_tpl->tpl_vars['module'] = $__foreach_module_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
						</section>
	<?php } else { ?>
							<!-- <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No module was found for this hook.'),$_smarty_tpl ) );?>
</p> -->
	<?php }?>
					</section>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<div id="unhook_button_position_bottom">
						<button type="submit" class="btn btn-default" name="unhookform">
							<i class="icon-minus-sign-alt"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unhook the selection'),$_smarty_tpl ) );?>

						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel">
			<h3><i class="icon-eye-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live Edit'),$_smarty_tpl ) );?>
</h3>
			<?php if ($_smarty_tpl->tpl_vars['live_edit']->value) {?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have to select a shop to use Live Edit'),$_smarty_tpl ) );?>
</p>
			<?php } else { ?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to be redirected to the front office of your shop where you can move and delete modules directly.'),$_smarty_tpl ) );?>
</p>
					<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_live_edit']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<i class="icon-edit"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Run Live Edit'),$_smarty_tpl ) );?>

					</a>
			<?php }?>
		</div>
		<div class="panel" id="modules-position-selection-panel">
			<h3><i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selection'),$_smarty_tpl ) );?>
</h3>
			<p>
				<span id="modules-position-single-selection"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 module selected'),$_smarty_tpl ) );?>
</span>
				<span id="modules-position-multiple-selection">
					<span id="modules-position-selection-count"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'modules selected'),$_smarty_tpl ) );?>

				</span>
			</p>
			<div class="text-center">
				<button class="btn btn-default"><i class="icon-remove"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unhook the selection'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$('.sortable').sortable({
		forcePlaceholderSize: true
	}).bind('sortupdate', function(e, ui) {
		var ids = ui.item.attr('id').split('_');
		var way = (ui.start_index < ui.end_index)? 1 : 0;
		var data = ids[0]+'[]=';

		$.each(e.target.children, function(index, element) {
			data += '&'+ids[0]+'[]='+$(element).attr('id');
		});

		$.ajax({
			type: 'POST',
			headers: { "cache-control": "no-cache" },
			async: false,
			url: currentIndex + '&token=' + token + '&' + 'rand=' + new Date().getTime(),
			data: data + '&action=updatePositions&id_hook='+ids[0]+'&id_module='+ids[1]+'&way='+way+'&ajax=1' ,
			success: function(data) {
				start = 0;

				$.each(e.target.children, function(index, element) {
					$(element).find('.positions').html(++start);
				});

				showSuccessMessage(update_success_msg);
			}
		});
	});
<?php echo '</script'; ?>
>
<?php }
/* {block "leadin"} */
class Block_22365161263aaf0f69dd971_33247982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_22365161263aaf0f69dd971_33247982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
}
