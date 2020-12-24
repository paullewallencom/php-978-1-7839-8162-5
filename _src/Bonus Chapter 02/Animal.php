<?php

abstract class Animal{
	public $name;
	protected $type;

	public function __construct($name){
		$this->name = $name;
	}

	public function greet(){
		return "Hello ".$this->name."\n";
	}
}

?>