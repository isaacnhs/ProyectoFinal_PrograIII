<?php
/* Smarty version 5.3.1, created on 2024-08-21 09:00:52
  from 'file:alumno/horario.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c590a4328b70_70412872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '224949a8165815ebbb15ae583f1a8562e67d31df' => 
    array (
      0 => 'alumno/horario.tpl',
      1 => 1724200170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c590a4328b70_70412872 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\alumno';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_166659261666c590a4314447_37062398', "content");
?>

<?php }
/* {block "content"} */
class Block_166659261666c590a4314447_37062398 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\alumno';
?>

<h2>Consultar Horario</h2>
<form action="alumno_dashboard.php" method="POST">
    <div class="form-group">
        <label for="asignatura">Seleccionar Asignatura</label>
        <select name="asignatura_id" id="asignatura" class="form-control" required>
            <option value="">Seleccione una asignatura</option>
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
    <input type="hidden" name="consultar_horario" value="1">
    <button type="submit" class="btn btn-primary">Consultar Horario</button>
</form>

<?php if ((null !== ($_smarty_tpl->getValue('horario') ?? null)) && !empty($_smarty_tpl->getValue('horario'))) {?>
    <h3 class="mt-5">Horario de la Asignatura</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Día</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('horario'), 'hora');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('hora')->value) {
$foreach1DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('hora')['dia'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('hora')['hora_inicio'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('hora')['hora_fin'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php }
}
}
/* {/block "content"} */
}
