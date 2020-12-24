<?php
class Auth
{
        public static function handleLogin()
        {
                Session::init();
		$isLoggedIn = isLoggedIn();
                if ($isLoggedIn == false) {
                        Session::destroy();
                        header('Location:' . BASE_URL .'login/index');
                        exit;
                }
        }

	public static function isLoggedIn(){
		return Session::get('loggedin');
	}

}
