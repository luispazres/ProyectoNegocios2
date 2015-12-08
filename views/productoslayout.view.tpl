<style>
pre{
font-size: 3em;
}
</style>
<div class="row">
	<div class="large-6 columns">
		<h3>Tienda con AngularJS y Paypal</h3>
		<div ng-repeat="productoTienda in productosTienda">
			<h4>{{productoTienda.name}}</h4>
			<img ng-src="{{productoTienda.picture}}" width="80" height="80" style="margin-bottom: 10px" />
			<select ng-init="productoTienda.total=1" ng-model="productoTienda.total">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
			<a class="button info large-12" ng-click="add(productoTienda)">
		    	Precio: {{ productoTienda.price }} Euros
		    </a>
			</button>
		</div>
	</div>

	<div class="large-6 columns">
		<table>
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
		      <td>{{prod.id}}</td>
		      <td>{{prod.name}}</td>
		      <td>{{prod.qty}}</td>
		      <td>{{roundCurrency(prod.price)}}</td>
		      <td>{{roundCurrency(prod.price * prod.qty)}}</td>
		      <td><a class="button alert" ng-click="remove(prod.id)">Eliminar</a></td>
		    </tr>
		    <tr>
		    	<td colspan="6">Precio total del carrito: {{ roundCurrency(udpShopTotalPrice) }}</td>
		    <tr>
		    <tr>
		    	<td colspan="6">Número total de artículos: {{ udpShopTotalProducts }}</td>
		    <tr>
		
		  </tbody>
		</table>
	</div>
</div>

<table>
    <tr>

    </tr>
    {{foreach productos}}
    <tr>
        <td>
            {{idproductos}}
        </td>
        <td>
            {{nombre}}
        </td>
        <td>
            L{{preciocompra}}
        </td>
        <td>
            L{{precioventa}}
        </td>
        <td>
            {{fotoid}}
        </td>
    </tr>
    {{endfor productos}}
    {{foreach productos2}}
    <tr>
      <td>
          {{idproductos}}
      </td>
      <td>
          {{nombre}}
      </td>
      <td>
          L{{preciocompra}}
      </td>
      <td>
          L{{precioventa}}
      </td>
      <td>
          {{fotoid}}
      </td>
    </tr>
    {{endfor productos2}}
</table>
