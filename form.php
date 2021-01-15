<?php

if (isset($_POST['submit'])) {

    $name = ['Stanley', 'Kevin', 'LeBron', 'Kyrie', 'James'];

    $minimum = 5;
    $maximum = 15;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) < $minimum) {
        echo '<h2>Username has to be longer than 5 characters</h2>';
    }

    if (strlen($username) > $maximum) {
        echo '<h2>Username cant be longer than 15 characters</h2>';
    }

    if (!in_array($username, $name)) {
        echo 'Sorry you not allowed to login';
    } else {
        echo 'Welcome Family';
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action='form.php' method='post'>
    <input type='text' placeholder='Enter Username' name='username'><br>
    <input type='password' placeholder='Enter Password' name='password'><br>
    <input type='submit' name='submit'>
</form>

</body>
</html>
