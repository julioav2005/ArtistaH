<?php 
    include("../conexion.php");

    $sql="SELECT *  FROM articulos";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>clientes crud</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5 ">
                    <div class="row d-flex justify-content-center align-items-center h-100"> 
                        
                        <div class="col-md-4">
                            <h1>Ingrese datos de Articulos</h1>
                                <form action="insertar.php" method="POST" enctype="multipart/form-data">

                                    <input type="number" class="form-control mb-3" name="id" placeholder="Identificacion de Pizzas">

                                    <input  class="form-control mb-3" type="file" name="foto">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">

                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion">

                                    <input type="number" class="form-control mb-3" name="precio" placeholder="Precio">

                                    <input type="text" class="form-control mb-3" name="categoria" placeholder="Categoria">
                                      
                                   <div class="d-grid gap-2">
                                    <input type="submit" class="btn btn-success" name="enviarBD" value=
                                    "enviarBD">
                                   </div> 
                                </form>
                        </div>

  
                      <div class="container  mt-5 ">
                        <div class="col-md-12">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IdProducto</th>
                                        <th>Foto</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Categoria</th>
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
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['foto']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['categoria']?></th>
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info" >Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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