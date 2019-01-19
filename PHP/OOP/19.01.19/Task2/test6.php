<?php
/*
Задача 7:
Сделайте класс User с публичным свойствами name (имя) и surname (фамилия).

Задача 8:
Сделайте класс Employee, который будет наследовать от класса User и добавлять salary (зарплата).

Задача 9:
Сделайте класс City с публичными свойствами name (название города) и population (количество населения).

Задача 10:
Создайте 3 объекта класса User, 3 объекта класса Employee, 3 объекта класса City, и в произвольном порядке запишите их в массив $arr.

Задача 11:
Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые принадлежат классу User или 
потомку этого класса.

Задача 12:
Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые НЕ принадлежат классу User или 
потомку этого класса.

Задача 13:
Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые принадлежат именно классу User, 
то есть не классу City и не классу Employee.
*/

require_once 'User.php';
require_once 'Employee.php';
require_once 'City.php';

$user1 = new User('Мария', 'Шашкова');
$user2 = new User('Олег', 'Кашев');
$user3 = new User('Армен', 'Баширов');
$employee1 = new Employee('Николай', 'Селиванов');
$employee1 -> salary = 1000;
$employee2 = new Employee('Алексей', 'Попов');
$employee2 -> salary = 2000;
$employee3 = new Employee('Борис', 'Грызлов');
$employee3 -> salary = 3000;
$city1 = new City('Москва', 13000000);
$city2 = new City('Таганрог', 350000);
$city3 = new City('Воронеж', 1000000);

$arr = [$user1, $user2, $user3, $employee1, $employee2, $employee3, $city1, $city2, $city3];

foreach($arr as $elem) {
	if($elem instanceof User) {
	echo $elem -> name . '<br>' ;
	}
}
	
	echo '<br>';
	echo '<br>';
	echo '<br>';
	
	foreach($arr as $elem) {
	if(! $elem instanceof User) {
	echo $elem -> name . '<br>' ;
	}
	}
	
	echo '<br>';
	echo '<br>';
	echo '<br>';
	
	foreach($arr as $elem) {
	if($elem instanceof User && ! $elem instanceof Employee && ! $elem instanceof City) {
	echo $elem -> name . '<br>' ;
	}
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