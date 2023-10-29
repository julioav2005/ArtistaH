<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "artistas";

    $connection = new mysqli($servername, $username, $pass, $database);

    $idCategoria = $_POST['idCategoria'];
    $nomCategoria = $_POST['nomCategoria'];

    $sql = "INSERT INTO categorias VALUES ('$idCategoria','$nomCategoria')";

    $resultado = mysqli_query($connection, $sql);

    if ($resultado === TRUE) {
        header("location:crudcategorias.php");
    } else {
        echo "Datos NO insertados";
    }
 ?>