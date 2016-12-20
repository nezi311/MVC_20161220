<?php
/* Smarty version 3.1.31, created on 2016-12-20 12:32:56
  from "/opt/lampp/htdocs/Lab73/templates/oneAutor.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_585916e814fe64_51877872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a25844d2971049dfce4f9013f12847f58558e5f' => 
    array (
      0 => '/opt/lampp/htdocs/Lab73/templates/oneAutor.html.php',
      1 => 1482011118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_585916e814fe64_51877872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['oneAutor']->value)) {?>
<div class="page-header">
  <h2>Autor szczegóły</h2>
  <h4>
    <?php echo $_smarty_tpl->tpl_vars['oneAutor']->value['imie'];?>
 : <?php echo $_smarty_tpl->tpl_vars['oneAutor']->value['nazwisko'];?>

    <a class="btn glyphicon glyphicon-remove" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Autor/delete/<?php echo $_smarty_tpl->tpl_vars['oneAutor']->value['id'];?>
"></a>
  </h4>
</div>
  <ul>

    <?php if (isset($_smarty_tpl->tpl_vars['ksiazki']->value)) {?>
      <?php if (count($_smarty_tpl->tpl_vars['ksiazki']->value) === 0) {?>
        <h4>Brak ksiązek wydanych przez tego autora.</h4>
      <?php } else { ?>
        <h4>Ksiazki wydane przez autora : </h4>
        <div class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ksiazki']->value, 'ksiazka');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ksiazka']->value) {
?>
          <strong>
            <a class="list-group-item" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Ksiazka/showone/<?php echo $_smarty_tpl->tpl_vars['ksiazka']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ksiazka']->value['tytul'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ksiazka']->value['rok_wydania'];?>
)</a>
          </strong>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
      <?php }?>
    <?php }?>
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
