<?php
    //modelo de datos de productos
    require_once("libs/dao.php");

    function obtenerProductos(){
      $sqlstr = "Select * from productos;";
      return obtenerRegistros($sqlstr);
    }

    /*function obtenerProducto($nombre){
        $producto = array();
        $sqlstr = (SELECT * FROM productos where id =%d;",$nombre);
        $producto = obtenerUnRegistro($sqlstr);
        return $producto;
    }*/

    function insertProducto(  $idproductos,$nombre,
                           $descproductos, $foto, $precio){
        $strsql = "INSERT INTO productos
                    (idproductos, nombre, descproducto, foto, precio)
                   VALUES
                    ( '%s','%s','%s','%s','%f');";
        $strsql = sprintf($strsql, valstr($idproductos),
                                    valstr($nombre),
                                    valstr($descproductos),
                                    valstr($foto),
                                    $precio);

        if(ejecutarNonQuery($strsql)){
            return getLastInserId();
        }
        return 0;
    }

    function obtenerProductosForCombo($idproductos){
      $productos = obtenerProductos();
      for($i=0;$i<count($productos);$i++){
        if($productos[$i]["idproductos"] == $idproductos){
          $productos[$i]["newCol"] = "selected";
        }else{
          $productos[$i]["newCol"] = "";
        }
      }
      return $categorias;
    }
    function obtenerMensajesConFiltro($contenido){
        $sqlstr = sprintf("select * from productos where desc like '%s%' and nombre like '%s%' ; "
                        , valstr($contenido));
        return obtenerProductos($sqlstr);
    }

    function obtenerNumeroProductos(){
        $sqlstr = "select count(*) as NumProductos from productos;";
        return obtenerProductos($sqlstr)["NumProductos"];
    }
?>
