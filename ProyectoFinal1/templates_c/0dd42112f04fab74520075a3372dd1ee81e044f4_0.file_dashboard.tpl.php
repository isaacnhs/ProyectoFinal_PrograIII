<?php
/* Smarty version 5.3.1, created on 2024-07-31 03:49:23
  from 'file:dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66a99823e7a125_50279508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dd42112f04fab74520075a3372dd1ee81e044f4' => 
    array (
      0 => 'dashboard.tpl',
      1 => 1722389050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a99823e7a125_50279508 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Usuario\\Desktop\\ProyectoFinal1\\templates';
?><!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_smarty_tpl->getValue('user')['nombre'];?>
 <?php echo $_smarty_tpl->getValue('user')['apellidos'];?>
</h2>
    <p>Tipo de usuario: <?php echo $_smarty_tpl->getValue('user_type');?>
</p>
    <p>Esta es la página de bienvenida después de iniciar sesión.</p>
    <!-- Aquí podrías mostrar opciones basadas en el tipo de usuario -->
</body>
</html>
<?php }
}
