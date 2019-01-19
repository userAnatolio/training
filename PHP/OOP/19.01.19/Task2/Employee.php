<?php
	class Employee extends User 
	{
	public $salary;
	
	public function setSalary($salary)
	{
		$this -> salary = $salary;
	}

	}
?>