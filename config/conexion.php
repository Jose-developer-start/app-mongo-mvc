<?php
//require "../vendor/autoload.php";
    class BD{
        public static function connect(){
            
            $client = new MongoDB\Client("mongodb://localhost:27017");
	        $conexion = $client->factura_parcial;
            return $conexion;
        } 
    }

    

    //$data = BD::connect()->users->deleteOne(['cod_cliente' => '00001']);
    //var_dump($data);
?>