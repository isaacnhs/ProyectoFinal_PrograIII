{block name="content"}
<div class="container">
    <h2 class="mt-3">Gestionar Faltas de Asistencia</h2>

    <!-- Mensaje de éxito -->
    {if isset($message)}
        <div class="alert alert-success">
            {$message}
        </div>
    {/if}

    <!-- Formulario para seleccionar la asignatura -->
    <form method="post" action="profesor_dashboard.php?section=gestion_faltas">
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

    <!-- Tabla para gestionar las faltas de asistencia -->
    {if isset($alumnos)}
        <h3>Alumnos</h3>
        <form method="post" action="profesor_dashboard.php?section=gestion_faltas&accion=actualizar">
            <input type="hidden" name="asignatura_id" value="{$asignatura_id}">
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Faltas</th>
                        <th>Fecha</th>
                        <th>Justificado</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $alumnos as $alumno}
                        <tr>
                            <td>{$alumno.nombre}</td>
                            <td>{$alumno.apellidos}</td>
                            <td>
                                <input type="number" name="faltas[{$alumno.id}]" value="{$alumno.cantidad_faltas}" min="0" class="form-control" required>
                            </td>
                            <td>
                                <input type="date" name="fechas[{$alumno.id}]" value="{$alumno.fecha}" class="form-control" required>
                            </td>
                            <td>
                                <select name="justificado[{$alumno.id}]" class="form-control" required>
                                    <option value="No" {if $alumno.justificada == 'No'}selected{/if}>No</option>
                                    <option value="Sí" {if $alumno.justificada == 'Sí'}selected{/if}>Sí</option>
                                </select>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">Actualizar Faltas</button>
        </form>
    {/if}
</div>

<script>
document.getElementById('mostrarFormularioRegistro').addEventListener('click', function() {
    var formulario = document.getElementById('formularioRegistro');
    formulario.style.display = formulario.style.display === 'none' ? 'block' : 'none';
});
</script>
{/block}
