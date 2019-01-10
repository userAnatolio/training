<?php

	class User
	{
		private $name;
		private $age;
		
		public function setName($name)
		{
			$this -> name = $name;
		}
		
		public function setAge($age)
		{
			$this -> age = $age;
		}
		
		public function getName()
		{
			return $this -> name;
		}
		
		public function getAge()
		{
			return $this -> age;
		}
		
		
		
	}
?>