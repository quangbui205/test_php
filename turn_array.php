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
<form method="post" action="turn_array.php">
    <input type="number" name="turnNum" size="30">
    <button type="submit">Xoay</button>
</form>
<br>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $turnNum = $_POST['turnNum'];
    $arr = [
        [2, 4, 3],
        [5, 3, 7],
        [5, 1, 2],
    ];

    $arrIndex = [$arr[0][0], $arr[0][1], $arr[0][2], $arr[1][2], $arr[2][2], $arr[2][1], $arr[2][0], $arr[1][0], $arr[1][1]];

    $arrTurn = [];


    if($turnNum % 4 == 0) {
        echo implode(' ', $arr[0]) . '<br>';
        echo implode(' ', $arr[1]) . '<br>';
        echo implode(' ', $arr[2]) . '<br>';
        return;
    }

    $turnNum = $turnNum % 4;

    for ($i = 0; $i < 8; $i++) {
        $index = $i + $turnNum * 2;
        if($index >= 8) $index = $index - 8;

        $arrTurn[$index] = $arrIndex[$i];
    }

    $arrTurn[8] = $arrIndex[8];

    $newArr = [
            [$arrTurn[0], $arrTurn[1], $arrTurn[2]],
            [$arrTurn[7], $arrTurn[8], $arrTurn[3]],
            [$arrTurn[6], $arrTurn[5], $arrTurn[4]],
    ];

    echo implode(' ', $newArr[0]) . '<br>';
    echo implode(' ', $newArr[1]) . '<br>';
    echo implode(' ', $newArr[2]) . '<br>';

}



?>
</body>
</html>
