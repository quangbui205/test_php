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
<form action="test.php" method="post">
    <h2>In ra thứ trong tuần</h2>
    <input type="number" name="day" size="30"  placeholder="Nhập ngày" />
    <button type="submit">In</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST["day"];

    switch ($day) {
        case 1:
            echo "Chủ Nhật";
            break;
        case 2:
            echo "Thứ hai";
            break;
        case 3:
            echo  "Thứ ba";
            break;
        case 4:
            echo "Thứ tư";
            break;
        case 5:
            echo "Thứ năm";
            break;
        case 6:
            echo "Thứ sáu";
            break;
        case 7:
            echo "Thứ bảy";
            break;
        default:
            echo "không có ngày này";
            break;
    }
}
?>



</body>
</html>