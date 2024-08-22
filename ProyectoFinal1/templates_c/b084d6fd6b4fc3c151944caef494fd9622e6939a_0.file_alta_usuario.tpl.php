<?php
/* Smarty version 5.3.1, created on 2024-08-21 21:39:01
  from 'file:admin/alta_usuario.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c6425513dc99_09683448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b084d6fd6b4fc3c151944caef494fd9622e6939a' => 
    array (
      0 => 'admin/alta_usuario.tpl',
      1 => 1724269103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c6425513dc99_09683448 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_141876007866c6425512d652_15919941', "content");
?>

<?php }
/* {block "content"} */
class Block_141876007866c6425512d652_15919941 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
?>

    <h2>Alta de Alumno</h2>
    <?php if ((null !== ($_smarty_tpl->getValue('mensaje') ?? null))) {?>
        <div class="alert alert-info" role="alert">
            <?php echo $_smarty_tpl->getValue('mensaje');?>

        </div>
    <?php }?>
    <form method="post" action="admin_dashboard.php?section=alta_usuario">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>
        <div class="form-group">
            <label for="nivel">Nivel:</label>
            <select class="form-control" id="nivel" name="nivel" required>
                <option value="">Selecciona un nivel</option>
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
        <button type="submit" class="btn btn-primary">Agregar Alumno</button>
    </form>
<?php
}
}
/* {/block "content"} */
}
