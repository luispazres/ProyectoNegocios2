<?php
/* Categorias Controller
 * 2015-11-30
 * Created By OJBA
 * Last Modification 2015-11-30 23:45:00
 */
  require_once("libs/template_engine.php");

  require_once("models/productos.model.php");

  function run(){
    $categorias = array();
    $categorias = obtenerCategorias();
    renderizar("categorias", array("categorias" => $categorias));
  }

  run();
?>
