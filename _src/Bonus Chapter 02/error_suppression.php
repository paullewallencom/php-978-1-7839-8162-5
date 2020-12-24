<?php

@include("fileDoesNotExist");

function add($a, $b){
	return $a+$b."\n";
}

echo add(5,4);

?>