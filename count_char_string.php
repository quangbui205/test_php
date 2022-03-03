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
<h1>Đếm số ký tự trong 1 chuỗi</h1>
<form method="post" action="count_char_string.php">
    <input type="text" name="inputStr" placeholder="Nhập 1 chuỗi ký tự" size="30">
    <button type="submit">Đếm</button>
</form>
<br>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputStr = $_POST['inputStr'];

    if($inputStr == '') {
        echo "Bạn chưa nhập chuỗi";
        return;
    }

    echo "$inputStr<br>";

//    $strChar = $inputStr[0];
//    $arrCountChar = [];
//    for ($i = 0; $i < strlen($inputStr); $i++) {
//
//        $count = 0;
//        for ($j = 0; $j < strlen($strChar); $j++) {
//            if($inputStr[$i] != $strChar[$j]) $count++;
//        }
//
//        if($count == strlen($strChar)) $strChar .= $inputStr[$i];;
//
//    }
//
//    for($i = 0; $i < strlen($strChar); $i++) {
//        $count = 0;
//
//        for($j = 0; $j < strlen($inputStr); $j++) {
//            if($strChar[$i] == $inputStr[$j]) $count++;
//        }
//
//        $arrCountChar[] = $count;
//    }
//
//    for($i = 0; $i < strlen($strChar); $i++) {
//        echo $strChar[$i] . $arrCountChar[$i];
//    }

    $index = 0;
    $countChar = $inputStr[0];
    while ($index < strlen($inputStr) - 1) {

        $indexChar = strlen($countChar) - 1;

        $count = 0;
        for ($j = $index; $j < strlen($inputStr); $j++) {

            if($countChar[$indexChar] === $inputStr[$j]) $count++;

            if($countChar[$indexChar] != $inputStr[$j] || $j == strlen($inputStr) - 1) {

                if($j == strlen($inputStr) - 1) {
                    $countChar = $countChar . $count;
                } else {
                    $countChar = $countChar . $count . $inputStr[$j];
                }

                $index += $count;
                break;
            }
        }
    }

    echo $countChar;
}
?>
</body>
</html>