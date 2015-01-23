<?php
class Animal {
		public $Austin;
		public $Juntra;
		public $Gold;
		public $Male;
		public $weight;
		public $bark; 
		public $meow;
		function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow) {
				$this->scientificName = $scientificName;
				$this->firstName = $firstName;
				$this->lastName = $lastName;
				$this->gender = $gender;
				$this->weight = $weight;
				$this->bark = $bark;
				$this->meow = $meow;
}
function getName() {
return "This is my " . $this->firstName .
" and last " . $this->lastName;
}
}
class Cat extends Animal {
function greet() {
return $this->meow;
}
}
class Dog extends Animal {
function hello() {
return $this->bark;
}
}
$cat = new Cat("Cat", "Mellow", "Yellow", "Male", 15);
print "Animal 1 is a " . $cat->getName();

$dog = new Dog("Dog", "Playful", "Brown", "Female", 17);
print "Animal 2 is a " . $dog->getName();
class Animal {
		public $Austin;
		public $Juntra;
		public $Gold;
		public $Male;
		public $weight;
		public $bark; 
		public $meow;
		function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow) {
				$this->scientificName = $scientificName;
				$this->firstName = $firstName;
				$this->lastName = $lastName;
				$this->gender = $gender;
				$this->weight = $weight;
				$this->bark = $bark;
				$this->meow = $meow;
}