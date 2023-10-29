<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="validar.css">
</head>
<body>
    <div class="container">
        <h1>Validar Usuario</h1>
        <form action="conexion.php" method="post">
            <label for="username">Identificación Usuaario:</label>
            <input type="text" name="id" id="id" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" name="contra" id="contra" required>
            <br>
            <input type="submit" value="Validar">
        </form>
    </div>
</body>
</html>
