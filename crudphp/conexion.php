<?php

$servidor = "localhost";
$db = "crud";
$username = "root";
$password = "";

try {

    $conexion = new PDO("mysql:host=$servidor;dbname=$db",$username,$password);
    echo "Conexión exitosa";


} catch (Exception $e) {
    echo $e->getMessage();
}

?>