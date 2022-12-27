<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\backup\download\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10971502_24997556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e732f6d35bc0706a6d17484082637e9575ae796d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\backup\\download\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10971502_24997556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_501756266639e8c1096a0f5_35981264', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_501756266639e8c1096a0f5_35981264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_501756266639e8c1096a0f5_35981264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="panel">
		<h3>
			<i class="icon-download"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download'),$_smarty_tpl ) );?>

		</h3>
		<p>
			<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['backup_url']->value;?>
">
				<i class="icon-download"></i> 
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download the backup file (%s MB)','sprintf'=>$_smarty_tpl->tpl_vars['backup_weight']->value),$_smarty_tpl ) );?>

			</a>
		</p>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tip: You can also download this file from your FTP server. Backup files are located in the "/adminXXXX/backups" directory.'),$_smarty_tpl ) );?>
</p>
	</div>

	<div class="row">
		<div class="alert alert-warning">
			<button data-dismiss="alert" class="close" type="button">×</button>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disclaimer before creating a new backup'),$_smarty_tpl ) );?>
</p>
			<ol>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop is not responsible for your database, its backups and/or recovery.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop is open-source software. You are using it at your own risk under the license agreement.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You should back up your data on a regular basis (both files and database).'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This function only backs up your database, not your files.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By default, your existing database tables will be dropped during the backup recovery (see "Backup options" below).'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Always verify the quality and integrity of your backup files!'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Always verify that your backup files are complete, up-to-date and valid, even if you had a success message appear during the backup process.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Always check your data.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Never restore a backup on a live site.'),$_smarty_tpl ) );?>
</li>
			</ol>
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;add<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="form-horizontal">
				<button type="submit" class="btn btn-default">
					<i class="icon-save"></i> 
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I have read the disclaimer. Please create a new backup.'),$_smarty_tpl ) );?>

				</button>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="alert alert-info">
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to restore a database backup in 10 easy steps:'),$_smarty_tpl ) );?>
</p>
			<ol>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set "Enable Shop" to "No" in the "Maintenance" page under the "Preferences" menu.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download the backup from the list below or from your FTP server (in the folder "admin/backups").'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check the backup integrity: Look for errors, incomplete file, etc... Be sure to verify all of your data.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ask your hosting provider for "phpMyAdmin" access to your database.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect to "phpMyAdmin" and select your current database.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unless you enabled the "Drop existing tables" option, you must delete all tables from your current database.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'At the top of the screen, please select the "Import" tab'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on the "Browse" button and select the backup file from your hard drive.'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check the maximum filesize allowed (e.g. Max: 16MB)'),$_smarty_tpl ) );?>
<br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If your backup file exceeds this limit, contact your hosting provider for assistance. '),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on the "Go" button and please wait patiently for the import process to conclude. This may take several minutes.'),$_smarty_tpl ) );?>
</li>
			</ol>
		</div>
	</div>
<?php
}
}
/* {/block "override_tpl"} */
}
