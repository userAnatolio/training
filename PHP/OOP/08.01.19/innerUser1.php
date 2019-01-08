<?php
/*
Задача 1:
Не подсматривая в мой код самостоятельно реализуйте такой же класс Arr, методы которого будут вызываться в виде цепочки.

Задача 2:
Добавьте в класс Arr еще один метод append, который параметром будет принимать массив чисел и добавлять эти числа
в конец массива, хранящегося в объекте. Предполагается, что методы add и append можно будет использовать в любом порядке:
<?php
	echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();
?>

Задача 3:
Сделайте класс User, у которого будут приватные свойства surname (фамилия), name (имя) и patronymic (отчество).
Эти свойства должны задаваться с помощью соответствующих сеттеров.
Сделайте так, чтобы эти сеттеры вызывались цепочкой в любом порядке, а самым последним методом в цепочке можно
было вызвать метод getFullName, который вернет ФИО юзера (первую букву фамилии, имени и отчества).
Пример:
<?php
	echo (new User)->setName('Николай')->setPatronymic('Иванович')
		->setSurname('Петров')->getFullName(); // выведет 'ПНИ'
?>
*/

require_once 'User1.php';

$user1 = new User1();
	echo $user1 -> setName('Ivan') -> setSurname('Ivanov') -> setPatronymic('Ivanovich') -> getFullName();
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