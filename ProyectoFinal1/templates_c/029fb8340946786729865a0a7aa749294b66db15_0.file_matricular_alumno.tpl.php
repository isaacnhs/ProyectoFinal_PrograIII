<?php
/* Smarty version 5.3.1, created on 2024-08-22 02:32:55
  from 'file:admin/matricular_alumno.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c6873770bf23_46171823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '029fb8340946786729865a0a7aa749294b66db15' => 
    array (
      0 => 'admin/matricular_alumno.tpl',
      1 => 1724286772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c6873770bf23_46171823 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_76984662666c687376f73e7_71698189', "content");
?>

<?php }
/* {block "content"} */
class Block_76984662666c687376f73e7_71698189 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
?>

<h2>Matricular Alumno en Asignatura</h2>
<?php if ((null !== ($_smarty_tpl->getValue('mensaje') ?? null))) {?>
    <div class="alert alert-info" role="alert">
        <?php echo $_smarty_tpl->getValue('mensaje');?>

    </div>
<?php }?>
<form method="post" action="?section=matricular_alumno">
    <div class="form-group">
        <label for="alumno_id">Seleccionar Alumno:</label>
        <select class="form-control" id="alumno_id" name="alumno_id" required>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('alumnos'), 'alumno');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('alumno')->value) {
$foreach0DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('alumno')['id'];?>
"><?php echo $_smarty_tpl->getValue('alumno')['nombre'];?>
 <?php echo $_smarty_tpl->getValue('alumno')['apellidos'];?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <div class="form-group">
        <label for="asignatura_id">Seleccionar Asignatura:</label>
        <select class="form-control" id="asignatura_id" name="asignatura_id" required>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('asignaturas'), 'asignatura');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('asignatura')->value) {
$foreach1DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('asignatura')['id'];?>
"><?php echo $_smarty_tpl->getValue('asignatura')['nombre'];?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Matricular Alumno</button>
</form>
<?php
}
}
/* {/block "content"} */
}
