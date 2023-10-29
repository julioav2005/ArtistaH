<?php
include('../conexion.php');

    $id=$_POST['id'];
    $foto = $_FILES['foto']['name'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $categoria=$_POST['categoria'];

    if(isset($foto) && $foto != ""){
        $tipo = $_FILES['foto']['type'];
        $temp  = $_FILES['foto']['tmp_name'];

       if( !((strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'jpg')))){
            echo "<script>alert('el archivo tiene que ser de extension png, jpeg, webp y jpg'); </script>";
            echo "<script>window.location.href='pizza.php';</script>";
            }else{
         $query = "UPDATE articulos SET id='$id',foto='$foto',nombre='$nombre',descripcion='$descripcion',precio='$precio',categoria='$categoria' WHERE id='$id'";   
           $resultado = mysqli_query($con,$query);
         if ($resultado) {
             move_uploaded_file($temp, '../../img/'.$foto);
          echo "<script>alert('se ha subido correctamente');</script>";
          echo "<script>window.location.href='pizza.php';</script>";

         }else{
          echo "<script>alert('ha ocurrido un error en el servidor');</script>";
          echo "<script>window.location.href='pizza.php';</script>";
          
            
         }
       }
    }



?>