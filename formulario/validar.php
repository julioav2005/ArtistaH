<?php
 $usuario=$_POST['Usuarios'];
 $contraseña=$_POST['contraseña'];
 session_start();
 $_SESSION['usuario']=$usuario;

 //conectar a la base de datos
 
 include ('conexion.php');
 $conn = mysqli_connect($sname, $uname,$password, $db_name);

 $consulta="SELECT * FROM usuarios WHERE nomUsuario='$usuario' and PassUsuario='$contraseña'";
 $resultado=mysqli_query($conn,$consulta);
 $tabla=mysqli_fetch_array($resultado);
 

 
 	if ($usuario=$tabla['nomUsuario']) {
        echo "<script>alert('BIENVENIDO ADMINISTRADOR'); </script>";
        echo "<script>window.location.href='../php/administrador.php'; </script>";
    }else{
        echo "<script>alert('USTED NO ES ADMINISTRADOR'); </script>";
        echo "<script>window.location.href='admi.php'; </script>";
        }
    
 	
 
 
 mysqli_free_result($resultado);
 mysqli_close($conexion);

?>
