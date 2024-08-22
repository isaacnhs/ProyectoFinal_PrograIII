{block name="content"}
<div class="container">
    <h2 class="mt-3">Listar Alumnos</h2>

    <!-- Formulario para seleccionar la asignatura -->
<form method="post" action="profesor_dashboard.php?section=listado_alumnos">
        <div class="form-group">
            <label for="asignatura">Selecciona una asignatura:</label>
            <select name="asignatura_id" id="asignatura" class="form-control" required>
                <option value="">Selecciona una asignatura</option>
                {foreach $asignaturas as $asignatura}
                    <option value="{$asignatura.id}">{$asignatura.nombre}</option>
                {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ver Alumnos</button>
    </form>

    <!-- Tabla para mostrar los alumnos matriculados -->
    {if isset($alumnos)}
        <h3>Alumnos Matriculados</h3>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                </tr>
            </thead>
            <tbody>
                {foreach $alumnos as $alumno}
                    <tr>
                        <td>{$alumno.nombre}</td>
                        <td>{$alumno.apellidos}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    {else}
        <p class="mt-3">Selecciona una asignatura para ver los alumnos matriculados.</p>
    {/if}
</div>
{/block}
