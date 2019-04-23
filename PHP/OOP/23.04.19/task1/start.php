
<?php
/*
Задача 1 : 
Не подсматривая в мой код реализуйте такой же класс FiguresCollection. 

Задача 2 : 
Добавьте в класс FiguresCollection метод getTotalPerimeter для нахождения суммарного периметра всех фигур.
*/

require_once('Figure.php');
require_once('Quadrate.php');
require_once('FiguresCollection.php');

class testClass
{
	private $a;
	
	public function __construct()
	{
		$this -> a = 2;
	}
}

$quadrate1= new Quadrate(3);
$quadrate2= new Quadrate(2);
$figure1= new FiguresCollection();

$test = new testClass();

$figure1 -> addFigure($quadrate1);
$figure1 -> addFigure($quadrate2);
//$figure1 -> addFigure($test); error

echo $figure1 -> getFigure()[0] -> getSquare();
echo '<br>';
echo $figure1 -> getTotalPerimeter();




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