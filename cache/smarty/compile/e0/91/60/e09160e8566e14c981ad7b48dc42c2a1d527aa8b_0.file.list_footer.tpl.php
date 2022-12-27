<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\combination\helpers\list\list_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12c70b80_89992630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e09160e8566e14c981ad7b48dc42c2a1d527aa8b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\combination\\helpers\\list\\list_footer.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c12c70b80_89992630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_516188101639e8c12c6efe6_97019582', "after");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_984682945639e8c12c704f8_37651051', "endForm");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_footer.tpl");
}
/* {block "after"} */
class Block_516188101639e8c12c6efe6_97019582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_516188101639e8c12c6efe6_97019582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="alert alert-info" style="display:block">
		<ul>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The blue row indicates the default combination.'),$_smarty_tpl ) );?>
</li>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Each product that has combinations must have one default combination.'),$_smarty_tpl ) );?>
</li>
		</ul>
	</div>
<?php
}
}
/* {/block "after"} */
/* {block "endForm"} */
class Block_984682945639e8c12c704f8_37651051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'endForm' => 
  array (
    0 => 'Block_984682945639e8c12c704f8_37651051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "endForm"} */
}
