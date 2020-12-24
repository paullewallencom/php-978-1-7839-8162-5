<?php

	$value = 0;

	if($value>0){
		while($value < 10){
			echo $value;
			$value++;
		}
	}
	else{
		trigger_error("Value is not greater than 0");
	}

?>