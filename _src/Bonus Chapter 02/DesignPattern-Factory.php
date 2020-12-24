<?php
	class Car{
		private $make;
		private $model;

		public function __construct($make, $model){
			$this->make = $make;
			$this->model = $model;
		}
		public function __toString(){
			return "The make is ".$this->make." and the model is ".$this->model." \n";
		}
	}

	class CarFactory{
		public static function create($make, $model){
			return new Car($make, $model);
		}
	}
	$car = CarFactory::create("Audi", "Q5");
	echo $car;
?>