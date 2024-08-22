{block name="content"}
    <h2>Listar Faltas de Asistencia</h2>

    <!-- Formulario para seleccionar la asignatura -->
    <form action="alumno_dashboard.php?section=faltas" method="POST">
        <div class="form-group">
            <label for="asignatura">Seleccionar Asignatura</label>
            <select name="asignatura_id" id="asignatura" class="form-control" required>
                <option value="">Seleccione una asignatura</option>
                {foreach from=$asignaturas item=asignatura}
                    <option value="{$asignatura.id}">{$asignatura.nombre}</option>
                {/foreach}
            </select>
        </div>
        <!-- Campo oculto para indicar la acción de consultar faltas -->
        <input type="hidden" name="consultar_faltas" value="1">
        <button type="submit" class="btn btn-primary">Consultar Faltas</button>
    </form>

    <!-- Mostrar faltas de asistencia -->
{if isset($faltas)}
    {if $faltas|@count > 0}
        <!-- Mostrar la tabla de faltas -->
        <table class="table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Justificación</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$faltas item=falta}
                    <tr>
                        <td>{$falta.fecha}</td>
                        <td>{$falta.justificada}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    {else}
        <p>No hay faltas registradas para esta asignatura.</p>
    {/if}
{/if}
{/block}

