
	delimiter $$

	create trigger tu_students after update on students
        for each row
	begin

	    insert into audit_students(changed_by, changed_at, type, username)
		values(USER(), NOW(), "U",NEW.username);

	end$$

	delimiter ;




