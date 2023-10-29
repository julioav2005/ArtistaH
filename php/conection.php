<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "artistas";



 $connection = new mysqli($servername, $username, $password, $database);

 session_start();

if ($connection->connect_errno) {
    die("Conexion Fallida" . $connection->connect_errno );

} else {
    echo"conectado";
}



?>