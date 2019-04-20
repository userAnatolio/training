
<?php

/*
Задача 1:
Самостоятельно, не подсматривая в мой код, реализуйте такой же абстрактный класс User, а также классы Employee и Student, наследующие от него.
Задача 2:
Добавьте в ваш класс User такой же абстрактный метод increaseRevenue. Напишите реализацию этого метода в классах Employee и Student.

Задача 3:
Добавьте также в ваш класс User абстрактный метод decreaseRevenue (уменьшить зарплату). Напишите реализацию этого метода в классах
Employee и Student.
 
Задача 4:
Сделайте аналогичный класс Rectangle (прямоугольник), у которого будет два приватных свойства: $a для ширины и $b для длины.
Данный класс также должен наследовать от класса Figure и реализовывать его методы.

Задача 5:
Добавьте в класс Figure метод getSquarePerimeterSum, который будет находить сумму площади и периметра.
*/

require_once('Figure.php');
require_once('Rectangle.php');

$rectangle = new Rectangle(2, 4);
	echo $rectangle -> getSquare();
	echo $rectangle -> getPerimeter();
	echo $rectangle -> getSquarePerimeterSum();

?>