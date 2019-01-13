<?php
/*
Задача 1:
Самостоятельно повторите описанные мною классы Arr и SumHelper.

Задача 2:
Создайте класс AvgHelper с методом getAvg, который параметром будет принимать массив и возвращать среднее арифметическое этого массива (сумма элементов делить на количество).

Задача 3:
Добавьте в класс AvgHelper еще и метод getMeanSquare, который параметром будет принимать массив и возвращать среднее квадратичное этого массива (квадратный корень, извлеченный из суммы квадратов элементов, деленной на количество).

Задача 4:
Добавьте в класс Arr метод getAvgMeanSum, который будет находить сумму среднего арифметического и среднего квадратичного из массива $this->nums.
*/

require_once 'AvgHelper.php';
require_once 'Arr.php';

$arr1 = new Arr;
echo $arr1 -> getAvgMeanSum([2, 2, 2]);

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