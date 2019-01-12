<?php
	class Employee extends User
	{
		private $salary;
		
		public function getSalary()
		{
			return $this->salary;
		}
		
		public function __construct($name, $surname, $birthday, $age, $salary)
		{
			parent::__construct($name, $surname, $birthday, $age);
			$this->salary = $salary;
		}
	}
?>