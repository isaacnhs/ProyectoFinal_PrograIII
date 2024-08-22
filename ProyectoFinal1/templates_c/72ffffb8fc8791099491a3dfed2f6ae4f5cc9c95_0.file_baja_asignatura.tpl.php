<?php
/* Smarty version 5.3.1, created on 2024-08-21 21:13:59
  from 'file:admin/baja_asignatura.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c63c77c06817_22533232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ffffb8fc8791099491a3dfed2f6ae4f5cc9c95' => 
    array (
      0 => 'admin/baja_asignatura.tpl',
      1 => 1724266748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c63c77c06817_22533232 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3168515766c63c77bf2144_70557439', "content");
?>

<?php }
/* {block "content"} */
class Block_3168515766c63c77bf2144_70557439 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
?>

    <h2>Baja de Asignatura</h2>
    <?php if ((null !== ($_smarty_tpl->getValue('mensaje') ?? null))) {?>
        <div class="alert alert-info" role="alert">
            <?php echo $_smarty_tpl->getValue('mensaje');?>

        </div>
    <?php }?>
    <form method="post" action="?section=baja_asignatura">
        <div class="form-group">
            <label for="asignatura_id">Seleccionar Asignatura:</label>
            <select class="form-control" id="asignatura_id" name="asignatura_id" required>
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
        <button type="submit" class="btn btn-danger">Eliminar Asignatura</button>
    </form>
<?php
}
}
/* {/block "content"} */
}
