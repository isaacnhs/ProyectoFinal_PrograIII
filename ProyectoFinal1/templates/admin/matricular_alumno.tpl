{block name="content"}
<h2>Matricular Alumno en Asignatura</h2>
{if isset($mensaje)}
    <div class="alert alert-info" role="alert">
        {$mensaje}
    </div>
{/if}
<form method="post" action="?section=matricular_alumno">
    <div class="form-group">
        <label for="alumno_id">Seleccionar Alumno:</label>
        <select class="form-control" id="alumno_id" name="alumno_id" required>
            {foreach from=$alumnos item=alumno}
                <option value="{$alumno.id}">{$alumno.nombre} {$alumno.apellidos}</option>
            {/foreach}
        </select>
    </div>
    <div class="form-group">
        <label for="asignatura_id">Seleccionar Asignatura:</label>
        <select class="form-control" id="asignatura_id" name="asignatura_id" required>
            {foreach from=$asignaturas item=asignatura}
                <option value="{$asignatura.id}">{$asignatura.nombre}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Matricular Alumno</button>
</form>
{/block}
