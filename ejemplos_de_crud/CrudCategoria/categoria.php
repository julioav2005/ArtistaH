<?php 
    include("../conexion.php");

    $sql="SELECT *  FROM categorias";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Categorias crud</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row d-flex justify-content-center align-items-center h-100"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos de categoria</h1>
                                <form action="insertar.php" method="POST" enctype="multipart/form-data">

                                    <input type="number" class="form-control mb-3" name="IdCategoria" placeholder="IdCategoria">

                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    
                                    <div class="d-grid gap-2">
                                      <input type="submit" class="btn btn-success" name="enviarBD" value=
                                      "enviarBD">
                                    </div>
                                </form>
                        </div>

                    <div class="container  mt-5 ">
                        <div class="col-md-12">
                            <table class="table" >
                                <thead class="table-primary table-striped" >
                                    <tr>
                                        <th>IdCategoria</th>
                                        <th>Nombre</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdCategoria']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><a href="actualizar.php?IdCategoria=<?php echo $row['IdCategoria'] ?>" class="btn btn-success">Editar</a></th>
                                                <th><a href="delete.php?IdCategoria=<?php echo $row['IdCategoria'] ?>" class="btn btn-dark">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                      </div>  
                    </div>  
            </div>
    </body>
</html>