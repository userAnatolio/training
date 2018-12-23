<?php
/*
Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
Сделайте в классе Employee метод getName, который будет возвращать имя работника.
Задача 1:
Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
Задача 2:
Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
Задача 3:
Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.
Задача 4:
Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.
*/

class Employee {
	public $name;
	public $age;
	public $salary;
	
	public function getName() {
		return $this -> name;
	}
	
	public function getAge() {
		return $this -> age;
		
	}
	
	public function getSalary() {
		return $this -> salary;
	}
	
	public function checkAge() {
		
		if($this -> age >= 18) return "true";
		else return "false";
	}
}

$work1 = new Employee();
$work1 -> name = 'Николай';
$work1 -> age = 29;
$work1 -> salary = 30000;
echo $work1 -> getName() . '<br>';
echo "Возраст " . $work1 -> getAge() . '<br>';
echo "Зарплата " . $work1 -> getSalary() . '<br>';
echo "Совершенолетие " . $work1 -> checkAge();


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