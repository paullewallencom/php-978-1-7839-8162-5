
	delimiter $$

	create trigger td_students before delete on students
        for each row
	begin

	    insert into audit_students(changed_by, changed_at, type, username)
		values(USER(), NOW(), "D",OLD.username);

	end$$

	delimiter ;




