<?php
require_once 'Employee.php';
require_once 'iProgrammer.php';
require_once 'Programmer.php';

$man1 = new Programmer('Иван', 'Иванов', 160000);
$man1 -> addLang('php');
$man1 -> addLang('JavaScript');
$man1 -> addLang('html');
$man1 -> addLang('css');

$man1 -> getInfo();