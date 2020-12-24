<?php

class StudentsCourses_Model extends Base_Model{
	public function __construct(){
		parent::__construct();
	}

	public function registerStudentCourse($student_id, $course_id){

		$stmt = $this->db->prepare("INSERT INTO students_course(student_id, course_id) VALUES(:student_id, :course_id)");
		$stmt->bindValue(":student_id",$student_id);
		$stmt->bindValue(":course_id",$course_id);
		$stmt->execute();
	}

	public function getStudentsCourses(){
		$stmt = $this->db->prepare("SELECT s.first_name, s.last_name, s.student_id, c.course_id, c.name as course_name FROM students_courses sc INNER JOIN students s ON sc.student_id=s.student_id INNER JOIN courses c ON sc.course_id=c.course_id");

		$stmt->execute();

		$studentsCourses = [];
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$studentsCourses[] = $row;
		}

		return $studentsCourses;
	}
}
