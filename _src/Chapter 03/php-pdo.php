<?php

//store connection parameters in constants
define("DB_HOST","localhost");
define("DB_NAME","employee_db");
define("DB_USER","root");
define("DB_PASSWORD", "admin");

try{
	//establish a connection
	$connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);

	//set error mode
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//query to retrieve employees
	$sql = "select id, first_name, last_name from employees";

	$data = $connection->query($sql);

	foreach($data as list($id, $first_name, $last_name)){
		echo $id." ".$first_name." ".$last_name."\n";
	}

}
catch(Exception $ex){
	echo $ex->getMessage();
}
finally{
	$connection = null;
}
?>
