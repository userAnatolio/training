<?php
/*
Задача 14:
Скопируйте мой код классов Employee и Student и самостоятельно не подсматривая в мой код реализуйте такой же 
класс UsersCollection.
Получим полную сумму стипендий
Получим полную сумму зарплат
Получим полную сумму платежей
*/

require_once 'Student.php';
require_once 'Employee.php';
require_once 'UsersCollection.php';

$user1 = new UsersCollection();
$user1 -> add(new Student('Николай', 1000));
$user1 -> add(new Student('Катерина', 1000));
$user1 -> add(new Employee('Светлана', 10000));
$user1 -> add(new Employee('Иван', 10000));

echo $user1 -> getSalarySum();
echo '<br>';
echo $user1 -> getScholarshipSum();
echo '<br>';
echo $user1 -> getTotalSum();

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