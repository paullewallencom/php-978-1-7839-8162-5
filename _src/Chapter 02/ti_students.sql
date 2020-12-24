
	delimiter $$

	create trigger ti_students after insert on students
        for each row
	begin

	    insert into audit_students(changed_by, changed_at, type, username)
		values(USER(), NOW(), "I",NEW.username);

	end$$

	delimiter ;




