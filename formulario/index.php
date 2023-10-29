<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php"method="post"> 
        <h2>formulario</h2>
    <?php if(isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET ['error'];?></p>
   <?php }  ?>
        <label>Usuarios</label>
        <input type="text"name="uname" placeholder="user name"><br>

        <label>correo</label>
        <input type="email" name="email" placeholder="email"><br>

        <label>contraseña</label>
        <input type="password" name="password" placeholder="password"><br>
        
        <button type="submit">registar</button>
     </form> 
    
</body>
</html>