<?php
/**
* Return an array of numbers
* 
*/

function retArray(){

	return ['a', 'b', 'c', 'd'];

}

/*
* Before PHP 5.4
* Assign data to a variable
*
*/

$arr = retArray();
echo $arr[0]."\n";

/*
* With PHP 5.4 or greater
* Use the 
*
*/

echo retArray()[0]."\n";

?>
