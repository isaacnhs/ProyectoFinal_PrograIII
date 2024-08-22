<?php
/* Smarty version 5.3.1, created on 2024-08-21 17:41:57
  from 'file:profesor/gestion_notas.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c60ac588b736_02130528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f686c92d270eb4f39e46f83cb11fc0678eab58c7' => 
    array (
      0 => 'profesor/gestion_notas.tpl',
      1 => 1724254898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c60ac588b736_02130528 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\profesor';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_188504096766c60ac5874308_70509171', "content");
?>

<?php }
/* {block "content"} */
class Block_188504096766c60ac5874308_70509171 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\profesor';
?>

<div class="container">
    <h2 class="mt-3">Gestionar Notas</h2>

    <!-- Mensaje de éxito -->
    <?php if ($_smarty_tpl->getValue('mensaje_exito')) {?>
        <div class="alert alert-success">
            <?php echo $_smarty_tpl->getValue('mensaje_exito');?>

        </div>
    <?php }?>

    <!-- Formulario para seleccionar la asignatura -->
    <form method="post" action="profesor_dashboard.php?section=gestion_notas">
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

    <!-- Tabla para gestionar las notas de los alumnos -->
    <?php if ((null !== ($_smarty_tpl->getValue('alumnos') ?? null))) {?>
        <h3>Alumnos</h3>
        <form method="post" action="profesor_dashboard.php?section=gestion_notas">
            <input type="hidden" name="asignatura_id" value="<?php echo $_smarty_tpl->getValue('asignatura_id');?>
">
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Nota</th>
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
                                <input type="number" name="notas[<?php echo $_smarty_tpl->getValue('alumno')['id'];?>
]" value="<?php echo $_smarty_tpl->getValue('alumno')['nota'];?>
" min="0" max="100" class="form-control" required>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">Actualizar Notas</button>
        </form>
    <?php } else { ?>
        <p class="mt-3">Selecciona una asignatura para gestionar las notas de los alumnos.</p>
    <?php }?>
</div>
<?php
}
}
/* {/block "content"} */
}
