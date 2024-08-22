<?php
/* Smarty version 5.3.1, created on 2024-08-21 20:19:08
  from 'file:alumno/faltas.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c62f9c1aba90_56880873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ae90876a8b1ed6ca3bf07fa04e15b9655559512' => 
    array (
      0 => 'alumno/faltas.tpl',
      1 => 1724264344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c62f9c1aba90_56880873 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\alumno';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_107379689866c62f9c197746_06019729', "content");
?>


<?php }
/* {block "content"} */
class Block_107379689866c62f9c197746_06019729 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\alumno';
?>

    <h2>Listar Faltas de Asistencia</h2>

    <!-- Formulario para seleccionar la asignatura -->
    <form action="alumno_dashboard.php?section=faltas" method="POST">
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
        <!-- Campo oculto para indicar la acción de consultar faltas -->
        <input type="hidden" name="consultar_faltas" value="1">
        <button type="submit" class="btn btn-primary">Consultar Faltas</button>
    </form>

    <!-- Mostrar faltas de asistencia -->
<?php if ((null !== ($_smarty_tpl->getValue('faltas') ?? null))) {?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('faltas')) > 0) {?>
        <!-- Mostrar la tabla de faltas -->
        <table class="table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Justificación</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faltas'), 'falta');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('falta')->value) {
$foreach1DoElse = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->getValue('falta')['fecha'];?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('falta')['justificada'];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>No hay faltas registradas para esta asignatura.</p>
    <?php }
}
}
}
/* {/block "content"} */
}
