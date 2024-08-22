<?php
/* Smarty version 5.3.1, created on 2024-08-21 06:29:14
  from 'file:alumno/notas.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c56d1a0ada25_35768706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b6b134a035cec1bbde3b7863dd757aa23215bd' => 
    array (
      0 => 'alumno/notas.tpl',
      1 => 1724214495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c56d1a0ada25_35768706 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Usuario\\Desktop\\ProyectoFinal1\\templates\\alumno';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_159332814966c56d1a080fe7_08330680', "content");
?>

<?php }
/* {block "content"} */
class Block_159332814966c56d1a080fe7_08330680 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Usuario\\Desktop\\ProyectoFinal1\\templates\\alumno';
?>

<h2>Consultar Notas</h2>
<form method="POST" action="?section=notas">
    <div class="form-group">
        <label for="asignatura_id">Selecciona una asignatura:</label>
        <select class="form-control" id="asignatura_id" name="asignatura_id">
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
    <button type="submit" name="consultar_notas" class="btn btn-primary">Consultar Notas</button>
</form>


<?php if ((null !== ($_smarty_tpl->getValue('notas') ?? null)) && !empty($_smarty_tpl->getValue('notas'))) {?>
    <h3 class="mt-5">Notas</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Trimestre</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('notas'), 'nota');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('nota')->value) {
$foreach1DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('nota')['trimestre'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('nota')['nota'];?>
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
