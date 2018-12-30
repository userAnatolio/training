<?php
/*
Задача 1:
Не подсматривая в мой код создайте такой же класс User с такими же методами.

Задача 2:
Создайте объект этого класса User, проверьте работу методов setAge и addAge.

Задача 3:
Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет.
*/

class User {
public $age;
//если возраст в диапазоне, вернем true
public function checkAge($age) {
	if($age >= 18 and $age <= 60) {
		return true;
	}
}

//изменим наш возраст, если возраст прошел проверку
public function changeAge($age) {
	if($this -> checkAge($age)){
		$this -> age = $age;
	}
}

//увеличим возраст, если возраст прошел проверку
public function addAge($year) {
	if($this -> checkAge($this -> age + $year)) {
		$this -> age += $year;
	}
}

public function lowerAge($year) {
	if($this -> checkAge($this -> age - $year)) {
		$this -> age -= $year;
	}
}
	
}

$user1 = new User();

$user1 -> changeAge(33);
echo $user1 -> age;
echo '<br>';
$user1 ->addAge(2);
echo $user1 -> age;
echo '<br>';
$user1 ->lowerAge(2);
echo $user1 -> age;

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