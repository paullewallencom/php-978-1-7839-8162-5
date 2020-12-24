<?php

/*
* Generator- yields a student at a time
*
*/
function students(){

	yield "John Doe";
	yield "Jane Dane";
	yield "Richard Roe";

}


foreach(students() as $student){

	echo $student."\n";

}

?>
