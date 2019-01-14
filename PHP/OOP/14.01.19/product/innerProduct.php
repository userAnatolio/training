<?php
/*
Задача 1:
Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, если они имеют одинаковые 
свойства и значения являются экземплярами одного и того же класса, и false, если это не так.

Задача 2:
Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, если переданные переменные 
ссылаются на один и тот же объект, и false, если на разные.

Задача 3:
Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.

Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.

Функция должна возвращать 0, если объекты разные, но одного и того же класса и с теми же свойствами и их значениями.

Функция должна возвращать -1 в противном случае.

Задача 4:
Скопируйте мой код класса Employee, затем самостоятельно реализуйте описанный класс EmployeesCollection, проверьте его работу.

Задача 5:
Упростите ваш класс EmployeesCollection с использованием функции in_array, проверьте его работу.
*/

require_once 'Product.php';
require_once 'Cart.php';

$cart = new Cart();

$cart -> add(new Product('картошечка', 10, 300));
$cart -> add(new Product('лучок', 5, 100));
$cart -> add(new Product('cеледочка', 150, 50));
$cart -> add(new Product('cеледочка', 150, 50));

echo $cart -> getTotalCost() . '<br>';
echo $cart -> getTotalQuantity() . '<br>';
echo $cart -> getAvgPrice() . '<br>';
echo '<br>';
echo '<br>';

var_dump($cart -> products);



// function compare($obj1, $obj2)
// {	
	// $status = 0;
	// if($obj1 == $obj2) echo 'свойства одинаковые' . '<br>'; $status = 1;
	// if($obj1 != $obj2) echo 'свойства разные' . '<br>'; $status = 2;

	// if($obj1 === $obj2) echo 'типы одинаковые' . '<br>';$status = 3;
	// if($obj1 !== $obj2) echo 'типы разные' . '<br>';$status = 4;
	
	// if($obj1 !== $obj2 && $obj1 != $obj2) return 'объекты разные'; $status = 5;
// }


// echo compare($cart1, $product) . '<br>';


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
div {
color: yellow;
background: black;
margin-right: 30px;
padding: 5px;
}
</style>
</head>
<body>
</body>
</html>