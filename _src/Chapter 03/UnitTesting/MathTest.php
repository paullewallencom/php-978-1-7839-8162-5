<?php
require_once('Math.php');

class MathTest extends PHPUnit_Framework_TestCase{

	public function testAdd(){

		$this->assertEquals(5, (new Math())->add(2,3));

	}

	public function testAdd2(){
		
		$this->assertNotEquals(6, (new Math())->add(2,3));
	

	}
	
	public function testAdd3(){

		$this->assertEquals(4, (new Math())->add(2,3));

	}
}


?>
