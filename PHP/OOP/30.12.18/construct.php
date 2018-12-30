<?php
/*
Задача 1:
Сделайте класс Employee, в котором будут следующие публичные свойства - name (имя), age (возраст), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта.

Задача 2:
Создайте объект класса Employee с именем 'Вася', возрастом 25, зарплатой 1000.

Задача 3:
Создайте объект класса Employee с именем 'Петя', возрастом 30, зарплатой 2000.

Задача 4:
Выведите на экран сумму зарплат Васи и Пети.
*/

class Employee {
public $age;
public $name;
public $salary;

public function __construct($age, $name, $salary){
	$this -> age = $age;
	$this -> name = $name;
	$this -> salary = $salary;
}

}

$user1 = new Employee(25, 'Василий', 1000);
$user2 = new Employee(30, 'Петр', 2000);
echo $user1 -> salary + $user2 -> salary;



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