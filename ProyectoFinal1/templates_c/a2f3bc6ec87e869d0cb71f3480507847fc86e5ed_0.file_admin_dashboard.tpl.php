<?php
/* Smarty version 5.3.1, created on 2024-08-22 02:45:59
  from 'file:admin_dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c68a479d1233_85798211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2f3bc6ec87e869d0cb71f3480507847fc86e5ed' => 
    array (
      0 => 'admin_dashboard.tpl',
      1 => 1724287533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/alta_usuario.tpl' => 1,
    'file:admin/baja_usuario.tpl' => 1,
    'file:admin/modificar_usuario.tpl' => 1,
    'file:admin/alta_asignatura.tpl' => 1,
    'file:admin/baja_asignatura.tpl' => 1,
    'file:admin/modificar_asignatura.tpl' => 1,
    'file:admin/matricular_alumno.tpl' => 1,
  ),
))) {
function content_66c68a479d1233_85798211 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
 
<div class="container mt-5">
    <h1>Bienvenid@, administrador: <?php echo $_smarty_tpl->getValue('user')['nombre'];?>
</h1><br/>

    <!-- Menú de navegación -->
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'alta_usuario') {?>active<?php }?>" href="?section=alta_usuario">Alta Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'baja_usuario') {?>active<?php }?>" href="?section=baja_usuario">Baja Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'modificar_usuario') {?>active<?php }?>" href="?section=modificar_usuario">Modificar Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'alta_asignatura') {?>active<?php }?>" href="?section=alta_asignatura">Alta Asignatura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'baja_asignatura') {?>active<?php }?>" href="?section=baja_asignatura">Baja Asignatura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'modificar_asignatura') {?>active<?php }?>" href="?section=modificar_asignatura">Modificar Asignatura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'matricular_alumno') {?>active<?php }?>" href="?section=matricular_alumno">Matricular Alumno</a>
            </li>
        </ul>
        <a href="admin_dashboard.php?action=logout" class="btn btn-danger mt-3 mb-3 float-right">Cerrar Sesión</a>
    </nav>

    <!-- Contenido dinámico según la sección seleccionada -->
    <?php if ($_smarty_tpl->getValue('section') == 'alta_usuario') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:admin/alta_usuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'baja_usuario') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:admin/baja_usuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'modificar_usuario') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:admin/modificar_usuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'alta_asignatura') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:admin/alta_asignatura.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'baja_asignatura') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:admin/baja_asignatura.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'modificar_asignatura') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:admin/modificar_asignatura.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'matricular_alumno') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:admin/matricular_alumno.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
</div>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
