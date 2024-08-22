<?php
/* Smarty version 5.3.1, created on 2024-08-21 09:00:53
  from 'file:alumno/listado_alumnos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c590a50baa24_26541974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '981358d373c3c26346e56fd3e03c74be65946af3' => 
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
function content_66c590a50baa24_26541974 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\alumno';
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
