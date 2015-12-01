<?php
/* Home Controller
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
 run();
?>
