<?php
class Employee {
private $name;
private $surname;
private $patronymic;
private $salary;

public function __construct($name, $surname, $patronymic, $salary)
{
$this -> name = $name;	
$this -> surname = $surname;	
$this -> patronymic = $patronymic;
$this -> salary = $salary;	
}

public function getName()
{
	return $this -> name;
}

public function getSalary()
{
	return $this -> salary . ' $';
}

public function setSalary($salary)
{
	$this -> salary = $salary;
}

}


?>