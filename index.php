<?php

    session_start();

    require_once("libs/utilities.php");

    $pageRequest = "home";

    if(isset($_GET["page"])){
        $pageRequest = $_GET["page"];
    }

    //Incorporando los midlewares son codigos que se deben ejecutar
    //Siempre
    require_once("controllers/verificar.mw.php");
    require_once("controllers/site.mw.php");
    //Este switch se encarga de todo el enrutamiento

    switch($pageRequest){
        case "home":
            //llamar al controlador
            require_once("controllers/home.control.php");
            break;
        case "login":
            require_once("controllers/loginlogin.control.php");
            break;
        case "registro":
            require_once("controllers/registro.control.php");
            break;
        case "productoslayout":
            require_once("controllers/productoslayout.control.php");
            break;
        case "formulario":
            require_once("controllers/formulario.control.php");
            break;
        case "inicio":
            require_once("controllers/inicio.control.php");
            break;
        case "productos":
            require_once("controllers/productos.control.php");
            break;
        case "conocenos":
            require_once("controllers/conocenos.control.php");
            break;
        case "contacto":
            require_once("controllers/contacto.control.php");
            break;
        case "estudiantes":
                require_once("controllers/estudiantes.control.php");
            break;
        case "publico":
                require_once("controllers/publico.control.php");
            break;
        case "Empresas":
                require_once("controllers/registro.control.php");
            break;
        case "patrocinadores":
                require_once("controllers/patrocinadores.control.php");
        break;
        case "pay":
                require_once("controllers/pay.control.php");
        break;
        case "carrito":
                require_once("controllers/carrito.control.php");
        break;
        default:
            require_once("controllers/error.control.php");

    }
?>
