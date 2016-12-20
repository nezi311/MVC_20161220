<?php
/* Smarty version 3.1.31, created on 2016-12-17 22:20:31
  from "E:\xampp\htdocs\Lab72\templates\addCategory.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5855ac1f89de86_57564669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c0ca28adef008069b751936d2fc4b54929d46b3' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Lab72\\templates\\addCategory.html.php',
      1 => 1482009628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5855ac1f89de86_57564669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-header">
    <h2>Dodaj kategorię</h2>
</div>

<div class="container">
  <form class="form-horizontal" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Categories/insert" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Nazwa kategorii:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Wprowadz kategorię">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Dodaj</button>
      </div>
    </div>
  </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
