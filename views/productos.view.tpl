
<section id="intro">
<div class="container">
  <pre>Productos</pre>

    <div class="new-container">
    {{foreach productos}}
  <div class="sections cols">
            <pre>{{nombre}}</pre>
          <center><img src="public/imgs/{{foto}}" width="80" height="80" style="margin-bottom: 10px;border-radius:90%;" /></a></center></br>
            <center><label> No.codigo: {{idproductos}}</label></center>
            <center>{{descproducto}}</br></center>

            <center><label>precio: L.{{precio}}</label></center></br>

          <center><h2>Numero de articulos a llevar: </h2></center>
          <center><select ng-init="productoTienda.total=0" ng-model="productoTienda.total">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select></center>
</br>
  <div align="center" ><a href="index.php?page=carrito" ><button>Precio total:</button></a></div>
</div>
    {{endfor productos}}

</div>
</br></br></br>
</div>
</section>
