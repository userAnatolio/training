<?php
	class User
	{
		private $name;
		private $surname;
		private $birthday;
		private $age;

		public function __construct($name, $surname, $birthday)
		{
			$this->name = $name;
			$this->age = $this -> calculateAge($birthday);
			$this->surname = $surname;
			$this->birthday = $birthday;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getSurname()
		{
			return $this->surname;
		}
		
		public function getAge()
		{
			return $this->age;
		}
		
		public function getBirthday()
		{
			return $this->birthday;
		}
		
		private function calculateAge($dataBirthday)
		{
			$year = date('Y');
			$arrStr = explode('.', $dataBirthday);
			$result1 = date('Y', mktime(0, 0, 0, $arrStr[1], $arrStr[0], $arrStr[2]));
			$result2 = date('Y', mktime(0, 0, 0, $arrStr[1], $arrStr[0], $year));
			$age = $result2 - $result1;
			if(time() < mktime(0, 0, 0, $arrStr[1], $arrStr[0], $year))
				$age -= 1;
			return $age;
		}
	}
?>