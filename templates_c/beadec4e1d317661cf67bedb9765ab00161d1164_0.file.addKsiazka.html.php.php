<?php
/* Smarty version 3.1.31, created on 2016-12-17 22:22:28
  from "E:\xampp\htdocs\Lab72\templates\addKsiazka.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5855ac94927e33_77577218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beadec4e1d317661cf67bedb9765ab00161d1164' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Lab72\\templates\\addKsiazka.html.php',
      1 => 1482009699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5855ac94927e33_77577218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-header">
	<h2>Dodaj książkę</h2>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['setAutorzy']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['setAutorzy']->value) === 0) {?>
	<b>Brak Autorow w bazie!</b><br/><br/>
	<?php } else { ?>
	<div class="container">
		  <h2>Dodaj kategorię</h2>
		<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Ksiazka/insert" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="tytul">Tytuł :</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="tytul" name="tytul" placeholder="Wprowadz tytuł">
	      </div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="autorzy">Autor :</label>
				<div class="col-sm-10">
					<select class="form-control" id='autorzy' name='autorzy'>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setAutorzy']->value, 'autorzy');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['autorzy']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['autorzy']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['autorzy']->value['imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['autorzy']->value['nazwisko'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					</select>
				</div>
			</div>
		<?php }?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['setKategorie']->value)) {?>
		<?php if (count($_smarty_tpl->tpl_vars['setKategorie']->value) === 0) {?>
		<strong>Brak kategorii do wyswietlenia!</strong>
		<?php } else { ?>
			<div class="form-group">
				<label class="control-label col-sm-2" for="kategorie">Kategorie :</label>
				<div class="col-sm-10">
					<select class="form-control" id='kategorie' name='kategorie'>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setKategorie']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['nazwa'];?>
</optiopn>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					<select>
				</div>
			</div>
		<?php }?>
	<?php }?>
		<div class="form-group">
			<label class="control-label col-sm-2" for="rok_wydania">Rok wydania :</label>
			<div class="col-sm-10">
				<input class="form-control" type='number' id='rok_wydania' name='rok_wydania' placeholder="Wprowadź rok"/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Dodaj</button>
			</div>
		</div>
	  </form>
	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
	<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
