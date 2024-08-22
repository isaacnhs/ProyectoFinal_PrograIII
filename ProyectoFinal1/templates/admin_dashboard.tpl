<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
 
<div class="container mt-5">
    <h1>Bienvenid@, administrador: {$user.nombre}</h1><br/>

    <!-- Menú de navegación -->
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link {if $section == 'alta_usuario'}active{/if}" href="?section=alta_usuario">Alta Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'baja_usuario'}active{/if}" href="?section=baja_usuario">Baja Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'modificar_usuario'}active{/if}" href="?section=modificar_usuario">Modificar Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'alta_asignatura'}active{/if}" href="?section=alta_asignatura">Alta Asignatura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'baja_asignatura'}active{/if}" href="?section=baja_asignatura">Baja Asignatura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'modificar_asignatura'}active{/if}" href="?section=modificar_asignatura">Modificar Asignatura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $section == 'matricular_alumno'}active{/if}" href="?section=matricular_alumno">Matricular Alumno</a>
            </li>
        </ul>
        <a href="admin_dashboard.php?action=logout" class="btn btn-danger mt-3 mb-3 float-right">Cerrar Sesión</a>
    </nav>

    <!-- Contenido dinámico según la sección seleccionada -->
    {if $section == 'alta_usuario'}
        {include file='admin/alta_usuario.tpl'}
    {elseif $section == 'baja_usuario'}
        {include file='admin/baja_usuario.tpl'}
    {elseif $section == 'modificar_usuario'}
        {include file='admin/modificar_usuario.tpl'}
    {elseif $section == 'alta_asignatura'}
        {include file='admin/alta_asignatura.tpl'}
    {elseif $section == 'baja_asignatura'}
        {include file='admin/baja_asignatura.tpl'}
    {elseif $section == 'modificar_asignatura'}
        {include file='admin/modificar_asignatura.tpl'}
    {elseif $section == 'matricular_alumno'}
        {include file='admin/matricular_alumno.tpl'}
    {/if}
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
