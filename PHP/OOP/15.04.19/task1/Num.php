<?php
class Num
	{
		private static $num1 = 2;
		private static $num2 = 3;
		private static $pI = 3.14;
		
		public function getSum()
		{
			return self::$num1 + self::$num2;
		}			
		
		public function Geometry($radius)
		{
			return (4 / 3) * self::$pI * pow($radius, 3);
		}
	}
