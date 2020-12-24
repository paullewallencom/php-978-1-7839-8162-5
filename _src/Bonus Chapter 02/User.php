<?php
	class User{
		private $data = array();

		public function __set($key, $value){
			$this->data[$key] = $value;
		}

		public function __get($key){
			if(array_key_exists($key, $this->data)){
				return $this->data[$key];
			}
		}
	}

	$user = new User();
	$user->first_name = "John";
	$user->last_name = "Doe";

	echo $user->first_name.' '.$user->last_name."\n";
?>