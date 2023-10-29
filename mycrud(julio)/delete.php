<?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "artistas";
    
    // Crear conexion
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM usuarios WHERE idUsuario=$id";
    $connection->query($sql);
    }

    header("location: index.php");
    exit;
?>