create table audit_students(
	audit_id int not null auto_increment,
	changed_by varchar(30),
	changed_at datetime,
	type char(1),
	username varchar(45),
	primary key(audit_id)
);
