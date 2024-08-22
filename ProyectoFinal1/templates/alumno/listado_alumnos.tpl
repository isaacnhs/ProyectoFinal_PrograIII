<h2>Listado de Alumnos de Clase</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$alumnos_compartidos item=alumno}
            <tr>
                <td>{$alumno.nombre}</td>
                <td>{$alumno.apellidos}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
