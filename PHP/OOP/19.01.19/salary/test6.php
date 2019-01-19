<?php
/*
Задача 1:
Сделайте класс Employee с публичными свойствами name (имя) и salary (зарплата).

Задача 2:
Сделайте класс Student с публичными свойствами name (имя) и scholarship (стипендия).

Задача 3:
Создайте по 3 объекта каждого класса и в произвольном порядке запишите их в массив $arr.

Задача 4:
Переберите циклом массив $arr и выведите на экран столбец имен всех работников.

Задача 5:
Аналогичным образом выведите на экран столбец имен всех студентов.

Задача 6:
Переберите циклом массив $arr и с его помощью найдите сумму зарплат работников и сумму стипендий студентов. 
После цикла выведите эти два числа на экран.
*/

require_once 'Employee.php';
require_once 'Student.php';

$Employee1 = new Employee('Коля', 1000);
$Employee2 = new Employee('Настя', 1000);
$Employee3 = new Employee('Вася', 1000);
$Student1 = new Student('Федя', 500);
$Student2 = new Student('Петя', 600);
$Student3 = new Student('Юля', 700);

$arr = [$Employee1, $Employee2, $Employee3, $Student1, $Student2, $Student3];

foreach($arr as $elem) {
	if($elem instanceof Employee) {
	echo $elem -> name . '<br>';
	}
	$sum1 += $elem -> salary;
	$sum2 += $elem -> scholarship;
}
echo $sum1 + $sum2;

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