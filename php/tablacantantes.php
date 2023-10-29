<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>Tabla de compositores</title>
</head>
<body>
<div class="container my-5">
        <h2>lista de Compositores</h2>
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
                            $sql = "SELECT * FROM artistas where idCategoria='3'";
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
                                    <td><img src='../img/fotosartistas/$row[foto]' alt='Foto del Artista' style='max-width: 150px; max-height: 150px;'></td>
                                </tr>
                                ";
                            }
                        ?>
                    </tbody>    
            </table>

    </div>
</body>
</html>