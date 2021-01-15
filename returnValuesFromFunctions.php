<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

function addNumbers($n1, $n2)
{
    $sum = $n1 + $n2;

    return $sum;
}

$result = addNumbers(50, 50);

$result = addNumbers(150, $result);

echo $result;

?>
</body>
</html>
