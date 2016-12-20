<?php
/* Smarty version 3.1.31, created on 2016-12-17 22:22:26
  from "E:\xampp\htdocs\Lab72\templates\indexKsiazka.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5855ac9268c3c2_69100476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '615151fa0204e9627e0ac8af69ce876f693ba234' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Lab72\\templates\\indexKsiazka.html.php',
      1 => 1482009706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5855ac9268c3c2_69100476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-header">
	<h2>Lista ksiażek</h2>
</div>
<ul>
	<?php if (isset($_smarty_tpl->tpl_vars['zmiennaKategorie']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['zmiennaKategorie']->value) === 0) {?>
		<strong>Brak kategorii w bazie!</strong>
	<?php } else { ?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zmiennaKategorie']->value, 'itemKategorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemKategorie']->value) {
?>
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" href="#collapse1<?php echo $_smarty_tpl->tpl_vars['itemKategorie']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemKategorie']->value['nazwa'];?>
</a>
					</h4>
				</div>

				<div id="collapse1<?php echo $_smarty_tpl->tpl_vars['itemKategorie']->value['id'];?>
" class="panel-collapse collapse">
					<ul class="list-group">
						<a class="list-group-item list-group-item-action" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Categories/showone/<?php echo $_smarty_tpl->tpl_vars['itemKategorie']->value['id'];?>
">Szczegoly</a>
				<?php if (isset($_smarty_tpl->tpl_vars['zmiennaKsiazka']->value)) {?>
				<?php if (count($_smarty_tpl->tpl_vars['zmiennaKsiazka']->value) === 0) {?>
					<strong>Brak ksiązek w bazie!</strong>
				<?php } else { ?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zmiennaKsiazka']->value, 'ksiazka');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ksiazka']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['itemKategorie']->value['id'] == $_smarty_tpl->tpl_vars['ksiazka']->value['kategoria']) {?>
								<a class="list-group-item list-group-item-action" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Ksiazka/showone/<?php echo $_smarty_tpl->tpl_vars['ksiazka']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ksiazka']->value['tytul'];?>
 : <?php echo $_smarty_tpl->tpl_vars['ksiazka']->value['autorNazwa'];?>
</a>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</ul>
					</div>
					</div>
				</div>
				<?php }?>
				<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		</ul>
	<?php }?>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
	<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
