<?php

function divide($a, $b){

	try{
		if($b <=0){
			throw new Exception("Divide by Zero Exception");
		}
		
		echo $a/$b."\n";
	}
	catch(Exception $ex){
		//a good practice to log the exceptions
		echo $ex->getMessage()."\n";
	}
	finally{
		//perform clean up operations
		echo "executed after try & catch \n";
	}
}

divide(4,0);

?>
