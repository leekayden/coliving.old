<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\customer_threads\helpers\view\message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c115a6d14_96784005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2acaea3d846660b779492accce1137560c28091a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\customer_threads\\helpers\\view\\message.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c115a6d14_96784005 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['message']->value['id_employee']) {?>
	<?php $_smarty_tpl->_assignInScope('type', "customer");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('type', "employee");
}?>

<div class="message-item<?php if ($_smarty_tpl->tpl_vars['initial']->value) {?>-initial-body<?php }?>">
<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
	<div class="message-avatar">
		<div class="avatar-md">
			<?php if ($_smarty_tpl->tpl_vars['type']->value == 'customer') {?>
				<i class="icon-user icon-3x"></i>
			<?php } else { ?>
				<?php if ((isset($_smarty_tpl->tpl_vars['current_employee']->value->firstname))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['employee_image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_employee']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
			<?php }?>
		</div>
	</div>
<?php }?>
	<div class="message-body">
		<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
			<h4 class="message-item-heading">
				<i class="icon-mail-reply text-muted"></i>
					<?php if ($_smarty_tpl->tpl_vars['type']->value == 'customer') {?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['customer_name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php } else { ?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['employee_name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
			</h4>
		<?php }?>
		<span class="message-date">&nbsp;<i class="icon-calendar"></i> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['message']->value['date_add'],11,5);?>
</span>
		<?php if ((isset($_smarty_tpl->tpl_vars['message']->value['file_name']))) {?> <span class="message-product">&nbsp;<i class="icon-link"></i> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Attachment"),$_smarty_tpl ) );?>
</a></span><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['message']->value['product_name']))) {?> <span class="message-attachment">&nbsp;<i class="icon-book"></i> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['product_link'], ENT_QUOTES, 'UTF-8', true);?>
" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Product:"),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
 </a></span><?php }?>
		<p class="message-item-text"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</p>
	</div>
</div>
<?php }
}
