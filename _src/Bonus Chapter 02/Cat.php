<?php
require('Animal.php');
require_once('IAnimal.php');

class Cat extends Animal implements IAnimal{
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
		return $this->name." hates to run \n";
	}

	public function communicate(){
		return $this->name." says meow \n";
	}
}

$cat = new Cat("cuddles");
echo $cat->type;
echo $cat->greet();
echo $cat->run();
echo $cat->communicate();

?>