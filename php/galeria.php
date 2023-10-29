<?php
include('conection.php');
$query = "select * from imagenes";
$resultado = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria Artistas</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="../css/estilos_galery.css"> -->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="text-primary">Subir imagen</h1>
                <form action="subir_galery.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="my-input">Seleccione una Imagen</label>
                        <input id="my-input" type="file" name="imagen">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Titulo de la Imagen</label>
                        <input id="my-input" class="form-control" type="text" name="titulo">
                    </div>
                    <?php if (isset($_SESSION['mensaje'])) { ?>
                    <div class="alert alert-<?php echo $_SESSION['tipo']; ?> alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['mensaje']; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php session_unset(); } ?>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Guardar" name="Guardar">
                </form>
            </div>
            <div class="col-lg-8">
                <h1 class="text-primary text-center">Galería de Imagenes</h1>
                <hr>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach($resultado as $row){ ?>
                    <div class="col">
                    <div class="card">
                        <img src="../img/fotosartistas<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text"><strong><?php echo $row['nombre']; ?></strong></p>
                        </div>
                    </div>
                    </div>
                    <?php }?>
            </div>
        </div>
    </div>
</body>

<!-- cree la tabla de datos... no sea huevon buescando el error CREATE TABLE imagenes(
    cod_imagen int PRIMARY KEY AUTO_INCREMENT,
    imagen varchar(50),
    nombre varchar(50)); -->

</html>