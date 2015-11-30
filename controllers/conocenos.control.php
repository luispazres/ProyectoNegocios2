<?php
/* althome Controller
 * 2015-11-1
 * Created By OJBA
 * Last Modification 2015-11-31 19:27
 */
  require_once("libs/template_engine.php");
  function run(){
    //http_response_code(200);
    $data = array();

    renderizar("conocenos",array("nada"=>$data) );
  }
  run();
?>
