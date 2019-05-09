<?php
class Rectangle implements Figure3d
{
	private $a;
	private $b;
	private $c;
	
	function __construct($a, $b, $c)
	{
		$this -> a = $a;
		$this -> b = $b;
		$this -> c = $c;
	}
	
	public function getVolume()
	{
		return $this -> a * $this -> b * $this -> c;
	}
	public function getSurfaceSquare()
	{
		return $this -> a * $this -> b;
	}
}
?>