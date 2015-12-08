<?php
/* Categorias Controller
 * 2015-12-3
 * Created By OJBA
 * Last Modification 2015-12-3 17:08
 */
 require_once("libs/template_engine.php");
 require_once("libs/parameters.php");
 require_once("models/productos.model.php");

  function run(){
    $id="PD1001";
    $productoData = array();
    $producto=obtenerUnProducto("PD1001");
    $productoData["productos"]=$producto;
    $productoData["productoscantidad"]=20;

    renderizar("carrito", $productoData);
  }

 run();
?>
