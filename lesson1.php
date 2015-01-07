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

