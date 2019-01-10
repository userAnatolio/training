<?php

	class ArrayAvgHelper
	{
		
		public function getAvg1($arr)
		{
		return $this ->getSum($arr, 1);
		}
		
		public function getAvg2($arr)
		{
		return $this ->getSum($arr, 2);
		}

		public function getAvg3($arr)
		{
		return $this ->getSum($arr, 3);
		}

		public function getAvg4($arr)
		{
		return $this -> getSum($arr, 4);
		}
		
		private function getSum($arr, $power)
		{
		$arrSum = 0;
		foreach($arr as $elem){
		$arrSum += pow($elem, $power);
		}
		return $arrSum;
		}
		
		
		private function calcSqrt($num, $power)
		{
			$sqrtNum = 0;
		$sqrtNum = sqrt($num, $power);
		return sqrtNum;
		}

	}
?>