<?php
class Bootstrap{

	public function __construct(){

		$url = $_GET['url'];
		$url = explode("/",$url);
	
		//should be logged
		//if a controller is not mentioned
		if(empty($url[0])){
			require_once("controllers/students.php");
			(new Students())->get();
			return false;
		}

		$file_name = "controllers/".$url[0].".php";

		//should be logged
		if(!file_exists($file_name)){
			//replace the message
			//redirect the user to a custom 404 page
			echo "File does not exist";
			return false;
		}

		require_once($file_name);
		$ct_name = ucfirst($url[0]);
		$controller = new $ct_name;

		if(empty($url[1])){
			$controller->get();
			return false;
		}
	
		$action_name  = isset($url[1]) ? $url[1]:NULL;

		if($action_name && method_exists($controller, $action_name)){
			if(empty($url[2])){
				$controller->{$url[1]}();
			}
			else{
				$controller->{$url[1]}($url[2]);
			}
		}
		else{
			//should be logged
			//replace the message
			//redirect the user to a custom 404 page		
			echo "Action does not exist";
			
		}

	}

}
