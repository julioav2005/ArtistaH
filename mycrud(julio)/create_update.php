<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artistas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $idUsuario = $_POST["id"];
    $nomUsuario = $_POST["name"];
    $emailUsuario = $_POST["email"];

    if ($idUsuario == "") {
        // Create new user
        $sql = "INSERT INTO usuarios (name, email) VALUES ('$nomUsuario', '$emailUsuario')";
    } else {
        // Update existing user
        $sql = "UPDATE usuarios SET name='$nomUsuario', email='$emailUsuario' WHERE id=$idUsuario";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
