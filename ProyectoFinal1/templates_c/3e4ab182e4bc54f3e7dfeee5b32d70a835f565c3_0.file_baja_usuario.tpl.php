<?php
/* Smarty version 5.3.1, created on 2024-08-21 21:13:02
  from 'file:admin/baja_usuario.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c63c3e9f5b53_56192051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e4ab182e4bc54f3e7dfeee5b32d70a835f565c3' => 
    array (
      0 => 'admin/baja_usuario.tpl',
      1 => 1724266746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c63c3e9f5b53_56192051 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_132789053466c63c3e9e0837_60484946', "content");
?>

<?php }
/* {block "content"} */
class Block_132789053466c63c3e9e0837_60484946 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
?>

    <h2>Baja de Usuario</h2>
    <?php if ((null !== ($_smarty_tpl->getValue('mensaje') ?? null))) {?>
        <div class="alert alert-info" role="alert">
            <?php echo $_smarty_tpl->getValue('mensaje');?>

        </div>
    <?php }?>
    <form method="post" action="?section=baja_usuario">
        <div class="form-group">
            <label for="usuario_id">Seleccionar Usuario:</label>
            <select class="form-control" id="usuario_id" name="usuario_id" required>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('usuarios'), 'usuario');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('usuario')->value) {
$foreach0DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('usuario')['id'];?>
"><?php echo $_smarty_tpl->getValue('usuario')['nombre'];?>
 <?php echo $_smarty_tpl->getValue('usuario')['apellidos'];?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <button type="submit" class="btn btn-danger">Eliminar Usuario</button>
    </form>
<?php
}
}
/* {/block "content"} */
}
