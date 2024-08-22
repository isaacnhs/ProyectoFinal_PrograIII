
{block name="content"}
<h2>Consultar Notas</h2>
<form method="POST" action="?section=notas">
    <div class="form-group">
        <label for="asignatura_id">Selecciona una asignatura:</label>
        <select class="form-control" id="asignatura_id" name="asignatura_id">
            {foreach from=$asignaturas item=asignatura}
                <option value="{$asignatura.id}">{$asignatura.nombre}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" name="consultar_notas" class="btn btn-primary">Consultar Notas</button>
</form>


{if isset($notas) && !empty($notas)}
    <h3 class="mt-5">Notas</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Trimestre</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$notas item=nota}
                <tr>
                    <td>{$nota.trimestre}</td>
                    <td>{$nota.nota}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/if}
{/block}
