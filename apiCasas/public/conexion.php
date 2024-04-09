<?php
    include "../vendor/adodb/adodb-php/adodb.inc.php";

    function conectar(){
        //indicar el driver de la conexion
        $conector=NewADOConnection('mysql');

        //credenciales de conexion
        $host="localhost";
        $user="root";
        $pass="";
        $db="casasapp";
    }
    
    //habilitar el modo debug para desarrollo
    $conector->debug=true;      // devolver a false al terminar el desarrollo

    //abrir la conexion
    $conector->Connect($host, $user, $pass, $db);

    return $conector;
?>