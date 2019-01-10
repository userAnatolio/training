<?php

	class Divider extends Employee
	{
		private $experience;
		private $category;
		
		public function setExperience($experience)
		{
			$this -> experience = $experience;
		}
		
		public function getExperience()
		{
			return $this -> experience;
		}
		
		
		public function setCategory($category)
		{
			$this -> category = $category;
		}
		
		public function getCategory()
		{
			return $this -> category;
		}
		
	}
?>