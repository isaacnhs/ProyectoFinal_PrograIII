{block name="content"}
    <h2>Alta de Alumno</h2>
    {if isset($mensaje)}
        <div class="alert alert-info" role="alert">
            {$mensaje}
        </div>
    {/if}
    <form method="post" action="admin_dashboard.php?section=alta_usuario">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>
        <div class="form-group">
            <label for="nivel">Nivel:</label>
            <select class="form-control" id="nivel" name="nivel" required>
                <option value="">Selecciona un nivel</option>
                {foreach from=$niveles item=nivel}
                    <option value="{$nivel.id}">{$nivel.nivel}</option>
                {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Alumno</button>
    </form>
{/block}
