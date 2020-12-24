<?php

//store connection parameters in constants
define("DB_HOST","localhost");
define("DB_NAME","employee_db");
define("DB_USER","root");
define("DB_PASSWORD", "admin");

//establish a database connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($connection->connect_error) {

	trigger_error("Database connection failed: "  . $conn->connect_error, E_USER_ERROR);

}

//query to retrieve employees
$sql = "select id, first_name, last_name from employees;";

//execute the query
$result = $connection->query($sql);

//check if result is valid
if($result === false){

	trigger_error("Sql Error, verify SQL", E_USER_ERROR);

}

//iterate over the result
while($row = $result->fetch_assoc()){
	
	echo $row['id']." ".$row['first_name']." ".$row['last_name']."\n";

}

?>
