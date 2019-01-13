<?php
	class AvgHelper
	{
		public function getAvg($arr)
		{
			$sum = 0;
			foreach($arr as $elem)
			{
				$sum += $elem;
			}
			return $sum / count($arr);
		
		}
		
		public function getMeanSquare($arr)
		{
			$sum = 0;
			foreach($arr as $elem)
			{
				$sum += pow($elem, 2);
			}
			return sqrt($sum);
		}
	}
?>