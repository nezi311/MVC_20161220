<?php
/* Smarty version 3.1.31, created on 2016-12-20 12:31:50
  from "/opt/lampp/htdocs/Lab73/templates/oneKsiazka.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_585916a6c019c2_29608270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7599df14bf19adc749b0e622437d4f8861e12ceb' => 
    array (
      0 => '/opt/lampp/htdocs/Lab73/templates/oneKsiazka.html.php',
      1 => 1482007562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_585916a6c019c2_29608270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-header">
  <h1>Książka</h1>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['oneKsiazka']->value)) {
if (count($_smarty_tpl->tpl_vars['oneKsiazka']->value) === 0) {?>
  <strong>Brak ksiazki w bazie danych!</strong>
<?php } else { ?>
  <div class="panel panel-default">
  <!-- Default panel contents -->
    <div class="panel-heading">Szczegóły książki</div>
      <div class="panel-body">
        <p>Tu można wpisać przykładowy opis.</p>
      </div>

    <!-- Table -->
    <table class="table">
      <thead>
        <tr>
          <th>Id</th><th>Tytuł</th><th>Rok wydania</th><th>Autor</th><th>Kategoria</th><th>Usuń</th>
        </tr>
      </thead>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['oneKsiazka']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['oneKsiazka']->value['tytul'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['oneKsiazka']->value['rok_wydania'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['oneKsiazka']->value['nazwaAutor'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['oneKsiazka']->value['nazwaKategoria'];?>
</td>
        <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Autor/delete/<?php echo $_smarty_tpl->tpl_vars['oneKsiazka']->value['id'];?>
" class="btn glyphicon glyphicon-remove"></a></td>
      </tr>
    </table>
  </div>

<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
