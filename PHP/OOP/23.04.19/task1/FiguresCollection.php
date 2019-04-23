<?php
	class FiguresCollection
	{
		private $figures = [];
		
		public function addFigure(Figure $figure)
		{
			$this -> figures[] = $figure;
		}
		
		public function getFigure()
		{
			return $this -> figures;
		}
		
		public function getTotalPerimeter()
		{
			$sum = 0;
			
			foreach($this -> figures as $elem)
			{
				$sum += $elem -> getPerimeter();
			}
			return $sum;
		}
		
	}
		
?>