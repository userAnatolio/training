<?php
class Quadrate implements Figure
{
	private $a;
	
	public function __construct($a)
	{
		$this -> a = $a;
	}
	
	public function getSquare()
		{
			return $this -> a * $this -> a;
		}
		
	public function getPerimeter()
		{
			return 2 * ($this->a + $this->a);
		}
	
}

?>
