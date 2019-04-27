<?php
	class Employee implements iEmployee
	{
		private $name;
		private $age;
		
		public function setName($name)
		{
			return $this -> name = $name;
		}
		
		public function getName()
		{
			return $this -> name;
		}
		
		public function setAge($age)
		{
			return $this -> age = $age;
			
		}
		
		public function getAge()
		{
			return $this -> age;
			
		}
		
		public function setSalary($salary)
		{
			$this -> salary = $salary;
			
		}
		
		public function getSalary()
		{
			$this -> salary;
		}
		
	}
?>