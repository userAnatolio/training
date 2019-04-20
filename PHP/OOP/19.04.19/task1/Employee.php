<?php
	class Employee extends User
	{
		private $employee;
		
		public function getEmployee()
		{
			return $this -> employee;
		}
		
		public function setEmployee($employee)
		{
			$this -> employee = $employee;
		}
		
		public function increaseRevenue($value)
		{
			$this -> employee += $value;
		}
		
		public function decreaseRevenue($value)
		{
			$this -> employee -= $value;
		}
		
	}
?>