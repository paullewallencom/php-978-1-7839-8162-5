<?php

class BaseClass{

	public function helloWorld(){

		echo "Hello World from Base Class \n";

	}

}

trait MyTrait{

	public function helloWorldFromTrait(){

		echo "Hello World from Trait\n";

	}

}

class SubClass extends BaseClass{

	use MyTrait;

}

$obj = new SubClass();
$obj->helloWorld();
$obj->helloWorldFromTrait();

?>
