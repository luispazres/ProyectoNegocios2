<?php
/* Registro Controller
 * 2014-11-03
 * Created By OJBA
 * Last Modification 2014-11-02 20:22
 */
  require_once("libs/template_engine.php");
  require_once("models/Registro.model.php");
  function run(){
    $htmlData = array();
    $htmlData["mostrarErrores"] = false;
    $htmlData["errores"] = array();
    $htmlData["txtEmail"]="";
    $htmlData["txtUserName"] = "";
    $htmlData["txtUserPrimerApellido"]="";
    $htmlData["txtUserSegundoApellido"]="";
    $htmlData["txtUserFechaNac"]="";
    $htmlData["txtUserTelefono"]="";
    $htmlData["txtUserIdentidad"]="";
    $htmlData["txtPswd"]="";
    $htmlData["txtPswdCnf"]="";

    if(isset($_POST["btnRegistrar"])){
      $htmlData["txtEmail"] = $_POST["txtEmail"];
      $htmlData["txtUserName"] = $_POST["txtUserName"];
      $htmlData["txtUserPrimerApellido"] = $_POST["txtUserPrimerApellido"];
      $htmlData["txtUserSegundoApellido"] = $_POST["txtUserSegundoApellido"];
      $htmlData["txtUserFechaNac"] = $_POST["txtUserFechaNac"];
      $htmlData["txtUserTelefono"] = $_POST["txtUserTelefono"];
      $htmlData["txtUserIdentidad"] = $_POST["txtUserIdentidad"];
      $pswd = $_POST["txtPswd"];
      $pswdCnf = $_POST["txtPswdCnf"];

      if($pswd == $pswdCnf){
        //seguir proceso de registro
        // verificar que el usuario no exista previamente
      /*  $checkUser = obtenerUsuario($htmlData["txtEmail"]);
        if(count($checkUser)!=0){
          $htmlData["mostrarErrores"] = true;
          $htmlData["errores"][]=array("errmsg"=>"Correo Electrónico ya Usado!");
        }*///else{

          insertUsuario(   $htmlData["txtEmail"],
                              $htmlData["txtUserName"],
                              $htmlData["txtUserPrimerApellido"],
                              $htmlData["txtUserSegundoApellido"],
                              $htmlData["txtUserTelefono"],
                              $htmlData["txtUserIdentidad"],
                              $htmlData["txtUserFechaNac"],
                              $htmlData["txtPswd"]);


      //  }


      }else{
        $htmlData["mostrarErrores"] = true;
        $htmlData["errores"][]=array("errmsg"=>"Contraseñas no coinciden");
      }
    }

    renderizar("Empresas",$htmlData);
  }


  run();
?>
