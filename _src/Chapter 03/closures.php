<?php
/*
* Student class
*
*/
class Student{
	private $name = "John Doe";	

	function getName(){
		return function(){

			//$this is not available
			//inside closures
			return $this->name;
		};
	}
	
}

$student = new Student();
$name = $student->getName();

echo $name()."\n";

?>
