<?php
/* Home Controller
<<<<<<< HEAD
 * 2015-12-3
 * Last Modification 2015-12-3 12:45
 */
 require_once("libs/template_engine.php");
 require_once("libs/parameters.php");
 require_once("models/productos.model.php");

  function run(){
    $productos = array();
    $productos = obtenerProductos();
    renderizar("productos", array("productos" => $productos));
  }

=======
 * 2015-11-2
 * Created By OJBA
 * Last Modification 2015-11-2 20:04
 */
 require_once("libs/template_engine.php");
 function run(){
   //http_response_code(200);
   $data = array();

   renderizar("productos",array("nada"=>$data) );
 }
>>>>>>> 3d069a067f38060a01acf740c884e849940f593c
 run();
?>
