<?php
class Employee {
	private $name;
	private $surname;
	public $post;
	
	
	public function __construct($name, $surname, Post $objPost)
	{
		$this -> name = $name;
		$this -> surname = $surname;
		$this -> post = $objPost;
		
	}
	
	
	
	public function setName($name)
	{
		$this -> name = $name;
	}
	
	public function setSurname($surname)
	{
		$this -> surname = $surname;
	}
	
	public function getName()
	{
		return $this -> name;
	}
	
	public function getSurname()
	{
		return $this -> surname;
	}
	
	public function changePost(Post $objPost)
	{
		$this -> post = $objPost;
	}
	
}