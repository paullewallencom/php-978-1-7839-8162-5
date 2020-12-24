<?php

class DatabaseResult extends PHPUnit_Framework_TestCase{

	private $connection;

	public function setUp(){
		//set up
		$this->connection = new PDO("mysql:host=localhost;dbname=employee_db", "root", "admin");

		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}

	public function testData(){

		$data = $this->connection->query("select count(*) as ct from employees where first_name = 'John';")->fetchObject();

		$this->assertEquals(1, $data->ct);

	}

	public function tearDown(){
		//clean up
		$this->connection = null;
	}
}

?>
