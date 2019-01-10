<?php
/*
Задача 1:
Не подсматривая в мой код реализуйте такие же классы User, Employee.

Задача 2:
Не подсматривая в мой код реализуйте такой же класс Student, наследующий от класса User.

Задача 3:

Сделайте класс Programmer, который будет наследовать от класса Employee.
Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, которыми владеет программист.
Сделайте также геттер и сеттер для этого свойства.

Задача 4:
Сделайте класс Driver (водитель), который будет наследовать от класса Employee. 
Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), 
а также геттеры и сеттеры к ним.
*/

require_once 'User.php'; //подключил класс User
require_once 'Employee.php'; // подключил класс Employee
require_once 'Student.php'; // подключил класс Student
require_once 'Programmer.php'; // подключил класс Programmer
require_once 'Divider.php'; // подключил класс Divider

$user1 = new Employee(); // создал объект
$user2 = new Student(); // создал объект
$user3 = new Programmer(); // создал объект
$user4 = new Divider(); // создал объект

// присвоил
$user1 -> setName('Jon');
$user1 -> setAge(23);
$user1 -> setSalary(23000);

// вывод
echo $user1 -> getName() . '<br>';
echo $user1 -> getAge() . '<br>';
echo $user1 -> getSalary() . '<br>';
echo '<br>';
$user2 -> setName('Ivan');
$user2 -> setAge(25);
$user2 -> setCourse(1);

echo $user2 -> getName() . '<br>';
echo $user2 -> getAge() . '<br>';
echo $user2 -> getCourse() . '<br>';
echo '<br>';
$user3 -> setName('Nikolay');
$user3 -> setAge(28);
$user3 -> setSalary(30000);
$user3 -> setLangs('PHP');
$user3 -> setLangs('JS');

// вывод
echo $user3 -> getName() . '<br>';
echo $user3 -> getAge() . '<br>';
echo $user3 -> getSalary() . '<br>';
echo $user3 -> getLangs() . '<br>';
echo '<br>';
$user4 -> setName('Fedor');
$user4 -> setAge(35);
$user4 -> setSalary(40000);
$user4 -> setExperience(10);
$user4 -> setCategory('ABCE');

// вывод
echo $user4 -> getName() . '<br>';
echo $user4 -> getAge() . '<br>';
echo $user4 -> getSalary() . '<br>';
echo $user4 -> getExperience() . '<br>';
echo $user4 -> getCategory() . '<br>';
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
div {
color: yellow;
background: black;
margin-right: 30px;
padding: 5px;
}
</style>
</head>
<body>
</body>
</html>