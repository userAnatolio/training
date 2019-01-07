<?php
class City
	{
		
		public $name;
		public $foundation;
		public $population;
		
		public function __construct($name, $foundation, $population)
		{
			$this -> name = $name;
			$this -> foundation = $foundation;
			$this ->population = $population;
		}
		
	}


?>