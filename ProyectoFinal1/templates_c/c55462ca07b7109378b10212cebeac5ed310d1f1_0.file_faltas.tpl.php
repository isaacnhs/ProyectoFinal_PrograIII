<?php
/* Smarty version 5.3.1, created on 2024-08-21 06:30:14
  from 'file:alumno/faltas.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c56d56d23254_66340725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c55462ca07b7109378b10212cebeac5ed310d1f1' => 
    array (
      0 => 'alumno/faltas.tpl',
      1 => 1724214613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c56d56d23254_66340725 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Usuario\\Desktop\\ProyectoFinal1\\templates\\alumno';
if ($_smarty_tpl->getValue('section') == 'faltas') {?>
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
                        <td><?php echo $_smarty_tpl->getValue('falta')['justificacion'];?>
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
}?>

<?php }
}
