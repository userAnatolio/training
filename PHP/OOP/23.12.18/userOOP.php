<?php
/*
Задача 7:
Сделайте класс User, в котором будут следующие свойства - name (имя), age (возраст).

Задача 8:
Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.

Задача 9:
Создайте объект класса User с именем 'Коля' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.

Задача 10:
Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.

Задача 11:
Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), salary (зарплата). Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
*/

class User {
	public $name;
	public $age = 25;
	public $salary;
	
	public function setName($userName) {
		$this -> name = $userName;
	}
	public function setAge($userAge) {
		if($userAge >= 18) {
		$this -> age = $userAge;
		}
	}
	public function userSalary($userSalary) {
		$this -> salary = $userSalary;
	}
	
	public function doubleSalary() {
	 $this -> salary *= 2;
	}
	
	public function getName() {
		return $this -> name;
	}
	
	public function getAge() {
		return $this -> age;
		
	}
	
	public function getSalary() {
		return $this -> salary;
	}

}

$work1 = new User();
$work1 -> name = 'Николай';
$work1 -> setAge(18);
$work1 -> salary = 30000;
$work1 -> doubleSalary();
echo $work1 -> getName() . '<br>';
echo "Возраст " . $work1 -> getAge() . '<br>';
echo "Зарплата " . $work1 -> getSalary() . '<br>';

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