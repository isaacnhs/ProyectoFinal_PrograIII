<?php
/* Smarty version 5.3.1, created on 2024-08-21 17:41:57
  from 'file:profesor/listado_alumnos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c60ac5411bd1_53011422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3b0ff16d0b73bbbacf1453ec231ff0ac8e37dd9' => 
    array (
      0 => 'profesor/listado_alumnos.tpl',
      1 => 1724254886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c60ac5411bd1_53011422 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\profesor';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_21232876666c60ac53fca50_40508703', "content");
?>

<?php }
/* {block "content"} */
class Block_21232876666c60ac53fca50_40508703 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\profesor';
?>

<div class="container">
    <h2 class="mt-3">Listar Alumnos</h2>

    <!-- Formulario para seleccionar la asignatura -->
<form method="post" action="profesor_dashboard.php?section=listado_alumnos">
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
"><?php echo $_smarty_tpl->getValue('asignatura')['nombre'];?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ver Alumnos</button>
    </form>

    <!-- Tabla para mostrar los alumnos matriculados -->
    <?php if ((null !== ($_smarty_tpl->getValue('alumnos') ?? null))) {?>
        <h3>Alumnos Matriculados</h3>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
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
                    </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="mt-3">Selecciona una asignatura para ver los alumnos matriculados.</p>
    <?php }?>
</div>
<?php
}
}
/* {/block "content"} */
}
