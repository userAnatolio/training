<?php
class Programmer extends Employee implements iProgrammer
{
	private $langs = [];
	
	public function addLang($lang)
	{
		$this -> langs[] = $lang;

	}
	
	public function getLangs()
	{
		foreach($this -> langs as $elem)
		{
			echo $elem . ' ';
		}
		echo '<br>';
	}
	
	public function getInfo()
	{
		echo $this -> getFullName() . '<br>';
		$this -> getLangs() . '<br>';
		echo $this -> getSalary();
	}
}
?>