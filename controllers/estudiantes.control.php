<?php
/* althome Controller
 * 2015-11-6
 * Created By OJBA
 * Last Modification 2015-11-6 11:01
 */
  require_once("libs/template_engine.php");
  function run(){
    //http_response_code(200);
    $data = array();

    renderizar("estudiantes",array("nada"=>$data) );
  }
  run();
?>
