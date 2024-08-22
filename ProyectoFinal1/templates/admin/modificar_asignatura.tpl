{block name="content"}
<h2>Modificar Asignatura</h2>
{if isset($mensaje)}
    <div class="alert alert-info" role="alert">
        {$mensaje}
    </div>
{/if}
<form method="post" action="?section=modificar_asignatura">
    <div class="form-group">
        <label for="asignatura_id">Seleccionar Asignatura:</label>
        <select class="form-control" id="asignatura_id" name="asignatura_id" required onchange="cargarDatosAsignatura()">
            <option value="">Seleccione una asignatura</option>
            {foreach from=$asignaturas item=asignatura}
                <option value="{$asignatura.id}" {if isset($asignatura_selected) && $asignatura.id == $asignatura_selected}selected{/if}>
                    {$asignatura.nombre}
                </option>
            {/foreach}
        </select>
    </div>

    <div id="datos_asignatura" style="display: {if isset($asignatura)}block{else}none{/if};">
        {if isset($asignatura)}
            <div class="form-group">
                <label for="nombre">Nuevo Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{$asignatura.nombre}">
            </div>
            <div class="form-group">
                <label for="nivel_id">Nuevo Nivel:</label>
                <select class="form-control" id="nivel_id" name="nivel_id" required>
                    {foreach from=$niveles item=nivel}
                        <option value="{$nivel.id}" {if $asignatura.nivel_id == $nivel.id}selected{/if}>
                            {$nivel.nivel}
                        </option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group">
                <label for="profesor_id">Nuevo Profesor:</label>
                <select class="form-control" id="profesor_id" name="profesor_id" required>
                    {foreach from=$profesores item=profesor}
                        <option value="{$profesor.id}" {if $asignatura.profesor_id == $profesor.id}selected{/if}>
                            {$profesor.nombre} {$profesor.apellidos}
                        </option>
                    {/foreach}
                </select>
            </div>
        {/if}
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Asignatura</button>
</form>

<script>
function cargarDatosAsignatura() {
    var asignatura_id = document.getElementById('asignatura_id').value;
    if (asignatura_id) {
        window.location.href = '?section=modificar_asignatura&asignatura_id=' + asignatura_id;
    } else {
        document.getElementById('datos_asignatura').style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var asignatura_id = document.getElementById('asignatura_id').value;
    if (asignatura_id) {
        document.getElementById('datos_asignatura').style.display = 'block';
    }
});
</script>
{/block}
