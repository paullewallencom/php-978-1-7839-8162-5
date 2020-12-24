<?php
require('Animal.php');
require_once('IAnimal.php');

class Dog extends Animal implements IAnimal{
	protected $type=__CLASS__;

	public function __get($property){
		if(property_exists($this, $property)){
			return $this->$property."\n";
		}
		else{
			return $property." does not exist \n";
		}
	}

	public function run(){
		return $this->name." likes to run \n";
	}

	public function communicate(){
		return $this->name." says bow wow \n";
	}
}

$dog = new Dog("scooby");
echo $dog->type;
echo $dog->greet();
echo $dog->run();
echo $dog->communicate();

?>