select * from courses; --get a list of all courses

select student_id from students_courses
where course_id=1 limit 1;

select first_name, last_name from students
where student_id=(select student_id from students_courses
where course_id=1 limit 1);