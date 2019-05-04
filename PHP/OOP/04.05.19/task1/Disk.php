<?php
class Disk implements Figure, Circle
{
	private $r;
	private $p = 3.14;
		
		public function __construct($r)
		{
			$this->r = $r;
			$this->b = $b;
		}
		
	public function getPerimeter()
	{
		return 2 * $this -> p * $this -> r;
	}
	
	function getRadius()
	{
		return $this -> getPerimeter() / (2 * $this -> p);
	}
	
	function getDiameter()
	{
		return 2 * $this -> r;
	}
		
	public function getSquare()
	{
		return $this -> p * ($this -> r * $this -> r);
	}
	
}

?>	
	
	
	
	
	
	
