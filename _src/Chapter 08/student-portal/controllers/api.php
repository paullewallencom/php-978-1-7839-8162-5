<?php

class Api extends Base_Controller{
	public $name;
	public $xml;

	public function __construct(){
		$this->name = explode("/",$_REQUEST["url"])[1];
	}

	public function get(){
		$method = "";
		$this->loadModel($this->name);

		switch($this->name){
			case "students":
				$method = "getStudents";
				break;
			case "courses":
				$method = "getCourses";
				break;
			default:
				break;
		}

		if(strlen($method)>0){
			$data = $this->model->$method();
	
			if(is_array($data) && count($data) >0){
				#$this->_generateXML($this->name,$data);
				$this->_generateJSON($this->name,$data);
			}			
		}

	}

	private function _generateXML($root, $data){
		$this->xml = new SimpleXMLElement("<$root/>");

		foreach($data as $key=>$value){
			$this->_generateXMLChild(substr($root, 0, -1), $value);
		}

		header("HTTP/1.1 200 OK");
		header("Content-Type: application/xml");
		echo $this->xml->asXML();
	}

	private function _generateXMLChild($type ,$item){

		$child = $this->xml->addChild($type);
		
		foreach($item as $key => $value){
			$child->addChild($key, $value);
		}
		
	}

	private function _generateJSON($root, $data){
		header("HTTP/1.1 200 OK");
		header("Content-Type: application/json");
		echo json_encode(array($root=>$data));
	}

	public function post(){
		$method = "";
		$this->loadModel($this->name);

		switch($this->name){
			case "students":
				$method = "addStudent";
				break;
			case "courses":
				$method = "addCourse";
				break;
			default:
				break;
		}

		if(strlen($method)){
			$this->model->$method($_POST);
		}
	}


}

