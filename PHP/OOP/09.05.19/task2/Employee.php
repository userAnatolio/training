<?php
class Employee
{
	private $name;
	private $surname;
	private $salary;
	
	function __construct($name, $surname, $salary)
	{
		$this -> name = $name;
		$this -> surname = $surname;
		$this -> salary = $salary;
	}
	
	function getFullName()
	{
		return $this -> name . ' ' . $this -> surname;
	}
	
	function getSalary()
	{
		return $this -> salary;
	}
	
}