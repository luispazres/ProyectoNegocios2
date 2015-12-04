


		<thead>
		    <tr>
		      <th>Id</th>
		      <th>Nombre</th>
		      <th>Cantidad</th>
		      <th>Precio unidad</th>
		      <th>Total producto</th>
		      <th>Eliminar</th>
		    </tr>
		</thead>
		<tbody>
		    <tr ng-repeat="prod in udpShopContent">
		      <td>{{idproductos}}</td>
		      <td>{{nombre}}</td>
		      <td>{{cantidad}}</td>
		      <td>{{roundCurrency(preciocompra)}}</td>
		      <td>{{roundCurrency(preciocompra * cantidad)}}</td>
		      <td><a class="button " ng-click="remove(idproductos)">Eliminar</a></td>
		    </tr>
		    <tr>
		    	<td colspan="6">Precio total del carrito: {{ roundCurrency(udpShopTotalPrice) }}</td>
		    <tr>
		    <tr>
		    	<td colspan="6">Numero total de articulos: {{ udpShopTotalProducts }}</td>
		    <tr>
		    <tr>
		    	<td colspan="6">
		    		<a href="#/" class="button ">
		    			Ir a la página principal
		    		</a>
		    		<a ng-disabled="udpShopContent.length < 1" class="button " ng-click="destroy()">
		    			Destroy
		    		</a>
		    	</td>
		    <tr>
		  </tbody>
