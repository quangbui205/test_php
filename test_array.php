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
$spider = [
    ["tom", 96, 3],
    ["tobey", 75, 3],
    ["andrew", 83, 2],
];

for ($i = 0; $i < count($spider); $i++) {
    echo "Dòng $i:";

    for ($j = 0; $j < count($spider[$i]); $j++) {
        echo " Cột $j:" .  $spider[$i][$j] . " ";
    }

    echo "<br>";
}
?>

<?php
//$arrayIndex = array('a' => 'hello', 'b' => 'world', 'c' => 'dev', 'd' => 'php');
//foreach($arrayIndex as $key => $val) {
//    echo $key . ' - ' . $val . '<br>';
//}
//?>

</body>
</html>
