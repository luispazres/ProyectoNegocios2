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
          // geenrar la contraseña salada (salting)
          $fchingreso = time(); //date("YmdHisu"); //20141104203730069785

          $pswdSalted = "";
          if($fchingreso % 2 == 0){
            $pswdSalted = $pswd . $fchingreso;
          }else{
            $pswdSalted = $fchingreso . $pswd;
          }

          $pswdSalted = md5($pswdSalted);


          insertUsuario(   $htmlData["txtEmail"],
                              $htmlData["txtUserName"],
                              $htmlData["txtUserPrimerApellido"],
                              $htmlData["txtUserSegundoApellido"],
                              $htmlData["txtUserTelefono"],
                              $htmlData["txtUserIdentidad"],
                              $htmlData["txtUserFechaNac"],
                              $pswdSalted,2, $fchingreso);


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
