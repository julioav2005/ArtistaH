<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "artistas";

    $connection = new mysqli($servername, $username, $pass, $database);

    $idUsuario = $_POST['idUsuario'];
    $nomUsuario = $_POST['nomUsuario'];
    $passUsuario = $_POST['passUsuario'];
    $emailUsuario = $_POST['emailUsuario'];

    $sql = "INSERT INTO usuarios VALUES ('$idUsuario','$nomUsuario','$passUsuario','$emailUsuario')";

    $resultado = mysqli_query($connection, $sql);

    if ($resultado === TRUE) {
        header("location:index.php");
    } else {
        echo "Datos NO insertados";
    }
 ?>