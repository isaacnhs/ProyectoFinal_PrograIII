<?php
/* Smarty version 5.3.1, created on 2024-08-21 20:18:33
  from 'file:alumno_dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c62f79ea2cf1_58680121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2964569e6979aa1b308a0b507be2c25c315a1d5b' => 
    array (
      0 => 'alumno_dashboard.tpl',
      1 => 1724264288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alumno/horario.tpl' => 1,
    'file:alumno/listado_alumnos.tpl' => 1,
    'file:alumno/listado_profesores.tpl' => 1,
    'file:alumno/notas.tpl' => 1,
    'file:alumno/faltas.tpl' => 1,
  ),
))) {
function content_66c62f79ea2cf1_58680121 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
 
 <div class="container mt-5">
    <h1>Bienvenid@, alumno: <?php echo $_smarty_tpl->getValue('user')['nombre'];?>
</h1><br/>

    <!-- Menú de navegación -->
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'horario') {?>active<?php }?>" href="?section=horario">Consultar Horario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'alumnos') {?>active<?php }?>" href="?section=alumnos">Listado de Alumnos de Clase</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'profesores') {?>active<?php }?>" href="?section=profesores">Listado de Profesores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'notas') {?>active<?php }?>" href="?section=notas">Consultar Notas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" <?php if ($_smarty_tpl->getValue('section') == 'faltas') {?>active<?php }?>" href="?section=faltas">Listar Faltas de Asistencia</a>
            </li>
            <li class="nav-item">
                <a href="alumno_dashboard.php?action=logout" class="btn btn-danger mt-3">Cerrar Sesión</a>
            </li>
 

        </ul>
    </nav>


    <!-- Contenido dinámico según la sección seleccionada -->
    <?php if ($_smarty_tpl->getValue('section') == 'horario') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:alumno/horario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'alumnos') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:alumno/listado_alumnos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'profesores') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:alumno/listado_profesores.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'notas') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:alumno/notas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('section') == 'faltas') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:alumno/faltas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
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
