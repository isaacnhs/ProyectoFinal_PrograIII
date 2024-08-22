{block name="content"}
    <h2>Alta de Asignatura</h2>
    {if isset($mensaje)}
        <div class="alert alert-info" role="alert">
            {$mensaje}
        </div>
    {/if}
    <form method="post" action="?section=alta_asignatura">
        <div class="form-group">
            <label for="nombre">Nombre Asignatura:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="nivel">Nivel:</label>
            <select class="form-control" id="nivel" name="nivel" required>
                <option value="">Seleccione un nivel</option>
                {foreach from=$niveles item=nivel}
                    <option value="{$nivel.id}">{$nivel.nivel}</option>
                {/foreach}
            </select>
        </div>
        <div class="form-group">
            <label for="profesor_id">Seleccionar Profesor:</label>
            <select class="form-control" id="profesor_id" name="profesor_id" required>
                {foreach from=$profesores item=profesor}
                    <option value="{$profesor.id}">{$profesor.nombre} {$profesor.apellidos}</option>
                {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Asignatura</button>
    </form>
{/block}
