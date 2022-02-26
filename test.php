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
<!--<form action="test.php" method="post">-->
<!--    <h2>In ra thứ trong tuần</h2>-->
<!--    <input type="number" name="day" size="30"  placeholder="Nhập ngày" />-->
<!--    <button type="submit">In</button>-->
<!---->
<!--</form>-->

<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//}
for ($i = 0; $i < 10; $i ++) {
    if($i > 3 ) {
        break;
    }
    echo "$i <br>";
}
?>



</body>
</html>