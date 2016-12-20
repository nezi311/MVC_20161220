<?php
/* Smarty version 3.1.31, created on 2016-12-20 12:28:23
  from "/opt/lampp/htdocs/Lab73/templates/indexCategory.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_585915d7bb93f6_27124407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8863630d5077e8ba0451c4e5f725f4a5b62f9850' => 
    array (
      0 => '/opt/lampp/htdocs/Lab73/templates/indexCategory.html.php',
      1 => 1482009740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_585915d7bb93f6_27124407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-header">
	<h2>Lista kategorii</h2>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['zmiennaKategorie']->value)) {
if (count($_smarty_tpl->tpl_vars['zmiennaKategorie']->value) === 0) {?>
	<strong>Brak kategorii w bazie danych!</strong><<br/>
<?php } else { ?>
	<ul class="list-group">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zmiennaKategorie']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
			<li class="list-group-item">
				<a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Categories/showone/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-default" role="button"><?php echo $_smarty_tpl->tpl_vars['item']->value['nazwa'];?>
</a>
				<span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value['ilosc'];?>
</span>
				<a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Categories/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-default btn-align-right glyphicon glyphicon-remove-sign" role="button"></a>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</ul>
<?php }
}
if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
