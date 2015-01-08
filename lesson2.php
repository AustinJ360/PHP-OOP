<?php
//---EXAMPLE 1
class Person {
	public $firstName = "Austin";
	public $lastName = "Juntra";
	public $gender = "Male";

class Cat {
	public $firstName = "Tom";
	public $lastName = "Baret";
	public $gender = "Male";

class Bat {
	public $firstName = "Bat";
	public $lastName = "Man";
	public $gender = "Male";

//---EXAMPLE 2

function __construct($title, $firstName, $lastName, $gender) {
	$this>
		firstName = $firstName;
	$this>
		lastName = $lastName;
	$this>
		gender = $gender;
}

function __construct($title, $firstName, $lastName, $gender) {
	$this>
		firstName = $firstName;
	$this>
		lastName = $lastName;
	$this>
		gender = $gender;
}
function __construct($title, $firstName, $lastName, $gender) {
	$this>
		firstName = $firstName;
	$this>
		lastName = $lastName;
	$this>
		gender = $gender;
}

//---EXAMPLE 3
function getName() {
	return “{$this->firstName}” .
	“{$this->lastName}”;
}
}

function getName() {
	return “{$this->firstName}” .
	“{$this->lastName}”;
}
}

function getName() {
	return “{$this->firstName}” .
	“{$this->lastName}”;
}
}

function getName() {
	return “{$this->firstName}” .
	“{$this->lastName}”;
}
}

//---EXAMPLE 4

$Cat1 = new Cat(“To”, “Bart”, “Female”);
print “Cat 1: {$Cat1->getName()}\n;

$Bat1 = new Bat(“Kyle”, “Floral”, “Male”);
print “Bat 1: {$Bat1->getName()}\n;

$Person1 = new Person(“Austin”, “Juntra”, “Male”);
print “Person 1: {$Person1->getName()}\n;
