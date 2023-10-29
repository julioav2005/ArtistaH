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

    <div class="container my-5">
        <h2>Lista de Categorias</h2>
        <a class="btn btn-danger" href="create.php" role="button">Agregar Categorias</a>
        <br>
        <br>
            <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Categoria</th>
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
                            $sql = "SELECT * FROM categorias";
                            $result = $connection->query($sql);
                        
                            if (!$result) {
                                die("Consulta invalida: " . $connection->error);
                            }
                        
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td>$row[idCategoria]</td>
                                    <td>$row[nomCategoria]</td>
                                    <td>
                                        <a class='btn btn-primary btn-sm' href='actualizar.php?id=$row[idCategoria]'>Editar</a>
                                        <a class='btn btn-danger btn-sm' href='delete.php?id=$row[idCategoria]'>Eliminar</a>
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