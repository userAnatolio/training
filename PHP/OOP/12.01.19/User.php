<?php

	class User
	{
protected $name;
private $surname;
protected $age;

public function setName($name)
{
	if(strlen($name) > 3){
	$this -> name = $name;
	}
}

public function getName()
{
	return $this -> name;
}

public function setSurname($surname)
{
	$this -> surname = $surname;
}

public function getSurname()
{
	return $this -> surname;
}

public function setAge($age)
{
	$this -> age = $age;
}

public function getAge()
{
	return $this -> age;
}
		
	}
?>