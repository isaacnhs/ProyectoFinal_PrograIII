
{block name="content"}
    <h2>Baja de Asignatura</h2>
    {if isset($mensaje)}
        <div class="alert alert-info" role="alert">
            {$mensaje}
        </div>
    {/if}
    <form method="post" action="?section=baja_asignatura">
        <div class="form-group">
            <label for="asignatura_id">Seleccionar Asignatura:</label>
            <select class="form-control" id="asignatura_id" name="asignatura_id" required>
                {foreach from=$asignaturas item=asignatura}
                    <option value="{$asignatura.id}">{$asignatura.nombre}</option>
                {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-danger">Eliminar Asignatura</button>
    </form>
{/block}
