{block name="content"}
<div class="container">
    <h2 class="mt-3">Gestionar Notas</h2>

    <!-- Mensaje de éxito -->
    {if $mensaje_exito}
        <div class="alert alert-success">
            {$mensaje_exito}
        </div>
    {/if}

    <!-- Formulario para seleccionar la asignatura -->
    <form method="post" action="profesor_dashboard.php?section=gestion_notas">
        <div class="form-group">
            <label for="asignatura">Selecciona una asignatura:</label>
            <select name="asignatura_id" id="asignatura" class="form-control" required>
                <option value="">Selecciona una asignatura</option>
                {foreach $asignaturas as $asignatura}
                    <option value="{$asignatura.id}" {if $asignatura.id == $asignatura_id}selected{/if}>{$asignatura.nombre}</option>
                {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ver Alumnos</button>
    </form>

    <!-- Tabla para gestionar las notas de los alumnos -->
    {if isset($alumnos)}
        <h3>Alumnos</h3>
        <form method="post" action="profesor_dashboard.php?section=gestion_notas">
            <input type="hidden" name="asignatura_id" value="{$asignatura_id}">
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $alumnos as $alumno}
                        <tr>
                            <td>{$alumno.nombre}</td>
                            <td>{$alumno.apellidos}</td>
                            <td>
                                <input type="number" name="notas[{$alumno.id}]" value="{$alumno.nota}" min="0" max="100" class="form-control" required>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">Actualizar Notas</button>
        </form>
    {else}
        <p class="mt-3">Selecciona una asignatura para gestionar las notas de los alumnos.</p>
    {/if}
</div>
{/block}
