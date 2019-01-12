<?php
/*
Задача 1:
Сделайте класс Product (продукт), в котором будут следующие свойства: name (название продукта), price (цена).

Задача 2:
Создайте объект класса Product, запишите его в переменную $product1.

Задача 3:
Присвойте значение переменной $product1 в переменную $product2. Проверьте то, что обе переменные ссылаются 
на один и тот же объект.
*/

class Product
	{
		public $name = 'Настя';
		public $price = 2000;
	}

	$product1 = new Product();
	$product2 = $product1;
	
	echo $product1->name . '<br>'; 
	echo $product2->price . '<br>'; 

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