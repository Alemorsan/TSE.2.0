<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cot";

    //Creando la coneccion

        $conn = new mysqli($servername, $username, $password,$dbname);
    //verificando la conneccion
    if($conn -> connect_error){
        die("La conexion fallo: ". $conn -> connect_error);
    }
?>