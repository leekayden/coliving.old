<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:45:22
  from 'C:\xampp2\htdocs\coliving\modules\blocknavigationmenu\views\templates\hook\wkFooterNavigationBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae8e2480136_35100905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f3238c3f18bc443a85668f59d98ebf278510e46' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\blocknavigationmenu\\views\\templates\\hook\\wkFooterNavigationBlock.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae8e2480136_35100905 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['navigation_links']->value)) && $_smarty_tpl->tpl_vars['navigation_links']->value) {?>
	<div class="col-sm-3">
		<div class="row">
			<section class="col-xs-12 col-sm-12">
				<div class="row margin-lr-0 footer-section-heading">
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Explore','mod'=>'blocknavigationmenu'),$_smarty_tpl ) );?>
</p>
					<hr/>
				</div>
				<div class="row margin-lr-0">
					<ul class="footer-navigation-section">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation_links']->value, 'navigationLink');
$_smarty_tpl->tpl_vars['navigationLink']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navigationLink']->value) {
$_smarty_tpl->tpl_vars['navigationLink']->do_else = false;
?>
						<li class="item">
							<a title="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
</a>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</section>
		</div>
	</div>
<?php }?>




<?php }
}
