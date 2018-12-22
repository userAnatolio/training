<?php
/*
Задача 1:
Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
Задача 2:
Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'Иван', возраст 25, зарплата 1000.
Задача 3:
Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
Задача 4:
Выведите на экран сумму зарплат Ивана и Васи.
Задача 5:
Выведите на экран сумму возрастов Ивана и Васи.
*/

class Employee {
	public $name;
	public $age;
	public $salary;
}

$worker1 = new Employee();
$worker2 = new Employee();

$worker1 -> name = 'Ivan';
$worker1 -> age = 25;
$worker1 -> salary = 1000;

$worker2 -> name = 'Vasy';
$worker2 -> age = 26;
$worker2 -> salary = 2000;

echo $worker1 -> salary + $worker2 -> salary . '<br>';
echo $worker1 -> age + $worker2 -> age;
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