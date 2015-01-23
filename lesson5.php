<?php
class Person {
	public $austin;
	public $juntra;
	public $gold;
	public $male;
	public $weight;
	public $bark;
	public $meow;

function __construct($gold, $austin, $juntra, $male, $weight, $bark, $meow){
	$this->gold = $gold;
	$this->austin = $austin;
	$this->juntra = $juntra;
	$this->male = $male;
	$this->weight = $weight;
	$this->bark = $bark;
	$this->meow = $meow;
}
function getName(){
	return "This is my" . $this->austin .
	       "and last" . $this->juntra .
	       "and this is my scientific-name" . $this->gold . ".";
}

class Cat extends Person{
	function __construct($gold, $austin, $juntra, $male, $weight,$meow){
		parent::__construct($gold, $austin, $juntra, $male, $weight);
		$this->meow = $meow;
	}
	function greet(){
		return $this->meow;
	}
}
class Dog extends Person{
	function __construct($gold, $austin, $juntra, $male, $weight, $bark){
		parent::__construct($gold, $austin, $juntra, $male, $weight);
		$this->bark = $bark;
	}

	function hello(){
		return $this->bark;
	}
}

$cat = new Cat("Cat", "Mellow", "Yellow", "male", 15, true);
print"Animal 1 is a " . $cat->getName();


