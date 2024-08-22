<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
 
 <div class="container mt-5">
    <h1>Bienvenid@, alumno: {$user.nombre}</h1><br/>

    <!-- Menú de navegación -->
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link {if $section == 'horario'}active{/if}" href="?section=horario">Consultar Horario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'alumnos'}active{/if}" href="?section=alumnos">Listado de Alumnos de Clase</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'profesores'}active{/if}" href="?section=profesores">Listado de Profesores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'notas'}active{/if}" href="?section=notas">Consultar Notas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" {if $section == 'faltas'}active{/if}" href="?section=faltas">Listar Faltas de Asistencia</a>
            </li>
            <li class="nav-item">
                <a href="alumno_dashboard.php?action=logout" class="btn btn-danger mt-3">Cerrar Sesión</a>
            </li>
 

        </ul>
    </nav>


    <!-- Contenido dinámico según la sección seleccionada -->
    {if $section == 'horario'}
        {include file='alumno/horario.tpl'}
    {elseif $section == 'alumnos'}
        {include file='alumno/listado_alumnos.tpl'}
    {elseif $section == 'profesores'}
        {include file='alumno/listado_profesores.tpl'}
    {elseif $section == 'notas'}
        {include file='alumno/notas.tpl'}
    {elseif $section == 'faltas'}
        {include file='alumno/faltas.tpl'}
    {/if}
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
