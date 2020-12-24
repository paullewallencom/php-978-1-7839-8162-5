<?php
require_once('IObservable.php');

class Student implements IObservable{
	private $subscribers = array();

	public function login($user){
		//code to authenticate and login
		$this->publish($user, __METHOD__);
	}

	public function logout($user){
		//code to logout
		$this->publish($user, __METHOD__);
	}

	public function publish($user){
		foreach($this->subscribers as $subscriber){
			$subscriber->onChange($user);
		}
	}
}
?>