<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$a = 5;
$b = 10;

function testFun(&$a, &$b ) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}
testFun($a, $b );

echo $a . ' -- ' . $b;
?>
</body>
</html>
