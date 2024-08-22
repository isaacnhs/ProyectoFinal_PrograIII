<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title|default:'Dashboard Alumno'}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <header>
            <h1>Bienvenid@, alumno: {$user.nombre}</h1>
        </header>

        <nav class="mt-4">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="alumno_dashboard.php?action=horario">Consultar Horario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumno_dashboard.php?action=alumnos">Listado de Alumnos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumno_dashboard.php?action=profesores">Listado de Profesores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumno_dashboard.php?action=notas">Consultar Notas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {if $section == 'faltas'}active{/if}" href="?section=faltas">Listar Faltas de Asistencia</a>
                </li>

            </ul>
                <a href="alumno_dashboard.php?action=logout" class="btn btn-danger mt-3 float-right">Cerrar Sesión</a>

        </nav>

        <main class="mt-4">
            {block name="content"}{/block}
        </main>

        <footer class="mt-5">
            <p>&copy; 2024 Dashboard Alumno</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
