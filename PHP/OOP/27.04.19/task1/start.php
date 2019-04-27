
<?php

/*
Задача 1:
Сделайте интерфейс iUser с методами getName, setName, getAge, setAge.

Задача 2:
Сделайте интерфейс iEmployee, наследующий от интерфейса iUser и добавляющий в него методы getSalary и setSalary.

Задача 3:
Сделайте класс Employee, реализующий интерфейс iEmployee.
*/

require_once('iUser.php');
require_once('iEmployee.php');
require_once('Employee.php');

$user1 = new Employee();

$user1 -> setName('Василий');
$user1 -> setAge(22);
$user1 -> setSalary(200000);

echo $user1 -> getName();
echo '<br>';
echo $user1 -> getAge();
echo '<br>';
echo $user1 -> getSalary();
?>







<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Шаблон</title>
<style>
body {
background: black;
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