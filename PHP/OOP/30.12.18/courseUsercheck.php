<?php
/*
Задача 1:
Не подсматривая в мой код внесите такие же правки в класс User.

Задача 2:
Попробуйте вызвать метод isAgeCorrect снаружи класса. Убедитесь, что это будет вызывать ошибку.

Задача 3:
Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).

Задача 4:
В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.

Задача 5:
Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.

Задача 6:
Вынесите проверку курса в отдельный private метод isCourseCorrect.
*/

class User {
public $age;
public $name;
public $course;

public function transferToNextCourse(){
	if($this -> isCourseCorrect())
	$this -> course += 1;
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

//если возраст в диапазоне, вернем true
private function checkAge($age) {
	if($age >= 18 and $age <= 60) {
		return true;
	}
}

private function isCourseCorrect(){
	return $this -> course < 5;
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
$user1 -> course = 3;
$user1 -> transferToNextCourse();
echo '<br>';
echo $user1 -> course;
echo '<br>';
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