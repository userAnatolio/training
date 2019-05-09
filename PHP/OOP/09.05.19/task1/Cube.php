<?php
class Cube implements Figure3d
{
	private $a;
	function __construct($a)
	{
		$this -> a = $a;
	}
	
	public function getVolume()
	{
		return $this -> a * $this -> a * $this -> a;
	}
	public function getSurfaceSquare()
	{
		return $this -> a * $this -> a;
	}
}
?>