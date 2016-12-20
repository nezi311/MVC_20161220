<?php
/* Smarty version 3.1.31, created on 2016-12-20 13:21:02
  from "/opt/lampp/htdocs/Lab73/templates/install.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5859222e41c471_81826537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77e90f0db556abc73d754db7b5600ff2c1dd282d' => 
    array (
      0 => '/opt/lampp/htdocs/Lab73/templates/install.html.php',
      1 => 1481490306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5859222e41c471_81826537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Instalacja bazy</h1>
	<?php if (isset($_smarty_tpl->tpl_vars['wiadomosc']->value)) {?>
		<h2><?php echo $_smarty_tpl->tpl_vars['wiadomosc']->value;?>
</h2>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
		<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
	<?php }
$_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
