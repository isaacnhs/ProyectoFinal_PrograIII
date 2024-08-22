<?php
/* Smarty version 5.3.1, created on 2024-08-21 20:58:34
  from 'file:admin/base.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c638da892a94_35630586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cce568fe6700af4d21c6c59e1cae3cbb4d73217' => 
    array (
      0 => 'admin/base.tpl',
      1 => 1724266694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c638da892a94_35630586 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? 'Dashboard Administrador' ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <header>
            <h1>Bienvenid@, administrador: <?php echo $_smarty_tpl->getValue('user')['nombre'];?>
</h1>
        </header>

        <nav class="mt-4">
            <ul class="nav nav-pills">
                <li class="nav-item<?php if ($_smarty_tpl->getValue('section') == 'alta_usuario') {?> active<?php }?>">
                    <a class="nav-link" href="admin_dashboard.php??section=alta_usuario">Alta Usuario</a>
                </li>
                <li class="nav-item<?php if ($_smarty_tpl->getValue('section') == 'baja_usuario') {?> active<?php }?>">
                    <a class="nav-link" href="admin_dashboard.php??section=baja_usuario">Baja Usuario</a>
                </li>
                <li class="nav-item<?php if ($_smarty_tpl->getValue('section') == 'modificar_usuario') {?> active<?php }?>">
                    <a class="nav-link" href="admin_dashboard.php??section=modificar_usuario">Modificar Usuario</a>
                </li>
                <li class="nav-item<?php if ($_smarty_tpl->getValue('section') == 'alta_asignatura') {?> active<?php }?>">
                    <a class="nav-link" href="admin_dashboard.php??section=alta_asignatura">Alta Asignatura</a>
                </li>
                <li class="nav-item<?php if ($_smarty_tpl->getValue('section') == 'baja_asignatura') {?> active<?php }?>">
                    <a class="nav-link" href="admin_dashboard.php??section=baja_asignatura">Baja Asignatura</a>
                </li>
                <li class="nav-item<?php if ($_smarty_tpl->getValue('section') == 'modificar_asignatura') {?> active<?php }?>">
                    <a class="nav-link" href="admin_dashboard.php??section=modificar_asignatura">Modificar Asignatura</a>
                </li>
                <li class="nav-item<?php if ($_smarty_tpl->getValue('section') == 'matricular_alumno') {?> active<?php }?>">
                    <a class="nav-link" href="admin_dashboard.php??section=matricular_alumno">Matricular Alumno</a>
                </li>
                <li class="nav-item">
                    <a href="admin_dashboard.php?action=logout" class="btn btn-danger mt-3 mb-3 float-right">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>

        <main class="mt-4">
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_180968331866c638da88ef35_76241501', "content");
?>

        </main>

        <footer class="mt-5">
            <p>&copy; 2024 Dashboard Administrador</p>
        </footer>
    </div>

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block "content"} */
class Block_180968331866c638da88ef35_76241501 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
}
}
/* {/block "content"} */
}
