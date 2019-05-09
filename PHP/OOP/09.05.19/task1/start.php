<?php
// Задача 1:
// Сделайте интерфейс Figure3d (трехмерная фигура), который будет иметь метод getVolume (получить объем) и метод getSurfaceSquare (получить площадь поверхности).

// Задача 2:
// Сделайте класс Cube (куб), который будет реализовывать интерфейс Figure3d.

// Задача 3:
// Создайте несколько объектов класса Quadrate, несколько объектов класса Rectangle и несколько объектов класса Cube. Запишите их в массив $arr в случайном порядке.

// Задача 4:
// Переберите циклом массив $arr и выведите на экран только площади объектов реализующих интерфейс Figure.

// Задача 5:
// Переберите циклом массив $arr и выведите для плоских фигур их площади, а для объемных - площади их поверхности.

require_once 'Figure3d.php';
require_once 'Cube.php';
require_once 'Rectangle.php';

$cube1 = new Cube(2,2);
$cube2 = new Cube(3,3);

$rectangle1 = new Rectangle(2,2,3);
$rectangle2 = new Rectangle(3,4,5);

$arr = array($cube1, $cube2, $rectangle1, $rectangle2);

foreach($arr as $elem)
{
	echo $elem -> getSurfaceSquare();
	echo '<br>';
	echo $elem -> getVolume();
	echo '<br>';
	echo $elem instanceof Figure3d;
	echo '<br>';
}