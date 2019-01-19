<?php
	class UsersCollection 
	{
		private $employees = [];
		private $students = [];
		
		public function add($arr)
		{
			if($arr instanceof Employee) {
				$this -> employees[] = $arr;
			}
			if($arr instanceof Student) {
				$this -> students[] = $arr;
			}
		}
		public function getSalarySum()
		{
			$sum = 0;
			foreach($this -> employees as $elem){
				$sum += $elem -> getSalary();
			}
			return $sum;
		}
		
		public function getScholarshipSum()
		{
			$sum = 0;
			foreach($this -> students as $elem){
				$sum += $elem -> getScholarship();
			}
			return $sum;
		}
		
		public function getTotalSum()
		{
			return $this -> getSalarySum() + $this -> getScholarshipSum();
		}

	}
?>