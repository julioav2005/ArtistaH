<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../css/tableuser.css">
</head>
<body>
    <style>
        *{
            color: #cbc5e8;
        }
        body{
            background-image: url(../images/users.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        table,tr,td,th {
            border: 1px solid purple;
            border-collapse: collapse;
}
    </style>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            
    <?php
    require('conection.php');

        $p=crud::Selectdata();
        if (isset($_GET['id'])) {
            $id=$_GET['id'];
            $e=crud::delete($id);
        }
        if (count($p)>0) {
            for ($i=0; $i < count( $p); $i++) { 
                echo '<tr>';
                foreach ( $p[$i] as $key => $value) {
                    if ($key!='id') {
                        echo '<td>' .$value.'</td>';
                    }
                }
                ?>

                <td><a href="users.php?id=<?php echo $p[$i]['id'] ?>">Delete</a></td>
                <td><a href="upDate.php">Edit</a></td>

                <?php
                echo '</tr>';
            }
        }

    ?>
        </tbody>
    </table>
</body>
</html>