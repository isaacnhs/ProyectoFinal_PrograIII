

{block name="content"}
<div class="container">
    <h2 class="mt-3">Listar Profesores</h2>
    
    <!-- Tabla para mostrar los profesores -->
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
            </tr>
        </thead>
        <tbody>
            {foreach $profesores as $profesor}
                <tr>
                    <td>{$profesor.nombre}</td>
                    <td>{$profesor.apellidos}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{/block}
