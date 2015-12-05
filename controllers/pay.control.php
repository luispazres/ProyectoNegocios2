<?php
/* Home Controller
 * 2015-12-3
 * Last Modification 2015-12-3 12:49
 */
 require_once("libs/template_engine.php");
 require_once("libs/parameters.php");
 require_once("models/productos.model.php");

  function run(){
    $productos = array();
    $productos = obtenerProductos();
    renderizar("productos", array("productos" => $productos));
  }

 run();
?>
