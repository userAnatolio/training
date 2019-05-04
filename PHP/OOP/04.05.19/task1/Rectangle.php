<?php
	class Rectangle implements Figure, Tetragon
	{
		private $a;
		private $b;
		
		public function __construct($a,$b)
		{
			$this->a = $a;
			$this->b = $b;
		}
		
		public function getA()
		{
			return $this->a;
		}
		
		public function getB()
		{
			return $this->b;
		}
		
		public function getC()
		{
			return $this->a;
		}
		
		public function getD()
		{
			return $this->b;
		}
		
		public function getSquare()
		{
			return $this->a * $this->b;
		}
		
		public function getPerimeter()
		{
			return 2 * ($this->a + $this->b);
		}
	}
?>