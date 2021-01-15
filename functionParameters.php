<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

function greeting($message)
{
    echo $message . '<br>';
}

greeting('Wassup my guy');

function addNumbers($number1, $number2)
{
    $sum = $number1 + $number2;

    echo $sum . '<br>';
}

addNumbers(9, 9);

?>


</body>
</html>
