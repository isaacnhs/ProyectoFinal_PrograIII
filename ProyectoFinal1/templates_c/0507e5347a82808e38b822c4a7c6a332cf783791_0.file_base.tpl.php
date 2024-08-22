<?php
/* Smarty version 5.3.1, created on 2024-08-21 20:05:16
  from 'file:profesor/base.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c62c5cc63f20_91894655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0507e5347a82808e38b822c4a7c6a332cf783791' => 
    array (
      0 => 'profesor/base.tpl',
      1 => 1724256198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c62c5cc63f20_91894655 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\profesor';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? 'Dashboard Profesor' ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <header>
            <h1>Bienvenid@, profesor: <?php echo $_smarty_tpl->getValue('user')['nombre'];?>
</h1>
        </header>

        <nav class="mt-4">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="profesor_dashboard.php?action=listado_alumnos">Listar Alumnos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profesor_dashboard.php?action=listado_profesores">Listar Profesores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profesor_dashboard.php?action=gestion_notas">Gestión de Notas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profesor_dashboard.php?action=gestion_faltas">Gestión de Faltas de Asistencia</a>
                </li>
            </ul>
            
                    <a href="profesor_dashboard.php?action=logout" class="btn btn-danger mt-3 mb-3 float-right">Cerrar Sesión</a>

        </nav>

        <main class="mt-4">
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_44747314166c62c5cb9e992_26010665', "content");
?>

        </main>

        <footer class="mt-5">
            <p>&copy; 2024 Dashboard Profesor</p>
        </footer>
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
/* {block "content"} */
class Block_44747314166c62c5cb9e992_26010665 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\profesor';
}
}
/* {/block "content"} */
}
