<?php

	class Programmer extends Employee
	{
		private $langs = [];
		
		public function setLangs($langs)
		{
			$this -> langs[] = $langs;
		}
		
		public function getLangs()
		{
			foreach($this -> langs as $elem) {
				echo $elem . '<br>';
			}
		}
		
	}
?>