<?php
/* Home Controller
 * 2015-11-30
 * Created By OJBA
 * Last Modification 2015-11-30 8:58am
 */
 require_once("libs/template_engine.php");
 function run(){
   //http_response_code(200);
   $data = array();

   renderizar("patrocinadores",array("nada"=>$data) );
 }
 run();
?>
