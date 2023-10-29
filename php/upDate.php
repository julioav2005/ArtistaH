<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <?php
    require('conection.php');
    if (isset($_POST['signUP_button'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confPassword=$_POST['confiPassword'];
        if (!empty($_POST['name'])&& !empty($_POST['lastName'])&& !empty($_POST['email'])&& !empty($_POST['password'])) {
         if ($password==$confPassword) {
            $p=crud::conect()->prepare('UPDATE register SET name=:n,lastName=:l,email=:e,pass=:p');
            $p->bindValue(':n', $name);
            $p->bindValue(':e', $email);
            $p->bindValue(':p', $password);
            $p->execute();
            echo 'Updated!';
         }else{
            echo 'Password does not match!';
         }
        }
    }

    ?>
    <div class="form">
        <div class="title">
            <p>UpDate</p>
        </div>
        <form action="" method="post">
            
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="confiPassword" placeholder="Confirm password">
            <input type="submit" value="actualizar" name="signUP_button">

        </form>
    </div>
    <script src="js/login.js"></script>
</body>
</html>