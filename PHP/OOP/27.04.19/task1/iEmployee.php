<?php
	interface iEmployee extends iUser
	{
		public function setSalary($salary);
		public function getSalary();
	}
?>