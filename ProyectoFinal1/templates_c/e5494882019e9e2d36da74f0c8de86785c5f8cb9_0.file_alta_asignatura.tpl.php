<?php
/* Smarty version 5.3.1, created on 2024-08-22 00:57:12
  from 'file:admin/alta_asignatura.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c670c8358d38_41389851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5494882019e9e2d36da74f0c8de86785c5f8cb9' => 
    array (
      0 => 'admin/alta_asignatura.tpl',
      1 => 1724281031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c670c8358d38_41389851 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_174443792566c670c8341ee4_05277703', "content");
?>

<?php }
/* {block "content"} */
class Block_174443792566c670c8341ee4_05277703 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
?>

    <h2>Alta de Asignatura</h2>
    <?php if ((null !== ($_smarty_tpl->getValue('mensaje') ?? null))) {?>
        <div class="alert alert-info" role="alert">
            <?php echo $_smarty_tpl->getValue('mensaje');?>

        </div>
    <?php }?>
    <form method="post" action="?section=alta_asignatura">
        <div class="form-group">
            <label for="nombre">Nombre Asignatura:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="nivel">Nivel:</label>
            <select class="form-control" id="nivel" name="nivel" required>
                <option value="">Seleccione un nivel</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('niveles'), 'nivel');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('nivel')->value) {
$foreach0DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('nivel')['id'];?>
"><?php echo $_smarty_tpl->getValue('nivel')['nivel'];?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="form-group">
            <label for="profesor_id">Seleccionar Profesor:</label>
            <select class="form-control" id="profesor_id" name="profesor_id" required>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profesores'), 'profesor');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('profesor')->value) {
$foreach1DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('profesor')['id'];?>
"><?php echo $_smarty_tpl->getValue('profesor')['nombre'];?>
 <?php echo $_smarty_tpl->getValue('profesor')['apellidos'];?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Asignatura</button>
    </form>
<?php
}
}
/* {/block "content"} */
}
