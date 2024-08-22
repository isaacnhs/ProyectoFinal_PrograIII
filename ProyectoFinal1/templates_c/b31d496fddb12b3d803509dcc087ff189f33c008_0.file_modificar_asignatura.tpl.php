<?php
/* Smarty version 5.3.1, created on 2024-08-22 03:03:45
  from 'file:admin/modificar_asignatura.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c68e7106dec3_16855087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b31d496fddb12b3d803509dcc087ff189f33c008' => 
    array (
      0 => 'admin/modificar_asignatura.tpl',
      1 => 1724288621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c68e7106dec3_16855087 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_137383579266c68e71045890_77786393', "content");
?>

<?php }
/* {block "content"} */
class Block_137383579266c68e71045890_77786393 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
?>

<h2>Modificar Asignatura</h2>
<?php if ((null !== ($_smarty_tpl->getValue('mensaje') ?? null))) {?>
    <div class="alert alert-info" role="alert">
        <?php echo $_smarty_tpl->getValue('mensaje');?>

    </div>
<?php }?>
<form method="post" action="?section=modificar_asignatura">
    <div class="form-group">
        <label for="asignatura_id">Seleccionar Asignatura:</label>
        <select class="form-control" id="asignatura_id" name="asignatura_id" required onchange="cargarDatosAsignatura()">
            <option value="">Seleccione una asignatura</option>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('asignaturas'), 'asignatura');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('asignatura')->value) {
$foreach0DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('asignatura')['id'];?>
" <?php if ((null !== ($_smarty_tpl->getValue('asignatura_selected') ?? null)) && $_smarty_tpl->getValue('asignatura')['id'] == $_smarty_tpl->getValue('asignatura_selected')) {?>selected<?php }?>>
                    <?php echo $_smarty_tpl->getValue('asignatura')['nombre'];?>

                </option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    </div>

    <div id="datos_asignatura" style="display: <?php if ((null !== ($_smarty_tpl->getValue('asignatura') ?? null))) {?>block<?php } else { ?>none<?php }?>;">
        <?php if ((null !== ($_smarty_tpl->getValue('asignatura') ?? null))) {?>
            <div class="form-group">
                <label for="nombre">Nuevo Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->getValue('asignatura')['nombre'];?>
">
            </div>
            <div class="form-group">
                <label for="nivel_id">Nuevo Nivel:</label>
                <select class="form-control" id="nivel_id" name="nivel_id" required>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('niveles'), 'nivel');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('nivel')->value) {
$foreach1DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('nivel')['id'];?>
" <?php if ($_smarty_tpl->getValue('asignatura')['nivel_id'] == $_smarty_tpl->getValue('nivel')['id']) {?>selected<?php }?>>
                            <?php echo $_smarty_tpl->getValue('nivel')['nivel'];?>

                        </option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="form-group">
                <label for="profesor_id">Nuevo Profesor:</label>
                <select class="form-control" id="profesor_id" name="profesor_id" required>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profesores'), 'profesor');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('profesor')->value) {
$foreach2DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('profesor')['id'];?>
" <?php if ($_smarty_tpl->getValue('asignatura')['profesor_id'] == $_smarty_tpl->getValue('profesor')['id']) {?>selected<?php }?>>
                            <?php echo $_smarty_tpl->getValue('profesor')['nombre'];?>
 <?php echo $_smarty_tpl->getValue('profesor')['apellidos'];?>

                        </option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        <?php }?>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Asignatura</button>
</form>

<?php echo '<script'; ?>
>
function cargarDatosAsignatura() {
    var asignatura_id = document.getElementById('asignatura_id').value;
    if (asignatura_id) {
        window.location.href = '?section=modificar_asignatura&asignatura_id=' + asignatura_id;
    } else {
        document.getElementById('datos_asignatura').style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var asignatura_id = document.getElementById('asignatura_id').value;
    if (asignatura_id) {
        document.getElementById('datos_asignatura').style.display = 'block';
    }
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
