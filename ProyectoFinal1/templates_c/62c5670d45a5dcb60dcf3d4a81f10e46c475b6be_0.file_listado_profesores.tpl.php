<?php
/* Smarty version 5.3.1, created on 2024-08-21 17:41:55
  from 'file:profesor/listado_profesores.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c60ac3ccd378_45723838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62c5670d45a5dcb60dcf3d4a81f10e46c475b6be' => 
    array (
      0 => 'profesor/listado_profesores.tpl',
      1 => 1724254903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c60ac3ccd378_45723838 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\profesor';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_148486658466c60ac3cc0a49_88692806', "content");
?>

<?php }
/* {block "content"} */
class Block_148486658466c60ac3cc0a49_88692806 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\profesor';
?>

<div class="container">
    <h2 class="mt-3">Listar Profesores</h2>
    
    <!-- Tabla para mostrar los profesores -->
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
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
                </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php
}
}
/* {/block "content"} */
}
