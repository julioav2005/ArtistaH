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
        <h2>lista de usuario</h2>
        <a class="btn btn-danger" href="create.php" role="button">Nuevo usuario</a>
        <br>
        <br>
            <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Contraseña</th>
                            <th>Email</th>
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
                            $sql = "SELECT * FROM usuarios";
                            $result = $connection->query($sql);
                        
                            if (!$result) {
                                die("Consulta invalida: " . $connection->error);
                            }
                        
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td>$row[idUsuario]</td>
                                    <td>$row[nomUsuario]</td>
                                    <td>$row[passUsuario]</td>
                                    <td>$row[emailUsuario]</td>
                                    <td>
                                        <a class='btn btn-primary btn-sm' href='edit.php?id=$row[idUsuario]'>Editar</a>
                                        <a class='btn btn-danger btn-sm' href='delete.php?id=$row[idUsuario]'>Eliminar</a>
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