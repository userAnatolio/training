<?php
		interface iUser
	{
		public function __construct($name, $age);
		public function getName(); // получить имя
		public function getAge(); // получить возраст
	}
?>