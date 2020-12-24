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

		if(!file_exists($file_name)){
			//redirect the user to a custom 404 page
			echo "File does not exist";
			return false;
		}

		require_once($file_name);
		$ct_name = ucfirst($url[0]);
		
		//for api
		if($ct_name == "api"){
			$url[1] = $this->_routeApi();
		}
		
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

	private function _routeApi(){
                $method = $_SERVER['REQUEST_METHOD'];
		$action = "";

                switch($method){
                        case "GET":
                                $action = "get";
                                break;
                        case "POST":
                                $action = "post";
                                break;
                        default:
                                $action = "";
                                break;
                }

	
		if(strlen($action)>0){
			return $action;
		}
		else{
			echo "Action is not available";
		}
	}

}
