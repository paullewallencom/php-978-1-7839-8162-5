update students
set username="john.doe", password=(select SHA1("johndoe"))
where student_id=1;

update students
set username="jane.dane", password=(select SHA1("janedane"))
where student_id=2;

update students
set username="richard.roe", password=(select SHA1("richardroe"))
where student_id=3;
