<?php

include("../conexion.php");
// $con=conectar();

$IdCategoria=$_GET['IdCategoria'];

$sql="DELETE FROM categorias WHERE IdCategoria='$IdCategoria'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: categoria.php");
    }
?>
