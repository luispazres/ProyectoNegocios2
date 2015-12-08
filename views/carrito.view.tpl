
<h1>Mensajes Registrados</h1>
<b>Mostrando {{productoscantidad}} Registros</b>
<table>
    <tr>
        <th>
            Código
        </th>
        <th>
            Nombre Producto
        </th>
        <th>
            Precio
        </th>
    </tr>

{{foreach productos}}
    <tr>
        <td>
            {{productos idproductos}}
        </td>
        <td>
            {{nombre}}
        </td>
        <td>
            {{precio}}
        </td>
    </tr>

{{endfor productos}}

</table>
