<?php
	class User1
	{
		private $name;
		private $surname;
		private $patronymic;
		
		public function setName($name)
		{
			$this -> name = $name;
			return $this;
		}
		
		public function setSurname($surname)
		{
			$this -> surname = $surname;
			return $this;
		}
		
		public function setPatronymic($patronymic)
		{
			$this -> patronymic = $patronymic;
			return $this;
		}
		
		public function getFullName()
		{
			return substr($this -> name, 0, 1) . substr($this -> surname, 0, 1) . substr($this -> patronymic, 0, 1);
		}
	}
?>