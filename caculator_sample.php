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
<form method="post">
    <h1>Ứng dụng máy tính</h1>
    <br/>

    Số đầu tiên:
    <input type="text" name="firstNumber"><br/>
    Operator:
    <select name="operator">
        <option value="Addition" >Cộng</option>
        <option value="Subtraction" >Trừ</option>
        <option value="Multiplication" >Nhân</option>
        <option value="Division" >Chia</option>
    </select><br/>
    Số thứ hai:
    <input type="text" name="secondNumber"><br/>
    <button type="submit">Tính</button>

</form>
<h2>Kết quả:</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstNumber = $_POST['firstNumber'];
    $operator = $_POST['operator'];
    $secondNumber = $_POST['secondNumber'];

    if ($operator === "Addition") {
        $total = $firstNumber + $secondNumber;
        echo $total;
    } else if($operator === "Subtraction") {
        $total = $firstNumber - $secondNumber;
        echo $total;
    } else if($operator === "Multiplication") {
        $total = $firstNumber * $secondNumber;
        echo $total;
    } else if($operator === "Division") {
        if ($secondNumber === "0") {
            echo "Mẫu số không thể bằng 0";
        } else {
            $total = $firstNumber / $secondNumber;
            echo $total;
        }
    }
}
?>
</body>
</html>