
{block name="content"}
    <h2>Baja de Usuario</h2>
    {if isset($mensaje)}
        <div class="alert alert-info" role="alert">
            {$mensaje}
        </div>
    {/if}
    <form method="post" action="?section=baja_usuario">
        <div class="form-group">
            <label for="usuario_id">Seleccionar Usuario:</label>
            <select class="form-control" id="usuario_id" name="usuario_id" required>
                {foreach from=$usuarios item=usuario}
                    <option value="{$usuario.id}">{$usuario.nombre} {$usuario.apellidos}</option>
                {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-danger">Eliminar Usuario</button>
    </form>
{/block}
