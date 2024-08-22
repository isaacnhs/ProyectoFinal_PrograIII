<?php
/* Smarty version 5.3.1, created on 2024-08-21 22:18:24
  from 'file:admin/modificar_alumno_fragmento.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c64b90006fb6_10171418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ebdf63f98063a16190beec7ab448e8229f1913f' => 
    array (
      0 => 'admin/modificar_alumno_fragmento.tpl',
      1 => 1724271393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c64b90006fb6_10171418 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Yader Barahona\\Desktop\\ProyectoFinal1\\templates\\admin';
if ((null !== ($_smarty_tpl->getValue('alumno') ?? null))) {?>
    <div class="form-group">
        <label for="login">Nuevo Login:</label>
        <input type="text" class="form-control" id="login" name="login" value="<?php echo $_smarty_tpl->getValue('alumno')['login'];?>
">
    </div>
    <div class="form-group">
        <label for="password">Nuevo Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
        <label for="nombre">Nuevo Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->getValue('alumno')['nombre'];?>
">
    </div>
    <div class="form-group">
        <label for="apellidos">Nuevos Apellidos:</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $_smarty_tpl->getValue('alumno')['apellidos'];?>
">
    </div>
    <div class="form-group">
        <label for="nivel_id">Nuevo Nivel:</label>
        <select class="form-control" id="nivel_id" name="nivel_id" required>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('niveles'), 'nivel');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('nivel')->value) {
$foreach0DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('nivel')['id'];?>
" <?php if ($_smarty_tpl->getValue('alumno')['nivel_id'] == $_smarty_tpl->getValue('nivel')['id']) {?>selected<?php }?>>
                    <?php echo $_smarty_tpl->getValue('nivel')['nombre'];?>

                </option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    </div>
<?php }
}
}
