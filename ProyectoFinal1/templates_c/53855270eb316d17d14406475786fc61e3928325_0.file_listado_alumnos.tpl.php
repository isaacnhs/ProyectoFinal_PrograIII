<?php
/* Smarty version 5.3.1, created on 2024-08-21 02:32:07
  from 'file:alumno/listado_alumnos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c535877a0ef0_70150112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53855270eb316d17d14406475786fc61e3928325' => 
    array (
      0 => 'alumno/listado_alumnos.tpl',
      1 => 1724200302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c535877a0ef0_70150112 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Usuario\\Desktop\\ProyectoFinal1\\templates\\alumno';
?><h2>Listado de Alumnos de Clase</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('alumnos_compartidos'), 'alumno');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('alumno')->value) {
$foreach0DoElse = false;
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
<?php }
}
