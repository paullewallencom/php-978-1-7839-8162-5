<?php
class Login extends Base_Controller {

        function __construct() {
                parent::__construct();
		Session::init();
		$this->loadModel('login');
        }

        function index()
        {
		$username = Session::get('username');
		$this->view->username = $username?$username:'';
		$this->view->message = isset($_GET['message'])? $_GET['message']:'';
                $this->view->render('login/index');
        }

	function runLogout()
        {
                Session::destroy();
                header('Location: ' . BASE_URL .  'login/index?message='.urlencode('logout success'));
        }

        function runLogin()
        {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$type = $_POST['IsAdmin']=='on'?'admin':'student';

                $this->model->login($username, $password,$type);
        }
}
