<?php
/*
Задача:
Скопируйте мой код класса User. Самостоятельно не подсматривая в мой код реализуйте описанный класс Student с методами getCourse, setCourse и addOneYear.

*/

require_once 'User.php';
require_once 'Student.php';

$user1 = new Student();


 $user1 -> setName('Fedor');
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