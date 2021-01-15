<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$numbers = [222, 111, 0, 444, 333, 555];

echo max($numbers);

echo '<br>';

echo min($numbers);

echo '<br>';

sort($numbers);

print_r($numbers);
?>
</body>
</html>
