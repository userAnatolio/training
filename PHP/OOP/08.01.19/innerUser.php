<?php
/*
Задача 1:
Пусть массив $methods будет ассоциативным с ключами method1 и method2:

<?php
	$methods = ['method1' => 'getName', 'method2' => 'getAge'];
?>
Выведите имя и возраст пользователя с помощью этого массива.
*/

require_once 'User.php';

$user = new User('Коля', 21);
	
$methods = ['method1' => 'getName', 'method2' => 'getAge'];

	echo $user->{$methods['method1']}();
	echo '<br>';
	echo $user->{$methods['method2']}();

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