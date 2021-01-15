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
