<?php
/* Smarty version 3.1.31, created on 2016-12-17 22:08:54
  from "E:\xampp\htdocs\Lab72\templates\header.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5855a9665ad1f0_39064771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd0c14e5354ce040ae674b6becd6183c150c87a4' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Lab72\\templates\\header.html.php',
      1 => 1482008930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5855a9665ad1f0_39064771 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title>Przykład wykorzystania wzorca MVC</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Latest compiled and minified JavaScript -->
        <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-latest.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <!-- css -->
        <link href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/bootstrap.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    </head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Jakieś logo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle glyphicon glyphicon-folder-open" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Kategoria<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Categories" class="glyphicon glyphicon-folder-open"> Kategoria</a></li>
              <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Categories/add" class="glyphicon glyphicon-plus"> Dodaj kategorię</a></li>
            </ul>
          </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle glyphicon glyphicon glyphicon-book" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Ksiazka<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Ksiazka" class="glyphicon glyphicon glyphicon-book"> Ksiazka</a></li>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Ksiazka/add" class="glyphicon glyphicon-plus"> Dodaj ksiazke</a></li>
              </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Autor<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Autor" class="glyphicon glyphicon-user"> Autor</a></li>
                  <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Autor/add" class="glyphicon glyphicon-plus"> Dodaj autora</a></li>
                </ul>
              </li>
      </ul>

      <form class="navbar-form navbar-right" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Ksiazka/year" method="post">
        <div class="form-group">
          <input type="number" class="form-control" placeholder="Rok wydania ksiazki" id="rok" name="rok">
        </div>
        <button type="submit" class="btn btn-default">Szukaj</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<body>
<div id="wrap">
  <div class="row center-block">
    <div class="col-md-12">
<?php }
}
