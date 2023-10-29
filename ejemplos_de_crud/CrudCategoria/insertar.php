<?php

include("../conexion.php");
// $con=conectar();

$IdCategoria=$_POST['IdCategoria'];
$Nombre=$_POST['Nombre'];


$sql="INSERT INTO categorias VALUES('$IdCategoria','$Nombre')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:categoria.php");
    
}else {
}
?>