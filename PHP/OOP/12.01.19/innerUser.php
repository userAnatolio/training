<?php
/*
Задача 1:
Модифицируйте код класса User так, чтобы в методе setName выполнялась проверка того, что длина имени более 3-х символов.

Задача 2:

Добавьте в класс Student метод setName, в котором будет выполняться проверка того, что длина имени более 3-х символов и 
менее 10 символов.
Пусть метод setName класса Student использует метод setName своего родителя, чтобы выполнить часть проверки.
*/

require_once 'User.php';
require_once 'Student.php';

$user1 = new Student();


 $user1 -> setName('Алексис-Франсуа');
 $user1 -> setName('Пан');
 $user1 -> setSurname('Petrov');
 $user1 -> setAge(25);
 $user1 -> setcourse(1);
$user1 -> addAgeOneYear() . '<br>';
echo $user1 -> getName() . '<br>';
echo $user1 -> getSurname() . '<br>';
echo $user1 -> getAge() . '<br>';
echo $user1 -> getCourse() . '<br>';

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