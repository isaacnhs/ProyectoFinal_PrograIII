<h2>Listado de Profesores</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Asignatura</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$profesores item=profesor}
            <tr>
                <td>{$profesor.nombre}</td>
                <td>{$profesor.apellidos}</td>
                <td>{$profesor.asignatura}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
