<?php
/*
Задача 12:
Сделайте класс Rectangle (прямоугольник), в котором в свойствах будут записаны ширина и высота.

Задача 13:
В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.

Задача 14:
В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.
*/

class Rectangle {
public $height = 100;
public $width = 200;
public function getSquare() {
	return $this -> height * $this -> width;
}

public function getPerimeter() {
	$h = $this -> height;
	$w = $this -> width;
	return ($h * 2) + ($w * 2);
}

}

$result = new Rectangle();

echo 'Площадь ' . $result -> getSquare();
echo '<br>';
echo 'Периметр ' .  $result -> getPerimeter();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Шаблон</title>
<style>
body {
background: #5d5d5d;
color: white;
}
</style>
</head>
<body>
</body>
</html>