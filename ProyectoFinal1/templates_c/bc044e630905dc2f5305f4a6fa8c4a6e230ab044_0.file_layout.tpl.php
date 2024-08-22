<?php
/* Smarty version 5.3.1, created on 2024-08-21 00:35:33
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c51a3585da53_97876290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc044e630905dc2f5305f4a6fa8c4a6e230ab044' => 
    array (
      0 => 'layout.tpl',
      1 => 1724190657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c51a3585da53_97876290 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Usuario\\Desktop\\ProyectoFinal1\\templates';
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz Colegio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Personalización para la interfaz */
        .logo-section img {
            width: 100%;
            height: auto;
        }

        .menu-section {
            background-color: #f8f9fa;
            padding: 10px;
            border-right: 1px solid #ddd;
        }

        .menu-section h5,
        .menu-section ul {
            margin: 0;
            padding: 0;
        }

        .auth-section {
            background-color: #f8f9fa;
            padding: 15px;
            border: 1px solid #ddd;
        }

        .content-section {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Columna izquierda (Logo, Menú, Autenticación) -->
            <div class="col-md-3">
                <!-- Zona del Logo -->
                <div class="logo-section text-center">
                    <img src="ruta_del_logo.png" alt="Logo">
                    <h5>ZONA DEL LOGO</h5>
                </div>

                <!-- Zona del Menú -->
                <div class="menu-section mt-3">
                    <h5>ZONA DEL MENÚ</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Localización</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Características</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Instalaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Proyectos de Escuela</a>
                        </li>
                    </ul>
                </div>

                <!-- Zona de Autenticación -->
<div class="auth-section mt-3">
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
</div>

            </div>

            <!-- Zona de Contenido -->
            <div class="col-md-9">
                <div class="content-section">
                    <h4>ZONA DE CONTENIDO</h4>
                    <!-- Aquí se cargará el contenido dinámico según el usuario -->
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Características Generales</h5>
                            <!-- Aquí va la tabla o información general del centro -->
                        </div>
                        <div class="col-md-6">
                            <h5>Rasgos de Identidad</h5>
                            <ul>
                                <li>Pluralismo</li>
                                <li>Democracia</li>
                                <li>Coeducación</li>
                                <!-- Más elementos -->
                            </ul>
                        </div>
                    </div>
                    <!-- Zona adicional de contenido -->
                    <div class="mt-3">
                        <img src="ruta_de_imagen.png" alt="Imagen relacionada" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
