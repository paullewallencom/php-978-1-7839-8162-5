<?php
class Courses extends Base_Controller{
	public function __construct(){
		parent::__construct();
		$this->loadModel("courses");
	}
	
	public function add(){
		
		if(isset($_POST['submit'])){
			unset($_POST['submit']);
			$this->view->id = $this->model->addCourse($_POST);
		}

		$this->view->render('courses/add');
	}

	public function get($id=null){
		$this->view->course_data = $this->model->getCourses();
		$this->view->render('courses/get');
	}

}
?>
