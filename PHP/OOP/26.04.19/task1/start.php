
<?php

/*
Задача 1: 
Сделайте интерфейс iUser, который будет описывать юзера. 
Предполагается, что у юзера будет имя и возраст и эти поля будут передаваться параметрами конструктора. 
Пусть ваш интерфейс также задает то, что у юзера будут геттеры (но не сеттеры) для имени и возраста. 

Задача 2 : 
Сделайте класс User, реализующий интерфейс iUser.



*/

require_once('iUser.php');
require_once('User.php');

$user1 = new User('Николай', 21);

echo $user1 -> getName();
echo '<br>';
echo $user1 -> getAge();
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