<?php

class exampleTest extends PHPUnit_Framework_TestCase{

	public function testTrue(){
	
		$this->assertTrue(true);

	}

	public function testCount(){
		$array = [1,2,3,4];

		$this->assertCount(4, $array);

	}
}

?>
