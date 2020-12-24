<?php
/*
* Students class
*
*/
class Students{
	private $studentIds;
	
	function __construct(){

		$this->studentIds = range(1, 500);

	}

	function getRandomStudent(){

		return rand(min($this->studentIds), max($this->studentIds));

	}
	
}

//Before PHP 5.4
$student = new Students();
echo $student->getRandomStudent()."\n";


//Using PHP 5.4 or greater
echo (new Students())->getRandomStudent()."\n";

?>
