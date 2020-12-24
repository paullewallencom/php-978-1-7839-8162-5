select students.first_name, 
	students.last_name, 
	courses.name as course_name
from students 
	inner join 
students_courses on 
students.student_id = students_courses.student_id
	inner join
courses on
students_courses.course_id = courses.course_id
where students.student_id = 2; -- Jane Dane