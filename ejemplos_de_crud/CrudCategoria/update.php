<?php

include("../conexion.php");
// $con=conectar();

$IdCategoria=$_POST['IdCategoria'];
$Nombre=$_POST['Nombre'];

$sql="UPDATE categorias SET IdCategoria='$IdCategoria',Nombre='$Nombre' WHERE IdCategoria='$IdCategoria'" ;
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: categoria.php");
    }
?>