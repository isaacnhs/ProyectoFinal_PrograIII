<?php
/* Smarty version 5.3.1, created on 2024-08-21 00:38:57
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c51b0168c4e1_32724528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b23f7c4d05882c8abe3af8124c7f80bc406b8a5' => 
    array (
      0 => 'login.tpl',
      1 => 1724193509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c51b0168c4e1_32724528 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Usuario\\Desktop\\ProyectoFinal1\\templates';
?><div class="auth-section mt-3">
    <h5>ZONA DE AUTENTICACIÓN</h5>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="type">Tipo</label>
            <select name="type" id="type" class="form-control">
                <option value="alumno">Alumno</option>
                <option value="profesor">Profesor</option>
                <option value="administrador">Administrador</option>
            </select>
        </div>
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" name="login" id="usuario" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="clave">Clave</label>
            <input type="password" name="clave" id="clave" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    </form>

    <?php if ($_smarty_tpl->getValue('error')) {?>
    <div class="alert alert-danger mt-3">
        <?php echo $_smarty_tpl->getValue('error');?>

    </div>
    <?php }?>
</div><?php }
}
