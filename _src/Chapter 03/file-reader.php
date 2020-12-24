<?php

function fileData($fileName) {
	$file = fopen($fileName, 'r');

	while (($line = fgets($file)) !== false) {
		yield $line; 
	} 

	fclose($file); 
}

foreach (fileData('bigData.csv') as $line) {
//file operations
}

?>
