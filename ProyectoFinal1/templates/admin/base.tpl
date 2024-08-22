<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title|default:'Dashboard Administrador'}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <header>
            <h1>Bienvenid@, administrador: {$user.nombre}</h1>
        </header>

        <nav class="mt-4">
            <ul class="nav nav-pills">
                <li class="nav-item{if $section == 'alta_usuario'} active{/if}">
                    <a class="nav-link" href="admin_dashboard.php??section=alta_usuario">Alta Usuario</a>
                </li>
                <li class="nav-item{if $section == 'baja_usuario'} active{/if}">
                    <a class="nav-link" href="admin_dashboard.php??section=baja_usuario">Baja Usuario</a>
                </li>
                <li class="nav-item{if $section == 'modificar_usuario'} active{/if}">
                    <a class="nav-link" href="admin_dashboard.php??section=modificar_usuario">Modificar Usuario</a>
                </li>
                <li class="nav-item{if $section == 'alta_asignatura'} active{/if}">
                    <a class="nav-link" href="admin_dashboard.php??section=alta_asignatura">Alta Asignatura</a>
                </li>
                <li class="nav-item{if $section == 'baja_asignatura'} active{/if}">
                    <a class="nav-link" href="admin_dashboard.php??section=baja_asignatura">Baja Asignatura</a>
                </li>
                <li class="nav-item{if $section == 'modificar_asignatura'} active{/if}">
                    <a class="nav-link" href="admin_dashboard.php??section=modificar_asignatura">Modificar Asignatura</a>
                </li>
                <li class="nav-item{if $section == 'matricular_alumno'} active{/if}">
                    <a class="nav-link" href="admin_dashboard.php??section=matricular_alumno">Matricular Alumno</a>
                </li>
                <li class="nav-item">
                    <a href="admin_dashboard.php?action=logout" class="btn btn-danger mt-3 mb-3 float-right">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>

        <main class="mt-4">
            {block name="content"}{/block}
        </main>

        <footer class="mt-5">
            <p>&copy; 2024 Dashboard Administrador</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
