<?php

	class Student extends User
	{
		private $course;
		
		public function setcourse($course)
		{
			$this -> course = $course;
		}
		
		public function getCourse()
		{
			return $this -> course;
		}
		
	}
?>