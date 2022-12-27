<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\referrers\calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13677c93_50335488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '339fa93e1fcbef819dfee4072cc001793d23adb5' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\referrers\\calendar.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13677c93_50335488 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="referrersContainer">
	<div id="calendar">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['action']->value && $_smarty_tpl->tpl_vars['table']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['action']->value;
echo $_smarty_tpl->tpl_vars['table']->value;
}
if ($_smarty_tpl->tpl_vars['identifier']->value && $_smarty_tpl->tpl_vars['id']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);
}?>" method="post" id="calendar_form" name="calendar_form" class="form-horizontal">
				<div class="panel">
					<input type="submit" name="submitDateDay" class="btn btn-default submitDateDay" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
" />
					<input type="submit" name="submitDateMonth" class="btn btn-default submitDateMonth" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
" />
					<input type="submit" name="submitDateYear" class="btn btn-default submitDateYear" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
" />
					<input type="submit" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
-1" />
					<input type="submit" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
-1" />
					<input type="submit" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
-1" />
					<p>
						<span><?php if ((isset($_smarty_tpl->tpl_vars['translations']->value['From']))) {
echo $_smarty_tpl->tpl_vars['translations']->value['From'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From:'),$_smarty_tpl ) );
}?></span>
						<input type="text" name="datepickerFrom" id="datepickerFrom" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datepickerFrom']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="datepicker" />
					</p>
					<p>
						<span><?php if ((isset($_smarty_tpl->tpl_vars['translations']->value['To']))) {
echo $_smarty_tpl->tpl_vars['translations']->value['To'];
} else { ?><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To:'),$_smarty_tpl ) );?>
</span><?php }?></span>
						<input type="text" name="datepickerTo" id="datepickerTo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datepickerTo']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="datepicker" />
					</p>
					<button type="submit" name="submitDatePicker" id="submitDatePicker" class="btn btn-default">
						<i class="icon-save"></i> <?php if ((isset($_smarty_tpl->tpl_vars['translations']->value['Save']))) {
echo $_smarty_tpl->tpl_vars['translations']->value['Save'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );
}?>
					</button>
				</div>
			</form>

			<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function() {
					if ($("form#calendar_form .datepicker").length > 0)
						$("form#calendar_form .datepicker").datepicker({
							prevText: '',
							nextText: '',
							dateFormat: 'yy-mm-dd'
						});
				});
			<?php echo '</script'; ?>
>
	</div>
<?php }
}
