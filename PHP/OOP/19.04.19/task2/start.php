<?php

require_once('Figure.php');
require_once('Rectangle.php');

$rectangle = new Rectangle(2, 4);
	echo $rectangle -> getSquare();
	echo $rectangle -> getPerimeter();

?>