
{block name="content"}
<h2>Consultar Horario</h2>
<form action="alumno_dashboard.php" method="POST">
    <div class="form-group">
        <label for="asignatura">Seleccionar Asignatura</label>
        <select name="asignatura_id" id="asignatura" class="form-control" required>
            <option value="">Seleccione una asignatura</option>
            {foreach from=$asignaturas item=asignatura}
                <option value="{$asignatura.id}">{$asignatura.nombre}</option>
            {/foreach}
        </select>
    </div>
    <input type="hidden" name="consultar_horario" value="1">
    <button type="submit" class="btn btn-primary">Consultar Horario</button>
</form>

{if isset($horario) && !empty($horario)}
    <h3 class="mt-5">Horario de la Asignatura</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Día</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$horario item=hora}
                <tr>
                    <td>{$hora.dia}</td>
                    <td>{$hora.hora_inicio}</td>
                    <td>{$hora.hora_fin}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/if}
{/block}
