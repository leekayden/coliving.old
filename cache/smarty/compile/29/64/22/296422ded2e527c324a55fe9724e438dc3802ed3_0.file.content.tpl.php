<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\images\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11ab4586_91913515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '296422ded2e527c324a55fe9724e438dc3802ed3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\images\\content.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11ab4586_91913515 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['display_move']->value)) && $_smarty_tpl->tpl_vars['display_move']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['safe_mode']->value) {?>
        <div class="alert alert-warning">
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop has detected that your server configuration is not compatible with the new storage system (directive "safe_mode" is activated). You should therefore continue to use the existing system.'),$_smarty_tpl ) );?>
</p>
        </div>
    <?php } else { ?>
        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="form-horizontal">
            <div class="panel">
                <h3>
                    <i class="icon-picture"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Move images'),$_smarty_tpl ) );?>

                </h3>
                <div class="alert alert-warning">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can choose to keep your images stored in the previous system. There\'s nothing wrong with that.'),$_smarty_tpl ) );?>
</p>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also decide to move your images to the new storage system. In this case, click on the "Move images" button below. Please be patient. This can take several minutes.'),$_smarty_tpl ) );?>
</p>
                </div>
                <div class="alert alert-info">&nbsp;
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'After moving all of your product images, set the "Use the legacy image filesystem" option above to "No" for best performance.'),$_smarty_tpl ) );?>

                </div>
                <div class="row">
                    <div class="col-lg-12 pull-right">
                        <button type="submit" name="submitMoveImages<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" class="btn btn-default pull-right" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?'),$_smarty_tpl ) );?>
');"><i class="process-icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Move images'),$_smarty_tpl ) );?>
</button>
                    </div>
                </div>
            </div>
        </form>
    <?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['display_regenerate']->value))) {?>

	<form class="form-horizontal" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post">
		<div class="panel">
			<h3>
                <i class="icon-picture"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regenerate thumbnails'),$_smarty_tpl ) );?>

            </h3>

			<div class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regenerates thumbnails for all existing images'),$_smarty_tpl ) );?>
<br />
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please be patient. This can take several minutes.'),$_smarty_tpl ) );?>
<br />
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be careful! Manually uploaded thumbnails will be erased and replaced by automatically generated thumbnails.'),$_smarty_tpl ) );?>

			</div>
			
			<div class="form-group">
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select an image'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<select name="type" onchange="changeFormat(this)">
						<option value="all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All'),$_smarty_tpl ) );?>
</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type', false, 'k');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type', false, 'k');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
			<div class="form-group second-select format_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" style="display:none;">			
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select a format'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9 margin-form">
					<select name="format_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
						<option value="all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All'),$_smarty_tpl ) );?>
</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['k']->value], 'format');
$_smarty_tpl->tpl_vars['format']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['format']->value['id_image_type'];?>
"><?php echo $_smarty_tpl->tpl_vars['format']->value['name'];?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php echo '<script'; ?>
>
				function changeFormat(elt)
				{
					$('.second-select').hide();
					$('.format_' + $(elt).val()).show();
				}
			<?php echo '</script'; ?>
>

			<div class="form-group">
				<label class="control-label col-lg-3">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Erase previous images'),$_smarty_tpl ) );?>

				</label>
				<div class="col-lg-9">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="erase" id="erase_on" value="1" checked="checked">
						<label for="erase_on" class="radioCheck">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>

						</label>
						<input type="radio" name="erase" id="erase_off" value="0">
						<label for="erase_off" class="radioCheck">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

						</label>
						<a class="slide-button btn"></a>
					</span>
					<p class="help-block">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select "No" only if your server timed out and you need to resume the regeneration.'),$_smarty_tpl ) );?>

					</p>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitRegenerate<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" class="btn btn-default pull-right" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?'),$_smarty_tpl ) );?>
');">
					<i class="process-icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regenerate thumbnails'),$_smarty_tpl ) );?>

				</button>
			</div>
		</div>
	</form>
<?php }
}
}
