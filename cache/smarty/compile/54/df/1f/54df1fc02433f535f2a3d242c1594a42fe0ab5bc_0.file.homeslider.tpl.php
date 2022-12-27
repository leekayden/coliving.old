<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\homeslider\homeslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12182437_10124897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54df1fc02433f535f2a3d242c1594a42fe0ab5bc' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\homeslider\\homeslider.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c12182437_10124897 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>
<!-- Module HomeSlider -->
    <?php if ((isset($_smarty_tpl->tpl_vars['homeslider_slides']->value))) {?>
		<div id="homepage-slider">
			<?php if ((isset($_smarty_tpl->tpl_vars['homeslider_slides']->value[0])) && (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value[0]['sizes'][1]))) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'height', null, null);
echo $_smarty_tpl->tpl_vars['homeslider_slides']->value[0]['sizes'][1];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
			<ul id="homeslider"<?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'height') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'height')) {?> style="max-height:<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'height');?>
px;"<?php }?>>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider_slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
						<li class="homeslider-container">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."homeslider/images/".((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))));?>
"<?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['size'])) && $_smarty_tpl->tpl_vars['slide']->value['size']) {?> <?php echo $_smarty_tpl->tpl_vars['slide']->value['size'];
} else { ?> width="100%" height="100%"<?php }?> alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
							</a>
							<?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['description'])) && trim($_smarty_tpl->tpl_vars['slide']->value['description']) != '') {?>
								<div class="homeslider-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
							<?php }?>
						</li>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	<?php }?>
<!-- /Module HomeSlider -->
<?php }
}
}
