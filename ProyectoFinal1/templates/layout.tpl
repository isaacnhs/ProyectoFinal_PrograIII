<!DOCTYPE html>
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
                    <img src="assets/escuela.avif" alt="Logo">
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

    {if $error}
    <div class="alert alert-danger mt-3">
        {$error}
    </div>
    {/if}
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
                            <table class="table">
  <tbody>
    <tr>
      <th scope="row">Codigo del centro<br>121232</th>
      <th>CIF<br>Q123123A</th>
    </tr>
    <tr>
      <th scope="row">Direccion<br>Una direccion</th>
      <th>CP<br>46183</th>
    </tr>
    <tr>
      <th scope="row">Telefono<br>1231234</th>
      <th>Movil<br>1452524</th>
    </tr>
        <tr>
      <th scope="row">Fax<br>1231241</th>
      <th>Email<br>ad@gmail.com</th>
    </tr>
        <tr>
      <th scope="row" colspan="2">Modalidad linguistica<br>PIP (Programa de incorporacion progresiva)</th>
    </tr>
        <tr>
      <th scope="row" colspan="2">Educacion infantil - 2 ciclo<br>3 unidades</th>
    </tr>
        <tr>
      <th scope="row" colspan="2">Educacion primaria<br>6 unidades</th>
    </tr>
  </tbody>
</table>
                        </div>
                        <div class="col-md-6">
                            <h5>Rasgos de Identidad</h5>
                            <ul>
                                <li>Pluralismo</li>
                                <li>Democracia</li>
                                <li>Coeducación</li>
                                <li>Aconfesionalidad</li>
                                <li>Participacion</li>
                                <li>Ecologia</li>
                                <li>Integracion</li>
                                <li>Paz</li>
                                <li>Cooperacion</li>
                                <li>Solidaridad</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Zona adicional de contenido
                    <div class="mt-3">
                        <img src="assets/escuela.avif" alt="Imagen relacionada" class="img-fluid">
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
