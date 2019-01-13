<?php
	class Arr
	{
		private $nums = [];
		public $avgHelper;
		
		public function __construct()
		{
		$this -> avgHelper = new AvgHelper;
		}
		
		public function getAvgMeanSum($arr)
		{
			return $this -> avgHelper -> getAvg($arr) + $this -> avgHelper -> getMeanSquare($arr);
		}
	}
?>