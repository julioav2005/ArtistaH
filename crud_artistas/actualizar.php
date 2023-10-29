<?php 
include("../php/conection.php");

// Verificar si se proporcionó un valor 'id' en la URL
if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $sql="SELECT * FROM artistas WHERE idArtista='$id'";
    $query=mysqli_query($connection,$sql);

    $row=mysqli_fetch_array($query);
} else {
    // Manejar el caso en el que no se proporcionó 'id' en la URL
    echo "...";
    // Puedes redirigir o mostrar un mensaje de error personalizado aquí.
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.bundle.min.js"></script>
        
    </head>
    <body>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center h-100"> 
                <div class="col-md-4">
                    <form action="update.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="idArtista" value="<?php echo $row['idArtista']  ?>">
                        <input type="number" class="form-control mb-3" name="idArtista" placeholder="id del artista" value="<?php echo $row['idArtista']  ?>">
                        <input type="text" class="form-control mb-3" name="nomArtista" placeholder="nombre completo del artista" value="<?php echo $row['nomArtista']; ?>">
                        <input type="number" class="form-control mb-3" name="idCategoria" placeholder="id de la categoría" value="<?php echo $row['idCategoria']  ?>">
                        <input type="date" class="form-control mb-3" name="fechaNac" placeholder="fecha de nacimiento del artista" value="<?php echo $row['fechaNac']  ?>">
                        <input type="date" class="form-control mb-3" name="FechaDefuncion" placeholder="fecha de defunción del artista" value="<?php echo $row['FechaDefuncion']  ?>">
                        <input type="text" class="form-control mb-3" name="reconocimientos" placeholder="reconocimientos del artista" value="<?php echo $row['reconocimientos']; ?>">
                        <input class="mb-3" type="file" required name="foto"  value="<?php echo $row['foto']  ?>">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success ">ACTUALIZAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </body>
</html>
