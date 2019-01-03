<?php
/*

*/
require_once 'Student.php';

$student1 = new Student('Коля');
echo '<div>';
echo $student1 -> getCourse() . '<br>';
echo $student1 -> getName() . '<br>';
echo $student1 -> addCourse() . '<br>';
echo $student1 -> getCourse() . '<br>';
echo '</div>';
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