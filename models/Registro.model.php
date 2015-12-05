<?php
    //modelo de datos de productos
    require_once("libs/dao.php");

    function obtenerUsuario($userName){
        $usuario = array();
        $sqlstr = sprintf("SELECT correo,nombre, primerapellido, segundoapellido, telefono,identidad,UNIX_TIMESTAMP(fechanacimiento) as fechanacimiento,contrasena, idrol,fechaingreso FROM usuarios where correo = '%s';",$userName);

        $usuario = obtenerUnRegistro($sqlstr);
        return $usuario;
    }

    function insertUsuario($userEmail,$userName, $userPrimerApellido,$userSegundoApellido,$userTelefono,$userIdentidad,$userFechanNac,
                           $password, $id, $fechaing){


  $strsql = sprintf("INSERT INTO `usuarios` ( `correo`,`nombre`,`primerapellido`, `segundoapellido`,`telefono`,`identidad`,`fechanacimiento`,`contrasena`,`idrol`,`fechaingreso`) VALUES ( '%s', '%s','%s','%s','%s','%s',FROM_UNIXTIME(%s),'%s', %d,FROM_UNIXTIME(%s));",  $userEmail,$userName, $userPrimerApellido,$userSegundoApellido,$userTelefono,
  $userIdentidad,
  $userFechanNac, $password, $id,$fechaing);

        if(ejecutarNonQuery($strsql)){
            return 1;//getLastInserId();
        }
        return 0;
    }

?>
