<?php
/*
Задача 1:
Сделайте класс Employee, в котором будут следующие private свойства: name (имя), age (возраст) и salary (зарплата).

Задача 2:
Сделайте геттеры и сеттеры для всех свойств класса Employee.

Задача 3:
Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).

Задача 4:
Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара.
*/

class Employee {
private $name;
private $age;
private $salary;

public function setAge($age)
{
	if($this -> checkAge($age))
		$this -> age = $age;
}

public function getAge()
{
	return $this -> age . ' $';
}

private function checkAge($age)
{
	return $age <= 60 and $age >= 18;
}

}

$user1 = new Employee();

echo $user1 -> setAge(45) . '<br>';
echo $user1 -> getAge() . '<br>';

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