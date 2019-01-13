<?php
/*
Задача 1:
Сделайте класс Product (товар), в котором будут приватные свойства name (название товара), price (цена за штуку) и quantity. 
Пусть все эти свойства будут доступны только для чтения.

Задача 2:
Добавьте в класс Product метод getCost, который будет находить полную стоимость продукта (сумма умножить на количество).

Задача 3:
Сделайте класс Cart (корзина). Данный класс будет хранить список продуктов (объектов класса Product) в виде массива. 
Пусть продукты хранятся в свойстве products.

Задача 4:
Реализуйте в классе Cart метод add для добавления продуктов.

Задача 5:
Реализуйте в классе Cart метод remove для удаления продуктов. Метод должен принимать параметром название удаляемого продукта.

Задача 6:
Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов.

Задача 7:
Реализуйте в классе Cart метод getTotalQuantity, который будет находить суммарное количество продуктов 
(то есть сумму свойств quantity всех продуктов).

Задача 8:
Реализуйте в классе Cart метод getAvgPrice, который будет находить среднюю стоимость продуктов 
(суммарная стоимость делить на количество всех продуктов).
*/

require_once 'Product.php';
require_once 'Cart.php';

$cart = new Cart();

$cart -> add(new Product('картошечка', 10, 300));
$cart -> add(new Product('лучок', 5, 100));
$cart -> add(new Product('cеледочка', 150, 50));

echo $cart -> getTotalCost() . '<br>';
echo $cart -> getTotalQuantity() . '<br>';
echo $cart -> getAvgPrice() . '<br>';
echo '<br>';
echo '<br>';

$cart -> remove('лучок');

var_dump($cart -> products);

echo $cart -> getTotalCost() . '<br>';
echo $cart -> getTotalQuantity() . '<br>';
echo $cart -> getAvgPrice() . '<br>';

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