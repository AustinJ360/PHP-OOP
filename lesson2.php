<?php
class Dog {
	public $firstName;
	public $lastName;
	public $breed;

function __construct($title, $firstName, $lastName, $breed) {
	$this>
		firstName = $firstName;
	$this>
		lastName = $lastName;
	$this>
		breed = $breed;
}
function getName() {
	return “{$this>
	firstName}” .
	“{$this->lastName}”;
}
}