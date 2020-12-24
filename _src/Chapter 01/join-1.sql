select students.first_name, 
	students.last_name, 
	students_courses.course_id 
from students 
	inner join 
students_courses
on 
students.student_id
=
students_courses.student_id;