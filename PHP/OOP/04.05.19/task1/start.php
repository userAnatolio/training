<?php

// Несколько интерфейсов

// Задача 1: 
// Сделайте так, чтобы класс Rectangle также реализовывал два интерфейса: и Figure, и Tetragon. 

// Задача 2: 
// Сделайте интерфейс Circle (круг) с методами getRadius (получить радиус) и getDiameter (получить диаметр). 

// Задача 3: 
// Сделайте так, чтобы класс Disk также реализовывал два интерфейса: и Figure, и Circle.


require_once 'Figure.php';
require_once 'Tetragon.php';
require_once 'Rectangle.php';
require_once 'Circle.php';
require_once 'Disk.php';

$rectangle = new Rectangle(2,2);
$disk = new Disk(2);

echo $rectangle -> getSquare();
echo '<br>';
echo $rectangle -> getPerimeter();
echo '<br>';
echo $disk -> getPerimeter();
echo '<br>';
echo $disk -> getRadius();
echo '<br>';
echo $disk -> getDiameter();
echo '<br>';
echo $disk -> getSquare();
