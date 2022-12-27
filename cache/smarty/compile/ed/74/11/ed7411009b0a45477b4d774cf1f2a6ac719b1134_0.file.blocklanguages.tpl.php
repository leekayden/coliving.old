<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blocklanguages\blocklanguages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11569903_99913162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed7411009b0a45477b4d774cf1f2a6ac719b1134' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blocklanguages\\blocklanguages.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11569903_99913162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>
<!-- Block languages module -->
<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<div class="row">
		<section class="col-xs-12 col-sm-12">
			<div class="row margin-lr-0 footer-section-heading">
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','mod'=>'blocklanguages'),$_smarty_tpl ) );?>
</p>
				<hr/>
			</div>
			<div class="row margin-lr-0">
				<div id="languages-block-top" class="languages-block">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k', 'languages', array (
));
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == $_smarty_tpl->tpl_vars['lang_iso']->value) {?>
							<div class="current">
								<span><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['language']->value['name'],"/\s\(.*\)"."$"."/",'');?>
</span>
							</div>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<ul id="first-languages" class="languages-block_ul toogle_content">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k', 'languages', array (
));
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
							<li <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == $_smarty_tpl->tpl_vars['lang_iso']->value) {?>class="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] != $_smarty_tpl->tpl_vars['lang_iso']->value) {?>
								<?php $_smarty_tpl->_assignInScope('indice_lang', $_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
								<?php if ((isset($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value]))) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
								<?php } else { ?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
								<?php }?>
							<?php }?>
									<span><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['language']->value['name'],"/\s\(.*\)"."$"."/",'');?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] != $_smarty_tpl->tpl_vars['lang_iso']->value) {?>
								</a>
							<?php }?>
							</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
		</section>
	</div>
<?php }?>

<!-- /Block languages module -->
<?php }
}
