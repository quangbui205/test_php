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
class Cat {
    //thuộc tính
    private $name;
    public $color;
    public $height;
    public $type;

    public function __construct($name, $color, $height, $type)
    {
        $this->name   = $name;
        $this->color  = $color;
        $this->height = $height;
        $this->type   = $type;
    }

    //method phương thức
    public function getName() {
        echo $this->name . '<br>';
    }

    public function setName($nameInput) {
        $this->name = $nameInput;
    }
}

$cat = new Cat('pop', 'white', '4kg', 'tuxedo');

echo $cat->getName() . "<br>";

$cat->setName('Pi beo');

echo $cat->getName() . "<br>";

echo $cat->color . "<br>";
echo $cat->height . "<br>";
$cat->getName();

$cat2 = new Cat('Bơ', 'white2', '3kg', 'vietname');

echo $cat2->getName() . "<br>";
echo $cat2->color . "<br>";
echo $cat2->height . "<br>";


?>
</body>
</html>