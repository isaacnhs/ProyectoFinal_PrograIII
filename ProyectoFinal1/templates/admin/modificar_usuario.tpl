{block name="content"}
    <h2>Modificar Alumno</h2>
    {if isset($mensaje)}
        <div class="alert alert-info" role="alert">
            {$mensaje}
        </div>
    {/if}
    <form method="post" action="?section=modificar_usuario">
        <div class="form-group">
            <label for="usuario_id">Seleccionar Alumno:</label>
            <select class="form-control" id="usuario_id" name="usuario_id" required onchange="cargarDatosAlumno()">
                <option value="">Seleccione un alumno</option>
                {foreach from=$usuarios item=usuario}
                    <option value="{$usuario.id}" {if isset($alumno) && $alumno.id == $usuario.id}selected{/if}>
                        {$usuario.nombre} {$usuario.apellidos}
                    </option>
                {/foreach}
            </select>
        </div>

        <div id="datos_alumno" style="display: {if isset($alumno)}block{else}none{/if};">
            {if isset($alumno)}
                <div class="form-group">
                    <label for="login">Nuevo Login:</label>
                    <input type="text" class="form-control" id="login" name="login" value="{$alumno.login}">
                </div>
                <div class="form-group">
                    <label for="password">Nuevo Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="nombre">Nuevo Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{$alumno.nombre}">
                </div>
                <div class="form-group">
                    <label for="apellidos">Nuevos Apellidos:</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" value="{$alumno.apellidos}">
                </div>
                <div class="form-group">
                    <label for="nivel_id">Nuevo Nivel:</label>
                    <select class="form-control" id="nivel_id" name="nivel_id" required>
                        {foreach from=$niveles item=nivel}
                            <option value="{$nivel.id}" {if $alumno.nivel_id == $nivel.id}selected{/if}>
                                {$nivel.nivel}
                            </option>
                        {/foreach}
                    </select>
                </div>
            {/if}
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Alumno</button>
    </form>

    <script>
        function cargarDatosAlumno() {
            var usuario_id = document.getElementById('usuario_id').value;
            if (usuario_id) {
                // Redirigir la página para actualizar el formulario con los datos del alumno seleccionado
                window.location.href = '?section=modificar_usuario&usuario_id=' + usuario_id;
            } else {
                // Ocultar los datos si no se selecciona ningún alumno
                document.getElementById('datos_alumno').style.display = 'none';
            }
        }

        // Asegúrate de mostrar los datos del alumno al cargar la página si ya se ha seleccionado uno
        document.addEventListener('DOMContentLoaded', function() {
            var usuario_id = document.getElementById('usuario_id').value;
            if (usuario_id) {
                document.getElementById('datos_alumno').style.display = 'block';
            }
        });
    </script>
{/block}
