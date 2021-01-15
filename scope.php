<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$x = 'outside'; // global

function convert()
{
    global $x; // changes $x declared outside function
    $x = 'inside'; // local
}

echo $x;
echo '<br>';
convert();

echo $x;

?>
</body>
</html>
