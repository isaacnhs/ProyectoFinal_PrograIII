<?php
/* Smarty version 5.3.1, created on 2024-08-21 18:28:28
  from 'file:profesor/gestion_faltas.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c615aca3fc20_47868815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8628f1a4f19b4048bfb770cfa766a092dc27000' => 
    array (
      0 => 'profesor/gestion_faltas.tpl',
      1 => 1724257707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c615aca3fc20_47868815 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\profesor';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_33383613066c615aca28749_16794017', "content");
?>

<?php }
/* {block "content"} */
class Block_33383613066c615aca28749_16794017 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\profesor';
?>

<div class="container">
    <h2 class="mt-3">Gestionar Faltas de Asistencia</h2>

    <!-- Mensaje de éxito -->
    <?php if ((null !== ($_smarty_tpl->getValue('message') ?? null))) {?>
        <div class="alert alert-success">
            <?php echo $_smarty_tpl->getValue('message');?>

        </div>
    <?php }?>

    <!-- Formulario para seleccionar la asignatura -->
    <form method="post" action="profesor_dashboard.php?section=gestion_faltas">
        <div class="form-group">
            <label for="asignatura">Selecciona una asignatura:</label>
            <select name="asignatura_id" id="asignatura" class="form-control" required>
                <option value="">Selecciona una asignatura</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('asignaturas'), 'asignatura');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('asignatura')->value) {
$foreach0DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('asignatura')['id'];?>
" <?php if ($_smarty_tpl->getValue('asignatura')['id'] == $_smarty_tpl->getValue('asignatura_id')) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('asignatura')['nombre'];?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ver Alumnos</button>
    </form>

    <!-- Tabla para gestionar las faltas de asistencia -->
    <?php if ((null !== ($_smarty_tpl->getValue('alumnos') ?? null))) {?>
        <h3>Alumnos</h3>
        <form method="post" action="profesor_dashboard.php?section=gestion_faltas&accion=actualizar">
            <input type="hidden" name="asignatura_id" value="<?php echo $_smarty_tpl->getValue('asignatura_id');?>
">
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Faltas</th>
                        <th>Fecha</th>
                        <th>Justificado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('alumnos'), 'alumno');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('alumno')->value) {
$foreach1DoElse = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->getValue('alumno')['nombre'];?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('alumno')['apellidos'];?>
</td>
                            <td>
                                <input type="number" name="faltas[<?php echo $_smarty_tpl->getValue('alumno')['id'];?>
]" value="<?php echo $_smarty_tpl->getValue('alumno')['cantidad_faltas'];?>
" min="0" class="form-control" required>
                            </td>
                            <td>
                                <input type="date" name="fechas[<?php echo $_smarty_tpl->getValue('alumno')['id'];?>
]" value="<?php echo $_smarty_tpl->getValue('alumno')['fecha'];?>
" class="form-control" required>
                            </td>
                            <td>
                                <select name="justificado[<?php echo $_smarty_tpl->getValue('alumno')['id'];?>
]" class="form-control" required>
                                    <option value="No" <?php if ($_smarty_tpl->getValue('alumno')['justificada'] == 'No') {?>selected<?php }?>>No</option>
                                    <option value="Sí" <?php if ($_smarty_tpl->getValue('alumno')['justificada'] == 'Sí') {?>selected<?php }?>>Sí</option>
                                </select>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">Actualizar Faltas</button>
        </form>
    <?php }?>
</div>

<?php echo '<script'; ?>
>
document.getElementById('mostrarFormularioRegistro').addEventListener('click', function() {
    var formulario = document.getElementById('formularioRegistro');
    formulario.style.display = formulario.style.display === 'none' ? 'block' : 'none';
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
