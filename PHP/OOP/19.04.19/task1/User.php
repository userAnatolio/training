<?php
	abstract class User
	{
		private $name;
		
		public function getName()
		{
			return $this -> name;
		}
		
		public function setName($name)
		{
			$this -> name = $name;
		}
		
		abstract public function increaseRevenue($value);
		abstract public function decreaseRevenue($value);
		
	}
?>