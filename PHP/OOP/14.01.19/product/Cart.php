<?php
	class Cart
	{
		public $products = [];
	
	public function add($product)
	{
		// Задача 4
		// if(!$this -> exists($product)){
		// $this -> products[] = $product;
		// }
		// Задача 5
		if (!in_array($product, $this->products, false)) {
			$this -> products[] = $product;
		}
	}		
	
	public function remove($product)
	{
		$key = 0;
		foreach($this -> products as $keyElem => $elem)
		{
			if($elem -> name == $product) {
				$key = $keyElem;
				array_splice($this -> products, $key, 1);
			}
		}
	}
	
	public function getTotalCost()
	{
		$sum = 0;
		foreach($this -> products as $elem)
		{
		$sum += $elem -> price * $elem -> quantity;
		}
		return $sum;
	}
	
	public function getTotalQuantity()
	{
		$sum = 0;
		foreach($this -> products as $elem)
		{
		$sum += $elem -> quantity;
		}
		return $sum; 
	}
	
	public function getAvgPrice()
	{
		$avg = 0;
		$avg = $this -> getTotalCost() / $this -> getTotalQuantity();
		return $avg;
	}
	// Задача 5
	private function exists($obj)
{	
	foreach($this -> products as $elem){
		if($elem == $obj) return true;
	}
}
	
	}
?>