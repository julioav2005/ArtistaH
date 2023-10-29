<?php 
    include("../conexion.php");
    // $con=conectar();

$IdCategoria=$_GET['IdCategoria'];

$sql="SELECT * FROM categorias WHERE IdCategoria='$IdCategoria'";
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
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="IdCategoria" value="<?php echo $row['IdCategoria']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="IdCategoria" placeholder="IdCategoria" value="<?php echo $row['IdCategoria']  ?>">

                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                        <div class="d-grid gap-2">
                            <input type="submit" class="btn btn-success" value="Actualizar">
                        </div>    
                    </form>
                   </div>
                  </div>  
                </div>
    </body>
</html>
