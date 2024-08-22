<?php
/* Smarty version 5.3.1, created on 2024-08-21 21:46:08
  from 'file:alumno/base.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c644009a1225_38337710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07fb9faeacad0db58b374048e96e7d49811c0178' => 
    array (
      0 => 'alumno/base.tpl',
      1 => 1724264116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c644009a1225_38337710 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\alumno';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? 'Dashboard Alumno' ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <header>
            <h1>Bienvenid@, alumno: <?php echo $_smarty_tpl->getValue('user')['nombre'];?>
</h1>
        </header>

        <nav class="mt-4">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="alumno_dashboard.php?action=horario">Consultar Horario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumno_dashboard.php?action=alumnos">Listado de Alumnos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumno_dashboard.php?action=profesores">Listado de Profesores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumno_dashboard.php?action=notas">Consultar Notas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->getValue('section') == 'faltas') {?>active<?php }?>" href="?section=faltas">Listar Faltas de Asistencia</a>
                </li>

            </ul>
                <a href="alumno_dashboard.php?action=logout" class="btn btn-danger mt-3 float-right">Cerrar Sesión</a>

        </nav>

        <main class="mt-4">
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_151226545066c6440099d311_57103151', "content");
?>

        </main>

        <footer class="mt-5">
            <p>&copy; 2024 Dashboard Alumno</p>
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
class Block_151226545066c6440099d311_57103151 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\alumno';
}
}
/* {/block "content"} */
}
