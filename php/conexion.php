<?php
 $conexion = mysqli_connect("localhost", "root","", "artistas");
 mysqli_set_charset($conexion,"utf8");

class UserRegistration
{
    private $username;
    private $email;
    private $password;

  function construct($usuarios);
 }
  {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    function validate(){
    {
        $errors = array();

        if (empty($this->username)) {
            $errors[] = "El nombre de usuario es obligatorio.";
        }

        if (empty($this->email)) {
            $errors[] = "El correo electrónico es obligatorio.";
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "El correo electrónico no es válido.";
        }

        if (empty($this->password)) {
            $errors[] = "La contraseña es obligatoria.";
        }

        return $errors;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $userRegistration = new UserRegistration($username, $email, $password);
    $errors = $userRegistration->validate();

    if (empty($errors)) {
        // Aquí puedes realizar acciones adicionales, como guardar la información en una base de datos.
        echo "¡Registro exitoso!";
    } else {
        foreach ($errors as $error) {
            echo "$error<br>";
        }
    }
}
?>
