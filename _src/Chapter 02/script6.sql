alter table students
add constraint `uk_students_username`
unique(`username`);