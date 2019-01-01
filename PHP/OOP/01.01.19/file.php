<?php
/*
Задача 1:
Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия),
patronymic (отчество) и salary (зарплата).
Пусть этот класс хранится в отдельном файле.

Задача 2:
Подключите к файлу index.php класс Employee, создайте два объекта этого класса с произвольными данными,
выведите на экран сумму их зарплат.
*/

class Employee {
private $name;
private $surname;
private $patronymic;
private $salary;

public function __construct($name, $surname, $patronymic, $salary)
{
$this -> name = $name;	
$this -> surname = $surname;	
$this -> patronymic = $patronymic;
$this -> salary = $salary;	
}

public function getName()
{
	return $this -> name;
}

public function getSalary()
{
	return $this -> salary . ' $';
}

public function setSalary($salary)
{
	$this -> salary = $salary;
}

}

$user1 = new Employee('Николай', 'Федотов', 'Александрович', 10000);
$user2 = new Employee('Федор', 'Федотов', 'Александрович', 20000);

echo $user1 -> getSalary() + $user2 -> getSalary(). '<br>';


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