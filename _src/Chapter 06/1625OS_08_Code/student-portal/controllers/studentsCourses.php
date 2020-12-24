<?php
class StudentsCourses extends Base_Controller{
	public function __construct(){
		parent::__construct();
		$this->loadModel("studentsCourses");
	}
	
	public function register(){

                if(isset($_POST['submit'])){
                        unset($_POST['submit']);
                        $student_id = $_POST['student_id'];
                        $course_id = $_POST['course_id'];
                        $this->view->id = $this->model->registerStudentCourse($student_id, $course_id);
                }

                $role = Session::get('role');

                if($role == 'student'){
                        $this->view->student_id = Session::get('student_id');
                }

                $this->view->role = $role?$role:'';
                $this->view->render('studentsCourses/register');
        }
	
	public function get(){
		$this->view->studentsCourses_data = $this->model->getStudentsCourses();
		$this->view->render('studentsCourses/get');
	}

}

