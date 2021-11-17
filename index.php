<?php
    require "./vendor/autoload.php";

    require_once "./helpers/url.php";

    require_once "./config/conexion.php";

    require_once "./models/factura.php";

    $requestController = $_REQUEST['c'];
    $requestMethod = $_REQUEST['m'];
    $file_controller = "./controllers/".$requestController."Controller.php";
    require_once $file_controller;


    $controller = new $requestController;

    if(!isset($_REQUEST['m'])){
        $controller->index();
    }else{
        call_user_func([$controller,$requestMethod]);
    }

?>