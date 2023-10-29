<?php 
    include("../conexion.php");
    // $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM articulos WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>



                <div class="container mt-5">
                  <div class="row d-flex justify-content-center align-items-center h-100"> 
                   <div class="col-md-4">
                    <form action="update.php" method="POST" enctype="multipart/form-data">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['id']  ?>">
                                
                                <input class="mb-3" type="file" required name="foto"  value="<?php echo $row['foto']  ?>">

                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">

                                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion']  ?>">

                                <input type="number" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="categoria" placeholder="categoria" value="<?php echo $row['categoria']  ?>">

                                <div class="d-grid gap-2">
                                  <button type="submit" class="btn btn-success ">ACTUALIZAR</button>
                                </div>
                            <!-- <input type="submit" class="btn btn-primary btn-block" value="Actualizar"> -->
                    </form>
                   </div>
                  </div>
                 </div>  
    </body>
</html>