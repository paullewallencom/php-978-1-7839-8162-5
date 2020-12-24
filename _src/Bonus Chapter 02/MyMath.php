<?php
	class MyMath{
		public $a=0;
		public $b=0;

		public function __construct($a, $b){
			$this->a = $a;
			$this->b = $b;
		}

		public function add(){
			return $this->a + $this->b."\n";
		}

		public function __call($name, $arguments){
			return "A function with name: ".$name." does not exist\n";
		}

		public function __toString(){
			return "The values of properties a & b are ".$this->a." and ".$this->b."\n";
		}

	}

	$math = new MyMath(5,6);
	echo $math;
	echo $math->add();
	echo $math->subtract();

?>
