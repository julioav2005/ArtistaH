<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>Intento de crud</title>
</head>
<body>
    
<div class="container mt-5 ">
                    <div class="row d-flex justify-content-center align-items-center h-100"> 
                        
                        <div class="col-md-4">
                            <h1>Ingrese datos del Artista</h1>
                                <form action="ingresar.php" method="POST" enctype="multipart/form-data">

                                    <div class="form-text" id="basic-addon4">Ingrese el "id" del artista.</div>
                                    <input type="number" class="form-control mb-3" name="idArtista" placeholder="Id Artista">
                                    



                                    <div class="form-text" id="basic-addon4">Ingrese el Nombre completo del artista.</div>
                                    <input type="text" class="form-control mb-3" name="nomArtista" placeholder="Nombre">
                                    


                                    
                                    <div class="form-text" id="basic-addon4">Ingrese el "id" de la Categoría del artista.</div>
                                    <input type="number" class="form-control mb-3" name="idCategoria" placeholder="Id Categoria">
                                    


                                    
                                    <div class="form-text" id="basic-addon4">Ingrese la fecha de Nacimiento del artista.</div>
                                    <input type="date" class="form-control mb-3" name="fechaNac" placeholder="Fecha de Nacimiento">



                                    
                                    <div class="form-text" id="basic-addon4">Ingrese la fecha de Defunción del artista. (opcional)</div>
                                    <input type="date" class="form-control mb-3" name="FechaDefuncion" placeholder="Fecha de Defuncion">



                                    
                                    <div class="form-text" id="basic-addon4">Ingrese los Reconocimientos del artista. (opcional)</div>
                                    <input type="text" class="form-control mb-3" name="reconocimientos" placeholder="Reconocimientos">



                                    <div class="form-text" id="basic-addon4">Ingrese la Foto del artista.</div>
                                    <input  class="form-control mb-3" type="file" name="foto">



                                      
                                   <div class="d-grid gap-2">
                                    <input type="submit" class="btn btn-success" name="enviarBD" value="enviarBD">
                                   </div> 
                                </form>
                        </div>
</div>

    <div class="container my-5">
        <h2>lista de Artista</h2>
        <br>
        <br>
            <table class="table">
                    <thead>
                        <tr>
                            <th>Id Artista</th>
                            <th>Nombre</th>
                            <th>Id Categoria</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Fecha de Defuncion</th>
                            <th>Reconocimienos</th>
                            <th>Fotos</th>
                            <th>Metodo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "artistas";
                            
                            // Crear conexion
                            $connection = new mysqli($servername, $username, $password, $database);
                        
                             // Verificar conexion
                            if ($connection->connect_error) {
                            die("Conexion fallida: " . $connection->connect_error);
                            }
                        
                            // Leer todas las filas de la base de datos
                            $sql = "SELECT * FROM artistas";
                            $result = $connection->query($sql);
                        
                            if (!$result) {
                                die("Consulta invalida: " . $connection->error);
                            }
                        
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td>$row[idArtista]</td>
                                    <td>$row[nomArtista]</td>
                                    <td>$row[idCategoria]</td>
                                    <td>$row[fechaNac]</td>
                                    <td>$row[FechaDefuncion]</td>
                                    <td>$row[reconocimientos]</td>
                                    <td><img src='../img/fotosartistas/$row[foto]' alt='Foto del Artista' style='max-width: 100px; max-height: 150px;'></td>
                                    <td>
                                        <a class='btn btn-primary btn-sm' href='actualizar.php?id=$row[idArtista]'>Editar</a>
                                        <a class='btn btn-danger btn-sm' href='delete.php?id=$row[idArtista]'>Eliminar</a>
                                    </td>
                                </tr>
                                ";
                            }
                        ?>
                    </tbody>    
            </table>

    </div>    
</body>
</html>