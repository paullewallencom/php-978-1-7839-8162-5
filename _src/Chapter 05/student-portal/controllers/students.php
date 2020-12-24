<?php
class Students extends Base_Controller{
	public function __construct(){
		parent::__construct();
		$this->loadModel("students");
	}
	
	public function add(){
		
		if(isset($_POST['submit'])){
			unset($_POST['submit']);
			$this->view->id = $this->model->addStudent($_POST);
		}

		$this->view->render('students/add');
	}

	public function get($id=null){
		$this->logger->info("get action been requested");
		if(isset($_GET['message']) && $_GET['message']=='importSuccess'){
			$this->view->message = 'Import is successful';
		}

		$this->view->student_data = $this->model->getStudents();
		$this->view->render('students/get');
	}

	public function import(){
		if(isset($_POST['submit'])){
			if($_FILES['file']['error']==0){
				if (($handle = fopen($_FILES['file']['tmp_name'], 'r')) !== FALSE) {
					while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
						$student['first_name'] = $data[0];
						$student['last_name'] = $data[1];
						$student['address'] = $data[2];
						$student['city'] = $data[3];
						$student['state'] = $data[4];
						$student['zip_code'] = $data[5];
						$student['username'] = $data[6];
						$student['password'] = $data[7];

						$this->model->addStudent($student);
					}
				}

				header('Location:'.BASE_URL.'students/get?message=importSuccess');
			}
		}
		
		
	}

	public function export(){
		$data = $this->model->getStudents();
		$handle = fopen(ROOT_DIR.'/assets/files/students.csv', 'w+');
		foreach ($data as $student) {
			fputcsv($handle, array($student['student_id'], $student['first_name'], $student['last_name'],$student['address'],$student['city'],$student['state']));
		}
		fclose($handle);
		
		header('Content-Disposition: attachment; filename="students.csv"');
		header('Content-Type:application/csv');

		readfile(ROOT_DIR.'/assets/files/students.csv');
		error_log('Students.csv has been successfully exported');
		//$this->logger->info("Students.csv has been successfully exported");
	}
}
?>
