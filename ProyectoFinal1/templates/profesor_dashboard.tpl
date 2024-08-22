<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Profesor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
 
<div class="container mt-5">
    <h1>Bienvenid@, profesor: {$user.nombre}</h1><br/>

    <!-- Menú de navegación -->
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link {if $section == 'listado_alumnos'}active{/if}" href="?section=listado_alumnos">Listar Alumnos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'listado_profesores'}active{/if}" href="?section=listado_profesores">Listar Profesores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'gestion_notas'}active{/if}" href="?section=gestion_notas">Gestión de Notas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'gestion_faltas'}active{/if}" href="?section=gestion_faltas">Gestión de Faltas de Asistencia</a>
            </li>
        </ul>
                <a href="profesor_dashboard.php?action=logout" class="btn btn-danger mt-3 mb-3 float-right">Cerrar Sesión</a>

    </nav>

    <!-- Contenido dinámico según la sección seleccionada -->
    {if $section == 'listado_alumnos'}
        {include file='profesor/listado_alumnos.tpl'}
    {elseif $section == 'listado_profesores'}
        {include file='profesor/listado_profesores.tpl'}
    {elseif $section == 'gestion_notas'}
        {include file='profesor/gestion_notas.tpl'}
    {elseif $section == 'gestion_faltas'}
        {include file='profesor/gestion_faltas.tpl'}
    {/if}
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
