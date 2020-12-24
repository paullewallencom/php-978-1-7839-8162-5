	delimiter $$
	create procedure p_insertStudents(
			IN pa_first_name varchar(60), IN pa_last_name varchar(60),
			IN pa_address varchar(255), IN pa_city varchar(40),
			IN pa_state char(2), IN pa_zip_code char(5),
			IN pa_username varchar(45), IN pa_password varchar(40)
		)
	begin
		-- variable to hold the number of instances of this username
		declare ct_username int default 0;
		
		-- get the count and store it in ct_username
		select count(username) into ct_username from students where username=pa_username;

		-- check if username does not exist, if not, add the student
		if ct_username < 1 then
			insert into students(first_name, last_name,
					address, city, state, zip_code,
					username, password
				) values(pa_first_name, pa_last_name,
					pa_address, pa_city,pa_state, pa_zip_code,
					pa_username, SHA1(pa_password)
				);
			select "Student has been successfully added!";
		else -- Alert the user
			select "username already exists!";
		end if;

	end$$
	delimiter ;
