<?php
	class Arr
	{
		private $numbers = [];
		
		public function add($number)
		{
			$this->numbers[] = $number;
			return $this;
		}
		
		public function getSum()
		{
			return array_sum($this->numbers);
		}
		
		public function append($arrNum)
		{
			foreach($arrNum as $elem)
			{
				array_push($this -> numbers, $elem);
			}
			return $this;
		}
	}
?>