<?php

class Animal
{
	function home()
	{
		echo "These animal live in the jungle";
	}

}

class Leo extends Animal
{
	function type()
	{
		echo "Thia animal is a predator";
	}	
	
}

class Monkey extends Animal
{
	function type()
	{
		echo "This animal is a primate";
	}
}


$animal = new Animal; 
$leo    = new Leo;
$monkey = new Monkey;

$animal->home();