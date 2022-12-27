<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockcurrencies\blockcurrencies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1150cab8_28205339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ccbcdd0fb3235d1a9bb58393b464c951799f9e4' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockcurrencies\\blockcurrencies.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1150cab8_28205339 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block currencies module -->
<?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
	<div class="row">
		<section class="col-xs-12 col-sm-12">
			<div class="row margin-lr-0 footer-section-heading">
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','mod'=>'blockcurrencies'),$_smarty_tpl ) );?>
</p>
				<hr/>
			</div>
			<div class="row margin-lr-0">
				<div id="currencies-block-top">
					<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
						<div class="current">
							<input type="hidden" name="id_currency" id="id_currency" value=""/>
							<input type="hidden" name="SubmitCurrency" value="" />
							<span class="cur-label">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'f_currency', false, 'k');
$_smarty_tpl->tpl_vars['f_currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency == $_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {
echo $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'];
}?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</span>
						</div>
						<ul id="first-currencies" class="currencies_ul toogle_content">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'f_currency', false, 'k');
$_smarty_tpl->tpl_vars['f_currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->do_else = false;
?>
								<?php if (strpos($_smarty_tpl->tpl_vars['f_currency']->value['name'],('(').($_smarty_tpl->tpl_vars['f_currency']->value['iso_code']).(')')) === false) {?>
									<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s (%s)','sprintf'=>array($_smarty_tpl->tpl_vars['f_currency']->value['name'],$_smarty_tpl->tpl_vars['f_currency']->value['iso_code'])),$_smarty_tpl ) );
$_prefixVariable14 = ob_get_clean();
$_smarty_tpl->_assignInScope('currency_name', $_prefixVariable14);?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('currency_name', $_smarty_tpl->tpl_vars['f_currency']->value['name']);?>
								<?php }?>
								<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency == $_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
									<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>
">
										<?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>

									</a>
								</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</form>
				</div>
			</div>
		</section>
	</div>
<?php }?>
<!-- /Block currencies module -->
<?php }
}
