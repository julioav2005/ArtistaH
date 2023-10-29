<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "artistas";
 
    // Crear conexion
    $connection = new mysqli($servername, $username, $password, $database);

    $idCategoria = "";
    $nomCategoria = "";

    $errorMessage = "";
    $successMessage = "";

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // Método GET: Mostrar los datos del usuario

        if (!isset($_GET["idCategoria"])) {
            header("location: edit.php");
            exit;
        }

        $idCategoria = $_GET["idCategoria"];

        // Leer la fila del cliente seleccionado de la tabla de la base de datos
        $sql = "SELECT * FROM categorias WHERE idCategoria=$idCategoria";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();

        if (!$row) {
            header("location: crudcategorias.php");
            exit;
        }

        $idCategoria = $row["idCategoria"];
        $nomCategoria = $row["nomCategoria"];
    }
    else {
        // Método POST: Actualizar los datos del usuario

        $idCategoria = $_POST["idCategoria"];
        $nomCategoria = $_POST["nomCategoria"];

        do {
            if (empty($idCategoria) || empty($nomCategoria)) {
                $errorMessage = "Todos los campos son requeridos";
                break;
            }

            $sql = "UPDATE categorias " .
                   "SET nomCategoria = '$nomCategoria'" . 
                   "WHERE idCategoria = $idCategoria";

            $result = $connection->query($sql);

            if (!$result) {
                $errorMessage = "Consulta inválida: " . $connection->error;
                break;
            }

            $successMessage = "Categoria actualizada correctamente";

            header("location: crudcategorias.php");
            exit;

        } while (true);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CRUD</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Editar Categoria</h2>

        <?php
            if (!empty($errorMessage)) {
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
        ?>

        <form method="post">
            <input type="hidden" name="idCategoria" value="<?php echo $idCategoria; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="idCategoria" value="<?php echo $idCategoria; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Categoria</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nomCategoria" value="<?php echo $nomCategoria; ?>">
                </div>
            </div>
            


            <?php
                if (!empty($successMessage)) {
                    echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success añert-dismissible fade show' role='alert'>
                                <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                    </div>
                    ";
                }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="crudcategorias.php" role="button">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>