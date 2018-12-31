<?php
/*
Задача 1:
Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия) и salary (зарплата).

Задача 2:
Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.
*/

class Employee {
private $name;
private $salary;

public function __construct($name, $salary)
{
$this -> name = $name;	
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

$user1 = new Employee('Николай', 1000);

//echo $user1 -> setSalary(2000) . '<br>';
echo $user1 -> getName() . '<br>';
echo $user1 -> getSalary() . '<br>';

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