<?php
/* Smarty version 5.3.1, created on 2024-08-21 09:00:53
  from 'file:alumno/listado_profesores.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c590a58858e7_64714491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b7d2256270c639509138e1a749069103217967' => 
    array (
      0 => 'alumno/listado_profesores.tpl',
      1 => 1724200296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c590a58858e7_64714491 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\alumno';
?><h2>Listado de Profesores</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Asignatura</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profesores'), 'profesor');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('profesor')->value) {
$foreach0DoElse = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->getValue('profesor')['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('profesor')['apellidos'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('profesor')['asignatura'];?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php }
}
