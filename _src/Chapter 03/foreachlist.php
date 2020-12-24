<?php
/**
* A list of students
*/
$students = [
		[ 
			"John",
			"Doe",
			 101			
		],
		[
			"Jane",
			"Dane",
			 102
		],
	];

//Print student data without list()
foreach($students as $student){

	echo $student[0].' '.$student[1].' '.$student[2]."\n";

}

//Print student data using list()
foreach($students as list($first_name, $last_name, $student_id)){
	
	echo $first_name.' '.$last_name.' '.$student_id."\n";

}

?>
