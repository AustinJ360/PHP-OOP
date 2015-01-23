<?php

class Dog{
	public $breed;
	public $gender;
	function __construct($breed, $gender){
		$this->breed = $breed;
		$this->gender = $gender;

	}
}
$dog = new Dog("englishbulldog", "male");
		print $dog->breed;
	?>