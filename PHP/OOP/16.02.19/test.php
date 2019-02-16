<?php
/*
Задача 1:
Сделайте класс Post (должность), в котором будут следующие свойства, доступные только для чтения: name (название должности) и salary (зарплата на этой должности).

Задача 2:
Создайте несколько объектов класса Post: программист, менеджер водитель.

Задача 3:
Сделайте класс Employee (работник), в котором будут следующие свойства: name (имя) и surname (фамилия). Пусть начальные значения этих свойств будут передаваться параметром в конструктор.

Задача 4:
Сделайте геттеры и сеттеры для свойств name и surname.

Задача 5:
Пусть теперь третьим параметром конструктора будет передаваться должность работника, представляющая собой объект класса Post. Укажите тип этого параметра в явном виде.

Задача 6:
Сделайте так, чтобы должность работника (то есть переданный объект с должностью) записывалась в свойство post.

Задача 7:
Создайте объект класса Employee с должностью программист. При его создании используйте один из объектов класса Post, созданный нами ранее.

Задача 8:
Выведите на экран имя, фамилию, должность и зарплату созданного работника.

Задача 9:
Реализуйте в классе Employee метод changePost, который будет изменять должность работника на другую. Метод должен принимать параметром объект класса Post. Укажите в методе тип принимаемого параметра в явном виде.
*/
?>


<?php

require_once 'Post.php';
require_once 'TestClass.php';
require_once 'Employee.php';

$introvert = new TestClass('интроверт', 30);

$programmer = new Post('программист', 60000);
$manager = new Post('менеджер', 60000);
$driver = new Post('водитель', 60000);

$user1 = new Employee('Name', 'Surname', $programmer);
//$user2 = new Employee('Name', 'Surname', $introvert); //error
$user1 -> setName('Николай');
$user1 -> setSurname('Батрудинов');

echo $user1 -> getName() . " " . $user1 -> getSurname() . "<br>";
echo $user1 -> post -> getName() . "<br>";
echo $user1 -> post -> getSalary();

echo "<br>";
$user1 -> changePost($manager);
//$user1 -> changePost($introvert); //error

echo $user1 -> getName() . " " . $user1 -> getSurname() . "<br>";
echo $user1 -> post -> getName() . "<br>";
echo $user1 -> post -> getSalary();


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
td {
    border: 1px solid;
    width: 100px;
    height: 30px;
}
.red {
	background: black;
	text-align: center;
}
</style>
</head>
<body>

</body>
</html>