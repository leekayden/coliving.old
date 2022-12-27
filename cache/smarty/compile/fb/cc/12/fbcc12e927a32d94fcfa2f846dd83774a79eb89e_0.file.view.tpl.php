<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\information\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11c4c987_31879004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbcc12e927a32d94fcfa2f846dd83774a79eb89e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\information\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11c4c987_31879004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1450387015639e8c11c210b9_56024872', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1450387015639e8c11c210b9_56024872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1450387015639e8c11c210b9_56024872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (!$_smarty_tpl->tpl_vars['host_mode']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function()
		{
			$.ajax({
				type: 'GET',
				url: '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminInformation'));?>
',
				data: {
					'action': 'checkFiles',
					'ajax': 1
				},
				dataType: 'json',
				success: function(json)
				{
					var tab = {
						'missing': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Missing files'),$_smarty_tpl ) );?>
',
						'updated': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Updated files'),$_smarty_tpl ) );?>
'
					};

					if (json.missing.length || json.updated.length)
						$('#changedFiles').html('<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Changed/missing files have been detected.'),$_smarty_tpl ) );?>
</div>');
					else
						$('#changedFiles').html('<div class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No change has been detected in your files.'),$_smarty_tpl ) );?>
</div>');

					$.each(tab, function(key, lang)
					{
						if (json[key].length)
						{
							var html = $('<ul>').attr('id', key+'_files');
							$(json[key]).each(function(key, file)
							{
								html.append($('<li>').html(file))
							});
							$('#changedFiles')
								.append($('<h4>').html(lang+' ('+json[key].length+')'))
								.append(html);
						}
					});
				}
			});
		});
	<?php echo '</script'; ?>
>
	<?php }?>
	<div class="row">
		<div class="col-lg-6">
			<div class="panel">
				<h3>
					<i class="icon-info"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration information'),$_smarty_tpl ) );?>

				</h3>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This information must be provided when you report an issue on our bug tracker or forum.'),$_smarty_tpl ) );?>
</p>
			</div>
			<?php if (!$_smarty_tpl->tpl_vars['host_mode']->value) {?>
			<div class="panel">
				<h3>
					<i class="icon-info"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Server information'),$_smarty_tpl ) );?>

				</h3>
				<?php if (count($_smarty_tpl->tpl_vars['uname']->value)) {?>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Server information:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uname']->value, ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<?php }?>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Server software version:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['version']->value['server'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PHP version:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['version']->value['php'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Memory limit:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['version']->value['memory_limit'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max execution time:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['version']->value['max_execution_time'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<?php if ($_smarty_tpl->tpl_vars['apache_instaweb']->value) {?>
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PageSpeed module for Apache installed (mod_instaweb)'),$_smarty_tpl ) );?>
</p>
				<?php }?>
			</div>
			<div class="panel">
				<h3>
					<i class="icon-info"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Database information'),$_smarty_tpl ) );?>

				</h3>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MySQL version:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['database']->value['version'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MySQL server:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['database']->value['server'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MySQL name:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['database']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MySQL user:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['database']->value['user'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tables prefix:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['database']->value['prefix'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MySQL engine:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['database']->value['engine'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MySQL driver:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['database']->value['driver'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
			</div>
		</div>
		<?php }?>
		<div class="col-lg-6">
			<div class="panel">
				<h3>
					<i class="icon-info"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information'),$_smarty_tpl ) );?>

				</h3>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qloapps version:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['qloappsV'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop URL:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['url'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current theme in use:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['theme'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
			</div>
			<div class="panel">
				<h3>
					<i class="icon-info"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mail configuration'),$_smarty_tpl ) );?>

				</h3>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mail method:'),$_smarty_tpl ) );?>
</strong>

			<?php if ($_smarty_tpl->tpl_vars['mail']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are using the PHP mail() function.'),$_smarty_tpl ) );?>
</p>
			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are using your own SMTP parameters.'),$_smarty_tpl ) );?>
</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SMTP server'),$_smarty_tpl ) );?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smtp']->value['server'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SMTP username'),$_smarty_tpl ) );?>
:</strong>
					<?php if ($_smarty_tpl->tpl_vars['smtp']->value['user'] != '') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Defined'),$_smarty_tpl ) );?>

					<?php } else { ?>
						<span style="color:red;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not defined'),$_smarty_tpl ) );?>
</span>
					<?php }?>
				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SMTP password'),$_smarty_tpl ) );?>
:</strong>
					<?php if ($_smarty_tpl->tpl_vars['smtp']->value['password'] != '') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Defined'),$_smarty_tpl ) );?>

					<?php } else { ?>
						<span style="color:red;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not defined'),$_smarty_tpl ) );?>
</span>
					<?php }?>
				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Encryption:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smtp']->value['encryption'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SMTP port:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smtp']->value['port'], ENT_QUOTES, 'UTF-8', true);?>

				</p>
			<?php }?>
			</div>
			<div class="panel">
				<h3>
					<i class="icon-info"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your information'),$_smarty_tpl ) );?>

				</h3>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your web browser:'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_agent']->value, ENT_QUOTES, 'UTF-8', true);?>

				</p>
			</div>

			<div class="panel" id="checkConfiguration">
				<h3>
					<i class="icon-info"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check your configuration'),$_smarty_tpl ) );?>

				</h3>
				<p>
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required parameters:'),$_smarty_tpl ) );?>
</strong>
				<?php if (!$_smarty_tpl->tpl_vars['failRequired']->value) {?>
					<span class="text-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK'),$_smarty_tpl ) );?>
</span>
				</p>
				<?php } else { ?>
					<span class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fix the following error(s)'),$_smarty_tpl ) );?>
</span>
				</p>
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testsRequired']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value == 'fail' && (isset($_smarty_tpl->tpl_vars['testsErrors']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
							<li><?php echo $_smarty_tpl->tpl_vars['testsErrors']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</li>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['failOptional']->value))) {?>
					<p>
						<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional parameters:'),$_smarty_tpl ) );?>
</strong>
					<?php if (!$_smarty_tpl->tpl_vars['failOptional']->value) {?>
						<span class="text-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK'),$_smarty_tpl ) );?>
</span>
					</p>
					<?php } else { ?>
						<span class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fix the following error(s)'),$_smarty_tpl ) );?>
</span>
					</p>
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testsOptional']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['value']->value == 'fail' && (isset($_smarty_tpl->tpl_vars['testsErrors']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
								<li><?php echo $_smarty_tpl->tpl_vars['testsErrors']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</li>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
	<?php if (!$_smarty_tpl->tpl_vars['host_mode']->value) {?>
	<div class="panel">
		<h3>
			<i class="icon-info"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of changed files'),$_smarty_tpl ) );?>

		</h3>
		<div id="changedFiles"><i class="icon-spin icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checking files...'),$_smarty_tpl ) );?>
</div>
	</div>
	<?php }
}
}
/* {/block "override_tpl"} */
}
