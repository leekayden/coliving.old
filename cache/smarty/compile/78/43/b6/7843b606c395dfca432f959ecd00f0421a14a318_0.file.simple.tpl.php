<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:13
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\helpers\uploader\simple.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c152b0ef3_63892892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7843b606c395dfca432f959ecd00f0421a14a318' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\helpers\\uploader\\simple.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c152b0ef3_63892892 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['files']->value)) && count($_smarty_tpl->tpl_vars['files']->value) > 0) {?>
	<?php $_smarty_tpl->_assignInScope('show_thumbnail', false);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
		<?php if ((isset($_smarty_tpl->tpl_vars['file']->value['image'])) && $_smarty_tpl->tpl_vars['file']->value['type'] == 'image') {?>
			<?php $_smarty_tpl->_assignInScope('show_thumbnail', true);?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['show_thumbnail']->value) {?>
<div class="form-group">
	<div class="col-lg-12" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-images-thumbnails">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
		<?php if ((isset($_smarty_tpl->tpl_vars['file']->value['image'])) && $_smarty_tpl->tpl_vars['file']->value['type'] == 'image') {?>
		<div>
			<?php echo $_smarty_tpl->tpl_vars['file']->value['image'];?>

			<?php if ((isset($_smarty_tpl->tpl_vars['file']->value['size']))) {?><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File size'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['file']->value['size'];?>
kb</p><?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['file']->value['delete_url']))) {?>
			<p>
				<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['file']->value['delete_url'];?>
">
					<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>

				</a>
			</p>
			<?php }?>
		</div>
		<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
}
if ((isset($_smarty_tpl->tpl_vars['max_files']->value)) && count($_smarty_tpl->tpl_vars['files']->value) >= $_smarty_tpl->tpl_vars['max_files']->value) {?>
<div class="row">
	<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have reached the limit (%s) of files to upload, please remove files to continue uploading','sprintf'=>$_smarty_tpl->tpl_vars['max_files']->value),$_smarty_tpl ) );?>
</div>
</div>
<?php } else { ?>
<div class="form-group">
	<div class="col-sm-6">
		<input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="file" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);
if ((isset($_smarty_tpl->tpl_vars['multiple']->value)) && $_smarty_tpl->tpl_vars['multiple']->value) {?>[]<?php }?>"<?php if ((isset($_smarty_tpl->tpl_vars['multiple']->value)) && $_smarty_tpl->tpl_vars['multiple']->value) {?> multiple="multiple"<?php }?> class="hide" />
		<div class="dummyfile input-group">
			<span class="input-group-addon"><i class="icon-file"></i></span>
			<input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-name" type="text" name="filename" readonly />
			<span class="input-group-btn">
				<button id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
					<i class="icon-folder-open"></i> <?php if ((isset($_smarty_tpl->tpl_vars['multiple']->value)) && $_smarty_tpl->tpl_vars['multiple']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add files'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add file'),$_smarty_tpl ) );
}?>
				</button>
				<?php if ((!(isset($_smarty_tpl->tpl_vars['multiple']->value)) || !$_smarty_tpl->tpl_vars['multiple']->value) && (isset($_smarty_tpl->tpl_vars['files']->value)) && count($_smarty_tpl->tpl_vars['files']->value) == 1 && (isset($_smarty_tpl->tpl_vars['files']->value[0]['download_url']))) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['files']->value[0]['download_url'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default">
						<i class="icon-cloud-download"></i>
						<?php if ((isset($_smarty_tpl->tpl_vars['size']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download current file (%skb)','sprintf'=>$_smarty_tpl->tpl_vars['size']->value),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download current file'),$_smarty_tpl ) );
}?>
					</a>
				<?php }?>
			</span>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
<?php if ((isset($_smarty_tpl->tpl_vars['multiple']->value)) && (isset($_smarty_tpl->tpl_vars['max_files']->value))) {?>
	var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_max_files = <?php echo $_smarty_tpl->tpl_vars['max_files']->value-count($_smarty_tpl->tpl_vars['files']->value);?>
;
<?php }?>

	$(document).ready(function(){
		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-selectbutton').click(function(e) {
			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').trigger('click');
		});

		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-name').click(function(e) {
			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').trigger('click');
		});

		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-name').on('dragenter', function(e) {
			e.stopPropagation();
			e.preventDefault();
		});

		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-name').on('dragover', function(e) {
			e.stopPropagation();
			e.preventDefault();
		});

		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-name').on('drop', function(e) {
			e.preventDefault();
			var files = e.originalEvent.dataTransfer.files;
			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
')[0].files = files;
			$(this).val(files[0].name);
		});

		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').change(function(e) {
			if ($(this)[0].files !== undefined)
			{
				var files = $(this)[0].files;
				var name  = '';

				$.each(files, function(index, value) {
					name += value.name+', ';
				});

				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-name').val(name.slice(0, -2));
			}
			else // Internet Explorer 9 Compatibility
			{
				var name = $(this).val().split(/[\\/]/);
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-name').val(name[name.length-1]);
			}
		});

		if (typeof <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_max_files !== 'undefined')
		{
			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').closest('form').on('submit', function(e) {
				if ($('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
')[0].files.length > <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_max_files) {
					e.preventDefault();
					alert('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('You can upload a maximum of %s files',$_smarty_tpl->tpl_vars['max_files']->value)),$_smarty_tpl ) );?>
');
				}
			});
		}
	});
<?php echo '</script'; ?>
>
<?php }
}
}
