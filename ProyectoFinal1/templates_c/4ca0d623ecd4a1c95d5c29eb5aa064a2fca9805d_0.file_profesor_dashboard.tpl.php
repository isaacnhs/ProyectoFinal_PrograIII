<?php
/* Smarty version 5.3.1, created on 2024-08-21 18:03:32
  from 'file:profesor_dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c60fd4005b22_52941447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ca0d623ecd4a1c95d5c29eb5aa064a2fca9805d' => 
    array (
      0 => 'profesor_dashboard.tpl',
      1 => 1724256208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:profesor/listado_alumnos.tpl' => 1,
    'file:profesor/listado_profesores.tpl' => 1,
    'file:profesor/gestion_notas.tpl' => 1,
    'file:profesor/gestion_faltas.tpl' => 1,
  ),
))) {
function content_66c60fd4005b22_52941447 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Profesor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
 
<div class="container mt-5">
    <h1>Bienvenid@, profesor: <?php echo $_smarty_tpl->getValue('user')['nombre'];?>
</h1><br/>

    <!-- Menú de navegación -->
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'listado_alumnos') {?>active<?php }?>" href="?section=listado_alumnos">Listar Alumnos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'listado_profesores') {?>active<?php }?>" href="?section=listado_profesores">Listar Profesores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'gestion_notas') {?>active<?php }?>" href="?section=gestion_notas">Gestión de Notas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'gestion_faltas') {?>active<?php }?>" href="?section=gestion_faltas">Gestión de Faltas de Asistencia</a>
            </li>
        </ul>
                <a href="profesor_dashboard.php?action=logout" class="btn btn-danger mt-3 mb-3 float-right">Cerrar Sesión</a>

    </nav>

    <!-- Contenido dinámico según la sección seleccionada -->
    <?php if ($_smarty_tpl->getValue('section') == 'listado_alumnos') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:profesor/listado_alumnos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'listado_profesores') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:profesor/listado_profesores.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'gestion_notas') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:profesor/gestion_notas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'gestion_faltas') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:profesor/gestion_faltas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
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
