<?php
/* Smarty version 3.1.31, created on 2016-12-20 12:31:43
  from "/opt/lampp/htdocs/Lab73/templates/oneCategory.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5859169f76cd73_49100917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c27f0e49bf6c105455d09a943e64c1befc643ec' => 
    array (
      0 => '/opt/lampp/htdocs/Lab73/templates/oneCategory.html.php',
      1 => 1482010642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5859169f76cd73_49100917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<?php ';?>include 'templates/header.html.php'; <?php echo '?>';
if (isset($_smarty_tpl->tpl_vars['oneCat']->value)) {
if (count($_smarty_tpl->tpl_vars['oneCat']->value) === 0) {?>
  <strong>Brak kategorii o zadanym id</strong>
<?php } else { ?>
<div class="page-header">
  <h2>
    Kategoria :
    <small>
      <?php echo $_smarty_tpl->tpl_vars['oneCat']->value['nazwa'];?>
 <a class="btn glyphicon glyphicon-remove" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Categories/delete/<?php echo $_smarty_tpl->tpl_vars['oneCat']->value['id'];?>
"></a>
    </small>
  </h2>
</div>

  <?php if (isset($_smarty_tpl->tpl_vars['ksiazki']->value)) {?>
    <?php if (count($_smarty_tpl->tpl_vars['ksiazki']->value) === 0) {?>
      <h3>Brak ksiązek z tej kategorii.</h3>
    <?php } else { ?>
      <h3>Ksiązki z zadanej kategorii : </h3>
        <div class="list-group">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ksiazki']->value, 'ksiazka');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ksiazka']->value) {
?>
            <a class="list-group-item" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Ksiazka/showone/<?php echo $_smarty_tpl->tpl_vars['ksiazka']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ksiazka']->value['id'];?>
:<?php echo $_smarty_tpl->tpl_vars['ksiazka']->value['tytul'];?>
</a>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
   <?php }?>
  <?php }
}
}?>

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
