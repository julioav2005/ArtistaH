<?php
include('../php/conection.php');

    $idArtista=$_POST['idArtista'];
    $nomArtista=$_POST['nomArtista'];
    $idCategoria=$_POST['idCategoria'];
    $fechaNac=$_POST['fechaNac'];
    $FechaDefuncion=$_POST['FechaDefuncion'];
    $reconocimientos=$_POST['reconocimientos'];
    $foto = $_FILES['foto']['name'];

    if(isset($foto) && $foto != ""){
        $tipo = $_FILES['foto']['type'];
        $temp  = $_FILES['foto']['tmp_name'];

       if( !((strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'jpg')))){
            echo "<script>alert('el archivo tiene que ser de extension png, jpeg, webp y jpg'); </script>";
            echo "<script>window.location.href='crudartistas.php';</script>";
            }else{
         $query = "UPDATE artistas SET idArtista='$idArtista',nomArtista='$nomArtista',idCategoria='$idCategoria',fechaNac='$fechaNac',FechaDefuncion='$FechaDefuncion',reconocimientos='$reconocimientos',foto='$foto' WHERE idArtista='$idArtista'";   
           $resultado = mysqli_query($connection,$query);
         if ($resultado) {
             move_uploaded_file($temp, '../img/fotosartistas'.$foto);
          echo "<script>alert('se ha subido correctamente');</script>";
          echo "<script>window.location.href='crudartistas.php';</script>";

         }else{
          echo "<script>alert('ha ocurrido un error en el servidor');</script>";
          echo "<script>window.location.href='crudartistas.php';</script>";
          
            
         }
       }
    }



?>