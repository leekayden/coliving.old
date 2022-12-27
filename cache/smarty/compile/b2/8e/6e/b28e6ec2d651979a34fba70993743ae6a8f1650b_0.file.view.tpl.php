<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\customer_threads\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11680120_80615828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28e6ec2d651979a34fba70993743ae6a8f1650b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\customer_threads\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modal.tpl' => 1,
    'file:./message.tpl' => 2,
    'file:controllers/customer_threads/helpers/view/timeline_item.tpl' => 1,
  ),
),false)) {
function content_639e8c11680120_80615828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_449626546639e8c1164daa8_37357216', "override_tpl");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_449626546639e8c1164daa8_37357216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_449626546639e8c1164daa8_37357216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:./modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="panel">
	<div class="panel-heading">
		<i class="icon-comments"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Thread"),$_smarty_tpl ) );?>
: <span class="badge">#<?php echo intval($_smarty_tpl->tpl_vars['id_customer_thread']->value);?>
</span>
		<?php if ((isset($_smarty_tpl->tpl_vars['next_thread']->value)) && $_smarty_tpl->tpl_vars['next_thread']->value) {?>
			<a class="btn btn-default pull-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_thread']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
">
				<?php echo $_smarty_tpl->tpl_vars['next_thread']->value['name'];?>
 <i class="icon-forward"></i>
			</a> 
		<?php }?>
	</div>
	<div class="well">
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomerThreads'), ENT_QUOTES, 'UTF-8', true);?>
&amp;viewcustomer_thread&amp;id_customer_thread=<?php echo intval($_smarty_tpl->tpl_vars['id_customer_thread']->value);?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
				<button class="btn btn-default" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['action']->value['value']);?>
">
					<?php if ((isset($_smarty_tpl->tpl_vars['action']->value['icon']))) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i><?php }
echo $_smarty_tpl->tpl_vars['action']->value['label'];?>

				</button>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Forward this discussion to another employee"),$_smarty_tpl ) );?>

			</button>
		</form>
	</div>
	<div class="row">
		<div class="message-item-initial media">
			<a href="<?php if ((isset($_smarty_tpl->tpl_vars['customer']->value->id))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_customer=<?php echo intval($_smarty_tpl->tpl_vars['customer']->value->id);?>
&amp;viewcustomer&<?php } else { ?>#<?php }?>" class="avatar-lg pull-left"><i class="icon-user icon-3x"></i></a>
			<div class="media-body">
				<div class="row">
					<div class="col-sm-6">
					<?php if ((isset($_smarty_tpl->tpl_vars['customer']->value->firstname))) {?>
						<h2>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_customer=<?php echo intval($_smarty_tpl->tpl_vars['customer']->value->id);?>
&amp;viewcustomer&">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
 <small>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value->email, ENT_QUOTES, 'UTF-8', true);?>
)</small>
							</a>
						</h2>
					<?php } else { ?>
						<h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</h2>
					<?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['contact']->value)) && trim($_smarty_tpl->tpl_vars['contact']->value) != '') {?>
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"To:"),$_smarty_tpl ) );?>
 </span><span class="badge"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
					<?php }?>
					</div>
					<?php if ((isset($_smarty_tpl->tpl_vars['customer']->value->firstname))) {?>
						<div class="col-sm-6">
							<p>
							<?php if ($_smarty_tpl->tpl_vars['count_ok']->value) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%1$d[/1] order(s) validated for a total amount of [2]%2$s[/2]','sprintf'=>array($_smarty_tpl->tpl_vars['count_ok']->value,$_smarty_tpl->tpl_vars['total_ok']->value),'tags'=>array('<span class="badge">','<span class="badge badge-success">')),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"No orders validated for the moment"),$_smarty_tpl ) );?>

							<?php }?>
							</p>
							<p class="text-muted"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['customer']->value->date_add,'full'=>0),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Customer since: %s",'sprintf'=>array($_prefixVariable3)),$_smarty_tpl ) );?>
</p>
						</div>
					<?php }?>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<?php if (!$_smarty_tpl->tpl_vars['first_message']->value['id_employee']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:./message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['first_message']->value,'initial'=>true), 0, false);
?>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
			<?php $_smarty_tpl->_subTemplateRender("file:./message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['message']->value,'initial'=>false), 0, true);
?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<div class="panel">
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomerThreads'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_customer_thread=<?php echo intval($_smarty_tpl->tpl_vars['thread']->value->id);?>
&amp;viewcustomer_thread" method="post" enctype="multipart/form-data" class="form-horizontal">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your answer to"),$_smarty_tpl ) );?>
 <?php if ((isset($_smarty_tpl->tpl_vars['customer']->value->firstname))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['thread']->value->email;
}?></h3>
	<div class="row">
		<div class="media">
			<div class="pull-left">
				<span class="avatar-md"><?php if ((isset($_smarty_tpl->tpl_vars['current_employee']->value->firstname))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['current_employee']->value->getImage();?>
" alt=""><?php }?></span>
			</div>
			<div class="media-body">
				<textarea cols="30" rows="7" name="reply_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PS_CUSTOMER_SERVICE_SIGNATURE']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<!--
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<i class="icon-magic icon-2x"></i><br>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Choose a template"),$_smarty_tpl ) );?>

		</button>
		-->		
		<button class="btn btn-default pull-right" name="submitReply"><i class="process-icon-mail-reply"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Send"),$_smarty_tpl ) );?>
</button>
		<input type="hidden" name="id_customer_thread" value="<?php echo intval($_smarty_tpl->tpl_vars['thread']->value->id);?>
" />
		<input type="hidden" name="msg_email" value="<?php echo $_smarty_tpl->tpl_vars['thread']->value->email;?>
" />
	</div>
	</form>
</div>

<?php if (count($_smarty_tpl->tpl_vars['timeline_items']->value)) {?>
<div class="panel">
	<h3>
		<i class="icon-clock-o"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Orders and messages timeline"),$_smarty_tpl ) );?>

	</h3>
	<div class="timeline">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timeline_items']->value, 'dates');
$_smarty_tpl->tpl_vars['dates']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dates']->value) {
$_smarty_tpl->tpl_vars['dates']->do_else = false;
?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dates']->value, 'timeline_item', false, 'date');
$_smarty_tpl->tpl_vars['timeline_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['date']->value => $_smarty_tpl->tpl_vars['timeline_item']->value) {
$_smarty_tpl->tpl_vars['timeline_item']->do_else = false;
?>
				<?php $_smarty_tpl->_subTemplateRender("file:controllers/customer_threads/helpers/view/timeline_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('timeline_item'=>$_smarty_tpl->tpl_vars['timeline_item']->value), 0, true);
?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
echo '<script'; ?>
 type="text/javascript">
	var timer;
		$(document).ready(function(){
			$('select[name=id_employee_forward]').change(function(){
				if ($(this).val() >= 0)
					$('#message_forward').show(400);
				else
					$('#message_forward').hide(200);
				if ($(this).val() == 0)
					$('#message_forward_email').show(200);
				else
					$('#message_forward_email').hide(200);
			});
			$('textarea[name=message_forward]').click(function(){
				if($(this).val() == '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can add a comment here.'),$_smarty_tpl ) );?>
')
				{
					$(this).val('');
				}
			});
			timer = setInterval("markAsRead()", 3000);
		});
	
	function markAsRead()
	{
		$.ajax({
			type: 'POST',
			url: 'ajax-tab.php',
			async: true,
			dataType: 'json',
			data: {
				controller: 'AdminCustomerThreads',
				action: 'markAsRead',
				token : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
',
				id_thread: <?php echo $_smarty_tpl->tpl_vars['id_customer_thread']->value;?>

			}
		});
		clearInterval(timer);
		timer = null;
	}
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "override_tpl"} */
}
