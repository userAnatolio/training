<?php
/*

*/
require_once 'City.php';

$cityArr = [
new City('Москва', 12500000),
new City('Таганрог', 350000),
new City('Ростов-на-Дону', 1130000),
new City('Воронеж', 1058000),
new City('Сальск', 58179)
];

echo '<br>';	

foreach($cityArr as $elem) {
	echo '<div class="city">';
echo 'город ' . $elem -> getName(name) . ', население ' . $elem -> getPopulation() . '<br>';
echo '</div>';
}

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
.city {
color: yellow;
background: black;
}
</style>
</head>
<body>
</body>
</html>