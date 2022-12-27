<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\customer_threads\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1151eee9_87913504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '759ed81dfa2cc065a5a45b5a8f251285cf7e2974' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\customer_threads\\helpers\\list\\list_header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1151eee9_87913504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1705074944639e8c1150da22_41193714', "leadin");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "leadin"} */
class Block_1705074944639e8c1150da22_41193714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1705074944639e8c1150da22_41193714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="CustomerThreadContacts" class="row">
		<?php $_smarty_tpl->_assignInScope('nb_categories', count($_smarty_tpl->tpl_vars['categories']->value));?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>

			<?php $_smarty_tpl->_assignInScope('total_thread', 0);?>
			<?php $_smarty_tpl->_assignInScope('id_customer_thread', 0);?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'tmp2', false, 'tmp');
$_smarty_tpl->tpl_vars['tmp2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tmp']->value => $_smarty_tpl->tpl_vars['tmp2']->value) {
$_smarty_tpl->tpl_vars['tmp2']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['val']->value['id_contact'] == $_smarty_tpl->tpl_vars['tmp2']->value['id_contact']) {?>
					<?php $_smarty_tpl->_assignInScope('total_thread', $_smarty_tpl->tpl_vars['tmp2']->value['total']);?>
					<?php $_smarty_tpl->_assignInScope('id_customer_thread', $_smarty_tpl->tpl_vars['tmp2']->value['id_customer_thread']);?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="col-lg-3">
				<div class="panel">
					<div class="panel-heading">
						<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>

					</div>
					<?php if ($_smarty_tpl->tpl_vars['nb_categories']->value < 6) {?>
						<p><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</p>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['total_thread']->value == 0) {?>
						<span class="message-mail"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new messages'),$_smarty_tpl ) );?>
</span>
					<?php } else { ?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_customer_thread=<?php echo $_smarty_tpl->tpl_vars['id_customer_thread']->value;?>
&amp;viewcustomer_thread" class="button">
							<?php echo $_smarty_tpl->tpl_vars['total_thread']->value;?>
 
							<?php if ($_smarty_tpl->tpl_vars['total_thread']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New messages'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New message'),$_smarty_tpl ) );
}?>
						</a>
					<?php }?>
				</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div class="col-lg-3">
			<div id="MeaningStatus" class="panel">
				<div class="panel-heading">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meaning of status'),$_smarty_tpl ) );?>

				</div>
				<ul class="list-unstyled">
					<li class="text-success"><i class="icon-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open'),$_smarty_tpl ) );?>
</li>
					<li class="text-danger"><i class="icon-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Closed'),$_smarty_tpl ) );?>
</li>
					<li class="text-warning"><i class="icon-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending 1'),$_smarty_tpl ) );?>
</li>
					<li class="text-warning"><i class="icon-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending 2'),$_smarty_tpl ) );?>
</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3">
			<div id="CustomerService" class="panel">
				<div class="panel-heading">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Statistics'),$_smarty_tpl ) );?>

				</div>
				<ul class="list-unstyled">
					<?php $_smarty_tpl->_assignInScope('count', 0);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
						<li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</span></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block "leadin"} */
}
