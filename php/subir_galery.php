<?php
include('conection.php');

if (isset($_POST['Guardar'])) {
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['titulo'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp = $_FILES['imagen']['tmp_name'];


        if( !((strpos($tipo,'gif') || strpos($tipo,'jpg') || strpos($tipo,'webp') || strpos($tipo,'jpeg') ))) {
            $_SESSION['mensaje'] = 'solo se permite archivos jpg, jpeg, gif, webp';
            $_SESSION['tipo'] = 'danger';
            header('location:galeria.php');
        }else{
            $sql = "SELECT * FROM imagenes";
            $query = "INSERT INTO imagenes(imagen,nombre) values('$imagen','$nombre')";
            $resultado = mysqli_query($connection,$query);
            if ($resultado) {
                move_uploaded_file($temp,'../img/fotosartistas'.$imagen);
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header('location:galeria.php');
            }else{
                $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                $_SESSION['tipo'] = 'danger';   
            }
        }
    }
}

?>