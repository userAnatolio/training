<?php
/*
Задача 1:
Сделайте класс City (город), в котором будут следующие свойства - name (название),
foundation (дата основания), population (население). Создайте объект этого класса.

Задача 2:
Пусть дана переменная $props, в которой хранится массив названий свойств класса City.
Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств.
*/

require_once 'City.php';

$city1 = new City('Толяновск', '05.12.87.', 10000);

$props = ['name', 'foundation', 'population'];

foreach($props as $elem){
	echo $city1 -> $elem . '<br>';
}

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