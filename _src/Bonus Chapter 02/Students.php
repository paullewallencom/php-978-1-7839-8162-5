<?php
	class Students 
	{
		public $first_name;
		public $last_name;
		public $address;

		public function __construct($first_name
			, $last_name, $address){

			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->address = $address;
		}

		public function greeting(){
			return "Hello ".$this->first_name."\n";
		}
	
		public function getAddress(){
			return $this->address."\n";
		}
	}


	$student = new Students("John", "Doe", "3225 Woodland Park St");
	echo $student->greeting();
	echo $student->getAddress();
?>