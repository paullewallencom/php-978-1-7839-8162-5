

	-- Change the default delimiter
	delimiter $$

	create procedure p_helloWorld()
	begin
		select "Hello World!";
	end$$

	-- Reset the delimiter
	delimiter ;






