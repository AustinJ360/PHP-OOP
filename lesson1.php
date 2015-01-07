<?php
class Cat {

    public $firstname = “default firstname”;
 	public $lastname = “default lastname”;
 	public $gender = “male”;
 	public $price = 0;

function getName(){
	return "{$this->firstname}" .
	"{this->lastname}";
}
}

$cat1 = new Cat();
$cat1->firstname = "Tom";
$cat1->lastname = "Baret";
print "The Cat's name is {$cat1->getName()}.";

//The Cat's name is Tom Baret 

class Bat {

    public $firstname = “default firstname”;
 	public $lastname = “default lastname”;
 	public $gender = “male”;
 	public $price = 0;

function getName(){
	return "{$this->firstname}" .
	"{this->lastname}";
}
}

$bat1 = new Bat();
$bat1->firstname = "Bat";
$bat1->lastname = "Man";
print "The Bat's name is {$Bat1->getName()}.";

//the Bat's name is Bat Man

class Person {

    public $firstname = “default firstname”;
 	public $lastname = “default lastname”;
 	public $gender = “male”;
 	public $price = 0;

function getName(){
	return "{$this->firstname}" .
	"{this->lastname}";
}
}

$person1 = new Person();
$person1->firstname = "Iron";
$person1->lastname = "Man";
print "The Person's name is {$person1->getName()}.";


//the Person's name is Iron Man
