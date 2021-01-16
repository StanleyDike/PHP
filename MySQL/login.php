<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginApp');

    if ($connection) {

        echo 'We are connected';

    } else {

        die('Database connection failed');
    }

    // if ($username && $password) {

    //     echo 'Welcome!' . '<br>';
    //     echo $username . ' ' . $password;
    // } else {

    //     echo 'Enter username and password';
    // }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class='container'>
    <div class='col-sm-6'>
        <form action='login.php' method='post'>

            <div class='form-group'>
                <label for='username'>Username</label>
                <input type='text' name='username' class='form-control'>
            </div>

            <div class='form-group'>
                <label for='password'>Password</label>
                <input type='text' name='password' class='form-control'>
            </div><br>

            <input class='btn btn-primary' type='submit' name='submit' value='Submit'>

        </form>
    </div>
</div>

</body>
</html>
