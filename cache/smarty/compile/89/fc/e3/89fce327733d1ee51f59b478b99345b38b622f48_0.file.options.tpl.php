<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\themes\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1421ea06_13358254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89fce327733d1ee51f59b478b99345b38b622f48' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\themes\\helpers\\options\\options.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1421ea06_13358254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1527584949639e8c1420d6d2_57108491', "input");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1751304928639e8c14217a68_74383122', "footer");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73664431639e8c1421e535_09912155', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "input"} */
class Block_1527584949639e8c1420d6d2_57108491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_1527584949639e8c1420d6d2_57108491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'theme') {?>
		<?php if ($_smarty_tpl->tpl_vars['field']->value['can_display_themes']) {?>
			<div class="col-lg-12">
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['themes'], 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
						<div class="col-sm-4 col-lg-3">
							<div class="theme-container">
								<h4 class="theme-title"><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
</h4>
								<div class="thumbnail-wrapper">
									<div class="action-wrapper">
										<div class="action-overlay"></div>
										<div class="action-buttons">
											<div class="btn-group">
												<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitOptionstheme&amp;id_theme=<?php echo $_smarty_tpl->tpl_vars['theme']->value->id;?>
" class="btn btn-default">
													<i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this theme'),$_smarty_tpl ) );?>

												</a>
												<?php if ($_smarty_tpl->tpl_vars['theme']->value->name != 'hotel-reservation-theme' || ($_smarty_tpl->tpl_vars['theme']->value->name == 'hotel-reservation-theme' && $_smarty_tpl->tpl_vars['host_mode']->value == 0)) {?>
												<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="icon-caret-down"></i>&nbsp;
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'), ENT_QUOTES, 'UTF-8', true);?>
&amp;deletetheme&amp;id_theme=<?php echo $_smarty_tpl->tpl_vars['theme']->value->id;?>
" title="Delete this theme" class="delete">
															<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this theme'),$_smarty_tpl ) );?>

														</a>
													</li>
												</ul>
												<?php }?>
											</div>
										</div>
									</div>
									<img class="center-block img-thumbnail" src="../themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value->directory;?>
/preview.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
" />
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['not_installed'], 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
						<div class="col-sm-4 col-lg-3">
							<div class="theme-container">
								<h4 class="theme-title"><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</h4>
								<div class="thumbnail-wrapper">
									<div class="action-wrapper">
										<div class="action-overlay"></div>
										<div class="action-buttons">
											<div class="btn-group">
												<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'), ENT_QUOTES, 'UTF-8', true);?>
&amp;installThemeFromFolder&amp;theme_dir=<?php echo $_smarty_tpl->tpl_vars['theme']->value['directory'];?>
" class="btn btn-default">
													<i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install this theme'),$_smarty_tpl ) );?>

												</a>
												<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="icon-caret-down"></i>&nbsp;
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'), ENT_QUOTES, 'UTF-8', true);?>
&amp;deletetheme&amp;theme_dir=<?php echo $_smarty_tpl->tpl_vars['theme']->value['directory'];?>
" title="Delete this theme" class="delete">
															<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this theme'),$_smarty_tpl ) );?>

														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<img class="center-block img-thumbnail" src="../themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value['directory'];?>
/themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value['directory'];?>
/preview.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
" />
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "footer"} */
class Block_1751304928639e8c14217a68_74383122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1751304928639e8c14217a68_74383122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['after_tabs']))) {?>
		<?php $_smarty_tpl->_assignInScope('cur_theme', $_smarty_tpl->tpl_vars['categoryData']->value['after_tabs']['cur_theme']);?>
		<div class="row row-padding-top">

			<div class="col-md-3">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="_blank">
					<img class="center-block img-thumbnail" src="../themes/<?php echo $_smarty_tpl->tpl_vars['cur_theme']->value['theme_directory'];?>
/preview.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['cur_theme']->value['theme_name'];?>
" />
				</a>
			</div>

			<div id="js_theme_form_container" class="col-md-9">
				<h2><?php echo $_smarty_tpl->tpl_vars['cur_theme']->value['theme_name'];?>
 <?php if ((isset($_smarty_tpl->tpl_vars['cur_theme']->value['theme_version']))) {?><small>version <?php echo $_smarty_tpl->tpl_vars['cur_theme']->value['theme_version'];?>
</small><?php }?></h2>
				<?php if ((isset($_smarty_tpl->tpl_vars['cur_theme']->value['author_name']))) {?>
				<p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Designed by %s','sprintf'=>$_smarty_tpl->tpl_vars['cur_theme']->value['author_name']),$_smarty_tpl ) );?>

				</p>
				<?php }?>

				<?php if ((isset($_smarty_tpl->tpl_vars['cur_theme']->value['tc'])) && $_smarty_tpl->tpl_vars['cur_theme']->value['tc']) {?>
				<hr />
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize your theme'),$_smarty_tpl ) );?>
</h4>
				<div class="row">
					<div class="col-sm-8">
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize the main elements of your theme: sliders, banners, colors, etc.'),$_smarty_tpl ) );?>
</p>
					</div>
					<div class="col-sm-4">
						<a class="btn btn-default pull-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&amp;configure=themeconfigurator">
							<i class="icon icon-list-alt"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme Configurator'),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>
				<?php }?>
				<hr />
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure your theme'),$_smarty_tpl ) );?>
</h4>
				<div class="row">
					<div class="col-sm-8">
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure your theme\'s advanced settings, such as the number of columns you want for each page. This setting is mostly for advanced users.'),$_smarty_tpl ) );?>
</p>
					</div>
					<div class="col-sm-4">
						<a class="btn btn-default pull-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'), ENT_QUOTES, 'UTF-8', true);?>
&amp;updatetheme&amp;id_theme=<?php echo $_smarty_tpl->tpl_vars['cur_theme']->value['theme_id'];?>
">
							<i class="icon icon-cog"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advanced settings'),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>
			</div>
		</div>

	<?php }?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>


<?php
}
}
/* {/block "footer"} */
/* {block "after"} */
class Block_73664431639e8c1421e535_09912155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_73664431639e8c1421e535_09912155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		// These variable will move the form to another location
		var formToMove = "appearance";
		var formDestination = "js_theme_form_container";
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "after"} */
}
