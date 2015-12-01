<?php
/* althome Controller
 * 2015-11-3
 * Created By OJBA
 * Last Modification 2015-11-3 12:32
 */
  require_once("libs/template_engine.php");
  function run(){
    //http_response_code(200);
    $data = array();

    renderizar("contacto",array("nada"=>$data) );
  }
  run();
?>
