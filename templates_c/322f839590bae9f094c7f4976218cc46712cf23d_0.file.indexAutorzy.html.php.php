<?php
/* Smarty version 3.1.31, created on 2016-12-17 22:46:43
  from "E:\xampp\htdocs\Lab72\templates\indexAutorzy.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5855b243010ce4_09491407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322f839590bae9f094c7f4976218cc46712cf23d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Lab72\\templates\\indexAutorzy.html.php',
      1 => 1482010051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5855b243010ce4_09491407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-header">
	<h2>Lista autorów</h2>
</div>

	<?php if (isset($_smarty_tpl->tpl_vars['zmiennaAutorzy']->value)) {?>
		<ul class="list-group">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zmiennaAutorzy']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
			<li class="list-group-item">
					<a class="btn btn-default" role="button" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Autor/showone/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['imie'];?>
  <?php echo $_smarty_tpl->tpl_vars['item']->value['nazwisko'];?>
</a>
					<span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value['ilosc'];?>
</span>
					<a class="btn btn-default glyphicon glyphicon-remove-sign" role="button" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Autor/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></a>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</ul>
	<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
