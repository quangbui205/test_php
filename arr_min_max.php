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
<form action="arr_min_max.php" method="post">
    <input type="number" name="arrLen" size="30"  placeholder="Nhập độ dài mảng" />
    <input type="number" name="minNumber" size="30"  placeholder="Nhập giá trị nhỏ nhất" />
    <input type="number" name="maxNumber" size="30"  placeholder="Nhập giá trị lớn nhất" />
    <button type="submit">Tạo mảng</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrLen = $_POST["arrLen"];
    $minNum = $_POST["minNumber"];
    $maxNum = $_POST["maxNumber"];
    $arr = [];

    for ($i = 0; $i < $arrLen; $i++) {
        $arr[] = rand($minNum, $maxNum);
    }

    $min = $arr[0];
    $max = $arr[0];

    for ($i = 0; $i < $arrLen; $i++) {

        if($min > $arr[$i]) $min = $arr[$i];

        if($max < $arr[$i]) $max = $arr[$i];
    }

    echo "Mảng tạo ra: " . implode(' - ', $arr) . "<br>";
    echo "Giá trị nhỏ nhất trong mảng là " . $min . "<br>";
    echo "Giá trị lớn nhất trong mảng là " . $max ;
}
?>
</body>
</html>