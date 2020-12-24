<?php

class Login_Model extends Base_Model{
	public function __construct(){
		parent::__construct();
	}

	public function login($username, $password,$type){
		$st = $this->db->prepare($this->buildQuery($type));
		$st->execute(array(
                        ':username' => $username,
                        ':password' => SHA1($password)
                ));
		
		$data = $st->fetch(PDO::FETCH_ASSOC);
		$hasData = $st->rowCount();

		if($hasData >0){
			$this->setSessionVariables($data, $type);
			header('Location:'. BASE_URL. 'students/get?message='.urlencode('login successful'));
		}
		else{	
			header('Location:'. BASE_URL. 'login/index?message='.urlencode('login failed'));
		}
	}

	private function buildQuery($type){
		$id = $type.'_id';
		$table = $type;
		return "SELECT $id, username FROM $table WHERE username = :username AND password = :password";
	}

	private function setSessionVariables($data, $type){
		Session::set('loggedin',true);
		Session::set('username',$data['username']);
		Session::set('role',$type);
		Session::set($type.'_id', $data[$type.'_id']);
	}
}
