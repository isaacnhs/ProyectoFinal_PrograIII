<?php
/* Smarty version 5.3.1, created on 2024-08-22 02:46:01
  from 'file:admin/modificar_usuario.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c68a49d21a61_24091004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eed17b6605e422b4d422ed3680c954d23056a634' => 
    array (
      0 => 'admin/modificar_usuario.tpl',
      1 => 1724287347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c68a49d21a61_24091004 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1274118066c68a49d09375_08651761', "content");
?>

<?php }
/* {block "content"} */
class Block_1274118066c68a49d09375_08651761 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
?>

    <h2>Modificar Alumno</h2>
    <?php if ((null !== ($_smarty_tpl->getValue('mensaje') ?? null))) {?>
        <div class="alert alert-info" role="alert">
            <?php echo $_smarty_tpl->getValue('mensaje');?>

        </div>
    <?php }?>
    <form method="post" action="?section=modificar_usuario">
        <div class="form-group">
            <label for="usuario_id">Seleccionar Alumno:</label>
            <select class="form-control" id="usuario_id" name="usuario_id" required onchange="cargarDatosAlumno()">
                <option value="">Seleccione un alumno</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('usuarios'), 'usuario');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('usuario')->value) {
$foreach0DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('usuario')['id'];?>
" <?php if ((null !== ($_smarty_tpl->getValue('alumno') ?? null)) && $_smarty_tpl->getValue('alumno')['id'] == $_smarty_tpl->getValue('usuario')['id']) {?>selected<?php }?>>
                        <?php echo $_smarty_tpl->getValue('usuario')['nombre'];?>
 <?php echo $_smarty_tpl->getValue('usuario')['apellidos'];?>

                    </option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <div id="datos_alumno" style="display: <?php if ((null !== ($_smarty_tpl->getValue('alumno') ?? null))) {?>block<?php } else { ?>none<?php }?>;">
            <?php if ((null !== ($_smarty_tpl->getValue('alumno') ?? null))) {?>
                <div class="form-group">
                    <label for="login">Nuevo Login:</label>
                    <input type="text" class="form-control" id="login" name="login" value="<?php echo $_smarty_tpl->getValue('alumno')['login'];?>
">
                </div>
                <div class="form-group">
                    <label for="password">Nuevo Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="nombre">Nuevo Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->getValue('alumno')['nombre'];?>
">
                </div>
                <div class="form-group">
                    <label for="apellidos">Nuevos Apellidos:</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $_smarty_tpl->getValue('alumno')['apellidos'];?>
">
                </div>
                <div class="form-group">
                    <label for="nivel_id">Nuevo Nivel:</label>
                    <select class="form-control" id="nivel_id" name="nivel_id" required>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('niveles'), 'nivel');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('nivel')->value) {
$foreach1DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('nivel')['id'];?>
" <?php if ($_smarty_tpl->getValue('alumno')['nivel_id'] == $_smarty_tpl->getValue('nivel')['id']) {?>selected<?php }?>>
                                <?php echo $_smarty_tpl->getValue('nivel')['nivel'];?>

                            </option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            <?php }?>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Alumno</button>
    </form>

    <?php echo '<script'; ?>
>
        function cargarDatosAlumno() {
            var usuario_id = document.getElementById('usuario_id').value;
            if (usuario_id) {
                // Redirigir la página para actualizar el formulario con los datos del alumno seleccionado
                window.location.href = '?section=modificar_usuario&usuario_id=' + usuario_id;
            } else {
                // Ocultar los datos si no se selecciona ningún alumno
                document.getElementById('datos_alumno').style.display = 'none';
            }
        }

        // Asegúrate de mostrar los datos del alumno al cargar la página si ya se ha seleccionado uno
        document.addEventListener('DOMContentLoaded', function() {
            var usuario_id = document.getElementById('usuario_id').value;
            if (usuario_id) {
                document.getElementById('datos_alumno').style.display = 'block';
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
