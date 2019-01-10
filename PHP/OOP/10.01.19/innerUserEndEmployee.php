<?php
/*
Задача 1:
Не подсматривая в мой код реализуйте такие же классы User, Employee.
*/

require_once 'User.php'; //подключил родительский класс User
require_once 'Employee.php'; // подключил класс потомок Employee

$user1 = new Employee(); // создал объект

// присвоил
$user1 -> setName('Jon');
$user1 -> setAge(23);
$user1 -> setSalary(23000);

// вывод
echo $user1 -> getName() . '<br>';
echo $user1 -> getAge() . '<br>';
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